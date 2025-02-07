<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{

    public function main()
    {
        return view('main');
    }

    // Mostrar una lista paginada de libros
    public function index(Request $request)
    {
        return response()->json([
            'books' => Book::orderBy('title')->paginate(9),
            'user' => Auth::user()
        ]);
    }

    // Mostrar todos los libros (sin paginación)
    public function index1()
    {
        return response()->json([
            'books' => Book::orderBy('title')->get()
        ]);
    }

    // Crear un nuevo libro

    public function store(Request $request)
    {
        $books = [];
        $message = '';
        $validator = Validator::make($request->all(), [
            'title'  => 'required|unique:books|max:100|min:2',
            'author' => 'required|max:100|min:2',
            'description' => 'required|max:1000',
        ]);

        if ($validator->passes()) {
            $message = '';
           
            $book = new Book();
            $book->title = $request->title;
            $book->author = $request->author;
            $book->description = $request->description;
            $book->rating = 0;
            $result = $book->save();

            if ($result) {
                return response()->json([
                    'result' => true,
                    'books' => Book::orderBy('title')->paginate(9),
                    'user' => Auth::user()
                ]);              } else {
                $message = 'The book has not been saved.';
            }
        } else {
            return response()->json([
            'result' => false,
            'message' => 'The book has not been saved.'
        ], 500);
        }

         }


    // Mostrar detalles de un libro específico
    public function show($id)
    {
        $book = Book::find($id);
        $message = '';
        if ($book === null) {
            $message = 'Book not found.';
        }

        return response()->json([
            'message' => $message,
            'book' => $book
        ]);
    }

    // Actualizar la información de un libro
    public function update(Request $request, $id)
    {
        $message = '';
        $book = Book::find($id);
        $books = [];
        $result = false;

        if ($book != null) {
            $validator = Validator::make($request->all(), [
                'title'  => 'required|max:100|min:2|unique:books,title,' . $book->id,
                'author' => 'required|max:100|min:2',
                'description' => 'required|max:1000',
                'image' => 'nullable|url',  // Validación de imagen opcional
                'rating' => 'nullable|numeric|min:0|max:5'
            ]);

            if ($validator->passes()) {
                $result = $book->modify($request);
                if ($result) {
                    $books = Book::orderBy('title')->paginate(10)->setPath(url('books'));
                } else {
                    $message = 'The book has not been updated.';
                }
            } else {
                $message = $validator->getMessageBag();
            }
        } else {
            $message = 'Book not found';
        }

        return response()->json(['result' => $result, 'message' => $message, 'books' => $books]);
    }

    // Eliminar un libro
    public function destroy(Request $request, $id)
    {
        $message = '';
        $books = [];
        $book = Book::find($id);
        $result = false;

        if ($book != null) {
            try {
                $result = $book->delete();
                $books = Book::orderBy('title')->paginate(10)->setPath(url('books'));

                if ($books->isEmpty()) {
                    $page = $books->lastPage();
                    $request->merge(['page' => $page]);
                    $books = Book::orderBy('title')->paginate(10)->setPath(url('books'));
                }
            } catch (\Exception $e) {
                $message = $e->getMessage();
            }
        } else {
            $message = 'Book not found';
        }

        return response()->json([
            'message' => $message,
            'books' => $books,
            'result' => $result
        ]);
    }
}

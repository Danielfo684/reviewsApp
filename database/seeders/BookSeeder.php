<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Insertando 23 libros con el campo rating
        DB::table('books')->insert([
            [
                'title' => 'El Principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un niño que viaja por el universo encuentra diversas personas en su camino.',
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cien Años de Soledad',
                'author' => 'Gabriel García Márquez',
                'description' => 'Una saga familiar en el ficticio pueblo de Macondo.',
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'Una distopía que describe un régimen totalitario.',
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'La Sombra del Viento',
                'author' => 'Carlos Ruiz Zafón',
                'description' => 'Un joven descubre un libro olvidado en un cementerio de libros y desvela secretos de su autor.',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'description' => 'En un futuro donde los libros están prohibidos, un bombero se rebela contra el sistema.',
                'rating' => 4.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Orgullo y Prejuicio',
                'author' => 'Jane Austen',
                'description' => 'Una historia de amor y malentendidos entre Elizabeth Bennet y el arrogante Mr. Darcy.',
                'rating' => 4.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Don Quijote de la Mancha',
                'author' => 'Miguel de Cervantes',
                'description' => 'La famosa historia de un caballero loco y su fiel escudero Sancho Panza.',
                'rating' => 4.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Matar a un Ruiseñor',
                'author' => 'Harper Lee',
                'description' => 'Un relato sobre la lucha por la justicia y la igualdad racial en el sur de los Estados Unidos.',
                'rating' => 4.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'La Odisea',
                'author' => 'Homero',
                'description' => 'Las aventuras de Odiseo mientras intenta regresar a casa tras la Guerra de Troya.',
                'rating' => 4.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'El Gran Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'La historia de un hombre misterioso y su obsesión por una mujer en el contexto de los años 20.',
                'rating' => 4.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'El Hobbit',
                'author' => 'J.R.R. Tolkien',
                'description' => 'Bilbo Bolsón se embarca en una aventura para recuperar un tesoro robado por un dragón.',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ulises',
                'author' => 'James Joyce',
                'description' => 'Una obra moderna que narra las aventuras de Leopold Bloom durante un solo día en Dublín.',
                'rating' => 3.9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Rayuela',
                'author' => 'Julio Cortázar',
                'description' => 'Una novela experimental que permite ser leída de manera no lineal.',
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Los Miserables',
                'author' => 'Victor Hugo',
                'description' => 'Una historia épica sobre la lucha de un hombre por redimirse en la Francia del siglo XIX.',
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'El Nombre de la Rosa',
                'author' => 'Umberto Eco',
                'description' => 'Un monje franciscano investiga misteriosos asesinatos en una abadía medieval.',
                'rating' => 4.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'El Código Da Vinci',
                'author' => 'Dan Brown',
                'description' => 'Un thriller de misterio sobre un asesinato en el Museo del Louvre y una conspiración secreta.',
                'rating' => 4.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Los Pilares de la Tierra',
                'author' => 'Ken Follett',
                'description' => 'Una saga histórica sobre la construcción de una catedral en la Edad Media.',
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter y la Piedra Filosofal',
                'author' => 'J.K. Rowling',
                'description' => 'Un niño descubre que es un mago y asiste a un colegio de magia donde vive grandes aventuras.',
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cumbres Borrascosas',
                'author' => 'Emily Brontë',
                'description' => 'Una historia de amor y venganza entre Heathcliff y Catherine en un páramo desolado.',
                'rating' => 4.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'El Alquimista',
                'author' => 'Paulo Coelho',
                'description' => 'Un joven pastor emprende un viaje en busca de un tesoro y descubre la importancia de seguir sus sueños.',
                'rating' => 4.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'El Retrato de Dorian Gray',
                'author' => 'Oscar Wilde',
                'description' => 'La historia de un hombre cuya belleza permanece intacta mientras su retrato envejece y refleja sus pecados.',
                'rating' => 4.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'La Casa de los Espíritus',
                'author' => 'Isabel Allende',
                'description' => 'Una saga familiar que abarca varias generaciones en Chile, con toques de realismo mágico.',
                'rating' => 4.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

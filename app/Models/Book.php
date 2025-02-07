<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = ['title', 'author', 'description', 'image', 'rating'];

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_books')->withPivot('isRead');
    }
    function store() {
        try{
            $result = $this->save();
        } catch(\Exception $e) {
            $result = false;
            
        }
        return $result;
    }

    function modify($request) {
        $result = false;
        try {
            $result = $this->update($request->all());
        } catch(\Exception $e) {
        }
        return $result;
    }

    static function change($request){
        $product = new Book($request->all());
        return $product->store();
    }
}

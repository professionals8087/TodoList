<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function todo()
    {
        return $this->hasMany(Todo::class);
    }

    public static function getAll()
    {
        return self::query()->get()->all();
    }

    public static function getID($id)
    {
        return self::query()->where('id', $id)->first();
    }
}

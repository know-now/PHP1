<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Song extends Model
{
    use HasFactory;

    // By default, Laravel assume the table name is 'songs'
    // If you don't use this naming convention :  protected $table = 'song_table';

    // By default, it assumes the primary key is named 'id'
    // protected $primaryKey = 'myprimarykey';

    // If you are not using timestamps feature (created_at / updated_at)
    public $timestamps = false;
    protected $fillable = ['title', 'release_date', 'poster', 'artist_id', 'categ_id'];


    // Accessors & Mutators
    public function title(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtolower($value)
        );
    }
}

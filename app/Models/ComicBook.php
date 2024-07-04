<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComicBook extends Model
{

    // Specifico il nome della tabella
    protected $table = 'comicbooks';

    use HasFactory;
}

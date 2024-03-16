<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $connection = 'pgsql_no_prefix';

//    /**
//     * The table associated with the model.
//     *
//     * @var string
//     */
//
//    protected $dbPrefixOveride = '';
//    protected $table = 'movies';
//    protected $connection = 'pqsql'
}

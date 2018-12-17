<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model {

    protected $connection = 'mongoprueba';
    protected $table = 'pruebas';

    protected $fillable = [
        'title', 'body'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
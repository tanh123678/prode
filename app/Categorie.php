<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id','name','parent_id', 'thumbnail', 'slug', 'description'];}

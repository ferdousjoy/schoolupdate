<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyselfModel extends Model
{
    protected $fillable = ['title','subhead','about','detail','pic'];
}

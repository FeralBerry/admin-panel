<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;
    protected $fillble = [
      'title',
      'code',
      'symbol_left',
      'symbol_right',
      'value',
      'base',
    ];
    protected $guarded = [
        '_token',
    ];
}

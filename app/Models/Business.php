<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    public $fillable = [
      'name',
      'bio',
      'address',
      'est-delivery',
      'iban',
    ];
}

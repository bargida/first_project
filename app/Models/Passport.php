<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;
    protected $fillable = [
        'seriya',
        'number',
        'expire_date',
      ];
      public function students(){
        return $this->hasMany(Student::class) ;
      }

}

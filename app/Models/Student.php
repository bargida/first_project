<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'regions_id',
        'passports_id',
        'groups_id',
        'fullName',
        'year',
        'photo',
      ];
      public function region(){
        return $this->belongsTo(Region::class) ;
      }

      public function group(){
        return $this->belongsTo(Group::class) ;
      }

      public function passport(){
        return $this->belongsTo(Passport::class) ;
      }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

   /**
    * The roles that belong to the User
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function users()
   {
       return $this->belongsToMany('App\Models\User');
   }
}

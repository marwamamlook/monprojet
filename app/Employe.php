<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//  model Employe
class Employe extends Model
{
    //
    protected $primaryKey = 'cin';
    //une autre fonction pour cet model
    public function user(){
        return $this->belongsTo(User::class); // Employe appartient à un seul utilisateur

    }
}

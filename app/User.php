<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// C'est le model nommé User
// L'emplcaement de ce fichier namespace App;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //  ajouter l'attribut grade dans cette liste afin de l'accéder
    protected $fillable = [
        'name', 'email', 'password', 'grade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function conge(){
        // the name the function like the name of the table that this model has a relatio with it
        return $this->hasMany(Conge::class); // This user model has one Conge okay ok good
        // $this => means this model (User)
        // hasOne is predefined function created by laravel that allow us to make a relation of type one to one
        // Conge::class that means the model or the name of model that this model user has a relation with it
    }
    public function employe(){
        return $this->hasOne(Employe::class);
    }
}

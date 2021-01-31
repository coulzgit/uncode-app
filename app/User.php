<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

/**
 * @property integer $id
 * @property integer $account_id
 * @property string $prenom
 * @property string $nom
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $nom_role
 * @property int $role_id
 * @property boolean $account_owner
 * @property string $photo
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Account $account
 */


   

class User extends Authenticatable
{
    //use HasFactory;
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $keyType = 'integer';

    protected $fillable = ['account_id', 'user_name', 'prenom', 'nom', 'email', 'email_verified_at', 'password', 'account_owner', 'photo', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];
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

    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

}
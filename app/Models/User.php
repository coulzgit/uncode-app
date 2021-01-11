<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class User extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['account_id', 'prenom', 'nom', 'email', 'email_verified_at', 'password', 'nom_role', 'role_id', 'account_owner', 'photo', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
}

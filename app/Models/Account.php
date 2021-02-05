<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $licence_id
 * @property string $code
 * @property string $name
 * @property boolean $statut
 * @property string $app_name
 * @property string $app_logo
 * @property string $expired_at
 * @property string $login_image
 * @property string $favicon
 * @property string $contact_url
 * @property string $telephone1
 * @property string $telephone2
 * @property string $domaine_name
 * @property string $sub_domaine
 * @property string $email
 * @property boolean $with_white_mark
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Licence $licence
 * @property AccDataColumnShow[] $accDataColumnShows
 * @property DocColumnShow[] $docColumnShows
 * @property Projet[] $projets
 * @property User[] $users
 */
class Account extends Model
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
    protected $fillable = ['licence_id', 'code', 'name', 'statut', 'app_name', 'app_logo', 'expired_at', 'login_image', 'favicon', 'contact_url', 'telephone1', 'telephone2', 'domaine_name', 'sub_domaine', 'email', 'with_white_mark', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function licence()
    {
        return $this->belongsTo('App\Models\Licence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accDataColumnShows()
    {
        return $this->hasMany('App\Models\AccDataColumnShow');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docColumnShows()
    {
        return $this->hasMany('App\Models\DocColumnShow');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projets()
    {
        return $this->hasMany('App\Models\Projet');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}

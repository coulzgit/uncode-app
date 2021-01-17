<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $licence_id
 * @property string $code
 * @property boolean $statut
 * @property string $app_name
 * @property string $app_logo
 * @property string $expired_at
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['licence_id', 'code', 'statut', 'app_name', 'app_logo', 'expired_at', 'created_at', 'updated_at'];

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

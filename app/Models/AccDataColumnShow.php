<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $account_id
 * @property string $column_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Account $account
 * @property AccDataColumnShowName[] $accDataColumnShowNames
 */
class AccDataColumnShow extends Model
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
    protected $fillable = ['account_id', 'column_name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accDataColumnShowNames()
    {
        return $this->hasMany('App\Models\AccDataColumnShowName');
    }
}

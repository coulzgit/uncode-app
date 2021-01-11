<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $compagnie_id
 * @property string $acc_fields
 * @property string $created_at
 * @property string $updated_at
 * @property Compagny $compagny
 */
class CompanyGridField extends Model
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
    protected $fillable = ['compagnie_id', 'acc_fields', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compagny()
    {
        return $this->belongsTo('App\Models\Compagny', 'compagnie_id');
    }
}

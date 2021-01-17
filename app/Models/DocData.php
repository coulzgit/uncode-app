<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $doc_id
 * @property string $data_index
 * @property string $data_value
 * @property string $stamp_date
 * @property string $stamp_uid
 * @property string $created_at
 * @property string $updated_at
 * @property Doc $doc
 * @property DocDataName[] $docDataNames
 */
class DocData extends Model
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
    protected $fillable = ['doc_id', 'data_index', 'data_value', 'stamp_date', 'stamp_uid', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docDataNames()
    {
        return $this->hasMany('App\Models\DocDataName');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $projet_id
 * @property string $data_index
 * @property string $doc_id
 * @property string $data_value
 * @property string $stamp_date
 * @property string $stamp_uid
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $ID_DOC
 * @property Doc $doc
 * @property DocDataName[] $docDataNames
 */
class DataDoc extends Model
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
    protected $fillable = ['projet_id', 'data_index', 'doc_id', 'data_value', 'stamp_date', 'stamp_uid', 'created_at', 'updated_at', 'deleted_at', 'ID_DOC'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc', 'ID_DOC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docDataNames()
    {
        return $this->hasMany('App\Models\DocDataName', 'doc_data_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $doc_id
 * @property string $log_index
 * @property string $stamp_uid
 * @property string $stamp_date
 * @property string $log_comment
 * @property string $created_at
 * @property string $updated_at
 * @property Doc $doc
 * @property AccActionLogName[] $accActionLogNames
 */
class AccActionLog extends Model
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

    protected $fillable = ['doc_id', 'log_index', 'stamp_uid', 'stamp_date', 'log_comment', 'created_at', 'updated_at'];

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
    public function accActionLogNames()
    {
        return $this->hasMany('App\Models\AccActionLogName');
    }
}

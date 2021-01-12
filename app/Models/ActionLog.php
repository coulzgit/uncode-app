<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $log_index
 * @property string $doc_id
 * @property string $stamp_uid
 * @property string $stamp_date
 * @property string $log_comment
 * @property string $created_at
 * @property string $updated_at
 * @property integer $ID_DOC
 * @property Doc $doc
 * @property ActionLogName[] $actionLogNames
 */
class ActionLog extends Model
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
    protected $fillable = ['log_index', 'doc_id', 'stamp_uid', 'stamp_date', 'log_comment', 'created_at', 'updated_at', 'ID_DOC'];

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
    public function actionLogNames()
    {
        return $this->hasMany('App\Models\ActionLogName');
    }
}

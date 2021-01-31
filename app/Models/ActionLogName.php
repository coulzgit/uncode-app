<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $action_log_id
 * @property int $projet_id
 * @property string $log_index
 * @property string $log_description
 * @property string $default_view
 * @property string $lan_code
 * @property string $search_index
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property ActionLog $actionLog
 */
class ActionLogName extends Model
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
    protected $fillable = ['action_log_id', 'projet_id', 'log_index', 'log_description', 'default_view', 'lan_code', 'search_index', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function actionLog()
    {
        return $this->belongsTo('App\Models\ActionLog');
    }
}

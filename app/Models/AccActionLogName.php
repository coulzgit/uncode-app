<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $acc_action_log_id
 * @property string $log_description
 * @property string $default_view
 * @property string $lan_code
 * @property string $search_index
 * @property string $created_at
 * @property string $updated_at
 * @property AccActionLog $accActionLog
 */
class AccActionLogName extends Model
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

    protected $fillable = ['acc_action_log_id', 'log_description', 'default_view', 'lan_code', 'search_index', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accActionLog()
    {
        return $this->belongsTo('App\Models\AccActionLog');
    }
}

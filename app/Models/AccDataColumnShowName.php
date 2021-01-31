<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $acc_data_column_show_id
 * @property string $code_lang
 * @property string $data_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property AccDataColumnShow $accDataColumnShow
 */
class AccDataColumnShowName extends Model
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
    protected $fillable = ['acc_data_column_show_id', 'code_lang', 'data_name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accDataColumnShow()
    {
        return $this->belongsTo('App\Models\AccDataColumnShow');
    }
}

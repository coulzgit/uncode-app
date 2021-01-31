<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $data_index
 * @property string $data_type
 * @property string $code_lang
 * @property string $data_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class ColumnShowName extends Model
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
    protected $fillable = ['data_index', 'data_type', 'code_lang', 'data_name', 'created_at', 'updated_at', 'deleted_at'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $acc_data_id
 * @property string $data_field
 * @property string $data_name
 * @property string $default_value
 * @property string $data_type
 * @property string $data_formula
 * @property string $data_background
 * @property string $data_format
 * @property string $listfile_index
 * @property string $lock_field
 * @property string $special_field
 * @property string $expand_index
 * @property string $dont_warn
 * @property string $comp_bind_level
 * @property string $must_field
 * @property string $max_length
 * @property string $min_length
 * @property string $layer
 * @property string $comp_no
 * @property string $use_digitgrouping
 * @property string $num_digits
 * @property string $data_width
 * @property string $created_at
 * @property string $updated_at
 * @property AccData $accData
 */
class AccDataName extends Model
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
    protected $fillable = ['acc_data_id', 'data_field', 'data_name', 'default_value', 'data_type', 'data_formula', 'data_background', 'data_format', 'listfile_index', 'lock_field', 'special_field', 'expand_index', 'dont_warn', 'comp_bind_level', 'must_field', 'max_length', 'min_length', 'layer', 'comp_no', 'use_digitgrouping', 'num_digits', 'data_width', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accData()
    {
        return $this->belongsTo('App\Models\AccData');
    }
}

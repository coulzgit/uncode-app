<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $doc_data_id
 * @property int $projet_id
 * @property string $data_index
 * @property string $data_name
 * @property string $default_value
 * @property string $data_type
 * @property string $list_index
 * @property string $order_index
 * @property string $lock_field
 * @property string $special_field
 * @property string $check_type
 * @property string $check_value_list
 * @property string $check_bind_index1
 * @property string $check_bind_index2
 * @property string $check_operator1
 * @property string $check_operator2
 * @property string $client_field
 * @property string $must_field
 * @property string $cell_format
 * @property string $max_length
 * @property string $min_length
 * @property string $comp_no
 * @property string $client_updateable
 * @property string $fs_field
 * @property string $fs_must_field
 * @property string $fs_order_index
 * @property string $fs_train_order_index
 * @property string $fs_length
 * @property string $fs_trainable
 * @property string $fs_alignment
 * @property string $fs_default_value
 * @property string $fs_data_type
 * @property string $fs_lock_field
 * @property string $use_digitgrouping
 * @property string $num_digits
 * @property string $data_width
 * @property string $fs_enablebatchlocking
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property DataDoc $dataDoc
 */
class DocDataName extends Model
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
    protected $fillable = ['doc_data_id', 'projet_id', 'data_index', 'data_name', 'default_value', 'data_type', 'list_index', 'order_index', 'lock_field', 'special_field', 'check_type', 'check_value_list', 'check_bind_index1', 'check_bind_index2', 'check_operator1', 'check_operator2', 'client_field', 'must_field', 'cell_format', 'max_length', 'min_length', 'comp_no', 'client_updateable', 'fs_field', 'fs_must_field', 'fs_order_index', 'fs_train_order_index', 'fs_length', 'fs_trainable', 'fs_alignment', 'fs_default_value', 'fs_data_type', 'fs_lock_field', 'use_digitgrouping', 'num_digits', 'data_width', 'fs_enablebatchlocking', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataDoc()
    {
        return $this->belongsTo('App\Models\DataDoc', 'doc_data_id');
    }
}

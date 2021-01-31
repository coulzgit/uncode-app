<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $ip_line_item_id
 * @property int $projet_id
 * @property string $LIP_DATA_FIELD
 * @property string $LIP_COMP_NO
 * @property string $LIP_FIELD_LABEL
 * @property string $LIP_DATA_TYPE
 * @property string $LIP_SCREEN_POSITION
 * @property string $LIP_FIELD_LENGHT
 * @property string $LIP_SHOW_IN_CLIENT
 * @property string $LIP_ORDER_ROW_DATA_FIELD
 * @property string $LIP_ORDER_ROW_DATA_FIELD_LABEL
 * @property string $LIP_ASSOSIATION_FIELD
 * @property string $LIP_RULES_FIELD
 * @property string $lip_col_order
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property IpLineItem $ipLineItem
 */
class IpLineItemParam extends Model
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
    protected $fillable = ['ip_line_item_id', 'projet_id', 'LIP_DATA_FIELD', 'LIP_COMP_NO', 'LIP_FIELD_LABEL', 'LIP_DATA_TYPE', 'LIP_SCREEN_POSITION', 'LIP_FIELD_LENGHT', 'LIP_SHOW_IN_CLIENT', 'LIP_ORDER_ROW_DATA_FIELD', 'LIP_ORDER_ROW_DATA_FIELD_LABEL', 'LIP_ASSOSIATION_FIELD', 'LIP_RULES_FIELD', 'lip_col_order', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ipLineItem()
    {
        return $this->belongsTo('App\Models\IpLineItem');
    }
}

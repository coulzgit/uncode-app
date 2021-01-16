<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $LIT_DOC_ID
 * @property string $LIT_ROWID
 * @property string $LIT_PRODUCT_CODE
 * @property string $LIT_ITEM_DESCRIPTION
 * @property string $LIT_ADD_KEY_CODE
 * @property string $LIT_DISCOUNT_PER
 * @property string $LIT_DISCOUNT_AMOUNT
 * @property string $LIT_VAT_PER
 * @property string $LIT_VAT_AMOUNT
 * @property string $LIT_QUANTITY
 * @property string $LIT_QUANTITY_UNIT
 * @property string $LIT_NET_SUM
 * @property string $LIT_GROSS_SUM
 * @property string $LIT_APRICE_NET
 * @property string $LIT_APRICE_GROSS
 * @property string $LIT_ORDER_NUMBER
 * @property string $LIT_ORDER_ROW_NUMBER
 * @property string $LIT_INFO_ITEM
 * @property string $LIT_STAMP_TIME
 * @property string $LIT_CALC_ITEM_TOTAL
 * @property string $LIT_MATCH_STATUS_INDEX
 * @property string $LIT_T1
 * @property string $LIT_T2
 * @property string $LIT_T3
 * @property string $LIT_T4
 * @property string $LIT_T5
 * @property string $LIT_T6
 * @property string $LIT_T7
 * @property string $LIT_T8
 * @property string $LIT_T9
 * @property string $LIT_T10
 * @property string $LIT_T11
 * @property string $LIT_T12
 * @property string $LIT_T13
 * @property string $LIT_T14
 * @property string $LIT_T15
 * @property string $LIT_T16
 * @property string $LIT_T17
 * @property string $LIT_T18
 * @property string $LIT_T19
 * @property string $LIT_T20
 * @property string $LIT_T21
 * @property string $LIT_T22
 * @property string $LIT_T23
 * @property string $LIT_T24
 * @property string $LIT_T25
 * @property string $LIT_T26
 * @property string $LIT_T27
 * @property string $LIT_T28
 * @property string $LIT_T29
 * @property string $LIT_T30
 * @property string $LIT_T31
 * @property string $LIT_T32
 * @property string $LIT_T33
 * @property string $LIT_T34
 * @property string $LIT_T35
 * @property string $LIT_T36
 * @property string $LIT_T37
 * @property string $LIT_T38
 * @property string $LIT_T39
 * @property string $LIT_T40
 * @property string $LIT_T41
 * @property string $LIT_T42
 * @property string $LIT_T43
 * @property string $LIT_T44
 * @property string $LIT_T45
 * @property string $LIT_T46
 * @property string $LIT_T47
 * @property string $LIT_T48
 * @property string $LIT_T49
 * @property string $LIT_T50
 * @property string $LIT_N1
 * @property string $LIT_N2
 * @property string $LIT_N3
 * @property string $LIT_N4
 * @property string $LIT_N5
 * @property string $LIT_N6
 * @property string $LIT_N7
 * @property string $LIT_N8
 * @property string $LIT_N9
 * @property string $LIT_N10
 * @property string $LIT_D1
 * @property string $LIT_D2
 * @property string $LIT_D3
 * @property string $LIT_D4
 * @property string $LIT_D5
 * @property string $LIT_D6
 * @property string $LIT_D7
 * @property string $LIT_D8
 * @property string $LIT_D9
 * @property string $LIT_D10
 * @property string $created_at
 * @property string $updated_at
 * @property integer $ID_DOC
 * @property Doc $doc
 */
class IpLineItem extends Model
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
    protected $fillable = ['LIT_DOC_ID', 'LIT_ROWID', 'LIT_PRODUCT_CODE', 'LIT_ITEM_DESCRIPTION', 'LIT_ADD_KEY_CODE', 'LIT_DISCOUNT_PER', 'LIT_DISCOUNT_AMOUNT', 'LIT_VAT_PER', 'LIT_VAT_AMOUNT', 'LIT_QUANTITY', 'LIT_QUANTITY_UNIT', 'LIT_NET_SUM', 'LIT_GROSS_SUM', 'LIT_APRICE_NET', 'LIT_APRICE_GROSS', 'LIT_ORDER_NUMBER', 'LIT_ORDER_ROW_NUMBER', 'LIT_INFO_ITEM', 'LIT_STAMP_TIME', 'LIT_CALC_ITEM_TOTAL', 'LIT_MATCH_STATUS_INDEX', 'LIT_T1', 'LIT_T2', 'LIT_T3', 'LIT_T4', 'LIT_T5', 'LIT_T6', 'LIT_T7', 'LIT_T8', 'LIT_T9', 'LIT_T10', 'LIT_T11', 'LIT_T12', 'LIT_T13', 'LIT_T14', 'LIT_T15', 'LIT_T16', 'LIT_T17', 'LIT_T18', 'LIT_T19', 'LIT_T20', 'LIT_T21', 'LIT_T22', 'LIT_T23', 'LIT_T24', 'LIT_T25', 'LIT_T26', 'LIT_T27', 'LIT_T28', 'LIT_T29', 'LIT_T30', 'LIT_T31', 'LIT_T32', 'LIT_T33', 'LIT_T34', 'LIT_T35', 'LIT_T36', 'LIT_T37', 'LIT_T38', 'LIT_T39', 'LIT_T40', 'LIT_T41', 'LIT_T42', 'LIT_T43', 'LIT_T44', 'LIT_T45', 'LIT_T46', 'LIT_T47', 'LIT_T48', 'LIT_T49', 'LIT_T50', 'LIT_N1', 'LIT_N2', 'LIT_N3', 'LIT_N4', 'LIT_N5', 'LIT_N6', 'LIT_N7', 'LIT_N8', 'LIT_N9', 'LIT_N10', 'LIT_D1', 'LIT_D2', 'LIT_D3', 'LIT_D4', 'LIT_D5', 'LIT_D6', 'LIT_D7', 'LIT_D8', 'LIT_D9', 'LIT_D10', 'created_at', 'updated_at', 'ID_DOC'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc', 'ID_DOC');
    }
}

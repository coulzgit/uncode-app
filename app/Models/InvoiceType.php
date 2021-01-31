<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $compagnie_id
 * @property int $projet_id
 * @property string $invoice_type_code
 * @property string $invoice_type_name
 * @property string $handle_code
 * @property string $layer
 * @property string $credit_memo
 * @property string $INVOICE_TYPE_CAT
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Compagny $compagny
 */
class InvoiceType extends Model
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
    protected $fillable = ['compagnie_id', 'projet_id', 'invoice_type_code', 'invoice_type_name', 'handle_code', 'layer', 'credit_memo', 'INVOICE_TYPE_CAT', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compagny()
    {
        return $this->belongsTo('App\Models\Compagny', 'compagnie_id');
    }
}

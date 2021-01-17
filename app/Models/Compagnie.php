<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $comp_index
 * @property string $comp_no
 * @property string $comp_name
 * @property string $comp_parent
 * @property string $comp_struct1
 * @property string $comp_struct2
 * @property string $comp_struct3
 * @property string $comp_struct4
 * @property string $comp_struct5
 * @property string $comp_struct6
 * @property string $comp_struct7
 * @property string $comp_struct8
 * @property string $comp_struct9
 * @property string $comp_struct10
 * @property string $comp_date1
 * @property string $comp_date2
 * @property string $comp_date3
 * @property string $valid_start
 * @property string $valid_end
 * @property string $edipartnerid
 * @property string $created_at
 * @property string $updated_at
 * @property CompanyGridField[] $companyGridFields
 * @property InvoiceType[] $invoiceTypes
 */
class Compagnie extends Model
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
    protected $fillable = ['comp_index', 'comp_no', 'comp_name', 'comp_parent', 'comp_struct1', 'comp_struct2', 'comp_struct3', 'comp_struct4', 'comp_struct5', 'comp_struct6', 'comp_struct7', 'comp_struct8', 'comp_struct9', 'comp_struct10', 'comp_date1', 'comp_date2', 'comp_date3', 'valid_start', 'valid_end', 'edipartnerid', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companyGridFields()
    {
        return $this->hasMany('App\Models\CompanyGridField', 'compagnie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceTypes()
    {
        return $this->hasMany('App\Models\InvoiceType', 'compagnie_id');
    }
}

<?php

namespace App\Imports;

use App\Models\InvoiceType;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;


use Log;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class InvoiceTypeImport implements ToModel, WithValidation,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    protected $compagnie_id;

    public function __construct($compagnie_id) {
        $this->compagnie_id = $compagnie_id;
    }

    public function model(array $row)
    {
        return new InvoiceType([
            'invoice_type_code'=>$row['invoice_type_code'],    
            'invoice_type_name'=>$row['invoice_type_name'],    
            'handle_code'=>$row['handle_code'],  
            'comp_no'=>$row['comp_no'],
            'layer'=>$row['layer'],    
            'credit_memo'=>$row['credit_memo'],  
            'invoice_type_cat'=>$row['invoice_type_cat'],  
            'compagnie_id'=>$this->compagnie_id 
        ]);
    }
   

    public function rules(): array
    {
        return [
            'invoice_type_code'=>'required|max:191',    
            'invoice_type_name'=>'nullable|max:191',    
            'handle_code'=>'nullable|max:191',  
            'comp_no'=>'nullable|max:191', 
            'layer'=>'nullable|max:191',    
            'credit_memo'=>'nullable|max:191',  
            'invoice_type_cat'=>'nullable|max:191'
        ];
    }
    
}

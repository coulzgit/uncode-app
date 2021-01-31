<?php

use Illuminate\Database\Seeder;

class ColumnShowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TABLE DOC_COLUMN_SHOW
        [
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>1,
                'code_lang'=>'en',
                'data_name'=>'Document number'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>1,
                'code_lang'=>'fr',
                'data_name'=>'Numéro document'
            ]),
            //
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>2,
                'code_lang'=>'en',
                'data_name'=>'Company number'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>2,
                'code_lang'=>'fr',
                'data_name'=>'Numéro compagnie'
            ]),

            //
         
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>3,
                'code_lang'=>'en',
                'data_name'=>'Supplier number'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>3,
                'code_lang'=>'fr',
                'data_name'=>'Numéro fournisseur'
            ]),

            //
         
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>4,
                'code_lang'=>'en',
                'data_name'=>'Invoice number'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>4,
                'code_lang'=>'fr',
                'data_name'=>'Numéro facture'
            ]),

            //
            
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>5,
                'code_lang'=>'en',
                'data_name'=>'Voucher number'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>5,
                'code_lang'=>'fr',
                'data_name'=>'Numéro bon'
            ]),

            //
            
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>6,
                'code_lang'=>'en',
                'data_name'=>'Invoice date'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>6,
                'code_lang'=>'fr',
                'data_name'=>'Date de la facture'
            ]),

            //
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>7,
                'code_lang'=>'en',
                'data_name'=>'Invoice sum'
            ]),
            App\Models\DocColumnShowName::create([
                'doc_column_show_id'=>7,
                'code_lang'=>'fr',
                'data_name'=>'Somme facture'
            ]),

        ];
        
        // TABLE ACC_DATA_COLUMN_SHOW
        [
        	//
            App\Models\AccDataColumnShowName::create([
                'acc_data_column_show_id'=>1,
                'code_lang'=>'en',
                'data_name'=>'Brutto label'
            ]),
            App\Models\AccDataColumnShowName::create([
                'acc_data_column_show_id'=>1,
                'code_lang'=>'fr',
                'data_name'=>'Brutto label'
            ]),
            //

            App\Models\AccDataColumnShowName::create([
                'acc_data_column_show_id'=>2,
                'code_lang'=>'en',
                'data_name'=>'Vat label'
            ]),
            App\Models\AccDataColumnShowName::create([
                'acc_data_column_show_id'=>2,
                'code_lang'=>'fr',
                'data_name'=>'Vat label'
            ]),
        ];
        
    }
}

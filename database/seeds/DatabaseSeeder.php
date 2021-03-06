<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\RoleHasPermission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // TABLE LICENCE
        [
            App\Models\Licence::create([
                'nom'=>'Prenium',//ID:1
                'description'=>'prenium'
            ]),
            App\Models\Licence::create([
                'nom'=>'Entreprise',//ID:2
                'description'=>'entreprise'
            ]),
            App\Models\Licence::create([
                'nom'=>'Illimite',//ID:3
                'description'=>'illimite'
            ]),
            App\Models\Licence::create([
                'nom'=>'Special',//ID:4
                'description'=>'Special'
            ])
        ];
        // TABLE ACCOUNT
        [
            App\Models\Account::create([
                'code'=>'00011',//ID:1
                'statut'=>true,
                'expired_at'=>'30-01-2021 00:00:00',
                'licence_id'=>1
            ]),
            App\Models\Account::create([
                'code'=>'00012',//ID:2
                'statut'=>true,
                'expired_at'=>'30-01-2021 00:00:00',
                'licence_id'=>1
            ]),
            App\Models\Account::create([
                'code'=>'00013',//ID:3
                'statut'=>true,
                'expired_at'=>'30-01-2021 00:00:00',
                'licence_id'=>2
            ])
        ];
        // TABLE DOC_COLUMN_SHOW
        [
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'doc_id'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'comp_no'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'supplier_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'invoice_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'voucher_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'invoice_date'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>1,
                'column_name'=>'invoice_sum'
            ]),
        ];
        [
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'doc_id'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'comp_no'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'supplier_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'invoice_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'voucher_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'invoice_date'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>2,
                'column_name'=>'invoice_sum'
            ]),
        ];
        [
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'doc_id'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'comp_no'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'supplier_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'invoice_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'voucher_num'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'invoice_date'
            ]),
            App\Models\DocColumnShow::create([
                'account_id'=>3,
                'column_name'=>'invoice_sum'
            ]),
        ];
        // TABLE ACC_DATA_COLUMN_SHOW
        [
            App\Models\AccDataColumnShow::create([
                'account_id'=>1,
                'column_name'=>'brutto'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>1,
                'column_name'=>'vat'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>1,
                'column_name'=>'t1'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>1,
                'column_name'=>'t2'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>1,
                'column_name'=>'t3'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>1,
                'column_name'=>'t4'
            ]),   
        ];
        [
            App\Models\AccDataColumnShow::create([
                'account_id'=>2,
                'column_name'=>'brutto'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>2,
                'column_name'=>'vat'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>2,
                'column_name'=>'t1'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>2,
                'column_name'=>'t2'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>2,
                'column_name'=>'t3'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>2,
                'column_name'=>'t4'
            ]),   
        ];
        [
            App\Models\AccDataColumnShow::create([
                'account_id'=>3,
                'column_name'=>'brutto'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>3,
                'column_name'=>'vat'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>3,
                'column_name'=>'t1'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>3,
                'column_name'=>'t2'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>3,
                'column_name'=>'t3'
            ]),
            App\Models\AccDataColumnShow::create([
                'account_id'=>3,
                'column_name'=>'t4'
            ]),   
        ];
        // TABLE USER
        [
            App\User::create([         
                'user_name'=>'admin',
                'prenom'=>'admin',
                'nom'=>'admin', 
                'email'=>'admin@gmail.com', 
                'password'=>'$2y$10$Ry0.9hF64KH/TABotL9.OeBLw7LevL2CrkTRRWG5mAkX8mqCASiu2',
                'account_id'=>1,
                'account_owner'=>true,
                'photo'=>'photo.jpg'
            ]),
            App\User::create([ 
                'user_name'=>'user1',        
                'prenom'=>'user1',
                'nom'=>'user1', 
                'email'=>'user1@gmail.com', 
                'password'=>'$2y$10$Ry0.9hF64KH/TABotL9.OeBLw7LevL2CrkTRRWG5mAkX8mqCASiu2',
                'account_id'=>1,
                'account_owner'=>false,
                'photo'=>'photo.jpg'
            ]),
            App\User::create([ 
                'user_name'=>'user2',        
                'prenom'=>'user2',
                'nom'=>'user2', 
                'email'=>'user2@gmail.com', 
                'password'=>'$2y$10$Ry0.9hF64KH/TABotL9.OeBLw7LevL2CrkTRRWG5mAkX8mqCASiu2',
                'account_id'=>2,
                'account_owner'=>false,
                'photo'=>'photo.jpg'
            ]),
            App\User::create([  
                'user_name'=>'user3',       
                'prenom'=>'user3',
                'nom'=>'user3', 
                'email'=>'user3@gmail.com', 
                'password'=>'$2y$10$Ry0.9hF64KH/TABotL9.OeBLw7LevL2CrkTRRWG5mAkX8mqCASiu2',
                'account_id'=>2,
                'account_owner'=>true,
                'photo'=>'photo.jpg'
            ])
        ];
        // TABLE PERMISSION
        [
            Permission::create([         
                'name'=>'role-list',//ID: 1
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'role-create',//ID: 2
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'role-edit',//ID: 3
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'role-delete',//ID: 4
                'guard_name'=>'web'
            ]),
        ];
        [
            Permission::create([         
                'name'=>'projet-list',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'projet-create',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'projet-edit',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'projet-delete',
                'guard_name'=>'web'
            ]),
        ];
        [
            Permission::create([         
                'name'=>'user-list',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'user-create',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'user-edit',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'user-delete',
                'guard_name'=>'web'
            ]),
        ];
        [
            Permission::create([         
                'name'=>'account-list',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'account-create',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'account-edit',
                'guard_name'=>'web'
            ]),
            Permission::create([         
                'name'=>'account-delete',
                'guard_name'=>'web'
            ]),
        ];
        // TABLE ROLE
        [ 
            Role::create([         
                'name'=>'Super admin',//ID: 1
                'guard_name'=>'web'
            ]),
            Role::create([         
                'name'=>'Admin',//ID: 2
                'guard_name'=>'web'
            ]),
            Role::create([         
                'name'=>'User',//ID: 3
                'guard_name'=>'web'
            ]),
            
        ];
        // TABLE ROLE_HAS_PERMISSION
        [ 
            RoleHasPermission::insert([         
                'role_id'=>1,
                'permission_id'=>1
            ]),
            RoleHasPermission::insert([         
                'role_id'=>1,
                'permission_id'=>2
            ]),
            RoleHasPermission::insert([         
                'role_id'=>1,
                'permission_id'=>3
            ]),  
        ];
        [ 
            RoleHasPermission::create([         
                'role_id'=>2,
                'permission_id'=>1
            ]),
            RoleHasPermission::create([         
                'role_id'=>2,
                'permission_id'=>3
            ]),
        ];
        // TABLE PROJET
        [
            App\Models\Projet::create([
                'account_id'=>1,
                'created_by'=>1, 
                'nom'=>'Projet1'
            ]),
            App\Models\Projet::create([
                'account_id'=>1,
                'created_by'=>1,  
                'nom'=>'Projet2'
            ]),
            App\Models\Projet::create([
                'account_id'=>1, 
                'created_by'=>2, 
                'nom'=>'Projet3'
            ]),
            App\Models\Projet::create([
                'account_id'=>1, 
                'created_by'=>1, 
                'nom'=>'Projet4'
            ]),
            App\Models\Projet::create([
                'account_id'=>2, 
                'created_by'=>1, 
                'nom'=>'Projet5'
            ]),
            App\Models\Projet::create([
                'account_id'=>2, 
                'created_by'=>1, 
                'nom'=>'Projet6'
            ])

        ];    
        // TABLE DOC
        [
            App\Models\Doc::create([
                'projet_id'=>1, 
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4', 
                'scan_date'=>'2013-05-21 00:00:00', 
                'comp_no'=>'COMPANY_CODE', 
                'doc_name'=>'NULL', 
                'doc_pages'=>'2', 
                'flow_fixed'=>'NULL', 
                'supplier_num'=>'1022676', 
                'invoice_num'=>'Dry Run post upgrade', 
                'voucher_num'=>'NULL', 
                'invoice_date'=>'2018-03-23 00:00:00', 
                'invoice_last_date'=>'2018-04-22 00:00:00', 
                'invoice_sum'=>'1200.000000', 
                'stamp_date'=>'2018-03-23 19:49:29', 
                'stamp_uid'=>'Administrateur UNCODE', 
                'status_index'=>'0', 
                'order_num'=>'NULL', 
                'last_acceptor'=>'NULL', 
                'exchange_rate'=>'1.000000', 
                'invoice_currency'=>'EUR', 
                'invoice_sum_calc'=>'1200.000000', 
                'cash_date'=>'NULL', 
                'accounting_period'=>'NULL', 
                'supplier_name'=>'CODiLOG', 
                'attrib_t1'=>'HO', 
                'attrib_t2'=>'NULL', 
                'attrib_t3'=>'NULL', 
                'attrib_t4'=>'130000091', 
                'attrib_t5'=>'V', 
                'attrib_t6'=>'Validation sans Commande/Invoice w/o PO Approval', 
                'attrib_t7'=>'Not Booked - Cancelled in SAP', 
                'attrib_n'=>'NULL', 
                'attrib_n2'=>'NULL', 
                'attrib_n3'=>'NULL', 
                'attrib_n4'=>'NULL', 
                'attrib_d'=>'NULL', 
                'attrib_d2'=>'2013-08-06 00:00:00', 
                'attrib_d3'=>'NULL', 
                'attrib_d4'=>'2013-05-21 00:00:00', 
                'bff_resource'=>'NULL', 
                'vat_sum'=>'200.000000', 
                'invoice_serial'=>'NULL', 
                'invoice_type'=>'KR', 
                'prebooked'=>'0', 
                'secondary_status'=>'NULL', 
                'entry_date'=>'2018-03-23 00:00:00', 
                'voucher_group'=>'NULL', 
                'voucher_period'=>'NULL', 
                'user_serial'=>'NULL', 
                'net_sum_calc'=>'1000.000000', 
                'net_sum'=>'1000.000000', 
                'with_comments'=>'NULL', 
                'external_status'=>'NULL', 
                'voucher_year'=>'2018', 
                'serial_year'=>'NULL', 
                'gl_date'=>'NULL', 
                'credit_memo'=>'NULL', 
                'vat_sum_calc'=>'11.210000', 
                'hold_owner'=>'NULL', 
                'lock_owner'=>'NULL', 
                'lock_date'=>'NULL', 
                'lock_index'=>'NULL', 
                'contract_num'=>'NULL', 
                'oneaction'=>'NULL', 
                'transfer_check'=>'NULL', 
                'autoflow_status_index'=>'NULL',
                'match_status_index'=>'NULL', 
                'custom_action_status'=>'NULL', 
                'preprocessing_timestamp'=>'NULL', 
                'supplier_rep_code'=>'NULL', 
                'supplier_rep_name'=>'NULL', 
                'payment_date'=>'NULL', 
                'delivery_note_number'=>'NULL', 
                'reference_person'=>'uncode', 
                'CM_REQUEST'=>'NULL', 
                'invoice_origin'=>'NULL', 
                'match_wait_until'=>'NULL', 
                'invoice_category'=>'PROFIT_CENTER_VALUE', 
                'parent_invoice_id'=>'NULL', 
                'MC_MATCH_STATUS_INDEX'=>'NULL'
            ]),
            App\Models\Doc::create([
                'projet_id'=>1, 
                'doc_id'=>'10353913A0EB4D74B64C77ABFE7C81E4', 
                'scan_date'=>'2013-05-21 00:00:00', 
                'comp_no'=>'COMPANY_CODE', 
                'doc_name'=>'NULL', 
                'doc_pages'=>'2', 
                'flow_fixed'=>'NULL', 
                'supplier_num'=>'1022676', 
                'invoice_num'=>'Dry Run post upgrade', 
                'voucher_num'=>'NULL', 
                'invoice_date'=>'2018-03-23 00:00:00', 
                'invoice_last_date'=>'2018-04-22 00:00:00', 
                'invoice_sum'=>'1200.000000', 
                'stamp_date'=>'2018-03-23 19:49:29', 
                'stamp_uid'=>'Administrateur UNCODE', 
                'status_index'=>'0', 
                'order_num'=>'NULL', 
                'last_acceptor'=>'NULL', 
                'exchange_rate'=>'1.000000', 
                'invoice_currency'=>'EUR', 
                'invoice_sum_calc'=>'1200.000000', 
                'cash_date'=>'NULL', 
                'accounting_period'=>'NULL', 
                'supplier_name'=>'CODiLOG', 
                'attrib_t1'=>'HO', 
                'attrib_t2'=>'NULL', 
                'attrib_t3'=>'NULL', 
                'attrib_t4'=>'130000091', 
                'attrib_t5'=>'V', 
                'attrib_t6'=>'Validation sans Commande/Invoice w/o PO Approval', 
                'attrib_t7'=>'Not Booked - Cancelled in SAP', 
                'attrib_n'=>'NULL', 
                'attrib_n2'=>'NULL', 
                'attrib_n3'=>'NULL', 
                'attrib_n4'=>'NULL', 
                'attrib_d'=>'NULL', 
                'attrib_d2'=>'2013-08-06 00:00:00', 
                'attrib_d3'=>'NULL', 
                'attrib_d4'=>'2013-05-21 00:00:00', 
                'bff_resource'=>'NULL', 
                'vat_sum'=>'200.000000', 
                'invoice_serial'=>'NULL', 
                'invoice_type'=>'KR', 
                'prebooked'=>'0', 
                'secondary_status'=>'NULL', 
                'entry_date'=>'2018-03-23 00:00:00', 
                'voucher_group'=>'NULL', 
                'voucher_period'=>'NULL', 
                'user_serial'=>'NULL', 
                'net_sum_calc'=>'1000.000000', 
                'net_sum'=>'1000.000000', 
                'with_comments'=>'NULL', 
                'external_status'=>'NULL', 
                'voucher_year'=>'2018', 
                'serial_year'=>'NULL', 
                'gl_date'=>'NULL', 
                'credit_memo'=>'NULL', 
                'vat_sum_calc'=>'11.210000', 
                'hold_owner'=>'NULL', 
                'lock_owner'=>'NULL', 
                'lock_date'=>'NULL', 
                'lock_index'=>'NULL', 
                'contract_num'=>'NULL', 
                'oneaction'=>'NULL', 
                'transfer_check'=>'NULL', 
                'autoflow_status_index'=>'NULL',
                'match_status_index'=>'NULL', 
                'custom_action_status'=>'NULL', 
                'preprocessing_timestamp'=>'NULL', 
                'supplier_rep_code'=>'NULL', 
                'supplier_rep_name'=>'NULL', 
                'payment_date'=>'NULL', 
                'delivery_note_number'=>'NULL', 
                'reference_person'=>'uncode', 
                'CM_REQUEST'=>'NULL', 
                'invoice_origin'=>'NULL', 
                'match_wait_until'=>'NULL', 
                'invoice_category'=>'PROFIT_CENTER_VALUE', 
                'parent_invoice_id'=>'NULL', 
                'MC_MATCH_STATUS_INDEX'=>'NULL'
            ]),
            App\Models\Doc::create([
                'projet_id'=>1, 
                'doc_id'=>'20353913A0EB4D74B64C77ABFE7C81E4', 
                'scan_date'=>'2013-05-21 00:00:00', 
                'comp_no'=>'COMPANY_CODE', 
                'doc_name'=>'NULL', 
                'doc_pages'=>'4', 
                'flow_fixed'=>'NULL', 
                'supplier_num'=>'1022676', 
                'invoice_num'=>'Dry Run post upgrade', 
                'voucher_num'=>'NULL', 
                'invoice_date'=>'2018-03-23 00:00:00', 
                'invoice_last_date'=>'2018-04-22 00:00:00', 
                'invoice_sum'=>'1200.000000', 
                'stamp_date'=>'2018-03-23 19:49:29', 
                'stamp_uid'=>'Administrateur UNCODE', 
                'status_index'=>'0', 
                'order_num'=>'NULL', 
                'last_acceptor'=>'NULL', 
                'exchange_rate'=>'1.000000', 
                'invoice_currency'=>'EUR', 
                'invoice_sum_calc'=>'1200.000000', 
                'cash_date'=>'NULL', 
                'accounting_period'=>'NULL', 
                'supplier_name'=>'CODiLOG', 
                'attrib_t1'=>'HO', 
                'attrib_t2'=>'NULL', 
                'attrib_t3'=>'NULL', 
                'attrib_t4'=>'130000091', 
                'attrib_t5'=>'V', 
                'attrib_t6'=>'Validation sans Commande/Invoice w/o PO Approval', 
                'attrib_t7'=>'Not Booked - Cancelled in SAP', 
                'attrib_n'=>'NULL', 
                'attrib_n2'=>'NULL', 
                'attrib_n3'=>'NULL', 
                'attrib_n4'=>'NULL', 
                'attrib_d'=>'NULL', 
                'attrib_d2'=>'2013-08-06 00:00:00', 
                'attrib_d3'=>'NULL', 
                'attrib_d4'=>'2013-05-21 00:00:00', 
                'bff_resource'=>'NULL', 
                'vat_sum'=>'200.000000', 
                'invoice_serial'=>'NULL', 
                'invoice_type'=>'KR', 
                'prebooked'=>'0', 
                'secondary_status'=>'NULL', 
                'entry_date'=>'2018-03-23 00:00:00', 
                'voucher_group'=>'NULL', 
                'voucher_period'=>'NULL', 
                'user_serial'=>'NULL', 
                'net_sum_calc'=>'1000.000000', 
                'net_sum'=>'1000.000000', 
                'with_comments'=>'NULL', 
                'external_status'=>'NULL', 
                'voucher_year'=>'2018', 
                'serial_year'=>'NULL', 
                'gl_date'=>'NULL', 
                'credit_memo'=>'NULL', 
                'vat_sum_calc'=>'11.210000', 
                'hold_owner'=>'NULL', 
                'lock_owner'=>'NULL', 
                'lock_date'=>'NULL', 
                'lock_index'=>'NULL', 
                'contract_num'=>'NULL', 
                'oneaction'=>'NULL', 
                'transfer_check'=>'NULL', 
                'autoflow_status_index'=>'NULL',
                'match_status_index'=>'NULL', 
                'custom_action_status'=>'NULL', 
                'preprocessing_timestamp'=>'NULL', 
                'supplier_rep_code'=>'NULL', 
                'supplier_rep_name'=>'NULL', 
                'payment_date'=>'NULL', 
                'delivery_note_number'=>'NULL', 
                'reference_person'=>'uncode', 
                'CM_REQUEST'=>'NULL', 
                'invoice_origin'=>'NULL', 
                'match_wait_until'=>'NULL', 
                'invoice_category'=>'PROFIT_CENTER_VALUE', 
                'parent_invoice_id'=>'NULL', 
                'MC_MATCH_STATUS_INDEX'=>'NULL'
            ]),
            App\Models\Doc::create([
                'projet_id'=>2, 
                'doc_id'=>'20353913A0EB4D74B64C77ABFE7C81E4', 
                'scan_date'=>'2013-05-21 00:00:00', 
                'comp_no'=>'COMPANY_CODE', 
                'doc_name'=>'NULL', 
                'doc_pages'=>'4', 
                'flow_fixed'=>'NULL', 
                'supplier_num'=>'1022676', 
                'invoice_num'=>'Dry Run post upgrade', 
                'voucher_num'=>'NULL', 
                'invoice_date'=>'2018-03-23 00:00:00', 
                'invoice_last_date'=>'2018-04-22 00:00:00', 
                'invoice_sum'=>'1200.000000', 
                'stamp_date'=>'2018-03-23 19:49:29', 
                'stamp_uid'=>'Administrateur UNCODE', 
                'status_index'=>'0', 
                'order_num'=>'NULL', 
                'last_acceptor'=>'NULL', 
                'exchange_rate'=>'1.000000', 
                'invoice_currency'=>'EUR', 
                'invoice_sum_calc'=>'1200.000000', 
                'cash_date'=>'NULL', 
                'accounting_period'=>'NULL', 
                'supplier_name'=>'CODiLOG', 
                'attrib_t1'=>'HO', 
                'attrib_t2'=>'NULL', 
                'attrib_t3'=>'NULL', 
                'attrib_t4'=>'130000091', 
                'attrib_t5'=>'V', 
                'attrib_t6'=>'Validation sans Commande/Invoice w/o PO Approval', 
                'attrib_t7'=>'Not Booked - Cancelled in SAP', 
                'attrib_n'=>'NULL', 
                'attrib_n2'=>'NULL', 
                'attrib_n3'=>'NULL', 
                'attrib_n4'=>'NULL', 
                'attrib_d'=>'NULL', 
                'attrib_d2'=>'2013-08-06 00:00:00', 
                'attrib_d3'=>'NULL', 
                'attrib_d4'=>'2013-05-21 00:00:00', 
                'bff_resource'=>'NULL', 
                'vat_sum'=>'200.000000', 
                'invoice_serial'=>'NULL', 
                'invoice_type'=>'KR', 
                'prebooked'=>'0', 
                'secondary_status'=>'NULL', 
                'entry_date'=>'2018-03-23 00:00:00', 
                'voucher_group'=>'NULL', 
                'voucher_period'=>'NULL', 
                'user_serial'=>'NULL', 
                'net_sum_calc'=>'1000.000000', 
                'net_sum'=>'1000.000000', 
                'with_comments'=>'NULL', 
                'external_status'=>'NULL', 
                'voucher_year'=>'2018', 
                'serial_year'=>'NULL', 
                'gl_date'=>'NULL', 
                'credit_memo'=>'NULL', 
                'vat_sum_calc'=>'11.210000', 
                'hold_owner'=>'NULL', 
                'lock_owner'=>'NULL', 
                'lock_date'=>'NULL', 
                'lock_index'=>'NULL', 
                'contract_num'=>'NULL', 
                'oneaction'=>'NULL', 
                'transfer_check'=>'NULL', 
                'autoflow_status_index'=>'NULL',
                'match_status_index'=>'NULL', 
                'custom_action_status'=>'NULL', 
                'preprocessing_timestamp'=>'NULL', 
                'supplier_rep_code'=>'NULL', 
                'supplier_rep_name'=>'NULL', 
                'payment_date'=>'NULL', 
                'delivery_note_number'=>'NULL', 
                'reference_person'=>'uncode', 
                'CM_REQUEST'=>'NULL', 
                'invoice_origin'=>'NULL', 
                'match_wait_until'=>'NULL', 
                'invoice_category'=>'PROFIT_CENTER_VALUE', 
                'parent_invoice_id'=>'NULL', 
                'MC_MATCH_STATUS_INDEX'=>'NULL'
            ])
        ];
        // TABLE ACTION_LOG
        [
            App\Models\ActionLog::create([
                'ID_DOC'=>1,
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4', 
                'log_index'=>'1004', 
                'stamp_uid'=>'Administrateur UNCODE', 
                'stamp_date'=>'2018-03-23 19:47:16', 
                'log_comment'=>'NULL'
            ]),
            App\Models\ActionLog::create([
                'ID_DOC'=>1,
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4',
                'log_index'=>'1005', 
                'stamp_uid'=>'Administrateur UNCODE', 
                'stamp_date'=>'2018-03-23 19:47:16', 
                'log_comment'=>'NULL'
            ]),
        ];

        // TABLE ACTION_LOG_NAME
        [
            App\Models\ActionLogName::create([
                'action_log_id'=>1, 
                'log_index'=>'1001',
                'log_description'=>'Invoice created', 
                'default_view'=>'1', 
                'lan_code'=>'EN', 
                'search_index'=>'20'

            ]),
            App\Models\ActionLogName::create([
                'action_log_id'=>1, 
                'log_index'=>'1001',
                'log_description'=>'Facture cree', 
                'default_view'=>'1', 
                'lan_code'=>'FR', 
                'search_index'=>'20'

            ])
            
        ];
        // TABLE COMPAGNIE
        [
            App\Models\Compagnie::create([//ID:1
                'comp_index'=>'1', 
                'comp_no'=>'B100', 
                'comp_name'=>'NOM SOCIETE INTERNE ', 
                'comp_parent'=>'NULL', 
                'comp_struct1'=>'BE', 
                'comp_struct2'=>'EUR',
                'comp_struct3'=>'E', 
                'comp_struct4'=>'NUMTVA', 
                'comp_struct5'=>'PVCP', 
                'comp_struct6'=>'PVCP', 
                'comp_struct7'=>'PVCP', 
                'comp_struct8'=>'ARCHIVES', 
                'comp_struct9'=>'SAP', 
                'comp_struct10'=>'DefaultSAP', 
                'comp_date1'=>'NULL', 
                'comp_date2'=>'NULL', 
                'comp_date3'=>'NULL', 
                'valid_start'=>'1/1/00 0:00', 
                'valid_end'=>'NULL', 
                'edipartnerid'=>'NULL'
            ]),
            App\Models\Compagnie::create([//ID:2
                'comp_index'=>'2', 
                'comp_no'=>'B103', 
                'comp_name'=>'NOM SOCIETE INTERNE ', 
                'comp_parent'=>'NULL', 
                'comp_struct1'=>'BE', 
                'comp_struct2'=>'EUR',
                'comp_struct3'=>'E', 
                'comp_struct4'=>'NUMTVA', 
                'comp_struct5'=>'PVCP', 
                'comp_struct6'=>'PVCP', 
                'comp_struct7'=>'PVCP', 
                'comp_struct8'=>'ARCHIVES', 
                'comp_struct9'=>'SAP', 
                'comp_struct10'=>'DefaultSAP', 
                'comp_date1'=>'NULL', 
                'comp_date2'=>'NULL', 
                'comp_date3'=>'NULL', 
                'valid_start'=>'1/1/00 0:00', 
                'valid_end'=>'NULL', 
                'edipartnerid'=>'NULL'
            ])

        ];
        // TABLE COMPANY_GRID_FIELD
        [
            App\Models\CompanyGridField::create([
                'compagnie_id'=>1, 
                'comp_no'=>'100', 
                'acc_fields'=>'n5;n6;net_sum;net_calc;t3;t85;vat_pros;vat;n3;brutto;brutto_calc;t29;n1;n7;n8;n9;n10;t40;t48;t11;n4;n2;t1;t16;t2;t17;t41;t42;t4;t15;t75;t14;t12;t72;t5;t6;t7;t43;t78;t22;t51;t30;t44;t45;t8;t10;t9;t28;t47'
            ]),
            
        ];

        // TABLE DOC_ATTACHMENT
        [
            App\Models\DocAttachment::create([
                'ID_DOC'=>1,
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4',
                'attachment_name'=>'xx', 
                'attachment_file'=>'QQG5VHNE.docx', 
                'attachment_owner'=>'Administrateur UNCODE', 
                'attachment_resource'=>'EUCCEBWAPD01.pvcp.intra\bwroot\ATTACH\2015\08\17', 
                'user_org_code'=>'NULL', 
                'resource_id'=>'NULL', 
                'attachment_encrypted'=>'0', 
                'original_file_name'=>'Ticket 3000004821.docx'
            ]),
            App\Models\DocAttachment::create([
                'ID_DOC'=>1,
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4',
                'attachment_name'=>'xx', 
                'attachment_file'=>'QQG5VHNE.docx', 
                'attachment_owner'=>'Administrateur UNCODE', 
                'attachment_resource'=>'EUCCEBWAPD01.pvcp.intra\bwroot\ATTACH\2015\08\17', 
                'user_org_code'=>'NULL', 
                'resource_id'=>'NULL', 
                'attachment_encrypted'=>'0', 
                'original_file_name'=>'Ticket 3000004822.docx'
            ]),
            
        ];

        // TABLE DATA_DOC
        [
            App\Models\DataDoc::create([
                 'ID_DOC'=>1, 
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4', 
                'data_index'=>'4',
                'data_value'=>'DATA_VALUE', 
                'stamp_date'=>'2011-12-06 10:54:35 ', 
                'stamp_uid'=>'Administrateur UNCODE '
            ]),
            App\Models\DataDoc::create([
                'ID_DOC'=>1,   
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4', 
                'data_index'=>'4',
                'data_value'=>'DATA_VALUE', 
                'stamp_date'=>'2011-12-06 10:54:35 ', 
                'stamp_uid'=>'Administrateur UNCODE '
            ]),
            App\Models\DataDoc::create([
                'ID_DOC'=>1,   
                'doc_id'=>'00353913A0EB4D74B64C77ABFE7C81E4', 
                'data_index'=>'4',
                'data_value'=>'DATA_VALUE', 
                'stamp_date'=>'2011-12-06 10:54:35 ', 
                'stamp_uid'=>'Administrateur UNCODE '
            ]),   
        ];
        // TABLE TEST
        [
            App\Models\Test::create([
                'project_id'=>1,
                'account_id'=>2,
                'name'=>'test1'
            ]),
            App\Models\Test::create([
                'project_id'=>3,
                'account_id'=>1,
                'name'=>'test2'
            ]),
            App\Models\Test::create([
                'project_id'=>1,
                'account_id'=>1,
                'name'=>'test3'
            ]),
        ];
    }
}
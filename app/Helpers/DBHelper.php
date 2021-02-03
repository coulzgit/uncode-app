<?php 
namespace App\Helpers;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\User;
use App\Models\Projet;
use App\Models\Account;
use App\Models\Doc;
use App\Models\DataDoc;
use App\Models\AccData;
use App\Models\IpLineItem;
use App\Models\IpLineItemParam;
use App\Models\ActionLog;
use App\Models\ActionLogName;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;
use App\Models\DocDataName;
use App\Models\AccDataName;
use App\Models\DocColumnShowName;
use App\Models\AccDataColumnShowName;
use Illuminate\Support\Str;
use DB;
use Auth;
use Log;

class DBHelper {
    public function __construct() {
    }
    public function getDoc($doc_id,$projet_id){
        $doc=Doc::where('doc_id',$doc_id)
        ->where('projet_id',$projet_id)
        ->first();

        return $doc;

    }
    public static function getUserProjet(){
        $projets=Projet::with('account')
            ->where('account_id',Auth::user()->id)
            ->get();
        return $projets;
    }

    public static function getDocDataNames($projet_id){
        $doc_data_names=DocDataName::where('projet_id',$projet_id)
        ->get();
        $doc_data_names = Collect($doc_data_names);
        $doc_data_names = $doc_data_names->groupBy("special_field");

        return $doc_data_names;
    } 
    public static function getAccDataNames($projet_id){
        $acc_data_names = AccDataName::where("projet_id",$projet_id)
        ->get();
        $acc_data_names = Collect($acc_data_names);
        $acc_data_names = $acc_data_names->groupBy("data_field");
        return $acc_data_names;
    }

    public static function getDonneEnteteNames(){
        $doc_column_shows=self::getDocColumnShow();
        $acc_data_colomn_shows=self::getAccDataColumnShow();

        $doc_column_shows = collect($doc_column_shows);
        $acc_data_colomn_shows = collect($acc_data_colomn_shows);

        $results=$doc_column_shows->merge($acc_data_colomn_shows);
        
        return $results; 
    }
    public static function getDonneEnteteNamesByProjet($projet_id){
        $doc_column_shows=self::getDocColumnShowByProjet($projet_id);
        $acc_data_colomn_shows=self::getAccDataColumnShowByProjet($projet_id);

        $doc_column_shows = collect($doc_column_shows);
        $acc_data_colomn_shows = collect($acc_data_colomn_shows);

        $results=$doc_column_shows->merge($acc_data_colomn_shows);
        
        return $results; 
    }
    public static function getDocColumnShow(){

        $results=[];
        try {
            $columnShows= DocColumnShow::where('account_id',Auth::user()->account_id)->get();

            foreach ($columnShows as $key => $value) {
                $item=Collect($value);
                $data_name=DocDataName::where('special_field', $value->column_name)
                ->first();
                $value['libelle']=$data_name;
                $results[]=$value;
            }
        } catch (Exception $e) {
            Log::error('DBHelper/getDocColumnShow: '.$e);
        }
        return $results;
    }
    public static function getAccDataColumnShow(){
        $results=[];
        try {
            $columnShows= AccDataColumnShow::where('account_id',Auth::user()->account_id)->get();

            foreach ($columnShows as $key => $value) {
                $item=Collect($value);
                $data_name=AccDataName::where('data_field',$value->column_name)
                ->first();
                $value['libelle']=$data_name;
                $results[]=$value;
            }
        } catch (Exception $e) {
            Log::error('DBHelper/getAccDataColumnShow: '.$e);
        }
        return $results;
    }

    public static function getDocColumnShowByProjet($projet_id){

        $results=[];
        try {
            $columnShows= DocColumnShow::where('account_id',Auth::user()->account_id)->get();

            foreach ($columnShows as $key => $value) {
                $item=Collect($value);
                $data_name=DocDataName::where('special_field', $value->column_name)
                ->where('projet_id', $projet_id)
                ->first();
                $value['libelle']=$data_name;
                $results[]=$value;
            }
        } catch (Exception $e) {
            Log::error('DBHelper/getDocColumnShow: '.$e);
        }
        return $results;
    }
    public static function getAccDataColumnShowByProjet($projet_id){
        $results=[];
        try {
            $columnShows= AccDataColumnShow::where('account_id',Auth::user()->account_id)->get();

            foreach ($columnShows as $key => $value) {
                $item=Collect($value);
                $data_name=AccDataName::where('data_field',$value->column_name)
                ->where('projet_id',$projet_id)
                ->first();
                $value['libelle']=$data_name;
                $results[]=$value;
            }
        } catch (Exception $e) {
            Log::error('DBHelper/getAccDataColumnShow: '.$e);
        }
        return $results;
    }

    public static function getActionLogNames($projet_id){
        $lan_code="EN";
        if (app()->getLocale()=="fr") {
            $lan_code = "FR";
        }
        $action_log_names = ActionLogName::where("projet_id",$projet_id)
            ->where("lan_code",$lan_code)
            ->get();
        $action_log_names = Collect($action_log_names);
        $action_log_names = $action_log_names->groupBy("log_description");
        return $action_log_names;
    }
    public static function getIpLineItemParams($projet_id){
        $ip_line_item_params = IpLineItemParam::where("projet_id",$projet_id)
            ->get();
        $ip_line_item_params = Collect($ip_line_item_params);
        $ip_line_item_params = $ip_line_item_params->groupBy("LIP_DATA_FIELD");
        return $ip_line_item_params;
    }

    public static function getDocDataNamesByAccount(){
        $doc_data_names=DocDataName::where('projet_id',$projet_id)
        ->get();
        $doc_data_names = Collect($doc_data_names);
        $doc_data_names = $doc_data_names->groupBy("special_field");

        return $doc_data_names;
    }
    public static function getAccDataColumns(){
        
        $acc_data_columns=collect([]);

            $acc_data_columns->put('list1',['sort_order', 'brutto', 'brutto_calc', 'vat', 'vat_pros', 'accepted', 'acceptor_id', 'accepted_date', 't1', 't2', 't3', 't4', 't5', 't6', 't7', 't8', 't9', 't10', 't11', 't12', 't13', 't14', 't15', 't16', 't17', 't18', 't19', 't20', 't21', 't22', 't23', 't24', 't25', 't26', 't27', 't28', 't29', 't30', 't31', 't32', 't33', 't34', 't35', 't36', 't37', 't38', 't39', 't40', 't41', 't42', 't43', 't44', 't45', 't46', 't47', 't48', 't49', 't50', 't51', 't52', 't53', 't54', 't55', 't56', 't57']);

             $acc_data_columns->put('list2',['t58', 't59', 't60', 't61', 't62', 't63', 't64', 't65', 't66', 't67', 't68', 't69', 't70', 't71', 't72', 't73', 't74', 't75', 't76', 't77', 't78', 't79', 't80', 't81', 't82', 't83', 't84', 't85', 'n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8', 'n9', 'n10', 'n11', 'n12', 'n13', 'n14', 'n15', 'n16', 'n17', 'n18', 'n19', 'n20', 'stamp_date', 'stamp_uid', 'net_sum', 'net_calc', 'layer', 'reviewed', 'reviewer_id', 'reviewed_date']);
        return $acc_data_columns;
    }
    
    public static function getDocColumns(){
        
        $doc_columns=collect(['doc_id', 'scan_date', 'comp_no', 'supplier_num', 'invoice_num', 'voucher_num', 'invoice_date', 'invoice_last_date', 'invoice_sum', 'status_index', 'order_num', 'exchange_rate', 'invoice_currency', 'invoice_sum_calc', 'supplier_name', 'attrib_t1', 'attrib_t2', 'attrib_t3', 'attrib_t4', 'attrib_t5', 'attrib_t6', 'attrib_t7', 'attrib_n', 'attrib_n2', 'attrib_n3', 'attrib_n4', 'attrib_d', 'attrib_d2', 'attrib_d3', 'attrib_d4', 'vat_sum', 'invoice_type', 'prebooked', 'entry_date', 'net_sum_calc', 'net_sum', 'vat_sum_calc', 'contract_num', 'payment_date', 'invoice_category']);
        return $doc_columns;
    }
    public static function getSearchDataTexte(){
        return [
            'doc_id', 'comp_no', 'supplier_num', 'invoice_num', 'voucher_num', 'status_index', 'order_num', 'invoice_currency', 'supplier_name', 'attrib_t1', 'attrib_t2', 'attrib_t3', 'attrib_t4', 'attrib_t5', 'attrib_t6', 'attrib_t7', 'invoice_type', 'prebooked', 'contract_num', 'invoice_category'
        ];
    }
    public static function getSearchDataDate(){
        return [
            'scan_date', 'invoice_date', 'invoice_last_date', 'attrib_d', 'attrib_d2', 'attrib_d3', 'attrib_d4', 'payment_date','entry_date'
        ];
    }
    public static function getSearchDataMontant(){
        return [
            'invoice_sum', 'invoice_sum_calc', 'exchange_rate', 'attrib_n', 'attrib_n2', 'attrib_n3', 'attrib_n4', 'vat_sum', 'net_sum_calc', 'net_sum', 'vat_sum_calc'
        ];
    }
    public static function invoiceFiltre($projet_id,$searchArray)
    {
        $docs = DB::table('docs')
            ->where('projet_id',$projet_id)
            ->get();
        $docsCollect=Collect($docs);
        foreach ($searchArray as $key => $searchItem) {
            if ($searchItem['data_type']=="TEXT") { 
                $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                    $value=Collect($value);
                    return  Str::contains($value[$searchItem['data_value']], $searchItem['key_work']);
                });
            }
            if ($searchItem['data_type']=="DATE"){ 
                
                if ($searchItem['date_start'] && $searchItem['date_end']) {
                    $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                        $value=Collect($value);
                        $date_start = Carbon::createFromFormat('Y-m-d', $searchItem['date_start']);
                        $date_end = Carbon::createFromFormat('Y-m-d', $searchItem['date_end']);
                        $myDate = Carbon::createFromFormat('Y-m-d H:m:s', $value[$searchItem['data_value']]);
                        return $myDate->between($date_start, $date_end);
                    });
                }if ($searchItem['date_start'] && !$searchItem['date_end']) {
                    $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                        $value=Collect($value);
                        $date_start = Carbon::createFromFormat('Y-m-d', $searchItem['date_start']);
                        
                        $myDate = Carbon::createFromFormat('Y-m-d H:m:s', $value[$searchItem['data_value']]);

                        return $myDate->isAfter($date_start);
                    });
                }if (!$searchItem['date_start'] && $searchItem['date_end']) {
                    $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                        $value=Collect($value);
                        $date_end = Carbon::createFromFormat('Y-m-d', $searchItem['date_end']);
                        
                        $myDate = Carbon::createFromFormat('Y-m-d H:m:s', $value[$searchItem['data_value']]);

                        return $myDate->isBefore($date_end);
                    });
                }   
            }
            if ($searchItem['data_type']=="MONTANT"){
                if ($searchItem['montant_max'] && $searchItem['montant_min']) {

                    $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                        $value=Collect($value);
                        return  (floatval($value[$searchItem['data_value']]) >=floatval($searchItem['montant_min'])&& floatval($value[$searchItem['data_value']]) <= floatval($searchItem['montant_max']));
                    });

                }if ($searchItem['montant_max'] && !$searchItem['montant_min']) {

                    $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                        $value=Collect($value);
                        return  (floatval($value[$searchItem['data_value']]) <= floatval($searchItem['montant_max']));
                    });
                    
                }if (!$searchItem['montant_max'] && $searchItem['montant_min']) {
                    $docsCollect = $docsCollect->filter(function ($value, $key) use($searchItem) {
                        $value=Collect($value);
                        return  (floatval($value[$searchItem['data_value']]) >=floatval($searchItem['montant_min']));
                    });
                }
            }
        }
        return $docsCollect;
    }
    
}
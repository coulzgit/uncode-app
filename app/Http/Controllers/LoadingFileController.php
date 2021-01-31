<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\TestExport;
use App\Imports\TestImport;
use App\Imports\DocImport;
use App\Imports\ActionLogImport;
use App\Imports\ActionLogNameImport;
use App\Imports\CompagnieImport;
use App\Imports\CompanyGridFieldImport;
use App\Imports\DocAttachmentImport;
use App\Imports\DataDocImport;
use App\Imports\DocDataNameImport;
use App\Imports\AccDataImport;
use App\Imports\AccDataNameImport;
use App\Imports\IpLineItemImport;
use App\Imports\IpLineItemParamImport;
use App\Imports\InvoiceTypeImport;
use App\Imports\DocFileImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Transactions\TransactionHandler;
use Sukohi\CsvValidator\Rules\Csv;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Models\Account;
use App\Models\Projet;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;
use App\Models\Doc;
use App\Models\Test;
use App\MyClasses\LoadingManager;

use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Log;


class LoadingFileController extends Controller
{
    function __construct(){
    	//ini_set('memory_limit', '200MB');
        //ini_set('memory_limit', '2028MB');

    }
    public function index()
    {
        //$projets = Projet::get();
        $projets = LoadingManager::getUserProjet();
        return view('admin.uncod.loadings.index',compact('projets'));
    }

    public function imports()
    {
        //$projets = Projet::get();
        $projets = LoadingManager::getUserProjet();
        return view('mytestes.loading.import',compact('projets'));
    }
    private function getProjets(){
        //$projets = Projet::with('account')->get();
        $projets = LoadingManager::getUserProjet();
        return $projets; 
    }
    public function importDoc(Request $request) 
    {
    	if ($request->method()=='GET') {
    		//$projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.docs.index',compact('projets'));
    	}

    	ini_set('memory_limit', '2028MB');
        //set_time_limit(300);
        try {

        	$validator = Validator::make($request->all(), [
        			'projet_id'=>'required',
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            $projet_id = $request['projet_id'];
        	Excel::import(new DocImport($projet_id), request()->file('file'));
        	
        	//return back();
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); 
		         $values=$failure->values();
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		         //->withErrors($validator->errors());
		         return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importDataDoc(Request $request) 
    {

        if ($request->method()=='GET') {
            //$projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
            return view('admin.uncod.loadings.doc_datas.index',compact('projets'));
        }
        
        try {
            $validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
            $projet_id = $request['projet_id'];
            Excel::import(new DataDocImport($projet_id), request()->file('file'));
            return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
             $failures = $e->failures();
             
             foreach ($failures as $failure) {
                 $row=$failure->row();
                 $attribute=$failure->attribute(); 
                 $errors=$failure->errors(); // Actual error messages from Laravel validator
                 $values=$failure->values(); // The values of the row that has failed.
                 Log::info("My Error: row =".$row);
                 Log::info("My Error: attribute =".$row);
                 Log::info("My Error: errors=".json_encode($errors));
                 Log::info("My Error: values=".json_encode($values));
                  return redirect()->back()->with([
                    'row'=>$row,
                    'attribute'=>$attribute,
                    'errors'=>$errors,
                    'values'=>$values
                 ]);
             }
        } 
    }
    public function importActionLog(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.action_logs.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$projet_id = $request['projet_id'];
        	Excel::import(new ActionLogImport($projet_id), request()->file('file'));
        	
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importActionLogName(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.action_log_names.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$action_log_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new ActionLogNameImport($projet_id), request()->file('file'));
        	
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importCompagnie(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.compagnies.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
            $projet_id = $request['projet_id'];
        	Excel::import(new CompagnieImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importCompanyGridField(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.company_grid_fields.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$compagnie_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new CompanyGridFieldImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    
    public function importDocDataName(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.doc_data_names.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$doc_data_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new DocDataNameImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importAccData(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.acc_datas.index',compact('projets'));
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$acc_data_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new AccDataImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importAccDataName(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.acc_data_names.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$acc_data_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new AccDataNameImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importDocAttachment(Request $request) 
    {
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.doc_attachments.index',compact('projets'));
    	}

    	
        try {

        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
            $ID_DOC = 1;
            $projet_id = $request['projet_id'];
        	Excel::import(new DocAttachmentImport($projet_id), request()->file('file'));
        	
        	//return back();
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); 
		         $values=$failure->values();
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		         //->withErrors($validator->errors());
		         return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
    public function importIpLineItem(Request $request){
    	if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.ip_line_items.index',compact('projets'));
    	}
    	
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$ID_DOC=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new IpLineItemImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }
	public function importIpLineItemParam(Request $request){
		if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.ip_line_item_params.index',compact('projets'));
    	}
		
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$ip_line_item_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new IpLineItemParamImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
	}
	public function importInvoiceType(Request $request){
		if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.invoice_types.index',compact('projets'));
    	}
		
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$compagnie_id=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new InvoiceTypeImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
	}
	public function importDocFile(Request $request){
		if ($request->method()=='GET') {
            // $projets = $this->getProjets();
            $projets = LoadingManager::getUserProjet();
        	return view('admin.uncod.loadings.doc_files.index',compact('projets'));
    	}
		
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            ini_set('memory_limit', '2028MB');
        	$ID_DOC=1;
            $projet_id = $request['projet_id'];
        	Excel::import(new DocFileImport($projet_id), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
	}
    public function importTest() 
    {
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                    'projet_id'=>'required',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$ID_DOC=1;
        	Excel::import(new IpLineItemImport($ID_DOC), request()->file('file'));
        	return redirect()->back()->with('succes','succes');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
		     $failures = $e->failures();
		     
		     foreach ($failures as $failure) {
		         $row=$failure->row();
		         $attribute=$failure->attribute(); 
		         $errors=$failure->errors(); // Actual error messages from Laravel validator
		         $values=$failure->values(); // The values of the row that has failed.
		         Log::info("My Error: row =".$row);
		         Log::info("My Error: attribute =".$row);
		         Log::info("My Error: errors=".json_encode($errors));
		         Log::info("My Error: values=".json_encode($values));
		          return redirect()->back()->with([
		         	'row'=>$row,
		         	'attribute'=>$attribute,
		         	'errors'=>$errors,
		         	'values'=>$values
		         ]);
		     }
		} 
    }

    
    

}

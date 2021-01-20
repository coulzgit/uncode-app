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

    }
    public function index()
    {
        $projets = Projet::get();
        return view('admin.uncod.loadings.index',compact('projets'));
    }

    public function imports()
    {
        $projets = Projet::get();
        return view('mytestes.loading.import',compact('projets'));
    }
    public function importDoc(Request $request) 
    {
    	if ($request->method()=='GET') {
    		$projets = Projet::with('account')->get();
        	return view('admin.uncod.loadings.docs.index',compact('projets'));
    	}

    	ini_set('memory_limit', '2028MB');
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
    public function importActionLog(Request $request) 
    {
    	if ($request->method()=='GET') {
        	return view('admin.uncod.loadings.action_logs.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$ID_DOC=1;
        	Excel::import(new ActionLogImport($ID_DOC), request()->file('file'));
        	
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
        	return view('admin.uncod.loadings.action_log_names.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$action_log_id=1;
        	Excel::import(new ActionLogNameImport($action_log_id), request()->file('file'));
        	
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
        	return view('admin.uncod.loadings.compagnies.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	Excel::import(new CompagnieImport(), request()->file('file'));
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
        	return view('admin.uncod.loadings.company_grid_fields.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$compagnie_id=1;
        	Excel::import(new CompanyGridFieldImport($compagnie_id), request()->file('file'));
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
    public function importDataDoc(Request $request) 
    {
    	if ($request->method()=='GET') {
        	return view('admin.uncod.loadings.doc_datas.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$ID_DOC=1;
        	Excel::import(new DataDocImport($ID_DOC), request()->file('file'));
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
        	return view('admin.uncod.loadings.doc_data_names.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$doc_data_id=1;
        	Excel::import(new DocDataNameImport($doc_data_id), request()->file('file'));
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
        	return view('admin.uncod.loadings.acc_datas.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$acc_data_id=1;
        	Excel::import(new AccDataImport($acc_data_id), request()->file('file'));
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
        	return view('admin.uncod.loadings.acc_data_names.index');
    	}
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$acc_data_id=1;
        	Excel::import(new AccDataNameImport($acc_data_id), request()->file('file'));
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
    		$projets = Projet::with('account')->get();
        	return view('admin.uncod.loadings.doc_attachments.index');
    	}

    	ini_set('memory_limit', '2028MB');
        try {

        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
            $ID_DOC = 1;
        	Excel::import(new DocAttachmentImport($ID_DOC), request()->file('file'));
        	
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
    public function importTest() 
    {
    	ini_set('memory_limit', '2028MB');
        try {
        	$validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:csv,xlsx',
                ]
            );
            if (!$validator->passes()) {
                return redirect()->back()->with('error_not_file','error_not_file');
            }
        	$acc_data_id=1;
        	Excel::import(new AccDataNameImport($acc_data_id), request()->file('file'));
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

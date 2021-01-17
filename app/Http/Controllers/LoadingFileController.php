<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Account;
use App\Models\Projet;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;

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

    }
    public function index()
    {
        
        return view('admin.uncod.loadings.index');
    }

}

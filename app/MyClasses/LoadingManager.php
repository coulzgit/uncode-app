<?php 
namespace App\MyClasses;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Doc;
use App\Models\Projet;
use Auth;

class LoadingManager {
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
    
}
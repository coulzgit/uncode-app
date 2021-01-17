<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccData;

class AccdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [



        'doc_id'    =>'',
     'sort_order'  =>'' ,
      'brutto'      =>'',
       'brutto_calc'    =>'',
        'vat'   =>'',
        'vat_pros'  =>'',
        'accepted'  =>'',
        'acceptor_id'       =>'',
        'accepted_date'     =>'',
        't1'        =>'',
        't2'       =>'' ,
         't3'      =>'' ,
         't4'       =>'',
         't5'     =>''  ,
         't6'      =>'' ,
         't7'      =>'' ,
         't8'   =>'' ,
         't9'   =>'',
         't10' =>'' ,
         't11' =>'' ,
         't12'  =>'',
         't13' =>'' ,
         't14' =>'' ,
         't15' =>'' ,
         't16' =>'' ,
         't17' =>'' ,
         't18' =>'' ,
         't19' =>'' ,
         't20' =>'' ,
         't21' =>'' ,
         't22'  =>'',
         't23'  =>''  ,
         't24' =>'' ,
         't25'  =>'',
         't26'  =>''  ,
         't27   '=>''  ,
          't28'     =>'',
          't29'        =>'' ,
          't30'   =>''  ,
          't31'    =>'' ,
          't32'     =>'',
          't33'   =>''  ,
          't34'    =>'' ,
          't35'     =>'',
          't36'     =>'',
          't37'     =>'',
          't38'    =>'' ,
          't39'     =>'',
          't40'     =>'',
          't41'    =>'' ,
          't42'    =>'' ,
          't43'    =>'' ,
          't44'        =>'' ,
          't45'    =>'' ,
          't46' =>'',
          't47'    =>'' ,
          't48'    =>'' ,
          't49'    =>'' ,
          't50'    =>'' ,
          't51'   =>''  ,
           't52'   =>'' ,
           't53'      =>''  ,
           't54'   =>'' ,
           't55'       =>'' ,
           't56'   =>'' ,
           't57'   =>'' ,
            't58'  =>'' ,
            't59'  =>'' ,
            't60'   =>'',
            't61'   =>'',
            't62'   =>'',
            't63'   =>''   ,
             't64' =>'' ,
             't65'  =>''  ,
             't65'  =>'',
             't66'  =>'',
             't67'  =>''  ,
             't68' =>'' ,
             't69'  =>'',
             't70' =>'' ,
             't71'  =>'' ,
             't72'  =>'',
             't73'      =>''      ,
             't74'     =>'' ,
             't75'          =>'',
             't76'         =>'' ,
             't77'         =>'' ,
              't78'        =>'' ,
              't79'        =>'' ,
              't80'        =>'' ,
              't81'        =>'' ,
              't82'        =>'' ,
              't83'        =>'' ,
              't84'       =>''  ,
              't85'       =>''  ,
              'n1'         =>'' ,
              'n2'      =>'',
              'n3'      =>'',
              'n4'     =>'' ,
              'n5'     =>'' ,
              'n6'        =>''  ,
              'n7'         =>'' ,
              'n8'         =>'' ,
              'n9'         =>'' ,
               'n10'           =>'' ,
               'n11'        =>'',
               'n12'        =>'',
               'n13'        =>'',
               'n14'        =>'',
               'n15'        =>'',
               'n16'       =>'' ,
               'n17'            =>''        ,
               'n18'           =>'' ,
               'n19'            =>'',
               'n20'           =>'' ,
               'stamp_date'     =>'',
               'stamp_uid'         =>'' ,
                'net_sum'          =>'' ,
                'net_calc'         =>'' ,
                'layer'         =>'',
                'reviewed'         =>'' ,
                 'reviewer_id'    =>'',
                 'reviewed_date'            =>'',

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

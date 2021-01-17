<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Exports\UsersExport;

use App\Imports\DocsImport;

use Maatwebsite\Excel\Facades\Excel;
// use Excel;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return view('docs.index',['docs' => Doc::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docs.create');
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

                    'scan_date'     => 'required',
                    'comp_no'       => 'required',
                    'doc_name'      => 'required',
                    'doc_pages'     => 'required',
                    'flow_fixed'    => 'required',
                    'supplier_num'  => 'required',
                    'invoice_num'   => 'required',
                    'voucher_num'   => 'required',
                    'invoice_date'  => 'required',
                    'invoice_last_date'     => 'required',
                    'invoice_sum'           => 'required',
                    'stamp_date'            => 'required',
                    'stamp_uid'             => 'required',
                    'status_index'          => 'required',
                    'order_num'             => 'required',
                    'last_acceptor'         => 'required',
                    'exchange_rate'         => 'required',
                    'invoice_currency'      => 'required',
                    'invoice_sum_calc'      => 'required',
                    'cash_date'             => 'required',
                    'accounting_period'     => 'required',
                    'supplier_name'         => 'required',
                    'attrib_t1'             => 'required',
                    'attrib_t2'             => 'required',
                    'attrib_t3'             => 'required',
                    'attrib_t4'             => 'required',
                    'attrib_t5'             => 'required',
                    'attrib_t6]'            => 'required',
                    'attrib_t7'             => 'required',
                    'attrib_n'              => 'required',
                    'attrib_n2'             => 'required',
                    'attrib_n3'             => 'required',
                    'attrib_n4'             => 'required',
                    'attrib_d'              => 'required',
                    'attrib_d2'             => 'required',
                    'attrib_d3'             => 'required',
                    'attrib_d4'             => 'required',
                    'bff_resource'          => 'required',
                    'vat_sum'               => 'required',
                    'invoice_serial'        => 'required',
                    'invoice_type'          => 'required',
                    'prebooked'             => 'required',
                    'secondary_status'      => 'required',
                    'entry_date'            => 'required',
                    'voucher_group'        => 'required',
                    'voucher_period'        => 'required',
                    'user_serial'           => 'required',
                    'net_sum_calc'          => 'required',
                    'net_sum'               => 'required',
                    'with_comments'         => 'required',
                    'external_status'       => 'required',
                    'voucher_year'          => 'required',
                    'serial_year'           => 'required',
                    'gl_date'               => 'required',
                    'credit_memo'           => 'required',
                    'vat_sum_calc'          => 'required',
                    'hold_owner'            => 'required',
                    'lock_owner'            => 'required',
                    'lock_date'             => 'required',
                    'lock_index'            => 'required',
                    'contract_num'          => 'required',
                    'oneaction'             => 'required',
                    'transfer_check'        => 'required',
                    'autoflow_status_index'  => 'required',
                    'match_status_index'    => 'required',
                    'custom_action_status'  => 'required',
                    'preprocessing_timestamp'       => 'required',
                    'supplier_rep_code'             => 'required',
                    'supplier_rep_name'             => 'required',
                    'payment_date'                  => 'required',
                    'delivery_note_number'          => 'required',
                    'reference_person'              => 'required',
                    'CM_REQUEST'                    => 'required',
                    'invoice_origin'                => 'required',
                    'match_wait_until'              => 'required',
                    'invoice_category'              => 'required',
                    'parent_invoice_id'             => 'required',
                    'MC_MATCH_STATUS_INDEX'         => 'required',
                    'account_id'                    =>  'required',
        ]);
        $this->docs->create($request->all());

        return redirect()->route('docs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('docs.show')
            ->withDocs($this->docs->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('docs.edit');
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
                $this->validate($request, [
                     'scan_date'     => 'required|int',
                    'comp_no'       => 'required',
                    'doc_name'      => 'required',
                    'doc_pages'     => 'required',
                    'flow_fixed'    => 'required',
                    'supplier_num'  => 'required',
                    'invoice_num'   => 'required',
                    'voucher_num'   => 'required',
                    'invoice_date'  => 'required',
                    'invoice_last_date'     => 'required',
                    'invoice_sum'           => 'required',
                    'stamp_date'            => 'required',
                    'stamp_uid'             => 'required',
                    'status_index'          => 'required',
                    'order_num'             => 'required',
                    'last_acceptor'         => 'required',
                    'exchange_rate'         => 'required',
                    'invoice_currency'      => 'required',
                    'invoice_sum_calc'      => 'required',
                    'cash_date'             => 'required',
                    'accounting_period'     => 'required',
                    'supplier_name'         => 'required',
                    'attrib_t1'             => 'required',
                    'attrib_t2'             => 'required',
                    'attrib_t3'             => 'required',
                    'attrib_t4'             => 'required',
                    'attrib_t5'             => 'required',
                    'attrib_t6]'            => 'required',
                    'attrib_t7'             => 'required',
                    'attrib_n'              => 'required',
                    'attrib_n2'             => 'required',
                    'attrib_n3'             => 'required',
                    'attrib_n4'             => 'required',
                    'attrib_d'              => 'required',
                    'attrib_d2'             => 'required',
                    'attrib_d3'             => 'required',
                    'attrib_d4'             => 'required',
                    'bff_resource'          => 'required',
                    'vat_sum'               => 'required',
                    'invoice_serial'        => 'required',
                    'invoice_type'          => 'required',
                    'prebooked'             => 'required',
                    'secondary_status'      => 'required',
                    'entry_date'            => 'required',
                    'voucher_group'        => 'required',
                    'voucher_period'        => 'required',
                    'user_serial'           => 'required',
                    'net_sum_calc'          => 'required',
                    'net_sum'               => 'required',
                    'with_comments'         => 'required',
                    'external_status'       => 'required',
                    'voucher_year'          => 'required',
                    'serial_year'           => 'required',
                    'gl_date'               => 'required',
                    'credit_memo'           => 'required',
                    'vat_sum_calc'          => 'required',
                    'hold_owner'            => 'required',
                    'lock_owner'            => 'required',
                    'lock_date'             => 'required',
                    'lock_index'            => 'required',
                    'contract_num'          => 'required',
                    'oneaction'             => 'required',
                    'transfer_check'        => 'required',
                    'autoflow_status_index'  => 'required',
                    'match_status_index'    => 'required',
                    'custom_action_status'  => 'required',
                    'preprocessing_timestamp'       => 'required',
                    'supplier_rep_code'             => 'required',
                    'supplier_rep_name'             => 'required',
                    'payment_date'                  => 'required',
                    'delivery_note_number'          => 'required',
                    'reference_person'              => 'required',
                    'CM_REQUEST'                    => 'required',
                    'invoice_origin'                => 'required',
                    'match_wait_until'              => 'required',
                    'invoice_category'              => 'required',
                    'parent_invoice_id'             => 'required',
                    'MC_MATCH_STATUS_INDEX'         => 'required',
                    'account_id'                    =>  'required',

        ]);
        $this->docs->update($id, $request);

        Session()->flash('flash_message', 'DocTable successfully updated');

        return redirect()->route('docs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->docs->destroy($id);

        return redirect()->route('docs.index');
    }





 /**

    * @return \Illuminate\Support\Collection

    */

    public function docView()

    {

       return view('docs.import');

    }



    /**

    * @return \Illuminate\Support\Collection

    */

    public function docexport()

    {

        return Excel::download(new UsersExport, 'users.xlsx');

    }



    /**

    * @return \Illuminate\Support\Collection

    */

    public function import()

    {

        Excel::import(new DocsImport,request()->file('file'));



        return back();

    }






}

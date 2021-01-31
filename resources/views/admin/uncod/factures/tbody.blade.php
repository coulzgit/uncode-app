@foreach($invoices as $invoice)
				<tr>
					
					<td>{{$invoice['doc_id']}}</td>
					<td>{{$invoice['comp_no']}}</td>
					<td>{{$invoice['supplier_num']}}</td>
					<td>{{$invoice['invoice_num']}}</td>
					<td>{{$invoice['voucher_num']}}</td>
					<td>{{$invoice['invoice_date']}}</td>
					<td>{{$invoice['invoice_sum']}}</td>
					<td>
						@if($invoice['acc_data'])
							{{$invoice['acc_data']['brutto']}}
						@else
							***
						@endif
					</td>
					<td>***</td>
					<td>***</td>
					<td>***</td>
					<td>***</td>
					
				</tr>
			@endforeach
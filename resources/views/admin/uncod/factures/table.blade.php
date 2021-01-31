<div class="table-responsive hoverable-table">
	<table id="example-delete" class="table text-md-nowrap">
		<thead>
			<tr>
				<th class="wd-15p border-bottom-0">
					{{$donne_entete_names[0]->libelle ? 
						$donne_entete_names[0]->libelle->data_name :
						$donne_entete_names[0]->column_name
					}}
				</th>
				<th class="wd-15p border-bottom-0">
					{{$donne_entete_names[1]->libelle ? 
						$donne_entete_names[1]->libelle->data_name :
						$donne_entete_names[1]->column_name
					}}
				</th>
				<th class="wd-20p border-bottom-0">
					{{$donne_entete_names[2]->libelle ? 
						$donne_entete_names[2]->libelle->data_name :
						$donne_entete_names[2]->column_name
					}}
				</th>
				<th class="wd-15p border-bottom-0">
					{{$donne_entete_names[3]->libelle ? 
						$donne_entete_names[3]->libelle->data_name :
						$donne_entete_names[3]->column_name
					}}
				</th>
				<th class="wd-10p border-bottom-0">
					{{$donne_entete_names[4]->libelle ? 
						$donne_entete_names[4]->libelle->data_name :
						$donne_entete_names[4]->column_name
					}}
				</th>
				<th class="wd-25p border-bottom-0">
					{{$donne_entete_names[5]->libelle ? 
						$donne_entete_names[5]->libelle->data_name :
						$donne_entete_names[5]->column_name
					}}
				</th>
				<th class="wd-25p border-bottom-0">
					{{$donne_entete_names[7]->libelle ? 
						$donne_entete_names[7]->libelle->data_name :
						$donne_entete_names[7]->column_name
					}}
				</th>

				<th class="wd-25p border-bottom-0">
					{{$donne_entete_names[8]->libelle ? 
						$donne_entete_names[8]->libelle->data_name :
						$donne_entete_names[8]->column_name
					}}
				</th>
				<th class="wd-10p border-bottom-0">
					{{$donne_entete_names[9]->libelle ? 
						$donne_entete_names[9]->libelle->data_name :
						$donne_entete_names[9]->column_name
					}}
				</th>
				<th class="wd-25p border-bottom-0">
					{{$donne_entete_names[10]->libelle ? 
						$donne_entete_names[10]->libelle->data_name :
						$donne_entete_names[10]->column_name
					}}
				</th>
				<th class="wd-25p border-bottom-0">
					{{$donne_entete_names[11]->libelle ? 
						$donne_entete_names[11]->libelle->data_name :
						$donne_entete_names[11]->column_name
					}}
				</th>
				<th class="wd-25p border-bottom-0">
					{{$donne_entete_names[12]->libelle ? 
						$donne_entete_names[12]->libelle->data_name :
						$donne_entete_names[12]->column_name
					}}
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($invoices as $invoice)
				<tr style="cursor: pointer;" class="uncode-invoice" id="{{$invoice['id']}}">
					
					<td>{{$invoice[$donne_entete_names[0]->column_name]}}</td>
					<td>{{$invoice[$donne_entete_names[1]->column_name]}}</td>
					<td>{{$invoice[$donne_entete_names[2]->column_name]}}</td>
					<td>{{$invoice[$donne_entete_names[3]->column_name]}}</td>
					<td>{{$invoice[$donne_entete_names[4]->column_name]}}</td>
					<td>{{$invoice[$donne_entete_names[5]->column_name]}}</td>
					
					@if($invoice['acc_data'])
						<td>
							{{
								$invoice['acc_data'][$donne_entete_names[7]->column_name]
							}}
						</td>
						<td>
							{{$invoice['acc_data'][$donne_entete_names[8]->column_name]}}
						</td>
						<td>
							{{$invoice['acc_data'][$donne_entete_names[9]->column_name]}}
						</td>
						<td>
							{{$invoice['acc_data'][$donne_entete_names[10]->column_name]}}
						</td>
						<td>
							{{$invoice['acc_data'][$donne_entete_names[11]->column_name]}}
						</td>
						<td>
							{{$invoice['acc_data'][$donne_entete_names[12]->column_name]}}
						</td>
					@else
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					@endif
					
				</tr>
			@endforeach
		</tbody>
	</table>

	

	
	
</div>
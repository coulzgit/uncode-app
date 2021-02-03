<div class="col-xl-12">
	<div class="card">
		
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped mg-b-0 text-md-nowrap">
					<thead>
						<tr>
							<th>
								@if(isset($invoice['ip_line_item_params']['LIT_DOC_ID'])) 
								    {{$invoice['ip_line_item_params']['LIT_DOC_ID'][0]['LIP_FIELD_LABEL']}}:
								@else
									LIT_DOC_ID:
  								@endif
							</th>
							<th>Name</th>
							<th>Position</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Joan Powell</td>
							<td>Associate Developer</td>
							<td>$450,870</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Gavin Gibson</td>
							<td>Account manager</td>
							<td>$230,540</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Julian Kerr</td>
							<td>Senior Javascript Developer</td>
							<td>$55,300</td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>Cedric Kelly</td>
							<td>Accountant</td>
							<td>$234,100</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>Samantha May</td>
							<td>Junior Technical Author</td>
							<td>$43,198</td>
						</tr>
					</tbody>
				</table>
			</div><!-- bd -->
		</div><!-- bd -->
	</div><!-- bd -->
</div>
<div class="col-xl-12">
	<div class="table-responsive">
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

			<div class="row">
				<div class="col-sm-12">
					<table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
						<thead>
							<tr role="row">
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;">{{__('Nom') }}</th>

                                <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;">{{__('Date de création') }}</th>
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">{{__('Crée par') }}</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($account['projets'] as $projet)


                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $projet['nom'] }}</td>
                                <td >{{ $projet['created_at'] }}</td>

                                <td>
                                    @if($projet['created_by']==null)
                                    <span>{{__('...') }}</span>
                                    @else
                                    <span>{{$projet['created_by']['user_name'] }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach



						</tbody>
                    </table>





				</div>
			</div>
		</div>
	</div>
</div>

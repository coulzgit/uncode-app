<div class="col-xl-12">
	<div class="table-responsive">
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

			<div class="row">
				<div class="col-sm-12">
					<table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
						<thead>
                            <tr role="row">
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;">{{__('Prénom & nom') }}</th>
                                <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;">{{__('Email') }}</th>
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">{{__('Role(s)') }}</th>
                                <th class="wd-10p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 56px;">{{__('Propriétaire') }}</th>

							</tr>
						</thead>
						<tbody>
                            @foreach ($account['users'] as $user)
    							<tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {{$user->prenom}} {{$user->nom}}
                                    </td>
    								<td>{{ $user['email']}}</td>
                                    <td>
                                        @foreach($user['roles'] as $role )
                                            <span>
                                                {{$role->name}}
                                            </span>
                                        @endforeach
                                    </td>
    								<td>

                                        @if($user['account_owner']==0)
                                        <span>{{__('Non') }}</span>
                                        @else
                                        <span>{{__('Oui') }}</span>
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

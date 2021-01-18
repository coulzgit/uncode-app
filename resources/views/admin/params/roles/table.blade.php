
<div class="col-xl-12">
    <div class="table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

            <div class="row">
                <div class="col-sm-12">
                    <table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First name: activate to sort column descending" style="width: 105px;">{{__('ID') }}</th>
                                <th class="wd-20p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 153px;">{{__('Nom du role') }}</th>
                                <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 104px;">{{__('Action') }}</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($roles as $key => $role)


                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ ++$i }}</td>
                                <td >{{ $role->name }}</td>

                                <td class="center">
                                    <a title="{{__('Détails du compte')}}" href="{{ route('roles.show',['locale'=>app()->getLocale(),$role->id]) }}" class="btn btn-sm btn-primary">

                                        <i class="las la-search"></i>
                                    </a>
                                    <a title="{{__('Modifier le compte')}}" href="{{ route('roles.edit',['locale'=>app()->getLocale(),$role->id]) }}" class="btn btn-sm btn-info">
                                        <i class="las la-pen"></i>
                                    </a>

                                    <a title="{{__('Supprimer le compte')}}" href="{{ route('roles.delete',['locale'=>app()->getLocale(),$role->id]) }}" class="btn btn-sm btn-danger">
                                        <i class="las la-trash"></i>
                                    </a>

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

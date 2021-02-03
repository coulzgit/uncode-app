@foreach ($acc_data_columns['list1'] as $key => $acc_data_column)
    <option value="{{ $acc_data_column }}">
    	@if(isset($acc_data_names[$acc_data_column]))
			{{$acc_data_names[$acc_data_column][0]['data_name']}}
		@else
			{{ $acc_data_column }}
		@endif
    </option>
@endforeach

@foreach ($acc_data_columns['list2'] as $key => $acc_data_column)
    <option value="{{ $acc_data_column }}">
    	@if(isset($acc_data_names[$acc_data_column]))
			{{$acc_data_names[$acc_data_column][0]['data_name']}}
		@else
			{{ $acc_data_column }}
		@endif

    </option>
@endforeach

@foreach ($doc_columns as $key => $doc_column)
	<option value="{{ $doc_column }}">
		@if(isset($doc_data_names[$doc_column]))
			{{$doc_data_names[$doc_column][0]['data_name']}}
		@else
			{{ $doc_column }}
		@endif
	</option>
@endforeach

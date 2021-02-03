<div class="card">
	<div class="card-body bg-gray-200">
		<!-- LINE 0-->
		<div class="row col-lg-12 ">
				<div class="row col-lg-4">
					<div class="col-lg-4">
					{{__('Recherche')}}
					</div>
					<div class="col-lg-8">
					<select class="form-control" id="search_select0" name="search_select0">
						<option value="none">
							{{__('Sélectionner')}}
						</option>
						
						@foreach ($search_data_textes as $key => $item)
							<option value="{{$item}}_TEXT">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						@foreach ($search_data_dates as $key => $item)
							<option value="{{$item}}_DATE">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						@foreach ($search_data_montants as $key => $item)
							<option value="{{$item}}_MONTANT">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						
					</select>
					</div>
				</div>
				<div class="col-lg-8">
					<!-- TEXT INPUT -->
					<div id="texte_input0" class="hide row">
						<div class="col-lg-8">
							<input placeholder="{{__('Mot clé')}}" class="form-control" type="text" id="input_texte0">
						</div>
					</div>
					<!-- DATE INPUT -->
					<div id="date_input0" class="hide row">
						<div class="row col-lg-6">
							<label class="col-lg-4">{{__('Début')}}:</label>
							<input class="form-control col-lg-8" type="date" id="input_start_date0">
						</div>
						<div class="row col-lg-6">
							<label class="col-lg-4">{{__('Fin')}}:</label>
							<input class="form-control col-lg-8" type="date" id="input_end_date0">
						</div>
					</div>
					<!-- MONTANT INPUT -->
					<div id="montant_input0" class="hide row">
						<div class="row col-lg-6">
							<label class="col-lg-4">{{__('Mnt min')}}:</label>
							<input onkeypress="return validNumber(event)" class="form-control col-lg-8" type="text" id="input_mtn_min0">
						</div>
						<div class="row col-lg-6">
							<label class="col-lg-4">{{__('Mnt max')}}:</label>
							<input onkeypress="return validNumber(event)" class="form-control col-lg-8" type="text" id="input_mtn_max0">
						</div>
					</div>

				</div>	
		</div>
		<!-- LINE 1 -->
		<br>
		<div class="row col-lg-12 ">
			<div class="row col-lg-4">
				<div class="col-lg-4">
				</div>
				<div class="col-lg-8">
					<select class="form-control" id="search_select1" name="search_select1">
						<option value="none">
							{{__('Sélectionner')}}
						</option>
						
						@foreach ($search_data_textes as $key => $item)
							<option value="{{$item}}_TEXT">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						@foreach ($search_data_dates as $key => $item)
							<option value="{{$item}}_DATE">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						@foreach ($search_data_montants as $key => $item)
							<option value="{{$item}}_MONTANT">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						
					</select>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- TEXT INPUT -->
				<div id="texte_input1" class="hide row">
					<div class="col-lg-8">
						<input placeholder="{{__('Mot clé')}}" class="form-control" type="text" id="input_texte1">
					</div>
				</div>
				<!-- DATE INPUT -->
				<div id="date_input1" class="hide row">
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Début')}}:</label>
						<input class="form-control col-lg-8" type="date" id="input_start_date1">
					</div>
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Fin')}}:</label>
						<input class="form-control col-lg-8" type="date" id="input_end_date1">
					</div>
				</div>
				<!-- MONTANT INPUT -->
				<div id="montant_input1" class="hide row">
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Mnt min')}}:</label>
						<input onkeypress="return validNumber(event)" class="form-control col-lg-8" type="text" id="input_mtn_min1">
					</div>
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Mnt max')}}:</label>
						<input onkeypress="return validNumber(event)" class="form-control col-lg-8" type="text" id="input_mtn_max1">
					</div>
				</div>

			</div>
		</div>

		<!-- LINE 2 -->
		<br>
		<div class="row col-lg-12 ">
			<div class="row col-lg-4">
				<div class="col-lg-4">
				</div>
				<div class="col-lg-8">
					<select class="form-control" id="search_select2" name="search_select2">
						<option value="none">
							{{__('Sélectionner')}}
						</option>
						
						@foreach ($search_data_textes as $key => $item)
							<option value="{{$item}}_TEXT">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						@foreach ($search_data_dates as $key => $item)
							<option value="{{$item}}_DATE">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						@foreach ($search_data_montants as $key => $item)
							<option value="{{$item}}_MONTANT">
								@if(isset($doc_data_names[$item]))
									{{$doc_data_names[$item][0]['data_name']}}
								@else
									{{ $item }}
								@endif
							</option>
						@endforeach
						
					</select>
				</div>
			</div>
			<div class="col-lg-8">
				<!-- TEXT INPUT -->
				<div id="texte_input2" class="hide row">
					<div class="col-lg-8">
						<input placeholder="{{__('Mot clé')}}" class="form-control" type="text" id="input_texte2">
					</div>
				</div>
				<!-- DATE INPUT -->
				<div id="date_input2" class="hide row">
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Début')}}:</label>
						<input  class="form-control col-lg-8" type="date" id="input_start_date2">
					</div>
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Fin')}}:</label>
						<input  class="form-control col-lg-8" type="date" id="input_end_date2">
					</div>
				</div>
				<!-- MONTANT INPUT -->
				<div id="montant_input2" class="hide row">
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Mnt min')}}:</label>
						<input onkeypress="return validNumber(event)" class="form-control col-lg-8" type="text" id="input_mtn_min2">
					</div>
					<div class="row col-lg-6">
						<label class="col-lg-4">{{__('Mnt max')}}:</label>
						<input onkeypress="return validNumber(event)" class="form-control col-lg-8" type="text" id="input_mtn_max2">
					</div>
				</div>

			</div>
		</div>
		
	</div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    {{__('Veuiller saisir les données du compte client')}}
                </div>
                <p style="color:red" class="mg-b-20">
                    {{__('Note: Tous les champs sont obligatoires')}}
                </p>
                <div class="pd-30 pd-sm-40 bg-gray-200">
                    <form>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Type de licence')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                        <select id="licence_id" class="form-control">
                                @foreach ($licences as $licence)
                                <option value="{{ $licence->id }}">
                                	{{ $licence->nom }}
                                </option>

                                @endforeach
                            </select>

                        </div>
                    </div>

					
					<button onclick="updateAccount()" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{__('Sauvegarder')}}</button>
					<a href="{{route('accounts',app()->getLocale())}}" class="btn btn-dark pd-x-30 mg-t-5">{{__('Annuler')}}</a>
				</div>
			</div>
		</div>
	</div>
</div>
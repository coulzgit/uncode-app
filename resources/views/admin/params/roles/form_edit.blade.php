
<div class="row">
    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
        <strong>{{__('Oups!') }}</strong> {{__('Il y a eu des problèmes avec votre entrée') }}.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif

        {!! Form::model($role, ['method' => 'PATCH']) !!}

        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    {{__('Veuiller saisir le role avec les permissions')}}
                </div>
                <p style="color:red" class="mg-b-20">
                    {{__('Note: Tous les champs sont obligatoires')}}
                </p>
                <div class="pd-30 pd-sm-40 bg-gray-200">
                    {{-- <form> --}}
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Nom du role')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}                        </div>
                    </div>

                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Quels sont les permission souhaiteriez vous donner avec ce rôle')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0 d-sm-flex">
                            @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                <div>
                                    {{ $value->name }}
                                </div>

                        </label>
                            <br/>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{__('Sauvegarder')}}</button>

                    <a href="{{ route('roles',['locale'=>app()->getLocale()]) }}" class="btn btn-dark pd-x-30 mg-t-5">{{__('Annuler')}}</a>

                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

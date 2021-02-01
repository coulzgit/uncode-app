<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    {{__('Veuiller saisir les données de l\'utilisateur')}}
                </div>
                <p style="color:red" class="mg-b-20">
                    {{__('Note: Tous les champs sont obligatoires')}}
                </p>
                <div class="pd-30 pd-sm-40 bg-gray-200">
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                            {{__('Compte N°')}}
                        </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input disabled="" id="account_id" value="{{ $account->code }}" class="form-control" placeholder="{{__('Saisir le numéro du compte')}}" type="text">
                        </div>
                    </div>
                    @if ($account_has_owner==false)
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">
                                    {{__('Propriétaire du compte ?')}}
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0" id="account_has_owner">
                                <div class="row mg-t-10">

                                    <div class="col-lg-3">
                                        <label class="checkbox" >
                                            <input id="account_owner" name="account_owner" type="checkbox">
                                            <span>
                                                {{__('Oui')}}
                                            </span>
                                        </label>
                                    </div>


                                        {{-- <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                            <label class="rdiobox">
                                                <input checked="" name="account_owner" type="radio">
                                                <span>
                                                    {{__('Non')}}
                                                </span>
                                            </label>
                                        </div> --}}

                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Username')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input id="user_name" value="{{ $user->user_name }}" class="form-control" placeholder="{{__('Saisir son nom d\'utilissateur')}}" type="text">
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Prénom')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input id="prenom" value="{{ $user->prenom }}" class="form-control" placeholder="{{__('Saisir son prémon')}}" type="text">
                        </div>
                    </div>

                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">{{__('Nom')}}</label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input id="nom"value="{{ $user->nom }}"  class="form-control" placeholder="{{__('Saisir son nom')}}" type="text">
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">

                                {{__('Email')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input value="{{ $user->email }}"   id="email" class="form-control" placeholder="{{__('Saisir son adresse email')}}" type="email">
                        </div>
                    </div>


                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">

                                {{__('Role(s)')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">

                            <div class="row row-sm">
                                <div class="col-lg-6 mg-b-20 mg-lg-b-0">


                                    <select class="form-control select2 " id="roles" multiple="multiple">
                                            @foreach ($roles as $key => $role)
                                                @if (count($user['roles']))
                                                    @foreach ($user['roles'] as $row)
                                                        @if ($role==$row->name)
                                                            <option value="{{ $key }}" selected>{{ $role }}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                <option value="{{ $key }}">{{ $role }}</option>

                                                @endif


                                            @endforeach


                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">
                                {{__('Mot de passe(par défaut)')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input  id="password" class="form-control" placeholder="{{__('Saisir un mot de passe')}}" type="password">
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">{{__('Comfirmer')}}
                            </label>
                        </div>
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input id="confirm_password" class="form-control" placeholder="{{__('Confirmer le mot de passe')}}" type="password">
                        </div>
                    </div>
                    <button onclick="editUser()" class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{__('Sauvegarder')}}</button>

                    <a href="{{route('accounts',app()->getLocale())}}" class="btn btn-dark pd-x-30 mg-t-5">{{__('Annuler')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>


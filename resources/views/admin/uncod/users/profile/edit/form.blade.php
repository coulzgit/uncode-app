<form method="POST" action="{{route('profile.update', ['locale'=>app()-> getLocale()])}}" enctype="multipart/form-data">
    @csrf
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
                            <div hidden=""  class="col-md-8 mg-t-5 mg-md-t-0">
                                <input required="" name="account_id" id="account_id" value="{{ $account->id }}" class="form-control" type="text">
                            </div>
                             <div hidden=""  class="col-md-8 mg-t-5 mg-md-t-0">
                                <input required="" name="user_id" id="user_id" value="{{ $user->id }}" class="form-control" type="text">
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input disabled="" value="{{ $account->code }}" class="form-control" placeholder="{{__('Saisir le numéro du compte')}}" type="text">
                            </div>
                        </div>

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">
                                    {{__('Username')}}
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input value="{{$user->user_name}}" required="" name="user_name" class="form-control" placeholder="{{__('Saisir son nom d\'utilissateur')}}" type="text">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">
                                    {{__('Prénom')}}
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input value="{{$user->prenom}}" required="" name="prenom" class="form-control" placeholder="{{__('Saisir son prémon')}}" type="text">
                            </div>
                        </div>

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">{{__('Nom')}}</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input value="{{$user->nom}}" required="" name="nom" class="form-control" placeholder="{{__('Saisir son nom')}}" type="text">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">

                                    {{__('Email')}}
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input readonly="" value="{{$user->email}}" required="" name="email" class="form-control" placeholder="{{__('Saisir son adresse email')}}" type="email">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">
                                    {{__('Mot de passe(par défaut)')}}
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input required="" name="password" class="form-control" placeholder="{{__('Saisir un mot de passe')}}" type="password">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">{{__('Comfirmer')}}
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input required="" name="confirm_password" class="form-control" placeholder="{{__('Confirmer le mot de passe')}}" type="password">
                            </div>
                        </div>

                        <!-- PHOTO -->
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">
                                    {{__('Photo')}} (200x200px)
                                </label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input required="" name="user_photo" type="file" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">
                            {{__('Sauvegarder')}}
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


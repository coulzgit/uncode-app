{{--<div style="display: flex;justify-content: left;padding-left: 10px;padding-bottom: 10px" class="row row-sm">
    <a class="btn btn-primary" href="#">

        {{__('Retour')}}
    </a>
</div>--}}
<!-- GENERAL INFO -->
<div class="row row-sm">
    <div class="col-md-12 mg-md-t-0">
        <div class="card">
            <div class="card-header tx-medium bd-0 tx-white bg-primary">
                {{__('GENERAL')}}
            </div>
            <div class="card-body ">
                <div class="row row-sm">
                    <!-- LEFT -->
                    <div style="border: 1px solid #eee;border-radius: 5px;margin-right: 20px;padding: 20px" class="col-md-12">
                        <h6 class="price">
                            {{__('Nom d\'utilisateur')}}
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['nom']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Compte ')}}
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['account']['code']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Email')}}
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['email']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Prenom')}}
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['prenom']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Nombre de roles')}}
                            <span style="color: #adadad" class="h6 ml-2">
                                {{count($user['roles'])}}
                            </span>
                        </h6>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-bottom: 10px" class="row row-sm">
    <div class="col-lg-12">
        <a class="btn btn-main-primary"  href="{{route('accounts.users',['account_id'=>$account['id'],'locale'=>app()->getLocale()])}}">
            {{__('Retour') }}
        </a>
        <!-- accounts/1/users -->
    </div>
</div>

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
                            {{__('Nom utilisateur')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['user_name']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Prénom')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['prenom']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Nom')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['nom']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Email')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['email']}}
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Propriétaire')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                @if($user['owner']==1)
                                    {{__('Oui')}}
                                @else
                                    {{__('Oui')}}
                                @endif
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Roles')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                @foreach($user['roles'] as $role)
                                    {{$role->name}}
                                @endforeach
                            </span>
                        </h6>
                        <h6 class="price">
                            {{__('Nom compte')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['account']['name']}}
                            </span>
                        </h6>
                        
                        <h6 class="price">
                            {{__('Compte N°')}}:
                            <span style="color: #adadad" class="h6 ml-2">
                                {{$user['account']['code']}}
                            </span>
                        </h6>
                        
                        


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

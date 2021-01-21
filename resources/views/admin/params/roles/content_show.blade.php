<div style="display: flex;justify-content: left; margin-left: 1px; margin-bottom:10px " class="row row-sm">
    <a class="btn btn-main-primary"  href="{{route('roles',app()->getLocale())}}">
        {{-- <i class="ti ti-arrow-left"></i> --}}
        {{__('Retour') }}
    </a>
</div>
<!-- GENERAL INFO -->

<!-- USERS -->
<div class="row row-sm">
    <div class="col-md-12 mg-md-t-0">
        <div class="card">
            <div class="card-header tx-medium bd-0 tx-white bg-primary">
                {{__('Role Management') }}
            </div>
            <div class="card-body ">
                <div class="row row-sm">
                    <!-- LEFT -->
                    <div style="border: 1px solid #eee;border-radius: 5px;margin-right: 20px;padding: 20px" class="col-md-5">
                        <h6 class="price">
                            {{__('Nom du role') }}
                            <span style="color: #adadad" class="h6 ml-2">{{ $role->name }}</span>
                        </h6>



                    </div>
                    <!-- RIGHT -->
                    <div style="border: 1px solid #eee;border-radius: 5px;padding: 20px"  class="col-md-6">


                        <h6 class="price">
                            {{__('Autorisations') }}
                            <span style="color: #adadad" class="h6 ml-2">
                                @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                <label class="label label-success">{{ $v->name }},</label>
                                @endforeach
                                @endif
                            </span>
                        </h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

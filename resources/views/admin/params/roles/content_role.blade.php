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
                {{__('Gestion des rôles') }}
            </div>
            <div class="card-body ">
                @include('admin.params.roles.table')
            </div>
        </div>
    </div>
</div>




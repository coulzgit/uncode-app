<div style="padding: 12px" class="row">
    <div id="user_form_error" style="background: #ff7c92; border: 1px solid #ff7c92;border-radius: 5px;min-height: 50px;padding-top: 5px" class="col-lg-12 col-md-12">



        @if($errors)
           @foreach ($errors->all() as $error)
              <div>{{ $error }}</div>
          @endforeach
        @endif


    </div>

</div>

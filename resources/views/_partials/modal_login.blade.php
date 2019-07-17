<!-- Modal login-->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{url('login')}}" method="post">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title mx-auto">LOG-IN</h5>
      </div>
      <div class="modal-body">
            <div class="offset-md-1 col-md-10 mb-2">
                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                @error('email')
                  <div id="email-error" class="invalid-feedback" style="display:block;">
                    {{ $message }}         
                  </div> 
                @enderror
            </div>        
            <div class="offset-md-1 col-md-10">
                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>                
            </div>
            <div class="offset-md-1 col-md-10">
                <button type="submit" class="col-md-12 btn btn-lg btn-success btn-round mt-4">Submit</button>       
            </div>
      </div>  
    <form>
  </div>
</div>
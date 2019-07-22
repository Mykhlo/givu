@extends('customer.base')
@section('content')
@include('_partials.navbar')
<header class="mt-5">
<div class="content container">
<div class="row">    
    <div class="col-lg-4">    
        <div class="py-4">
            <h5>Hello!</h5>
            <p>Welcome to our community  of people who improve the world every day by making free donations. Free donation? You heard correctly, see how it works on the cartoon! You now don't need to make a donation of money, you can donate your time ;)</p>      
        </div>
        <div class="row mb-3">
          <div class="col-6 ml-3 text-center d-flex align-items-center bg-success counter-title rounded">
            Number of donations
          </div>
          <h4 class="counter text-center d-flex align-items-center font-weight-bold text-white mt-0 ml-2 pl-2 pr-2 bg-danger rounded">22097</h4>
        </div>
    </div>
    <div class="col-lg-8 d-none d-lg-block">
        <div>             
            <div id="banner" class="rounded">
            <div id="cloud-scroll">
            <!-- <div>
            <video width="400" autoplay loop muted>
              <source src="{{asset('storage/video/givu_video.mp4')}}" type="video/mp4">              
              Your browser does not support the video tag.
            </video>-->
            </div> 
            </div>
        </div>        
    </div>
</div>
</div>
</header>
    <!-- navdar 2 temporary disabled -->
<section>
  <div class="container">
    <div class="row mt-4">
        @foreach ($categories as $row)
          @foreach ($row as $category)
            @if($loop->parent->last && $loop->count == 1)
              <div class="col-lg-12">
            @elseif($loop->parent->even && $loop->first)
              <div class="col-lg-7">
            @elseif($loop->parent->odd && $loop->last)
              <div class="col-lg-7">
            @else 
              <div class="col-lg-5">
            @endif                   
                <div class="card" data-background="image" style="background-image: url({{$category->preview}})">
                  @hasrole('customer')
                    <div class="btn-group-toggle favourite" data-toggle="buttons" data-id="{{$category->id}}">
                      <label class="btn btn-outline-success btn-round">
                        <input type="checkbox" alt="Submit" {{ $favourites->contains($category->id) ? 'checked' : ''}} autocomplete="off"> <i class="nc-icon nc-favourite-28"></i>
                      </label>
                    </div> 
                  @endhasrole           
                  <div class="card-body pt-4">
                    <!-- <h6 class="card-category">Header 1</h6> -->
                    <a href="{{route('category', ['category' => $category->name])}}">
                      <h3 class="card-title mt-0">{{$category->name}}</h3>
                    </a>
                    <p class="card-description">
                    {{$category->short_description}}
                    </p>
                    <div class="btn-group col-md-8 px-0" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger btn-round">Donate for free</button>
                        <button type="button" class="btn btn-success btn-round">quick free donation</button>                    
                    </div>
                    <button type="button" class=" col-md-8 mt-2 py-3 btn btn-outline-danger btn-round">Donate (credit card)</button>
                  </div>
                </div>
              </div>
            @endforeach 
        @endforeach
      </div>
  </div> 
</section>
<section>
  <div class="mt-2">
    <div class="col-12">
      <div class="card">
        <div class="card-body bg-success d-flex justify-content-center align-items-center rounded">
          <h6 class="pr-2">You want people to donate to your organization or project? Then add it to our collection!</h6>
          <a href="#" target="_blank" class="btn btn-light btn-round">Follow here...</a>
        </div>
      </div>
    </div>
</section>  
@endsection
@push('scripts')
<script src="{{ asset('js/animationCounter.js') }}"></script>
<script src="{{ asset('js/landing/custom.js') }}" type="text/javascript"></script>
<script>
  // counter animation
    $('.counter').animationCounter({
      start: 21800,      
      delay: 0.5,
      end: 22097
    });
</script>
<script>
@if($errors->has('email'))
  if(window.location.pathname == '/')
    $('#modal-login').modal('show')
@endif
</script>
<script>
  // favourite ajax request
  document.addEventListener('DOMContentLoaded', () => {
    
    let favs = document.querySelectorAll(".favourite");
    let token = document.getElementsByName('csrf-token')[0].getAttribute('content'); 
    let xhttp = new XMLHttpRequest();

    function fav_ajax(fav, index){
      let id = fav.getAttribute('data-id');
      fav.onclick = () => {
        xhttp.open("POST", "/", true);
        xhttp.setRequestHeader("X-CSRF-TOKEN", token);
        xhttp.setRequestHeader('Content-Type', 'application/json');
        xhttp.send(JSON.stringify({'id':id}));
      };      
    }

    favs.forEach(fav_ajax);
  });
</script>
@endpush
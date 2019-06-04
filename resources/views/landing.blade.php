@extends('layouts.customer.base')

@section('content')
<div class="row mt-4">
    <div class="col-lg-4">    
        <div class="py-4">
            <h5>Hello! </h5>
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
        <div id="banner" class="rounded">
            <div id="cloud-scroll"></div>
        </div>        
    </div>
</div>
    <!-- navdar 2 temporary disabled -->
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
            <div class="card" data-background="image" style="background-image: url('https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG')">
                <div class="btn-group-toggle favourite" data-toggle="buttons">
                  <label class="btn btn-outline-success btn-round">
                    <input type="checkbox" alt="Submit" {{ $loop->parent->iteration < 2 ? 'checked' : ''}} autocomplete="off"> <i class="nc-icon nc-favourite-28"></i>
                  </label>
                </div>            
              <div class="card-body pt-4">
                <!-- <h6 class="card-category">Header 1</h6> -->
                <a href="#">
                  <h3 class="card-title mt-0">{{$category->name}}</h3>
                </a>
                <p class="card-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                </p>
                <div class="btn-group col-8 px-0" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger btn-round">Donate</button>
                    <button type="button" class="btn btn-success btn-round">Donate for free</button>                    
                </div>
                <button type="button" class=" col-8 mt-2 btn btn-outline-danger btn-round">quick free donation</button>
              </div>
            </div>
          </div>
        @endforeach 
     @endforeach          
        </div>
  </div>
  <div class="mt-2">
    <div class="col-12">
      <div class="card">
        <div class="card-body bg-success d-flex justify-content-center align-items-center rounded">
          <h6 class="pr-2">You want people to donate to your organization or project? Then add it to our collection!</h6>
          <a href="#" target="_blank" class="btn btn-light btn-round">Follow here...</a>
        </div>
      </div>
    </div>  
  </div> 

@endsection
@push('scripts')
<script src="{{ asset('js/animationCounter.js') }}"></script>
<script src="{{ asset('js/landing/custom.js') }}" type="text/javascript"></script>
<script>
    $('.counter').animationCounter({
      start: 21800,      
      delay: 0.5,
      end: 22097
    });
</script>
@endpush
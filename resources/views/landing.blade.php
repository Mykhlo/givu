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
    @include('_partials.navbar2')
 <div class="mt-4">
    <div class="row">
          <div class="col-lg-5">
            <div class="card" data-background="image" style="background-image: url('https://www.goodeed.com/pictures/project/0b1849e7-721a-463f-ab85-8f3d52ea82c4.JPEG')">
                <div class="btn-group-toggle favourite" data-toggle="buttons">
                  <label class="btn btn-outline-success btn-round">
                    <input type="checkbox" alt="Submit" checked autocomplete="off"> <i class="nc-icon nc-favourite-28"></i>
                  </label>
                </div>            
              <div class="card-body">
                <h6 class="card-category">Header 1</h6>
                <a href="#">
                  <h3 class="card-title">Header 2</h3>
                </a>
                <p class="card-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger btn-round">Donate</button>
                    <button type="button" class="btn btn-success btn-round">Donate for free</button>                    
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card" data-background="image" style="background-image: url('https://www.goodeed.com/pictures/project/dbdf8ee9-ed61-4359-aac5-0a3e927fca2d.JPEG')">
                <div class="btn-group-toggle favourite" data-toggle="buttons">
                  <label class="btn btn-outline-success btn-round">
                    <input type="checkbox" alt="Submit" autocomplete="off"> <i class="nc-icon nc-favourite-28"></i>
                  </label>
                </div>
                <div class="card-body">
                <h6 class="card-category">Header 1</h6>
                <a href="#">
                    <h3 class="card-title">Header 2</h3>
                </a>
                <p class="card-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger btn-round">Donate</button>
                    <button type="button" class="btn btn-success btn-round">Donate for free</button>                    
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <div class="card" data-background="image" style="background-image: url('https://www.goodeed.com/pictures/project/524e6846-5776-4916-9525-dee2d46e385c.JPEG')">
              <div class="btn-group-toggle favourite" data-toggle="buttons">
                  <label class="btn btn-outline-success btn-round">
                    <input type="checkbox" alt="Submit" autocomplete="off"> <i class="nc-icon nc-favourite-28"></i>
                  </label>
              </div>
              <div class="card-body">
                    <h6 class="card-category">Header 1</h6>
                <a href="#">
                    <h3 class="card-title">Header 2</h3>
                </a>
                <p class="card-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger btn-round">Donate</button>
                    <button type="button" class="btn btn-success btn-round">Donate for free</button>                    
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card" data-background="image" style="background-image: url('https://www.goodeed.com/pictures/project/7c511d09-33f4-4ff0-bb3e-95a18d42d4ae.JPEG')">
              <div class="btn-group-toggle favourite" data-toggle="buttons">
                  <label class="btn btn-outline-success btn-round">
                    <input type="checkbox" alt="Submit" autocomplete="off"> <i class="nc-icon nc-favourite-28"></i>
                  </label>
              </div>
              <div class="card-body">
                    <h6 class="card-category">Header 1</h6>
                <a href="#">
                    <h3 class="card-title">Header 2</h3>
                </a>
                <p class="card-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua....
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger btn-round">Donate</button>
                    <button type="button" class="btn btn-success btn-round">Donate for free</button>                    
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
@push('scripts')
<script src="{{ asset('js/landing/custom.js') }}" type="text/javascript"></script>
@endpush
@extends('layouts.customer.base')

@section('content')
<div class="row mt-4">
    <div class="col-lg-4">    
        <div class="card-body">
            <h5>Inro title</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      
        </div>
    </div>
    <div class="col-lg-8">             
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

@extends('layouts.customer.base')

@section('content')
<div class="row mt-4">
    <div class="col-md-6">    
        <div class="card-body">
            <h5>Inro title</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>      
        </div>
    </div>
    <div class="col-md-6">             
        <div id="banner" class="rounded">
            <div id="cloud-scroll"></div>
        </div>        
    </div>
</div>
    @include('_partials.navbar2')

@endsection
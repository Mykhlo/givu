@extends('customer.base')
@section('content')
@include('_partials.navbar')
<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">{{$category->name}}</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
            {!! $category->description !!}
        </div>
      </div>
    </div>
  </header>
@endsection
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
        <div class="col-lg-8 align-self-baseline text-white">
            {!! $category->description !!}
        </div>
      </div>
    </div>
</header>
<section>  
      <div class="card mt-3 mx-3">
        <div class="card-body bg-warning rounded">
          <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-4 mt-md-0 mt-2">
              <button type="button" class="btn btn-lg btn-danger btn-round">donate for free</button>
            </div>
            <div class="col-md-4 mt-md-0 mt-2">
              <button type="button" class="btn btn-lg btn-success btn-round">quick free donation</button>
            </div>
            <div class="col-md-4 mt-md-0 mt-2">
              <button type="button" class="btn btn-lg btn-light btn-round">donate (credit card)</button>
            </div>
          </div>
          </div>
        </div>
      </div>
</section>

@endsection
@push('css')
<style>
    header.masthead {
        padding-top: 10rem;
        padding-bottom: calc(10rem - 72px);
        background: -webkit-gradient(linear,left top,left bottom,from(rgba(92,77,66,.8)),to(rgba(92,77,66,.8))),url({{$category->image}});
        background: linear-gradient(to bottom,rgba(92,77,66,.8) 0,rgba(92,77,66,.8) 100%),url({{$category->image}});
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }
@media only screen and (max-width: 420px) {
    h1 {
        font-size: 2.5em;
    }
}
</style>
@endpush
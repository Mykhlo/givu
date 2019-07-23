@extends('customer.base')
@section('content')
<section>
    <div class="content container">
        <div class="row">
            <div class="card text-white bg-grey col-12 px-0">
                <div class="card-header">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item col-4 text-center px-0">
                            <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">First step (Required)</a>
                        </li>
                        <li class="nav-item col-4 text-center px-0">
                            <a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false">Second step (Optional)</a>
                        </li>
                        <li class="nav-item col-4 text-center px-0">
                            <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">Third step (Optional)</a>
                        </li>
                    </ul>        
                </div>
                <div class="card-body">
                    <form action="{{url('/customer') }}" method="POST">            
                    @csrf
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Start -->
                            <div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">                        
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-6">                            
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="inputName" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-md-6">                            
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="inputEmail" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-6">                            
                                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group col-md-6">                            
                                            <input type="password" name="password_confirmation" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="form-group col-md-6">                                
                                            <select id="inputGender" name="gender" class="form-control" required>
                                                <option {{is_null(old('gender')) ? 'selected' : ''}} value="">Gender...</option>
                                                @foreach($gender as $option)
                                                    <option {{old('gender') == $option->id ? 'selected' : ''}} value="{{$option->id}}">{{$option->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">                                
                                            <input type="birthday" name="birthday" value="{{old('birthday')}}" class="form-control" id="inputbirthday" placeholder="Birthday" required>    
                                        </div>
                                    </div>                                                   
                                    <button id="first-button" type="button" class="btn btn-success offset-md-10 col-md-2">Next</button>
                            </div>
                            <!-- second step -->

                            <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">  
                                        <div class="form-group offset-md-3 col-md-6">                                
                                            <select id="inputStatus" name="parental_status" class="form-control">
                                                <option {{is_null(old('parental_status')) ? 'selected' : ''}} value=""> Parental status...</option>
                                                @foreach($parental_status as $option)
                                                    <option {{old('parental_status') == $option->id ? 'selected' : ''}} value="{{$option->id}}">{{$option->name}}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                        <div class="form-group offset-md-3 col-md-6">                                
                                            <select id="inputIncome" name="income" class="form-control">
                                                <option {{is_null(old('income')) ? 'selected' : ''}} value="">Monthly income</option>
                                                @foreach($income as $option)
                                                    <option {{old('income') == $option->id ? 'selected' : ''}} value="{{$option->id}}">{{$option->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group offset-md-3 col-md-6">                                
                                            <select multiple id="inputLanguages" name="languages[]" class="form-control" style="width: 100%">                                        
                                                @foreach($languages as $option)
                                                    <option {{old('languages') == $option->id ? 'selected' : ''}} value="{{$option->id}}" style="width: 100%">{{$option->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group offset-md-3 col-md-6">                                
                                            <select id="inputEducation" name="education" class="form-control">
                                                <option {{is_null(old('education')) ? 'selected' : ''}} value="">level of education</option>
                                                @foreach($education as $option)
                                                    <option {{old('education') == $option->id ? 'selected' : ''}} value="{{$option->id}}">{{$option->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>                                                 
                                    <button id="second-button" type="button" class="btn btn-success offset-md-10 col-md-2">Next</button>
                            </div>

                            <!-- third step -->
                            <div class="tab-pane fade" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                                <div class="row">
                                    <div class="col-5 col-md-3">   
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        @foreach($categories as $category)
                                            @if($loop->first)
                                                <a class="nav-link font-weight-bold active" id="v-pills-{{$category->id}}-tab" data-toggle="pill" href="#v-pills-{{$category->id}}" role="tab" aria-controls="v-pills-{{$category->id}}" aria-selected="true">{{$category->name}}</a>
                                            @else
                                                <a class="nav-link font-weight-bold" id="v-pills-{{$category->id}}tab" data-toggle="pill" href="#v-pills-{{$category->id}}" role="tab" aria-controls="v-pills-{{$category->id}}" aria-selected="false">{{$category->name}}</a>
                                            @endif
                                        @endforeach
                                        </div>                        </div>
                                    <div class="col-7 col-md-9 text-secondary">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            @foreach($categories as $category)                                                     
                                                @if($loop->first)                                   
                                                    <div class="tab-pane fade show active" id="v-pills-{{$category->id}}" role="tabpanel" aria-labelledby="v-pills-{{$category->id}}-tab">
                                                @else  
                                                    <div class="tab-pane fade" id="v-pills-{{$category->id}}" role="tabpanel" aria-labelledby="v-pills-{{$category->id}}-tab"> 
                                                @endif   
                                                        <div class="row mt-3 items">
                                                            @foreach($category->subcategories as $subcategory) 
                                                                    @if($loop->count > 1)
                                                                        <h3 {{$loop->first ? "class=mt-0":''}}>{{$subcategory->name}}</h3>
                                                                    @endif
                                                                        @foreach($subcategory->items as $item)   
                                                                        <div class="custom-control custom-checkbox">                                    
                                                                            <input type="checkbox" id="target-{{$item->id}}" class="custom-control-input" value="{{$item->id}}" name="target_checkboxes[]" {{ is_null(old('target_checkboxes.'.$item->id)) ? '' : 'checked' }}>
                                                                            <label class="custom-control-label pt-1" for="target-{{$item->id}}">{{$item->name}}</label>
                                                                        </div>
                                                                        @endforeach	
                                                            @endforeach                                                                                      
                                                        </div>																															
                                                    </div>
                                            @endforeach
                                        </div>                            
                                    </div>
                                    <div class='offset-md-8 col-md-2 mt-2'>
                                        <button id="skip-button" type="button" class="btn btn-danger col-12">Skip</button>
                                    </div>
                                    <div class='col-md-2 mt-2'>
                                        <button id="third-button" type="button" class="btn btn-success col-12">Next</button>
                                    </div>
                                </div>
                            </div> 
                            <!-- End -->
                        </div>  
                    </form>          
                </div>
            </div>
        </div>
    </div>
</section>
<section>
@if ($errors->any())
    <div id="errors" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</section>

@endsection
@section('footer')
@endsection
@push('css')
<!-- datapicker styles -->
<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
<!-- multiselector plugin styles -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<!-- custom styles -->
<link href="{{ asset('css/customer/registration.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<!--  step two checkboxes position  -->
<script src="{{ asset('js/customer/registration.js') }}"></script>
<!-- datapicker plugin -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!-- multiselector plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<!-- jq validation -->
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>
<!-- wizard buttons -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    var form = $('form');  
    form.validate({
         ignore: "",
         rules: {
            password: {               
                minlength: 6,
            },            
            password_confirmation: {
                equalTo: "#inputPassword"
            }
          }
         });    
    //Handle first step button 
    $('#first-button').click(() => {                
        if(form.valid()){
            $('#pills-second-tab').tab('show');  
            $('#errors').remove();
        }
    });
    // Handle second step button
    $('#second-button').click(() => {                        
        $('#pills-third-tab').tab('show');                      
    });
    // Handle third step button
    $('#third-button').click(()=>{
        if($('#v-pills-tab .active').next().is('a')){
            $('#v-pills-tab .active').next().tab('show');
        }else{                      
            if(!form.valid()){ 
                $('#pills-first-tab').tab('show');                
            }else{
                form.submit();                
            }        
        }    
    });
       // Handle skip button
       $('#skip-button').click(()=>{                       
            if(!form.valid()){ 
                $('#pills-first-tab').tab('show');                
            }else{
                form.submit();                
            }
    });
});
</script>
<!-- end jq validation -->
<!-- Handle multiselector -->
<script>
$('#inputLanguages').select2({
    width: 'resolve',
    placeholder: "Languages you speak",
});
</script>
<!-- Handle datepicker -->
<script>
  $( function() {
    $( "#inputbirthday" ).datepicker({
        changeYear: true,
        changeMonth: true,
        dateFormat: "yy-mm-dd",
        yearRange: "1919:2019",
    });
  } );
</script>
@endpush
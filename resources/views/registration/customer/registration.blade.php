@extends('layouts.customer.base')
@section('content')
<div class="row">
    <div class="card text-white bg-grey col-12 px-0">
        <div class="card-header">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item col-6 text-center px-0">
                    <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">Personal information</a>
                </li>
                <li class="nav-item col-6 text-center px-0">
                    <a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false">Interests/Hobbies</a>
                </li>
            </ul>        
        </div>
        <div class="card-body">
            <form id='first_step'>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
                    
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">                            
                                <input type="text" name="first_name" class="form-control" id="inputFirstName" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">                            
                                <input type="text" name="last_name" class="form-control" id="inputLastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">                            
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">                            
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">                                
                                <input type="birthday" name="birthday" class="form-control" id="inputbirthday" placeholder="Birthday" required>    
                            </div>
                            <div class="form-group col-md-6">                                
                                <select id="inputGender" name="gender" class="form-control" required>
                                    <option selected value="">Gender...</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                    <option value="other">other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">                                
                                <select id="inputStatus" name="status" class="form-control" required>
                                    <option value="" selected> Parental status...</option>
                                    <option value="with">with children</option>
                                    <option value="without">without children</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">                                
                                <input type="number" name="income" class="form-control" id="inputIncome" placeholder="Monthly household income" required>  
                            </div>
                        </div>                        
                        <button type="button" class="btn btn-success offset-md-10 col-md-2">Next</button>
                    

                </div>
                <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
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
                        </div>
                    </div>
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
                                                            <input type="checkbox" id="target-{{$item->id}}" class="custom-control-input" value="{{$item->id}}" name="target_checkboxes[]">
                                                            <label class="custom-control-label pt-1" for="target-{{$item->id}}">{{$item->name}}</label>
                                                        </div>
                                                        @endforeach	
                                            @endforeach                                                                                      
                                        </div>																															
                                    </div>
                            @endforeach
                        </div>
                    </div>
                  </div>
                </div>
            </form>
            </div>            
        </div>
    </div>
</div>
@endsection
@section('footer')
@endsection
@push('css')
<!-- datapicker styles -->
<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
<!-- custom styles -->
<link href="{{ asset('css/customer/registration.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<!-- datapicker plugin -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!-- jq validation -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
var form = $( "#first_step" );
// form.validate();
$("button").click(function() {
    form.validate();
    if(form.valid())
    $('#pills-second-tab').tab('show');
  
});
</script>
<!-- end jq validation -->
<script>
// step two checkboxes position 
document.addEventListener("DOMContentLoaded", function(event) {
    let items = document.querySelectorAll('.items');

    items.forEach((item,index)=>{
    
        let list = item.cloneNode(true).children;

        //clean items
        while (item.firstChild) {
            item.removeChild(item.firstChild);
        }
        
        if(list.length < 15){
            let new_element = document.createElement('div');
            new_element.classList.add("offset-md-2");
            new_element.classList.add("col-md-10");
            new_element.classList.add("mt-2");
            while(list.length > 0) {
                new_element.appendChild(list[0]);
            }
            item.appendChild(new_element);
            
        }else if(list.length){            
            let chunk = Math.ceil(list.length / 2);  
            
            //get arrays with indexes
            let divided = chunkIteration(list, chunk);    

            /**
            * Creates new DOM elements and adds existing 
            * separated by an array of indixes
            */
            divided.forEach((element, index)=>{
                let new_element = document.createElement('div');
                if(index == 0){
                    new_element.classList.add("offset-md-2");
                    new_element.classList.add("col-md-5");
                }else{
                    new_element.classList.add("col-md-5");
                }
                let length = element.length;
            
                for(i = 0; i < length; i++){
                    let elem = list[element[i]].cloneNode(true);
                    
                    new_element.appendChild(elem);  
                }
                
                item.appendChild(new_element)
            });            
        }
    });

            /**
            * Returns an array with arrays of the given indexes.
            *
            * @param myArray {Array} array to chunk
            * @param chunk_size {Integer} Size of every group
            */
            function chunkIteration(myArray, chunk_size){
                let index = 0;
                let arrayLength = myArray.length -1;    
                let tempArray = [];   

                for (index = 0; index < arrayLength; index += chunk_size) {
                    let step = index + chunk_size;
                    let group = [];        
                    for(let i = index; i < step; i++){
                        if(i  <= arrayLength)            
                            group.push(i);
                    }
                    tempArray.push(group);        
                }

                return tempArray;
            }
});
</script>
<script>
// datepicker
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
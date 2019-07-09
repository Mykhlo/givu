@extends('layouts.customer.base')
@section('content')
<div class="row">
    <div class="card text-white bg-grey col-12 px-0">
        <div class="card-header">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item col-4 px-0">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">First step</a>
                </li>
                <li class="nav-item col-4 px-0">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Second step</a>
                </li>
                <li class="nav-item col-4 px-0">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Third step</a>
                </li>
            </ul>        
        </div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h5 class="card-title">Primary card title3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
@section('footer')
@endsection
@push('css')
<link href="{{ asset('css/customer/registration.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function(event) {
    let items = document.querySelector('.items').cloneNode(true);
    let list = items.cloneNode(true).children;
    let chunk = Math.ceil(document.querySelector('.items').childElementCount / 2);    

    //clean items
    while (document.querySelector('.items').firstChild) {
        document.querySelector('.items').removeChild(document.querySelector('.items').firstChild);
    }
    //get arrays with indexes
    let divided = chunkIteration(list, chunk);    

    divided.forEach(iterate);


    /**
    * Creates new DOM elements and adds existing 
    * separated by an array of indices
    */
    function iterate(item,index){
        let new_element = document.createElement('div');
        if(index == 0){
            new_element.classList.add("offset-md-2");
            new_element.classList.add("col-md-5");
        }else{
            new_element.classList.add("col-md-5");
        }
        let length = item.length;
       
        for(i = 0; i < length; i++){
            let elem = list[item[i]].cloneNode(true);
            
            new_element.appendChild(elem);  
        }
        
        document.querySelector('.items').appendChild(new_element)
    }    

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
@endpush
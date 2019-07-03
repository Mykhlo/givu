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
                    <div class="col-3">   
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link font-weight-bold active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Apparel & Accessories</a>
                            <a class="nav-link font-weight-bold" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Vehicles</a>
                            <a class="nav-link font-weight-bold" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Gifts and occasions</a>
                            <a class="nav-link font-weight-bold" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Arts & Craft supplies</a>
                            <a class="nav-link font-weight-bold" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Beauty products and services</a>
                            <a class="nav-link font-weight-bold" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Consumer electronics</a>
                            <a class="nav-link font-weight-bold" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">Dating Services</a>
                            <a class="nav-link font-weight-bold" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false">Education</a>
                            <a class="nav-link font-weight-bold" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false">Events & Showbiz</a>
                            <a class="nav-link font-weight-bold" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false">Food</a>
                            <a class="nav-link font-weight-bold" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">Home</a>
                            <a class="nav-link font-weight-bold" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">Travel</a>
                        </div>
                    </div>
                    <div class="col-9 text-secondary">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                              <div class="row">
                                <div class="col-md-4">
                                    <h3>Activewear</h3>
                                        <input type="checkbox" id="target-17" value="17" name="target_checkboxes[]">
                                        <label for="target-17">Running wear</label> <br>
                                        <input type="checkbox" id="target-18" value="18" name="target_checkboxes[]">
                                        <label for="target-18">Yoga wear</label> <br>
                                        <input type="checkbox" id="target-19" value="19" name="target_checkboxes[]">
                                        <label for="target-19">Costumes</label> <br>
                                        
                                        <h3>Shoes</h3>
                                        <input type="checkbox" id="target-1" value="1" name="target_checkboxes[]">
                                        <label for="target-1">Activewear</label> <br>
                                        <input type="checkbox" id="target-2" value="2" name="target_checkboxes[]">
                                        <label for="target-2">Running wear</label> <br>
                                        <input type="checkbox" id="target-3" value="3" name="target_checkboxes[]">
                                        <label for="target-3">Yoga wear</label> <br>
                                        <input type="checkbox" id="target-4" value="4" name="target_checkboxes[]">
                                        <label for="target-4">Costumes</label> <br>
                                        <input type="checkbox" id="target-5" value="5" name="target_checkboxes[]">
                                        <label for="target-5"> Hand Soap - $3</label> <br>
                                        <input type="checkbox" id="target-6" value="6" name="target_checkboxes[]">
                                        <label for="target-6"> Air Freshener Spray - $2</label> <br>      
                                </div>
                                <div class="col-md-4">
                                    <h3>Eyewear</h3>
                                        <input type="checkbox" id="target-7" value="7" name="target_checkboxes[]">
                                        <label for="target-7">Eyeglasses / Contact Lenses</label> <br>
                                        <input type="checkbox" id="target-8" value="8" name="target_checkboxes[]">
                                        <label for="target-8">Sunglasses</label> <br>         
                                        
                                        <h3>Other</h3>
                                        <input type="checkbox" id="target-9" value="9" name="target_checkboxes[]">
                                        <label for="target-9">Swimwear</label> <br>
                                        <input type="checkbox" id="target-10" value="10" name="target_checkboxes[]">
                                        <label for="target-10">Wallets & briefcases & leather goods</label> <br> 
                                </div>
                                <div class="col-md-4">
                                    <h3>Formal wear</h3>
                                        <input type="checkbox" id="target-11" value="11" name="target_checkboxes[]">
                                        <label for="target-11">Suits and business attire</label> <br>
                                        <input type="checkbox" id="target-13" value="13" name="target_checkboxes[]">
                                        <label for="target-13">Handbags</label> <br>
                                        <input type="checkbox" id="target-14" value="14" name="target_checkboxes[]">
                                        <label for="target-14">Jewelry</label> <br>
                                        <input type="checkbox" id="target-15" value="15" name="target_checkboxes[]">
                                        <label for="target-15">Watches</label> <br>
                                        <input type="checkbox" id="target-15" value="15" name="target_checkboxes[]">
                                        <label for="target-10">Lingerie & underwear</label> <br>
                                        <input type="checkbox" id="target-16" value="16" name="target_checkboxes[]">
                                        <label for="target-16">luggage</label> <br>                                                                
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">2</div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">.3.</div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">.4.</div>
                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">.5.</div>
                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">.6.</div>
                            <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">.7.</div>
                            <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">..8</div>
                            <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">.9.</div>
                            <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">.10.</div>
                            <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">.11.</div>
                            <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">.12.</div>
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
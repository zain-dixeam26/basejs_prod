@extends('layouts.app')
@section('content')
<div class="my-3 p-3 bg-white rounded box-shadow">
<h1 class="border-bottom border-gray pb-2 mb-0">{{$page_heading}}</h1>
<div class="text-muted pt-3">
   <form action="{{$action}}" method="post" data-action="make_ajax" data-action-after="reload">
      <div class="form-group">
        <label for="price">Your Name</label>
        <input type="text" class="form-control" data-required="true" >  
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="price">Email</label>
            <input type="text" class="form-control" data-required="true"  >  
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="price">Password</label>
            <input type="password" class="form-control" data-required="true"  >  
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="price">Bio</label>
        <textarea class="form-control" ></textarea> 
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Website</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-group">
        <label for="inputAddress2">LinkedIn</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Facebook</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control" data-required="true">
            <option value="">Choose...</option>
            <option value="ny">NY</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="iAgree" data-required="true" value="">
        <label class="form-check-label" for="iAgree">I agree</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      
     
      </div>
      
    </form>
</div>
@endsection
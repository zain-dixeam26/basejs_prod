@extends('layouts.app')
@section('content')
<div class="my-3 p-3 bg-white rounded box-shadow">
<h1 class="border-bottom border-gray pb-2 mb-0">{{$page_heading}}</h1>
<div class="text-muted pt-3">
   <form>
      <div class="form-group">
        <label for="price">Single Select</label>
        <select class="form-control" data-s2="true" data-placeholder="Select a Feature">
          <option value=""></option>
          <option value="warm">Warm</option>
          <option value="shining">Shining</option>
        </select>
        <small class="form-text text-muted">Attribute <code>data-s2="true"</code> for label <code>data-placeholder="Select a Feature"</code></small>
      </div>
      <div class="form-group">
        <label for="price">Select Multiple</label>
        <select class="form-control" data-s2="true" data-placeholder="Select a Feature" multiple="">
          <option value=""></option>
          <option value="warm">Warm</option>
          <option value="shining">Shining</option>
        </select>
        <small class="form-text text-muted">Attribute <code>data-s2="true"</code> for label <code>data-placeholder="Select a Feature"</code></small>
      </div>
      <div class="form-group">
        <label for="price">Select Ajax</label>
        <select class="form-control" data-s2-ajax="true" data-placeholder="Select a Product" data-url="{{url($module['action'].'/filter')}}" multiple="" >
          <option value=""></option>
        </select>
        <small class="form-text text-muted">Attribute <code>data-s2-ajax="true"</code> for label <code>data-placeholder="Select a Product"</code> | For api endpoint data-url=""</small>
      </div>
    </form>
</div>
@endsection
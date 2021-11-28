@extends('layouts.app')
@section('content')
<div class="my-3 p-3 bg-white rounded box-shadow">
<h1 class="border-bottom border-gray pb-2 mb-0">{{$page_heading}}</h1>
<div class="text-muted pt-3">
   <form>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" data-mask="price" data-prefix="$">
        <small class="form-text text-muted">Attribute <code>data-mask="price"</code> for prefix <code>data-prefix="$"</code></small>
      </div>
      <div class="form-group">
        <label>Decimal with Point</label>
        <input type="text" class="form-control" data-mask="decimal">
        <small class="form-text text-muted">Attribute <code>data-mask="decimal"</code></small>
      </div>
      <div class="form-group">
        <label>Decimal without point</label>
        <input type="text" class="form-control" data-mask="decimal" data-negtive="false" data-point="false">
        <small class="form-text text-muted">Attribute <code>data-mask="decimal"</code> | Allow Negtive <code>data-negtive="false"</code> | Allow Point <code>data-point="false"</code></small>
      </div>
      <div class="form-group">
        <label>Year</label>
        <input type="text" class="form-control" data-mask="year" >
        <small class="form-text text-muted">Attribute <code>data-mask="year"</code></small>
      </div>
      <div class="form-group">
        <label>No Space</label>
        <input type="text" class="form-control" data-mask="no-space" >
        <small class="form-text text-muted">Attribute <code>data-mask="no-space"</code></small>
      </div>
      <div class="form-group">
        <label for="price">Phone</label>
        <input type="text" class="form-control" data-mask="phone" data-format="+9-999-9999999">
        <small class="form-text text-muted">Attribute <code>data-mask="phone"</code> for format <code>data-format="+9-999-9999999"</code> wheres, present single digit</small>
      </div>
      <div class="form-group">
        <label for="price">Datetime</label>
        <input type="text" class="form-control" data-mask="datetime" data-format="mm/dd/yyyy">
        <small class="form-text text-muted">Attribute <code>data-mask="datetime"</code> for format <code>data-format="mm/dd/yyyy"</code></small>
      </div>
      <div class="form-group">
        <label for="price">Uppercase</label>
        <input type="text" class="form-control" data-mask="uppercase" >
        <small class="form-text">Attribute <code>data-mask="uppercase"</code> </small>
      </div>
      <div class="form-group">
        <label for="price">Lowercase</label>
        <input type="text" class="form-control" data-mask="lowercase" >
        <small class="form-text">Attribute <code>data-mask="lowercase"</code> </small>
      </div>
      
    </form>
</div>
@endsection

@extends('admin/layout')
@section('page_title','Manage Tax')
@section('manage_tax_select','active')
@section('container')


<div class="row m-t-30">
<h1>Manage Coupon</h1>
      <a href="{{url('admin/tax')}}">
      <button type="button" class="btn btn-success catageory">
      back
      </button>   
      </a>
      <div class="col-lg-12">
      <div class="card-body">
      <form action="{{route('tax.manage_tax_process')}}" method="post">
      @csrf
      <div class="form-group">
      <label for="tax_value" class="control-label mb-1">Tax value</label>
      <input id="tax_value" value="{{$tax_value}}" name="tax_value" type="text" class="form-control" aria-required="true" aria-invalid="false">
      @error('tax_value')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>
      
      <div class="form-group">
      <label for="tax_desc" class="control-label mb-1">Tax desc</label>
      <input id="tax_desc" value="{{$tax_desc}}" name="tax_desc" type="text" class="form-control" aria-required="true" aria-invalid="false">
      @error('tax_desc')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>

      <div class="m-t-10">
      <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
         Submit
      </button>
      </div>
      <input type="hidden" name="id" value="{{$id}}"/>
      </form>
      </div>
      </div>
      </div>

     @endsection
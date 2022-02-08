
@extends('admin/layout')
@section('page_title','Manage color')
@section('manage_color_select','active')
@section('container')


<div class="row m-t-30">
<h1>Manage color</h1>
      <a href="{{url('admin/color')}}">
      <button type="button" class="btn btn-success catageory">
      back
      </button>   
      </a>
      <div class="col-lg-12">
      <div class="card-body">
      <form action="{{route('color.manage_color_process')}}" method="post">
      @csrf
      <div class="form-group">
      <label for="color" class="control-label mb-1">Size</label>
      <input id="color" value="{{$color}}" name="color" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      @error('color')
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
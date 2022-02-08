
@extends('admin/layout')
@section('page_title','Home Banner')
@section('home_banner_select','active')
@section('container')


      <div class="row m-t-30">
      <h1>Manage Catageory</h1>
      <a href="{{url('admin/home_banner')}}">
      <button type="button" class="btn btn-success catageory">
      back
      </button>   
      </a>
      <div class="col-lg-12">
      <div class="card-body">
      <form action="{{route('home_banner.manage_home_banner_process')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
      <div class="row">
      <div class="col-md-6">
      <label for="btn_txt" class="control-label mb-1">Btn Text</label>
      <input id="btn_txt" value="{{$btn_txt}}" name="btn_txt" type="text" class="form-control" aria-required="true" aria-invalid="false">
      @error('category_name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>
      <div class="col-md-6">
      <label for="btn_link" class="control-label mb-1">Btn Link</label>
      <input id="btn_link" value="{{$btn_link}}" name="btn_link" type="text" class="form-control" aria-required="true" aria-invalid="false">
      </div>
      </div>
      </div>
      <div class="form-group">
      <label for="image" class="control-label mb-1">Image</label>
      <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">
      @error('image')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
        @if($image!='')
        <a href="{{asset('storage/media/banner/'.$image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/banner/'.$image)}}"/></a>
        @endif
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
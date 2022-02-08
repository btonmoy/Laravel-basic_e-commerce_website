
@extends('admin/layout')
@section('page_title','Manage brand')
@section('manage_brand_select','active')
@section('container')

@error('images')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
{{$message}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@enderror

<div class="row m-t-30">
<h1>Manage brand</h1>
      <a href="{{url('admin/brand')}}">
      <button type="button" class="btn btn-success catageory">
      back
      </button>   
      </a>
      <div class="col-lg-12">
      <div class="card-body">
      <form action="{{route('brand.manage_brand_process')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
      <label for="brand" class="control-label mb-1">Brand</label>
      <input id="brand" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>

      <div class="form-group">
      <label for="image" class="control-label mb-1">Image</label>
      <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false">
      @error('image')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      <div class="form-group">
      <label for="category_image" class="control-label mb-1">Show in Home Page</label>
      <input id="is_home" name="is_home" type="checkbox"{{$is_home_selected}}>
      </div>
      @if($image!='')
      <img width="150px" src="{{asset('storage/media/model/'.$image )}}"/>
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
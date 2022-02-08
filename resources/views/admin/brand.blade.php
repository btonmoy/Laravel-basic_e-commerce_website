
@extends('admin/layout')
@section('page_title','Brand')
@section('brand_select','active')
@section('container')

         <div class="row m-t-30 ">
         @if(session()->has('message'))
         <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
             {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
          </div>
         @endif
            <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <h1>Brand</h1>
                        <a href="brand/manage_brand">
                        <button type="button" class="btn btn-success m-t-10">
                            Add Brand</button>
                        </a>
                        <table class="table table-borderless table-data3 m-t-20">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Brand</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->name}}</td>
                                    <td>
                                    @if($list->image!='')
                                    <img width="150px" src="{{asset('storage/media/model/'.$list->image )}}"/>
                                     @endif
                                    </td>
                                    <td>
                                     <a href="{{url('admin/brand/manage_brand/')}}/{{$list->id}}"><button class="btn btn-success" type="submit">Edit</button></a>
                                     
                                     
                                     @if($list->status==1)

                                    <a href="{{url('admin/brand/status/0')}}/{{$list->id}}">
                                     <button class="btn btn-primary" type="submit">
                                      Active
                                     </button>
                                     </a>
                                     @elseif($list->status==0)
                                     <a href="{{url('admin/brand/status/1')}}/{{$list->id}}">
                                     <button class="btn btn-warning" type="submit">
                                      Deactive
                                     </button>
                                     </a>
                                     @endif                  
                                     <a href="{{url('admin/brand/delete/')}}/{{$list->id}}"><button class="btn btn-danger" type="submit">Delete</button></a>
                                    </td>  
                                </tr>                             
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

    @endsection
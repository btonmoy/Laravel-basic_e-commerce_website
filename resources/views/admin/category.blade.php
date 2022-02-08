
@extends('admin/layout')
@section('page_title','Category')
@section('category_select','active')
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
                        <h1>Category</h1>
                        <a href="category/manage_category">
                        <button type="button" class="btn btn-success m-t-10">
                            Add Category</button>
                        </a>
                        <table class="table table-borderless table-data3 m-t-20">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->category_name}}</td>
                                    <td>{{$list->category_slug}}</td>
                                    <td>
                                     <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button class="btn btn-success" type="submit">Edit</button></a>
                                     
                                     
                                     @if($list->status==1)

                                    <a href="{{url('admin/category/status/0')}}/{{$list->id}}">
                                     <button class="btn btn-primary" type="submit">
                                      Active
                                     </button>
                                     </a>
                                     @elseif($list->status==0)
                                     <a href="{{url('admin/category/status/1')}}/{{$list->id}}">
                                     <button class="btn btn-warning" type="submit">
                                      Deactive
                                     </button>
                                     </a>
                                     @endif
                             
                                     <a href="{{url('admin/category/delete/')}}/{{$list->id}}"><button class="btn btn-danger" type="submit">Delete</button></a>

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
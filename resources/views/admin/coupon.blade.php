
@extends('admin/layout')
@section('page_title','Coupon')
@section('coupon_select','active')
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
                        <h1>Coupon</h1>
                        <a href="{{url('admin/coupon/manage_coupon')}}">
                        <button type="button" class="btn btn-success m-t-5">
                            Add Coupon</button>
                        </a>
                        <table class="table table-borderless table-data3 m-t-20">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Title</th>
                                    <th>Code</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->title}}</td>
                                    <td>{{$list->code}}</td>
                                    <td>{{$list->value}}</td>

                                    <td>
                                     <a href="{{url('admin/coupon/delete/')}}/{{$list->id}}"><button class="btn btn-danger" type="submit">Delete</button></a>
                                      
                                     @if($list->status==1)

                                     <a href="{{url('admin/coupon/status/0')}}/{{$list->id}}">
                                     <button class="btn btn-primary" type="submit">
                                      Active
                                     </button>
                                     </a>
                                     @elseif($list->status==0)
                                     <a href="{{url('admin/coupon/status/1')}}/{{$list->id}}">
                                     <button class="btn btn-warning" type="submit">
                                      Deactive
                                     </button>
                                     </a>

                                     @endif
                                     
                                     <a href="{{url('admin/coupon/manage_coupon/')}}/{{$list->id}}"><button class="btn btn-success" type="submit">Edit</button></a>

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
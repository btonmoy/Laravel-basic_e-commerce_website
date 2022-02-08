
@extends('admin/layout')
@section('page_title','Customer')
@section('customer_select','active')
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
                        <h1>Customer</h1>
                        <table class="table table-borderless table-data3 m-t-20">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->name}}</td>
                                    <td>{{$list->email}}</td>
                                    <td>{{$list->mobile}}</td>
                                    <td>{{$list->city}}</td>

                                    <td>
                                     <a href="{{url('admin/customer/show/')}}/{{$list->id}}"><button class="btn btn-success" type="submit">view</button></a>
                                     
                                     
                                     @if($list->status==1)

                                    <a href="{{url('admin/customer/status/0')}}/{{$list->id}}">
                                     <button class="btn btn-primary" type="submit">
                                      Active
                                     </button>
                                     </a>
                                     @elseif($list->status==0)
                                     <a href="{{url('admin/customer/status/1')}}/{{$list->id}}">
                                     <button class="btn btn-warning" type="submit">
                                      Deactive
                                     </button>
                                     </a>
                                     @endif
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
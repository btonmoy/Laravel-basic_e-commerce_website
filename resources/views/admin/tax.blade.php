
@extends('admin/layout')
@section('page_title','Tax')
@section('tax_select','active')
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
                        <h1>Tax</h1>
                        <a href="{{url('admin/tax/manage_tax')}}">
                        <button type="button" class="btn btn-success m-t-10 ">
                            Add Tax</button>
                        </a>
                        <table class="table table-borderless table-data3 m-t-20 ">
                            <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Tax Desc</th>
                                    <th>Tax Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $list)
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->tax_desc}}</td>
                                    <td>{{$list->tax_value}}</td>
                                    <td>{{$list->size}}</td>

                                    <td>
                                     <a href="{{url('admin/tax/manage_tax/')}}/{{$list->id}}"><button class="btn btn-success" type="submit">Edit</button></a>
                                     
                                     
                                     @if($list->status==1)

                                    <a href="{{url('admin/tax/status/0')}}/{{$list->id}}">
                                     <button class="btn btn-primary" type="submit">
                                      Active
                                     </button>
                                     </a>
                                     @elseif($list->status==0)
                                     <a href="{{url('admin/tax/status/1')}}/{{$list->id}}">
                                     <button class="btn btn-warning" type="submit">
                                      Deactive
                                     </button>
                                     </a>
                                     @endif
                             
                                     <a href="{{url('admin/tax/delete/')}}/{{$list->id}}"><button class="btn btn-danger" type="submit">Delete</button></a>

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
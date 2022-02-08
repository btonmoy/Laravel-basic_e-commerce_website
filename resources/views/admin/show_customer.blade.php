
@extends('admin/layout')
@section('page_title','Show Customer Details')
@section('custome_select','active')
@section('container')

    <div class="row m-t-30 ">
            <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <h1>Customer Details</h1>
                        <table class="table table-borderless table-data3 m-t-20">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Name</stron></td>
                                    <td>{{$customer_list->name}}</td>
                                </tr>    
                                <tr>
                                    <td><strong>Email</stron></td>
                                    <td>{{$customer_list->email}}</td>
                                </tr>    
                                   <tr>
                                    <td><strong>Mobile</stron></td>
                                    <td>{{$customer_list->mobile}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Password</stron></td>
                                    <td>{{$customer_list->password}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Address</stron></td>
                                    <td>{{$customer_list->address}}</td>
                                </tr>
                                <tr>
                                    <td><strong>City</stron></td>
                                    <td>{{$customer_list->city}}</td>
                                </tr>
                                <tr>
                                    <td><strong>State</stron></td>
                                    <td>{{$customer_list->state}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Zip</stron></td>
                                    <td>{{$customer_list->zip}}</td>
                                </tr>  
                                <tr>
                                    <td><strong>Company</stron></td>
                                    <td>{{$customer_list->company}}</td>
                                </tr>                   
                                <tr>
                                    <td><strong>GST</stron></td>
                                    <td>{{$customer_list->	gstin}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Created on</stron></td>
                                    <td>{{\Carbon\Carbon::parse
                                        ($customer_list->created_at)->format('d-m-Y h:i:s' )
                                    }} </td>
                                </tr>
                                <tr>
                                    <td><strong>Updated on</stron></td>
                                    <td>{{\Carbon\Carbon::parse
                                        ($customer_list->updated_at)->format('d-m-Y h:i:s' )
                                    }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

@endsection
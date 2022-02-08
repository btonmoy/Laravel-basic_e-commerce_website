
@extends('admin/layout')
@section('page_title','Manage Product')
@section('manage_product_select','active')
@section('container')
@if($id>0)
{{$image_required=""}}
@else 
 {{$image_required="required"}}
 @endif

<div class="row m-t-30">
<h1>Manage Product</h1>

@if(session()->has('sku_error'))
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
{{session('sku_error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif 

@error('attr_image.*')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
{{$message}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@enderror 

@error('images.*')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
{{$message}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@enderror

      <a href="{{url('admin/product')}}">
      <button type="button" class="btn btn-success catageory">
      back
      </button>   
      </a>
      <!-- <script>"{{asset('ckeditor/ckeditor.js')}}"</script> -->
      <script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
      <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col-lg-12">
      <div class="card-body">
      @csrf
      <div class="form-group">
      <label for="name" class="control-label mb-1">Name</label>
      <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      @error('name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>

      <div class="form-group">
      <label for="slug" class="control-label mb-1">Slug</label>
      <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      @error('slug')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror

      <div class="form-group">
      <label for="image" class="control-label mb-1">Image</label>
      <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}">
      @error('image')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      @if($image!='')
           <a href="{{asset('storage/media/'.$image)}}" target="_blank">
           <img width="100px" src="{{asset('storage/media/'.$image)}}"/></a>
      @endif
      </div>
      <div class="form-group">
      <div class="row">
      <div class="col-md-4">
      <label for="category_id" class="control-label mb-1">Category</label>
      <select id="category_id"  name="category_id" class="form-control" Required">
      <option value="">Select Categories</option>
      @foreach($category as $list)
      @if($category_id==$list->id)
      <option selected value="{{$list->id}}">
      @else
      <option  value="{{$list->id}}"> 
      @endif
      {{$list->category_name}}</option> 
      </option> 
      @endforeach
      </select>
      </div>

      <div class="col-md-4">
      <label for="brand" class="control-label mb-1">Brand</label>
      <select id="brand"  name="brand" class="form-control" Required">
      <option value="">Select Brands</option>
      @foreach($brands as $list)
      @if($brand==$list->id)
      <option selected value="{{$list->id}}">
      @else
      <option  value="{{$list->id}}"> 
      @endif
      {{$list->name}}</option> 
      </option> 
      @endforeach
      </select>
      </div>

      <div class="col-md-4">
      <label for="model" class="control-label mb-1">Model</label>
      <input id="model" value="{{$model}}" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      </div>
      </div>
      </div>

      <div class="form-group">
      <label for="short_desc" class="control-label mb-1">Short Desc</label>
      <textarea id="short_desc" name="short_desc" type="text"
       class="form-control" aria-required="true" aria-invalid="false" Required">{{$short_desc}}</textarea>
      @error('short_desc')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror

      <div class="form-group">
      <label for="desc" class="control-label mb-1">Desc</label>
      <textarea id="desc" name="desc" type="text" class="form-control" 
      aria-required="true" aria-invalid="false" Required"> {{$desc}} </textarea>
      @error('desc')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
     
      <div class="form-group">
      <label for="Keywords" class="control-label mb-1">Keywords</label>
      <input id="Keywords" value="{{$Keywords}}" name="Keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" Required>
      @error('Keywords')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror

      <div class="form-group">
      <label for="technical_specification" class="control-label mb-1">Technical Specification</label>
      <!-- <input id="technical_specification" value="{{$technical_specification}}" name="technical_specification" type="text" class="form-control" aria-required="true" aria-invalid="false" Required> -->
      <textarea id="technical_specification" name="technical_specification" type="text" class="form-control" 
      aria-required="true" aria-invalid="false" Required> {{$technical_specification}} </textarea>
      
      @error('technical_specification')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
    
      <div class="form-group">
      <label for="uses" class="control-label mb-1">Uses</label>
      <input id="uses" value="{{$uses}}" name="uses" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      @error('uses')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror

      <div class="form-group">
      <label for="warranty" class="control-label mb-1">warranty</label>
      <input id="warranty" value="{{$warranty}}" name="warranty" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
      @error('warranty')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>
      <div class="form-group">
      <div class="row">
      <div class="col-md-8">
      <label for="lead_time" class="control-label mb-1">Lead time</label>
      <input id="lead_time" value="{{$lead_time}}" name="lead_time" type="text" class="form-control" aria-required="true" aria-invalid="false">
      </div>
      <div class="col-md-4">
      <label for="tax_id" class="control-label mb-1">Tax</label>
      <select id="tax_id"  name="tax_id" class="form-control" Required">
      <option value="">Select Brands</option>
      @foreach($taxs as $list)
      @if($tax_id==$list->id)
      <option selected value="{{$list->id}}">
      @else
      <option  value="{{$list->id}}"> 
      @endif
      {{$list->tax_desc}}</option> 
      </option> 
      @endforeach
      </select>
      </div>
      </div>
      </div>
      <div class="form-group">
      <div class="row">
      <div class="col-md-3">
      <label for="is_promo" class="control-label mb-1">Is promo</label>
      <select id="is_promo"  name="is_promo" class="form-control" Required">
      @if($is_promo==1)
      <option value="1" selected>Yes</option>
      <option value="0">No</option>
      @else
      <option value="1">Yes</option>
      <option value="0" selected>No</option>
      @endif
      </select>
      </div>
     

      <div class="col-md-3">
      <label for="is_featured" class="control-label mb-1">Is Featured</label>
      <select id="is_featured"  name="is_featured" class="form-control" Required">
      @if($is_featured==1)
      <option value="1" selected>Yes</option>
      <option value="0">No</option>
      @else
      <option value="1">Yes</option>
      <option value="0" selected>No</option>
      @endif
      </select>
      </div>
      <div class="col-md-3">
      <label for="is_discounted" class="control-label mb-1">Is Discounted</label>
      <select id="is_discounted"  name="is_discounted" class="form-control" Required">
      @if($is_discounted==1)
      <option value="1" selected>Yes</option>
      <option value="0">No</option>
      @else
      <option value="1">Yes</option>
      <option value="0" selected>No</option>
      @endif
      </select>
      </div>
      <div class="col-md-3">
      <label for="is_tranding" class="control-label mb-1">Is Tranding</label>
      <select id="is_tranding"  name="is_tranding" class="form-control" Required">
      @if($is_promo==1)
      <option value="1" selected>Yes</option>
      <option value="0">No</option>
      @else
      <option value="1">Yes</option>
      <option value="0" selected>No</option>
      @endif
      </select>
      </div>
      </div>
      </div>
      <!-- <input type="hidden" name="id" value="{{$id}}"/> -->
      <h1 class="m-b-10">Product Images</h1>
      <div class="col-lg-12" >

      <div class="card">
      <div class="card-body">  
      <div class="form-group">
      <div class="row" id="product_images_box">
      @php
      $loop_count_num=1;
      @endphp
      @foreach($productImagesArr as $key=>$val)
      @php
      $loop_count_prev=$loop_count_num;
      $pIArr=(array)$val;
      @endphp
      <input id="piid"  name="piid[]" type="hidden" value="{{$pIArr['id']}}">
          <div class="form-group product_images_{{$loop_count_num++}}" >
          <label for="images" class="control-label mb-1">Image</label>
          <input id="images" name="images[]" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}">
           @if($pIArr['images']!='')
           <a href="{{asset('storage/media/'.$pIArr['images'])}}" target="_blank"><img width="100px" src="{{asset('storage/media/'.$pIArr['images'])}}"/></a>
           @endif
          </div>

          <div class="form-group" >
          <label for="images" class="control-label mb-1 m-t-35">&nbsp;&nbsp;&nbsp;&nbsp;</label>
           @if($loop_count_num==2)
          <button type="button" class="btn btn-success btn-lg" onclick="add_image_more()">
          <i class="fa fa-plus"></i>&nbsp;Add</button>   
          @else   
          <a href="{{url('admin/product/product_images_delete/')}}/{{$pIArr['id']}}/{{$id}}">    
          <button type="button" class="btn btn-danger btn-lg " onclick="remove_more('{{$loop_count_prev}}')">
          <i class="fa fa-plus"></i>&nbsp;Remove</button> </a>
          @endif                                        
          </div>
         <!-- <div class="col-md-4">
          <div class="form-group">
          <label for="images" class="control-label mb-1 ">Image</label>
          <input id="images" name="images[]" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}">
           @if($pIArr['images']!='')
           <img width="100px" src="{{asset('storage/media/'.$pIArr['images'])}}"/>
           @endif
          </div>
          </div> -->
        @endforeach

          </div>
          </div>
         </div>
         </div> 
         </div> 
        </div>
        </div>


      <input type="hidden" name="id" value="{{$id}}"/>
      <h1 class="m-b-10">Product Attribute</h1>
      <div class="col-lg-12" id="product_attr_box">
      @php
      $loop_count_num=1;
      @endphp
      @foreach($productAttrArr as $key=>$val)
      @php
      $loop_count_prev=$loop_count_num;
      $pAArr=(array)$val;
      @endphp
      <input id="paid"  name="paid[]" type="hidden" value="{{$pAArr['id']}}">
      <div class="card" id="product_attr_{{$loop_count_num++}}">
      <div class="card-body">  
      <div class="form-group">
      <div class="row">
      <div class="col-md-2">
      <label for="sku" class="control-label mb-1">SKU</label>
      <input id="sku"  name="sku[]" value="{{$pAArr['sku']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
       </div>
   
       <div class="col-md-2">
          <label for="mrp" class="control-label mb-1">MRP</label>
          <input id="mrp"  name="mrp[]" value="{{$pAArr['mrp']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
           </div>

           <div class="col-md-2">
          <label for="price" class="control-label mb-1">Price</label>
          <input id="price"  name="price[]" value="{{$pAArr['sku']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
           </div>
           
          <div class="col-md-3">
          <label for="size_id" class="control-label mb-1">Sizes</label>
          <select id="size_id"  name="size_id[]" class="form-control">
          <option value="">Select </option>
          @foreach($sizes as $list)
          @if($pAArr['size_id']==$list->id)
          <option value="{{$list->id}}" selected>{{$list->size}}</option>
          @else
          <option value="{{$list->id}}">{{$list->size}}</option>
          @endif
          @endforeach
          </select>
          </div>

          <div class="col-md-3">
          <label for="color_id" class="control-label mb-1">Colors</label>
          <select id="color_id"  name="color_id[]" class="form-control">
          <option value="">Select</option>
          @foreach($colors as $list)
          @if($pAArr['color_id']==$list->id)
          <option value="{{$list->id}}" selected> {{$list->color}}</option>
          @else
           <option value="{{$list->id}}">{{$list->color}}</option>
          @endif
         
          </option> 
          @endforeach
          </select>
          </div>
      
          <div class="col-md-2">
          <label for="qty" class="control-label mb-1">Qty</label>
          <input id="qty"  name="qty[]" value="{{$pAArr['qty']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" Required">
          </div>

          <div class="form-group">
          <label for="attr_image" class="control-label mb-1">Image</label>
          <input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}">
           @if($pAArr['attr_image']!='')
           <img width="100px" src="{{asset('storage/media/'.$pAArr['attr_image'])}}"/>
           @endif
          </div>

          <div class="form-group">
          <label for="attr_image" class="control-label mb-1 m-t-35">&nbsp;&nbsp;&nbsp;&nbsp;</label>
           @if($loop_count_num==2)
          <button type="button" class="btn btn-success btn-lg" onclick="add_more()">
          <i class="fa fa-plus"></i>&nbsp;Add</button>   
          @else   
          <a href="{{url('admin/product/product_attr_delete/')}}/{{$pAArr['id']}}/{{$id}}">    
          <button type="button" class="btn btn-danger btn-lg" onclick="remove_more('{{$loop_count_prev}}')">
          <i class="fa fa-plus"></i>&nbsp;Remove</button> </a>
          @endif                                        
          </div>

          </div>
          </div>
         </div>
         </div> 
         </div> 
        </div>
        @endforeach
        </div>
        </div>
        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block m-t-20">
         Submit
        </button>
       </div>
       <input type="hidden" name="id" value="{{$id}}"/>
       </form>
       </div>

<script>
 var loop_count=1;
  function add_more(){
      loop_count++;
      var html='<div class="card" id="product_attr_'+loop_count+'"> <div class="card-body"><div class="form-group"> <div class="row">';

      html+=' <input id="paid" type="text" name="paid[]"><div class="col-md-2"> <label for="sku" class="control-label mb-1">SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" Required"></div>';
      html+='<div class="col-md-2"> <label for="mrp" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]" type="text" class="form-control" aria-required="true" aria-invalid="false" Required"></div> ';
      html+='<div class="col-md-2"> <label for="price" class="control-label mb-1">Price</label><input id="price" name="price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" Required"></div>';
      var size_id_html=jQuery('#size_id').html();
      size_id_html = size_id_html.replace("selected", "");
      html+='<div class="col-md-3"> <label for="size_id" class="control-label mb-1">Size</label><select id="size_id" name="size_id[]" class="form-control">'+size_id_html+'</select></div>';
      var color_id_html=jQuery('#color_id').html();
      color_id_html = color_id_html.replace("selected", "");
      html+='<div class="col-md-3"> <label for="color_id" class="control-label mb-1">Color</label><select id="color_id" name="color_id[]" class="form-control">'+color_id_html+'</select></div>';
      html+='<div class="col-md-3"> <label for="qty" class="control-label mb-1">Qty</label><input id="qty" name="qty[]" type="text" class="form-control" aria-required="true" aria-invalid="false" Required"></div> ';
      html+='<div class="col-md-4"> <label for="attr_image" class="control-label mb-1">Image</label><input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false" Required"></div>';
      html+='<div class="col-md-2"><label class="control-label mb-1 m-t-3">&nbsp;&nbsp;&nbsp;&nbsp;</label><button type="button" class="btn btn-danger btn-lg" onclick=remove_more("'+loop_count+'")><i class="fa fa-minus"></i>&nbsp;Remove</button></div>';

      html+='</div></div></div></div>';

      jQuery('#product_attr_box').append(html)
  }

  function remove_more(loop_count){
    jQuery('#product_attr_'+loop_count).remove();
  }

  var loop_image_count=1;
  function add_image_more(){
    loop_image_count++;
   var html='<input id="piid"  name="piid[]" type="hidden"><div class="col-md-4 product_images_'+loop_image_count+'"> <label for="images" class="control-label mb-1 m-l-10">Image</label><input id="images" name="images[]" type="file" class="form-control" aria-required="true" aria-invalid="false" Required"></div>';
    html+='<div class="col-md-4 product_images_'+loop_image_count+'"><label class="control-label mb-1 m-t-35">&nbsp;</label><button type="button" class="btn btn-danger btn-lg" onclick=remove_image_more("'+loop_image_count+'")><i class="fa fa-minus"></i>&nbsp;Remove</button></div>';
    
    jQuery('#product_images_box').append(html)

  }

  function remove_image_more(loop_image_count){
    jQuery('.product_images_'+loop_image_count).remove();
  }
</script>

<script>
CKEDITOR.replace( 'short_desc' );
CKEDITOR.replace( 'desc' );
CKEDITOR.replace( 'technical_specification' );

</script>
@endsection


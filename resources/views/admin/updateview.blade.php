<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public"> 

    @include('admin.css')

    <style type="text/css">
      
      .title
      {
        color:white; 
        padding-top: 25px; font-size: 25px;
      }

      label
      {
        display: inline-block;
        width: 200px;
      }
    </style>

    
  </head>
  <body>
 
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')                                                                                                             
        <!-- partial --> 
     
     <div class="container-fluid page-body-wrapper">

      <div class="container" align="center">

      <h1 class="title">Add Product</h1>


      @if(session()->has('message'))

      <div class="alert alert-success"> 

      <button type="button" class="close" data-dismiss="alert">x</button>

      {{session()->get('message')}}

    </div> 

      @endif


      <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">  

      @csrf 

      <div style="padding:15px;">
        <label>Product Title</label>

        <input style="color: black" type="text" name="title" value="{{$data->title}}">
      </div>


      <div style="padding:15px;">
        <label>Price</label>

        <input style="color: black" type="number" value="{{$data->price}}" name="price">
      </div>

      <div style="padding:15px;">
        <label>Description</label>

        <input style="color: black" type="text" value="{{$data->description}}" name="des">
      </div>

      <div style="padding:15px;">
        <label>Quantity</label>

        <input style="color: black" type="text" value="{{$data->quantity}}" name="quantity">
      </div>


      <div style="padding:15px;">

        <label>Old Image</label>

        <img height="150" width="150" src="/productimage/{{$data->image}}">

      </div>


      <div style="padding:15px;">

      	<label>Change the image</label>

        <input type="file" name="file">

      </div>   

      <div style="padding:15px;">
         
        <input class="btn btn-success" type="submit">
      </div>
 
      </form>
          <!-- partial -->
     @include('admin.script') 
  </body> 
</html>
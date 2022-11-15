<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
   <style type="text/css">
    .div_center
    {
        text-align: center;
        padding-top:40px;

    }
    .font_size
    {
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color
    {
        color:black;
        padding-bottom:10px;
    }
    lable
    {
      display:inline-block;
      width:200px
    }
    .div_design
    {
      padding-bottom: 15px;
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
         <div class ="content-wrapper">
            <div class ="div_center">
                <h1 class="font_size"> Add product</h1>

            <form action"{{url('/add_products')}}" methods="post" enctype="multipart/form-data">
            @csrf
            <div class="div_design">

                <lable>product title</lable>
                <input class="text_color"type="text" name="title"placeholder="write a title" required="">
           </div>


           <div class="div_design">

           <lable>product Description </lable>
                <input class="text_color"type="text" name="description"placeholder="description"required="">
           </div>

           <div class="div_design">

           <lable>product price</lable>
                <input class="text_color"type="number" name="price"placeholder="write a price"required="">
           </div>

           <div class="div_design">

           <lable>Discount</lable>
                <input class="text_color"type="number" name="dis_price"placeholder="write a title">
           </div>

           <div class="div_design">
           <lable>product quantity</lable>
                <input class="text_color"type="number" min="0" name="title"placeholder="" required="">
           </div>
           
           <div class="div_design">

           <lable>product Catagory</lable>
               <select class="text-color" name=" catagory"required="">
                <option value=""selected="">Add catagory here</option>

                @foreach($catagory as $catagory)

                <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                @endforeach
               </select>
           </div>


           <div class="div_design">
           <lable>product image here:</lable>
                <input class="text_color"type="file" min="0" name="image"placeholder="">
           </div>

           <div class="div_design">
              <input type="submit" value="Add product" class="btn-btn-primary">
           </div>


           </form>


           </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
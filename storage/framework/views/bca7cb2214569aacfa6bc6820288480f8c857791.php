<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
     <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="main-panel">
         <div class ="content-wrapper">
            <div class ="div_center">
                <h1 class="font_size"> Add product</h1>

            <form action"<?php echo e(url('/add_product')); ?>" methods="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
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

                <?php $__currentLoopData = $catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($catagory->catagory_name); ?>"><?php echo e($catagory->catagory_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\git\resources\views/admin/product.blade.php ENDPATH**/ ?>
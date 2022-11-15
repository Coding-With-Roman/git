<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <style type="text/css">
    .div_center
    {
      text-align:center;
      padding-top:40px;

    }
    .h2_font
    {
      font-size:40px;
      padding-bottom:40px;
    }
    .input_color
    {
      color:black;
    }
    .center
    {
      margin:auto;
      width:50%;
      text-align:center;
      margin-top:30px;
      border:3px solid green;
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

         <div class="div_center">
          <h2 class ="h2_font"Add Catagory</h2>
          <form action="<?php echo e(url('/add_catagory')); ?>"method="post">
            <?php echo csrf_field(); ?>
            <input class="input_color" type="text" name="catagory"placeholder="write catagory name">

            <input type="submit"class="btn btn-primary"name="submit"value="Add Catagory">

          </form>



      </div>
      <table class="center">
        <tr>
          <td>Catagory Name</td>
          <td>Action</td>
      </tr>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($data->catagory_name); ?></td>
        <td>
          <a onclick="return confirm ('Are you Sure to Delete')"class="btn btn-danger" href="<?php echo e(url('delete_catagory',$data->id)); ?>">Delete</a>
      </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\git\resources\views/admin/catagory.blade.php ENDPATH**/ ?>
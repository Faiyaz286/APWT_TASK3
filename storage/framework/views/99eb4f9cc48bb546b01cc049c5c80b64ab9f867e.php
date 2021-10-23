<style>
    #home{
        background-color: blue
    }
</style>

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br><br><br>
    <h1>This is the home page of this web application...!!!</h1>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faiyaz\Downloads\APWT_TASK_3\resources\views/home.blade.php ENDPATH**/ ?>
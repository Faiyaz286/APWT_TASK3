<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <body>
        <div class="navbar navbar-brand" style="background-color: black">
            <?php echo $__env->make('includes.adminnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="container">
            <?php echo $__env->yieldContent('admincontent'); ?>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_3\resources\views/layouts/adminlayout.blade.php ENDPATH**/ ?>
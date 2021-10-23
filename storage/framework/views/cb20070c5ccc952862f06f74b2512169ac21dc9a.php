

<?php $__env->startSection('title'); ?>
    User Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
    <div class="form-control">
        <p class="center text-center"><b>User Details</b></p>
            <table class="table table-hover">
                <tr>
                    <td>Name:</td>
                    <td><?php echo e($user->u_name); ?></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><?php echo e($user->u_username); ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo e($user->u_email); ?></td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><?php echo e($user->u_dob); ?></td>
                </tr>
            </table>
            <a href="<?php echo e(route('admin.edituser', $user->id)); ?>"><button class="btn btn-outline-dark">Edit</button></a>
            <a href="<?php echo e(route('admin.dashboard')); ?>"><button class="btn btn-outline-dark">Back</button></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_3\resources\views/pages/admin/userdetails.blade.php ENDPATH**/ ?>
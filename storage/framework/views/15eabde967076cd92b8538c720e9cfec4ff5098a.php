

<style>
    #profile
    {
        background-color: blue
    }
</style>

<?php $__env->startSection('title'); ?>
    Admin Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
    <div class="form-control">
        <p class="center text-center"><b>Profile</b></p>
            <table class="table table-hover">
                <tr>
                    <td>Name:</td>
                    <td><?php echo e($admin->a_name); ?></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><?php echo e($admin->a_username); ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo e($admin->a_email); ?></td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><?php echo e($admin->a_dob); ?></td>
                </tr>
            </table>
            <a href="<?php echo e(route('admin.edit')); ?>"><button class="btn btn-outline-dark">Edit</button></a>
            <a href="<?php echo e(route('admin.dashboard')); ?>"><button class="btn btn-outline-dark">Back</button></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\APWT\APWT_TASK_3\resources\views/pages/admin/profile.blade.php ENDPATH**/ ?>
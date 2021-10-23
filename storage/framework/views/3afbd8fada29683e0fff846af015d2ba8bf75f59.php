

<style>
    #dashboard
    {
        background-color: blue
    }
</style>

<?php $__env->startSection('title'); ?>
    Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
    <br><h3><p class="center text-center text-danger">Admin Panel <br> Welcome <?php echo e($admin->a_name); ?>!</p></h3>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->u_name); ?></td>
                <td><?php echo e($user->u_username); ?></td>
                <td><?php echo e($user->u_email); ?></td>
                <td><?php echo e($user->u_dob); ?></td>
                <td><a href="<?php echo e(route('admin.userdetails', $user->id)); ?>"><button class="btn btn-outline-info">Details</button></a></td>
                <td><a href="<?php echo e(route('admin.edituser', $user->id)); ?>"><button class="btn btn-outline-success">Edit</button></a></td>
                <td><a href="<?php echo e(route('admin.deleteuser', $user->id)); ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faiyaz\Downloads\APWT_TASK_3\resources\views/pages/admin/dashboard.blade.php ENDPATH**/ ?>
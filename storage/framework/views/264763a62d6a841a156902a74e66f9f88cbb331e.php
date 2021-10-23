

<style>
    #adminlogin{
        background-color: blue
    }
</style>

<?php $__env->startSection('title'); ?>
    Admin Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-control">
        <p class="center text-center text-danger"><b>Admin Login</b></p>
        <form action="<?php echo e(route('admin.login')); ?>" class="form-control" method="POST">
            <?php echo e(csrf_field()); ?>

            <table class="table-borderless">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" class="form-control" id="username" name="username" placeholder="Username"></td>
                    <td>
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" class="form-control" id="password" name="password" placeholder="Password"></td>
                    <td>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-outline-dark form-control" value="Log In"></td>
                </tr>
            </table>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homelayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faiyaz\Downloads\APWT_TASK_3\resources\views/pages/admin/login.blade.php ENDPATH**/ ?>
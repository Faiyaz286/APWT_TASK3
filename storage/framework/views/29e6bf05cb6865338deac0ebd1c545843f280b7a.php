

<style>
    #edit{
        background-color: blue
    }
</style>

<?php $__env->startSection('title'); ?>
    Edit Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('admincontent'); ?>
    <div class="form-control">
        <p class="center text-center"><b>Edit Profile</b></p>
        <form action="<?php echo e(route('admin.edit')); ?>" class="form-control" method="POST">
            <?php echo e(csrf_field()); ?>

            <table class="table table-borderless">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" class="form-control" id="name" name="name" value="<?php echo e($admin->a_name); ?>"></td>
                    <td>
                        <?php $__errorArgs = ['name'];
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
                    <td>Email:</td>
                    <td><input type="text" class="form-control" id="email" name="email" value="<?php echo e($admin->a_email); ?>"></td>
                    <td>
                        <?php $__errorArgs = ['email'];
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
                    <td>Date Of Birth:</td>
                    <td><input type="date" class="form-control" id="dob" name="dob" value="<?php echo e($admin->a_dob); ?>"></td>
                    <td>
                        <?php $__errorArgs = ['dob'];
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
                    <td><input type="submit" class="btn btn-outline-dark form-control" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Faiyaz\Downloads\APWT_TASK_3\resources\views/pages/admin/edit.blade.php ENDPATH**/ ?>
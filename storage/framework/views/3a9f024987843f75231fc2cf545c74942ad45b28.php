<php>
<?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($computer->PC_ID); ?><div>
<?php echo e($computer->PC_Type); ?><div>
<?php echo e($computer->PC_Name); ?><div>
<?php echo e($computer->User_Name); ?><br>
<?php echo e($computer->Operating_System); ?><br>
<?php echo e($computer->Service_Pack); ?><br>
<?php echo e($computer->Date); ?><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/home.blade.php ENDPATH**/ ?>
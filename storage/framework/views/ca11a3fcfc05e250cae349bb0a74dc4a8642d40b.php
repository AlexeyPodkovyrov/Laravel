<php>
<div align="center" <h1> Информация об оперативных памятях</h1> </div>
<?php $__currentLoopData = $memories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($memory->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($memory->ID); ?><br>
<head> Физическая память: </head>
<?php echo e($memory->Size); ?><br>
<head> Скорость памяти: </head>
<?php echo e($memory->Speed); ?><br>
<head> Дата обращения: </head>
<?php echo e($memory->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/memories.blade.php ENDPATH**/ ?>
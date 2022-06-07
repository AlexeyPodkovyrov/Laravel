<php>
<div align="center" <h1> Информация о системных платах</h1> </div>
<?php $__currentLoopData = $motherboards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motherboard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($motherboard->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($motherboard->ID); ?><br>
<head> Системная плата: </head>
<?php echo e($motherboard->Name); ?><br>
<head> Производитель: </head>
<?php echo e($motherboard->Manufacturer); ?><br>
<head> Дата обращения: </head>
<?php echo e($motherboard->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/motherboards.blade.php ENDPATH**/ ?>
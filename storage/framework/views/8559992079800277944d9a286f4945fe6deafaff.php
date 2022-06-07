<php>
<div align="center" <h1>Информация о мониторах</h1></div>
<?php $__currentLoopData = $monitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($monitor->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($monitor->ID); ?><br>
<head> Название: </head>
<?php echo e($monitor->Name); ?><br>
<head> Производитель: </head>
<?php echo e($monitor->Manufacturer); ?><br>
<head> Частота кадров: </head>
<?php echo e($monitor->Refresh_Rate); ?><br>
<head> Максимальное разрешение: </head>
<?php echo e($monitor->Max_Resolution); ?><br>
<head> Дата обращения: </head>
<?php echo e($monitor->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/monitors.blade.php ENDPATH**/ ?>
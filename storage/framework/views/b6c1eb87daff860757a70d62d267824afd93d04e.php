<php>
<div align="center" <h1>Информация о видеокартах</h1> </div>
<?php $__currentLoopData = $videocards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videocard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($videocard->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($videocard->ID); ?><br>
<head> Видеоадаптер: </head>
<?php echo e($videocard->Name); ?><br>
<head> Объем видеопамяти: </head>
<?php echo e($videocard->Memory); ?><br>
<head> Версия драйвера: </head>
<?php echo e($videocard->Driver_Version); ?><br>
<head> Дата обращения: </head>
<?php echo e($videocard->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/videocards.blade.php ENDPATH**/ ?>
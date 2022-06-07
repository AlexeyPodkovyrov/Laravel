<php>
<div align="center" <h1>Информация о компьютерах</h1></div>
<?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($computer->PC_ID); ?><br>
<head> Тип компьютера: </head>
<?php echo e($computer->PC_Type); ?><br>
<head> Имя компьютера: </head>
<?php echo e($computer->PC_Name); ?><br>
<head> Имя пользователя: </head>
<?php echo e($computer->User_Name); ?><br>
<head> Операционная система: </head>
<?php echo e($computer->Operating_System); ?><br>
<head> Пакет обновления ОС: </head>
<?php echo e($computer->Service_Pack); ?><br>
<head> Дата обращения: </head>
<?php echo e($computer->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/computers.blade.php ENDPATH**/ ?>
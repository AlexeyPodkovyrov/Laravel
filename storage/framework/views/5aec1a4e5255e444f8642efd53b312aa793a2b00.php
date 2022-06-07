<php>
<div align="center" <h1>Информация о БИОСах</h1></div>
<?php $__currentLoopData = $bioses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($bios->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($bios->ID); ?><br>
<head> Дата и версия BIOS системы: </head>
<?php echo e($bios->Description); ?><br>
<head> Производитель: </head>
<?php echo e($bios->Manufacturer); ?><br>
<head> Версия BIOS: </head>
<?php echo e($bios->Version); ?><br>
<head> Версия SMBIOS: </head>
<?php echo e($bios->SMBIOS_Version); ?><br>
<head> Дата обращения: </head>
<?php echo e($bios->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/bioses.blade.php ENDPATH**/ ?>
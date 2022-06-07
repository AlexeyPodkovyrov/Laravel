<php>
<div align="center" <h1>Информация о хранении данных</h1></div>
<?php $__currentLoopData = $data_storages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_storage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($data_storage->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($data_storage->ID); ?><br>
<head> Серийный номер: </head>
<?php echo e($data_storage->Serial_Number); ?><br>
<head> ID модели: </head>
<?php echo e($data_storage->Model_ID); ?><br>
<head> Версия: </head>
<?php echo e($data_storage->Version); ?><br>
<head> Тип интерфейса: </head>
<?php echo e($data_storage->Interface_Type); ?><br>
<head> Объем памяти: </head>
<?php echo e($data_storage->Size); ?><br>
<head> Логический диск: </head>
<?php echo e($data_storage->Logical_Disk); ?><br>
<head> Файловая система: </head>
<?php echo e($data_storage->File_System); ?><br>
<head> Общий объем: </head>
<?php echo e($data_storage->Logical_Disk_Size); ?><br>
<head> Свободное место: </head>
<?php echo e($data_storage->Logical_Disk_Free_Space); ?><br>
<head> Дата обращения: </head>
<?php echo e($data_storage->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/data_storages.blade.php ENDPATH**/ ?>
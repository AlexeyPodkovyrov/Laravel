<php>
<div align="center" <h1>Информация о процессорах</h1> </div>
<?php $__currentLoopData = $processors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $processor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<br><hr>
<head> Номер компьютера: </head>
<?php echo e($processor->PC_ID); ?><br>
<head> Номер компонента: </head>
<?php echo e($processor->ID); ?><br>
<head> Процессор: </head>
<?php echo e($processor->Name); ?><br>
<head> Производитель: </head>
<?php echo e($processor->Manufacturer); ?><br>
<head> Описание: </head>
<?php echo e($processor->Description); ?><br>
<head> Количество ядер: </head>
<?php echo e($processor->Number_of_cores); ?><br>
<head> Дата обращения: </head>
<?php echo e($processor->Date); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</php><?php /**PATH C:\Users\USER\Desktop\OSPanel\domains\pc_info\resources\views/processors.blade.php ENDPATH**/ ?>
<php>
<div align="center" <h1>Информация о хранении данных</h1></div>
@foreach ($data_storages as $data_storage)
<br><hr>
<head> Номер компьютера: </head>
{{$data_storage->PC_ID}}<br>
<head> Номер компонента: </head>
{{$data_storage->ID}}<br>
<head> Серийный номер: </head>
{{$data_storage->Serial_Number}}<br>
<head> ID модели: </head>
{{$data_storage->Model_ID}}<br>
<head> Версия: </head>
{{$data_storage->Version}}<br>
<head> Тип интерфейса: </head>
{{$data_storage->Interface_Type}}<br>
<head> Объем памяти: </head>
{{$data_storage->Size}}<br>
<head> Логический диск: </head>
{{$data_storage->Logical_Disk}}<br>
<head> Файловая система: </head>
{{$data_storage->File_System}}<br>
<head> Общий объем: </head>
{{$data_storage->Logical_Disk_Size}}<br>
<head> Свободное место: </head>
{{$data_storage->Logical_Disk_Free_Space}}<br>
<head> Дата обращения: </head>
{{$data_storage->Date}}
@endforeach
</php>
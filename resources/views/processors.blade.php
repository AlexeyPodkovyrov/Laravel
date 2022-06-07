<php>
<div align="center" <h1>Информация о процессорах</h1></div>
@foreach ($processors as $processor)
<br><hr>
<head> Номер компьютера: </head>
{{$processor->PC_ID}}<br>
<head> Номер компонента: </head>
{{$processor->ID}}<br>
<head> Процессор: </head>
{{$processor->Name}}<br>
<head> Производитель: </head>
{{$processor->Manufacturer}}<br>
<head> Описание: </head>
{{$processor->Description}}<br>
<head> Количество ядер: </head>
{{$processor->Number_of_cores}}<br>
<head> Дата обращения: </head>
{{$processor->Date}}
@endforeach
</php>
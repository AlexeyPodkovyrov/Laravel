<php>
<div align="center" <h1>Информация о мониторах</h1></div>
@foreach ($monitors as $monitor)
<br><hr>
<head> Номер компьютера: </head>
{{$monitor->PC_ID}}<br>
<head> Номер компонента: </head>
{{$monitor->ID}}<br>
<head> Название: </head>
{{$monitor->Name}}<br>
<head> Производитель: </head>
{{$monitor->Manufacturer}}<br>
<head> Частота кадров: </head>
{{$monitor->Refresh_Rate}}<br>
<head> Максимальное разрешение: </head>
{{$monitor->Max_Resolution}}<br>
<head> Дата обращения: </head>
{{$monitor->Date}}
@endforeach
</php>
<php>
<div align="center" <h1>Информация об оперативных памятях</h1></div>
@foreach ($memories as $memory)
<br><hr>
<head> Номер компьютера: </head>
{{$memory->PC_ID}}<br>
<head> Номер компонента: </head>
{{$memory->ID}}<br>
<head> Физическая память: </head>
{{$memory->Size}}<br>
<head> Скорость памяти: </head>
{{$memory->Speed}}<br>
<head> Дата обращения: </head>
{{$memory->Date}}
@endforeach
</php>
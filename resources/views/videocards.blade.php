<php>
<div align="center" <h1>Информация о видеокартах</h1></div>
@foreach ($videocards as $videocard)
<br><hr>
<head> Номер компьютера: </head>
{{$videocard->PC_ID}}<br>
<head> Номер компонента: </head>
{{$videocard->ID}}<br>
<head> Видеоадаптер: </head>
{{$videocard->Name}}<br>
<head> Объем видеопамяти: </head>
{{$videocard->Memory}}<br>
<head> Версия драйвера: </head>
{{$videocard->Driver_Version}}<br>
<head> Дата обращения: </head>
{{$videocard->Date}}
@endforeach
</php>
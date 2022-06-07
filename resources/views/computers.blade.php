<php>
<div align="center" <h1>Информация о компьютерах</h1></div>
@foreach ($computers as $computer)
<br><hr>
<head> Номер компьютера: </head>
{{$computer->PC_ID}}<br>
<head> Тип компьютера: </head>
{{$computer->PC_Type}}<br>
<head> Имя компьютера: </head>
{{$computer->PC_Name}}<br>
<head> Имя пользователя: </head>
{{$computer->User_Name}}<br>
<head> Операционная система: </head>
{{$computer->Operating_System}}<br>
<head> Пакет обновления ОС: </head>
{{$computer->Service_Pack}}<br>
<head> Дата обращения: </head>
{{$computer->Date}}
@endforeach
</php>
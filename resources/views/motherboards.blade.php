<php>
<div align="center" <h1>Информация о системных платах</h1></div>
@foreach ($motherboards as $motherboard)
<br><hr>
<head> Номер компьютера: </head>
{{$motherboard->PC_ID}}<br>
<head> Номер компонента: </head>
{{$motherboard->ID}}<br>
<head> Системная плата: </head>
{{$motherboard->Name}}<br>
<head> Производитель: </head>
{{$motherboard->Manufacturer}}<br>
<head> Дата обращения: </head>
{{$motherboard->Date}}
@endforeach
</php>
<php>
<div align="center" <h1>Информация о БИОСах</h1></div>
@foreach ($bioses as $bios)
<br><hr>
<head> Номер компьютера: </head>
{{$bios->PC_ID}}<br>
<head> Номер компонента: </head>
{{$bios->ID}}<br>
<head> Дата и версия BIOS системы: </head>
{{$bios->Description}}<br>
<head> Производитель: </head>
{{$bios->Manufacturer}}<br>
<head> Версия BIOS: </head>
{{$bios->Version}}<br>
<head> Версия SMBIOS: </head>
{{$bios->SMBIOS_Version}}<br>
<head> Дата обращения: </head>
{{$bios->Date}}
@endforeach
</php>
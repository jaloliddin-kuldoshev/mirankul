Имя : {{ $name }} <br>
Компания : {{ $tel }}<br>
Email : {{ $comp }}<br>
Телефон : {{ $email }}<br>
Ваше сообщения : {{ $mes }}<br>
@if (isset($excel))
<a href="http://mirankul/uploads/{{$excel}}">Файл</a>	
@endif

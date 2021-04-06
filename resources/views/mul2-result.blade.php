@extends('layouts.main')

@section('title', 'Multiplication Table Result')

@section('content')
<table border="1">
@for ($i=1; $i <= 12; $i++)
<tr>
	@for ($j = 2; $j <= $n ; $j++)
	<td> {{ $i * $j }} </td>
	@endfor
	</tr>
@endfor
</table>
<br>
@endsection
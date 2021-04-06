@extends('layouts.main')

@section('title', $title)

@section('content')
<table>
    <tr>
	    <td><b>member type</b></td>
        <td><em>{{$memberType}}</em></td>
	</tr>
    <tr>
	    <td><b>price</b></td>
        <td><em>{{number_format($price,2 )}}</em></td>
	</tr>
    <tr>
	    <td><b>discount</b></td>
        <td><em>{{number_format($discount,2 )}}%</em></td>
	</tr>
    <tr>
	    <td><b>discount cost</b></td>
        <td><em>{{number_format($discountCost,2 )}}</em></td>
	</tr>
    <tr>
	    <td><b>net price</b></td>
        <td><em>{{number_format($netPrice,2 )}}</em></td>
	</tr>
</table>
<br>
@endsection
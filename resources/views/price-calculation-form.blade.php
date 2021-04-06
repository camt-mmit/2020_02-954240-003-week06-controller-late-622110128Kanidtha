@extends('layouts.main')

@section('title', $title)

@section('content')

<form action="{{ route('price-calculation-result') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>price</td>
                <td><input type="number" name="price" step="0.25" require/></td>
            </tr>
        <br>
            <tr>
                <td>member type</td>
                <td><select name="memberType" required>
                <option value="">-- Please select --</option>
                @foreach($memberTypes as $code => $memberType)
                <option value="{{ $code }}">{{ $memberType['name'] }}</option>
                @endforeach
                </select></td>
            </tr>
            </br>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
@endsection
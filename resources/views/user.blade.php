<style>
        h2{
            text-align:center;
            margin:5%;
            font-size:60px;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {background-color: #f2f2f2;}

</style>
@extends('layouts.master')
@section('title','User View')
@section('content')
<h2>Here is User Data</h2>
<table>
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Address</td>
        <td>Month</td>
        <td>Score</td>
        <td>Month</td>
        <td>Score</td>

    </tr>
	@foreach ($users as $user)
	<tr>
		<td>{{$user['name']}}</td>
		<td>{{$user['phone']}}</td>
		<td>{{$user['email']}}</td>
		<td>{{$user['address']}} </td>
		@foreach ($user['score'] as $key=>$val)
			<td>{{$key}} </td>
			<td>{{$val}}</td>
		@endforeach
	@endforeach
</tr>
</table>
 
        
    
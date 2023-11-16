<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 90%;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      height: 100%;
      
    }
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;  
    }
    #customers tr:hover {background-color: #337b839e;}
    #customers th {    
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
@extends('admin')
@section('content')  
<table id="customers"> 
    <tr>
      <th>ID</th> 
      <th>HEADING</th>
      <th>DETAILS</th>
      <th>PHONE'S</th>
      <th>EMAIL'S</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach ($data as $data )
    <tr>    
      <td>{{$data->id }}</td>
      <td>{{$data->heading}}</td>
      <td>{{Str::words($data->details, 10)}} Chef</td>
      <td>{{$data->phone}},{{$data->phone2}}</td>
      <td>{{$data->email}},{{$data->email2}}</td>
      <td><a href="">Edit</a></td>
      <td><a href="" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>
    </tr>
    @endforeach
  </table>
@endsection
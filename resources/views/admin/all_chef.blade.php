<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 70%;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      height: 70%;
      
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      height: 40px;
      width: 20px;
      
    }
    
    
    #customers tr:hover {background-color: #337b839e;}
    
    #customers th {    
    
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    head
    {
        text-align: center;
    }
   
    </style>
@extends('admin')
@section('title' , 'ALL FOOD"S')
@section('content')  
<table id="customers">
    <tr>
      <th>ID</th> 
      <th>Name</th>
      <th>Speciality</th>
      <th>Faceook</th>
      <th>Twitter</th>
      <th>Insta</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach ($data as $data )
    <tr>    
      <td>{{$data->id }}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->speciality}} Chef</td>
      <td>{{$data->facebook}}</td>
      <td>{{$data->twitter}}</td>
      <td>{{$data->insta}}</td>
      <td ><img style="width:80px; height: 80px;  object-fit: cover; " src="/chefimage/{{$data->image}}" alt="Image"></td>       
      <td><a href="{{route('edit.chef' , $data->id)}}">Edit</a></td>
      <td><a href="{{route('delete.chef' , $data->id)}}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>
    </tr>
    @endforeach
   </table>
@endsection
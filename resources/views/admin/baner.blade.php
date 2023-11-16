<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 70%;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
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
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    justify-content: center;
    align-items: center;
    height: 110vh;
    }
    .header{
    font-size: 50px;
    font-weight: bold;
    text-align: center;
    padding: 20px;
    }
    label{
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: rgb(0, 0, 0); 
    } 
    input[type="text"],input[type="email"],input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ffffff;
        border-radius: 4px;   
    }
    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding-bottom: 50px;
        padding: 10px 20px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer; 
    }
    .form-group button:hover { 
        background-color: #cc0000;
    }
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        background-color: #3d929aa7;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-group button {
        background-color: #4caf50;
        color: #fff;
        position: relative; 
        padding: 10px 20px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group {
        margin-bottom: 20px;
    }
    input[type="text"],input[type="num"]{
        color: rgb(0, 0, 0); /* Change 'blue' to the desired color */
    }
    </style>

    
@extends('admin')
@section('title' , 'ALL FOOD"S')
@section('content')  

    <div class="container">
    <h1 class="header">Main Baner Area</h1>
    <form action="{{route('add.baner')}}" method="post" class="form-container" >
        @csrf
        @method('post')
        <div class="form-group">
            <label >Cafe Name:</label>
            <input type="text"   name="cafe_name" placeholder="Wrtite A Cafe Name">
        </div>
       
        <div class="form-group">
            <label >Cafe Short Description :</label>
            <input type="text"   name="short_desc" placeholder="Wrtite A Short Description About You'r  Cafe">
        </div>
        <div class="form-group">
            <button type="submit">Add</button>     
        </div>
 </form>



<table id="customers">
    
    <thead>
        
        <tr>
            <th>Cafe Name</th>
            <th>Cafe Desc</th>
            <th>Edit</th>
            <th>Delete</th>
           
        </tr>
    </thead>

        @foreach ($data as $data) 
    <tbody>
            <tr>     
            <td>{{$data->cafe_name}}</td>
             <td>{{$data->short_desc}}</td>
             <td><a href="{{route('edit.baner' , $data->id)}}" onclick="return confirm('Are you sure you want to edit this item?')">Edit</a></td>
            <td><a href="" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>
               
            </tr>
       @endforeach 
      </tbody>
    </div>
</div> 
@endsection
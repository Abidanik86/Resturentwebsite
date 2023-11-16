<style>
    body 
    {
        font-family: Arial, sans-serif;
        margin: 0;
        justify-content: center;
        align-items: center;
      
    }
    .header
    {
        font-size: 40px;
        font-weight: bold;
        text-align: center;
    }
    label
    {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input 
    {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: rgb(0, 0, 0); 
    } 
    input[type="text"],input[type="email"],input[type="password"] 
    {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #000000;
        border-radius: 4px; 
        color: #000;  
    }
    input[type="submit"] 
    {
        background-color: #4caf50;
        color: #fff;
        padding-bottom: 50px;
        padding: 10px 20px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer; 
    }
    .form-group button:hover 
    { 
        background-color: #cc0000;
    }
    .form-container 
    {
        max-width: 400px;
        
        margin: 0 auto;
        background-color: #3d929aa7;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-group button 
    {
        background-color: #4caf50;
        color: #fff;
        position: relative; 
        padding: 10px 20px;
        text-align: center;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group 
    {
        margin-bottom: 20px;
    }
    input[type="text"],input[type="num"]
    {
        color: rgb(0, 0, 0); /* Change 'blue' to the desired color */
    }
    </style>
@extends('admin')
@section('content')  

    <div class="container">
        <h1 class="header">Add Contact Information</h1>
        <form action="{{route('add.contact')}}" method="post" class="form-container">
            @csrf
            @method('post')
        <div class="form-group">
            <label>Heading:</label>
            <input type="text"  name="heading">
         </div>
        <div class="form-group">
            <label>Details:</label>
            <input type="text" name="details"  >
        </div>
        <div class="form-group">
            <label>First Phone Number:</label>
            <input style="color: #000" type="number"   name="phone" >
           
        </div>
        <div class="form-group">
            <label>Second Phone Number :</label>
            <input style="color: #000" type="number"   name="phone2" >
           
        </div>
        <div class="form-group">
            <label>First Email:</label>
            <input style="color: #000" type="text"  name="email" >
        </div>
        <div class="form-group">
            <label>Second Email:</label>
            <input style="color: #000" type="text"  name="email2" >
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
            <button href="javascript:history.back()"> Cancel</button>      
        </div>  
          
        </form>

 </div>
    
@endsection
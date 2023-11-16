
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
   
    justify-content: center;
    align-items: center;
    height: 100vh;
   }

  .header{
    font-size: 50px;
    font-weight: bold;
   
    text-align: center;
    }
      label
   {
    display: block;
            font-weight: bold;
            margin-bottom: 5px;
    }
    input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
    
     }
     input[type="text"],
     input[type="email"],
     input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
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
    background-color: #64aa5b;
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
    color: black;
     }
     .container{
    padding: 100px;
    }

</style>
@extends('admin')
<base href="/public">
@section('content')
   
<div class="container">
    <h1 class="header">Update Logo </h1>
    <form action="{{ route('update.logo' , $data->id)}}" enctype="multipart/form-data" method="post" class="form-container">
        @csrf
        @method('post')
    <div class="form-group">
        <label>Logo Title:</label>
        <input type="text"  name="logo_title" value="{{$data->logo_title}}" >
     </div>
     <div class="form-group">
        <label for="">Current Logo</label>
        @if($data->image)
            <img src="logoimage/{{$data->image}}" alt=""> 
        @else
            <p>No Image Available</p>   
        @endif
     </div>

     <div class="form-group">
        <label >Logo:</label>       
        <input type="file"  name="image">
    </div>
    <div class="form-group">
        <button type="submit" onclick="return confirm('Are you sure you want to Update this item?')">Update</button> 
        <button><a style="color: white;" href="javascript:history.back()">Cancel</a> </button>  
    </div>
       
    </form>
</div>
 
@endsection
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
<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.admincss')
    <title>@section('title' , 'ALL Food')</title>
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')
        <!-- main-panel ends -->
       
        
        <table id="customers">
         
            <tr>
              <th>ID</th> 
              <th>Title</th>
              <th>Price</th>
              <th>Description</th>
              <th>Image</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
         
            @foreach ($data as $data )
            
            <tr>    
              
              <td>{{ $data->id }}</td>
              <td>{{ $data->title}}</td>
              <td>{{ $data->price}} Taka</td>
              <td>{{ Str::words($data->description, 10)}}</td> 
              <td ><img style="width:80px; height: 50px;  object-fit: cover; " src="/foodimage/{{$data->image}}" alt="Image"></td>       
              <td><a href="{{ route('edit_food' , $data->id)}}">Edit</a></td>
             
              <td><a href="{{ route('delete.food' , $data->id)}}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>
 
            </tr>
              
       
            @endforeach
         
          </table>
         
    </div> 
  
    @include('admin.adminscript')
    <!-- End custom js for this page -->
  </body>
</html>
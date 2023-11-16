<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 50%;
      margin-top: 100px;
      margin-left: auto;
      margin-right: auto;
      height: 50px;
      
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      height: 70px;
 
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
    <title>Users</title>
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')
        <!-- main-panel ends -->     
        <table id="customers">
            <tr>     
              <th>Name</th>
              <th>Email</th>
              <th>User Type</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>   
            @foreach ($data as $data )         
            <tr>       
              <td>{{ $data->name }}</td>
              <td>{{ $data->email}}</td>
              <td>{{$data->usertype}}</td>         
              <td><a href="{{ route('update.page' , $data->id)}}">Edit</a></td>  
              <td><a href="{{ route('delete.user' , $data->id)}}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>    
            </tr>
            @endforeach        
          </table>      
    </div>  
    @include('admin.adminscript')
    <!-- End custom js for this page -->
  </body>
</html>
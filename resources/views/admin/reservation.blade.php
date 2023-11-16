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
    
    
    #customers tr:hover {background-color: rgba(131, 123, 194, 0.912);}
    
    #customers th {    
    
      text-align: left;
      background-color: #04AA6D;
      color: rgb(0, 0, 0);
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
    <title>Amdin</title>
  </head>
  <body>
    @csrf
    <div class="container-scroller">
    @include('admin.navbar')
        <!-- main-panel ends -->
       
        
        <table id="customers">
         
            <tr>
              <th>ID</th> 
              <th>Name</th>
              <th>EMail</th>
              <th>Phone</th>
              <th>Number Of Guest</th>
              <th>Party Date</th>
              <th>Party Time</th>
              <th>Message</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
         
            @foreach ($data as $data)
            
            <tr>    
              
              <td>{{ $data->id }}</td>
              <td>{{ $data->name}}</td>
              <td>{{ $data->email}}</td>
              <td>{{ $data->phone}}</td>
              <td>{{ $data->guest}}</td>
              <td>{{ $data->date}}</td>
              <td>{{ $data->time}}</td>
              <td>{{ Str::words($data->message, 10)}}</td>         
              <td><a href="">Edit</a></td>
              <td><a href="{{route('delete.reservation' , $data->id)}}" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a></td>
            </tr>
              
       
            @endforeach
         
          </table>
         
    </div> 
  
    @include('admin.adminscript')
    <!-- End custom js for this page -->
  </body>
</html>
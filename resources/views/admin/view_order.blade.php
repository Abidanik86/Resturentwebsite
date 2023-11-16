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
    
    <thead>
        
        <tr>
            <th>Order No</th>
            <th>Food Name</th>
            <th>Food Price</th>
            <th>Food Quantity</th>
            <th>User Name</th>
            <th>User Phone</th>
            <th>User Email</th>
            <th>User Address</th>
            <th>Payment Method</th>
            <th>Total Amount</th>
            
        </tr>
    </thead>

        @foreach ($data as $item) 
    <tbody>
            <tr>     
                <td>{{ $item->id }}</td>
                <td>{{ $item->food_name }}</td>
                <td>{{ $item->food_price }} $</td>
                <td>{{ $item->food_quantity }}</td>
                <td>{{ $item->user_name }}</td>
                <td>{{ $item->user_phone }}</td>
                <td>{{ $item->user_email }}</td>
                <td>{{ $item->user_address }}</td>
                <td>{{ $item->payment_method }}</td>
                <td>{{ $item->total_amount }} $</td>
               
            </tr>
       @endforeach 
      </tbody>
@endsection
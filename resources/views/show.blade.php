@extends('admin.base')
@section('admindash')

<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>email</th>
            <th>gender</th>
            <th>address</th>
            <th>mobile</th>
            <th>role</th>
            
            
        </tr>
        
        <tr>
           
            <td>{{++$id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->mobileno}}</td>
            <td>{{$user->role}}</td>
            
        </tr>
       
    </table>

@endsection
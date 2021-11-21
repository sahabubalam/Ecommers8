@extends('welcome')
@section('content')
<div class="container-fluid px-4">               
    <div class="card mb-4"> 
        <div class="card-body">
            <div >
                <a class="btn btn-primary" href="category/create" style="float:right!important; margin-left:5px"> Add Category</a>
            </div>
            @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SI</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Is Admin</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody> 
                    @foreach($users as $key=>$user)                               
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                        {{$user->isadmin}}
                        </td>
                        <td>
                            <a href="/user.edit/{{$user->id}}" ><button class="btn btn-info"><i class="fa fa-pencil-square-o"></i></button></a>
                          
                            
                        </td>
                        <td>
     
                               <a href="/user.delete/{{$user->id}}"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                      
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
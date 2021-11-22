@extends('welcome')
@section('content')
<div class="container-fluid px-4">               
    <div class="card mb-4"> 
        <div class="card-body">
            <div >
                <a class="btn btn-primary" href="subcategory/create" style="float:right!important; margin-left:5px">
                 Add SubCategory</a>
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
                      
                        <th>Cat Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody> 
                    @foreach($subcategory as $key=>$sub)                               
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$sub->name}}</td>
                        
                        <td>
                       {{$sub->category->name}}
                        </td>
                        <td>
                            <a href="{{route('subcategory.edit',[$sub->id])}}" ><button class="btn btn-info"><i class="fa fa-pencil-square-o"></i></button></a>
                          
                            
                        </td>
                        <td>
                              <form action="{{route('subcategory.destroy',[$sub->id])}}"  method="post">@csrf
                             @method('DELETE')  
                               <a ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                            </form>
                        <!-- <a   class="btn btn-danger"><button class="btn btn-info"><i class="mdi mdi-delete"></i></button></a> -->
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
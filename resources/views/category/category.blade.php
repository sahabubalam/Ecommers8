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
                        <th>Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody> 
                    @foreach($category as $key=>$cat)                               
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$cat->name}}</td>
                        <td><img src="{{Storage::url($cat->image)}}" width="30px"></td>
                        <td>
                        @if($cat->status==1)
                            <a  href="/category/status/0/{{$cat->id}}" ><button type="button" class="btn btn-info">Active</button></a>
                        @elseif($cat->status==0)
                            <a href="/category/status/1/{{$cat->id}}" ><button type="button" class="btn btn-danger">Deactive</button></a>
                        @endif
                        </td>
                        <td>
                            <a href="{{route('category.edit',[$cat->id])}}" ><button class="btn btn-info"><i class="fa fa-pencil-square-o"></i></button></a>
                          
                            
                        </td>
                        <td>
                              <form action="{{route('category.destroy',$cat->id)}}"  method="post">@csrf
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
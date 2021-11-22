@extends('welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Subcategory</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('subcategory.update',[$subcategory->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputFirstName">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{$subcategory->name}}" />
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>  
                            <div class="col-md-12">
                            <div class="form-group">
                                    <label for="inputFirstName">Category Name</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" >
                                        <option selected  disabled>Choose</option>
                                        @foreach($category as $cat)
                                            <option  value="{{$cat->id}}" {{$cat->id==$subcategory->category_id? 'selected':''}}>{{$cat->name}}</option>
                                        @endforeach

                                        
                                    </select>
                                        @error('category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div> 

                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary">Update</button></div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
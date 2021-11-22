@extends('welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-1">
            <example-component></example-component>
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                <div class="card-body">
               
                    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Name</label>
                                    <input class="form-control @error('product_name') is-invalid @enderror" name="product_name" type="text" placeholder="Enter Product Name" />
                                    @error('product_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Category Name</label>
                                   
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" >
                                    <option selected  disabled>Choose</option>
                                        @foreach($category as $cat)
                                            <option  value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Subcategory Name</label>
                                    <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" >
                                    <option selected  disabled>Choose</option>
                                        @foreach($subcategory as $sub)
                                            <option  value="{{$sub->id}}">{{$sub->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Model</label>
                                    <input class="form-control" name="model" type="text" placeholder="Enter Model Name" />
                                    
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Price</label>
                                    <input class="form-control @error('price') is-invalid @enderror" name="price" type="text" placeholder="Enter Price" />
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Quantity</label>
                                    <input class="form-control @error('price') is-invalid @enderror" name="quantity" type="text" placeholder="Enter Quantity" />
                                    @error('quantity')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFirstName">Featured</label>
                                    <select class="form-control @error('featured') is-invalid @enderror" name="featured" >
                                             <option selected  disabled>Choose</option>
                                      
                                             <option  value="featured">Featured Product</option>
                                             <option  value="new">New Product</option>
                                             <option  value="trend">Trend Product</option>
                                
                                    </select>
                                    @error('featured')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFirstName">Discount Price</label>
                                    <input class="form-control @error('discount_price') is-invalid @enderror" name="discount_price" type="text" placeholder="Enter Discount Price" />
                                    @error('discount_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputFirstName">Product Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" type="text">
                                    </textarea>   
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputFirstName">Image</label>
                                        <div class="upload-img">
                                            <img id="img" style="max-width:130px;" alt=" photo">
                                        </div>
                                        <div class="upload-input">
                                            <input type="file" id="file" name="image" class="form-control" onchange="readURL(this)">
                                        </div>
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> 

                            <div class="col-md-12">
                                <!-- <div class="form-group">
                                    <label for="inputFirstName">Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" />
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div> -->
                            </div> 

                          

                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary">Save</button></div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
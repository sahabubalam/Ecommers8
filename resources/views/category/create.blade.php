@extends('welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Category Add</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputFirstName">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Enter Category Name" />
                                    @error('name')
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

                            <div class="col-sm-6">
									<div class="form-group">
										<label>Category Image</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img id="img" style="max-width:130px;" alt=" photo">
											</div>
											<div class="upload-input">
												<input type="file" id="file" name="image" class="form-control" onchange="readURL(this)">
											</div>
										</div>
									</div>
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
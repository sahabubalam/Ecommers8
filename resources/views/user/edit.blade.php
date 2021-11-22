@extends('welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">User Update</h3></div>
                <div class="card-body">
                    <form method="post" action="{{url('/auth/user/update',[$user->id])}}">
                        @csrf
                      
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputFirstName">Is Admin?</label>
                                    <select class="form-control" name="isadmin" id="exampleFormControlSelect1">
                                        <option value="0" {{$user->isadmin==0 ? 'selected':''}}>No</option>
                                        <option value="1" {{$user->isadmin==1 ? 'selected':''}}>Yes</option>
                                    </select>
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
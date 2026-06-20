@extends('dashboard.layout.main')

@section('body')

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{route('admin.update',$admin->id)}}" method="post">
                        @method('put')
                        @csrf

                      <div class="form-group">
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"  placeholder="Name" name="name" value="{{$admin->name}}">
                      </div>

                      <div class="form-group">
                        @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputEmail3">Email</label>
                        <input type="text" class="form-control"  placeholder="Email" name="email" value="{{$admin->email}}">
                      </div>

                      <div class="form-group">
                        @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputPhone4">Phone</label>
                        <input type="text" class="form-control"  placeholder="Phone" name="phone" value="{{$admin->phone}}">
                      </div>

                      <div class="form-group">
                        @error('age')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputAge4">Age</label>
                        <input type="text" class="form-control"  placeholder="Age" name="age" value="{{$admin->age}}">
                      </div>

                      <div class="form-group">
                        @error('gender')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" name="gender" >
                          <option>Select your gender</option>
                          <option @selected($admin->gender=='male') value="male">Male</option>
                          <option @selected($admin->gender=='female') value="female">Female</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">edit</button>

                    </form>
                  </div>
                </div>
</div>


@endsection


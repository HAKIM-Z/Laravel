@extends('dashboard.layout.main')

@section('body')

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{route('admin.store')}}" method="post">
                        @csrf

                      <div class="form-group">
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"  placeholder="Name" name="name" value="{{old('name')}}">
                      </div>

                      <div class="form-group">
                        @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputEmail3">Email</label>
                        <input type="text" class="form-control"  placeholder="Email" name="email" value="{{old('email')}}">
                      </div>

                      <div class="form-group">
                        @error('password')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputPassword4">Password</label>
                        <input type="text" class="form-control"  placeholder="Password" name="password">
                      </div>

                      <div class="form-group">
                        @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputPhone4">Phone</label>
                        <input type="text" class="form-control"  placeholder="Phone" name="phone" value="{{old('phone')}}">
                      </div>

                      <div class="form-group">
                        @error('age')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputAge4">Age</label>
                        <input type="text" class="form-control"  placeholder="Age" name="age" value="{{old('age')}}">
                      </div>

                      <div class="form-group">
                        @error('gender')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" name="gender" >
                          <option>Select your gender</option>
                          <option @selected(old('gender')=='male') value="male">Male</option>
                          <option @selected(old('gender')=='female') value="female">Female</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                  </div>
                </div>
</div>

@endsection

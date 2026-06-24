@extends('dashboard.layout.main')

@section('body')


<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"  placeholder="Name" name="name">
                      </div>

                      <div class="form-group">
                        @error('price')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="exampleInputEmail3">Price</label>
                        <input type="text" class="form-control"  placeholder="Price" name="price">
                      </div>

                      <div class="form-group">
                        @error('sale')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="exampleInputPassword4">Sale</label>
                        <input type="text" class="form-control"  placeholder="Sale" name="sale">
                      </div>

                      <div class="form-group">
                        @error('count')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="exampleInputPhone4">Count</label>
                        <input type="text" class="form-control"  placeholder="Count" name="count"">
                      </div>

                      <div class="form-group">
                        @error('cat_id')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="cat_id" >
                          <option>Select your Category</option>
                          @foreach ($cats as $key => $value)
                          <option value="{{$value->id}}" >{{$value->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        @error('img')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        @error('img.*')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <label for="exampleInputPhone4">Images</label>
                        <input type="file" multiple class="form-control" name="img[]">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                  </div>
                </div>
</div>


@endsection

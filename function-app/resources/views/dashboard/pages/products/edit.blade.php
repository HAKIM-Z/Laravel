@extends('dashboard.layout.main')

@section('body')


<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                      <div class="form-group">


                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"  placeholder="Name" name="name" value="{{$product->name}}">
                      </div>

                      <div class="form-group">


                        <label for="exampleInputEmail3">Price</label>
                        <input type="text" class="form-control"  placeholder="Price" name="price" value="{{$product->price}}">
                      </div>

                      <div class="form-group">


                        <label for="exampleInputPassword4">Sale</label>
                        <input type="text" class="form-control"  placeholder="Sale" name="sale" value="{{$product->sale}}">
                      </div>

                      <div class="form-group">


                        <label for="exampleInputPhone4">Count</label>
                        <input type="text" class="form-control"  placeholder="Count" name="count" value="{{$product->count}}">
                      </div>

                      <div class="form-group">


                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="cat_id" >
                          <option>Select your Category</option>
                        @foreach ($cats as $key => $value)
                          <option @selected($value->id==$product->cat_id) value="{{$value->id}}" >{{$value->name}}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">


                        <label for="exampleInputPhone4">Images</label>
                        <input type="file" multiple class="form-control" name="img[]">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                  </div>
                </div>
</div>


@endsection

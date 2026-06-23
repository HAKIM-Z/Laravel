@extends('dashboard.layout.main')

@section('body')

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{route('cat.store')}}" method="post">
                        @csrf

                      <div class="form-group">
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control"  placeholder="category" name="name">
                      </div>

                      <button type="submit" class="btn btn-primary">Add category</button>

                    </form>
                  </div>
                </div>
</div>


<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories Table</h4>
                    <table class="table table-bordered" style="text-align: center;">
                      <thead>


                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> delete </th>
                        </tr>


                      </thead>
                      <tbody>

@foreach ($cats as $key => $value)


                        <tr class="table-info">
                          <td> {{++$key}} </td>
                          <td> {{$value->name}} </td>

                          <td>

                                <form action="{{route('cat.destroy',$value->id)}}" method="post">
                                    @method('delete')
                                    @csrf

                                    <button class="btn btn-danger">delete</button>

                                </form>

                            </td>

                        </tr>

@endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



@endsection

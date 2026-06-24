@extends('dashboard.layout.main')

@section('body')

<a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Products Table</h4>
                    <table class="table table-bordered" style="text-align: center;">
                      <thead>


                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> price </th>
                          <th> sale </th>
                          <th> count </th>
                          <th> category </th>
                          <th> image </th>
                          <th> edit </th>
                          <th> delete </th>
                        </tr>


                      </thead>
                      <tbody>

                        @foreach ($products as $key =>$value)

                        <tr class="table-info">
                          <td> {{++$key}} </td>
                          <td> {{$value->name}} </td>
                          <td> {{$value->price}} </td>
                          <td> {{$value->sale}} </td>
                          <td> {{$value->count}} </td>
                          <td> {{$value['cat']['name']}} </td>
                          <td>
                                @foreach ($value['image'] as $k => $v)

                                    <img src="{{asset('storage/images/products/' . $v->img_name)}}" alt="" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">

                                @endforeach
                          </td>
                          <td> <a href="" class="btn btn-primary">edit</a> </td>

                          <td>

                                <!-- Button trigger modal -->
                                {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    delete
                                </button> --}}

                                {{-- <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$value['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">delete admin</h1>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure that you want to delete {{$value['name']}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">no</button>
                                                <form action="{{route('admin.destroy',$value['id'])}}" method="post">

                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">delete</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <form action="{{route('product.destroy',$value['id'])}}" method="post">

                                    @csrf
                                    @method('delete')
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

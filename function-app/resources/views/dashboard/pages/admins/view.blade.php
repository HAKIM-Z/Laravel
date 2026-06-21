@extends('dashboard.layout.main')


@section('body')

<a class="btn btn-primary" href="{{route('admin.create')}}">Add Admin</a>

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Admins Table</h4>
                    <table class="table table-bordered" style="text-align: center;">
                      <thead>


                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> email </th>
                          <th> phone </th>
                          <th> age </th>
                          <th> gender </th>
                          <th> edit </th>
                          <th> delete </th>
                        </tr>


                      </thead>
                      <tbody>

                    @foreach ($admins as $key => $value)

                        <tr class="table-info">
                          <td> {{++$key}} </td>
                          <td> {{$value['name']}} </td>
                          <td> {{$value['email']}} </td>
                          <td> {{$value['phone']}} </td>
                          <td> {{$value['age']}} </td>
                          <td> {{$value['gender']}} </td>
                          <td> <a href="{{route("admin.edit",$value['id'])}}" class="btn btn-primary">edit</a> </td>

                          <td>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$value['id']}}">
                                    delete
                                </button>

                                <!-- Modal -->
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
                                </div>

                            </td>

                        </tr>

                    @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

@endsection

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
                          <td> <a href="" class="btn btn-danger">delete</a> </td>
                        </tr>

                    @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

@endsection

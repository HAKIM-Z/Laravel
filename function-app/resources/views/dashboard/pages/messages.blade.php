@extends('dashboard.layout.main')

@section('body')

<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Products Table</h4>
                    <table class="table table-bordered" style="text-align: center;">
                      <thead>


                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> email </th>
                          <th> phone </th>
                          <th> message </th>
                          <th> view </th>
                          <th> delete </th>
                        </tr>


                      </thead>
                      <tbody>

                        @foreach ($messages as $key => $value)

                        <tr class="table-info">
                          <td> {{++$key}} </td>
                          <td> {{$value->name}} </td>
                          <td> {{$value->email}} </td>
                          <td> {{$value->phone}} </td>
                          <td> @include('dashboard.layout.mess_modal') </td>
                          <td class="view"> {{($value->view=="0")?"unseen":"seen"}} </td>
                          <td>



                            <form action="">
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

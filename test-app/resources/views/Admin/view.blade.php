<a href="{{route('admin.create')}}">add user</a>

<table>

    <thead>

        <tr>

                <td>#</td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>age</td>
                <td>gender</td>
                <td>edit</td>
                <td>delete</td>

        </tr>

    </thead>

    <tbody>

            @foreach ($admins as $key => $value)

        <tr>

                <td>{{++$key}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->gender}}</td>
                <td><a href="{{route('admin.edit',$value->id)}}">edit</a></td>
                <td><form action="{{route('admin.destroy',$value->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button>delete</button>
                    </form>
                </td>

        </tr>

            @endforeach

    </tbody>

</table>

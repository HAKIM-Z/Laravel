<a href="{{route('admin.create')}}">add user</a>

<table style="border:5px solid black">

    <thead>
            <tr>
                <td>#</td>
                <td>name</td>
                <td>email</td>
                <td>edit</td>
                <td>delete</td>
            </tr>
    </thead>

    <tbody>

            <tr>
                <td>1</td>
                <td>hakim</td>
                <td>hakim@gmail.com</td>
                <td><a href="{{route('admin.edit',5)}}">edit</a></td>
                <td>
                    <form action="{{route('admin.destroy',8)}}" method="post">
                        @method('delete')
                        @csrf
                        <button>delete</button>
                    </form>
                </td>
            </tr>

    </tbody>

</table>

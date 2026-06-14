<a href="{{route('user.add')}}">add user</a>

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
                <td><a href="{{route('user.edit',5)}}">edit</a></td>
                <td>
                    <form action="{{route('user.delete',8)}}" method="post">
                        @method('delete')
                        @csrf
                        <button>delete</button>
                    </form>
                </td>
            </tr>
    </tbody>

</table>

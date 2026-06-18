<a href="{{route('admin.create')}}">add user</a>

<table>

    <thead>

        <tr>

                <td>#</td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>age</td>
                <td>edit</td>
                <td>delete</td>

        </tr>

    </thead>

    <tbody>

        <tr>

                <td>1</td>
                <td>hakim</td>
                <td>hakim@gmial.com</td>
                <td>01288238329</td>
                <td>21</td>
                <td><a href="{{route('admin.edit',8)}}">edit</a></td>
                <td><form action="{{route('admin.destroy',8)}}" method="post">
                    @method('delete')
                    @csrf
                    <button>delete</button>
                    </form>
                </td>

        </tr>

        <tr>

                <td>2</td>
                <td>ahmed</td>
                <td>ahmed@gmail.com</td>
                <td>01145450837</td>
                <td>2</td>
                <td><a href="{{route('admin.edit',9)}}">edit</a></td>
                <td><form action="{{route('admin.destroy',9)}}" method="post">
                    @method('delete')
                    @csrf
                    <button>delete</button>
                    </form>
                </td>

        </tr>

    </tbody>

</table>

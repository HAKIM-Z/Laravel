<form action="{{route('admin.update',$admin->id)}}" method="post">
@method('put')
@csrf

    <input type="text" value="{{$admin->name}}" name="name">
    <input type="text" value="{{$admin->email}}" name="email">
    <input type="text" value="{{$admin->phone}}" name="phone">
    <input type="text" value="{{$admin->age}}" name="age">
    <select name="gender" id="">
        <option @selected($admin->gender=='male') value="male">male</option>
        <option @selected($admin->gender=='female') value="female">female</option>
    </select>

    <button>edit</button>

</form>


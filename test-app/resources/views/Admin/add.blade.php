<form action="{{route('admin.store')}}" method="post">
@csrf

    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="phone">
    <input type="text" name="age">
    <select name="gender" id="">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>

    <button>submit</button>

</form>

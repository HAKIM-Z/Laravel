<form action="{{route('user.insert')}}" method="post">
@csrf

    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="phone">
    <input type="text" name="age">

    <button>submit</button>

</form>

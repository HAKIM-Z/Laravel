<form action="{{route('user.update',8)}}" method="post">
@method('put')
@csrf

    <input type="text" value="hakim" name="name">
    <input type="text" value="hakim@gmail.com" name="email">
    <input type="text" value="01288238329" name="phone">
    <input type="text" value="21" name="age">

    <button>edit</button>

</form>


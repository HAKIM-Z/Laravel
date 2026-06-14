<form action="{{route('user.update',8)}}" method="post">
@method('put')
@csrf
<input type="text" value="ali" name="name" id="">
<input type="text" value="ali@gmail.com" name="email" id="">
<input type="text" value="23" name="age" id="">
<input type="text" value="01145450834" name="phone" id="">

<button>edit user</button>

</form>

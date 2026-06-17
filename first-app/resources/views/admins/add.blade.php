<form action="{{route('admin.store')}}" method="post">
@csrf
<input type="text" name="name" id="">
<input type="text" name="email" id="">
<input type="text" name="password" id="">
<input type="text" name="age" id="">
<input type="text" name="phone" id="">

<button>add admin</button>

</form>

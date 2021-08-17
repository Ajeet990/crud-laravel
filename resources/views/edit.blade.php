<h1>Edit your data</h1>

<form action="/edit" method="POST" >
   @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    Name: <input type="text" name="name" value="{{$data['name']}}"><br><br>
    PassWord: <input type="text" name="pass" value="{{$data['pass']}}"><br><br>
    <button type="submit" >Update</button>

</form>
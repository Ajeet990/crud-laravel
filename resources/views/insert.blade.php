<h1>Insert data </h1>

<form action="insert" method="POST">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Pass: <input type="password" name="pass"><br><br>
    <button type="submit" >Submit</button>

</form>

<a href="list">Show data</a>
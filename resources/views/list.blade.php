<h1>Data from the database</h1>
<?php
if(isset($_GET['del']) && $_GET['del']=='true'){
    echo 'Your data has been deleted';
}
?>


<table>
    <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Pass</th>
        <th>Action</th>


    </tr>
    <?php $n = 1; ?>
    @foreach($members as $item)
    
        <tr>
            <td><?php echo $n++; ?></td>
            <td>{{$item['name']}}</td>
            <td>{{$item['pass']}}</td>
            <td><a href="delete/{{$item['id']}}">delete</a>
            <a href="edit/{{$item['id']}}">Edit</a></td>


        </tr>
        
    @endforeach
</table>

<a href="insert">Add new Member</a>
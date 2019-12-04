<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM book WHERE id = {$_GET['id']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}
$result = mysqli_query($connection, "SELECT * FROM book");
?>
<!doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<body>
	
<table border="1">
    <? while(book = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?=$book['id']?></td>
        <td><?=$book['title']?></td>
        <td><?=$book['id_author']?></td>
        <td><?=$book['pages']?>
            <a href="?page=index&action=delete&id=<?=$book['id']?>"onclick="return confirm('Delete this?')">X</a>
            <a href="page=edit&id=<?=$book['id']?>">E</a>
        </td>
    </tr>
    <?}?>
</body>
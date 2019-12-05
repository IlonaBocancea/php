<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM books WHERE id = {$_GET['id']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}
$result = mysqli_query($connection, "SELECT * FROM books");
?>
<!doctype html>
<head>
<head>
<body>
<table border="1">
<? while($books = mysqli_fetch_assoc($result)){?>
    <tr>
        <td>nr: <?= $books['ID']?>  </td>
		<td><?= $books['Title']?> </td>
		<td><?= $books['Year']?></td>
		<td><?= $books['ID_Author']?></td>
            <a href="?page=delete&action=delete&ID=<?= $books['ID']?>"onclick="return confirm('Delete this?')">X</a>
            <a href="page=edit&ID=<?= $books['ID']?>">E</a>
        </td>
    </tr>
</body>
<?}?>
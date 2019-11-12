<?
if(isset($_GET['ID_Author']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM Author WHERE ID_Author = {$_GET['ID_Author']}" )) {
        echo 'Succes';
    } else {
       echo 'Eroare';
    }
}
?>
<!doctype html>
<head>
<body>
<?
$result = mysqli_query($connection, "SELECT * FROM Autor");
?>
<table border="2">
<?while($Autor = mysqli_fetch_assoc($result)){?>
<tr>
	<td>nr: <?= $Author['ID_Author']?></td>
	<td><?= $Author['Name_Auhtor']?></td>
	<td><?= $Author['Nr_Book']?></td>
</tr>
<?}?>
</body>
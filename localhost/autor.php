<? 
require 'db.php';
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$connection) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
<!doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<body>
</body>
</body>
<? 
    include 'blocks/menu.php'?>
<?
$result = mysqli_query($connection, "SELECT * FROM autor");?>

<form action="" method="post">
	<input type="text" placeholder="ID_Author" name="id_authorB">
	<input type="text" placeholder="Name_Author" name="name_authorB">
	<input type="text" placeholder="Age" name="ageB">
	<input type="text" placeholder="Nr_Boook" name="nr_bookB">
	<input type="submit">
	<hr>
	
</form>
<?
	$id_authorB = mysqlAdd($connection, $_POST['id_authorB']);
	$name_authorB = mysqlAdd($connection, $_POST['name_authorB']);
	$ageB = mysqlAdd($connection, $_POST['ageB']);
	$nr_bookB = mysqlAdd($connection, $_POST['nr_bookB']);
	$query = "INSERT INTO autor(ID_Author, Nr_Book) VALUES ('{$ID_Author}','{$Name_Author}','{$Age}',{$Nr_Book})";
	if (!empty($ID_Author) || !empty($Name_Author) || !empty($Age) || !empty($Nr_Book)) {
		$res = mysqli_query($connection,$query) or die ("error ".mysqli_error($connection));
		if ($res) {
			echo "succes";
		}
		else {
			echo "error";
		}
	}
function mysqlAdd($connect, $id_author){
	return htmlentities(mysqli_real_escape_string($connect, $id_author));
}
?>
<table border="2">
<? while($autor = mysqli_fetch_assoc($result)){?>
<tr>
    <td><?= $autor['ID_Author']?> </td>
    <td><?= $autor['Name_Author']?></td>
	<td><?= $autor['Age']?></td>
    <td><?= $autor['Nr_Book']?></td>
	<td><?= $autor['id']?></td>
</tr>
<? }?>
</body>

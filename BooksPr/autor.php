<? 
session_start();
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
	<link rel="stylesheet" type="text/css" href="pages/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<body>
<?include 'blocks/menu.php'?>
<?
$result = mysqli_query($connection, "SELECT * FROM autor");
?>
<form action="" method="post">
	<input type="text" placeholder="Firstname_Author" name="Firstname_AuthorB">
	<input type="text" placeholder="Lastname_Author" name="Lastname_AuthorB">
	<input type="text" placeholder="Nr_Boook" name="nr_bookB">
	<input type="submit">
	<hr>
</form>
<?
	$Firstname_AuthorB = mysqlAdd($connection, $_POST['Firstname_AuthorB']);
	$Lastname_AuthorB = mysqlAdd($connection, $_POST['Lastname_AuthorB']);
	$nr_bookB = mysqlAdd($connection, $_POST['nr_bookB']);
	$query = "INSERT INTO autor(Firstname_Author, Nr_Book) VALUES ('{$Firstname_Author}','{$Lastname_Author}',{$Nr_Book})";
	if (!empty($Firstname_Author) || !empty($Lastname_Author) || !empty($Nr_Book)) {
		$res = mysqli_query($connection,$query) or die ("error ".mysqli_error($connection));
		if ($res) {
			echo "succes";
		}
		else {
			echo "error";
		}
	}
function mysqlAdd($connect, $Firstname_Author){
	return htmlentities(mysqli_real_escape_string($connect, $Firstname_Author));
}
?>
<table border="1">
<? while($autor = mysqli_fetch_assoc($result)){?>
<tr>
    <td>nr: <?= $autor['ID_Author']?> </td>
    <td><?= $autor['Firstname_Author']?></td>
	<td><?= $autor['Lastname_Author']?></td>
    <td><?= $autor['Nr_Book']?></td>
	<td>nr: <?= $autor['ID']?></td>
</tr>
<? }?>
</body>

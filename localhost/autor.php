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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
<body>
<? 
    include 'blocks/menu.php'?>
<?
$result = mysqli_query($connection, "SELECT * FROM autor");
?>
<form action="" method="post">
	<input type="text" placeholder="ID_Author" name="id_authorB">
	<input type="text" placeholder="Name_Author" name="name_authorB">
	<input type="text" placeholder="Nr_Book" name="nr_bookB">
	<input type="submit">
	<hr>
	
</form>

<?
	$id_author = mysqlAdd($connection, $_POST['id_autorB']);
	$name_author = mysqlAdd($connection, $_POST['name_authorB']);
	$nr_book = mysqlAdd($connection, $_POST['nr_bookB']);
	$query = "INSERT INTO autor(ID_Author,Nr_Book) VALUES ('{$id_author}','{$name_author}',($nr_book})";
	if (!empty($id_autor) || !empty($name_author) || !empty($nr_book)) {
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
<?while($autor = mysqli_fetch_assoc($result)){?>
<tr>
	<td>nr: <?= $autor['ID_Author']?></td>
	<td><?= $autor['Name_Author']?></td>
	<td><?= $autor['Nr_Book']?></td>
</tr>
<?}?>
</body>
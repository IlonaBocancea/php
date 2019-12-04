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
<?include 'blocks/menu.php'?>
?>
<!doctype html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<body>

<?
$result = mysqli_query($connection, "SELECT * FROM book");
?>
<form action="" method="post">
	<input type="text" placeholder="Title" name="titleB">
	<input type="text" placeholder="Author" name="authorB">
	<input type="text" placeholder="Year" name="yearB">
	<input type="submit">
	<hr>
	
</form>
<?
	$id = mysqlAdd($connection, $_POST['idB']);
	$title = mysqlAdd($connection, $_POST['titleB']);
	$id_author = mysqlAdd($connection, $_POST['id_authorB']);
	$pages = mysqlAdd($connection, $_POST['pagesB']);
	$query = "INSERT INTO book(id,pages) VALUES ('{$id}','{$title}','{$id_author}',($pages})";
	if (!empty($id) || !empty($title) || !empty($id_author) || !empty($pages)) {
		$res = mysqli_query($connection,$query) or die ("error ".mysqli_error($connection));
		if ($res) {
			echo "succes";
		}
		else {
			echo "error";
		}
	}
function mysqlAdd($connect, $id){
	return htmlentities(mysqli_real_escape_string($connect, $id));
}
?>
<table border="1">
<? while($book = mysqli_fetch_assoc($result)){?>
<tr>
    <td>nr: <?= $book['id']?>  </td>
    <td><?= $book['Title']?> </td>
    <td><?= $book['id_author']?></td>
    <td><?= $book['pages']?></td>
</tr>
<? }?>
</body>
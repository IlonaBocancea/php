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
	<meta charset="UTF-8"/>
	   <link rel="stylesheet" type="text/css" href="pages/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Carti online</title>
<head>
<body>
<?
    include 'blocks/menu.php'?>	
<?  
    $pageName = $_GET['page'];
    $filePath = "{$pageName}.php";
    if(empty($pageName)){
        $filePath = "autor.php";
    }
	?>
    
<?	
$result = mysqli_query($connection, "SELECT * FROM books");
?>
<form action="" method="post">
	<input type="text" placeholder="Title" name="titleB">
	<input type="text" placeholder="Author" name="authorB">
	<input type="text" placeholder="Year" name="yearB">
	<input type="submit">
	<hr>
</form>
<?
	$title = mysqlAdd($connection, $_POST['titleB']);
	$author = mysqlAdd($connection, $_POST['authorB']);
	$year = mysqlAdd($connection, $_POST['yearB']);
	$query = "INSERT INTO books(Title,Year) VALUES ('{$title}','{$author}',($year})";
	if (!empty($title) || !empty($author) || !empty($year)) {
		$res = mysqli_query($connection,$query) or die ("error ".mysqli_error($connection));
		if ($res) {
			echo "succes";
		}
		else {
			echo "error";
		}
	}
function mysqlAdd($connect, $title){
	return htmlentities(mysqli_real_escape_string($connect, $title));
}
?>
<div class="card">
  <div class="card-header">
   The most popular books
  </div>
  <div class="card-group">
  <div class="card">
    <img src="pages\sbmenu\img\aleta.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Название карточки</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="pages\sbmenu\img\s.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Название карточки</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="pages\sbmenu\img\p.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Название карточки</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>
</body>

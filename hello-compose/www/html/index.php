<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hello World!</title>
	</head>
	<body>
		<h1>Hello World!</h1>
<?
// $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);

$host = 'mysql';
$dbname = 'project';
$user = 'project';
$password = 'project';
$connection = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $user, $password);

// $query = 'select table_name from information_schema.tables'
// 	. ' where table_type="BASE TABLE"';
$query = 'select message from messages';
?>
	<p>Query: <code><?= $query ?></code></p>
<?
$stat = $connection->query($query);
$items = $stat->fetchAll(PDO::FETCH_COLUMN);

if (empty($items)) { ?>
	<p>There are no tables!</p>
<? } else { ?>
	<ul>
		<? foreach($items as $item) { ?>
			<li><?= $item ?></li>
		<? } ?>
	</ul>
<? }
?>
	</body>
</html>

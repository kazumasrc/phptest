<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content = "text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
require_once 'config.php';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM anketo WHERE 1';
$stmt = $dbh->prepare($sql);
$stmt->execute();

while($rec = $stmt->fetch(PDO::FETCH_ASSOC))
{
	print $rec['code'];
	print $rec['nickname'];
	print $rec['email'];
	print $rec['goiken'];
	print '<br/>';
}

$dbh = null;

print '<br/>';
print '<a href="menue.html">メニューに戻る</a><br/>';
?>

</body>
</html>
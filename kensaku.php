<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content = "text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$code=$_POST['code'];

require_once 'config.php';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM anketo WHERE code = ?';
$stmt = $dbh->prepare($sql);
$data[] = $code;
$stmt->execute($data);

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
print '<a href="kensaku.html">検索画面に戻る</a><br/>';
?>

</body>
</html>
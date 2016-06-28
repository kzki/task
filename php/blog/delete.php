<?php require 'utils.php'; ?>
<?php
	if (!isset($_REQUEST['id']) or empty($_REQUEST['id'])) {
		$error = "idが指定されていません";
	} else {
		$id = $_REQUEST['id'];

		$select_sql = "select count(*) as count from posts where id = ${id}";
		$st = $db->query($select_sql);
		$count = 0;
		foreach($st as $row) {
			$count += $row['count'];
		}

		if ($count <= 0) {
			$error = "指定した記事がありません";
		} else {
			$sql = "delete from posts where id = ?";
			$st = $db->prepare($sql);
			$success = $st->execute(array($id));
		}
	}
	if (isset($error)) {
		$page_title = "エラー！！！！！！！！";
	} else {
		$page_title = "id=${id}の記事が削除されました";
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1><?php echo $page_title; ?></h1>
	</header>
	<div id="contents">
		<?php if (isset($error)) : ?>
			<p><?php echo $error; ?></p>
		<?php endif; ?>
		<a href="/blog">TOPへ戻る</a>
	</div>
	<footer>
		<?php include 'parts/footer.php'; ?>
	</footer>
</body>
</html>
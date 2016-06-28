<?php require "utils.php"; ?>
<?php
	if (!isset($_POST['title']) or !isset($_POST['contents'])) {
		$error = "タイトルと内容を設定してください";
	} else if(empty($_POST['title']) or empty($_POST['contents'])) {
		$error = "タイトルと内容を設定してください";
	} else {
		$title = $_POST['title'];
		$contents = $_POST['contents'];
		$sql = "insert into posts 
			(title, contents, created, updated)
			values (?, ?, current_timestamp, current_timestamp)
		";
		$st = $db->prepare($sql);
		$success = $st->execute(array($title, $contents));
	}
	if (isset($error)) {
		$page_title = "エラー！！！！！！！";
	} else {
		$page_title = "記事を作成しました";
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
			<a href="new.php">記事作成画面に戻る</a>
		<?php endif; ?>
		<a href="index.php">TOPに戻る</a>
	</div>
	<footer>
		<?php include "parts/footer.php"; ?>
	</footer>
</body>
</html>
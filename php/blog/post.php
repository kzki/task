<?php require "utils.php"; ?>
<?php
	// 編集と新規作成の判定
	$mode = 'new';
	if (isset($_POST['type']) and $_POST['type'] == 'edit'){
		$mode = 'edit';
		$id = $_POST['id'];
	}

	if (!isset($_POST['title']) or !isset($_POST['contents'])) {
		$error = "タイトルと内容を設定してください";
	} else if(empty($_POST['title']) or empty($_POST['contents'])) {
		$error = "タイトルと内容を設定してください";
	} else {
		$title = $_POST['title'];
		$contents = $_POST['contents'];

		if ($mode == 'edit'){


			$sql = "update posts set title = ?, contents = ?
				, image_name = ?, image_path = ?, updated = current_timestamp where id = ?";
			$params = array($title, $contents, $image_name, $image_path, $id);


		} else {
			$sql = "insert into posts
				(title, contents, created, updated)
				values (?, ?, current_timestamp, current_timestamp)
			";
			$params = array($title, $contents);
		}

		$st = $db->prepare($sql);
		$success = $st->execute($params);
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
			<?php if ($mode == 'edit') : ?>
			<?php else: ?>
				<a href="new.php">記事作成画面に戻る</a>
			<?php endif; ?>
		<?php endif; ?>
		<a href="index.php">TOPに戻る</a>
	</div>
	<footer>
		<?php include "parts/footer.php"; ?>
	</footer>
</body>
</html>

<?php require 'utils.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ブログトップページ</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1>ブログトップページ</h1>
	</header>
	<?php
		$stmt = $db->query("select * from posts");  
	?>
	<div id="contents">
		<a href="new.php">新規記事作成</a>
		<?php foreach($stmt as $row) : ?>
			<?php $id = $row['id']; ?>
			<article>
				<a href="show.php?id=<?php echo $id; ?>" title="">
					<?php echo($row['title']); ?>
				</a>
				<a href="delete.php?id=<?php echo $id; ?>" class="delete">削除</a>
			</article>
		<?php endforeach; ?>
	</div>
	<footer>
		<?php include 'parts/footer.php'; ?>
	</footer>
	<script>
		var dels = document.getElementsByClassName('delete');
		for (var i=0; i<dels.length; i++){
			dels[i].addEventListener('click', function(e){
				if (confirm('削除してよろしいですか？')) {
					return true;
				} else {
					e.preventDefault();
					return false;
				}
			});
		}
	</script>
</body>
</html>
<?php require 'utils.php'; ?>
<?php
	$offset = 0;
	$limit = 5;
	if (isset($_GET['offset']) and !empty($_GET['offset'])) {
		$offset = $_GET['offset'];
	}

	$st_count = $db->query("select count(*) as count from posts");
	$row = $st_count->fetch();
	$count = $row['count'];

	$stmt = $db->query("select * from posts 
			order by updated desc limit ${limit} offset ${offset}");


	$prev_offset = $offset - $limit;
	if ($prev_offset <= 0) {
		$prev_offset = 0;
	}
	$next_offset = $offset + $limit;
?>
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
	<div id="contents">
		<div class="pager">
			<?php if ($offset > 0) : ?> 
				<a href="?offset=<?php echo $prev_offset; ?>">
					<
				</a>
			<?php endif; ?>
			<?php if ($offset + $limit < $count) : ?>
				<a href="?offset=<?php echo $next_offset; ?>">
					>
				</a>
			<?php endif; ?>
			<p>総件数: <?php echo $count; ?></p>
		</div>
		<div>
		<a href="new.php">新規記事作成</a>
		</div>
		<?php foreach($stmt as $row) : ?>
			<?php $id = $row['id']; ?>
			<article>
				<a href="show.php?id=<?php echo $id; ?>" title="">
					<?php echo( $row['id'] . ' ' . $row['title']); ?>
				</a>
				<span><?php echo $row['updated']; ?></span>
				<a href="edit.php?id=<?php echo $id; ?>">編集</a>
				<a href="delete.php?id=<?php echo $id; ?>" class="delete">削除</a>
			</article>
		<?php endforeach; ?>
	</div>
	<footer>
		<?php include 'parts/footer.php'; ?>
	</footer>
	<script>
		var dels = document.getElementsByClassName('delete');
		for(var i=0; i<dels.length; i++) {
			dels[i].addEventListener('click', function(e){
				if (confirm('削除してもよろしいですか？')) {
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
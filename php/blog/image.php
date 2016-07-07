<?php
	require 'utils.php';
	$id = $_GET['id'];
	$post = get_post($id);
	// print_r( $post);
	if (empty($post['file_type'])) {
		$file_type = "image/png";
	} else {
		$file_type = $post['file_type'];
	}
	
	$file_size = filesize($post['image_path']);
	header("Content-Length: ${file_size}");
	$content_type = "Content-Type: ${file_type}";
	header($content_type); // Content-Type: image/jpeg
	echo file_get_contents($post['image_path']);
?>

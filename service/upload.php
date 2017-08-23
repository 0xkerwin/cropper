<?php
$image = $_FILES['file']['tmp_name'];
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_path = '../upload/'.time().'.jpg';
$dir = move_uploaded_file($image, $file_path);

if ($dir) {
	$status = 1;
	$msg = '上传成功';
}else{
	$status = 0;
	$msg = '上传失败';
}

echo json_encode(['status' => $status, 'msg' => $msg]);exit
 ?>
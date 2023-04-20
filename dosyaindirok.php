
<?php

$file3 = $_POST['file3'];

$file6 = $_POST['file6'];


$mevcut = 'dosyalar/'.$file3;

$yeni = 'temp/'.$file6;

if (!copy($mevcut, $yeni)) {
  echo "Error \n";
}

echo $link = '<a href="'.$yeni.'" download="'.$file6.'" >Download</a>';



$file = $yeni ;

	  if(file_exists($file)) {
		  header('Content-Description: File Transfer');
		  header('Content-Type: application/octet-stream');
		  header('Content-Disposition: attachment; filename='.basename($file));
		  header('Content-Transfer-Encoding: binary');
		  header('Expires: 0');
		  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		  header('Pragma: public');
		  header('Content-Length: ' . filesize($file));
		  ob_clean();
		  flush();
		  readfile($file);
		  //@ unlink($file);
		  exit;
	  }
?>
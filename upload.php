<?php
	require_once 'server.php';
 
	if(ISSET($_POST['upload'])){
		$image_name = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$image_size = $_FILES['image']['size'];
		$ext = explode(".", $image_name);
		$end = end($ext);
		$allowed_ext = array("jpg", "jpeg", "gif", "png", "webp");
		$name = time().".".$end;
		if(!is_dir("upload/"))
		mkdir("upload/");
		$path = "upload/".$name;
		if(in_array($end, $allowed_ext)){
			if($image_size > 5242880){
				echo "<script>alert('File too large!')</script>";
				echo "<script>window.location = 'index.php?page=galeria'</script>";
			}else{
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($db, "INSERT INTO `image` VALUES('', '$name', '$path')") or die(mysqli_error());
					echo "<script>alert('Kép felföltve!')</script>";
					echo "<script>window.location = 'index.php?page=galeria'</script>";
				}
			}
		}else{
			echo "<script>alert('Invalid image format!')</script>";
			echo "<script>window.location = 'index.php?page=galeria'</script>";
		}
    }
    ?>
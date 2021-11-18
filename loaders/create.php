<?php
	
	if (isset($_POST)) {
		// code...

		$form_errors = [];

		$surname = trim($_POST['surname']);
		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		


		if (empty($surname)) {
			$form_errors[] = "enter surname";
		}

		if (empty($firstname)) {
			$form_errors[] = "enter firstname";
		}


		if (empty($lastname)) {
			$form_errors[] = "enter lastname";
		}

		if (empty($username)) {
			$form_errors[] = "enter username";
		}


		if (empty($email)) {
			$form_errors[] = "enter email";
		}
	

		if (empty($password)) {
			$form_errors[] = "enter password";
		}



if (!empty($_FILES)) {



	$allowed_types = ['image/png', 'image/jpeg', 'image/PNG', 'image/JPG'];
		if ($allowed_types) {
			// code...
		
	$photo1 = $_FILES['photo1'];
	$photo2 = $_FILES['photo2'];
	$photo3 = $_FILES['photo3'];

	$photo1_name = $photo1['name']; $photo1_type = $photo1['type']; $photo1_tmp = $photo1['tmp_name'];
	$photo2_name = $photo2['name']; $photo2_type = $photo2['type']; $photo2_tmp = $photo2['tmp_name'];
	$photo3_name = $photo3['name']; $photo3_type = $photo3['type']; $photo3_tmp = $photo3['tmp_name'];
	

	if(in_array($photo_type, $allowed_types)){

		if(!is_dir("{$pf_name}")){
			mkdir("{$pf_name}");
		}

		$storage = "{$pf_name}/{$pf_name}";

		move_uploaded_file($pf_tmp, $storage);

		//add this to the database..
		submitData($storage);

			

		}

		}

	}


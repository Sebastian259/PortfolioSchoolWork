<?php

    define('VALID_ERROR_REQUIRED', "Pole '%s' je povinné!");
    define('VALID_ERROR_MIN_LENGTH', "Pole '%s' musí obsahovať aspoň %s znakov!");
    define('VALID_ERROR_EMAIL', "Pole \"%s\" neobsahuje platnu emailovu adresu!");
    define('VALID_ERROR_ALPHA', "Pole \"%s\"  musi obsahovat iba znaky a-zA-Z!");

    $errors = array();

	$name = trim($_POST['name']);
	if( empty($name) ){
		echo "name required";
	} elseif( mb_strlen($firstname) < 3){
		$errors[] = "name must have at least 3 characters";
	} elseif( mb_strlen($firstname) > 32){
		$errors[] = 'name cant be longer than 32 characters';
	} elseif( !ctype_alpha($firstname) ){
		$errors[] = 'name must contain only a-z A-Z';
	}

    $field = 'email';
	$label = 'E-mail';
	if( ($err = min_length($field, 6, $label)) !== TRUE ){
		$errors[] = $err;
	} elseif( ($err = valid_email($field, $label)) !== TRUE ){
		$errors[] = $err;
	}

    $message = trim($_POST['message']);
	if( empty($lastname) ){
		$errors[] = "message is required";
	} elseif( mb_strlen($lastname) > 150){
		$errors[] = 'message cant be longer than 150 characters';
    }

    if( isset($errors) && !empty($errors)){
        // ak existuje pole chyb (bol odoslany formular) a zaroven nie je toto pole prazdne tak to znamena, ze obsahuje chyby a vypiseme ich pomocou cyklu foreach
        foreach($errors AS $error)
            echo "<p>".$error.'</p>';
    } elseif( isset($errors) ){

        echo 'FORMULAR OK';
    }
?>
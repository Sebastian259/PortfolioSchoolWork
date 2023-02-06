<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);


    $errors = array();
    if (isset($_POST["submit"]))
    {

        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];

        if( empty($name) ){
            echo "name required";
        } elseif( mb_strlen($name) < 3){
            $errors[] = "name must have at least 3 characters";
        } elseif( mb_strlen($name) > 32){
            $errors[] = 'name cant be longer than 32 characters';
        } elseif( !ctype_alpha($name) ){
            $errors[] = 'name must contain only a-z A-Z';
        }

	    if( empty($message) ){
		    $errors[] = "message is required";
	    } elseif( mb_strlen($message) > 150){
		    $errors[] = 'message cant be longer than 150 characters';
        }

        if( isset($errors) && !empty($errors)){
            // ak existuje pole chyb (bol odoslany formular) a zaroven nie je toto pole prazdne tak to znamena,
            //ze obsahuje chyby a vypiseme ich pomocou cyklu foreach
            foreach($errors AS $error)
                echo "<p>".$error.'</p>';
        } elseif( isset($errors) ){
            sendform();
            echo 'Formular was send';
        }

    }
    function sendform(){
  
        extract($_REQUEST);
                $file=fopen("form-save.txt", "a");

                fwrite($file, "name : ");
                fwrite($file, $name ."\n");
                fwrite($file, "email : ");
                fwrite($file, $email ."\n");
                fwrite($file, "message : ");
                fwrite($file, $message ."\n");
                fwrite($file, "date : " );
                fwrite($file, date("d.m.Y h:i:s") ."\n");
                fwrite($file, "____________________________________________________" ."\n" ."\n");
                fclose($file);
    }

       header('Location:index.php');

?>
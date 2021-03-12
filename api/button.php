<?php
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    include_once('config.php');

    function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }

    if( isset($_POST['loginBut']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $res = $link->query("SELECT password, id From users Where login = '" . $login . "'");
		$row = $res->fetch_row();

        if ($password == $row[0] && $password != "unset") {

			$values = generate_string($permitted_chars, 20);
		    setcookie("session", $values, time() + 7200, '/');  /* сок действия 1 час */
		    $link->query("INSERT INTO `sessions` (`session`, `id_users`) VALUES ('" . $values . "', '" . $row[1] . "');");
		   header ('Location: /lk/index.php');  // перенаправление на нужную страницу
		   exit;

		}
    }

?>
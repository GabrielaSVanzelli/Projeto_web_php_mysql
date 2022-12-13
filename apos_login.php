<?php
    include_once('config.php');


    $login = $_POST['email'];  
    $password = $_POST['password'];  
    //$loginarray = $array['email'];

/*  print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['password']);
    print_r('<br>'); */

    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Tentativa de Login Cancelada';
        exit;
    } else {
        echo "<p>Olá, {$_SERVER['PHP_AUTH_USER']}.</p>";
        echo "<p>Você digitou {$_SERVER['PHP_AUTH_PW']} como sua senha.</p>";
        $sql_select = "SELECT email, senha FROM `formCadastro`.cadastroUsuarios WHERE email ='$login' AND senha = '$password'";
        echo "verifica <br>";

        if ($conn->query($sql_select) == TRUE){
            $result = mysqli_query($conn, $sql_select);
            //$verifica = mysqli_query("SELECT email, senha FROM `formCadastro`.cadastroUsuarios WHERE email ='$login' AND senha = '$password'") | die("Erro ao selecionar");

            echo $sql_select;
            //echo "<br>";
            $rows = "SELECT count(email), count(senha) FROM `formCadastro`.cadastroUsuarios WHERE email ='$login' AND senha = '$password' group by email, senha";
            $count = mysqli_num_rows($result);

            //echo 'oi';


            if($result <> null and $count == 1){
                setcookie("email",$login);
                header("Location:cadastro_itens.php");
            }else{
                //echo 'outro teste';
                echo"<script language='javascript' type='text/javascript'>
                alert('Login e/ou senha incorretos');window.location
                .href='index_login.php';</script>";
                die();
            } }
        else {
            echo "ERROR".$conn->error;  
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='index_login.php';</script>";
            die();}
        } 
      
    //to prevent from mysqli injection  
    //$login = stripcslashes($login);  
    //$password = stripcslashes($password);  
    //$login = mysqli_real_escape_string($conn, $login);  
    //$password = mysqli_real_escape_string($conn, $password);  
 
?>
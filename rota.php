<?php
    session_start();
    include_once('include/include.php');



    if(!isset($_SESSION['logado'])){
        $result = "Login";

        echo "
         <script>
            location.href='login/login.php';
         </script>";
    }
    else{
        $sql = mysqli_query($conn, "SELECT * FROM pessoas WHERE id = {$_SESSION['id']}"); // Pegar as infor do banco pegando o id

        $row = mysqli_fetch_assoc($sql); // Fazer uma buscar diante do parametro 

        if(mysqli_num_rows($sql) > 0){


        
        if($row['isAdmin'] == 1){
        echo "
         <script>
            location.href='perfil/perfil-admin.php';
         </script>";
        }
        else{
            echo "
            <script>
               location.href='perfil/perfil.php';
            </script>";
        }
    }
    else{
        $result = "Login";

        echo "
         <script>
            location.href='login/login.php';
         </script>";
    }

}
?>
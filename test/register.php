<?php
    $name       =   $_POST['name'];
    $surname    =   $_POST['surname'];
    $birthday   =   $_POST['birthday'];
    $id_num     =   $_POST['idnum'];
    $tel_number =   $_POST['tel_number'] ;
    $address    =   $_POST['address'];
    $avatar     =   $_POST['avatar'] ;

    $database = mysqli_connect('localhost', 'root', 'root','bfgroup');

    if(!empty($name) || !empty($surname) ){
    $mysql = "INSERT INTO `test` (`name`, `surname` , `birthday` , `id_number` , `telephone_number` , `address` , `avatar`) 
    VALUES( '$name', '$surname' , '$birthday' , '$id_num' , '$tel_number' , '$address' , '$avatar')";

    $insert = mysqli_query($database, $mysql);

    if($insert)
    {
        print($name . " ". $surname ." Вы успешно зарегистрировались");
    } else{
        echo $name . " ". $surname . " Регистрация не пройдена. Ошибка на стороне сервера: Error:500";
    }
    mysqli_close($mysql);
    }

?>
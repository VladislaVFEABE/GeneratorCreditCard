<?php
if(isset($_POST['reg'])){
    if(!empty($_POST['cardnumber'])&& !empty($_POST['ExpiryMonth'])&& !empty($_POST['ExpiryYear'])&& !empty($_POST['CVV'])&& !empty($_POST['NameCard'])){
        $connect = mysqli_connect("localhost", "root", "", "viza");
        $cardnumber = mysqli_escape_string($connect, $_POST['cardnumber']);
        $Expirymonth = mysqli_escape_string($connect, $_POST['ExpiryMonth']);
        $Expiryyear = mysqli_escape_string($connect, $_POST['ExpiryYear']);
        $CVV = mysqli_escape_string($connect, $_POST['CVV']);
        $NameCard = mysqli_escape_string($connect, $_POST['NameCard']);
        $query = mysqli_query($connect, "SELECT * FROM `users` WHERE `cardnumber`={$cardnumber} ");
        $numr = mysqli_num_rows($query);
        if($numr == 0){
            $sql = "INSERT INTO `users` (cardnumber, ExpiryMonth, ExpiryYear, CVV, NameCard) VALUES ('{$cardnumber}', '{$Expirymonth}', '{$Expiryyear}', '{$CVV}', '{$NameCard}')";
            $result = mysqli_query($connect, $sql);
            if($result){
                echo "Карта добавлена";
                }
                else {
                echo "Не удалось добавить карту";
                }
                }
               else {
                echo "Это карта занята, выберите другой номер";
                }
               }else {
                
                echo "Все поля обязательны для заполнения!";
               }
               }
?>
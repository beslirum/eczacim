<!DOCTYPE html>
<html lang="en">

<head>
    
   <link id="logo22" rel="icon" type="image/jpg" href="images/logoYuvarlak.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>ECZACIM KAYIT EKRANI</title>
</head>

<body>
    <form method="post" action="kayit.php ">  
       
     <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="images/logoYuvarlak.png" alt="logo">
             </div>
            <div class="login-card-header">
                <h1>KAYIT YAP</h1>
                <div>İşlem yapmak için lütfen kayıt yapınız..</div>
            </div>
            <div class="login-card-form">
             
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">person</span>
                    <input type="text" name="name" placeholder="Kullanıcı Adı Giriniz" id="nameForm" 
                    autofocus required>
                </div>

                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" name="email" placeholder="E-posta giriniz" id="emailForm" 
                    autofocus required>
                </div>

                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" placeholder="Şifre giriniz" id="passwordForm"
                     required>
                </div>

          <!--      <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">vpn_key</span>
                    <input type="password" placeholder="Şifreyi Tekrar Girin" id="passwordForm"
                     required>
                </div>  -->

                



                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Beni Hatırla</label>
                    </div>
                    
                
                <button type="submit" name="submit">Kayıt Yap</button><br>
            
            </div>
          

            <div class="login-card-footer">
                 Kaydınız varmıydı? <a href="login.php">Giriş Yap</a>
            </div>
           
      
        
          </div>

          

      </div>
  </div>
</form>
  


</body>


<!--database'i bağlıyoruz-->
<?php

session_start();
$link=mysqli_connect('localhost','root');
mysqli_select_db($link,'musteri');




include_once 'musteriDB.php';

if(isset($_POST["submit"]))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    $res=mysqli_query($link,"SELECT * FROM musteri WHERE name= '$name'");
    $res1=mysqli_num_rows($res);

    if($res1>=1){
        ?>
        echo'<script> window.onload=function(){ alert("Bu isim kullanılmaz,Farklı isim giriniz");  } </script>' 
        <?php
    }
    else{
        mysqli_query($link,"INSERT INTO musteri VALUES('$name','$email','$password')");
        ?> echo '<script> confirm("Kayıt Oldunuz! Giriş Yapın"); </script>' <?php


    }
       }

    ?>
    

    




</html>
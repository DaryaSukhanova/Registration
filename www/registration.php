

<!DOCTYPE html>

<html lang="ru">
<head>
   <title>Registration</title>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
   <meta name="viewport" content="width=devix ce-width, initial-scale=1.0">
   <link rel="stylesheet" href="/assets/styles.css">
   <link rel="icon" href="../img/kimono-dress.ico" type="image/x-icon" />
   <!-- <script src="jquery-3.3.1.min.js"></script> -->
</head>
<header>

</header>
<body>
   <div class="wrapper">
      <div class="container">
         <main class="main">
           <h1>
            Регистрация
           </h1>
           <div class="registration-fields" >
               <form action="data-verification.php" id="auth" method="post">
                  <input name = "user_name" class = "form-control" type="text" placeholder = "Имя" maxlength = "50" required>
                  <input name = "user_last_name" class = "form-control" type="text" placeholder = "Фамилия" maxlength = "50" required>
                  <input name = "user_email" class = "form-control" type="text" placeholder = "Email" maxlength = "255" required>
                  <input name = "user_password" class = "form-control" type="password" placeholder = "Пароль" maxlength = "255" minlength = "6" required>
                  <input name = "user_website" class = "form-control" type="text" placeholder = "Личный сайт" maxlength = 
                  "255" minlength = "6">
                  <input name = "user_phone_number" class = "form-control" type="text" placeholder = "Телефон">
                  <input name = "user_birthday" class = "form-control" type="text" placeholder = "Дата рождения">
                  <input name = "user_IP" class = "form-control" type="text" placeholder = "IP адрес">
                  <input  type="submit" value = "Отправить" >
               </form>

           </div>
           <div class="send-button" >
               
           </div>
         </main>

      </div>
  
   </div>

   
</body>

</html>

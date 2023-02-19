<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/assets/styles.css">
   <title>Verification</title>
</head>
<body>
   <?php
   $pattern = "/[а-я]{2,}/";
   $pattern_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{9,}$/';
   $pattern_email = '/^[a-zA-Z0-9_]+@[a-zA-Z0-9_]+\.[a-zA-Z]{2,4}$/';
   $pattern_number = '/^\+7 \(\d{3}\) \d{3} \d{4}$/';
   $pattern_birthday = '/^\d{2}-\d{2}-\d{4}$/';
   $pattern_website = '/^https?:\/\/[a-zA-Z0-9_-]+\.[a-zA-Z]{2,4}\/[a-zA-Z0-9_-]+$/';
   $pattern_IP = '/^([0-9]{1,3}\.){3}[0-9]{1,3}/';
  // $pattern_URI = '/[a-zA-Z0-9_\-.:]?(\/\/)?[a-zA-Z0-9_\-.\?=]+(\/)?/';
   $pattern_URI2 = '/(?:http:\/\/)([a-zA-Z0-9_]+).([a-zA-Z0-9_]{2,4})\/([a-zA-Z0-9_]+)\/([a-zA-Z0-9_.]+)\?([a-zA-Z0-9_=]+)/';

      if (!preg_match($pattern, $_POST['user_name'])) {
         echo '<div class="checking_field">Имя введено неверно</div>';
      }
      if (!preg_match($pattern, $_POST['user_last_name'])) {
         echo '<div class="checking_field">Фамилия введена неверно</div>';
      }

      if (!preg_match($pattern_password, $_POST['user_password'])) {
         echo '<div class="checking_field">Пароль введен неверно</div>';
      } 

      if (!preg_match($pattern_email, $_POST['user_email'])) {
         echo '<div class="checking_field">Email введен неверно</div>';
      }

      if (!preg_match($pattern_number, $_POST['user_phone_number'])) {
         echo '<div class="checking_field">Номер телефона введен неверно</div>';
      }

      if (!preg_match($pattern_birthday, $_POST['user_birthday'])) {
         echo '<div class="checking_field">Некорректная дата</div>';
      } else {
         preg_match_all('/(\d{2})+/', $_POST['user_birthday'], $matchesBirthday);
            if ($matchesBirthday[0][0] > 31 || $matchesBirthday[0][1] > 12 || $matchesBirthday[0][2] < 1900 || $matchesBirthday[0][2] > 2022 || $matchesBirthday[0][1] == 2 && $matchesBirthday[0][0] > 28){
               echo '<div class="checking_field">Некорректная дата</div>';
            }
      }
      
      //print_r($matchesBirthday);
      
      if (!preg_match($pattern_website, $_POST['user_website'])) {
         echo '<div class="checking_field">Сайт введен неверно</div>';
      }

      if (!preg_match($pattern_IP, $_POST['user_IP'])) {
         echo '<div class="checking_field">IP введен неверно</div>';
      } else {
         preg_match_all('/(\d{1,})+/', $_POST['user_IP'], $matchesIP);
         //print_r($matchesIP);

         for ($i = 0; $i<3; $i++){
            if ($matchesIP[0][$i] > 255){
               echo '<div class="checking_field">IP введен неверно</div>';
            }
         }
      }




      if (!preg_match($pattern_URI2, 'http://4pda.ru/forum/index.php?showforum=200', $matchesURI)) {
         echo '<div class="checking_field">URI введен неверно</div>';
      } else{
         echo '
            <div>Распарсить URI (http://4pda.ru/forum/index.php?showforum=200)</div>
            <ul type="disc">
               <li>Домен:'.$matchesURI[1].'</li>
               <li>Зона: '.$matchesURI[2].'</li>
               <li>Текущая страница/скрипт: '.$matchesURI[4].'</li>
               <li>GET-запрос: '.$matchesURI[5].'</li>
            </ul>         
         ';

      }
      //print_r($matchesURI);
      

   ?>
</body>
</html>




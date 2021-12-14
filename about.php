<!DOCTYPE html>
<html lang = "ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title>Резюме</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="flexbox">
    <div class="" align="center" id="preview-photo"><img class="png-photo" src="img/i.png" alt="Программист" style="width: 350px; margin-top: 0px; margin-left: 35px;">
      <div class="right" align="center">
      <h3 id="preview-fullname" style="text-transform: capitalize;">Лукашенко Юрий Владимирович</h3>
      <p class="position"><span>Программист</span></p>
      <p><b>Занятость:</b> <span>Полная</span></p>
      <p><b>График работы:</b> <span>Полный день</span></p>
      <p><b>Готовность к командировкам:</b> <span>да</span></p>
      <p><b>Желаемая зарплата:</b> <span>50 000+ грн.</span></p>
      <p><b>Телефон:</b> <span>+380980324471</span></p>
      <p><b>Электронная почта:</b> <span>yuriucis@gmail.com</span></p>
    </div>
    </div>
    <h4 id="preview-personal">Личная информация</h4>
    <div>
    <p><b>Гражданство:</b> <span>Украина</span></p>
    <p><b>Место проживания:</b> <span>г. Люботин</span></p>
    <p><b>Переезд:</b> <span>Возможен</span></p>
    <p><b>Образование:</b> <span>Среднее</span></p>
    <p><b>Дата рождения:</b> <span>2 июля 2002 (18 лет)</span></p>
    <p><b>Пол:</b> <span>Мужской</span></p>
    <p><b>Семейное положение:</b> <span>Не женат</span>
    </p>
  </div>
  <h4 id="preview-expirience">Опыт работы</h4>
  <div>
      <p><b>Период работы:</b> <span>Нет</span></p>
      <p><b>Должность:</b> <span>Нет</span></p>
      <p><b>Организация:</b> <span>Нет</span></p>
      <p><b>Достижения:</b></p>
      <div class="multiline"><p>Достижения:</p>
<ul><li>Создал этот сайт</li></ul></div>
    </div>
  </div>
  <h4 id="preview-education">Образование</h4>
  <div>
      <p><b>Учебное заведение:</b> <span>Люботинская ЗОШ №4</span></p>
      <p><b>Год окончания:</b> <span>2018 (2 лет назад)</span></p>
      <p><b>Факультет:</b> <span>ННИ ЕКТ</span></p>
      <p><b>Специальность:</b> <span>Компьютерная Инженерия</span></p>
      <p><b>Форма обучения:</b> <span>Очная</span></p>
    </div>

  </div>
  <div class="container mt-5">
    <h3>Предлагайте работу</h3>
  <form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
    <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
  </form>
  <div>
      <p>.</p>
      <p>.</p>
    </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
<!DOCTYPE html>
<html lang = "ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title>Обо мне</title>
</head>
<body>
	<?php require "blocks/header.php" ?>
	<div class="">
		<h1 align="center">Привет</h1>
		<h2 align="center">Меня зовут Юра, и это мой сайт</h2>
	</div>
	<div>
	<a class="container">Я родился 2 июля 2002 года в городе Харьков. Окончил школу, а сейчас учюсь в Харьковском <br>национальном техничном университете сельського господарства им. Петра Василенка на специальности "Компьютерная инженерия".</br></a>
	</div>
	<div class="row">
	<div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"><img class="png-photo" src="img/2.jpg" alt="Программист" style="width: 365px; margin-top: -200px; margin-left: 35px;"><rect width="100%" height="100%" fill="#55595c"></rect><text align="center" x="45%" y="10%" fill="#eceeef">Мой город</text></svg>
            <div>
            	<a class="container btn btn-sm btn-outline-secondary" style="color:#006400" href="/batkiv.php">Малая Родина</a>
            </div>
          </div>
        </div>
    <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"><img class="png-photo" src="img/3.jpg" alt="Программист" style="width: 404px; margin-top: -200px; margin-left: 23px;"><rect width="100%" height="100%" fill="#55595c"></rect><text align="center" x="45%" y="10%" fill="#eceeef">Игры</text></svg>
            <div>
            	<a class="container btn btn-sm btn-outline-secondary" style="color:#006400" href="/myhobby.php">Мои увлечения</a>
            </div>
          </div>
        </div>
    <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"><img class="png-photo" src="img/4.jpg" alt="Программист" style="width: 423px; margin-top: -200px; margin-left: 12px;"><rect width="100%" height="100%" fill="#55595c"></rect><text align="center" x="45%" y="10%" fill="#eceeef">Резюме + связатся со мной </text></svg>
            <div>
            	<a class="container btn btn-sm btn-outline-secondary" style="color:#006400" href="/about.php">Контакты</a>
            </div>
          </div>
        </div>  
        </div>  
  <?php require "blocks/footer.php" ?>
</body>
</html>
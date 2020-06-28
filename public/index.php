<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Сервис геокодирования</title>
    <!-- Fonts -->
    <link href="fonts/Mazzard_M_Light/MazzardSoftM-Light.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<main>
    <!-- Search address form -->
    <div class="container">
        <div class="valign-wrapper" style="flex: 1;">
            <div class="container valign" style="max-width: 600px;">
                <form class="col s12" id="feedback_form">
                    <div class="row">
                        <div class="col s12 black-text center-align">
                            <h5>Введите адрес</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s9">
                            <textarea name="person_comment" id="person_comment" class="materialize-textarea black-text" maxlength="512" data-length="512" required="" aria-required="true"></textarea>
                            <label for="person_comment" class="black-text">Адрес</label>
                        </div>
                        <div class="input-field col s3">
                            <button class="btn blue darken-1 waves-effect waves-light" type="submit" style="float: right">Найти<i class="material-icons right">search</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="page-footer transparent">
    <div class="container">
        <div class="footer-copyright transparent">
            <!-- Copyright -->
            <div class="row">
                <div class="col s12 center-align">
                    <span class="copyright-text">© 2020 Design by <a class="footer-link" href="https://vk.com/id152191562">Alex Parkhomov</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
//класс для создания подключения к БД через PHP Data Object
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'imagesdb';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // Отображение ошибок и остановления вебприложения
        exit('Проблемы с подключением к БД!');
    }
}
//класс с шаблонизацией
function tmpl_header($title) {
    echo <<<EOT
        <<!DOCTYPE html>
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Design Work, Contact Page</title>
        <meta name="keywords" content="design work, contact page, free templates, CSS, HTML" />
        <meta name="description" content="Design Work, Contact Page, Free HTML CSS Template" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        
        </head>
        <body>
        
        <div id="templatemo_body_wrapper">
            <div id="templatemo_wrapper">
                
                <div id="templatemo_header">
                    <div id="site_title"><h1><a href="">Free CSS Templates</a></h1></div>
                    <div id="templatemo_menu">
                        <ul>
                          <li><a href="index.php">Home</a></li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="portfolio.php">Portfolio</a></li>
                          <li><a href="blog.php">Blog</a></li>
                          <li><a href="contact.php" class="last current">Contact</a></li>
                        </ul>
                    </div> <!-- end of templatemo_menu -->
                </div><!-- end of header -->
EOT;
}
function tmpl_footer() {
    echo <<<EOT
        <div id="templatemo_footer_wrapper">
            <div id="templatemo_footer">
                © 2020 <a href="#">Кошик Ярослав Павлович</a>
                <div class="cleaner"></div>
            </div>
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type='text/javascript' src='js/logging.js'></script>
        </body>
        </html>
EOT;
}
?>
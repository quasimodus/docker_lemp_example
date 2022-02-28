# docker-lemp <br>
<h1> Nginx + PHP-FPM + MySql + Adminer </h1><br>
Предварительно нужно установить <b>Git, Docker</b> и <b>Docker Compose</b><br>
В нужной директории выполнить: <code> git clone https://github.com/quasimodus/docker-lemp.git </code><br>
Перейти в склонированный каталог <b>docker-lemp</b> со <code>stack.yml </code><br>
Выполнить <code> $docker-compose -f stack.yml up -d </code><br>
В боаузере перейти по ссылке: <code> localhost </code>, должна загрузиться страница приложения<br>
Для работы с базой, при помощи Adminer, перейти по ссылке: <code> localhost:8080 </code>

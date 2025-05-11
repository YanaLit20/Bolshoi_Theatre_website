<!DOCTYPE html 5>
<html>

<head>
    <title>Большой театр</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body style="background:rgb(51, 51, 51, 1) url(image/bg.svg) no-repeat; ">

    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('h1').each(function () {
                var title = $(this);
                title.html(title.text().replace(/(^\w+)/, '<span>$1</span>'));
            });
        });
    </script>
    !-->

    <div class="container">
        <div class="row" id="top" style="background-image: url(image/bg.svg); background-attachment: fixed;">
            <div class=" col-1" id="fixPanel">

                <p align="center">Контактная информация</p>

            </div>
            <div class=" col-lg-7" align="right">
                <p> <a href="">Главная</a> &nbsp; &nbsp;
                    <a href="">О театре</a>&nbsp; &nbsp;
                    <a href="">Наши постановки</a> &nbsp; &nbsp;
                    <a href=""> Партнеры театра</a> &nbsp; &nbsp;
                    <a href="">Контакты</a>
                </p>
            </div>
            <div class=" col-lg-3" align="right">
                <p> <a href="">+7 495 123-45-67</a> &nbsp; &nbsp;

                </p>
            </div>


        </div>

        <div class="container-fluid">
            <div class="row" id="firstScreen">
                <div class="col-md-2"></div>
                <div class="col-md-6 col-sm-1">
                    <h1> Большой театр </h1>
                    <p> Большо́й теа́тр — петербургский театр, существовавший в 1784—1886 годах, с 1886 года —
                        Петербургская
                        консерватория.
                        Первое постоянное в Санкт-Петербурге, крупнейшее в России и одно из крупнейших театральных
                        зданий в
                        Европе XVIII. </p>
                    <input type="button" value="Афиша" class="btn">
                </div>
                <div class="col-md-3">
                    <img src="image/imgmenu.svg" alt="Картинка">
                    <a href="">Пред</a> &nbsp; &nbsp;
                    <a href="">След</a>

                </div>
            </div>



            <div class="row" id="about">
                <div class="col-md-12" align="center">
                    <h1> О театре </h1>
                </div>
                <div class="col-md-5">
                    <h3>Самый лучший театр СПБ</h3>
                    <p>Как свидетельствуют архивные документы, первое каменное здание Большого театра начали возводить в
                        1775 году по проекту
                        Антонио Ринальди. В дальнейшем, после того как Ринальди упал с лесов и не мог лично наблюдать за
                        ходом работ, Екатерина
                        II поручила немецкому театральному декоратору и архитектору Людвигу Филиппу Тишбейну создать
                        новый
                        проект театра,
                        который и был воплощён архитекторами Ф. В. фон Бауром и М. А. Деденёвым. Открытие его состоялось
                        в
                        1783 году, хотя,
                        основываясь на других свидетельствах, годом открытия можно считать 1784 год. </p>


                </div>

                <div class="col-md-3">
                    <img src="image\aboutNum.svg">
                </div>
                <div class="col-md-3">
                    <img src="image\restangle.svg">
                </div>
            </div>


            <div class="row" id="projects" ">
                <div class=" col-12" height="">
                <h1 align="center">Наши постановки</h1>
            </div>
            <h1></h1>
            <!---------------?????---------------------!-->

            <div class="col-3 gl"> <img src="image\Galer1.svg" alt="Картинка" width="120%"> </div>
            <div class="col-3 gl"> <img src="image\Galer2.svg" alt="Картинка" width="120%"> </div>
            <div class="col-3 gl"> <img src="image\Galer3.svg" alt="Картинка" width="120%"> </div>
            <div class="col-3 gl"> <img src="image\Galer4.svg" alt="Картинка" width="120%"> </div>


        </div>


        <div width="200px"></div>
        <div class="row" id="rating">
            <div class="col-7" style=" background-image: url('image\rating.svg'); ">
                <!--<img src="image\rating.svg" alt="Картинка">!-->
                <p> 2018
                    2019
                    2020</p>

                <p>Лучший театр
                    по мнению театральных критиков Парижа</p>

            </div>
        </div>



        <div class="row" id="partners">
            <div class="col-12">
                <h1> партнеры театра </h1>

            </div>
        </div>



        <div class="row" id="contact">
            <div class="col-12">
                <h1>стать меценатом</h1>
                <div>
                    <p>+7 (812) 123-45-55</p>
                    <p>+7 (812) 123-45-66</p>
                    <p>info@theater.ru</p>
                    <p>г. санкт-петербург, невский 140</p>
                </div>
                <form>
                    <input type="text" name="Имя" placeholder="Имя">
                    <input type="text" name="Компания" placeholder="Компания">
                    <textarea name="Сообщение" placeholder="Сообщение"></textarea>
                    <input type="text" name="Телефон" placeholder="Телефон">
                    <input type="text" name="E-mail" placeholder="E-mail">
                    <p>* Ваши данные не будут переданы третьим лицам, 100% вероятность. Конфиденциальность мы
                        гарантируем, и защищаем
                        персональные данные согласно законку ФЗ-52.</p>
                    <input type="button" value="Отправить" class="btn">

                </form>
            </div>
        </div>



        <div class="row" id="footer">
            <div class="col-12">

                <p align="left"> (с) Все права защищены. Большой театр. 2020 </p>
                <p align="right">Разработано d-e-n.ru</p>
            </div>
        </div>
    </div>
    </div>
    

</body>

</html>
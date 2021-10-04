<?php
require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>mcdvo</title>
</head>
<body>
<header class="header">
    <div id="fixed" class="fixed">aaaaaaaa</div>

    <nav class="header-inner navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="" href="#"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                    <li class="nav-item">
                        <img class="logo" src="/img/logoMnormal.svg" alt="">
                    </li>
                    <li class="nav-item">
                        <ul class="header-about d-flex">
                            <li><a href="#our-team">О нас</a></li>
                            <li><a href="#pluses-items">Почему "Макдоналдс"</a></li>
                            <li><a href="#road">Как нас найти?</a></li>
                        </ul>
                    </li>

                </ul>
                <li class="nav-item d-flex align-items-center">
                    <div class="phone">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Позвонить
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="tel:+79006596030">8-900-659-60-30</a></li>
                                <li><a class="dropdown-item" href="tel:+89006596030">8-900-659-60-30</a></li>

                            </ul>
                        </div>
                    </div>
                    <a href="#form" class="anketa">
                        <span>Заполнить анкету</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>



</header>
<section class="welcome">
    <div class="container-fluid">
        <div class="welcome-screen">
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="row">
            <h1 class="heading">
                Наша Команда
            </h1>
            <div id="our-team" class="our-team">
                <div class="about-team d-flex align-items-center">
                    <img class="team-photo" src="/img/team1.png" alt="">
                    <div class="about-text">
                        <p>Семья Макдоналдс - это круг единомышленников и друзей, работающих под одной крышей.
                            Индивидуальность и креативность - вот что отличает каждого из нас</p>
                    </div>
                </div>
                <div class="about-team d-flex align-items-center reverse">
                    <img class="team-photo" src="/img/team2.png" alt="">
                    <div class="about-text">
                        <p>Взаимовыручка, поддержка и карьерный рост - все это ждет тебя в нашей дружной команде. Работая здесь ты не только получаешь достойную зарплату и новый опыт, но также приобретаешь новых друзей</p>
                    </div>
                </div>
                <div class="about-team__teammates d-flex justify-content-between">
                    <img class="teammate" src="/img/teammate1.png" alt="">
                    <img class="teammate" src="/img/teammate2.png" alt="">
                    <img class="teammate" src="/img/teammate3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pluses">
    <div class="container">
        <div class="row">
            <div id="pluses-items" class="pluses-items d-flex flex-wrap justify-content-between">
                <a href="#popup" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/umbrella.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Стабильность и защищенность
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-2" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/gps.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Работа недалеко от дома и учебы
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-3" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/support.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Компания новых друзей
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-4" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/back-in-time.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Удобный и гибкий график работы
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-5" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/aim.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Возможность карьерного роста
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-6" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/fast-food.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Бесплатное питание, обучение и униформа
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-7" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/flags.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Навыки, которые пригодятся в жизни
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
                <a href="#popup-8" class="benefits-list">
                    <div class="benefits-list__icon">
                        <img class="icon" src="/img/items/goal.svg" alt="">
                    </div>
                    <div class="benefits-list__text">
                        Программы и мероприятия для сотрудников
                    </div>
                    <div class="benefits-list__more">
                        подробнее
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="road">
    <div class="container">
        <div class="row">
            <h1 class="heading">
                Как нас найти
            </h1>
            <div id="road" class="road-text">
                Мы находимся в самом сердце Васильевского острова (две минуты от станции метро Василеостровская).
                Это делает наше расположение очень удобным для поездки на работу
            </div>
            <div class="road-map" id="map">

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <h1 class="heading">
                Анкета
            </h1>
            <form action="vendor/function.php" id="form" class="form__body d-flex justify-content-around flex-wrap" method="post" >
                <div class="form__item width50 ">
                    <label for="formName" class="form__lable">Имя Фамилия Отчество*</label>
                    <input id="formName" type="text" name="name" class="form__input " required>
                </div>
                <div class="form__item width50">
                    <label for="formName" class="form__lable">Дата рождения*</label>
                    <input id="formBirthday" type="date" name="birthday" class="form__input" required>
                </div>
                <div class="form__item width50">
                    <label for="formCountry" class="form__lable">Гражданство*</label>
                    <input id="formCountry" type="text" name="country" class="form__input " required>
                </div>
                <div class="form__item width50">
                    <label for="formAdresss" class="form__lable" class="">Адрес проживания*</label>
                    <textarea name="address" id="formAdress" class="form__input " required ></textarea>
                </div>
                <div class="form__item width50">
                    <label for="formPhone" class="form__lable">Номер телефона*</label>
                    <input id="formPhone" type="text" name="phone" class="form__input " required>
                </div>
                <div class="form__item width50">
                    <label for="formCall" class="form__lable">Удобное время для звонка</label>
                    <input id="formCall" type="text" name="call" class="form__input">
                </div>
                <div class="form__item width50">
                    <label for="formEmail" class="form__lable">E-mail*</label>
                    <input id="formEmail" type="email" name="email" class="form__input " required>
                </div>
                <div class="form__item width50">
                    <label for="formBusy" class="form__lable">Занятость в настоящее время*</label>
                    <input id="formBusy" type="text" name="busy" class="form__input " required>
                </div>
                <div class="form__item width100">
                    <label for="formMessage" class="form__lable" class="">Укажите дополнительную информацию о себе</label>
                    <textarea name="message" id="formMessage" class="form__input" ></textarea>
                </div>
                <div class="form__item width100">
                    <label for="Time" class="form__lable">Укажите удобные для работы часы</label>
                    <input id="Time" type="text" name="time" class="form__input ">
                </div>
                <!--
                <div class="popup__title">Укажите удобные для работы часы</div>
                <p>(в дальнейшем эти часы могут меняться в соответсвии с твоими пожеланиями и возможностями)</p>
                <div class="form__item">
                    <table class="popup__time-table">
                        <tbody>
                            <tr class="days">
                                <td></td>
                                <td>пн</td>
                                <td>вт</td>
                                <td>ср</td>
                                <td>чт</td>
                                <td>пт</td>
                                <td>сб</td>
                                <td>вс</td>
                            </tr>

                            <tr class="hours">
                                <td>С</td>
                                <td><input name = "Monday_from" type="number"  value="0"></td>
                                <td><input name = "Monday_from" type="number" value="0"></td>
                                <td><input name = "Monday_from" type="number" value="0"></td>
                                <td><input name = "Monday_from" type="number" value="0"></td>
                                <td><input name = "Monday_from" type="number" value="0"></td>
                                <td><input name = "Monday_from" type="number" value="0"></td>
                                <td><input name = "Monday_from" type="number" value="0"></td>
                            </tr>
                            <tr class="hours">
                                <td>По</td>
                                <td><input type="number" value="24"></td>
                                <td><input type="number" value="24"></td>
                                <td><input type="number" value="24"></td>
                                <td><input type="number" value="24"></td>
                                <td><input type="number" value="24"></td>
                                <td><input type="number" value="24"></td>
                                <td><input type="number" value="24"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            -->

                <button class="form__button width50" type="submit">Отправить анкету</button>
            </form>
        </div>
    </div>
</section>









<div id="popup" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Стабильность и защищенность</div>
            <div class="popup__title">Каждый наш работник может быть уверен, что:</div>
            <div class="popup__text">
                <ul>
                    <li>Его отношения с работодателем оформлены в соответствии с действующим законодательством. С первого дня с работником заключается трудовой договор, заводится трудовая книжка.</li>
                    <li>Заработная плата выплачивается вовремя, уплачиваются все налоги.</li>
                    <li>Очередные отпуска предоставляются и оплачиваются в соответствии с законодательством.</li>
                    <li>Больничные листы оплачиваются.</li>
                    <li>Он получит страховое свидетельство пенсионного фонда, если ранее такого не имел.</li>
                    <li>В случае рождения ребенка работник получит все соответствующие выплаты: оплату декретного больничного листа, пособие по уходу за ребенком. Во время декретного больничного листа и отпуска по уходу за ребенком за работником сохраняется рабочее место.</li>
                    <li>Студентам дневной формы обучения предоставляются учебные отпуска для сдачи экзаменов, студентам вечерней и заочной формы обучения предоставляются оплачиваемые учебные отпуска в соответствии с законодательством.</li>
                    <li>Оформление возможно только на основную работу или работу по совместительству, в соответствии с ТК РФ.</li>
                    <li>Оформление по договору ГПХ и неофициальное оформление не производится.</li>
                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>

<div id="popup-2" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Работа недалеко от дома и учебы</div>

            <div class="popup__text">
                <ul>
                    <p>В больших городах дорога до места работы часто бывает решающим фактором при выборе работодателя. Все мы ценим свое время и не готовы тратить по несколько часов только на то, чтобы добраться до работы и обратно.</p>
                    <p>Компания «Макдоналдс» предлагает возможность выбрать предприятие «Макдоналдс», которое расположено рядом с вашим местом жительства или местом учебы. Такая возможность сэкономит время и средства на проезд.</p>

                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>

<div id="popup-3" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Компания новых друзей</div>

            <div class="popup__text">
                <ul>
                    <p> Мы ценим каждого сотрудника, ведь именно наши люди делают «Макдоналдс» лучшей сетью предприятий быстрого обслуживания в мире. Мы за политику открытых дверей. Для нас важно, чтобы все наши сотрудники были вовлеченными, и каждый чувствовал себя частью большой семьи.</p>
                    <p>Ежедневно мы создаем комфортную обстановку и дружественную атмосферу, чтобы «Макдоналдс» был не просто местом работы, а местом, в котором действительно хочется работать с удовольствием.</p>
                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>

<div id="popup-4" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Удобный и гибкий график работы</div>
            <div class="popup__text">
                <ul>
                    <p>Компания «Макдоналдс» является одним из крупнейших работодателей в России, который имеет возможность предоставить своим работникам график работы, составленный с учетом возможностей и пожеланий самих работников - с учетом дней недели и времени дня, приемлемых для работников.</p>
                    <p>Все предприятия «Макдоналдс» работают  семь дней в неделю, предприятия с автораздачей работают круглосуточно, режим работы  предприятий без автораздачи - с 7 до 24 часов. </p>
                    <p>Такой режим работы предприятий позволяет работникам выбирать дни и часы работы, которые не будут мешать другим занятиям.</p>
                </ul>
            </div>
            <div class="popup__title">Гибкий график работы</div>
            <div class="popup__text">
                <ul>
                    <p>Гибкий график работы предоставляет возможность работать в свободное от основного занятия время.</p>
                    <li>Гибкий график работы удобен для студентов, людей, у которых есть другая работа или увлечение, которое не позволяет работать в общепринятые часы работы.</li>
                    <li>Минимальное количество часов, которое можно работать при гибком графике – 4 часа в день. Часть дня и рабочие дни выбираются по желанию работника.</li>
                    <li>Гибкий график работы позволяет работать любое количество часов в неделю, максимум 40 часов с обязательными двумя выходными днями. Продолжительность смены не может превышать 8 часов.</li>
                    <li>Дни недели и количество часов могут варьироваться по желанию работника.</li>
                    <li>При приеме на работу кандидат продумывает свое расписание и фиксирует свои возможности в приложении к трудовому договору. Работник имеет право изменять свои временные возможности в зависимости от своих потребностей, заранее предупредив об этом администрацию.</li>
                </ul>
            </div>
            <div class="popup__subtitle">Пример расписания</div>
            <table class="popup__time-table">
                <tbody>
                <tr class="days">
                    <td>пн</td>
                    <td>вт</td>
                    <td>ср</td>
                    <td>чт</td>
                    <td>пт</td>
                    <td>сб</td>
                    <td>вс</td>
                </tr>
                <tr class="hours">
                    <td>8:00-<br> 14:00</td>
                    <td>17:00-<br> 22:00</td>
                    <td>Выход-<br> ной</td>
                    <td>Выход-<br> ной</td>
                    <td>10:00-<br> 18:00</td>
                    <td>17:30-<br> 23:30</td>
                    <td>10:00-<br> 20:00</td>
                </tr>
                </tbody>
            </table>
            <p>*Смены могут быть как утренними, дневными, так и вечерними. Время начала и окончания смены может быть любым. Количество выходных дней не может быть менее двух в неделю.</p>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>

<div id="popup-5" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Возможность карьерного роста</div>

            <div class="popup__text">
                <ul>
                    <p>Условия работы, которые предоставляет компания «Макдоналдс» своим работникам, позволяют планировать свою жизнь и быть уверенным в завтрашнем дне.</p>
                    <p>100% директоров наших предприятий когда-то пришли к нам на позицию «работник предприятия «Макдоналдс» и прошли карьерный путь от первой ступени до директора. Некоторые пошли дальше и сегодня возглавляют или трудятся в ключевых департаментах офиса компании.</p>
                    <p>С первого дня новые сотрудники попадают в систему непрерывного обучения и при желании могут двигаться вверх по карьерной лестнице, от работника до инструктора, заместителя директора предприятия и далее внутри системы предприятий, либо переходить на работу в офис по специальности при наличии соответствующих вакансий.</p>
                    <p>И да, огромное количество студентов приходили в «Макдоналдс» просто подработать на лето, не имея никаких планов относительно карьеры в сфере общественного питания. Но увидев и по достоинству оценив возможности, которые предоставляет своим сотрудникам «Макдоналдс» в России, приняли решение остаться в компании и расти вместе с ней. Именно они и возглавляют сегодня наши предприятия по всей стране.</p>

                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>
<div id="popup-6" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Бесплатное питание, обучение, форма</div>

            <div class="popup__text">
                <ul>
                    <p>Условия труда на предприятиях «Макдоналдс» созданы таким образом, чтобы каждому нашему работнику было приятно приходить на работу. Внутри каждого «Макдоналдс» есть все необходимое для работы и отдыха.</p>
                    <li>Рабочие места на производстве созданы с учетом требований по охране труда;</li>
                    <li>В каждом «Макдоналдс» есть оборудованная комната отдыха, где работники могут провести перерыв – поесть, посмотреть телевизор, просто посидеть;</li>
                    <li>Предприятия оборудованы комнатами для переодевания и душевыми;</li>
                    <li>Работникам при приеме на работу бесплатно выдается два комплекта практичной и удобной униформы.</li>
                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>
<div id="popup-7" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Навыки, которые пригодятся в жизни</div>

            <div class="popup__text">
                <ul>
                    <p>Люди — это главная ценность в «Макдоналдс». Нам важно, чтобы каждый сотрудник имел перспективу роста и развития внутри компании и получал удовольствие от своей работы.</p>
                    <p>Возможно, именно поэтому «Макдоналдс» в России является лидером в своей отрасли и одним из самых перспективных работодателей для молодежи.</p>
                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>
<div id="popup-8" class="popup">
    <a href="#fixed" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <a href="#fixed" class="popup__close">X</a>
            <div class="popup__title">Программы и мероприятия для сотрудников</div>

            <div class="popup__text">
                <ul>
                    <p>В «Макдоналдс» регулярно проводятся интересные мероприятия, как внутри предприятий, так и в масштабах всей компании.</p>
                    <p>На постоянной основе действует программа «Чемпион Гостеприимства». Победители этой программы - работники, которые за прошедший месяц показали наилучшие результаты работы, получают приз — наручные часы с символикой «Макдоналдс».</p>
                    <p>Ежегодно работники всех предприятий «Макдоналдс» по всей России принимают участие в отборе на программу «Растим таланты», созданную для предоставления возможности пройти стажировку в центральном офисе компании по своей учебной специальности. На регулярной основе между предприятиями проводятся футбольные матчи.</p>
                    <p>Также ежегодно в мае предприятия предоставляют данные на лучших работников, которые являются также лучшими студентами. На торжественной церемонии стипендиатам выдается почетная грамота, а также выплачивается именная стипендия «Макдоналдс», которую они могут потратить на оплату обучения.</p>
                </ul>
            </div>
            <a href="#form" class="anketa-2">
                <span>Заполнить анкету</span>
            </a>
        </div>
    </div>
</div>


<!--

    <div id="popup-anketa" class="popup">
        <a href="#fixed" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#fixed" class="popup__close">X</a>
                <div class="popup__title">Заполни свои данные</div>
                <div class="form">
                    <form action="#" id="form" class="form__body">
                        <div class="form__item">
                            <label for="formName" class="form__lable">Имя Фамилия Отчество*</label>
                            <input id="formName" type="text" name="name" class="form__input _req">
                        </div>
                        <div class="form__item">
                            <label for="formName" class="form__lable">Дата рождения*</label>
                            <input id="formBirthday" type="date" name="birthday" class="form__input _req">
                        </div>
                        <div class="form__item">
                            <label for="formCountry" class="form__lable">Гражданство*</label>
                            <input id="formCountry" type="text" name="country" class="form__input _req">
                        </div>
                        <div class="form__item">
                            <label for="formAdresss" class="form__lable" class="">Адрес проживания*</label>
                            <textarea name="address" id="formAdress" class="form__input _req" ></textarea>
                        </div>
                        <div class="form__item">
                            <label for="formPhone" class="form__lable">Номер телефона*</label>
                            <input id="formPhone" type="phone" name="phone" class="form__input _req">
                        </div>
                        <div class="form__item">
                            <label for="formCall" class="form__lable">Удобное время для звонка</label>
                            <input id="formCall" type="text" name="call" class="form__input">
                        </div>
                        <div class="form__item">
                            <label for="formEmail" class="form__lable">E-mail*</label>
                            <input id="formEmail" type="text" name="email" class="form__input _req email">
                        </div>
                        <div class="form__item">
                            <label for="formMessage" class="form__lable" class="">Укажите дополнительную информацию о себе</label>
                            <textarea name="message" id="formMessage" class="form__input" ></textarea>
                        </div>
                        <div class="form__item">
                            <label for="formBusy" class="form__lable">Занятость в настоящее время*</label>
                            <input id="formBusy" type="text" name="busy" class="form__input _req">
                        </div>
                        <div class="popup__title">Укажите удобные для работы часы</div>
                        <p>(в дальнейшем эти часы могут меняться в соответсвии с твоими пожеланиями и возможностями)</p>
                        <div class="form__item">
                            <table class="popup__time-table">
                                <tbody>
                                    <tr class="days">
                                        <td></td>
                                        <td>пн</td>
                                        <td>вт</td>
                                        <td>ср</td>
                                        <td>чт</td>
                                        <td>пт</td>
                                        <td>сб</td>
                                        <td>вс</td>
                                    </tr>

                                    <tr class="hours">
                                        <td>С</td>
                                        <td><input type="number"  value="0"></td>
                                        <td><input type="number" value="0"></td>
                                        <td><input type="number" value="0"></td>
                                        <td><input type="number" value="0"></td>
                                        <td><input type="number" value="0"></td>
                                        <td><input type="number" value="0"></td>
                                        <td><input type="number" value="0"></td>
                                    </tr>
                                    <tr class="hours">
                                        <td>По</td>
                                        <td><input type="number" value="24"></td>
                                        <td><input type="number" value="24"></td>
                                        <td><input type="number" value="24"></td>
                                        <td><input type="number" value="24"></td>
                                        <td><input type="number" value="24"></td>
                                        <td><input type="number" value="24"></td>
                                        <td><input type="number" value="24"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form__item">
                            <div class="checkbox">
                                <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input _req">
                                <label for="formAgreement" class="checkbox__label">Я даю согласие на обработку персональных данных</label>
                            </div>
                        </div>
                        <button class="form__button" type="submit">Отправить анкету</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/slick.min.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlFtcLieaokKovXqBj0ebv4B8X9NoE-FQ&callback=initMap"
        type="text/javascript"></script>
<script src="/js/google maps.js"></script>
<script src="/js/form.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
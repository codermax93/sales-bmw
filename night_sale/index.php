<?
header('Content-Type: text/html; charset=windows-1251', true);

$date_sale = '20 Марта';
$utm = !empty($_COOKIE['utm_medium_cpc']) ? true : false;
$months = [
    1 => 'Января',
    2 => 'Февраля',
    3 => 'Марта',
    4 => 'Апреля',
    5 => 'Мая',
    6 => 'Июня',
    7 => 'Июля',
    8 => 'Августа',
    9 => 'Сентября',
    10 => 'Октября',
    11 => 'Ноября',
    12 => 'Декабря'
];

if (isset($_REQUEST['utm_medium']) && $_REQUEST['utm_medium'] == 'cpc') {
    setcookie('utm_medium_cpc', 1, time() + (3600 * 24 * 7));
    $utm = true;
}

if ($utm) {
    $date = strtotime('next Tuesday');
    $date_sale = date('j', strtotime('next Tuesday')) . ' ' . $months[date('n', strtotime('next Tuesday'))];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="favicon.ico">
    <title>BMW AVTOPORT</title>
    <link href="./css/index.css" rel="stylesheet">
    <script type="text/javascript" src="https://yastatic.net/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="./js/index.js"></script>

    <link href="./css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="./css/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css">
    <link href="./css/fonts.css" rel="stylesheet">
    <link href="./css/s_slider.css" rel="stylesheet">

    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script type="text/javascript" src="./js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="./js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="./js/jquery.inputmask.bundle.min.js"></script>
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript" src="./js/s_slider.js"></script>
    <script async type="text/javascript" src="http://call.sinoby.ru/flashcall.js?projectid=1504104156"></script>

    <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzW18A4rg2Mu3da-ooMDXixJhm1LbYaqk&callback=initMap">
    </script> -->

    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {s.className = s.className.replace(RegExp(' ?' + y), '');};
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
          i();
          h.end = null;
        }, c);
        h.timeout = c;
      })(window, document.documentElement, 'async-hide', 'dataLayer', 4000,
          {'GTM-T5ZX7X7': true});</script>

    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments);
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-66091738-1', 'auto');
      ga('require', 'GTM-T5ZX7X7');
      ga('send', 'pageview');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
          try {
            w.yaCounter9613675 = new Ya.Metrika({
              id: 9613675,
              webvisor: true,
              clickmap: true,
              trackLinks: true,
              accurateTrackBounce: true
            });
          } catch (e) { }
        });

        var n = d.getElementsByTagName('script')[0],
            s = d.createElement('script'),
            f = function() { n.parentNode.insertBefore(s, n); };
        s.type = 'text/javascript';
        s.async = true;
        s.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + '//mc.yandex.ru/metrika/watch.js';

        if (w.opera == '[object Opera]') {
          d.addEventListener('DOMContentLoaded', f, false);
        } else { f(); }
      })(document, window, 'yandex_metrika_callbacks');
    </script>
    <noscript>
        <div><img src="//mc.yandex.ru/watch/9613675" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
	<!-- calltouch -->
	<script src="https://mod.calltouch.ru/init.js?id=y61uggaf"></script>
	<!-- /calltouch -->


    <script type="text/javascript">
      var __cs = __cs || [];
      __cs.push(['setCsAccount', 'bIX9bBoIDG2CG50LGnxXUxx8sFoq94Vg']);
    </script>
    <!-- <script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script> -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T5ZX7X7');</script>
    <!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5ZX7X7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
  $(function() {
    $('.s_anchor').click(function() {
      $('.s_anchor').removeClass('current');
      var _series = $(this).data('series');
      var _kuzov = $(this).data('kuzov');

      $('#tb_complects tr:not(:first)').hide();

      if (_kuzov == undefined) {
        $('.s_anchor[data-series=\'' + _series + '\']').addClass('current');
        $('#tb_complects tr[data-series=\'' + _series + '\']').show();
      }
      else {
        _kuzov = _kuzov.split(',');
        for (i in _kuzov) {
          $('.s_anchor[data-series=\'' + _series + '\'][data-kuzov=\'' + _kuzov[i] + '\']').addClass('current');
          $('#tb_complects tr[data-series=\'' + _series + '\'][data-kuzov=\'' + _kuzov[i] + '\']').show();
        }
      }

      var el = $(this).attr('href');
      var _pos = $(el).offset().top;
      $('html, body').animate({scrollTop: _pos}, 500);

      //	_pos = document.getElementById(el).getBoundingClientRect().top+$("body").scrollTop();
      //	$("html, body").animate({ scrollTop: _pos }, 500);

    });

    /*$('.s_anchor').each(function()
    {
        var _series = $(this).data('series');
        var _parent = $(this).closest("li");
        if ($("#tb_complects tr[data-series='"+_series+"']").length == 0) $(_parent).hide();
    });*/
  });
</script>

<header>
    <div class="container">

        <ul class="topmenu">
            <li><a class="s_anchor" href="#car3ser" data-series="BMW 3 серии">BMW 3 серии</a></li>
            <li><a class="s_anchor" href="#car5ser" data-series="BMW 5 серии">BMW 5 серии</a></li>
            <li><a class="s_anchor" href="#car7ser" data-series="BMW 7 серии">BMW 7 серии</a></li>
            <br />
            <li><a class="s_anchor" href="#carx1" data-series="BMW X1">BMW X1</a></li>
            <li><a class="s_anchor" href="#carx3" data-series="BMW X3">BMW X3</a></li>
            <li><a class="s_anchor" href="#carx5" data-series="BMW X5">BMW X5</a></li>
            <li><a class="s_anchor" href="#carx6" data-series="BMW X6">BMW X6</a></li>
        </ul>

        <div class="top_addr_block">
            <a class="top_phone" href="tel:+74957274040">+7 (495) 727-40-40</a>
            <a class="popup" href="#form_popup" _comment="" _name="vizov" _title="заказать обратный звонок">заказать обратный звонок</a>
        </div>
        <a class="logo1" href="/"><img src="./img/logo1.png" /></a>
    </div>
</header>

<div class="title3">
    <div class="container">BMW Автопорт: официальный дилер BMW</div>
</div>

<div class="container">
    <div class="title1_container">
        <a class="title1 popup" href="#form_popup" _comment="" _name="vizov" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ">НОЧЬ
            ПРОДАЖ BMW <?= $date_sale ?> В АВТОПОРТ.</a>
        <div class="title11">
            <a class="title1_comment popup" href="#form_popup" _comment="" _name="vizov" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ">Индивидуальные условия для Вас. Звоните уже сейчас.</a>
            <a class="btn popup arrow" href="#form_popup10" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ</span></a><br>
        </div>
    </div>
</div>

<div class="container">
    <div class="worktime">Работаем до 22:00</div>
    <ul class="cars_items">
        <li id="car1ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 1 серии">
                <span class="title">BMW 1 серии</span>
                <img src="./img/1-series.png" />
                <a class="btn popup" href="#form_popup11" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup12" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>**</sup></span></a><br>
            </a>
        </li>
        <!--li>
            <a class="s_anchor" href="#tb_complects" data-series="BMW 2 серии">
                <span class="title">BMW 2 серии</span>
                <img src="./img/2-series-coupe.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li>
        <li>
            <a class="s_anchor" href="#tb_complects" data-kuzov="F45" data-series="BMW 2 серии">
                <span class="title">BMW 2 серии Active Tourer</span>
                <img src="./img/2-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li-->
        <li id="car3ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 3 серии">
                <span class="title">BMW 3 серии</span>
                <img src="./img/3-series.png" />
                <a class="btn popup" href="#form_popup13" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup14" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>**</sup></span></a><br>
            </a>
        </li>
        <li id="car4ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 4 серии">
                <span class="title">BMW 4 серии Coupe</span>
                <img src="./img/4-series-coupe.png" />
                <a class="btn popup" href="#form_popup15" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup16" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>*</sup></span></a><br>
            </a>
        </li>
        <li id="car5ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 5 серии">
                <span class="title">BMW 5 серии</span>
                <img src="./img/5-series.png" />
                <a class="btn popup" href="#form_popup17" _comment=""  _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup18" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>*</sup></span></a><br>
            </a>
        </li>
        <li id="car6ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 6 серии">
                <span class="title">BMW 6 серии</span>
                <img src="./img/6-series.png" />
                <a class="btn popup" href="#form_popup19" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup20" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>*</sup></span></a><br>
            </a>
        </li>
        <li id="car7ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 7 серии">
                <span class="title">BMW 7 серии</span>
                <img src="./img/7-series.png" />
                <a class="btn popup" href="#form_popup21" _comment=""  _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup22" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 7,77%<sup>***</sup></span></a><br>
            </a>
        </li>
        <li id="carx1">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X1">
                <span class="title">BMW X1</span>
                <img src="./img/x1-series.png" />
                <a class="btn popup" href="#form_popup23" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup24" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>**</sup></span></a><br>
            </a>
        </li>
        <!--li id="carx2">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X2">
                <span class="title">BMW X2</span>
                <img src="./img/x2-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li-->

        <li id="carx3">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X3">
                <span class="title">BMW X3</span>
                <img src="./img/x3-series.png" />
                <a class="btn popup" href="#form_popup25" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup26" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>*</sup></span></a><br>
            </a>
        </li>

        <!--li>
            <a class="s_anchor" href="#tb_complects" data-series="BMW X4">
                <span class="title">BMW X4</span>
                <img src="./img/x4-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li-->

        <!--<li id="carx4">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X4">
                <span class="title">BMW X4</span>
                <img src="./img/x4-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li>-->
        <!--<li id="carx5">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X5">
                <span class="title">BMW X5</span>
                <img src="./img/x5-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li>-->
        <li id="carx6">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X6">
                <span class="title">BMW X6</span>
                <img src="./img/x6-series.png" />
                <a class="btn popup" href="#form_popup27" _comment="" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup28" _comment="" _title="ПОЛУЧИТЬ ПРЕДЛОЖЕНИЕ"><span>ОФОРМИТЬ КРЕДИТ от 5,4%<sup>*</sup></span></a><br>
            </a>
        </li>
        <!--li id="carx7">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X7">
                <span class="title">BMW X7</span>
                <img src="./img/x6-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="ИНДИВИДУАЛЬНЫЙ РАСЧЕТ"><span>ИНДИВИДУАЛЬНЫЙ РАСЧЕТ</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="ОФОРМИТЬ КРЕДИТ"><span>ОФОРМИТЬ КРЕДИТ</span></a><br>
            </a>
        </li-->
    </ul>
</div>

<div class="container">
    <hr>
    <h2 id="form2_form_title" class="form_title">ТАКИЕ УСЛОВИЯ НЕ ПОВТОРЯЮТСЯ. ВАШ ШАНС ТОЛЬКО ЭТОЙ НОЧЬЮ.</h2>
    <form action="email.php" method="POST" data-callkeeper_name="ТАКИЕ УСЛОВИЯ НЕ ПОВТОРЯЮТСЯ. ВАШ ШАНС ТОЛЬКО ЭТОЙ НОЧЬЮ." data-title="ТАКИЕ УСЛОВИЯ НЕ ПОВТОРЯЮТСЯ. ВАШ ШАНС ТОЛЬКО ЭТОЙ НОЧЬЮ." name="form2" id="form2" class="CKiForm" data-flash-title="ТАКИЕ УСЛОВИЯ НЕ ПОВТОРЯЮТСЯ. ВАШ ШАНС ТОЛЬКО ЭТОЙ НОЧЬЮ.">
        <h2 class="form_title" style="display:none;">ТАКИЕ УСЛОВИЯ НЕ ПОВТОРЯЮТСЯ. ВАШ ШАНС ТОЛЬКО ЭТОЙ НОЧЬЮ.</h2>
        <div class="flex">
            <div class="form-group ico_phone">
                <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn arrow form-control CKFormTrigger FlashFormSubmit">Отправить</button>
            </div>
        </div>
        <label class="agree_field"><input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку "Отправить", я даю
            <a target="_blank" href="/soglasie.php">согласие</a> на обработку персональных данных</label>
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div class="container">
    <div class="contacts">
        <div><strong>АДРЕС:</strong> г. Москва, Пятницкое ш., 6-й км, д.3.</div>
        <div><a class="phone" href="tel:+74957274040">+7 (495) 727-40-40</a></div>
    </div>
</div>

<div id="map1"></div>

<div class="container">
    <div class="p-4 text-center">
        <label for="toggle_disclaimer" class="link">Подробности кредитного предложения</label>
    </div>
    <input type="checkbox" class="hidden" id="toggle_disclaimer">
    <div class="disclaimer p-4">
        <p>*Кредит предоставляется «БМВ Банк» ООО. Лицензия Банка России №3482 от 10.06.2013. Условия программы кредитования «Сила характера».</p>
		<p>**Кредит предоставляется «БМВ Банк» ООО. Лицензия Банка России №3482 от 10.06.2013. Условия программы кредитования «Сила характера»: первоначальный взнос – не менее 65% от стоимости автомобиля, процентная ставка по кредиту в рублях РФ — 5,4% при сроке кредита 12 месяцев; первоначальный взнос — не менее 15% (0% для BMW 1 серии, BMW 3 серии, BMW X1; 25% для BMW 7 серии, BMW 8 серии, BMW Z серии, BMW Х6 и M серии) от стоимости автомобиля (не менее 10% (20% для BMW 7 серии, BMW 8 серии, BMW Z серии, BMW Х6 и M серии) при приобретении полиса КАСКО по программе «BMW Страхование»: www.bmwbank.ru/strahovanie, процентные ставки по кредиту в рублях РФ — 10,9% при сроке 13-36 месяцев; 11,5% при сроке кредита 37–60 месяцев. Размеры остаточных платежей от стоимости автомобиля: 55% (12–24 мес.), 50% (36 мес.), 40% (48 мес.), 30% (60 мес.). Минимальная сумма кредита — 200 000 рублей РФ. Максимальная сумма кредита — 8 500 000 рублей РФ. Обязательно наличие полиса КАСКО. Программа распространяется на новые автомобили BMW 1 серии, BMW 3 серии, BMW 4 серии, BMW 5 серии, BMW 6 Гран Туризмо, BMW 8 серия, BMW X1, BMW X2 , BMW X3, BMW X4, BMW X5, BMW X6, BMW 3 серии Гран Туризмо, BMW М серии (кроме М5). Программа действует с 1 марта по 31 марта 2019 года. Подробная информация на сайте www.bmwbank.ru. Настоящая информация не является офертой к заключению договора.</p>

		<p>***Кредит предоставляется «БМВ Банк» ООО. Лицензия Банка России №3482 от 10.06.2013. Условия программы кредитования «Высшие ценности»: 
		первоначальный взнос — не менее 25% от стоимости автомобиля (не менее 20% при приобретении полиса КАСКО по программе «BMW Страхование»: 
		www.bmwbank.ru/strahovanie), процентные ставки по кредиту в рублях РФ — 7,77% при сроке кредита 12–60 месяцев. Размеры остаточных платежей от стоимости автомобиля: 55% (12 мес.), 40% (24 мес.), 35% (36 мес.), 25% (48 мес.), 20% (60 мес.). Минимальная сумма кредита — 200 000 рублей РФ. Максимальная сумма кредита — 8 500 000 рублей РФ. Обязательно наличие полиса КАСКО. Программа распространяется на новые автомобили BMW 7 серии (G11/G12). Программа действует с 1 января по 31 марта 2019 года. Подробная информация на сайте www.bmwbank.ru. Настоящая информация не является офертой к заключению договора.</p>
    </div>
</div>

<div id="form_popup10" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form10" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup11" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form11" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup12" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form12" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup13" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form13" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup14" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form14" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup15" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form15" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup16" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form16" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup17" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form17" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup18" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form18" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup19" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form19" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup20" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form20" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup21" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form21" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup22" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form22" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup23" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form23" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup24" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form24" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup25" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form25" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup26" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form26" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup27" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form27" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div id="form_popup28" class="form_popup_hidden">
    <form action="email.php" method="POST" data-callkeeper_name="Оставьте заявку прямо сейчас" data-title="Оставьте заявку прямо сейчас" name="form1" id="form28" class="CKiForm popup_container" data-flash-title="Оставьте заявку прямо сейчас">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="Ваше имя" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="Ваш телефон" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">Нажимая на кнопку
            "<span class="form_title">Получить предложение</span>", я даю
            <a target="_blank" href="./soglasie.php">согласие</a> на обработку персональных данных</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">Получить предложение</button>
        </div>
        <input type="hidden" name="comment" value="" />
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>
<script type="text/javascript">
    $(document).on('click', '.phone-window-submit', function (e) {
        var form_url = document.location.href.replace(document.location.origin, '');
        var phone = $('.phone-window-phone input').val();
        var date = "";
        var time = "";
        $('.flash-select1-text').each(function (a,b) {
            if(a == 0)
                date = $(this).html();
            if(a == 1)
                time = $(this).html();
        });
        if( phone.length >= 2 ) {
            $.post(
                "/night_sale/crm.php",
                {form_url: form_url, date: date, time: time, phone: phone},
                function () {

                },
                "json"
            );
        }
    });
</script>

</body>
</html>

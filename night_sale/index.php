<?
header('Content-Type: text/html; charset=windows-1251', true);

$date_sale = '29 �������';
$utm = !empty($_COOKIE['utm_medium_cpc']) ? true : false;
$months = [
    1 => '������',
    2 => '�������',
    3 => '�����',
    4 => '������',
    5 => '���',
    6 => '����',
    7 => '����',
    8 => '�������',
    9 => '��������',
    10 => '�������',
    11 => '������',
    12 => '�������'
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
    <script type="text/javascript" src="./js/s_slider.js"></script>
    <script async type="text/javascript" src="http://call.sinoby.ru/flashcall.js?projectid=1504104156"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzW18A4rg2Mu3da-ooMDXixJhm1LbYaqk&callback=initMap">
    </script>

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
          {'GTM-T6FJ744': true});</script>

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
      ga('require', 'GTM-T6FJ744');
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

    <script type="text/javascript">
      var __cs = __cs || [];
      __cs.push(['setCsAccount', 'bIX9bBoIDG2CG50LGnxXUxx8sFoq94Vg']);
    </script>
    <script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>

    <!-- Google Tag Manager -->
    <script>(function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start':
              new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-WKPPVXK');</script>
    <!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKPPVXK"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
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
            <li><a class="s_anchor" href="#car3ser" data-series="BMW 3 �����">BMW 3 �����</a></li>
            <li><a class="s_anchor" href="#car5ser" data-series="BMW 5 �����">BMW 5 �����</a></li>
            <li><a class="s_anchor" href="#car7ser" data-series="BMW 7 �����">BMW 7 �����</a></li>
            <br />
            <li><a class="s_anchor" href="#carx1" data-series="BMW X1">BMW X1</a></li>
            <li><a class="s_anchor" href="#carx3" data-series="BMW X3">BMW X3</a></li>
            <li><a class="s_anchor" href="#carx5" data-series="BMW X5">BMW X5</a></li>
            <li><a class="s_anchor" href="#carx6" data-series="BMW X6">BMW X6</a></li>
        </ul>

        <div class="top_addr_block">
            <a class="top_phone" href="tel:+74951061798">+7 (495) 106-17-98</a>
            <a class="popup" href="#form_popup" _comment="" _name="vizov" _title="�������� �������� ������">�������� �������� ������</a>
        </div>
        <a class="logo1" href="/"><img src="./img/logo1.png" /></a>
    </div>
</header>

<div class="title3">
    <div class="container">BMW ��������: ����������� ����� BMW</div>
</div>

<div class="container">
    <div class="title1_container">
        <a class="title1 popup" href="#form_popup" _comment="" _name="vizov" _title="�������� �����������">����
            ������ BMW <?= $date_sale ?> � ��������.</a>
        <div class="title11">
            <a class="title1_comment popup" href="#form_popup" _comment="" _name="vizov" _title="�������� �����������">�������������� ������� ��� ���. ������� ��� ������.</a>
            <a class="btn popup arrow" href="#form_popup" _comment="" _name="vizov" _title="�������� �����������"><span>�������� �����������</span></a><br>
        </div>
    </div>
</div>

<div class="container">
    <div class="worktime">�������� �� 22:00</div>
    <ul class="cars_items">
        <li id="car1ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 1 �����">
                <span class="title">BMW 1 �����</span>
                <img src="./img/1-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>**</sup>"><span>�������� ������ <sup>**</sup></span></a><br>
            </a>
        </li>
        <!--li>
            <a class="s_anchor" href="#tb_complects" data-series="BMW 2 �����">
                <span class="title">BMW 2 �����</span>
                <img src="./img/2-series-coupe.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li>
        <li>
            <a class="s_anchor" href="#tb_complects" data-kuzov="F45" data-series="BMW 2 �����">
                <span class="title">BMW 2 ����� Active Tourer</span>
                <img src="./img/2-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li-->
        <li id="car3ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 3 �����">
                <span class="title">BMW 3 �����</span>
                <img src="./img/3-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>**</sup>"><span>�������� ������ <sup>**</sup></span></a><br>
            </a>
        </li>
        <li id="car4ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 4 �����">
                <span class="title">BMW 4 ����� Coupe</span>
                <img src="./img/4-series-coupe.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>*</sup>"><span>�������� ������ <sup>*</sup></span></a><br>
            </a>
        </li>
        <li id="car5ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 5 �����">
                <span class="title">BMW 5 �����</span>
                <img src="./img/5-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>*</sup>"><span>�������� ������ <sup>*</sup></span></a><br>
            </a>
        </li>
        <li id="car6ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 6 �����">
                <span class="title">BMW 6 �����</span>
                <img src="./img/6-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>*</sup>"><span>�������� ������ <sup>*</sup></span></a><br>
            </a>
        </li>
        <li id="car7ser">
            <a class="s_anchor" href="#tb_complects" data-series="BMW 7 �����">
                <span class="title">BMW 7 �����</span>
                <img src="./img/7-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>***</sup>"><span>�������� ������ <sup>***</sup></span></a><br>
            </a>
        </li>
        <li id="carx1">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X1">
                <span class="title">BMW X1</span>
                <img src="./img/x1-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>**</sup>"><span>�������� ������ <sup>**</sup></span></a><br>
            </a>
        </li>
        <!--li id="carx2">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X2">
                <span class="title">BMW X2</span>
                <img src="./img/x2-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li-->

        <li id="carx3">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X3">
                <span class="title">BMW X3</span>
                <img src="./img/x3-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>*</sup>"><span>�������� ������ <sup>*</sup></span></a><br>
            </a>
        </li>

        <!--li>
            <a class="s_anchor" href="#tb_complects" data-series="BMW X4">
                <span class="title">BMW X4</span>
                <img src="./img/x4-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li-->

        <!--<li id="carx4">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X4">
                <span class="title">BMW X4</span>
                <img src="./img/x4-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li>-->
        <!--<li id="carx5">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X5">
                <span class="title">BMW X5</span>
                <img src="./img/x5-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li>-->
        <li id="carx6">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X6">
                <span class="title">BMW X6</span>
                <img src="./img/x6-series.png" />
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������ <sup>*</sup>"><span>�������� ������ <sup>*</sup></span></a><br>
            </a>
        </li>
        <!--li id="carx7">
            <a class="s_anchor" href="#tb_complects" data-series="BMW X7">
                <span class="title">BMW X7</span>
                <img src="./img/x6-series.png"/>
                <a class="btn popup" href="#form_popup" _comment="" _name="vizov" _title="�������������� ������"><span>�������������� ������</span></a><br>
                <a class="btn white popup" href="#form_popup" _comment="" _name="vizov" _title="�������� ������"><span>�������� ������</span></a><br>
            </a>
        </li-->
    </ul>
</div>

<div class="container">
    <hr>
    <h2 id="form2_form_title" class="form_title">����� ������� �� �����������. ��� ���� ������ ���� �����.</h2>
    <form action="email.php" method="POST" data-callkeeper_name="����� ������� �� �����������. ��� ���� ������ ���� �����." data-title="����� ������� �� �����������. ��� ���� ������ ���� �����." name="form2" id="form2" class="CKiForm" data-flash-title="����� ������� �� �����������. ��� ���� ������ ���� �����.">
        <h2 class="form_title" style="display:none;">����� ������� �� �����������. ��� ���� ������ ���� �����.</h2>
        <div class="flex">
            <div class="form-group ico_phone">
                <input type="text" name="phone" class="nacc form-control" placeholder="��� �������" data-callkeeper="tel" data-flash="phone">
            </div>
            <div class="form-group">
                <button type="submit" class="btn arrow form-control CKFormTrigger FlashFormSubmit">���������</button>
            </div>
        </div>
        <label class="agree_field"><input type="checkbox" name="agree" value="1" checked="checked">������� �� ������ "���������", � ���
            <a target="_blank" href="/soglasie.php">��������</a> �� ��������� ������������ ������</label>
        <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
    </form>
</div>

<div class="container">
    <div class="contacts">
        <div><strong>�����:</strong> �. ������, ��������� �., 6-� ��, �.3.</div>
        <div><a class="phone" href="tel:+74951061798">+7 (495) 106-17-98</a></div>
    </div>
</div>

<div id="map1"></div>

<div class="container">
    <div class="p-4 text-center">
        <label for="toggle_disclaimer" class="link">����������� ���������� �����������</label>
    </div>
    <input type="checkbox" class="hidden" id="toggle_disclaimer">
    <div class="disclaimer p-4">
        <p>*������ ��������������� ���� ���� ���. �������� ����� ������ �3482 �� 10.06.2013. ������� ��������� ������������ ����� ���������: �������������� ����� � �� ����� 15% (0% ��� BMW 1 �����, BMW 3 �����, BMW X1; 25% ��� BMW 7 �����, BMW 8 �����, BMW Z �����, BMW �6 � M �����) �� ��������� ���������� (�� ����� 10% (20% ��� BMW 7 �����, BMW 8 �����, BMW Z �����, BMW �6 � M �����) ��� ������������ ������ ����� �� ��������� �BMW �����������: www.bmwbank.ru/strahovanie, ���������� ������ �� ������� � ������ �� � 8,0% ��� ����� ������� 12 �������; 10,9% ��� ����� 13-36 �������; 11,5% ��� ����� ������� 37�60 �������. ������� ���������� �������� �� ��������� ����������: 55% (12�24 ���.), 50% (36 ���.), 40% (48 ���.), 30% (60 ���.). ����������� ����� ������� � 200 000 ������ ��. ������������ ����� ������� � 8 500 000 ������ ��. ����������� ������� ������ �����. ��������� ���������������� �� ����� ���������� BMW 1 �����, BMW 3 �����, BMW 4 �����, BMW 5 �����, BMW 6 ���� �������, BMW 8 �����, BMW X1, BMW X2 , BMW X3, BMW X4, BMW X5, BMW X6, BMW 3 ����� ���� �������, BMW � ����� (����� �5). ��������� ��������� � 1 ������ �� 31 ����� 2019 ����. ��������� ���������� �� ����� www.bmwbank.ru. ��������� ���������� �� �������� ������� � ���������� ��������.</p>
		<p>**������ ��������������� ���� ���� ���. �������� ����� ������ �3482 �� 10.06.2013. ������� ��������� ������������ ����� ���������: 
		�������������� ����� � 0% �� ��������� ����������, ���������� ������ �� ������� � ������ �� �8,0% ��� ����� ������� 12 �������; 10,9% ��� ����� 13-36 �������; 11,5% ��� ����� ������� 37�60 �������. ������� ���������� �������� �� ��������� ����������: 55% (12�24 ���.), 50% (36 ���.), 40% (48 ���.), 30% (60 ���.). ����������� ����� ������� � 200 000 ������ ��. ������������ ����� ������� � 8 500 000 ������ ��. ����������� ������� ������ �����. ��������� ���������������� �� ����� ���������� BMW 1 ����� �����, BMW 3 ����� ����� � BMW X1. ��������� ��������� � 1 ������ �� 31 ����� 2019 ����. ��������� ���������� �� ����� www.bmwbank.ru. ��������� ���������� �� �������� ������� � ���������� ��������.</p>

		<p>***������ ��������������� ���� ���� ���. �������� ����� ������ �3482 �� 10.06.2013. ������� ��������� ������������ ������� ��������: 
		�������������� ����� � �� ����� 25% �� ��������� ���������� (�� ����� 20% ��� ������������ ������ ����� �� ��������� �BMW �����������: 
		www.bmwbank.ru/strahovanie), ���������� ������ �� ������� � ������ �� � 7,77% ��� ����� ������� 12�60 �������. ������� ���������� �������� �� ��������� ����������: 55% (12 ���.), 40% (24 ���.), 35% (36 ���.), 25% (48 ���.), 20% (60 ���.). ����������� ����� ������� � 200 000 ������ ��. ������������ ����� ������� � 8 500 000 ������ ��. ����������� ������� ������ �����. ��������� ���������������� �� ����� ���������� BMW 7 ����� (G11/G12). ��������� ��������� � 1 ������ �� 31 ����� 2019 ����. ��������� ���������� �� ����� www.bmwbank.ru. ��������� ���������� �� �������� ������� � ���������� ��������.</p>
    </div>
</div>

<div id="form_popup">
    <form action="email.php" method="POST" data-callkeeper_name="�������� ������ ����� ������" data-title="�������� ������ ����� ������" name="form1" id="form1" class="CKiForm popup_container" data-flash-title="�������� ������ ����� ������">
        <h2 class="form_title"></h2>
        <div class="form-group ico_name">
            <input type="text" name="name" class="nacc form-control" placeholder="���� ���" data-callkeeper="name" data-flash="name">
        </div>
        <div class="form-group ico_phone">
            <input type="text" name="phone" class="nacc form-control" placeholder="��� �������" data-callkeeper="tel" data-flash="phone">
        </div>
        <label class="agree_field">
            <input type="checkbox" name="agree" value="1" checked="checked">������� �� ������
            "<span class="form_title">�������� �����������</span>", � ���
            <a target="_blank" href="./soglasie.php">��������</a> �� ��������� ������������ ������</label>

        <div class="form-group">
            <button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit form_title">�������� �����������</button>
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

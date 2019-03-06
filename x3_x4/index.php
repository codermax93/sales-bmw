<?
	header('Content-Type: text/html; charset=windows-1251', true);
?>
<!DOCTYPE html>
<html>
<head>
	<meta>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<link rel="canonical" href="http://www.bmw-avtoport.ru" />
	<link rel="icon" href="favicon.ico">
	<title>BMW AVTOPORT</title>
	<link href="./css/index.css" rel="stylesheet">
	<script type="text/javascript" src="https://yastatic.net/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>


	<link href="./css/jquery.fancybox.css" rel="stylesheet" type="text/css">
	<link href="./css/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css">
	<link href="./css/fonts.css" rel="stylesheet">
	<link href="./css/s_slider.css" rel="stylesheet">
	<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./js/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="./js/jquery.inputmask.bundle.min.js"></script>
	<script type="text/javascript" src="./js/s_slider.js"></script>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>


<script type="text/javascript" src="http://call.sinoby.ru/script-inject-get.php?projectid=1504104156"></script>
	
<!--
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzW18A4rg2Mu3da-ooMDXixJhm1LbYaqk&callback=initMap">
</script>
-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-66091738-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter9613675 = new Ya.Metrika({id:9613675,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/9613675" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "bIX9bBoIDG2CG50LGnxXUxx8sFoq94Vg"]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKPPVXK');</script>
<!-- End Google Tag Manager -->


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKPPVXK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


	<script>
		$(function(){
			$('.s_anchor').click(function(){
				$('.s_anchor').removeClass('current');
				var _series = $(this).data('series');
				$(".s_anchor[data-series='"+_series+"']").addClass('current');
				$('#tb_complects tr:not(:first)').hide();
				$("#tb_complects tr[data-series='"+_series+"']").show();
				var el = $(this).attr('href');
				el = el.replace("#","");
			//	_pos = document.getElementById(el).getBoundingClientRect().top+$("body").scrollTop();
				_pos = $(window).scrollTop()+document.getElementById(el).getBoundingClientRect().top;
				$("html, body").animate({ scrollTop: _pos }, 500);

			});
			
			$('.s_anchor').each(function(){
				var _series = $(this).data('series');
				var _parent = $(this).closest("li");
				if ($("#tb_complects tr[data-series='"+_series+"']").length == 0) $(_parent).hide();
				
				
			});

		});
	</script>
	<header>
		<div class="container">
			<ul class="topmenu">
				<li><a class="s_anchor" href="#tb_complects" data-series="BMW X3">BMW X3</a></li>
				<li><a class="s_anchor" href="#tb_complects" data-series="����� BMW X4">����� BMW X4</a></li>
			</ul>
			<div class="top_addr_block">
				<div class="logo_text">����������� ����� BMW ��������</div>
				<a class="top_phone" href="tel:+74951061798">+7 (495) 106-17-98</a>
				<a class="popup" href="#form_popup" _comment="" _name="vizov" _title="�������� �������� ������">�������� �������� ������</a>
			</div>
			<a class="logo1" href="/"><img src="./img/logo1.png"/></a>
		</div>
	</header>
	<div class="container">
		<div class="title1_container">
			<div class="title1">���������� ������ BMW X3 � BMW X4. <br/>�� �� ���� ������ ��������.</div>
			<div class="title1_comment">�� �������� ���� ����.</div>
			<a class="btn popup arrow" href="#form_popup" _comment="" _name="vizov" _title="�������� �����������"><span>�������� �����������</span></a>
		</div>
	</div>
	<div class="container">
		<div class="column3_small">
			<div class="column">
				<a class="btn popup arrow grey wide" href="#form_popup" _comment="" _name="vizov" _title="������ �� ����������"><span>������ �� ����������</span></a>
			</div>
			<div class="column">
				<a class="btn popup arrow grey wide" href="#form_popup" _comment="" _name="vizov" _title="������ �� ����-�����"><span>������ �� ����-�����</span></a>
			</div>
			<div class="column">
				<a class="btn popup arrow grey wide" href="#form_popup" _comment="" _name="vizov" _title="������ � �������������"><span>������ � �������������</span></a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="title2">�������� ���� BMW � �������������</div>
		<ul class="cars_items">
			<li>
				<a class="s_anchor" href="#tb_complects" data-series="BMW X3">
					<span class="title">BMW X3</span>
					<img src="./img/x3-series.png"/>
				</a>
			</li>
			<li>
				<a class="s_anchor" href="#tb_complects" data-series="BMW X4">
					<span class="title">BMW X4</span>
					<img src="./img/x4-series.png"/>
				</a>
			</li>
			<li>
				<a class="s_anchor" href="#tb_complects" data-series="����� BMW X4">
					<span class="title">����� BMW X4</span>
					<img src="./img/new-x4-series.png"/>
				</a>
			</li>
		</ul>
	</div>
	<div class="container">
		<div class="title2">��������� ���������� � ������� � ���</div>
		<?$l_current_model = "";include("include.table.php");?>
	</div>
	<div class="container">
		<ul class="gallery1">
			<li><img src="./img/img1.jpg"/></li>
			<li><img src="./img/img2.jpg"/></li>
			<li><img src="./img/img3.jpg"/></li>
		</ul>
		<ul class="gallery1">
			<li><img src="./img/img4.jpg"/></li>
			<li><img src="./img/img5.jpg"/></li>
			<li><img src="./img/img6.jpg"/></li>
			<li><img src="./img/img7.jpg"/></li>
		</ul>
	</div>
	<div class="container">
		<form action="email.php" method="POST" data-callkeeper_name="�������, ������� ������� �������" data-title="�������, ������� ������� �������" name="form2" id="form2" class="CKiForm" data-flash-title="�������, ������� ������� �������">
			<h2 class="form_title">�������, ������� ������� �������</h2>
			<div class="flex">
				<div class="form-group ico_phone">
					<input type="text" name="phone" class="nacc form-control" placeholder="��� �������" data-callkeeper="tel" data-flash="phone">
				</div>
				<div class="form-group">
					<button type="submit" class="btn arrow form-control CKFormTrigger FlashFormSubmit">�������� �������</button>
				</div>
			</div>
			<label class="agree_field"><input type="checkbox" name="agree" value="1" checked="checked">������� �� ������ "�������� �������", � ���  <a target="_blank" href="/soglasie.php">��������</a> �� ��������� ������������ ������</label>
            <input type="hidden" name="form_url" value="<?= $_SERVER['REQUEST_URI'] ?>">
		</form>
	</div>
	<div class="container">
		<div class="contacts">
			<div class="flex">
				<strong>�����:</strong>
				<div>�. ������, ��������� �., 6-� ��.</div>
			</div>
			<div class="flex">
				<div>
					<div><strong>����� ������:</strong>� 9.00 �� 21.00</div><br/>
					<div><strong>����� �������:</strong>� 8.00 �� 22.00</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map1"></div>
	<div class="container">
		<script>
			$(function(){
				$('.disclamer_switch').click(function(){
					$('.disclamer').slideToggle();
					return false;
				});
			});
		</script>
		<center><a class="disclamer_switch" href="#">����������� ���������� �����������</a></center>
		<div class="disclamer">
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
			<label class="agree_field"><input type="checkbox" name="agree" value="1" checked="checked">������� �� ������ "��� ������", � ���  <a target="_blank" href="./soglasie.php">��������</a> �� ��������� ������������ ������</label>

			<div class="form-group">
				<button type="submit" class="btn form-control CKFormTrigger FlashFormSubmit">��� ������</button>
			</div>
			<input type="hidden" name="comment" value=""/>
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
                "/x3_x4/crm.php",
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

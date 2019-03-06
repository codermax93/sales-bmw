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
	<link rel="icon" href="favicon.ico">
	<title>BMW AVTOPORT</title>
	<link href="./css/index.css" rel="stylesheet">
	<script type="text/javascript" src="https://yastatic.net/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
	
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzW18A4rg2Mu3da-ooMDXixJhm1LbYaqk&callback=initMap">
    </script>

<script type="text/javascript" src="http://call.sinoby.ru/script-inject-get.php?projectid=1504104156"></script>

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

	<header>
		<div class="container">
			<div class="top_addr_block">
				<a class="popup" href="#form_popup" _comment="" _name="vizov" _title="�������� �������� ������">�������� �������� ������</a>
			</div>
			<a class="logo1" href="/"><img src="./img/logo1.png"/></a>
		</div>
	</header>
	<div class="container">
		<div class="title1_container">
			<div class="title1">������ ���� �����</div>
			<div class="title1_comment">����������� �� 500 000 �. � ������.<br/> �� ������ ���� ����</div>
			<a class="btn popup arrow" href="#form_popup" _comment="" _name="vizov" _title="�������� �������������� �����������"><span>�������� �������������� �����������</span></a>
		</div>
	</div>
	<div class="container">
		<div class="contacts">
			<div class="column">
				<strong>�����:</strong>
				<div>�. ������ ��������� �., 6-� ��.</div>
			</div>
			<div class="column">
				<strong class="type2">���� ������:</strong>
				<div>� 9.00 �� 21.00</div>
			</div>
		</div>
	</div>
	<div id="map1"></div>
	<div id="form_popup">
		<form action="email.php" method="POST" data-callkeeper_name="�������� ������ ����� ������" data-title="�������� ������ ����� ������" data-flash-title="������ ������" name="form1" id="form1" class="CKiForm popup_container">
			<h2 class="form_title"></h2>
			<div class="form-group ico_name">
				<input type="text" name="name" class="nacc form-control" placeholder="���� ���" data-callkeeper="name" data-flash="name">
			</div>
			<div class="form-group ico_phone">
				<input type="text" name="phone" class="nacc form-control" placeholder="��� �������" data-callkeeper="tel" data-flash="phone">
			</div>
			<label class="agree_field"><input type="checkbox" name="agree" value="1" checked="checked">������� �� ������ "��� ������", � ���  <a target="_blank" href="./soglasie.php">��������</a> �� ��������� ������������ ������</label>

			<div class="form-group">
				<button type="submit" class="btn form-control  CKFormTrigger  FlashFormSubmit">��� ������</button>
			</div>
			<input type="hidden" name="comment" value=""/>
		</form>
	</div>



	<link href="./css/jquery.fancybox.css" rel="stylesheet" type="text/css">
	<link href="./css/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css">
	<link href="./css/fonts.css" rel="stylesheet">
	<link href="./css/s_slider.css" rel="stylesheet">
	<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./js/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="./js/jquery.inputmask.bundle.min.js"></script>
	<script type="text/javascript" src="./js/s_slider.js"></script>


</body>
</html>

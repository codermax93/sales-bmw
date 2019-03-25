function initMap() {
	var uluru = {lat: 55.862423, lng: 37.345472};
	var map = new google.maps.Map(document.getElementById('map1'), {
		zoom: 16,
		center: uluru,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	}
	
	
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
	
	var stylez = [
			{
				featureType: "all",
				elementType: "all",
				stylers: [
					{ saturation: -100 } // <-- THIS
				]
			}
	];
		 var styledMapOptions = {
			name: "Мой стиль"
			};
	
			var jayzMapType = new google.maps.StyledMapType(stylez, styledMapOptions);
		 
			map.mapTypes.set("map_style", jayzMapType);
			map.setMapTypeId('map_style');
	
	
	
	}
	function initYandexMap()
	{
		ymaps.ready(function ()
		{
			/*if ($('html').hasClass('mobile'))
			{
				var _ball_bg = 'img/m.map.balloon.png';
				var _ball_Offset = [-300,-150];
				var _ball_Size = [600,150];
				
			}
			else*/
	/*		{
				var _ball_bg = 'img/map.balloon.png';
				var _ball_Offset = [-10,-85];
				var _ball_Size = [148,92];
			}*/
	
			var _ball_bg = 'img/map.balloon.png';
			var _ball_Offset = [-14,-42];
			var _ball_Size = [28,42];
	
		
					var myMap1 = new ymaps.Map('map1',
			{
				center: [55.862423, 37.345472],
				zoom: 11,
				controls: ['zoomControl']
			},
			{
				searchControlProvider: 'yandex#search'
			});
	
			//baloon 1
				var myPlacemark1 = new ymaps.Placemark( [55.862423, 37.345472],
			{
				balloonContent:"г. Москва, Пятницкое ш., 6-й км, д.3.",
				hintContent: "г. Москва, Пятницкое ш., 6-й км, д.3."
						}, {
			//	balloonLayout: "default#imageWithContent",
			//	balloonImageHref: _ball_bg,
			//	balloonImageOffset: _ball_Offset,
			//	balloonImageSize: _ball_Size,
				iconLayout: 'default#image',
							// Своё изображение иконки метки.
							iconImageHref: _ball_bg,
							// Размеры метки.
							iconImageSize: _ball_Size,
							// Смещение левого верхнего угла иконки относительно
							// её "ножки" (точки привязки).
							iconImageOffset: _ball_Offset
			});
			myMap1.geoObjects.add(myPlacemark1);
			//myPlacemark1.balloon.open();
	
	
	
	
		});//end_ ready
	}//end_ func


function initFancy()
{

	$(".fancybox-gallery").fancybox(
	{
		theme : 'light',
		helpers : { thumbs : true },
		openEffect  : 'fade',
		closeEffect : 'fade',
		nextEffect  : 'fade',
		prevEffect  : 'fade',
		'showNavArrows' :   true
	});

	$(".popup").click( function()
	{
		var _name = _id = $(this).attr('_name');
		var _form_title = $(this).attr('_title');
		var _form_comment = $(this).attr('_comment');
		var _form_id = $(this).attr('href');
		$(_form_id+" form").attr('name',_name);
		$(_form_id+" form").attr('id',_id);
		$(_form_id+" form").attr('data-callkeeper_name',_form_title);
		$(_form_id+" form").attr('data-flash-title', _form_title );
		$(_form_id+" .form_title").text(_form_title);
		$(_form_id+" form").data('title',_form_title);

		

		
		var _select_val = $(this).attr('_select_val');

		$.fancybox( 
		{
			padding: 0,
			content: $(_form_id).html(),
			modal: true,
			scrolling: "no",
			margin: 5,
			/*closeBtn: false,*/
			afterShow: function()
			{
				$(".popup_container input[name=comment]").val(_form_comment);
			
				$("input[name=phone]").inputmask("+7(999) 999-99-99");
				if ( typeof(_select_val)!="undefined" ) $('.popup_container select').val( _select_val );
				$("#fancybox-wrap").css({'top':'20px', 'bottom':'auto'});
			}
		} );
		$(_form_id+" form").attr('name','');
		$(_form_id+" form").attr('id','');
		$(_form_id+" form input[name=comment]").val("");
		return false;
	} );
	
	
	$(".popup2").click( function()
	{
		var _name = _id = $(this).attr('_name');
		var _form_title = $(this).attr('_title');
		var _form_comment = $(this).attr('_comment');
		$(".form_popup2 form").attr('name',_name);
		$(".form_popup2 form").attr('id',_id);
		$(".form_popup2 form").attr('data-callkeeper_name',_form_title );
		$(".form_popup2 form").attr('data-flash-title', _form_title );
	//	$(".form_popup2 .form_title").text(_form_title);
		$(".form_popup2 form").data('title',_form_title);
		
		

		
		var _select_val = $(this).attr('_select_val');

		$.fancybox( 
		{
			padding: 0,
			content: $(".form_popup2").html(),
			modal: true,
			scrolling: "no",
			margin: 5,
			/*closeBtn: false,*/
			afterShow: function()
			{
				$(".popup_container input[name=comment]").val(_form_comment);
			
				$("input[name=phone]").inputmask("+7(999) 999-99-99");
				if ( typeof(_select_val)!="undefined" ) $('.popup_container select').val( _select_val );
			}
		} );
		$(".form_popup2 form").attr('name','');
		$(".form_popup2 form").attr('id','');
		$(".form_popup2 form input[name=comment]").val("");
		return false;
	} );

}//end_ func


function initForm()
{
	$("input[name=phone]").inputmask("+7(999) 999-99-99");

	$( "body" ).on( "submit", "form", function()
	{
		var l_form_object = $(this);
		$("input,textarea,select",this).closest(".form-group").removeClass("has-danger");
		var l_err = false;
		$(".nacc",this).each( function()
		{
			if ( $(this)[0].tagName=="SELECT" || $(this)[0].tagName=="INPUT" )
			{
				if ( $.trim($(this).val())=="" )
				{
					l_err = true;
					$(this).closest(".form-group").addClass("has-danger");
				}//end_ if
			}//end_ if
		} );

var _phone = $("input[name='phone']",l_form_object).val();
_phone = "+"+_phone.replace(/\D+/g,"");

console.log("name"+$("input[name='name']",l_form_object).val());
console.log("phone"+_phone);
console.log("center"+$("input[name='center']",l_form_object).val());


		if ( l_err==true )
		{
			alert("В одном или нескольких полях введены неверные данные");
			return false;
		}//end_ if

		_form_title = $(this).data('title');
		
		$.post( "email.php", $(this).serialize()+"&form="+this.id+"&form_title="+_form_title, function( data )
		{
			
			$('form').trigger('reset');
			ga('send', 'event', 'Форма', 'Успешная отправка');
			dataLayer.push({
				event: l_form_object.attr('id')
			});
			console.log(dataLayer);
			alert("Скорее бегите к телефону, мы уже вам звоним");
			$.fancybox.close();
		});

		return false;
	} );
}//end_ func




function initPlus()
{
	$(".plus").click( function()
	{
		$(this).toggleClass("open");
		var l_desc = $(this).closest(".col-xl-4").find(".desc");
		if ( $(this).hasClass("open") )
		{
			/*l_desc.slideDown();*/
			l_desc.show();
		}else
		{
			/*l_desc.slideUp();*/
			l_desc.hide();
		}
	} );
}//end_ func


function init_topmenu()
{
	//$('.top_menu').height($('.top_menu ul:visible').height());
	//$('.top_menu a > span').click(function(){
	$('.top_menu span').click(function(){
		var _li = $(this).closest('li');
		var _ul = $(this).closest('ul');
		$(' > ul',_li).addClass('show');
		$('.top_menu').height($('> ul',_li).height());
		return false;
	});
	
	$('.top_menu ul > li ul > li > span').click(function(){
		var _parent = $(this).closest('ul').parents('ul');
		$(this).closest('ul').removeClass('show');
		$('.top_menu').height($(_parent).height());
		return false;		
	});
	
	$('.btn_topmenu').click(function(){
		if ($(this).hasClass('open'))
		{
			$(this).removeClass('open');
			$('.topmenu_container').removeClass('open');
			$('.top_menu ul').removeClass('show');
		}
		else
		{
			$(this).addClass('open');
			$('.topmenu_container').addClass('open');
			$('.top_menu').height($('.top_menu > ul').height());
		}
	});
	$(document).mousedown(function(event){if ($(event.target).closest('.topmenu_container').length == 0 && !$(event.target).hasClass('btn_topmenu')) {$('.btn_topmenu').removeClass('open');$('.topmenu_container').removeClass('open');$('.top_menu ul').removeClass('show');}});



}
function anchor_click()
{
	$('.anchor[href^="#"]').click(function(){
	//$('.control_section').click(function(){
		var el = $(this).attr('href');
		var _pos = $(el).offset().top;
		$("html, body").animate({ scrollTop: _pos }, 500);
		return false; 
	});
}


function initPopup()
{
	$('.cars_items2 .popup2').click(function(){
		var _parent = $(this).closest('.car_item');
		var _text = $('.title',_parent).text();
		$('select',_parent).each(function(){
			if ($(this).val() != "") _text += ", "+$(this).val();
		});
		$('.popup2',_parent).attr('_comment',_text);
	});

}//end_ func



function init_complects()
{
	$('.s_complect').each(function(){
		$('option:not(:first)',this).remove();
		var _model = $(this).data('car');
		if (typeof car_array[_model] == 'undefined') return false;
		var _data = car_array[_model];
		for (i in _data)
			$(this).append("<option value='"+i+"'>"+i+"</option");
	});
	$('.s_complect').change(function(){
		var _parent = $(this).closest('.filter');
		$('.s_engine option:not(:first)',_parent).remove();

		var _model = $(this).data('car');
		var _complect = $(this).val();
		if (typeof car_array[_model][_complect] == 'undefined') return false;
		var _data = car_array[_model][_complect];
		for (i in _data)
			$('.s_engine',_parent).append("<option value='"+_data[i]+"'>"+_data[i]+"</option");
	});

}
function init_table()
{
	var i = 1;
	$('.resp_table').each(function()
	{
		$(this).addClass('resp_table'+i);
		var _add_style = "";
		var j = 1;
		$('th',this).each(function(){
			var _text = $(this).html();
			_text = _text.replace("<br>"," ");
			_text = _text.replace("<br/>"," ");
			_text = _text.replace("</br>"," ");
			_text = _text.replace(/<\/?[^>]+>/g,'');
			_text = _text.replace(/\s{2,}/g, ' ');
			if (_text != "") _add_style += ".resp_table"+i+ " tr td:nth-child("+j+"):before {content:'"+_text+"'}";
			j++;
		});
		$(this).after("<style>"+_add_style+"</style>");
		
		i++;
	});

	$('.resp_table .btn').each(function()
	{
		var l_tr = $(this).closest("tr");
		var l_tds = $("td:first",l_tr);
		var l_temp = [];
		l_tds.each( function()
		{
			l_temp.push( $.trim($(this).text()) );
		} );
		$(this).attr( "_title", "КУПИТЬ С ПРЕИМУЩЕСТВОМ "+$.trim(l_temp.join(", ")) );

	});
}

$( function()
{
	init_table();

	$(document).on("change","input[name='agree']",function(){
		var _form = $(this).closest('form');
		if ($("input[name='agree']:not(:checked)",_form).length == 0)
			$(_form).removeClass("not_agree");
		else
			$(_form).addClass("not_agree");
		
	});
	$(document).on( "click","form.not_agree input[type='submit'],form.not_agree button[type='submit'],form.not_agree a.submit",function(){
		var _form = $(this).closest('form');
		if ($(_form).hasClass('not_agree')) return false;
	});

	$(document).on( "submit","form",function(){
		if ($(this).hasClass('not_agree')) return false;
	});



	initPopup();
	init_complects();
	anchor_click();
	init_topmenu();
	initYandexMap();
	initFancy();
	initForm();
	initPlus();
	//initgooglemap();


	/*
anchor_click();
	init_fix_menu();
	initForm();
	initFancy()*/
} );

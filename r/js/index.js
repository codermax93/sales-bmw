function init_row_toggle()
{
	$(".row_toggle").click(function(){
		if ($(".row_toggle_container:animated").length == 0)
		{
			if ($(this).hasClass("open"))
			{
				$(this).removeClass("open");
				$(this).next(".row_toggle_container").slideUp();
			//	$(this).next(".row_toggle_container").hide();
			}
			else
			{
				var _parent = $(this).closest('.only_one');
				if (_parent.length > 0)
				{
					
					$('.row_toggle',_parent).removeClass("open");
					$('.row_toggle_container',_parent).slideUp();
				//	$('.row_toggle_container',_parent).hide();
					
				}
				
				$(this).addClass("open");
				$(this).next(".row_toggle_container").slideDown();
			//	$(this).next(".row_toggle_container").show();
			}
		}
	});
	$(".row_toggle.open").each(function(){
		$(this).next(".row_toggle_container").slideDown();
	});

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
		var _ball_Offset = [-16,-46];
		var _ball_Size = [33,46];

	
	    	var myMap1 = new ymaps.Map('map1',
		{
			center: [55.862429, 37.345482],
			zoom: 16,
			controls: ['zoomControl']
		},
		{
			searchControlProvider: 'yandex#search'
		});

		//baloon 1
	    var myPlacemark1 = new ymaps.Placemark( [55.862429, 37.345482],
		{
			balloonContent:"г. Москва, Пятницкое ш., 6-й км, д.3",
			hintContent: "г. Москва, Пятницкое ш., 6-й км, д.3"
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

//	$(".popup").click( function()
	$(document).on("click",".popup",function(){
		var _form_id = $(this).attr('href');

		var _form_title = $(this).data('title');
		var _form_comment = $(this).data('comment');
		var _form_name = $(this).data('form_name');
		var _form_type_model_name = $(this).data('form_type_model_name');
		var _form_diler = $(this).data('form_diler');
		
		var _select_val = $(this).attr('_select_val');

		$(".popup_container .form_title").html(_form_title);

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
			
			
				$(".popup_container input[name='title']").val(_form_title);
				$(".popup_container input[name='comment']").val(_form_comment);
				$(".popup_container input[name='form_name']").val(_form_name);
				$(".popup_container input[name='form_type_model_name']").val(_form_type_model_name);
				$(".popup_container input[name='form_diler']").val(_form_diler);
				$(".popup_container").attr("data-callkeeper_name",_form_title);
				$(".popup_container").attr('data-flash-title',_form_title);


			
			
				$("input[name=phone]").inputmask("+7(999) 999-99-99");
				if ( typeof(_select_val)!="undefined" ) $('.popup_container select').val( _select_val );
				
				
				
			}
		} );
		return false;
	});
}//end_ func


function initForm()
{

	$("input[name=phone]").inputmask("+7(999) 999-99-99");

	$( "body" ).on( "submit", "form", function()
	{
		if ($(this).hasClass("not_agree")) return false;

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

		if ( l_err==true )
		{
			alert("В одном или нескольких полях введены неверные данные");
			return false;
		}//end_ if

		
		_form_title = $("input[name='title']",this).val();
		_form_comment = $("input[name='comment']",this).val();
		_form_name = $("input[name='form_name']",this).val();
		_form_type_model_name = $("input[name='form_type_model_name']",this).val();
		_form_diler = $("input[name='form_diler']",this).val();

		var _form = this;
		
		$.post( "mail.php", $(this).serialize(), function( data )
		{
		console.log(data);
			
			$(_form).trigger('reset');
			$('input[name=files]',_form).val('');
			$('.uploader_text',_form).css('display','inline-block');
			$('.uploader_images_count',_form).hide();
			alert("Сообщение успешно отправлено");
			$.fancybox.close();
		});

		return false;
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
		var _shift = 0;
		if ($(this).attr('_shift') != undefined) _shift = $(this).attr('_shift');
		
		var el = $(this).attr('href');
		var _pos = $(el).offset().top - $("body").offset().top;
		
		$("html").animate({ scrollTop: _pos }, 500);
		return false; 
	});
	
	$('.anchor2[href^="#"]').click(function(){
	
		var _model = $(this).attr("_model");
		if ($('#filter_table select[name=models]').length > 0)
			$("#filter_table select[name=models] option[value='"+_model+"']").prop("selected",true).change();
	
		var _shift = 0;
		if ($(this).attr('_shift') != undefined) _shift = $(this).attr('_shift');
		
		var el = $(this).attr('href');
		var _pos = $(el).offset().top - $("body").offset().top;
		$("html").animate({ scrollTop: _pos }, 500);
		return false; 
	});
}

function init_resp_table()
{
	var i = 1;
	$('.resp_table').each(function(){
		$(this).addClass('resp_table'+i);
		var _add_style = "";
		var j = 1;
		$('th',this).each(function(){
			var _text = $(this).html();
			_text = _text.replace("<br>"," ");
			_text = _text.replace("<br/>"," ");
			_text = _text.replace("</br>"," ");
			_text = _text.replace("/r","");
			_text = _text.replace(/\r|\n/g, '')
			_text = _text.replace(/<\/?[^>]+>/g,'');
			_text = _text.replace(/\s{2,}/g, ' ');
			if (_text != "") _add_style += ".resp_table"+i+ " tr td:nth-child("+j+"):before {content:'"+_text+"'}";
			j++;
		});
		$(this).after("<style>"+_add_style+"</style>");
		
		i++;
	});
}
function refresh_table()
{
	var curWidth = $(window).width();
	if (curWidth < 700) {
		$('.resp_table').each(function(){
		});
	}
	else
	{
	}
}
function init_agree()
{
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

	
	
	$( "body" ).on('change','.agree',function()
	{
		var _form = $(this).closest('form');
		if ($('.agree:not(:checked)',_form).length == 0)
			$(_form).removeClass("not_agree");
		else
			$(_form).addClass("not_agree");
		
	});

	$( "body" ).on( "submit", "form", function(){
		if ($(this).hasClass("not_agree")) return false;
	});

}

$( function()
{
	init_agree();
	anchor_click();
	//init_topmenu();
	initYandexMap();
	initFancy();
	initForm();
	init_resp_table();
	init_row_toggle();
} );

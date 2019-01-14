<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Купить колонку JBL Charge 3</title>
	<meta name="description" content="Купить колонку JBL Charge 3">
	<meta name="kewords" content="Купить колонку JBL Charge 3">
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="style/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js\lightbox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/lightbox.css">
	<link rel="icon" sizes="64x64" href="faviсon.png">
<script>

$(document).ready(function() {

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		//Get the A tag
		var id = $(this).attr('href');

		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		//transition effect
		$('#mask').fadeIn(1000);
		$('#mask').fadeTo("slow",0.8);

		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();

		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);

		//transition effect
		$(id).fadeIn(2000);

	});

	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		$('#mask, .window').hide();
	});

	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});

});

</script>

    <script src="js/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
    $(".nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
</script>



<body>

<script type='text/javascript'>
            if(window.jQuery == undefined) {
                   document.write("<sc"+"ript src='//avilsanya121090.e-autopay.com/js/jq.js' type='text/javascript'></scr"+"ipt>");
            }

            function EAcheckForm(form){
                var charset = document.charset || document.characterSet;
                form.form_charset.value = charset;

		var items_input = form.getElementsByTagName('input');
                var items_select = form.getElementsByTagName('select');
                var items_textarea = form.getElementsByTagName('textarea');

                /*проверка доп. полей (radio, checkbox)*/
                var is_error = false;
                var is_checked = false;
                var all_radio = jQuery('input[name^=additional_field][type=radio][required=required]');
                var tmp_name = '';

                if(all_radio.length > 0){
                    var tmp_radio = [];
                    var current_name = '';
                    for (var i = 0; i < all_radio.length; i++) {
                        current_name = jQuery(all_radio[i]).attr('name');
                        if (tmp_name !== current_name) {
                            tmp_radio.push(current_name);
                            tmp_name = current_name;
                        }
                    }

                    for (i = 0; i < tmp_radio.length; i++) {
                        if (!jQuery('input[name="' + tmp_radio[i] + '"][type=radio][required=required]').is(':checked')) {
                            is_error = true;
                        }
                    }

                    if(is_error){
                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                        return false;
                    }
                }

                var is_error = false;
                var is_checked = false;
                var all_checkbox = jQuery('input[name^=additional_field][type=checkbox][required=required]');
                var tmp_name = '';

                if(all_checkbox.length > 0){
                    var tmp_checkbox = [];
                    var current_name = '';
                    for (var i = 0; i < all_checkbox.length; i++) {
                        current_name = jQuery(all_checkbox[i]).attr('name');
                        if (tmp_name !== current_name) {
                            tmp_checkbox.push(current_name);
                            tmp_name = current_name;
                        }
                    }

                    for (i = 0; i < tmp_checkbox.length; i++) {
                        if (!jQuery('input[name="' + tmp_checkbox[i] + '"][type=checkbox][required=required]').is(':checked')) {
                            is_error = true;
                        }
                    }

                    if(is_error){
                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                        return false;
                    }
                }

                /*проверка заполнения textarea*/
                for(var i = 0; i < items_textarea.length; i++){
                    var str = items_textarea[i].value;
                    if(items_textarea[i].getAttribute('required') == 'required'){

                        var name_field = items_textarea[i].getAttribute('name');
                        switch(name_field){
                            case 'address':
                                if ((typeof form.ea_custom_address === 'undefined' || form.ea_custom_address.checked) && items_textarea[i].value === '') {
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            default:
                                break;
                        }
                    }
                }

                /*проверка заполнения селектов*/
                for(var i = 0; i < items_select.length; i++){
                    var str = items_select[i].value;
                    if(items_select[i].getAttribute('required') == 'required'){
                        var name_field = items_select[i].getAttribute('name');
                        switch(name_field){
                            case 'region_id':
                                if(!form.ea_custom_region.checked && items_select[i].value == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            case 'city_id':
                                if(!form.ea_custom_city.checked && items_select[i].value == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            case 'country_id':
                            default:
                                if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                        }
                    }
                }

                /*проверка заполнения обязательных полей*/
                for(var i = 0; i < items_input.length; i++){
                    var str = items_input[i].value;
                    if(items_input[i].getAttribute('required') == 'required'){
                        var name_field = items_input[i].getAttribute('name');
                        switch(name_field){
                            case 'country':
                                if(form.ea_custom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'area':
                                if(typeof form.ea_custom_region === 'undefined' || form.ea_custom_region.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'country':
                                if(form.eacustom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'required_phone':
                                /*проверяем заполнение хотя бы одного номера телефона*/
                                var phone1=true;
                                var phone2=true;

                                if( form.cod_oper_mob.value.match(/^[0-9]+$/i) === null || form.phone_mob.value.match(/^[0-9]+$/i) === null ) {
                                    phone1=false;
                                }

                                if( (typeof form.cod_oper_dom !== 'undefined' && form.cod_oper_dom.value.match(/^[0-9]+$/i) === null) ||
                                    (typeof form.phone_dom !== 'undefined' && form.phone_dom.value.match(/^[0-9]+$/i) === null) ) {
                                    phone2=false;
                                }

                                if (typeof form.cod_oper_mob !== 'undefined' && typeof form.cod_oper_dom !== 'undefined') {
                                    if(!phone1 && !phone2){
                                        alert ('Введите полностью и корректно (допускаются только цифры) хотя бы один номер телефона!');
                                        return false;
                                    }
                                } else if (!phone1 || !phone2) {
                                    alert ('Введите полностью и корректно (допускаются только цифры) номер телефона!');
                                    return false;
                                }
                                break;
                            case 'phone':
                                if(str == ''){
                                    alert ('Введите номер Вашего контактного телефона!');
                                    form.phone.focus();
                                    return false;
                                }
                                break;
                            case 'email':
                                if(!form.email.value.match(/^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,10}$/i)){
                                    alert ('Введите корректно Ваш E-Mail адрес!');
                                    form.email.focus();
                                    return false;
                                }
                                break;
                            case 'city':
                                if(typeof form.ea_custom_city === 'undefined' || form.ea_custom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'street':
                                if(typeof form.ea_custom_address === 'undefined' || !form.ea_custom_address.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'dom':
                                if(typeof form.ea_custom_address === 'undefined' || !form.ea_custom_address.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'kvartira':
                                if (typeof form.ea_privatehouse === 'undefined' || (!form.ea_privatehouse.checked && !form.ea_custom_address.checked)) {
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
							case 'any_price':
								var min_price = form.any_price.getAttribute('min');
								if(str == '' || parseFloat(str) < parseFloat(min_price)){
                                    alert ('Сумма не может быть меньше ' + min_price + '!');
                                    form.any_price.focus();
                                    return false;
                                }
								break;
							case 'count':
								var countprod = form.count.getAttribute('min');
								if(str == '' || parseInt(str) < parseInt(countprod)){
                                    alert ('Количество товара не может быть меньше ' + countprod + '!');
                                    form.count.focus();
                                    return false;
                                }
								break;
                            default:
                                if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                        }
                    }
                }
                //alert('submit!');
                return true;
            }

            function validate(str) {
                if(jQuery.trim(str) != ''){
                    return false;
                }else{
                    return true;
                }
            }

            /*Вытягивает по ajax данные списков регионов/городов*/
            function getData(action, objSelect){
                var form_charset = document.charset || document.characterSet;
                var url = '//avilsanya121090.e-autopay.com/adminka/form_generator/get_form_list.php?';
                if(action == 'region'){
                    var country = objSelect.value;
                    if(country == '') {
                        return;
                    }
                    url = url + 'country='+country;
                }else if(action == 'city'){
                    var region = objSelect.value;
                    if(region == '') {
                        return;
                    }
                    url = url + 'region='+region;
                }else{
                    return;
                }

                url = url + '&form_charset='+form_charset;

                jQuery.ajax({
                    url: url,
                    async: true,
                    dataType: 'jsonp',
                    crossDomain: true
                });
            }

            function jsonpCallback(data){
                if(typeof data.country != 'undefined'){
                    if(data.country == 'ok'){
                        jQuery('select#region_id').html(data.list);
                    }else if(data.country == 'error'){
                        alert('Список регионов и городов временно не доступен! Укажите регион и город вручную!');
                        jQuery('select#region_id,select#city_id').html('<option value="">Укажите регион и город вручную!</option>');
                    }
                }else if(typeof data.region != 'undefined'){
                    if(data.region == 'ok'){
                        jQuery('select#city_id').html(data.list);
                    }else if(data.region == 'error'){
                        alert('Список городов временно не доступен! Укажите город вручную!');
                        jQuery('select#city_id').html('<option value="">Укажите регион и город вручную!</option>');
                    }
                }
            }

            function hideElement(obj){
                var type = obj.name;
                switch(type){
                    case 'ea_custom_region':
                        if(obj.checked){
                            jQuery('#ea_product_form_34634 #ea_normal_region select').val('');
							document.getElementById('ea_normal_region').style.display = 'none';
                            document.getElementById('ea_special_region').style.display = 'inline';
                        }else{
                            jQuery('#ea_product_form_34634 #ea_special_region input').val('');
							document.getElementById('ea_normal_region').style.display = 'inline';
                            document.getElementById('ea_special_region').style.display = 'none';
                        }
                        break;
                    case 'ea_custom_city':
                        if(obj.checked){
                            jQuery('#ea_product_form_34634 #ea_normal_city select').val('');
							document.getElementById('ea_normal_city').style.display = 'none';
							document.getElementById('ea_special_city').style.display = 'inline';
                        }else{
                            jQuery('#ea_product_form_34634 #ea_special_city input').val('');
							document.getElementById('ea_normal_city').style.display = 'inline';
							document.getElementById('ea_special_city').style.display = 'none';
                        }
                        break;
                    case 'ea_custom_address':
                        if(obj.checked){
                            document.getElementById('ea_address_1').style.display = 'none';
                            document.getElementById('ea_address_2').style.display = 'none';
                            document.getElementById('ea_address_3').style.display = 'none';

                            document.getElementById('ea_special_address').style.display = 'table-row';
                        }else{
                            document.getElementById('ea_address_1').style.display = 'table-row';
                            document.getElementById('ea_address_2').style.display = 'table-row';
                            document.getElementById('ea_address_3').style.display = 'table-row';

                            document.getElementById('ea_special_address').style.display = 'none';
                        }
                        break;
                    default:
                        break;
                }
            }

window.onload = function(){
    var current_domain = window.location.hostname;
    if (current_domain !== 'avilsanya121090.e-autopay.com') {
        document.getElementById('order_page_referer').value = document.referrer;
    }

    jQuery(function(){
        jQuery('.ea_privatehouse').change(function(){
            if(jQuery(this).attr('checked')){
                jQuery('#ea_korpus_kvartira').hide();
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val());
            } else {
                jQuery('#ea_korpus_kvartira').show();
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Корп. '+jQuery('.ea_korpus').val()+', Кв. '+jQuery('.ea_kvartira').val());
            }
        });
        //************************************
        jQuery('.ea_street,.ea_dom,.ea_korpus,.ea_kvartira').change(function(){
            if(jQuery('.ea_privatehouse').attr('checked'))
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val());
            else{
                if(jQuery('.ea_korpus').val()!='')
                    jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Корп. '+jQuery('.ea_korpus').val()+', Кв. '+jQuery('.ea_kvartira').val());
                else
                    jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Кв. '+jQuery('.ea_kvartira').val());
            }
        });
    });
}
</script>

	<div class="panel-fixed">
		<div class="wrapper"><a href="/" class="logo"></a>
			<a class="logo" href="#"></a>
		<ul class="nav">
			<li><a href="#next2">Описание</a></li>
			<!-- <li><a href="#c2"> Каталог</a></li> -->
			<!-- <li><a href="#c3">Галерея</a></li> -->
			<li><a href="#kontakt">Отзывы</a></li>
		</ul>
     	<a href="#call" name="modal" class="call">Перезвоните мне</a>
     	<span class="tel">Работаем по Санкт-Петербургу</span>
		</div>
	</div>


    @if (Session::has('success')) 
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif



@if(count($errors)>0)
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div class="alert alert-danger">
            {{-- <ul> --}}
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            {{-- </ul> --}}
        </div>
    </div>
</div>
@endif

<div id="section1">
	<div class="wrapper">

	<div class="ntitle">ПОРТАТИВНАЯ АКУСТИЧЕСКАЯ СИСТЕМА С ЗАЩИТОЙ ОТ БРЫЗГ И АККУМУЛЯТОРОМ БОЛЬШОЙ ЕМКОСТИ</div>

		<div class="forms">

			<div class="h1">CHARGE3</div>
			<div class="h2">хит сезона 2018 по самой выгодной цене</div>

			<div class="price">

				<div class="c1">Всего за</div>
				<div class="new">1790 руб</div>
				<div class="old">4090 руб</div>
			</div>


			<!-- <div class="timer1">

			<div class="theend">ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</div>
<script src="timer/timer2.js"></script> -->
			<a href="#all" name="modal" class="button">Оставить заявку</a>



			<!-- </div> <-->

<h1 style="color: #E6D5D5;  font-size: 70px;">+</h1>
<img src="mp32.png" alt="" style="width: 250px; ">
	<a id="next" name="next"></a>

		</div>
<div class="clr"></div>
<!-- <div id="podarok_div">
    <img src="images/podarok.png" alt="">
</div>
<div id="podarok_div2">
    <img src="images/podarok.png" alt="" style="width: 100%;">
</div> -->

	</div>
</div>


<div id="section2">
	<div class="wrapper">

		<div class="title">СЛУШАЙТЕ МУЗЫКУ БЕЗ ПРОВОДОВ. ЗАРЯЖАЙТЕ УСТРОЙСТВА БЕЗ РОЗЕТКИ.</div>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/4XeReVn_Kig" frameborder="0" allowfullscreen></iframe>

		<div class="text">

	Портативная акустическая система JBL Charge 3 с поддержкой Bluetooth и защитой от брызг позволяет быстро организовать вечеринку, воспроизводя мощный и высококачественный стереозвук, а благодаря аккумулятору на <span>6000 мАч</span> вы сможете прослушивать музыку <span>до 15 часов</span>, одновременно подзаряжая свои устройства.
<br><br>
А встроенный микрофон с функциями эхокомпенсации и шумоподавления гарантирует безупречно четкий звук при звонках.

		</div>
<div class="clr"></div>

<div class="hr"></div>

	</div>
</div>
<a id="c1" name="c1" style="position: relative;top:-70px"></a>
<div class="title">Преимущества JBL CHARGE</div>

<div class="wrapper">

	<div class="preim">

		<div class="img"><img src="images/4e69d14573fc0bea422a5edd5a2809be.png" alt=""></div>

		<div class="zag">Функция JBL Connect</div>

		<div class="desp">Постройте свою собственную аудио систему, объединяя динамики, поддерживающие JBL Connect, в единую сеть для создания еще более мощного звучания.</div>

	</div>

	<div class="preim">

		<div class="img"><img src="images/a5fb97ba585fce1405279453a09dda82.png" alt=""></div>

		<div class="zag">Заряжает другие устройства</div>

		<div class="desp">Эта акустическая система заряжает любое совместимое с зарядкой UBS устройство при соединении с ним, даже когда сама система выключена.</div>

	</div>

	<div class="preim">

		<div class="img"><img src="images/607d4e9a36efe39f6cbcca65ba084f07.png" alt=""></div>

		<div class="zag">Поддержка Bluetooth</div>

		<div class="desp">Поддержка технологии Bluetooth позволяет передавать потоковую музыку в высоком качестве с любого устройства оснащенным технологией Bluetooth.</div>

	</div>


	<div class="preim">

		<div class="img"><img src="images/2180d716b2e384e640a081ce95b183ca.png" alt=""></div>

		<div class="zag">Аккумулятор</div>

		<div class="desp">Аккумулятор легко подзаряжается, что позволяет не думать о батарейках и экономит средства.</div>

	</div>

	<div class="preim">

		<div class="img"><img src="images/dce1753b8ddd98bbc6b4a8f4d47629d6.png" alt=""></div>

		<div class="zag">Полная защита от воды</div>

		<div class="desp">Теперь вы можете не беспокоится о случайных брызгах или даже полного погружения в воду!</div>

	</div>

	<div class="preim">

		<div class="img"><img src="images/c42330a48bfa63fb67161454897aa868.png" alt=""></div>

		<div class="zag">Пассивные радиаторы</div>

		<div class="desp">Наличие пассивных излучателей обеспечивают более насыщенное звучание низких частот.</div>

	</div>


</div>

<div id="section3">
	<div class="wrapper">

	<div class="ntitle">Беспроводная портативная акустическая система JBL Charge 3</div>

		<p align="center"><img src="images/img3.png" class="nimg" alt=""></p>

			<div class="h1">Какой цвет тебе понравился больше всего?</div>
<div class="h2">Скорее выбирай понравившийся цвет и <br>
заказывай прямо сейчас со скидкой!</div>

		<a href="#all" name="modal" class="button">Заказать сейчас</a>
<div class="lu2">
Лучшая цена на рынке!
Найдёте дешевле - сделаем скидку!</div>

	<a id="next2" name="next2"></a>
		</div>
	</div>
</div>
<div id="section4">
	<div class="wrapper">

		<div class="left">

			<span>Характеристики:</span>
<ul><li>Характеристики звука:</li><li>Динамики: 2 x 10 Ватт</li>
<li>Входной разъём: Bluetooth A2DP, HFP device or 3.5mm (1/8") stereo mini-jack</li>
<li>Диапазон воспроизводимых частот &nbsp; &nbsp;75 Hz – 20 kHz</li>
<li>Соотношение сигнал/шум &nbsp; &gt;80 dB</li><li>Общие характеристики:</li>
<li>Время зарядки аккумулятора: 4 часа</li><li>Тип аккумулятора Lithium-ion Polymer (3.7V, 6000mAh)</li><li>Время работы аккумулятора: до 15 часов</li><li>Power Supply 5VDC USB output: 5V 2.1A (maximum)</li><li>Характеристики соединений:</li>
<li>Bluetooth 4.0 с низким энергопоиреблением</li><li>Мощность передатчика Bluetooth 0 ~ 4dBm</li><li>Модуляция передатчика Bluetooth &nbsp; &nbsp;GFSK, 8DPSK, π/4DQPSK</li><li>Дополнительно: Встроенный микрофон, Подзарядка внешних устройств, влагозащитный корпус</li></ul>

<span>В комплекте:</span>
<ul class="fw">
	<li>Акустическая система JBL CHARGE 3</li>
	<li>кабель AUX</li>
	<li>Кабель Micro-USB</li>
	<li>Инструкция</li>
</ul>
</div>

<div class="right">

	<a href="images/img2.jpg" data-lightbox="1"><img src="images/img2.jpg" style="max-width: 100%" alt=""></a>

    <div class="price">

                <div class="new">1790 руб</div>
                <div class="old">4090 руб</div>
                <a href="#charge3" name="modal" class="button">Купить со скидкой</a>
            </div>
</div>


		<div class="clr"></div>

	</div>
</div>
<br>
<!-- <div id="section5"><a id="c2" name="c2" style="position: relative;top:-70px"></a>
    <div class="wrapper">

        <div class="item">

        <div class="name">    Charge 3</div>

<img src="images/162c72409dfcd92ff628d8a4e8b98c6c.jpg" alt="">

<ul>
    <li>Мощность АС: 2х10 Вт</li>
    <li>Полная защита от воды</li>
    <li>Материал: пластик + ткань</li>
    <li>Обладает антискользящим основанием</li>
    <li>Работа от аккумулятора до 15 часов</li>
</ul>


    <div class="price">

                <div class="new">1690 руб</div>
                <div class="old">4090 руб</div>
                <a href="#charge3" name="modal" class="button">Купить со скидкой</a>
            </div>




        </div>

    <div class="item">

        <div class="name">    Charge 2</div>
<img src="images/873124651e492366ac9d9c35bf30dd57.jpg" class="nimg2" alt="">


<ul>
    <li>Мощность АС: 2х7,5 Вт</li>
    <li>Только защита от брызг</li>
    <li>Меньше чем charge 3 (пластик)</li>
    <li>Обладает антискользящим покрытием</li>
    <li>Работа от аккумулятора до 12 часов</li>
</ul>





    <div class="price">

                <div class="new">2490 руб</div>
                <div class="old">5190 руб</div>

<a href="#charge2"  name="modal" class="button">Купить со скидкой</a>

            </div>
        </div>

            <div class="item">

        <div class="name">    Charge 3k+</div>

<img src="images/chargre3k.jpg" class="nimg2" alt="" >
<br/><br/>
<ul>
<li>Мощность АС: 2х7,5 Вт</li>
<li>Только защита от брызг</li>
<li>Меньше чем charge 3 (пластик+ткань)</li>
<li>Обладает антискользящим основанием</li>
<li>Работа от аккумулятора до 18 часов</li>
</ul>


    <div class="price">

                <div class="new">2690 руб</div>
                <div class="old">5390 руб</div>
                <a href="#charge3k" name="modal" class="button">Купить со скидкой</a>
            </div>



    </div>
        </div>

<div class="clr"></div>

    </div> -->
</div>


<div class="wrapper">
	<div class="b3">
			<h3>Заказать у нас легко и безопасно</h3>
			<ul>
				<li>
					<img src="images\ico7.png" alt="" style="width: 100px;">
					<b>Опыт на рынке</b>
					Мы развиваемся на рынке торговли более 3 лет
				</li><li class="ico11">
				</li><li>
					<img src="images\ico8.png" alt="" style="width: 100px;">
					<b>Быстрая доставка</b>
					Быстрая доставка по Санкт-Петербургу
				</li><li class="ico11">
				</li><li>
					<img src="images\ico9.png" alt="" style="width: 100px;">
					<b>Гарантия</b>
					Гарантия на данный товар 365 дней
				</li><li class="ico11">
				</li><li>
					<img src="images\ico10.png" alt="" style="width: 100px;">
					<b>Всегда на связи</b>
					Работаем 24 часа в сутки, 7 дней в неделю
				</li>
			</ul>
		</div>

</div>

<a id="c3" name="c3" style="position: relative;top:-70px"></a>
<!-- <div id="section6">


		<div class="ph1">
				<a href="images\photo1b.jpg" data-lightbox="1"><img src="images\photo1.jpg" class="i1" alt=""></a>
			</div>
			<div class="ph2">
				<a href="images\photo2b.jpg" data-lightbox="1"><img src="images\photo2.jpg" class="i2" alt=""></a>
								<a href="images\photo5b.jpg" data-lightbox="1"><img src="images\photo5.jpg" class="i5" alt=""></a>

				<a href="images\photo4b.jpg" data-lightbox="1"><img src="images\photo4.jpg" class="i4" alt=""></a>

			</div>
			<div class="ph3">
				<a href="images\photo6b.jpg" data-lightbox="1"><img src="images\photo6.jpg" class="i6" alt=""></a>
			</div>
			<div class="ph4">
				<a href="images\photo7b.jpg" data-lightbox="1"><img src="images\photo7.jpg" class="i7" alt=""></a>
				<a href="images\photo8b.jpg" data-lightbox="1"><img src="images\photo8.jpg" class="i8" alt=""></a>
			</div>
<div class="clr"></div>

</div> -->

<div id="section7">
	<div class="wrapper">

		<div class="title">Как мы работаем?</div>

		<p align="center"><img src="images/deliv-bg.png" alt=""></p>
	</div>
</div>
<div style="width: 100%;">
	<div style="text-align: center;margin: 20px auto;max-width: 960px;">
		<p style="margin: 30px 0 0 0;color: #000000;font-size: 54px;line-height: 54px;text-align: center;font-weight: normal;">Важно! Обратите внимание!</p>
		<p style="font-size: 29px;line-height: 38px;margin: 30px 0 0 0;font-family: 'Tahoma';color: #333;font-weight: 400;">В последнее время появилось много сайтов с похожим дизайном. На этих сайтах продают некачественный товар по дешёвым ценам. Часто такие продавцы присылают неработоспособные колонки. Будьте внимательны! Не экономьте на качестве.</p>
		<p style="font-size: 40px;line-height: 48px;margin: 20px 0 30px 0;color: #333;">Остерегайтесь продавцов, не имеющих сертификатов на свою продукцию!</p>
		<img src="images/sert.jpg" alt="" style="width: 100%; max-width: 448px;">
	</div>
</div>


<div class="section10">
	<div class="wrapper">
		<h3>Реальные отзывы наших клиентов</h3>

<ul class="comment-section">
	<li class="comment user-comment">

                    <div class="info">
                        <a href="#">Андрей</a>
                    </div>

                        <img src="images/user1.png" width="100" height="100">

                    <p>Приобрёл колонку чардж 3 пару дней назад перед отъездом в отпуск. Берём ее с собой на море и слушаем весь день. Звук чёткий, объёмный. Мы с женой довольны покупкой. </p>

                </li>

<li class="comment user-comment">

                    <div class="info">
                        <a href="#">Светлана</a>
                    </div>

                        <img src="images/user2.png" width="100" height="100">

                    <p>сегодня получала колонку! Звук четкий, насыщенные верха и низы, спасибо!</p>

                </li>


                <li class="comment user-comment">

                    <div class="info">
                        <a href="#">Евгений</a>
                    </div>

                        <img src="images/user3.png" width="100" height="100">

                    <p>я тоже получил сегодня свою JBL Charge 3!!! Крутая колонка за копейки. Играет действительно громко! Зачем переплачивать за какие то наклейки и бумажки. Один фиг что и оригинал , что и дубликат собираются на одном заводе в Китае. Все тоже самое. Короче, я доволен покупкой и тем, что открыл для себя новый классный интернет магазин с быстрой курьерской доставкой. В наше время обмана это редкость.</p>

                </li>


                <li class="comment user-comment">

                    <div class="info">
                        <a href="#">Павел</a>
                    </div>

                        <img src="images/user4.png" width="100" height="100">

                    <p>Отличная колонка! Спасибо интернет-магазину за быструю доставку, за один день доставили! Уже всем советую ваш магазин!</p>

                </li>

                <li class="comment user-comment">

                    <div class="info">
                        <a href="#">Даниил</a>
                    </div>

                        <img src="images/user5.png" width="100" height="100">

                    <p>Всё понравилось, спасибо)</p>

                </li>

                <li class="comment user-comment">

                    <div class="info">
                        <a href="#">Михаил</a>
                    </div>

                        <img src="images/user6.png" width="100" height="100">

                    <p>Спасибо, всё хорошо. Что касаемо самой колонки - очень понравилась функция зарядки других устройств. Действительно, удобно!</p>

                </li>
</ul>

	</div>
</div>





<div id="boxes">

<div id="call" class="window">


<div class="title">Заполните форму!</div>

	<form action="{{ route('postContact') }}" method="POST" name="order_form" target="_parent">
{{ csrf_field() }}
				<input type="text" name="name" placeholder="Введите имя" required="required">
				<input type="text" name="phone" class="phone" placeholder="Введите номер" required="required">
				<!-- <select name="Модель" style="display:none;" >
                    <option value="324054">Выбрать модель</option>
                </select>
                <select class="form-control" name="Цвет" style="display:none;"  required="required" >
                    <option value="Цвет не выбран, уточнить при звонке">Выбрать цвет</option>
                </select> -->
				<input type="submit" name="submit" class="button" value="Заказать звонок">
				<select class="ea_select ea_pay_mode" name="pay_mode" style="display:none;" >
				<option value="3"  >Наложенный платеж</option></select>
				<input type="hidden" name="form_charset" id="form_charset" value="">
				<input type="hidden" name="tovar_id" value="354420">
				<input type="hidden" name="form_id" value="33974">
				<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
	</form>

<a href="#" class="close"/>x</a>
</div>


<div id="all" class="window">


<div class="title">Купить JBL</div>

	<form action="{{ route('postContact') }}" method="POST" name="order_form" target="_parent">
{{ csrf_field() }}

				<input type="text" name="name" placeholder="Введите имя" required="required">
				<input type="text" name="phone" class="phone" placeholder="Введите номер" required="required">
				<!-- <select name="Модель">
                    <option value="324054">Выбрать модель</option>
                    <option value="323841">колонка jbl2</option>
                    <option value="323839">колонка jbl3</option>
                    <option value="323840">колонка jbl3k </option>
                </select>
                <select class="form-control" name="Цвет" style="border-radius: 5px;" required="required" >
                    <option value="Цвет не выбран, уточнить при звонке">Выбрать цвет</option>
                    <option value="Синий">Синий</option>
                    <option value="Красный">Красный</option>
                    <option value="Бирюзовый">Бирюзовый</option>
                    <option value="Серый">Серый</option>
                    <option value="Чёрный">Чёрный</option>
                </select> -->
				<input type="submit" name="submit" class="button" value="Заказать звонок">
				<select class="ea_select ea_pay_mode" name="pay_mode" style="display:none;" >
				<option value="3"  >Наложенный платеж</option></select>
				<input type="hidden" name="form_charset" id="form_charset" value="">
				<input type="hidden" name="tovar_id" value="354420">
				<input type="hidden" name="form_id" value="33974">
				<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
			</form>

<a href="#" class="close"/>x</a>
</div>


<div id="charge3" class="window">


<div class="title">Купить Charge 3</div>

	<form action="{{ route('postContact') }}" method="POST" name="order_form" target="_parent">
{{ csrf_field() }}
				<input type="text" name="name" placeholder="Введите имя" required="required">
				<input type="text" name="phone" class="phone" placeholder="Введите номер" required="required">
				<!-- <select class="form-control" name="Цвет" style="border-radius: 5px;" required="required" >
                    <option value="Цвет не выбран, уточнить при звонке">Выбрать цвет</option>
                    <option value="Синий">Синий</option>
                    <option value="Красный">Красный</option>
                    <option value="Бирюзовый">Бирюзовый</option>
                    <option value="Серый">Серый</option>
                    <option value="Чёрный">Чёрный</option>
                </select> -->
				<input type="submit" name="submit" class="button" value="Заказать звонок">
				<select class="ea_select ea_pay_mode" name="pay_mode" style="display:none;" >
				<option value="3"  >Наложенный платеж</option></select>
				<input type="hidden" name="form_charset" id="form_charset" value="">
				<input type="hidden" name="tovar_id" value="354420">
				<input type="hidden" name="form_id" value="33974">
				<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
			</form>

<a href="#" class="close"/>x</a>
</div>

<div id="charge2" class="window">


<div class="title">Купить Charge 3</div>

	<form action="{{ route('postContact') }}" method="POST" name="order_form" target="_parent">
{{ csrf_field() }}
				<input type="text" name="name" placeholder="Введите имя" required="required">
				<input type="text" name="phone" class="phone" placeholder="Введите номер" required="required">
				<!-- <select class="form-control" name="Цвет" style="border-radius: 5px;" required="required" >
                    <option value="Цвет не выбран, уточнить при звонке">Выбрать цвет</option>
                    <option value="Синий">Синий</option>
                    <option value="Красный">Красный</option>
                    <option value="Бирюзовый">Бирюзовый</option>
                    <option value="Серый">Серый</option>
                    <option value="Чёрный">Чёрный</option>
                </select> -->
				<input type="submit" name="submit" class="button" value="Заказать звонок">
				<select class="ea_select ea_pay_mode" name="pay_mode" style="display:none;" >
				<option value="3"  >Наложенный платеж</option></select>
				<input type="hidden" name="form_charset" id="form_charset" value="">
				<input type="hidden" name="tovar_id" value="354420">
				<input type="hidden" name="form_id" value="33974">
				<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
			</form>

<a href="#" class="close"/>x</a>
</div>


<div id="charge3k" class="window">


<div class="title">Купить Charge 3k</div>

	<form action="{{ route('postContact') }}" method="POST" name="order_form" target="_parent">
{{ csrf_field() }}
				<input type="text" name="name" placeholder="Введите имя" required="required">
				<input type="text" name="phone" class="phone" placeholder="Введите номер" required="required">
				<!-- <select class="form-control" name="Цвет" style="border-radius: 5px;" required="required" >
                    <option value="Цвет не выбран, уточнить при звонке">Выбрать цвет</option>
                    <option value="Синий">Синий</option>
                    <option value="Красный">Красный</option>
                    <option value="Бирюзовый">Бирюзовый</option>
                    <option value="Серый">Серый</option>
                    <option value="Чёрный">Чёрный</option>
                </select> -->
				<input type="submit" name="submit" class="button" value="Заказать звонок">
				<select class="ea_select ea_pay_mode" name="pay_mode" style="display:none;" >
				<option value="3"  >Наложенный платеж</option></select>
				<input type="hidden" name="form_charset" id="form_charset" value="">
				<input type="hidden" name="tovar_id" value="354420">
				<input type="hidden" name="form_id" value="33974">
				<input type="hidden" name="order_page_referer" id="order_page_referer" value="" />
			</form>

<a href="#" class="close"/>x</a>
</div>

</div>
<a href="" id="kontakt"></a>
  <div id="mask"></div>


<script type='text/javascript'>
            if(window.jQuery == undefined) {
                   document.write("<sc"+"ript src='//avilsanya121090.e-autopay.com/js/jq.js' type='text/javascript'></scr"+"ipt>");
            }

            function EAcheckForm(form){
                var charset = document.charset || document.characterSet;
                form.form_charset.value = charset;

		var items_input = form.getElementsByTagName('input');
                var items_select = form.getElementsByTagName('select');
                var items_textarea = form.getElementsByTagName('textarea');

                /*проверка доп. полей (radio, checkbox)*/
                var is_error = false;
                var is_checked = false;
                var all_radio = jQuery('input[name^=additional_field][type=radio][required=required]');
                var tmp_name = '';

                if(all_radio.length > 0){
                    var tmp_radio = [];
                    var current_name = '';
                    for (var i = 0; i < all_radio.length; i++) {
                        current_name = jQuery(all_radio[i]).attr('name');
                        if (tmp_name !== current_name) {
                            tmp_radio.push(current_name);
                            tmp_name = current_name;
                        }
                    }

                    for (i = 0; i < tmp_radio.length; i++) {
                        if (!jQuery('input[name="' + tmp_radio[i] + '"][type=radio][required=required]').is(':checked')) {
                            is_error = true;
                        }
                    }

                    if(is_error){
                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                        return false;
                    }
                }

                var is_error = false;
                var is_checked = false;
                var all_checkbox = jQuery('input[name^=additional_field][type=checkbox][required=required]');
                var tmp_name = '';

                if(all_checkbox.length > 0){
                    var tmp_checkbox = [];
                    var current_name = '';
                    for (var i = 0; i < all_checkbox.length; i++) {
                        current_name = jQuery(all_checkbox[i]).attr('name');
                        if (tmp_name !== current_name) {
                            tmp_checkbox.push(current_name);
                            tmp_name = current_name;
                        }
                    }

                    for (i = 0; i < tmp_checkbox.length; i++) {
                        if (!jQuery('input[name="' + tmp_checkbox[i] + '"][type=checkbox][required=required]').is(':checked')) {
                            is_error = true;
                        }
                    }

                    if(is_error){
                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                        return false;
                    }
                }

                /*проверка заполнения textarea*/
                for(var i = 0; i < items_textarea.length; i++){
                    var str = items_textarea[i].value;
                    if(items_textarea[i].getAttribute('required') == 'required'){

                        var name_field = items_textarea[i].getAttribute('name');
                        switch(name_field){
                            case 'address':
                                if ((typeof form.ea_custom_address === 'undefined' || form.ea_custom_address.checked) && items_textarea[i].value === '') {
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            default:
                                break;
                        }
                    }
                }

                /*проверка заполнения селектов*/
                for(var i = 0; i < items_select.length; i++){
                    var str = items_select[i].value;
                    if(items_select[i].getAttribute('required') == 'required'){
                        var name_field = items_select[i].getAttribute('name');
                        switch(name_field){
                            case 'region_id':
                                if(!form.ea_custom_region.checked && items_select[i].value == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            case 'city_id':
                                if(!form.ea_custom_city.checked && items_select[i].value == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            case 'country_id':
                            default:
                                if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                        }
                    }
                }

                /*проверка заполнения обязательных полей*/
                for(var i = 0; i < items_input.length; i++){
                    var str = items_input[i].value;
                    if(items_input[i].getAttribute('required') == 'required'){
                        var name_field = items_input[i].getAttribute('name');
                        switch(name_field){
                            case 'country':
                                if(form.ea_custom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'area':
                                if(typeof form.ea_custom_region === 'undefined' || form.ea_custom_region.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'country':
                                if(form.eacustom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'required_phone':
                                /*проверяем заполнение хотя бы одного номера телефона*/
                                var phone1=true;
                                var phone2=true;

                                if( form.cod_oper_mob.value.match(/^[0-9]+$/i) === null || form.phone_mob.value.match(/^[0-9]+$/i) === null ) {
                                    phone1=false;
                                }

                                if( (typeof form.cod_oper_dom !== 'undefined' && form.cod_oper_dom.value.match(/^[0-9]+$/i) === null) ||
                                    (typeof form.phone_dom !== 'undefined' && form.phone_dom.value.match(/^[0-9]+$/i) === null) ) {
                                    phone2=false;
                                }

                                if (typeof form.cod_oper_mob !== 'undefined' && typeof form.cod_oper_dom !== 'undefined') {
                                    if(!phone1 && !phone2){
                                        alert ('Введите полностью и корректно (допускаются только цифры) хотя бы один номер телефона!');
                                        return false;
                                    }
                                } else if (!phone1 || !phone2) {
                                    alert ('Введите полностью и корректно (допускаются только цифры) номер телефона!');
                                    return false;
                                }
                                break;
                            case 'phone':
                                if(str == ''){
                                    alert ('Введите номер Вашего контактного телефона!');
                                    form.phone.focus();
                                    return false;
                                }
                                break;
                            case 'email':
                                if(!form.email.value.match(/^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,10}$/i)){
                                    alert ('Введите корректно Ваш E-Mail адрес!');
                                    form.email.focus();
                                    return false;
                                }
                                break;
                            case 'city':
                                if(typeof form.ea_custom_city === 'undefined' || form.ea_custom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'street':
                                if(typeof form.ea_custom_address === 'undefined' || !form.ea_custom_address.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'dom':
                                if(typeof form.ea_custom_address === 'undefined' || !form.ea_custom_address.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'kvartira':
                                if (typeof form.ea_privatehouse === 'undefined' || (!form.ea_privatehouse.checked && !form.ea_custom_address.checked)) {
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
							case 'any_price':
								var min_price = form.any_price.getAttribute('min');
								if(str == '' || parseFloat(str) < parseFloat(min_price)){
                                    alert ('Сумма не может быть меньше ' + min_price + '!');
                                    form.any_price.focus();
                                    return false;
                                }
								break;
							case 'count':
								var countprod = form.count.getAttribute('min');
								if(str == '' || parseInt(str) < parseInt(countprod)){
                                    alert ('Количество товара не может быть меньше ' + countprod + '!');
                                    form.count.focus();
                                    return false;
                                }
								break;
                            default:
                                if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                        }
                    }
                }
                //alert('submit!');
                return true;
            }

            function validate(str) {
                if(jQuery.trim(str) != ''){
                    return false;
                }else{
                    return true;
                }
            }

            /*Вытягивает по ajax данные списков регионов/городов*/
            function getData(action, objSelect){
                var form_charset = document.charset || document.characterSet;
                var url = '//avilsanya121090.e-autopay.com/adminka/form_generator/get_form_list.php?';
                if(action == 'region'){
                    var country = objSelect.value;
                    if(country == '') {
                        return;
                    }
                    url = url + 'country='+country;
                }else if(action == 'city'){
                    var region = objSelect.value;
                    if(region == '') {
                        return;
                    }
                    url = url + 'region='+region;
                }else{
                    return;
                }

                url = url + '&form_charset='+form_charset;

                jQuery.ajax({
                    url: url,
                    async: true,
                    dataType: 'jsonp',
                    crossDomain: true
                });
            }

            function jsonpCallback(data){
                if(typeof data.country != 'undefined'){
                    if(data.country == 'ok'){
                        jQuery('select#region_id').html(data.list);
                    }else if(data.country == 'error'){
                        alert('Список регионов и городов временно не доступен! Укажите регион и город вручную!');
                        jQuery('select#region_id,select#city_id').html('<option value="">Укажите регион и город вручную!</option>');
                    }
                }else if(typeof data.region != 'undefined'){
                    if(data.region == 'ok'){
                        jQuery('select#city_id').html(data.list);
                    }else if(data.region == 'error'){
                        alert('Список городов временно не доступен! Укажите город вручную!');
                        jQuery('select#city_id').html('<option value="">Укажите регион и город вручную!</option>');
                    }
                }
            }

            function hideElement(obj){
                var type = obj.name;
                switch(type){
                    case 'ea_custom_region':
                        if(obj.checked){
                            jQuery('#ea_product_form_34634 #ea_normal_region select').val('');
							document.getElementById('ea_normal_region').style.display = 'none';
                            document.getElementById('ea_special_region').style.display = 'inline';
                        }else{
                            jQuery('#ea_product_form_34634 #ea_special_region input').val('');
							document.getElementById('ea_normal_region').style.display = 'inline';
                            document.getElementById('ea_special_region').style.display = 'none';
                        }
                        break;
                    case 'ea_custom_city':
                        if(obj.checked){
                            jQuery('#ea_product_form_34634 #ea_normal_city select').val('');
							document.getElementById('ea_normal_city').style.display = 'none';
							document.getElementById('ea_special_city').style.display = 'inline';
                        }else{
                            jQuery('#ea_product_form_34634 #ea_special_city input').val('');
							document.getElementById('ea_normal_city').style.display = 'inline';
							document.getElementById('ea_special_city').style.display = 'none';
                        }
                        break;
                    case 'ea_custom_address':
                        if(obj.checked){
                            document.getElementById('ea_address_1').style.display = 'none';
                            document.getElementById('ea_address_2').style.display = 'none';
                            document.getElementById('ea_address_3').style.display = 'none';

                            document.getElementById('ea_special_address').style.display = 'table-row';
                        }else{
                            document.getElementById('ea_address_1').style.display = 'table-row';
                            document.getElementById('ea_address_2').style.display = 'table-row';
                            document.getElementById('ea_address_3').style.display = 'table-row';

                            document.getElementById('ea_special_address').style.display = 'none';
                        }
                        break;
                    default:
                        break;
                }
            }

window.onload = function(){
    var current_domain = window.location.hostname;
    if (current_domain !== 'avilsanya121090.e-autopay.com') {
        document.getElementById('order_page_referer').value = document.referrer;
    }

    jQuery(function(){
        jQuery('.ea_privatehouse').change(function(){
            if(jQuery(this).attr('checked')){
                jQuery('#ea_korpus_kvartira').hide();
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val());
            } else {
                jQuery('#ea_korpus_kvartira').show();
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Корп. '+jQuery('.ea_korpus').val()+', Кв. '+jQuery('.ea_kvartira').val());
            }
        });
        //************************************
        jQuery('.ea_street,.ea_dom,.ea_korpus,.ea_kvartira').change(function(){
            if(jQuery('.ea_privatehouse').attr('checked'))
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val());
            else{
                if(jQuery('.ea_korpus').val()!='')
                    jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Корп. '+jQuery('.ea_korpus').val()+', Кв. '+jQuery('.ea_kvartira').val());
                else
                    jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Кв. '+jQuery('.ea_kvartira').val());
            }
        });
    });
}
</script>
<link href="//avilsanya121090.e-autopay.com/adminka/form_generator/get_form_style.php?id=34634&4473" rel="stylesheet" type="text/css" />
<div class='ea_product_form' id='ea_product_form_34634'>


</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48558719 = new Ya.Metrika({
                    id:48558719,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48558719" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Купить колонку JBL Charge 3</title>
	<meta name="description" content="Купить колонку JBL Charge 3">
	<meta name="kewords" content="Купить колонку JBL Charge 3">
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link rel="stylesheet" href="style/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js\lightbox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/lightbox.css">
	<link rel="icon" sizes="64x64" href="faviсon.png">
<script>

$(document).ready(function() {

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		//Get the A tag
		var id = $(this).attr('href');

		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();

		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		//transition effect
		$('#mask').fadeIn(1000);
		$('#mask').fadeTo("slow",0.8);

		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();

		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);

		//transition effect
		$(id).fadeIn(2000);

	});

	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		$('#mask, .window').hide();
	});

	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});

});

</script>

    <script src="js/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
    $(".nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
</script>



<body>

<script type='text/javascript'>
            if(window.jQuery == undefined) {
                   document.write("<sc"+"ript src='//avilsanya121090.e-autopay.com/js/jq.js' type='text/javascript'></scr"+"ipt>");
            }

            function EAcheckForm(form){
                var charset = document.charset || document.characterSet;
                form.form_charset.value = charset;

		var items_input = form.getElementsByTagName('input');
                var items_select = form.getElementsByTagName('select');
                var items_textarea = form.getElementsByTagName('textarea');

                /*проверка доп. полей (radio, checkbox)*/
                var is_error = false;
                var is_checked = false;
                var all_radio = jQuery('input[name^=additional_field][type=radio][required=required]');
                var tmp_name = '';

                if(all_radio.length > 0){
                    var tmp_radio = [];
                    var current_name = '';
                    for (var i = 0; i < all_radio.length; i++) {
                        current_name = jQuery(all_radio[i]).attr('name');
                        if (tmp_name !== current_name) {
                            tmp_radio.push(current_name);
                            tmp_name = current_name;
                        }
                    }

                    for (i = 0; i < tmp_radio.length; i++) {
                        if (!jQuery('input[name="' + tmp_radio[i] + '"][type=radio][required=required]').is(':checked')) {
                            is_error = true;
                        }
                    }

                    if(is_error){
                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                        return false;
                    }
                }

                var is_error = false;
                var is_checked = false;
                var all_checkbox = jQuery('input[name^=additional_field][type=checkbox][required=required]');
                var tmp_name = '';

                if(all_checkbox.length > 0){
                    var tmp_checkbox = [];
                    var current_name = '';
                    for (var i = 0; i < all_checkbox.length; i++) {
                        current_name = jQuery(all_checkbox[i]).attr('name');
                        if (tmp_name !== current_name) {
                            tmp_checkbox.push(current_name);
                            tmp_name = current_name;
                        }
                    }

                    for (i = 0; i < tmp_checkbox.length; i++) {
                        if (!jQuery('input[name="' + tmp_checkbox[i] + '"][type=checkbox][required=required]').is(':checked')) {
                            is_error = true;
                        }
                    }

                    if(is_error){
                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                        return false;
                    }
                }

                /*проверка заполнения textarea*/
                for(var i = 0; i < items_textarea.length; i++){
                    var str = items_textarea[i].value;
                    if(items_textarea[i].getAttribute('required') == 'required'){

                        var name_field = items_textarea[i].getAttribute('name');
                        switch(name_field){
                            case 'address':
                                if ((typeof form.ea_custom_address === 'undefined' || form.ea_custom_address.checked) && items_textarea[i].value === '') {
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            default:
                                break;
                        }
                    }
                }

                /*проверка заполнения селектов*/
                for(var i = 0; i < items_select.length; i++){
                    var str = items_select[i].value;
                    if(items_select[i].getAttribute('required') == 'required'){
                        var name_field = items_select[i].getAttribute('name');
                        switch(name_field){
                            case 'region_id':
                                if(!form.ea_custom_region.checked && items_select[i].value == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            case 'city_id':
                                if(!form.ea_custom_city.checked && items_select[i].value == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                            case 'country_id':
                            default:
                                if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                        }
                    }
                }

                /*проверка заполнения обязательных полей*/
                for(var i = 0; i < items_input.length; i++){
                    var str = items_input[i].value;
                    if(items_input[i].getAttribute('required') == 'required'){
                        var name_field = items_input[i].getAttribute('name');
                        switch(name_field){
                            case 'country':
                                if(form.ea_custom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'area':
                                if(typeof form.ea_custom_region === 'undefined' || form.ea_custom_region.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'country':
                                if(form.eacustom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'required_phone':
                                /*проверяем заполнение хотя бы одного номера телефона*/
                                var phone1=true;
                                var phone2=true;

                                if( form.cod_oper_mob.value.match(/^[0-9]+$/i) === null || form.phone_mob.value.match(/^[0-9]+$/i) === null ) {
                                    phone1=false;
                                }

                                if( (typeof form.cod_oper_dom !== 'undefined' && form.cod_oper_dom.value.match(/^[0-9]+$/i) === null) ||
                                    (typeof form.phone_dom !== 'undefined' && form.phone_dom.value.match(/^[0-9]+$/i) === null) ) {
                                    phone2=false;
                                }

                                if (typeof form.cod_oper_mob !== 'undefined' && typeof form.cod_oper_dom !== 'undefined') {
                                    if(!phone1 && !phone2){
                                        alert ('Введите полностью и корректно (допускаются только цифры) хотя бы один номер телефона!');
                                        return false;
                                    }
                                } else if (!phone1 || !phone2) {
                                    alert ('Введите полностью и корректно (допускаются только цифры) номер телефона!');
                                    return false;
                                }
                                break;
                            case 'phone':
                                if(str == ''){
                                    alert ('Введите номер Вашего контактного телефона!');
                                    form.phone.focus();
                                    return false;
                                }
                                break;
                            case 'email':
                                if(!form.email.value.match(/^[\w]{1}[\w\.\-_]*@[\w]{1}[\w\-_\.]*\.[\w]{2,10}$/i)){
                                    alert ('Введите корректно Ваш E-Mail адрес!');
                                    form.email.focus();
                                    return false;
                                }
                                break;
                            case 'city':
                                if(typeof form.ea_custom_city === 'undefined' || form.ea_custom_city.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'street':
                                if(typeof form.ea_custom_address === 'undefined' || !form.ea_custom_address.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'dom':
                                if(typeof form.ea_custom_address === 'undefined' || !form.ea_custom_address.checked){
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
                            case 'kvartira':
                                if (typeof form.ea_privatehouse === 'undefined' || (!form.ea_privatehouse.checked && !form.ea_custom_address.checked)) {
                                    if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                        alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком '*', обязательны для заполнения!");
                                        return false;
                                    }
                                }
                                break;
							case 'any_price':
								var min_price = form.any_price.getAttribute('min');
								if(str == '' || parseFloat(str) < parseFloat(min_price)){
                                    alert ('Сумма не может быть меньше ' + min_price + '!');
                                    form.any_price.focus();
                                    return false;
                                }
								break;
							case 'count':
								var countprod = form.count.getAttribute('min');
								if(str == '' || parseInt(str) < parseInt(countprod)){
                                    alert ('Количество товара не может быть меньше ' + countprod + '!');
                                    form.count.focus();
                                    return false;
                                }
								break;
                            default:
                                if(validate(str) || str == ''){
                                    /*alert(name_field);*/
                                    alert("Вы указали не всю информацию!!!\nВсе поля, отмеченные знаком \'*\', обязательны для заполнения!");
                                    return false;
                                }
                                break;
                        }
                    }
                }
                //alert('submit!');
                return true;
            }

            function validate(str) {
                if(jQuery.trim(str) != ''){
                    return false;
                }else{
                    return true;
                }
            }

            /*Вытягивает по ajax данные списков регионов/городов*/
            function getData(action, objSelect){
                var form_charset = document.charset || document.characterSet;
                var url = '//avilsanya121090.e-autopay.com/adminka/form_generator/get_form_list.php?';
                if(action == 'region'){
                    var country = objSelect.value;
                    if(country == '') {
                        return;
                    }
                    url = url + 'country='+country;
                }else if(action == 'city'){
                    var region = objSelect.value;
                    if(region == '') {
                        return;
                    }
                    url = url + 'region='+region;
                }else{
                    return;
                }

                url = url + '&form_charset='+form_charset;

                jQuery.ajax({
                    url: url,
                    async: true,
                    dataType: 'jsonp',
                    crossDomain: true
                });
            }

            function jsonpCallback(data){
                if(typeof data.country != 'undefined'){
                    if(data.country == 'ok'){
                        jQuery('select#region_id').html(data.list);
                    }else if(data.country == 'error'){
                        alert('Список регионов и городов временно не доступен! Укажите регион и город вручную!');
                        jQuery('select#region_id,select#city_id').html('<option value="">Укажите регион и город вручную!</option>');
                    }
                }else if(typeof data.region != 'undefined'){
                    if(data.region == 'ok'){
                        jQuery('select#city_id').html(data.list);
                    }else if(data.region == 'error'){
                        alert('Список городов временно не доступен! Укажите город вручную!');
                        jQuery('select#city_id').html('<option value="">Укажите регион и город вручную!</option>');
                    }
                }
            }

            function hideElement(obj){
                var type = obj.name;
                switch(type){
                    case 'ea_custom_region':
                        if(obj.checked){
                            jQuery('#ea_product_form_34634 #ea_normal_region select').val('');
							document.getElementById('ea_normal_region').style.display = 'none';
                            document.getElementById('ea_special_region').style.display = 'inline';
                        }else{
                            jQuery('#ea_product_form_34634 #ea_special_region input').val('');
							document.getElementById('ea_normal_region').style.display = 'inline';
                            document.getElementById('ea_special_region').style.display = 'none';
                        }
                        break;
                    case 'ea_custom_city':
                        if(obj.checked){
                            jQuery('#ea_product_form_34634 #ea_normal_city select').val('');
							document.getElementById('ea_normal_city').style.display = 'none';
							document.getElementById('ea_special_city').style.display = 'inline';
                        }else{
                            jQuery('#ea_product_form_34634 #ea_special_city input').val('');
							document.getElementById('ea_normal_city').style.display = 'inline';
							document.getElementById('ea_special_city').style.display = 'none';
                        }
                        break;
                    case 'ea_custom_address':
                        if(obj.checked){
                            document.getElementById('ea_address_1').style.display = 'none';
                            document.getElementById('ea_address_2').style.display = 'none';
                            document.getElementById('ea_address_3').style.display = 'none';

                            document.getElementById('ea_special_address').style.display = 'table-row';
                        }else{
                            document.getElementById('ea_address_1').style.display = 'table-row';
                            document.getElementById('ea_address_2').style.display = 'table-row';
                            document.getElementById('ea_address_3').style.display = 'table-row';

                            document.getElementById('ea_special_address').style.display = 'none';
                        }
                        break;
                    default:
                        break;
                }
            }

window.onload = function(){
    var current_domain = window.location.hostname;
    if (current_domain !== 'avilsanya121090.e-autopay.com') {
        document.getElementById('order_page_referer').value = document.referrer;
    }

    jQuery(function(){
        jQuery('.ea_privatehouse').change(function(){
            if(jQuery(this).attr('checked')){
                jQuery('#ea_korpus_kvartira').hide();
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val());
            } else {
                jQuery('#ea_korpus_kvartira').show();
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Корп. '+jQuery('.ea_korpus').val()+', Кв. '+jQuery('.ea_kvartira').val());
            }
        });
        //************************************
        jQuery('.ea_street,.ea_dom,.ea_korpus,.ea_kvartira').change(function(){
            if(jQuery('.ea_privatehouse').attr('checked'))
                jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val());
            else{
                if(jQuery('.ea_korpus').val()!='')
                    jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Корп. '+jQuery('.ea_korpus').val()+', Кв. '+jQuery('.ea_kvartira').val());
                else
                    jQuery('#special_address').val('Ул. '+jQuery('.ea_street').val()+', Д. '+jQuery('.ea_dom').val()+', Кв. '+jQuery('.ea_kvartira').val());
            }
        });
    });
}
</script>

	

</body>
</html>
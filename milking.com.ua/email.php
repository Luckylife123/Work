<?php 


$name = $_POST['name'];
$number = $_POST['number'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$set = $_POST['pickedSet'];
$day = $_POST['pickedDay'];
$cart = $_POST['pickedCart'];
$price = $_POST['pickedPrice'];
$pickedSend = $_POST['pickedSend'];
$mymail = $_POST['mymail'];


if($day==""){
	$day=1;
}


$arrayCart = explode("*", $cart);

$name = htmlspecialchars($name);
$number = htmlspecialchars($number);
$adress = htmlspecialchars($adress);
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);
$set = htmlspecialchars($set);
$day = htmlspecialchars($day);
$cart = htmlspecialchars($cart);
$price = htmlspecialchars($price);
$pickedSend = htmlspecialchars($pickedSend);
$mymail = htmlspecialchars($mymail);



$name = urldecode($name);
$number = urldecode($number);
$adress = urldecode($adress);
$email = urldecode($email);
$comment = urldecode($comment);
$set = urldecode($set);
$day = urldecode($day);
$cart = urldecode($cart);
$price = urldecode($price);
$pickedSend = urldecode($pickedSend);
$mymail = urldecode($mymail);




$name = trim($name);
$number = trim($number);
$adress = trim($adress);
$email = trim($email);
$comment = trim($comment);
$set = trim($set);
$day = trim($day);
$cart = trim($cart);
$price = trim($price);
$pickedSend = trim($pickedSend);
$mymail = trim($mymail);

$mail_subject = "Замовлення з сайту milking";
$body =$temp_directorys. "Ім'я замовника:". $name . "<br/>Номер: " . $number . "<br/>Адреса: ". $adress. "<br/>Поштовий адрес: " . $email . "<br/>Коментарій: ". $comment . "<br/>Набір: " . $set ."<br/>Кількість днів: " . $day ."<br/>Товари:<br/>";
foreach ($arrayCart as &$value) {
    $body.="<p>".$value."</p>";
}

$body .= $price;
$mail_headers= "Content-Type: text/html; charset=UTF-8"; 

mail ($mymail, $mail_subject, $body, $mail_headers);


$body2="<div style='width:75%;margin:0 auto;'>	
		<div style='height:200px;background-color: rgb(2, 7, 85);width: 100%;padding-top: 50px;'>
			<div style='height: 150px;width: 150px;margin: 0 auto;background-color: #a9007f;border-radius: 100%;text-align:center;font-weight: 800;text-transform: uppercase;text-shadow: 5px 5px rgb(2, 7, 85); font-size: 25px;color:#fff;'>
				<span style='padding-top: 20px;display: block;'>Дитяча<br/>Молочна<br/>Кухня</span>
			</div>
		</div>";

$body2.="<div style='font-size:20px;color:#000;padding:25px;line-height: 30px;'>
    <span style='font-weight:800;text-align:center;display:block;color:#a9007f;'>Ваше замовлення:</span><br/>
    <span style='font-weight:800;'>Набір: </span>".$set."<br/><span style='font-weight:800;'>Кількість днів: </span>".$day;

foreach ($arrayCart as &$value) {
    $body2.="<div style='padding-left:25px;'>".$value."</div>";
}

	$body2.='<span style="font-weight:800;">Доставка - </span>'. $pickedSend . ' грн/день<br/><span style="font-weight:800;">'  .$price.'</span>
		</div>
	<div style="padding:25px;background-color:rgb(2, 7, 85);color:#fff;font-size: 18px;">Скоро з вами зв‘яжеться оператор для уточнення замовлення. У разі замовлення продукції в п`ятницю після 18:00, оператор зв’яжеться з вами у понеділок після 9:00. <br/><br/>Долучайтеся до наших груп у Viber! Діліться порадами та дізнавайтеся першими про новини. А також читайте корисну інформацію на наших сторінках в соціальних мережах Facebook та Instagram
	</div>
	<div style="font-size:12px;color:#fff;background-color:#a9007f;text-align:center;">
		<div style="font-size:14px;padding:10px;">
			<a style="color:#fff;padding:10px;" href="https://www.instagram.com/molochnaya_kuhnya_kiev/">Інстаграм </a> 
			<a style="color:#fff;padding:10px;" href="https://www.facebook.com/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B0%D1%8F-%D0%9C%D0%BE%D0%BB%D0%BE%D1%87%D0%BD%D0%B0%D1%8F-%D0%9A%D0%A3%D0%A5%D0%9D%D0%AF-332618223769094/">Фейсбук</a>
		</div>
		<div style="font-size:14px;">Вайбер групи:</div>
			<ul style="display:inline-block;text-align:left;">
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=0kRwRZO0_0YfMH5RTXwJ5-wtCwVAzTG3"> Бровари</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=RDzx0Pc600bG0v02KgUGVMtjgi9Qv2s0"> Оболонь</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=mwHz6gJewEZluT6r7KUldAQlZBswvSfl"> Мінський масив</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=0WHx3JVWuEZxpUlxZFJx9Ek9CeRD-pk0"> Буча</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=D6x1fuGny0YX_F-rnG7R6OPRtUUn-XjP"> Ірпінь</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=1_ZxZ6uq10a7MFZ6VJY6tensk13A8WCL"> Софіївська борщаговка</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=JJ31SHWi10YwHAsZOXkaKxMsXKgrm5SM"> Петроговська борщаговська</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=E2Z0jB0eSkf40_a9keaTft1ApVO1YJCZ"> ж/к Львівський</a></li>
				<li><a style="color:#fff;" href="https://invite.viber.com/?g=Xe9yC1nJzEZ0WKKMNvYODDY0Vf-gXvV8"> Дніпровський район</a></li>
			</ul>
			<ul style="display:inline-block;text-align:left;"> 
					<li><a style="color:#fff;" href="https://goo.gl/ce7ZVH"> Святошино</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/ZR9tHV"> Академгородок</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/HnKf8S"> Коцюбинське</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/nXvo1V"> Борщаговка</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/j9dcL6"> Голосеевський район</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/Z9NKFt"> Виноградар-Приорка</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/dRPv6p"> Печерський район</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/AgwdSe"> Нивки</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/HnR2rd"> Лукяновка</a></li>
			</ul>
			<ul style="display:inline-block;text-align:left;"> 
					<li><a style="color:#fff;" href="https://goo.gl/6MZfex"> Подол</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/gZQ1y9"> Дарницький район</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/j1L2wk"> Деснянський район</a></li>
					<li><a style="color:#fff;" href="https://invite.viber.com/?g=Au0vbvxb7EaKbBq0aTENvIVUGIPJLVnI"> Вишневне</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/KrYrfE"> Ворзель</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/jmcWJ2"> Вишгород</a></li>
					<li><a style="color:#fff;" href="https://invite.viber.com/?g=iluz0JU5-0YzroGD6aFrMA4n8BnO9ivB"> ж/к Чайка</a></li>
					<li><a style="color:#fff;" href="https://invite.viber.com/?g=5FszY208-0YZzohLaef9e0FNJT20qXx9"> Українка</a></li>
					<li><a style="color:#fff;" href="https://invite.viber.com/?g=X1Z0igWdTEcuNwX_5ztOsNLU-pM_RxHd"> Борисполь</a></li>
					<li><a style="color:#fff;" href="https://goo.gl/xjyqJ6"> Соломінський район</a></li>		
			</ul>	
		</div>
	</div>';


mail ($email, $mail_subject, $body2, $mail_headers);
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>امسال چه هدیه ای میگیری؟</title>
	<link rel="stylesheet" href="stylesheets/main.css">
    <script src="javascripts/jquery-1.11.2.min.js"></script>
    <script>
		$(document).ready(function() {
			$("#giftbox").click(function(){
				$("#giftbox").hide();
				$("#giftname").fadeIn(300);
			});
			
        });
    </script>
</head>

<body>
<div class="main">
<div class="des">اگر دوست داری بدونی که ولنتاین امسال چه کادویی میگیری روی جعبه کادوی زیر کلیک کن</div>

<div class="gift-container">
<div class="gift-image"><a href="#" id="giftbox"><img src="images/gifti.png"/></a></div>
<div class="gift-name" id="giftname">
<h2><?php
$Gifts = array("ماگ","حلقه طلا","ادکلن","شاخه گل","سویچ ماشین","جعبه خالی","شکلات","سوییچ","برس","لگو","گلدون","سنگ پا","گوش پاک کن","چی توز موتوری","آیفون 6","نوکیا 1100","گوشت کوب","بلیت رفت و برگشت","هدفون","شامپو ضدشوره","رژ لب","دفتر صدبرگ","دفترخاطرات","لوازم التحریر","صابون گلنار","عینک آفتابی","لباس زیر","گردنبند","کروات","چتر","کتاب","پیکسل","تی شرت","شلوار لی","دوربین عکاسی","کرم موبر","آدامس","آبنبات","لواشک","پاستیل","ساعت مچی","ساعت دیواری","کلاه","کفش","قاب عکس","عکس دو نفره","آفتابه","نخ دندان");
$YourGift = $Gifts[rand(0,count($Gifts)-1)];
echo $YourGift;
?></h2>
</div>
</div>
</div>

</body>
</html>

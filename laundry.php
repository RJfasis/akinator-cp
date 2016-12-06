<!DOCTYPE html>
<html>
<head>
<title>Laundry Recommender</title>
</head>
<body>



<?php 
if(isset($_GET["province"]) and $_GET["province"] != ''){
	echo file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["province"].',th&appid=14b4a36d352be590b73ae1892c79704e').'<br>'; 
	

	$case = 2;
	switch ($case) {
    case 1:
        $img = 'ai_01.jpg';
		$msg = 'ซักผ้ากันเถอะ อากาศดีมว๊าก ! ^o^';
        break;
	case 2:
        $img = 'ai_02.jpg';
		$msg = 'อากาศดูชื้น ๆ นะ อย่าเพิ่งซักผ้าเลย ฝนอาจจะตกนะ ! o_o';
        break;
	case 3:
        $img = 'ai_01.jpg';
		$msg = 'มืดแล้ว อย่าเพิ่งซักผ้าเลย เดี๋ยวเหม็นอับหมดนะ ! >~<';
        break;
	case 4:
        $img = 'ai_01.jpg';
		$msg = 'ฝนเพิ่งตกไม่ใช่หรอ จะมืดแล้วด้วย ไว้ซักพรุ่งนี้เถอะ';
        break;
	case 5:
        $img = 'ai_01.jpg';
		$msg = 'อากาศเย็นเนอะ ลมก็ไม่ค่อยมี ผ้าไม่น่าจะแห้งนะถ้าซักตอนนี้';
        break;
	case 6:
        $img = 'ai_01.jpg';
		$msg = 'วันนี้อากาศไม่ดี อย่าเพิ่งซักผ้าเลยนะ !';
        break;
		
	}
	
	echo $msg.'<br>';
	echo '<img src='.$img.'><br>';
	
}
?>

</body>
</html>
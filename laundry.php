<!DOCTYPE html>
<html>
<head>
	<!--font-->
	<link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="./bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="./one-page-wonder.css" rel="stylesheet" type="text/css">

	<!--jQuery-->
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

	<title>Laundry Recommender</title>
</head>
<?php
if(isset($_GET["province"]) and $_GET["province"] != ''){
	// string จาก API ของ openweathermap
	$todayWeather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET["province"].',th&appid=14b4a36d352be590b73ae1892c79704e');
	$obj = json_decode($todayWeather,true);
	//echo $todayWeather;
	// สภาพอากาศโดยรวม -- clear sky, few clouds, scattered และ other
	$weather = $obj['weather'][0]['description'];
	echo "สภาพอากาศ : ".$weather."<br />";
	if($weather != "clear sky" && $weather != "few clouds" && $weather != "scattered clouds") $weather = "other";

	//ความชื้น -- น้อยกว่า 60 และ 60ถึง100
	$humidity =  $obj['main']['humidity']>=60? "wet":"dry";
	echo "ความชื้น : ".$humidity."<br />";
	//ความเร็วลม  -- strong และ weak
	$wind = $obj['wind']['speed']>3? "strong":"weak";
	echo "ความเร็วลม : ".$wind."<br />";
	//อุณหภูมิ -- hot และ cold
	$temp = $obj['main']['temp']>80.6? "hot":"cold";
	echo "อุณหภูมิ : ".$temp."<br />";
	//เวลา -- mornig, noon, evening และ night
	$time = date("H:i",time());
	if( $time > date("H:i",strtotime('4:00')) &&  $time < date("H:i",strtotime('10:00')) ) $time = "morning";
	else if ( $time > date("H:i",strtotime('10:00')) &&  $time < date("H:i",strtotime('14:00')) ) $time = "noon";
	else if ( $time > date("H:i",strtotime('14:00')) &&  $time < date("H:i",strtotime('18:00')) ) $time = "evening";
	else $time = "night";
	echo "เวลา : ".$time."<br />";
	//เวลาอาทิตย์ตก -- early และ late
	$sunset = date("H:i",$obj['sys']['sunset']) < date("H:i",strtotime('18:00'))? "early":"late";
	echo "อาทิตย์ตกดิน : ".$sunset."<br />";

	//ตรวจตาม tree ว่าลง case ไหน
	if($time=="morning"){
		if($weather=="clear sky") $case = 1;
		else if($weather=="few clouds") $case = 1;
		else if($weather=="scattered clouds"){
			if($humidity=="dry") $case = 1;
			else if($humidity=="wet") $case = 2;
		}
		else if($weather=="other") $case = 6;
	}else if($time=="noon"){

		if($weather=="clear sky") $case = 1;
		else if($weather=="few clouds"){
			if($humidity=="dry") $case = 1;
			else if($humidity=="wet") $case = 2;
		}
		else if($weather=="scattered clouds"){
			if($humidity=="dry") $case = 1;
			else if($humidity=="wet") $case = 2;
		}
		else if($weather=="other") $case = 6;
	}else if($time=="evening"){
		if($sunset=="early") $case = 4;
		else if($sunset=="late"){
			if($humidity=="wet") $case = 2;
			else if($humidity=="dry"){
				if($temp=="hot"){
					if($weather=="clear sky") $case = 1;
					else if ($weather=="few clouds") $case = 1;
					else if ($weather=="scattered clouds") $case = 1;
					else if ($weather=="other") $case = 6;
				}
				else if($weather=="cold"){
					if($wind=="weak") $case = 5;
					else if($wind=="strong"){
						if ($weather=="clear sky") $case = 1;
						else if ($weather=="few clouds") $case = 1;
						else if ($weather=="scattered clouds") $case = 1;
						else if ($weather=="other") $case = 6;
					}
				}
			}
		}
	}else{
		$case = 3;
	}

	switch ($case) {
    case 1:
        $img = 'ai_01.jpg';
		$msg = 'ซักผ้ากันเถอะ อากาศดีมว๊าก ! ^o^';
        break;
	case 2:
        $img = 'ai_04.jpg';
		$msg = 'อากาศดูชื้น ๆ นะ อย่าเพิ่งซักผ้าเลย ฝนอาจจะตกนะ ! o_o';
        break;
	case 3:
        $img = 'ai_03.jpg';
		$msg = 'มืดแล้ว อย่าเพิ่งซักผ้าเลย เดี๋ยวเหม็นอับหมดนะ ! >~<';
        break;
	case 4:
        $img = 'ai_03.jpg';
		$msg = 'วันนี้พระอาทิตย์ตกดินเร็วนะ จะมืดแล้วด้วย ไว้ซักพรุ่งนี้เถอะ';
        break;
	case 5:
        $img = 'ai_04.jpg';
		$msg = 'อากาศเย็นเนอะ ลมก็ไม่ค่อยมี ผ้าไม่น่าจะแห้งนะถ้าซักตอนนี้';
        break;
	case 6:
        $img = 'ai_02.jpg';
		$msg = 'วันนี้อากาศไม่ดี อย่าเพิ่งซักผ้าเลยนะ !';
        break;

	}



	if(isset($_GET["score"]) and $_GET["score"] != ''){
		//เขียนcode ยิงใส่ database ตรงนี้
	}
}
?>

<body style="background-color:LightSteelBlue">

		<div class="page-header">
		  <h1 style="text-align:center; background: rgba(255,255,255,0.2);"><?php echo "$msg";?></h1>
		</div>

	<div class="row">
		<div class="center-block">
			<?php echo '<img src='.$img.' class="img-rounded img-responsive" width="500" style="margin: 0 auto;">';?>
		</div>
	</div>
	<div class="row">
		<h3 style="text-align:center; ">คุณเห็นด้วยหรือไม่ ?</h3></br>
		<div class="col-md-3">
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-success center-block" style="padding-left:100px; padding-right:100px;" id="agree">เห็นด้วย</button>
		</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-danger center-block" style="padding-left:100px; padding-right:100px;" id="disagree">ไม่เห็นด้วย</button>
		</div>
		<div class="col-md-3">
		</div>
	</div>

	<script>
		$('#disagree').on('click', function (e) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET", location.href+"?score=-1" , true);
			xmlhttp.send();
			//window.location = "/Laundry-Forecast-CP";
		})
		$('#agree').on('click', function (e) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET", location.href+"?score=1" , true);
			xmlhttp.send();
			//window.location = "/Laundry-Forecast-CP";
		})

	</script>




</body>
</html>

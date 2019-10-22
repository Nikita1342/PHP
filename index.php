<html>
	<head>
		<title>
			SAIT
		</title>
	</head>
<body>
<?php $days=array(1=>'Понеділок','Вівторок','Середа','Четвер','Пятноця','Субота','Неділя');
	asort($days);
	?>
<table border="1" width="200" height="200" cellspacing="0">
	<tr heigth="50%">
		<td width="50%" >
			<img src="photos/table.png" usemap="#panel">
			<map name="panel">
			<area href="indexl.php" shape="rect" coords="0,0,101,26"></a>
			</map>
		</td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[7]?></td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[6]?></td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[5]?></td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[4]?></td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[3]?></td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[2]?></td>
		<td width="50%" >/</td>
	</tr>
	<tr heigth="50%">
		<td width="50%" ><?php echo $days[1]?></td>
		<td width="50%" >/</td>
	</tr>
</table>
<?php
echo strtoupper ("Тwqasadadура");
$body_temp = 36.6;
echo "<dt>$body_temp";
echo "<p>Температура тела составдяет $body_temp 
градусов Целсия ";
$body_temp=97.88;
echo "($body_temp градусов Фаренгейта)</p>";
$hi = 'Привет';
$bye = "Пока";

echo $song_title = $hi.", ". $bye;

$hi.=", ".$bye;
echo "<dt> $hi";

$days=array(1=>'Понеділок','Вівторок','Середа','Четвер','Пятноця','Субота','Неділя');
 foreach($days as $value) {echo "<dt>&bull; $value ";}
echo'<dl>';
foreach($days as $key => $value)
{echo "<dt>$key<dd>$value";}
echo '</dl>';

$six = range(1,6);
foreach($six as $value) {echo "<dt> $value";}

asort($days);
echo'<dt>Сортировка по значеныю:<dd>';
foreach($days as $key => $value)
{echo ' &bull; ', $key.' '. $value;}

ksort($days);
echo'<dt>Сортировка по ключу:<dd>';
foreach($days as $key => $value)
{echo ' &bull; ', $key.' '. $value;}

arsort($days);
echo'<dt>Сортировка по значеныю:<dd>';
foreach($days as $key => $value)
{echo ' &bull; ', $key.' '. $value;}

krsort($days);
echo'<dt>Сортировка по ключу:<dd>';
foreach($days as $key => $value)
{echo"<dt>$value";}


$letters=array('А','Б','В');
$numbers=array(1,2,3); $matrix=array('Буква'=>$letters,'Число'=>$numbers);

echo "<p>Начало:{$matrix['Буква'][0]}</p>";
foreach($matrix as $array => $list)

echo'<ul>';
foreach($list as $key=>$value)
{echo"<li>$array[$key]=$value";}
echo'</ul>';

					
$filestream=fopen('index.php','r');
$data=array('PHP',1,2.3,TRUE,NULL,array(),new Directory,$filestream);

foreach($data as $type)

var_dump($type);
	echo '<br>';

fclose($filestream);
echo gettype($filestream);

define('USER',kalash);
echo"<dt>привет, ".USER;

echo"<p><dt>";
echo PHP_OS;
	echo '<dt>PHP-движок версии'.PHP_VERSION;
	echo ', запущений в '.PHP_OS. '</p>';

echo'Веб-сервер: '.$_SERVER['SERVER_SOFTWARE'].'<br>';
echo'Сценарий: '.$_SERVER['PHP_SELF'].'<br>';
echo'Имя хоста: '.$_SERVER['HTTP_HOST'].'<br>';
echo'Сценарий: '.$_SERVER['REQUEST_METHOD'];

$a=5;
$b=2;
			echo "<p><dt>a = $a";echo "<dt>b = $b";
			echo"<dt>";
$result=$a+$b; echo "сложение: $result <br>";
			$result=$a-$b; echo "вичетание: $result <br>";
			$result=$a*$b; echo "Умножение: $result <br>";
			$result=$a/$b; echo "Деление: $result <br>";
			$result=$a%$b; echo "Деление по модулю: $result <br>";
			$result=$a*$a; echo "Возведение у стэпэнь: $result <br></p>";
	#		$result=$a**$b; echo "Возведение у стэпэнь: $result <br></p>";
			
$zero=0;
$nil=0;
$one=1;
$upr='A';
$lwr='a';
			echo"0==0: ";var_dump($zero==$nil);
			echo"<br>0==1: ";var_dump($zero==$one);
			echo"<br>A==a: ";var_dump($upr==$lwr);
			echo"<br>A!=a: ";var_dump($upr==$lwr);
			echo"<br>";
			echo"<br>1>0: ";var_dump($one>$nil);
			echo"<br>1>=0: ";var_dump($zero>=$nil);
			echo"<br>1<=0: ";var_dump($one<=$nil);
			echo"<br>";
#			 echo"<br>1<=>0: ";var_dump($one<=>$nil);
#			echo"<br>1<=>1: ";var_dump($one<=>$one);
#			echo"<br>0<=>1: ";var_dump($nil<=>$one) ;
			
			$a=NULL;$b=8;$c='PHP-это весело!';
			$verb=($b==1)?'угадали':'не угадали';
			echo"Вы $verb !Вы назвали число $b.<hr>";
#			$parity=($b%2!=0)?'нечетное':'четное';
#			echo"$b-$paryti число<hr>";
#			$result=$a?? $b?? $c;echo"abc:$result <br>";
#			$result=$c?? $b?? $a;echo"cba:$result <br>";
			
			$yes=TRUE;$no=FALSE;
			
			$result=($no&&$no)?'TRUE':'FAadsdadasdsaasdSE';
			echo"no И no вернет $result<br>";
			$result=($yes&&$no)?'TRUE':'FALSE';
			echo"yes И no вернет $result<br>";
			$result=($yes&&$yes)?'TRUE':'FALSE';
			echo"yes И yes вернет $result<dt><br>";
			
			$result=($no||$no)?'TRUE':'FALSE';
			echo"no И no вернет $result<br>";
			$result=($yes||$no)?'TRUE':'FALSE';
			echo"yes И no вернет $result<br>";
			$result=($yes||$yes)?'TRUE':'FALSE';
			echo"yes И yes вернет $result<br>";
			$result=(!$yes)?'TRUE':'FALSE';
			echo"yes И yes вернет $result<br>";
			
#			$x=5;$y=10;
#			echo"X:$x,Y:$y<br>";
#			$x = $x ^ $y;
#			$Y = $x ^ $y;
#			$x = $x ^ $y;
#			echo"X:$x,Y:$y<br>";
			
			$a=$b=$c=$d=5;
			echo "++A: ".++$a."<br>–B: ".--$b."<hr>";
			echo "C++: ".$c++."[Теперь C: ".$c."]<br>";
			echo "D--: ".$d--."[Теперь C: ".$d."]<br>";
		
			for($i=1;$i<4;$i++)
			{
				echo"<dt>$i";
				for($j=1;$j<4;$j++)
				
					echo"<dd>$j";	
			}
			
?>

	<body>
</html>
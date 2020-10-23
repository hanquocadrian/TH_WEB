<?php 
	// 4.1
	function tinhTongChan(){
		$s=0;
		for($i=2;$i<=100;$i++){
			if($i%2==0){
				$s+=$i;
			}
		}
		echo "Tong chan tu 2 -> 100: $s";
		echo "<br /><hr />";
	}

	tinhTongChan();

	// 4.4
	include('function.php');
	Bcc(6,"red","yellow","green");	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab 3_4vd</title>
</head>

<body>
<?php
// 4.2
function timn(){
	$s=0;
	$i=1;
	do{
		$s+=$i;
		if($s<=1001)
			$n=$i;
		$i++;
	}while($s<=1001);
	$n+=1;
	echo "n sẽ là: $n<br/><hr />";
}
timn();
// 4.3
function kiemtranguyento($x)//Kiểm tra 1 số có nguyên tố hay không
{
	if($x<2)
		return false;
	if($x==2)
		return true;
	$i=2;
	do{
		if($x%$i==0)
			return false;
		$i++;
	}while($i<=sqrt($x));
	return true;
}

if(kiemtranguyento(12))
	echo  "là số nguyên tố <br/>";
else
	echo "không phải số nguyên tố <br/>";
	
?>

<?php 
	function xuatnsnt($n){
		$c=0;
		for ($i=1; $i < PHP_INT_MAX; $i++) { 
			if(kiemtranguyento($i)){
				echo "$i <br/>";
				$c++;
			}
			if($c==$n)
				break;
		}
	}

	xuatnsnt(4);
?>
</body>
</html>
<?php
	function BCC($n, $colorHead="green",$color1="black",$color2="white")
	{
		?>
		<table border="1">
		<tr bgcolor=<?php echo "$colorHead" ?>><td colspan="3">Bảng cửu chương <?php echo $n;?></td></tr>
		<?php
			for($i=1; $i<=10; $i++)
			{
				?>
				<tr bgcolor=<?php echo $i%2==0?"$color2":"$color1" ?>>
					<td><?php echo $n;?></td>
					<td><?php echo $i;?></td>
					<td><?php echo $n*$i;?></td>
				</tr>
				<?php
			}
			?>
			</table><hr />
		<?php	
	}
?>


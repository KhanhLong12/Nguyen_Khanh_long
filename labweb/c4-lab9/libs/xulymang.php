<?php
	function tong_day($mang)
	{
		//$n=count($mang);
//		$tong=0;
//		for($i=0;$i<$n;$i++)
//		{
//			$tong+=$mang[$i];	
//		}
		$tong = array_sum($mang); //1 hàm ngắn gọn
		return $tong;
	}
	function min_ds($mang)
	{	
		$n = count($mang);
		$min = $mang[0];
		for($i=0;$i<$n;$i++)
		{
			if($min>$mang[$i])
			{
				$min=$mang[$i];	
			}	
		}
		return $min;
	}
	function max_ds($mang)
	{
		$n=count($mang);
		$max = $mang[0];
		for($i=0;$i<$n;$i++)
		{
			if($max<$mang[$i])
			{
				$max=$mang[$i];	
			}	
		}
		return $max;	
	}
	function avg_ds($mang)
	{
		$n=count($mang);
		//$tong=0;
		//for($i=0;$i<$n;$i++)
		//{
		//	$tong += $mang[$i];	
		//}
		$tong = array_sum($mang);
		$avg = ($tong/$n);
		return $avg;
	}
	function hoanvi(&$a,&$b)
	{
		$tam=$a;
		$a=$b;
		$b=$tam;
	}
	function sort_ds_tang($mang)
	{
		$n=count($mang);
		for($i=0;$i<$n-1;$i++)
		{
			for($j=$i;$j<$n;$j++)
			{
				if($mang[$i]>$mang[$j])
				{
					hoanvi($mang[$i],$mang[$j]);
				}	
			}	
		}
		return $mang;
	}
	function daonguoc_day($mang)
	{
		//$mang = strrev($mang); //cái này không được
		$mang = array_reverse($mang,TRUE); //hàm array_reverse ok
		return $mang;
	}
?>
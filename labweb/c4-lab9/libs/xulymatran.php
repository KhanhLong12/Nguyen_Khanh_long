<?php
	function hienthi_matran($matran) //để hiển thị ma trận tổng và tích nhanh gọn
		{
			for($i=0;$i<3;$i++)
			{
				for($j=0;$j<3;$j++)
				{
					echo $matran[$i][$j];
					echo "&nbsp;&nbsp;&nbsp;";
				}
				echo "<br>";
			}	
	}
	function min_matran($mang2chieu)
	{
			//$n = count($mang2chieu);
		$min = $mang2chieu[0][0];
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				if($mang2chieu[$i][$j]<$min)
				{
					$min=$mang2chieu[$i][$j];	
				}
			}
		}
		return $min;
	}
	function max_matran($mang2chieu)
	{
		//$n = count($mang2chieu);
		$max = $mang2chieu[0][0];
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3;$j++){
				if($mang2chieu[$i][$j]>$max)
				{
					$max = $mang2chieu[$i][$j];	
				}
			}
		}
		return $max;	
	}
	function tongDuongCheoChinh($mang2chieu) //tổng các phần tử đường chéo chính
	{
		$tongchinh =0;
		for($i=0;$i<3;$i++)
		{
			$tongchinh += $mang2chieu[$i][$i];
		}
		return $tongchinh;
	}
	function tongTrenDuongCheoChinh($mang2chieu) //tổng các phần tử nằm phía trên đường chéo chính
	{
		$tongchinh =0;
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				if($i<$j)
				{
					$tongchinh += $mang2chieu[$i][$j];	
				}	
			}	
		}
		return $tongchinh;
	}
	function tongDuoiDuongCheoChinh($mang2chieu) //tổng các phần tử nằm phía dưới đường chéo chính
	{
		$tongchinh =0;
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				if($i>$j)
				{
					$tongchinh += $mang2chieu[$i][$j];	
				}	
			}	
		}
		return $tongchinh;
	}
	function tongDuongCheoPhu($mang2chieu) //tổng các phần tử đường chéo phụ
	{
		$tongphu=0;
		for($i=0;$i<3;$i++)
		{
			$tongphu += $mang2chieu[$i][3-$i-1];	
		}	
		return $tongphu;
	}
	function tongTrenDuongCheoPhu($mang2chieu) //tổng các phần tử nằm phía trên đường chéo phụ
	{
		$tongphu=0;
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3-$i-1;$j++){
				$tongphu += $mang2chieu[$i][$j];	
			}
		}	
		return $tongphu;
	}
	function tongDuoiDuongCheoPhu($mang2chieu) //tổng các phần tử nằm phía dưới đường chéo phụ
	{
		$tongphu=0;
		for($i=0;$i<3;$i++)
		{
			for($j=3-$i;$j<3;$j++){
				$tongphu += $mang2chieu[$i][$j];	
			}
		}	
		return $tongphu;
	}
	function tinhMaTranTong($matran1,$matran2)
	{
		return $matran1+$matran2;	
	}
	function tinhMaTranTich($matran1,$matran2)
	{
		$tich =0;
		for($k=0;$k<3;$k++)
		{
			$tich += $matran1*$matran2;
		}	
		return $tich;	
	}
?>
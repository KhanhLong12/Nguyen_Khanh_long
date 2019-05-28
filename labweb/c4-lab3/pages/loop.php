<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>loop</title>
</head>

<body>
	<div align="center">
	  <table width="569" height="161" border="1">
	    <tr>
	      <td width="160">
          <strong>Vẽ bằng for:</strong> <br />
          	<?php
		$ve = "*";
    	for($i=0;$i<10;$i++)
		{
			for($j=0;$j<$i;$j++)
			{
					echo $ve;				
			}
			echo "<br>";
		}	
		
	?>
          </td>
	      <td width="184">
          <strong>Vẽ bằng while:</strong> <br />
          	<?php
				$m=1;
				while($m<10)
				{
					$n=0;
					while($n<$m)
					{
						echo $ve;
						$n++;
					}
				 echo "<br>";
				 $m++;
				}
			?>
          </td>
	      <td width="203">
          	<strong>Vẽ bằng do-while:</strong> <br />
            <?php
				$q=1;
				do
				{
					$t=0;
					do
					{
						echo $ve;
						$t++;
					}	
					while($t<$q);
					echo "<br>";
					$q++;
				}
				while($q<10);
			?>
          </td>
        </tr>
  </table>
</div>
</body>
</html>
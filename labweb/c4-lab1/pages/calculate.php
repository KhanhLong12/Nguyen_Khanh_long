 <form method="POST"> 
   <span>Nhập số:</span><span><input type="number" name="number"></span>
   <input type="submit" name="dk" value="Tính">
 </form>
 <?php
        $n = isset($_POST['number'])? $_POST['number']: '';  
        $x = 1;
      if (isset($_POST['dk'])) {
        # code...
      for($i=1; $i <= $n-1; $i++)  
    {  
     $x*=($i+1);   
    } 
    $s = $n*$n*3.14; 
    $v = pow($n,3)*3/4*pi(); 
    echo "Giai thừa của $n = $x"."<br>";
    echo "Diện tích hình tròn bán kính là $n = $s"."<br>";
    echo "thể tích khối cầu bán kính bằng $n = $v"."<br>";
  }
       ?>
       <div>
         <marquee> Hello</marquee>
       </div>
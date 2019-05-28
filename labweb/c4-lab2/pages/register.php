<center>
  <?php
  if(isset($_POST['dk'])){
  ?>
  <div align="center">
      <h3>Ket qua dang ky</h3>
      <span>Ten: <?php echo isset($_POST["ten"])? $_POST["ten"]: ''; ?></span><br>
      <span>Dia chi: <?php echo isset($_POST["dc"])? $_POST["dc"]: ''; ?></span><br>
      <span>Nghe: <?php echo isset($_POST["nghe"])? $_POST["nghe"]: ''; ?></span><br>
      <span>Ghi chu: <?php echo isset($_POST["note"])? $_POST["note"]: ''; ?></span><br>
      
    </div>
    <?php 
  } else{
    ?>
  <h4 align="center">From Dang Ky</h4>
  <form method="POST" action="">
    <table>
      <tr>
        <td>Ten:</td>
        <td><input type="text" name="ten"></td>
      </tr>
      <tr>
        <td>Dia chi:</td>
        <td><input type="text" name="dc"></td>
      </tr>
      <tr>
        <td>Nghe:</td>
        <td><input type="text" name="nghe"></td>
      </tr>
      <tr>
        <td>Ghi chu:</td>
        <td>
          <textarea name="note"></textarea>
        </td>
      </tr>
      <tr>
        <td style="float: right;"><input type="reset" value="Xoa"></td>
        <td><input type="submit" name="dk" value="Dang ky"></td>
      </tr>
    </table> 
  </form>
<?php }?>
</center>
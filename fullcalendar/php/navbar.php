
  <!-- Brand and toggle get grouped for better mobile display -->
 

  <!-- Collect the nav links, forms, and other content for toggling -->

    <ul class="menu" >
      <?php if(!isset($_SESSION["user_id"])):?>
      <li><a href="./registro.php" target=”_blank”>REGISTRO</a></li>
      <li><a href="./login.php" target=”_blank”>LOGIN</a></li>
    <?php else:?>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>



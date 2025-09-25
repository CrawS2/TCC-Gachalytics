<?php
  include("../editor/basicos/head.php");
?>
</head>
<?php
include("../editor/basicos/header.php");
?>
<div style="text-align: center; position:relative; left:5%" class="welcome">
   <h1>Welcome to the Control Panel!</h1><br>
    <?php
      echo "<h2> Hello ".$_SESSION['nick']."!</h2>";
      $id = $_SESSION['id'];
    ?>
</div>
<?php
include '../editor/basicos/footer.php';
?>
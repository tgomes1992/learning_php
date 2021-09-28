




<?php

  $projetos = array('TaskList','CRUD', 'MicroAP', 'Salario' )

?>




<?php include("includes\header.php")  ?>

<h1>Projetos em Php</h1>

<div>
  <p>Página dedicada aos meus primeitos projetos, utilizando PHP.</p>
  <p>Os primeiros projetos foram os seguintes :</p>
</div>



<?php

  foreach ($projetos as $projeto){

    echo '<li><a href='. $projeto  .'/index.php>'. $projeto .'</a></li>';

  }

?>









<?php include('includes\footer.php')  ?>





 <?php include('header.php') ?>


    <body>
        <h1> <?php echo $projectName; ?></h1>

            <p> <?php echo $projectDescription ;?> </p>

            <ul>
                <?php foreach($funcionalidades as $funcionalidade){
                     echo '<li><a href='. $funcionalidade .'.php>'. $funcionalidade  .'</a></li>';
                } ;
                
                ?>
            </ul>


            
        <div>



    </body>



<?php include('footer.php') ?>




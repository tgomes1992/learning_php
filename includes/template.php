

 <?php include('header.php') ?>


    <body>
        <h1> <?php echo $pagetitle ?></h1>

        <nav>
            <li><a href='main.php'>Home</a></li>
            <li><a href='cadastro_pacientes.php'>Cadastrar Pacientes</a></li>
            <li><a href='lista_pacientes.php'>Pacientes Cadastrados</a></li>
            
        </nav>



        <div>
            <?php if($pagetitle=="Cadastro de Pacientes")
            {
                $main=include('includes/form_cadastro.php');
            }

            ?>
            
            <?php if($pagetitle=="Pacientes Cadastrados")
            {
                foreach ($main as $value) {
                    echo '<li>'. $value .'<li>';
                };
            }

            ?>

            
            
            <p><?php $main ?> </p>
            
            
        
        </div>


    </body>



<?php include('footer.php') ?>




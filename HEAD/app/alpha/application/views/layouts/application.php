<!DOCTYPE HTML>
<html>
    <head>
        <meta author="Marc Lambert Agas" />
        <meta name="keywords" content="Marc Lambert Agas, marc lambert agas, marc, lambert, agas" />
        <title><?php if(isset($title)){echo $title;} ?></title>
        <?php
            echo css_asset('base.css');
            echo css_asset('body.css');
            echo css_asset('profile.css');
        ?>
    </head>
    <body>
         <?php
            $classname = $this->router->class . ' ' . $this->router->method ;
        ?>

        <div id="wrapper" class="<?php echo $classname ?>">
            <header>
                Marc the Spark
            </header>
            <section class="body">
                <?php $this->load->view($content); ?>
            </section>

            <section id="footer">
                <?php $this->load->view('layouts/application/footer'); ?>
            </section>
        </div>
    </body>
</html>
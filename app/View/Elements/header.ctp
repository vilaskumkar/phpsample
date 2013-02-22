<!-- Header -->
<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <h1>
                        <?php
                        echo $this->Html->link("Home", array('controller' => '/'), array('class' => 'brand'));
                        ?>
                    </h1>

                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right" id="navigation">
                            <!--                            <li class="current-page">-->
                            <!--                                <a href="index.html"><i class="icon-home"></i><br />Home</a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a href="portfolio.html"></a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a href="services.html"></a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a href="about.html"></a>-->
                            <!--                            </li>-->
                            <!--                            <li>-->
                            <!--                                <a href="contact.html"></a>-->
                            <!--                            </li>-->
                            <?php
                            $portfolioClass = '';
                            $servicesClass = '';
                            $aboutClass = '';
                            $contactClass = '';
                            $homeClass='';
                            if (!isset($activeStatus)) {
                                $activeStatus = '';
                            }
                            if ($activeStatus == 'home') {
                            $homeClass = 'current-page';
                            }
                            ?>
                            <li class="<?php echo $homeClass;?>">
                                <?php echo $this->Html->link('<i class="icon-home"></i><br />Home', array('controller' => '/'), array('escape' => false)); ?>
                            </li>
                            <?php

                            if ($activeStatus == 'portfolio') {
                                $portfolioClass = 'current-page';
                            }
                            ?>
                            <li class="<?php echo $portfolioClass;?>">
                                <?php echo $this->Html->link('<i class="icon-camera"></i><br />Portfolio', array('controller' => 'htmls/portfolio'), array('escape' => false)); ?>
                            </li>
                            <?php
                            if ($activeStatus == 'services') {
                                $servicesClass = 'current-page';
                            }
                            ?>
                            <li class="<?php echo $servicesClass; ?>">
                                <?php echo $this->Html->link('<i class="icon-tasks"></i><br />Services', array('controller' => 'htmls/services'), array('escape' => false)); ?>
                            </li>
                            <?php
                            if ($activeStatus == 'about') {
                                $aboutClass = 'current-page';
                            }
                            ?>
                            <li class="<?php echo $aboutClass; ?>">
                                <?php echo $this->Html->link('<i class="icon-user"></i><br />About', array('controller' => 'htmls/about'), array('escape' => false)); ?>
                            </li>
                            <?php
                            if ($activeStatus == 'contact') {
                                $contactClass = 'current-page';
                            }
                            ?>
                            <li class="<?php echo $contactClass; ?>">
                                <?php echo $this->Html->link('<i class="icon-envelope-alt"></i><br />Contact', array('controller' => 'htmls/contact'), array('escape' => false)); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
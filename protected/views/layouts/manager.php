<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->getPageTitle(); ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->getBaseUrl(true) ?>/favicon_swift.ico">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
        <?php
        Yii::app()->clientScript->registerPackage('manager');
        ?>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo Yii::app()->baseurl; ?>/manager/images/swift_analytics.jpg" />
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="<?php echo $this->createUrl('manager/logout'); ?>" class="btn btn-flat" style="padding-bottom: 2px;">Sign out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/dashboard'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <hr style="margin: 0;">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('page/index'); ?>">
                                <i class="fa fa-globe"></i> <span>Landing Pages</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('page/archivelp'); ?>">
                                <i class="fa fa-globe"></i> <span>Landing Pages (Archive)</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('page/publisher'); ?>">
                                <i class="fa fa-globe"></i> <span>Publishers</span>
                            </a>
                        </li>
                        <hr style="margin: 0;">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/views'); ?>">
                                <i class="fa fa-bar-chart-o"></i> <span>Views</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/views', array('filter' => 'state')); ?>">
                                <i class="fa fa-bar-chart-o"></i> <span>Views by State</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/views', array('filter' => 'city')); ?>">
                                <i class="fa fa-bar-chart-o"></i> <span>Views by City</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/views', array('filter' => 'publisher')); ?>">
                                <i class="fa fa-bar-chart-o"></i> <span>Views by Publisher</span>
                            </a>
                        </li>
                        <hr style="margin: 0;">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/leads'); ?>">
                                <i class="fa fa-list-alt"></i> <span>Leads</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/leads', array('filter' => 'state')); ?>">
                                <i class="fa fa-list-alt"></i> <span>Leads by State</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/leads', array('filter' => 'city')); ?>">
                                <i class="fa fa-list-alt"></i> <span>Leads by City</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/leads', array('filter' => 'referral_code')); ?>">
                                <i class="fa fa-list-alt"></i> <span>Leads by Referrer</span>
                            </a>
                        </li>
                        <hr style="margin: 0;">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/tenstreetreport'); ?>">
                                <i class="fa fa-list-alt"></i> <span>Tenstreet</span>
                            </a>
                        </li>
                        <hr style="margin: 0;">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/missingpages'); ?>">
                                <i class="fa fa-exclamation-triangle"></i> <span>Missing Pages</span>
                            </a>
                        </li>
                        <hr style="margin: 0;">
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/rhinolabs'); ?>">
                                <i class="fa fa-archive"></i> <span>Rhinolabs</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/shorturl'); ?>">
                                <i class="fa fa-archive"></i> <span>Google URL Shortner</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('manager/analyticsshorturl'); ?>">
                                <i class="fa fa-archive"></i> <span>Google URL Analytics</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.callsource.com/home/reporting-login/" target="_blank">
                                <img src="<?php echo Yii::app()->getBaseUrl(true) ?>/manager/images/callsource.jpg" class="img-responsive" style="max-width: 190px;">
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a href="<?php //echo Yii::app()->createUrl('googlesheet/index');      ?>">
                                                        <i class="fa fa-archive"></i> <span>Google sheets</span>
                                                    </a>
                                                </li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <?php echo $content; ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


    </body>
</html>
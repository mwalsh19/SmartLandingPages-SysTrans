<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'System Transport Smartlandingpages',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.models.base.*',
        'application.helpers.*',
        'ext.YiiMailer.YiiMailer',
    ),
    'modules' => array(
// uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
    // application components
    'components' => array(
        'clientScript' => array(
            'coreScriptPosition' => CClientScript::POS_END,
            'packages' => array(
                'jquery' => array(
                    'baseUrl' => '//ajax.googleapis.com',
                    'js' => array(
                        '/ajax/libs/jquery/1.11.1/jquery.min.js',
                    )
                ),
                'manager' => array(
                    'baseUrl' => 'manager/',
                    'css' => array(
                        'css/bootstrap.min.css',
                        'css/font-awesome.min.css',
                        'css/ionicons.min.css',
                        'css/AdminLTE.css',
                        'css/manager.css'
                    ),
                    'js' => array(
                        'js/bootstrap.min.js',
                        'js/AdminLTE/app.js',
                    ),
                    'depends' => array('jquery')
                ),
                'dataTables' => array(
                    'baseUrl' => 'manager/',
                    'css' => array(
                        'css/datatables/dataTables.bootstrap.css',
                    ),
                    'js' => array(
                        'js/plugins/datatables/jquery.dataTables.js',
                        'js/plugins/datatables/dataTables.bootstrap.js',
                    ),
                    'depends' => array('manager')
                ),
                'flot' => array(
                    'baseUrl' => 'manager/',
                    'css' => array(
                    ),
                    'js' => array(
                        'js/plugins/flot/jquery.flot.min.js',
                        'js/jquery.flot.barnumbers.js'
                    ),
                    'depends' => array('manager')
                ),
                'login' => array(
                    'baseUrl' => 'manager/',
                    'css' => array(
                        'css/bootstrap.min.css',
                        'css/font-awesome.min.css',
                        'css/AdminLTE.css',
                        'css/manager.css',
                    ),
                    'js' => array(
                        'js/bootstrap.min.js',
                    ),
                    'depends' => array('jquery')
                ),
                'fonts' => array(
                    'baseUrl' => 'http://fonts.googleapis.com/',
                    'css' => array(
                        'css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
                        'css?family=Kreon:700',
                        'css?family=Open+Sans|Open+Sans+Condensed:300',
                    )
                ),
                'template' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'template/css/normalize.css',
                        'template/css/validationEngine.jquery.css',
                    ),
                    'js' => array(
                        'template/js/modernizr.js',
                        'template/js/jquery.placeholder.js',
                        'template/js/jquery.validationEngine-en.js',
                        'template/js/jquery.validationEngine.js',
                    ),
                    'depends' => array('jquery', 'fonts')
                ),
                'apply' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'bootstrap/bootstrap.2.css',
                        'apply/assets/css/swift/styles.css',
                    ),
                    'js' => array(
                        'apply/assets/js/swift/init.js',
                    ),
                    'depends' => array('template')
                ),
                'dedicated' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'bootstrap/bootstrap.2.css',
                        'dedicated/assets/css/dedicated/style.css',
                    ),
                    'depends' => array('template')
                ),
                'flatbed' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'bootstrap/bootstrap.min.3.css',
                        'flatbed/assets/css/flatbed/style.css',
                    ),
                    'depends' => array('template')
                ),
                'truckdrivers' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'truck-drivers/assets/styles.css',
                        'truck-drivers/assets/media-queries.css',
                    ),
                    'depends' => array('template')
                ),
                'truckjobs' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'bootstrap/bootstrap.2.css',
                        'truck-jobs/assets/css/swift/style.css',
                        'truck-jobs/assets/css/swift/style-2.css',
                    ),
                    'depends' => array('template')
                ),
                'recent_student' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'template/css/normalize.css',
                        'recent_student/css/main.css'
                    ),
                    'js' => array(
                        'template/js/modernizr.js',
                        'recent_student/js/jquery.validate.min.js',
                        'template/js/jquery.maskedinput.min.js',
                        'recent_student/js/main.js'
                    ),
                    'depends' => array('jquery')
                ),
                'intermodal' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'template/css/normalize.css',
                        'intermodal/css/main.css'
                    ),
                    'js' => array(
                        'template/js/modernizr.js',
                        'intermodal/js/jquery.validate.min.js',
                        'template/js/jquery.maskedinput.min.js',
                        'intermodal/js/main.js'
                    ),
                    'depends' => array('jquery')
                ),
                'dr_january' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'template/css/normalize.css',
                        'dr_lp/css/main.css'
                    ),
                    'js' => array(
                        'template/js/jquery.maskedinput.min.js',
                        'dr_lp/js/jquery.validate.min.js',
                        'dr_lp/js/main.js'
                    ),
                    'depends' => array('jquery')
                ),
                // systrans work starts here
                'systrans' => array(
                    'baseUrl' => 'vendor/',
                    'css' => array(
                        'template/css/normalize.css',
                        'systrans/css/fonts.css',
                        'systrans/css/main.css',
                    ),
                    'js' => array(
                        'template/js/modernizr.js',
                        'systrans/js/jquery.validate.min.js',
                        'template/js/jquery.maskedinput.min.js',
                        'systrans/js/main.js'
                    ),
                    'depends' => array('jquery')
                ),
            )
        ),
        'user' => array(
            'loginUrl' => array('manager/login'),
            'allowAutoLogin' => true,
            'autoRenewCookie' => true,
            'class' => 'WebUser',
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '' => 'site/index',
                'landing-pages/privacy-policy' => 'landingpages/privacypolicy',
                'landing-pages/indeed-index' => 'landingpages/indeedIndex',
                'landing-pages/indeed-index-sr' => 'landingpages/indeedIndexSr',
                'landing-pages/simplyhired-index' => 'landingpages/simplyhiredIndex',
                'landing-pages/style2' => 'landingpages/style2',
                'landing-pages/test' => 'landingpages/test',
                'manager/<action:\w+>' => 'manager/<action>',
                'googlesheet/<action:\w+>' => 'googlesheet/<action>',
                'tenstreet/<action:\w+>' => 'tenstreet/<action>',
                'page/<action:\w+>' => 'page/<action>',
                'mobilelp/<action:\w+>/<publisher:\w+>' => 'mobilelp/<action>',
                'provider/<action:\w+>' => 'provider/<action>',
                'landing-pages/<slug:.+>' => 'landingpages/index',
                'webhook/<action:\w+>' => 'webhook/<action>',
                '<slug:(.*)>' => 'landingpages/index',
            ),
        ),
//        'db' => array(
//            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/data.db',
//        ),
// uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=swiftlp',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'enableParamLogging' => false
        ),
        'widgetFactory' => array(
            'widgets' => array(
                'SAImageDisplayer' => array(
                    'baseDir' => 'uploads',
                    'originalFolderName' => 'originals',
                    'defaultImage' => 'empty.png',
                    'sizes' => array(
                        'thumb' => array('width' => 300, 'height' => 300),
                        'recent_student_files' => array('width' => 300, 'height' => 300),
                        'recent_student_background' => array('width' => 600, 'height' => 600),
                        'intermodal_files' => array('width' => 150, 'height' => 150),
                        'intermodal_background' => array('width' => 600, 'height' => 600),
                        'intermodal_region_graphic' => array('width' => 600, 'height' => 600)
                    ),
                ),
                'CSSImageDisplayer' => array(
                    'baseDir' => 'uploads',
                    'originalFolderName' => 'originals',
                    'defaultImage' => 'empty.png',
                    'sizes' => array(
                        'thumb' => array('width' => 300, 'height' => 300),
                    ),
                ),
            ),
        ),
        'errorHandler' => array(
// use 'site/error' action to display errors
//'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => '', //'error, warning', //,info, trace
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
// using Yii::app()->params['paramName']
    'params' => array(
// this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'domain' => 'http://landingpages.dev:8080',
    ),
);

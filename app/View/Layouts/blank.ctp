<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$description = __d('mcleodhill.com', 'McLeodHill.com');
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $description ?>:
        <?php  ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    //echo $this->Html->css('cake.generic');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');


    ?>
    <link rel="stylesheet" media="screen and (min-width: 481px)" type="text/css" href="/css/cake.generic.css" />
    <link rel="stylesheet" media="screen and (max-width: 480px)" type="text/css" href="/css/mobile.css" />
    <link rel="stylesheet" media="screen and (max-width: 480px)" type="text/css" href="/css/mobile_menu.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300,400italic' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script type="text/javascript" src="/js/mobile_menu.js"></script>
</head>
<body>
<div id="container">
</div>
<div id="middle">
    <div id="content">

        <div id="content-main">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>

    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>

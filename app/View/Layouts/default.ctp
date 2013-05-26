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
		<div id="header" >
			<div id="navigation">
                <table>
                    <tr>
                        <td><a href="/pages/index">HOME</a></td>
                        <td><a href="/pages/faith">FAITH</a></td>
                        <td><a href="/pages/media">MEDIA</a></td>
                        <td><a href="/pages/contact">CONTACT US</a></td>
                    </tr>
                </table>
                <div id="mobile_nav" >Menu</div>
                <div id="mobile_menu">
                    <table id="mobile_links">
                        <tr>
                            <td><a href="/pages/index">HOME</a></td>
                            <td><a href="/pages/faith">FAITH</a></td>
                            <td><a href="/pages/media">MEDIA</a></td>
                            <td><a href="/pages/contact">CONTACT US</a></td>
                        </tr>
                    </table>
                </div>
            </div>
			
			<a id="banner-link" href="/pages/index">
            <div id="banner">
                <div id="holder_1">
                    McLeod Hill
                </div>
                <div id="holder_2">
                    Assembly Of Christians
                </div>
                <div id="holder_3">171 Mcleod Hill Road</div>
                <div id="holder_4">Fredericton, NB</div>
                <div id="holder_5">E3G 9H6</div>
                <div id="holder_6">(506) 459-4896</div>
                </div>
            </div>
			<!--img id="banner" border="0" src="/img/site_banner.jpg" alt="banner" width="728" height="140"-->
			</a>
		</div>
		<div id="middle">
            <div id="content">

                    <div id="content-main">
                        <?php echo $this->Session->flash(); ?>

                        <?php echo $this->fetch('content'); ?>
                    </div>

            </div>
		</div>
		<div id="footer">
			<table>
				<tr>
					<td><a href="/songs/index">Songs</a></td>
				</tr>
			</table>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Groundswell Gear </title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="outerDiv">

    <div id="header">
        <div id="contactButton">
            <a href="mailto:contact@groundswell.com" title="contact us">Contact Us</a>
        </div>
        <div id="mainMenu">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="gear.html" class="current">Gear</a></li>
                <li><a href="lifestyle.html">Lifestyle</a></li>
                <li><a href="videos.html">Videos</a></li>
            </ul>
        </div> <!-- mainMenu -->
    </div> <!-- header -->
    <div id="midBanner">
        <img src="images/gear_banner.jpg" width="770" height="90" alt="check out our gear" />
    </div>

    <div id="content">
        <div id="mainContent">

            <div id="subNav">
                <ul id="gearSubNav">
                    <li><a href="gear/boards.htm" class="boards">Boards</a></li>
                    <li><a href="gear/swimwear.htm" class="swimwear">Swimwear</a></li>
                    <li><a href="gear/wetsuits.htm" class="wetsuits">Wetsuits</a></li>
                    <li><a href="gear/etc.htm" class="etc last">Etc.</a></li>
                </ul>
            </div>
            <h1 class="clear">Check out our Gear</h1>
            <p>Whether you're looking for the latest boards, the hottest swimwear, serious wetsuits, or anything else
            related to the surfing lifestyle, you've come to the right place. Groundswell goes out and finds the best gear
            available for your surfing needs. Everything we sell we've tested ourselves, so we know it works! </p>
            <h2>This months special:</h2>
            <img class="leftFloatImage" src="images/swell_suit.jpg" alt="swell suit" width="118" height="245" />
            <div id="gearDesc">
                <h3>Swell Suit by Grommett</h3>
                <p>Standard Neoprene stretch with a wind-resistant weave. The Swell suit was created by our own Garret Makinson.
                Available in men's and women's styles.</p>
                <p class="price">$89.99</p>
                <p>Check out more suits on our <a href="">wetsuits</a> page</p>
            </div>
        
        </div> <!-- mainContent -->
        
        <div id="sideBar">

            <h3>Top Sellers</h3>
            <p>
            Fresh off last month's killer reviews, our new Fearless board heads up our top sellers. All our gear is
            top rate, but here's what people have been flocking to:
            </p>
            <img src="images/fearless_small.jpg" width="200" height="68" alt="new board" />
            <h3>1. Fearless Board</h3>
            <p>
            Looking for a hot new board? Check out our new
            <a href="">Fearless board</a>
            from legendary shaper Carl Benson.
            </p>
            <img src="images/shirt_list.jpg" width="200" height="68" alt="blue hawaii shirt" />
            <h3>2. Blue Hawaii Shirt</h3>
            <p>
            Take you back or move you forward? Doesn't really matter which way you're moving, the Blue Hawaii Shirt
            will get you there in style.
            <a href="">Comes in Blue...</a>
            </p>
            <img src="images/towel_list.jpg" width="200" height="68" alt="towel drawing" />
            <h3>3. Groundswell Towels</h3>
            <p>
            What can we say? You guys like staying dry. We get it, which is why our terry-cloth Groundswell towels
            are our number three seller.
            <a href="">Go get 'em!</a>
            </p>

        </div> <!-- sideBar -->
        
        <p class="clear" />
    </div> <!-- content -->
    
</div> <!-- outerDiv -->

<div id="footer">
    <p> &copy; Groundswell Surf &nbsp;&nbsp;
        <a href="privacy.html">Privacy Policy</a> |
        <a href="term.html">Terms and Conditions</a>
    </p>
</div>

</body>
</html>


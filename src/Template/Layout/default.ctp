<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Welcome to Groundswell </title>
   

     <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>
<div id="outerDiv">

    <div id="header">
        <div id="contactButton">
            <a href="mailto:contact@groundswell.com" title="contact us">Contact Us</a>
        </div>
        <div id="mainMenu">


            <ul>
                <li><a href="/tasks" class="<?php if($currentpage=='index'){echo('current');}?>">Home</a></li>
                <li><a href="/tasks/gear" class="<?php if($currentpage=='gear'){echo('current');}?>">Gear</a></li>
                <li><a href="/tasks/lifestyle" class="<?php if($currentpage=='lifestyle'){echo('current');}?>">Lifestyle</a></li>
                <li><a href="/tasks/videos" class="<?php if($currentpage=='videos'){echo('current');}?>">Videos</a></li>
            </ul>

        </div> 
        <!-- mainMenu  -->
     </div>  <!-- header  -->
    <div id="midBanner">
        <img src="/img/home_banner.jpg" width="770" height="90" alt="welcome to paradise" />
    </div>

<!-- <p>i am layout one</p> -->
    <?=$this->fetch('content'); ?>
<!-- <p>I am layout 2</p> -->

<div id="footer">
    <p> &copy; Groundswell Surf &nbsp;&nbsp;
        <a href="privacy.html">Privacy Policy</a> |
        <a href="term.html">Terms and Conditions</a>
    </p>
</div>

</body>
</html>
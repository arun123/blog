<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

</head>
<body>
<div id="wrap">
  <div id="header">
    <h1 id="logo">Simple<span class="gray">Blog</span></h1>
    <h2 id="slogan">Put your site slogan here...</h2>
    <div id="searchform">
      <form method="post" class="search" action="#">
        <p>
          <input name="search_query" class="textbox" type="text" />
          <input name="search" class="button" type="submit" value="search" />
        </p>
      </form>
    </div>
  </div>

  <div id="menu">
    <ul>
      <li id="current"><a href="<?php echo url_for('@welcome', array()) ?>"><span>Home</span></a></li>
      <li><a href="#"><span>About</span></a></li>
    </ul>
  </div>
  <div id="content-wrap">
    <div id="sidebar">
      <?php if (has_slot('sidebar')): ?>
      <?php include_slot('sidebar') ?>
      <?php endif; ?>
    </div>
   <?php echo $sf_content ?>
   </div>
  <div id="footer">
    <p> &copy; 2006 <strong>Your Company</strong> &nbsp;&nbsp; Design by: <a href="http://www.styleshout.com/">styleshout</a> | Valid: <a href="http://validator.w3.org/check/referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.free-css.com/">Home</a>&nbsp;|&nbsp; <a href="http://www.free-css.com/">Sitemap</a>&nbsp;|&nbsp; <a href="http://www.free-css.com/">Home</a> </p>
  </div>
</div>
</body>
</html>

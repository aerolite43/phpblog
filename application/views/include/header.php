<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>CodeIgniter Bootstrap</title>

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>
<body>

<!--
@author Adrian Roy Antonio Baguio
@date 20/11/13
@Description adding navigation on top to reduce coding redundancy
 -->
<div class="container">
   <div class="container">

<ul class="nav nav-tabs">
  <li><a href="<?php echo base_url('index.php/home')?>">Home</a></li>
  <li> <a href="<?php echo base_url('index.php/profile') ?>">Users</a></li>
  <li><a href="<?php echo base_url('index.php/myblog') ?>">My Blog</a></li>
</ul>

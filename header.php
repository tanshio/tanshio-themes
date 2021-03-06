<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tanshio
 */

?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/yakuhanjp/1.3.1/css/yakuhanjp.min.css">
<?php wp_head(); ?>
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>

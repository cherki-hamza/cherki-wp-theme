<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php  wp_head(); ?>
    <title>cherki hamza</title>
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">cherki-dev</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">

            <!-- start main menu -->
	        <?php get_template_part('includes/section' , 'mainmenu');  ?>
            <!-- end main menu -->

            <!-- start top Right Menu -->
            <span class="navbar-text mr-2">
			   <?php get_template_part('includes/section' , 'rightmenu');  ?>
             </span>
            <!-- end top Right Menu -->

<!--            <span class="navbar-text mr-2"><i class="fal fa-code-branch mr-2"></i>Dashboard</span>-->
            <form class="form-inline my-2 my-lg-0">
                <?php get_search_form(); ?>
<!--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            </form>
        </div>
    </nav>



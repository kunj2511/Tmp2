<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<style>
    body {
        font: 14px Arial,sans-serif; 
        margin: 0px;
    }
    .header {
        padding: 10px 20px;
        
    }
    .header h1 {
        font-size: 24px;
    }
    .container {
        width: 100%;
        background: ; 
    }
    .nav, .section, .search {
        float: left; 
        padding: 20px;
        min-height: 170px;
        box-sizing: border-box;
    }
    .nav1 {            
        background-color: rgba(125,185,232,1); 
        list-style:none;
        padding: 0px;    
    }
    .nav {            
        width: 20%;
        text-align: center; 
        background-color: lightblue;                
    }
    .section {
        width: 60%;
    }
    .search{
       width: 20%; 
       background-color:  lightblue;               
    }
    .nav ul {
        list-style: none; 
        line-height: 24px;
        padding: 0px; 
    }
    .nav ul li a {
        color: white;
    }    
    
    .footer {
        background: #acb3b9;            
        text-align: center;
        padding: 5px;
    }
</style>
</head>
<body>
    <?php get_header();?>
    <div class="container">
        <div class="nav">
            <?php
                get_sidebar();
            ?>
        </div>

        <div class="section">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()): the_post(); ?>
                    <?php the_title( sprintf( '<h2 class="entry-title"> 
                        <a href="%s" rel="bookmark">', esc_url( get_permalink())),
                            '</a></h2>' );?>
                    <?php the_content();?>
                <?php endwhile; ?>

            <?php endif; ?>
                
        </div>

        <div class="search">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
    <?php get_footer();?>
</body>
</html>
<?php
/*
Post Template - Name: Estatico para posts
*/
?>

<?php 
    get_header()
?>

<div class="container-fluid conteudo">
<div class="parent">
  <div class="div1 shadow-lg p-3  bg-body" style=";margin:0px;">

  <h1><?php single_post_title(); ?></h1>   
        <?php
            if(have_posts()): the_post();
                    the_content();
            endif; 
            ?>  
  </div>
  <div class="div3" style="margin-left:50px;margin-top:50px;margin-bottom:0px;font-family: 'Bebas Neue', cursive;">

  <?php get_sidebar(); ?>      

  </div>

  <div class="div2">
  <div class="container">
  <div class="px-4 text-center" style="margin-top:100px;">
    <img src="https://i.ibb.co/j8Btd5t/imagem-perfil-blog-2.jpg" style=" border-radius: 60%; height:150px;">
    <h5>Autor</h5>
    <h4 class=" fw-bold">Johnny Almeida</h4>
</div>
  </div>
</div>
</div>

<?php 
    get_footer()
?>

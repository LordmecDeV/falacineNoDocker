<?php 
    get_header()
?>
<?php 
    get_header('jumbtrom')
?>
<div class="container-fluid">
    
        <?php 
            if(have_posts()):
                echo '<div class="row row-cols-1 row-cols-md-3 g-4" style="margin-bottom:30px;">';
                while(have_posts()): the_post();get_categories( $args = 'Cinema');
                $categories = get_categories( );
                foreach($categories as $category):
                
                echo '<div class="col">';
                echo '<div class="card shadow p-3 mb-5 bg-body rounded" >';
                printf(' <img src="%s',get_the_post_thumbnail());
                echo ' <div class="card-body">';
                printf('<h5 class="card-title">%s</h5>', get_the_title());
                printf('<p class="card-text">%s</p>', get_the_content('Continue lendo...'));
                printf(' <p class="card-text"><small class="text-muted">%s</small></p>',get_the_date());
                echo ' </div>';
                echo ' </div>';
                echo ' </div>';
                
               
                endforeach;
                endwhile;
                echo ' </div>';
            else:
                echo "<p>Ainda não temos posts</p>"; //se não tiver post criado, ira apresentar essa mensagem
            endif;  //função verifica se temos posts criados e faz uma analise de para nossa pagina dos posts criados
        ?>





                    
            </div>
        </div>
    </div>
<?php 
    get_footer()
?>
<div class="sidebar">
<h3> Categorias</h3>
<ul class="list-group list-group-flush" style="width:200px;">
    <?php 
        $categories = get_categories( );
        foreach($categories as $category):
            printf ('<li class="list-group-item rounded"><a href="%s" class="text-black" title="%s">%s</a></li>',get_category_link($category->term_id),
            sprintf ("Ver post de %s", $category->name), $category->name);
            
        endforeach;
    ?>
    </ul>

<h3 style="margin-top:50px;"> Tags</h3>
<ul class="list-group list-group-flush" style="width:200px;">
    <?php 
        $tags = get_tags( );
        foreach($tags as $tag):
            printf ('<li class="list-group-item rounded"><a href="%s" class="text-black" title="%s">%s</a></li>',get_tag_link($tag->term_id),
            sprintf ("Ver post de %s", $tag->name), $tag->name);
            
        endforeach;
    ?>
    </ul> 
    </div>
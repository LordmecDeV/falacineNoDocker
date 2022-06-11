<div class="container-fluid" style="background: linear-gradient(to right, #000000, #434343);">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
    <p class="col-md-4 mb-0 text-muted">© 2022 FalaCine</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <div class="nav-scroller  mb-2 categories_edit foor1" style="">
    <nav class="nav d-flex justify-content-between">
        <?php 
        $categories = get_categories( );
        foreach($categories as $category):
           
            printf('<a class="p-2 link-secondary  linkblack" href="%s" title="%s">%s</a>',get_category_link($category->term_id),
            sprintf ("Ver post de %s", $category->name), $category->name);
            endforeach

        ?>
    </nav>
  </footer>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
</body>
</html>
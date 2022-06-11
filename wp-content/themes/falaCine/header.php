<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>FalaCine- Blog de Filmes</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        nav{
            font-family: 'Bebas Neue', cursive;
            font-size:25px;
        }
        .linkblack:hover{
            color: black;
        }
        .jumbotrom{
            color:white;
        }
        .btn1 {
  -webkit-border-radius: 10;
  -moz-border-radius: 10;
  border-radius: 10px;
  -webkit-box-shadow: 1px 1px 3px #666666;
  -moz-box-shadow: 1px 1px 3px #666666;
  box-shadow: 1px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #e53e49;
  padding: 15px 38px 17px 38px;
  text-decoration: none;
}

.btn1:hover {
  text-decoration: none;
  color:#e53e49;
}
body{
    background-color:#f5f5f5;
}
.box{
    position: absolute;
    top: 5%;
    left: 1%;
    
    transform: translate(-3%,-50%);
}
.input {
    padding: 10px;
    width: 80px;
    height: 50px;
    background: none;
    border: 4px solid #ffffff;
    border-radius: 30px;
    box-sizing: border-box;
    font-family: Comic Sans MS;
    font-size: 26px;
    color: #e53e49;
    outline: none;
    transition: .5s;
}
.box:hover input{
    width: 350px;
    background: #ffffff;
    border-radius: 10px;
}
i{
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translate(-50%,-50%);
    font-size: 26px;
    color: #ffffff;
    transition: .2s;
}
.box:hover i{
    opacity: 0;
    z-index: -1;
}
.wrapper {
  display: inline-flex;
  list-style: none;
}

.wrapper .icon1 {
  position: relative;
  background: #ffffff;
  border-radius: 50%;
  padding: 15px;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon1:hover .tooltip {
  top: -40px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon1:hover span,
.wrapper .icon1:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #e53e49;
  color: #ffffff;
}

.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background: #e53e49;
  color: #ffffff;
}

.wrapper .youtube:hover,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip::before {
  background: #CD201F;
  color: #ffffff;
}
.parent {
display: grid;
grid-template-columns: repeat(12, 1fr);
grid-template-rows: repeat(10, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 { grid-area: 1 / 4 / 11 / 10; }
.div2 { grid-area: 1 / 1 / 6 / 4; }
.div3 { grid-area: 1 / 10 / 6 / 13; }

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"],  #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#ffffff;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: black;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#e53e49;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
@media (max-width: 600px)
{
  .sidebar
   {
    display: none;
   }
   .div2
   {
    display: none;
   }
   .div1{
     width:340px;
   }
   .imagem_logo{
     display:none;
   }
   .categories_edit{
     position:relative;
     top:50px;
   }
   .box{
    position: absolute;
    top: 5%;
    left: 4%;
    
    transform: translate(-3%,-50%); 
}
  .foor1{
    display:none;
  }
  
}
    </style>
</head>
<body>
<div class="container-fluid" style="background: linear-gradient(to right, #d31027, #ea384d);height:230px;">
  <header class="blog-header py-3 ">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <div class="box">
        <form action="<?php echo home_url('/');?>" name="search" method="get">
            <input type="search" class="input" name="s"  value="<?php echo get_search_query()?>"
            onmouseout="document.search.txt.value = ''">
        </form>
            <i class="fas fa-search"></i>
    </div>
      </div>
      <div class="col-4 text-center">
      <img src="https://i.ibb.co/vqX41kr/logofalacine2-1.png" class="imagem_logo" style="width:1 85px;height:px;">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
       
      </div>
    </div>
  </header>

  <div class="nav-scroller  mb-2 categories_edit" style="position:relative;bottom:150px;">
    <nav class="nav d-flex justify-content-between">
        <?php 
        $categories = get_categories( );
        foreach($categories as $category):
           
            printf('<a class="p-2 link-secondary text-white linkblack" href="%s" title="%s">%s</a>',get_category_link($category->term_id),
            sprintf ("Ver post de %s", $category->name), $category->name);
            endforeach

        ?>
    </nav>
  </div>
</div>
  </div>
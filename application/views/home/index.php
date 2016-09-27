<!DOCTYPE>
<html>
<head>
<title>PC shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/ebuy/html/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="/ebuy/html/js/boxOver.js"></script>
</head>

<div id="main_container">
  <div class="top_bar">
    <div class="top_search">
      <div class="search_text"><a href="#"></a></div>
      <input type="text" class="search_input" name="search" />
      <input type="image" src="/ebuy/html/images/search.gif" class="search_bt"/>
    </div>
    <div class="languages">
      <div class="lang_text">Languages:</div>
      <a href="#" class="lang"><img src="/ebuy/html/images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img src="/ebuy/html/images/de.gif" alt="" border="0" /></a> </div>
  </div>
  <div id="header">
    <div id="logo"> <a href="#"><img src="/ebuy/html/images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="/ebuy/html/images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content"> <img src="/ebuy/html/images/laptop.png" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title">Samsung GX 2004 LM</div>
            <div class="oferta_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </div>
            <a href="details.html" class="details">details</a> </div>
        </div>
        <div class="oferta_pagination"> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> </div>
      </div>
      <div class="top_divider"><img src="/ebuy/html/images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
      <?php foreach($this->menu as $menu) : ?>
         <li><a href="<?php echo $menu['URIname']; ?>" class="<?php echo $menu['image']; ?>"> <?php echo $menu['name']; ?></a></li>
        <li class="divider"></li>
       
      <?php endforeach; ?>

      
        <li class="currencies">Currencies
          <select>
            <option>US Dollar</option>
            <option>Euro</option>
          </select>
        </li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
   
    <div class="left_content">
      <div class="title_box">Categories</div>
      
      <ul class="left_menu">
        <?php foreach($this->categorieslist as $category) : ?>
        <li class="<?php if($category['id'] % 2 == 1) {echo 'odd';} else {echo 'even';} ?>"><a href="categories/index/id/<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></li>
        <?php endforeach; ?>
      </ul>

      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="/ebuy/html/images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
        <a href="#" class="join">join</a> </div>
      <div class="banner_adds"> <a href="#"><img src="/ebuy/html/images/bann2.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Latest Products</div>
      <?php foreach($this->lastProducts as $lastproducts) : ?>
        <div class="prod_box">
          <div class="top_prod_box"></div>
          <div class="center_prod_box">
            <div class="product_title"><a href="products/index/id/<?php echo $lastproducts['id']; ?>">
            <?php echo $lastproducts['name']; ?></a>
            </div>
            <div class="product_img"><a href="products/index/id/<?php echo $lastproducts['id']; ?>"><img src="<?php echo $lastproducts['image']; ?>" alt="" border="0" /></a></div>
            <div class="prod_price">
            <?php if($lastproducts['showOldPrice']=='1') : ?>
            <span class="reduce"><?php echo $lastproducts['oldprice']."$"; ?></span> 
          <?php endif; ?>
            <span class="price"><?php echo $lastproducts['price']."$"; ?></span></div>
          </div>
          <div class="bottom_prod_box"></div>
          <div class="prod_details_tab"> <a  title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="/ebuy/html/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a id="product-<?php echo $lastproducts['id']; ?>" class="prod_details" style="width:80px;float:right;">Add to Card</a> </div>
        </div>
      <?php endforeach; ?>


      <div class="center_title_bar">Recomended Products</div>
      <?php foreach($this->recomendedProducts as $lastproducts) : ?>
      <div class="prod_box">
          <div class="top_prod_box"></div>
          <div class="center_prod_box">
            <div class="product_title"><a href="products/index/id/<?php echo $lastproducts['id']; ?>">
            <?php echo $lastproducts['name']; ?></a>
            </div>
            <div class="product_img"><a href="products/index/id/<?php echo $lastproducts['id']; ?>"><img src="<?php echo $lastproducts['image']; ?>" alt="" border="0" /></a></div>
            <div class="prod_price">
            <?php if($lastproducts['showOldPrice']=='1') : ?>
            <span class="reduce"><?php echo $lastproducts['oldprice']."$"; ?></span> 
          <?php endif; ?>
            <span class="price"><?php echo $lastproducts['price']."$"; ?></span></div>
          </div>
          <div class="bottom_prod_box"></div>
          <div class="prod_details_tab"> <a  title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="/ebuy/html/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a class="prod_details" style="width:80px;float:right;">Add to Card</a> </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> 3 items <br />
          <span class="border_cart"></span> Total: <span class="price">350$</span> </div>
        <div class="cart_icon"><a href="#" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="/ebuy/html/images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <div class="title_box">What’s new</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="/ebuy/html/images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>

      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        <?php foreach ($this->manufactures as $manufacture) : ?>
          <li class="<?php if($manufacture['id'] % 2 == 1) {echo 'odd';} else {echo 'even';} ?>"><a href="manufacture/index/brand/<?php echo $manufacture['URIname']; ?>"><?php echo $manufacture['name']; ?></a></li>
        <?php endforeach; ?>
      </ul>

      <div class="banner_adds"> <a href="#"><img src="/ebuy/html/images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    
  </div>

  <div class="footer">
    <div class="left_footer">  </div>


<script type="text/javascript">
  $("#product-<?php foreach ($this->lastproducts) as $item) {
    echo $item['id'];
  } ?>").click(function() {
    $.ajax({
      url:"cart/index/add";
    });  
  });
</script>






    <div class="right_footer"> Copyright 2010


</div>

</div>
</div>
</html>
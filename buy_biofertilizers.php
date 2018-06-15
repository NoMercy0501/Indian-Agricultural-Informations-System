<html>
<head>
<script>
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
require(['jquery'],function ($) {
    jQuery(document).ready(function(){
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
                //console.log("**********"+(currentVal + 1));
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
});
</script>
<script>
require(['jquery'],function (jQuery) {
    jQuery(document).ready(function(){
jQuery("#closeM").click(function(){
    jQuery("html").removeClass("nav-before-open nav-open");
});
});
});
</script>
<script>
   require(['jquery'],function (jQuery) {
    jQuery(document).ready(function(){
        document.getElementsByClassName('section-item-title nav-sections-item-title')[1].style.display = 'none';
});
}); 

</script>
<title>IFFCO Farmer Portal</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<?php include('core_css.php') ?>
<script  type="text/javascript"  src="https://d3qkwpqagcm3a5.cloudfront.net/pub/static/version1527002242/_cache/merged/66e2b9d065a582cdf84fe0cd20f964a6.min.js"></script>
 </head>
 <body class="homepage" style = "background-color:lightgrey;">
    <?php include('header2.php')?>
	<script>$(document).ready(function(){$('#menu1').addClass('active');}) ;</script>

 <div class="viewmode">
                    <div class="modes">
            <strong class="modes-label" id="modes-label">View as</strong>
                        <strong title="List"
                class="modes-mode active mode-list"
                data-value="list">
                <span>List</span>
            </strong>
                                    <a class="modes-mode mode-grid"
               title="Grid"
               href="#"
               data-role="mode-switcher"
               data-value="grid"
               id="mode-grid"
               aria-labelledby="modes-label mode-grid">
                <span>Grid</span>
            </a>
                        </div>
                 </div>
    </div>

<div class="customPager" style="margin-left: 41%;">
         
    
        
                <div class="pages">
            <strong class="label pages-label" id="paging-label">Page</strong>
            <ul class="items pages-items" aria-labelledby="paging-label">
            
            
            
                                                <li class="item current">
                        <strong class="page">
                            <span class="label">You're currently reading page</span>
                            <span>1</span>
                        </strong>
                    </li>
                                                                <li class="item">
                        <a href="https://shop.iffcobazar.com/en/bio-fertlisers.html?p=2" class="page">
                            <span class="label">Page</span>
                            <span>2</span>
                        </a>
                    </li>
                            
            
            
                            <li class="item pages-item-next">
                                        <a class="action  next" href="https://shop.iffcobazar.com/en/bio-fertlisers.html?p=2" title="Next">
                        <span class="label">Page</span>
                        <span>Next</span>
                    </a>
                </li>
                        </ul>
        </div>
        
    
    
     </div>
        
 
    <div class="products wrapper list products-list">
                <ol class="products list items product-items">
                                        <li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/bio-fertlisers/azotobacter-1.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/I/M/IMG_9733.jpg"
             width="129"
             height="161"
             alt="Azotobacter - 1 Litre"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/bio-fertlisers/azotobacter-1.html">
                                Azotobacter - 1 Litre                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="48">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-48"                data-price-amount="170"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹170.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹200.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 15% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/48/" method="post">
                                            <input type="hidden" name="product" value="48">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC80OC8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    LIQUID BIOFERTILISER
USEFUL IN ALL CROPS EXCLUDING LEGUMES
Minimum Viable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp                                    <a href="https://shop.iffcobazar.com/en/bio-fertlisers/azotobacter-1.html" title="Azotobacter - 1 Litre"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/42/s/azotobacter-2/category/4/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/I/M/IMG_9733_758b75cb-3cd0-47bb-a2c8-70e0e2d9c97f_1.jpg"
             width="129"
             height="161"
             alt="Azotobacter - 250 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/42/s/azotobacter-2/category/4/">
                                Azotobacter - 250 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="42">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-42"                data-price-amount="50"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹50.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹60.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 17% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/42/" method="post">
                                            <input type="hidden" name="product" value="42">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC80Mi8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    LIQUID BIOFERTILISER
USEFUL IN ALL CROPS EXCLUDING LEGUMES
Minimum Viable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/42/s/azotobacter-2/category/4/" title="Azotobacter - 250 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/43/s/azotobacter-3/category/4/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/I/M/IMG_9733_3fc7da19-d027-4344-91ec-a3a560b8feb9_1.jpg"
             width="129"
             height="161"
             alt="Azotobacter - 500 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/43/s/azotobacter-3/category/4/">
                                Azotobacter - 500 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="43">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-43"                data-price-amount="90"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹90.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹110.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 18% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/43/" method="post">
                                            <input type="hidden" name="product" value="43">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC80My8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    LIQUID BIOFERTILISER
USEFUL IN ALL CROPS EXCLUDING LEGUMES
Minimum Viable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/43/s/azotobacter-3/category/4/" title="Azotobacter - 500 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/bio-fertlisers/liquid-consortia-1-litre.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/n/p/npk1500_2.png"
             width="129"
             height="161"
             alt="Liquid Consortia - 1 Litre"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/bio-fertlisers/liquid-consortia-1-litre.html">
                                Liquid Consortia - 1 Litre                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="115">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-115"                data-price-amount="170"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹170.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹200.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 15% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/115/" method="post">
                                            <input type="hidden" name="product" value="115">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC8xMTUv">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    It is a consortium of Rhizobium, Azotobector and Acetobector,PSB and KMB is prepared for Nitrogen, Phosphorus and potassium to the crops.                                    <a href="https://shop.iffcobazar.com/en/bio-fertlisers/liquid-consortia-1-litre.html" title="Liquid Consortia - 1 Litre"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/bio-fertlisers/liquid-consortia-250ml.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/i/m/img_9730.jpg"
             width="129"
             height="161"
             alt="Liquid Consortia - 250 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/bio-fertlisers/liquid-consortia-250ml.html">
                                Liquid Consortia - 250 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="114">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-114"                data-price-amount="50"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹50.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹60.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 17% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/114/" method="post">
                                            <input type="hidden" name="product" value="114">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC8xMTQv">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    Product Description: It is a consortium of Rhizobium, Azotobector and Acetobector,PSB and KMB is prepared for Nitrogen, Phosphorus and potassium to the crops.                                    <a href="https://shop.iffcobazar.com/en/bio-fertlisers/liquid-consortia-250ml.html" title="Liquid Consortia - 250 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/49/s/npk-consortium-1/category/4/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/n/p/npk1500_5f0013bb-3287-4ba4-961c-aec8f52509d9.png"
             width="129"
             height="161"
             alt="Liquid Consortia - 500 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/49/s/npk-consortium-1/category/4/">
                                Liquid Consortia - 500 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="49">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-49"                data-price-amount="90"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹90.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹110.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 18% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/49/" method="post">
                                            <input type="hidden" name="product" value="49">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC80OS8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    Product Description: It is a consortium of Rhizobium, Azotobector and Acetobector,PSB and KMB is prepared for Nitrogen, Phosphorus and potassium to the crops.                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/49/s/npk-consortium-1/category/4/" title="Liquid Consortia - 500 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/bio-fertlisers/phosphate-solubilizing-bacteria.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/i/m/img_9729.jpg"
             width="129"
             height="161"
             alt="Phosphate Solubilizing Bacteria - 1 Litre"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/bio-fertlisers/phosphate-solubilizing-bacteria.html">
                                Phosphate Solubilizing Bacteria - 1 Litre                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="62">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-62"                data-price-amount="170"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹170.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹200.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 15% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/62/" method="post">
                                            <input type="hidden" name="product" value="62">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC82Mi8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    Phosphate Solubilizing Bacteria possess the ability to bring sparingly soluble/insoluble inorganic or organic phosphate into soluble forms by secreting several organic acids. Lowering the pH by organi                                    <a href="https://shop.iffcobazar.com/en/bio-fertlisers/phosphate-solubilizing-bacteria.html" title="Phosphate Solubilizing Bacteria - 1 Litre"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/bio-fertlisers/phosphate-solubilizing-bacteria-2.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/I/M/IMG_9729_eb79e6d5-ffec-45ed-9798-6f65cb5cf196.jpg"
             width="129"
             height="161"
             alt="Phosphate Solubilizing Bacteria - 250 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/bio-fertlisers/phosphate-solubilizing-bacteria-2.html">
                                Phosphate Solubilizing Bacteria - 250 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="45">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-45"                data-price-amount="50"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹50.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹60.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 17% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/45/" method="post">
                                            <input type="hidden" name="product" value="45">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC80NS8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    LIQUID BIOFERTILISER
USEFUL IN ALL CROPS INCLUDING LEGUMES
Minimum Viable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp                                    <a href="https://shop.iffcobazar.com/en/bio-fertlisers/phosphate-solubilizing-bacteria-2.html" title="Phosphate Solubilizing Bacteria - 250 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/66/s/phosphate-solubilizing-bacteria-1/category/4/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/i/m/img_9729_e28af16a-4ec4-4c7e-8791-66c786acfd3a.jpg"
             width="129"
             height="161"
             alt="Phosphate Solubilizing Bacteria - 500 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/66/s/phosphate-solubilizing-bacteria-1/category/4/">
                                Phosphate Solubilizing Bacteria - 500 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="66">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-66"                data-price-amount="90"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹90.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹110.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 18% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/66/" method="post">
                                            <input type="hidden" name="product" value="66">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC82Ni8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    LIQUID BIOFERTILISER
USEFUL IN ALL CROPS INCLUDING LEGUMES
Minimum Viable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/66/s/phosphate-solubilizing-bacteria-1/category/4/" title="Phosphate Solubilizing Bacteria - 500 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/bio-fertlisers/potassium-solubilising-microbes-2.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/p/r/product16_3d0273c5-54be-4856-8ede-fdfa4807414f.jpg"
             width="129"
             height="161"
             alt="Potassium Mobilizing Biofertilizer - 250 ml"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/bio-fertlisers/potassium-solubilising-microbes-2.html">
                                Potassium Mobilizing Biofertilizer - 250 ml                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="57">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-57"                data-price-amount="50"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹50.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹60.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 17% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2Jpby1mZXJ0bGlzZXJzLmh0bWw,/product/57/" method="post">
                                            <input type="hidden" name="product" value="57">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwySnBieTFtWlhKMGJHbHpaWEp6TG1oMGJXdywvcHJvZHVjdC81Ny8,">
                                            <input name="form_key" type="hidden" value="7eHdan4xWdDD72A6" />                                            <!-- <button type="submit"
                                                    title=""
                                                    class="action tocart primary">
                                                <span></span>
                                            </button> -->
                                        </form>
                                        <!-- <a href="" data-post='' class="action towishlist" data-action="add-to-wishlist"><span>' .
__('Add to Wish List') . '</span></a> -->
                                                                    </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    LIQUID BIOFERTILISER
USEFUL IN ALL CROPS INCLUDING LEGUMES
Minimum Viable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp                                    <a href="https://shop.iffcobazar.com/en/bio-fertlisers/potassium-solubilising-microbes-2.html" title="Potassium Mobilizing Biofertilizer - 250 ml"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                </li>                    </ol>
    </div>
    




    
    <div class="toolbar toolbar-products" data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"list","directionDefault":"asc","orderDefault":"name","limitDefault":"10","url":"https:\/\/shop.iffcobazar.com\/en\/bio-fertlisers.html"}}'>
        
       

        <!--  -->

       <!--  -->

        <!--  --><div class="sorter">            <div class="toolbar-sorter sorter">
    <label class="sorter-label" for="sorter">Sort By</label>
      <select id="sorter" data-role="sorter" class="sorter-options" onchange="productlistasc();">
       <!--                                              <option value="name"
                                    selected="selected"
                                >
                Product Name            </option>
            
                                             <option value="price"
                                >
                Sale Price            </option>
            
                                             <option value="date"
                                >
                Date            </option>
            
                                             <option value="featured"
                                >
                Featured            </option>
            
                      -->
         <option value="featured"  >Featured</option>

        <option value="asc"  >Alphabetically, A-Z</option>
        <option value="desc"  >Alphabetically, Z-A</option>

        <option value="&product_list_dir=asc"  >Price, low to high</option>
        <option value="&product_list_dir=desc"  >Price, high to low</option>

        <option value="date&product_list_dir=asc"  >Date, low to high</option>
        <option value="date&product_list_dir=desc"  >Date, high to low</option>
      
          

         
    </select>
                <a title="Set Descending Direction" href="#" class="action sorter-action sort-asc" data-role="direction-switcher" data-value="desc">
            <span>Set Descending Direction</span>
        </a>
    </div>

  <script>

function productlistasc()
{
    
    require(['jquery'],function (jQuery) {
    jQuery(document).ready(function(){
    if(document.getElementById('sorter').value =="asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?product_list_dir=asc';
    }

    if(document.getElementById('sorter').value =="desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?product_list_dir=desc';
    }

      if(document.getElementById('sorter').value =="&product_list_dir=asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?product_list_order=price&product_list_dir=asc';
    }

     if(document.getElementById('sorter').value =="&product_list_dir=desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?product_list_order=price&product_list_dir=desc';
    }

    if(document.getElementById('sorter').value =="date&product_list_dir=asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?product_list_order=date&product_list_dir=asc';
    }

     if(document.getElementById('sorter').value =="date&product_list_dir=desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?product_list_order=date&product_list_dir=desc';
    }

    if(document.getElementById('sorter').value =="featured"){
       window.location.href = 'https://shop.iffcobazar.com/en/bio-fertlisers.html?featured=6';
    }



     });
});

}
    
</script>
        </div>
        
        <div class="viewmode">
                    <div class="modes">
            <strong class="modes-label" id="modes-label">View as</strong>
                        <strong title="List"
                class="modes-mode active mode-list"
                data-value="list">
                <span>List</span>
            </strong>
                                    <a class="modes-mode mode-grid"
               title="Grid"
               href="#"
               data-role="mode-switcher"
               data-value="grid"
               id="mode-grid"
               aria-labelledby="modes-label mode-grid">
                <span>Grid</span>
            </a>
                        </div>
                 </div>
    </div>
         <div class="customPager" style="margin-left: 41%;">
         
    
        
                <div class="pages">
            <strong class="label pages-label" id="paging-label">Page</strong>
            <ul class="items pages-items" aria-labelledby="paging-label">
            
            
            
                                                <li class="item current">
                        <strong class="page">
                            <span class="label">You're currently reading page</span>
                            <span>1</span>
                        </strong>
                    </li>
                                                                <li class="item">
                        <a href="https://shop.iffcobazar.com/en/bio-fertlisers.html?p=2" class="page">
                            <span class="label">Page</span>
                            <span>2</span>
                        </a>
                    </li>
                            
            
            
                            <li class="item pages-item-next">
                                        <a class="action  next" href="https://shop.iffcobazar.com/en/bio-fertlisers.html?p=2" title="Next">
                        <span class="label">Page</span>
                        <span>Next</span>
                    </a>
                </li>
                        </ul>
        </div>
        
    
    
     </div>
            <script type="text/x-magento-init">
        {
            "[data-role=tocart-form], .form.map.checkout": {
                "catalogAddToCart": {}
            }
        }
        </script>
		<script>
require(['jquery'],function (jQuery) {
    jQuery(document).ready(function(){
document.getElementsByClassName('customPager')[0].remove();//="none";
document.getElementsByClassName('toolbar-products')[1].remove();
});
});
</script>
</body>
</html>
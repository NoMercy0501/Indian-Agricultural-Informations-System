<!doctype html>
<html lang="en-US">
    <head >
        <script>
    var require = {
        "baseUrl": "https://d3qkwpqagcm3a5.cloudfront.net/pub/static/version1527002242/frontend/Bluethink/Theme/en_US"
    };
</script>
<?php include("core_css.php"); ?>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115764566-1"></script> 

<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=210855873010893&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
            </head>
    <body data-container="body" data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://d3qkwpqagcm3a5.cloudfront.net/pub/static/version1527002242/frontend/Bluethink/Theme/en_US/images/loader-2.gif"}}' class="page-with-filter page-products categorypath-seeds category-seeds catalog-category-view page-layout-1column">
            <script>
        require.config({
            deps: [
                'jquery',
                'mage/translate',
                'jquery/jquery-storageapi'
            ],
            callback: function ($) {
                'use strict';

                var dependencies = [],
                    versionObj;

                $.initNamespaceStorage('mage-translation-storage');
                $.initNamespaceStorage('mage-translation-file-version');
                versionObj = $.localStorage.get('mage-translation-file-version');

                if (versionObj.version !== 'cf3cee78eb5ca39cf8522d2ab762042aeab66fc4') {
                    dependencies.push(
                        'text!js-translation.json'
                    );

                }

                require.config({
                    deps: dependencies,
                    callback: function (string) {
                        if (typeof string === 'string') {
                            $.mage.translate.add(JSON.parse(string));
                            $.localStorage.set('mage-translation-storage', string);
                            $.localStorage.set(
                                'mage-translation-file-version',
                                {
                                    version: 'cf3cee78eb5ca39cf8522d2ab762042aeab66fc4'
                                }
                            );
                        } else {
                            $.mage.translate.add($.localStorage.get('mage-translation-storage'));
                        }
                    }
                });
            }
        });
    </script>

<script type="text/x-magento-init">
    {
        "*": {
            "mage/cookies": {
                "expires": null,
                "path": "/",
                "domain": ".shop.iffcobazar.com",
                "secure": false,
                "lifetime": "384000"
            }
        }
    }
</script>
    <noscript>
        <div class="message global noscript">
            <div class="content">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong>
                    <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span>
                </p>
            </div>
        </div>
    </noscript>
<div class="page-wrapper"><header class="page-header"><div class="panel wrapper cuatomPanel"><div class="panel header"><ul class="header links"><li class="item link compare" data-bind="scope: 'compareProducts'" data-role="compare-products-link">
    <a class="action compare no-display" title="Compare Products"
       data-bind="attr: {'href': compareProducts().listUrl}, css: {'no-display': !compareProducts().count}"
    >
        Compare Products        <span class="counter qty" data-bind="text: compareProducts().countCaption"></span>
    </a>
</li>
<script type="text/x-magento-init">
{"[data-role=compare-products-link]": {"Magento_Ui/js/core/app": {"components":{"compareProducts":{"component":"Magento_Catalog\/js\/view\/compare-products"}}}}}
</script>
        <li class="greet welcome" data-bind="scope: 'customer'">
            <!-- ko if: customer().fullname  -->
            <span data-bind="text: new String('Welcome, %1!').replace('%1', customer().firstname)">
            </span>
            <!-- /ko -->
            <!-- ko ifnot: customer().fullname  -->
            <span data-bind="html:''"></span>
            <!-- /ko -->
        </li>
        <script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "customer": {
                            "component": "Magento_Customer/js/view/customer"
                        }
                    }
                }
            }
        }
        </script>
    <li><a href="https://shop.iffcobazar.com/en/customer/account/" >My Account</a></li><li class="link wishlist" data-bind="scope: 'wishlist'">
    <a href="https://shop.iffcobazar.com/en/wishlist/">My Wish List        <!-- ko if: wishlist().counter -->
        <span data-bind="text: wishlist().counter" class="counter qty"></span>
        <!-- /ko -->
    </a>
</li>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                    "wishlist": {
                        "component": "Magento_Wishlist/js/view/wishlist"
                    }
                }
            }
        }
    }

</script>
<li class="authorization-link" data-label="or">
    <a href="https://shop.iffcobazar.com/en/customer/account/login/">
        Sign In    </a>
</li>
</ul></div></div><div class="headerSitemenu"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="closebtnm" id="closeM"><!--  close btn for mobile menu -->
  X</div>

<style type="text/css">
  /*.headerRight select {display: inline-block; width: 151px; margin-left: 5px; border:solid 1px #ddd; height: auto; margin-bottom: 0; },*/
  .headerRight .spanright {margin-right:150px;}
  .page-header .switcher .options, .page-footer .switcher .options {position:absolute;
    top: 9px;
    right: 300px;}
</style>

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

<script type="text/javascript">
(function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = '//api.at.getsocial.io/widget/v1/gs_async.js?id=5dae4c'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();
</script>



<script>
   require(['jquery'],function (jQuery) {
    jQuery(document).ready(function(){
        document.getElementsByClassName('section-item-title nav-sections-item-title')[1].style.display = 'none';
});
}); 

</script>
</div><div class="header content">
 <style type="text/css">
  .description iframe
{
    max-width: 595px;
    overflow: hidden!important;
}
@media screen and (max-width:768px) {
.checkdeliveryC input {
    float: left;
    width: 48%!important;
    padding: 18px 10px!important;
    background: 0;
    border: 2px solid #000000;
}
}	
.header-logo img {
	height: 45px;
}
</style>

<div class="customContainer">
<span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span>

	 <div class="logo">
       <h1 class="header-logo" itemscope="" itemtype="http://schema.org/Organization">
	   <a href="https://www.iffcobazar.in/english/" itemprop="url">        <img src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/logo/stores/1/iffco_logo.png"
             alt="IFFCO BAZAR"
                                  />
       </a>
      </h1>
    </div>

<div class="headerlogo" style="display: inline-block;
    padding: 42px 19px;
    font-size: 19px;
    color: #0e67c5;">
	INDIAN COOPERATIVE DIGITAL PLATFORM</div>

<link href="//fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" media="all">
<link href="//fonts.googleapis.com/css?family=Ubuntu:400" rel="stylesheet" type="text/css" media="all">
<link href="//fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css" media="all">

<link href="theme.scss.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 


<div class="headerRight">  
    <div class="site-header--text-links medium-down--hide">
        <div class="spanright">
                            <div class="top-right-right-login">
                    <a href="https://shop.iffcobazar.com/en/customer/account/login" id="customer_login_link">Sign In</a> 
                    <!--<span></span>-->
                    <!--<a href="" id="customer_register_link"></a>--> 
                </div>
                    </div> 


        <br class="medium-down--hide">
        <!--   <form action="" method="get" class="search-bar" role="search">
             
             
             <input type="hidden" name="type" value="product">
             <input type="search" name="q" value="" placeholder="Search all products..." aria-label="Search all products...">
             <button type="submit" class="search-barsubmit icon-fallback-text" style="margin-right: 20px;">
               <span class="icon icon-search" aria-hidden="true"></span>
               <span class="fallback-text">Search</span>
             </button>
          </form> -->



        <div class="block block-search">
           <!--  <div class="block block-title"><strong>Search</strong></div> -->
            <div class="block block-content">
                <form class="form minisearch" id="search_mini_form" action="https://shop.iffcobazar.com/en/catalogsearch/result/" method="get">
                    <div class="field search">
                        <label class="label" for="search" data-role="minisearch-label">
                            <span>Search</span>
                        </label>
                        <div class="control">
                            <input id="search"
                                   data-mage-init='{"quickSearch":{
                                   "formSelector":"#search_mini_form",
                                   "url":"https://shop.iffcobazar.com/en/search/ajax/suggest/",
                                   "destinationSelector":"#search_autocomplete"}
                                   }'
                                   type="text"
                                   name="q"
                                   value=""
                                   placeholder="Search all products..."
                                   class="input-text"
                                   maxlength="128"
                                   role="combobox"
                                   aria-haspopup="false"
                                   aria-autocomplete="both"
                                   autocomplete="off"/>
                            <div id="search_autocomplete" class="search-autocomplete"></div>
                                                    </div>
                    </div>
                    <div class="actions">
                        <!--  <button type="submit"
                                 title=""
                                 class="action search">
                             <span></span>
                         </button> -->
                        <button type="submit" class="search-barsubmit icon-fallback-text">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>

                    </div>
                </form>
            </div>
        </div>




        <a href="https://shop.iffcobazar.com/en/checkout/cart/" class="header-cart-btn cart-toggle">
            <span class="icon icon-cart"></span><i class="fa fa-shopping-cart" aria-hidden="true"></i> Bag<span class="cart-count cart-badge--desktop hidden-count">
                0 
            </span>
        </a>

    </div>
</div>

</div>


<div class="switcher language switcher-language" data-ui-id="language-switcher" id="switcher-language">
    <strong class="label switcher-label"><span>Language</span></strong>
    <div class="actions dropdown options switcher-options">
        <div class="action toggle switcher-trigger" id="switcher-language-trigger">
            <strong class="view-en">
                <span><i class="fa-angle-down pull-right desktop-view"></i> English</span>
            </strong>
        </div>
        <ul class="dropdown switcher-dropdown"
            data-mage-init='{"dropdownDialog":{
                "appendTo":"#switcher-language > .options",
                "triggerTarget":"#switcher-language-trigger",
                "closeOnMouseLeave": false,
                "triggerClass":"active",
                "parentClass":"active",
                "buttons":null}}'>
                                                                            <li class="view-mr switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"mr"}}'>
                            मराठी</a>
                    </li>
                                                                <li class="view-as switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"as"}}'>
                            অসমীয়া</a>
                    </li>
                                                                <li class="view-bn switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"bn"}}'>
                            বাংলা</a>
                    </li>
                                                                <li class="view-gu switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"gu"}}'>
                            ગુજરાતી</a>
                    </li>
                                                                <li class="view-pu switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"pu"}}'>
                            પંજાબી</a>
                    </li>
                                                                <li class="view-or switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"or"}}'>
                            ଓଡିଆ</a>
                    </li>
                                                                <li class="view-ta switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"ta"}}'>
                            தமிழ்</a>
                    </li>
                                                                <li class="view-te switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"te"}}'>
                            తెలుగు</a>
                    </li>
                                                                <li class="view-ka switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"ka"}}'>
                            ಕನ್ನಡ</a>
                    </li>
                                                                <li class="view-ml switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"ml"}}'>
                            മലയാളം</a>
                    </li>
                                                                <li class="view-hi switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"hi"}}'>
                            हिंदी</a>
                    </li>
                                    </ul>
    </div>
</div>
</div></header>    <div class="sections nav-sections">
                <div class="section-items nav-sections-items" data-mage-init='{"tabs":{"openedState":"active"}}'>
                                            <div class="section-item-title nav-sections-item-title" data-role="collapsible">
                    <a class="nav-sections-item-switch" data-toggle="switch" href="#store.menu">Menu</a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content">
<nav class="navigation" data-action="navigation">
    <ul data-mage-init='{"menu":{"responsive":true, "expanded":true, "position":{"my":"left top","at":"left bottom"}}}'>
		<li class="level0 nav-0 level-top ui-menu-item" role="presentation"><a href="https://shop.iffcobazar.com/en/" class="level-top ui-corner-all" id="ui-id-3" tabindex="-1" role="menuitem"><span>HOME</span></a></li>
        <li  class="level0 nav-1 first level-top"><a href="https://shop.iffcobazar.com/en/bio-fertlisers.html"  class="level-top" ><span>Bio Fertilisers</span></a></li><li  class="level0 nav-2 level-top"><a href="https://shop.iffcobazar.com/en/water-soluble-fertilisers.html"  class="level-top" ><span>Water Soluble Fertilisers</span></a></li><li  class="level0 nav-3 last level-top"><a href="https://shop.iffcobazar.com/en/plant-growth-promoters.html"  class="level-top" ><span>Plant Growth Promoters</span></a></li>            </ul>
	   <div class="navbar">
		  <div class="dropdown">
		    <button class="dropbtn">More 
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="https://shop.iffcobazar.com/en/insecticide.html">INSECTICIDE</a>
		      <a href="https://shop.iffcobazar.com/en/herbicide.html">HERBICIDE</a>
		      <a href="https://shop.iffcobazar.com/en/fungicide.html">FUNGICIDE</a>
		      <a href="https://shop.iffcobazar.com/en/seeds.html">SEEDS</a>
		    </div>
		  </div> 
		</div>
</nav>

<style>
.navbar {
    /*overflow: hidden;
    float: right;*/
    margin-right: 9%;
	position: absolute;
    right: 0px;
    bottom: 0px;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

/*.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}*/

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
@media only screen and (max-width: 1023px){
.navbar {position: inherit; right:auto; bottom:auto;}
}
@media only screen and (max-width: 640px){
.mobileNavBar-link { display:none !important;}
#mobileNavBar {background-color: transparent !important; z-index:1 !important;}

}
</style></div>
                                            <div class="section-item-title nav-sections-item-title" data-role="collapsible">
                    <a class="nav-sections-item-switch" data-toggle="switch" href="#store.links">Account</a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.links" data-role="content"><!-- Account links --></div>
                                            <div class="section-item-title nav-sections-item-title" data-role="collapsible">
                    <a class="nav-sections-item-switch" data-toggle="switch" href="#store.settings">Settings</a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.settings" data-role="content">
<div class="switcher language switcher-language" data-ui-id="language-switcher" id="switcher-language-nav">
    <strong class="label switcher-label"><span>Language</span></strong>
    <div class="actions dropdown options switcher-options">
        <div class="action toggle switcher-trigger" id="switcher-language-trigger-nav">
            <strong class="view-en">
                <span><i class="fa-angle-down pull-right desktop-view"></i> English</span>
            </strong>
        </div>
        <ul class="dropdown switcher-dropdown"
            data-mage-init='{"dropdownDialog":{
                "appendTo":"#switcher-language-nav > .options",
                "triggerTarget":"#switcher-language-trigger-nav",
                "closeOnMouseLeave": false,
                "triggerClass":"active",
                "parentClass":"active",
                "buttons":null}}'>
                                                                            <li class="view-mr switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"mr"}}'>
                            मराठी</a>
                    </li>
                                                                <li class="view-as switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"as"}}'>
                            অসমীয়া</a>
                    </li>
                                                                <li class="view-bn switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"bn"}}'>
                            বাংলা</a>
                    </li>
                                                                <li class="view-gu switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"gu"}}'>
                            ગુજરાતી</a>
                    </li>
                                                                <li class="view-pu switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"pu"}}'>
                            પંજાબી</a>
                    </li>
                                                                <li class="view-or switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"or"}}'>
                            ଓଡିଆ</a>
                    </li>
                                                                <li class="view-ta switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"ta"}}'>
                            தமிழ்</a>
                    </li>
                                                                <li class="view-te switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"te"}}'>
                            తెలుగు</a>
                    </li>
                                                                <li class="view-ka switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"ka"}}'>
                            ಕನ್ನಡ</a>
                    </li>
                                                                <li class="view-ml switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"ml"}}'>
                            മലയാളം</a>
                    </li>
                                                                <li class="view-hi switcher-option">
                        <a href="#" data-post='{"action":"https:\/\/shop.iffcobazar.com\/en\/stores\/store\/switch\/","data":{"uenc":"aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw,","___store":"hi"}}'>
                            हिंदी</a>
                    </li>
                                    </ul>
    </div>
</div>
</div>
                    </div>
    </div>
<div class="breadcrumbs">
    <ul class="items">
                    <li class="item home">
                            <a href="https://shop.iffcobazar.com/en/" title="Go to Home Page">
                    Home                </a>
                        </li>
                    <li class="item category10">
                            <strong>Seeds</strong>
                        </li>
            </ul>
</div>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages"><div data-placeholder="messages"></div>
<div data-bind="scope: 'messages'">
    <div data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: message.text"></div>
        </div>
    </div>
    <div data-bind="foreach: { data: messages().messages, as: 'message' }" class="messages">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <!-- <div data-bind="html: message.text"></div> -->
        </div>
    </div>
</div>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                        "messages": {
                            "component": "Magento_Theme/js/view/messages"
                        }
                    }
                }
            }
    }
</script>
</div><div class="columns"><div class="column main"><input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" /><div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
    <script>
        window.authenticationPopup = {"customerRegisterUrl":"https:\/\/shop.iffcobazar.com\/en\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/shop.iffcobazar.com\/en\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/shop.iffcobazar.com\/en\/"};
    </script>
    <!-- ko template: getTemplate() --><!-- /ko -->
    <script type="text/x-magento-init">
        {
            "#authenticationPopup": {
                "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"}}}}}            },
            "*": {
                "Magento_Ui/js/block-loader": "https://d3qkwpqagcm3a5.cloudfront.net/pub/static/version1527002242/frontend/Bluethink/Theme/en_US/images/loader-1.gif"
            }
        }
    </script>
</div>
<script type="text/x-magento-init">
{"*":{"Magento_Customer\/js\/section-config":{"sections":{"buynow\/cart\/add":["cart"],"stores\/store\/switch":"*","directory\/currency\/switch":"*","*":["messages"],"customer\/account\/logout":"*","customer\/account\/loginpost":"*","customer\/account\/createpost":"*","customer\/ajax\/login":["checkout-data","cart"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"checkout\/cart\/add":["cart"],"checkout\/cart\/delete":["cart"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items"],"checkout\/sidebar\/removeitem":["cart"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","checkout-data","last-ordered-items"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","checkout-data"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data"],"multishipping\/checkout\/overviewpost":["cart"],"authorizenet\/directpost_payment\/place":["cart","checkout-data"],"review\/product\/post":["review"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"]},"clientSideSections":["checkout-data"],"baseUrls":["https:\/\/shop.iffcobazar.com\/en\/"]}}}</script>
<script type="text/x-magento-init">
{"*":{"Magento_Customer\/js\/customer-data":{"sectionLoadUrl":"https:\/\/shop.iffcobazar.com\/en\/customer\/section\/load\/","cookieLifeTime":"384000","updateSessionUrl":"https:\/\/shop.iffcobazar.com\/en\/customer\/account\/updateSession\/"}}}</script>
<script type="text/x-magento-init">
    {
        "body": {
            "pageCache": {"url":"https:\/\/shop.iffcobazar.com\/en\/page_cache\/block\/render\/id\/10\/?product_list_dir=asc","handles":["default","catalog_category_view","catalog_category_view_type_layered","catalog_category_view_type_layered_without_children","catalog_category_view_id_10"],"originalRequest":{"route":"catalog","controller":"category","action":"view","uri":"\/en\/seeds.html?product_list_dir=asc"},"versionCookieName":"private_content_version"}        }
    }
</script>
<div class="page-title-wrapper">
    <h1 class="page-title"
         id="page-title-heading"                     aria-labelledby="page-title-heading toolbar-amount"
        >
        <span class="base" data-ui-id="page-title-wrapper" >Seeds</span>    </h1>
    </div>
        
    <div class="toolbar toolbar-products" data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"list","directionDefault":"asc","orderDefault":"name","limitDefault":"10","url":"https:\/\/shop.iffcobazar.com\/en\/seeds.html?product_list_dir=asc"}}'>
        
       

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

        <option value="asc"  selected="selected" >Alphabetically, A-Z</option>
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
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_dir=asc';
    }

    if(document.getElementById('sorter').value =="desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_dir=desc';
    }

      if(document.getElementById('sorter').value =="&product_list_dir=asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=price&product_list_dir=asc';
    }

     if(document.getElementById('sorter').value =="&product_list_dir=desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=price&product_list_dir=desc';
    }

    if(document.getElementById('sorter').value =="date&product_list_dir=asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=date&product_list_dir=asc';
    }

     if(document.getElementById('sorter').value =="date&product_list_dir=desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=date&product_list_dir=desc';
    }

    if(document.getElementById('sorter').value =="featured"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?featured=6';
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
                        <a href="https://shop.iffcobazar.com/en/seeds.html?p=2&amp;product_list_dir=asc" class="page">
                            <span class="label">Page</span>
                            <span>2</span>
                        </a>
                    </li>
                                                                <li class="item">
                        <a href="https://shop.iffcobazar.com/en/seeds.html?p=3&amp;product_list_dir=asc" class="page">
                            <span class="label">Page</span>
                            <span>3</span>
                        </a>
                    </li>
                            
            
            
                            <li class="item pages-item-next">
                                        <a class="action  next" href="https://shop.iffcobazar.com/en/seeds.html?p=2&amp;product_list_dir=asc" title="Next">
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
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/198/s/bitter-gourd-f-1-aryan-2001/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/b/i/bittergourd.png"
             width="129"
             height="161"
             alt="Bitter Gourd (Aryan) - 50 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/198/s/bitter-gourd-f-1-aryan-2001/category/10/">
                                Bitter Gourd (Aryan) - 50 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="198">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-198"                data-price-amount="285"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹285.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹423.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 33% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/198/" method="post">
                                            <input type="hidden" name="product" value="198">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMTk4Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type : Vigorous with excellent coverage
First Marketable Produce : Early variety, 50-55 days after sowing                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/198/s/bitter-gourd-f-1-aryan-2001/category/10/" title="Bitter Gourd (Aryan) - 50 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/seeds/bitter-gourd-f-1-aryan-2001.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/b/i/bittergourd.png"
             width="129"
             height="161"
             alt="Bitter Gourd (F-1 Aryan ( 2001) ) - 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/seeds/bitter-gourd-f-1-aryan-2001.html">
                                Bitter Gourd (F-1 Aryan ( 2001) ) - 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="193">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-193"                data-price-amount="95"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹95.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹134.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 29% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/193/" method="post">
                                            <input type="hidden" name="product" value="193">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMTkzLw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type : Vigorous with excellent coverage
First Marketable Produce : Early variety, 50-55 days after sowing
Fruit Shape : Spindle, medium long
Fruit Colour : Dark green
Fruit Length : 15-18 cm                                    <a href="https://shop.iffcobazar.com/en/seeds/bitter-gourd-f-1-aryan-2001.html" title="Bitter Gourd (F-1 Aryan ( 2001) ) - 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/seeds/bottle-gourd-f-1-vishwas.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/b/o/bottle_gourdf-1_vishwas.png"
             width="129"
             height="161"
             alt="Bottel Gourd (Vishwas) - 50 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/seeds/bottle-gourd-f-1-vishwas.html">
                                Bottel Gourd (Vishwas) - 50 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="194">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-194"                data-price-amount="170"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹170.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹234.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 27% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/194/" method="post">
                                            <input type="hidden" name="product" value="194">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMTk0Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type : Vigorous with excellent coverage
First Marketable Produce : 50-55 days after sowing
Fruit Shape : Cylindrical Short
Fruit Colour : Shiny green
Fruit Length : 35-40 cm.
Fruit Girth :                                     <a href="https://shop.iffcobazar.com/en/seeds/bottle-gourd-f-1-vishwas.html" title="Bottel Gourd (Vishwas) - 50 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/seeds/bottle-gourd-f-1-harnish-4001.html" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/b/o/bottlegourd_1.png"
             width="129"
             height="161"
             alt="Bottle Gourd (F-1 Harnish ( 4001)) - 50 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/seeds/bottle-gourd-f-1-harnish-4001.html">
                                Bottle Gourd (F-1 Harnish ( 4001)) - 50 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="192">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-192"                data-price-amount="175"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹175.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹252.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 31% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/192/" method="post">
                                            <input type="hidden" name="product" value="192">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMTkyLw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type : Vigorous with excellent coverage
First Marketable Produce : 50-60 days after sowing
Fruit Shape : Cylindrical long
Fruit Colour : Shiny green
Fruit Length : 30-35 cm.
Fruit Girth : 7                                    <a href="https://shop.iffcobazar.com/en/seeds/bottle-gourd-f-1-harnish-4001.html" title="Bottle Gourd (F-1 Harnish ( 4001)) - 50 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/215/s/cauliflower-meghna/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/m/e/meghna_pack_front.jpg"
             width="129"
             height="161"
             alt="Cauliflower (Meghna) 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/215/s/cauliflower-meghna/category/10/">
                                Cauliflower (Meghna) 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="215">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-215"                data-price-amount="360"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹360.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹580.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 38% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                        <div class="stock unavailable"><span>Out of stock</span></div>
                                                                                                            </div>
                                <div data-role="add-to-links" class="actions-secondary">
                                                                    </div>
                            </div>
                                                            <div class="product description product-item-description">
                                    Plant Type: Plant is bushy spreading.
First Marketable Produce: 45-48 days after sowing.
Fruit Shape: Dome.
Fruit Colour: Blue Green.
Average Fruit Weight: 0.500-0.800 Kg.
Special Characters: Goo                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/215/s/cauliflower-meghna/category/10/" title="Cauliflower (Meghna) 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/205/s/cucumber-praise/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/p/r/praise_pack_front.jpg"
             width="129"
             height="161"
             alt="Cucumber (Praise) 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/205/s/cucumber-praise/category/10/">
                                Cucumber (Praise) 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="205">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-205"                data-price-amount="140"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹140.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹330.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 58% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/205/" method="post">
                                            <input type="hidden" name="product" value="205">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMjA1Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type: Mid early , Disease tolerant And Plant vigorous.
First Marketable Produce: 34-40 days after sowing.
Fruit Shape: .Straight Fruit.
Fruit Colour: Light Green.
Fruit Length: 33-37 cm
Fru                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/205/s/cucumber-praise/category/10/" title="Cucumber (Praise) 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/204/s/cucumber-sheetal/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/s/h/sheetal_pack_front.jpg"
             width="129"
             height="161"
             alt="Cucumber (Sheetal) 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/204/s/cucumber-sheetal/category/10/">
                                Cucumber (Sheetal) 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="204">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-204"                data-price-amount="145"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹145.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹288.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 50% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/204/" method="post">
                                            <input type="hidden" name="product" value="204">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMjA0Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type: Strong Plant with dense foliage.
First Marketable Produce: 38-40 days after sowing.
Fruit Colour: Light Green.
Fruit Length: 20-22 cm
Fruit Girth: 4-5 cm.
Average Fruit Weight: 225-30                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/204/s/cucumber-sheetal/category/10/" title="Cucumber (Sheetal) 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/206/s/hot-pepper-agnishikha/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/a/g/agnishikha_pack_front.jpg"
             width="129"
             height="161"
             alt="Hot Pepper (Agnishikha) 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/206/s/hot-pepper-agnishikha/category/10/">
                                Hot Pepper (Agnishikha) 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="206">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-206"                data-price-amount="350"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹350.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹522.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 33% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/206/" method="post">
                                            <input type="hidden" name="product" value="206">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMjA2Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type: Erect spreading.
First Marketable Produce: 85-90 days after sowing.
Height of Plant: 90-100cm.
Fruit Colour: Parrot Green. 
Fruit Length: 14-16 cm.
Fruit Girth: 1.1-1.2 cm.
Fruit Ski                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/206/s/hot-pepper-agnishikha/category/10/" title="Hot Pepper (Agnishikha) 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/207/s/hot-pepper-jupiter/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/j/u/jupiter_pack_front.jpg"
             width="129"
             height="161"
             alt="Hot Pepper (Jupiter) 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/207/s/hot-pepper-jupiter/category/10/">
                                Hot Pepper (Jupiter) 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="207">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-207"                data-price-amount="350"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹350.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹522.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 33% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/207/" method="post">
                                            <input type="hidden" name="product" value="207">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMjA3Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type: Erect and spreading plant with more number of branches. Fruits resembles like OP Jwala with high heat set. 
Height of Plant: 95-105cm.
Fruit Colour: Attractive pale green with slight wri                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/207/s/hot-pepper-jupiter/category/10/" title="Hot Pepper (Jupiter) 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                                            </li><li class="item product product-item">                <div class="product-item-info" data-container="product-grid">
                                                            <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/208/s/hot-pepper-kiran/category/10/" class="product photo product-item-photo" tabindex="-1">
                        
<span class="product-image-container"
      style="width:129px;">
    <span class="product-image-wrapper"
          style="padding-bottom: 124.80620155039%;">
        <img class="product-image-photo"
                          src="https://d3qkwpqagcm3a5.cloudfront.net/pub/media/catalog/product/cache/small_image/129x161/beff4985b56e3afdbeabfc89641a4582/k/i/kiran5748_1.jpg"
             width="129"
             height="161"
             alt="Hot Pepper (Kiran) 10 Gram"/></span>
</span>
                    </a>
                    <div class="product details product-item-details listingpageprice">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link"
                               href="https://shop.iffcobazar.com/en/catalog/product/view/id/208/s/hot-pepper-kiran/category/10/">
                                Hot Pepper (Kiran) 10 Gram                            </a>
                        </strong>
                                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="208">
    

<span class="price-container price-final_price tax weee"
        >
        <span  id="product-price-208"                data-price-amount="420"
        data-price-type="finalPrice"
        class="price-wrapper "
        >
        <span class="price">₹420.00</span>    </span>
        </span>

</div>													<div style="">
							<span class="old-price">
							<span class="price-container price-final_price tax weee"> 
							<span id="old-price-42" data-price-amount="80" data-price-type="oldPrice" class="price-wrapper ">
							 <span class="price">₹515.00</span> 
							 </span> 
							 </span> 
							 </span>
							<span style="margin-left:2%; color:green;"><b> 18% Off</b></span>
							</div>

							                        
                        <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://shop.iffcobazar.com/en/checkout/cart/add/uenc/aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL3NlZWRzLmh0bWw_cHJvZHVjdF9saXN0X2Rpcj1hc2M,/product/208/" method="post">
                                            <input type="hidden" name="product" value="208">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9zaG9wLmlmZmNvYmF6YXIuY29tL2VuL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTl6YUc5d0xtbG1abU52WW1GNllYSXVZMjl0TDJWdUwzTmxaV1J6TG1oMGJXd19jSEp2WkhWamRGOXNhWE4wWDJScGNqMWhjMk0sL3Byb2R1Y3QvMjA4Lw,,">
                                            <input name="form_key" type="hidden" value="SkJW52yXrrvt0nrm" />                                            <!-- <button type="submit"
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
                                    Plant Type: &nbsp;Erect and spreading plant with more number of branches .&nbsp; Very good bearing with longer harvest . 
First Marketable Produce:
Height of Plant: 100-120cm.
Fruit Colour: Green w                                    <a href="https://shop.iffcobazar.com/en/catalog/product/view/id/208/s/hot-pepper-kiran/category/10/" title="Hot Pepper (Kiran) 10 Gram"
                                       class="action more">Learn More</a>
                                </div>
                                                    </div>
                    </div>
                </div>
                </li>                    </ol>
    </div>
    




    
    <div class="toolbar toolbar-products" data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"list","directionDefault":"asc","orderDefault":"name","limitDefault":"10","url":"https:\/\/shop.iffcobazar.com\/en\/seeds.html?product_list_dir=asc"}}'>
        
       

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

        <option value="asc"  selected="selected" >Alphabetically, A-Z</option>
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
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_dir=asc';
    }

    if(document.getElementById('sorter').value =="desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_dir=desc';
    }

      if(document.getElementById('sorter').value =="&product_list_dir=asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=price&product_list_dir=asc';
    }

     if(document.getElementById('sorter').value =="&product_list_dir=desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=price&product_list_dir=desc';
    }

    if(document.getElementById('sorter').value =="date&product_list_dir=asc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=date&product_list_dir=asc';
    }

     if(document.getElementById('sorter').value =="date&product_list_dir=desc"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?product_list_order=date&product_list_dir=desc';
    }

    if(document.getElementById('sorter').value =="featured"){
       window.location.href = 'https://shop.iffcobazar.com/en/seeds.html?featured=6';
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
                        <a href="https://shop.iffcobazar.com/en/seeds.html?p=2&amp;product_list_dir=asc" class="page">
                            <span class="label">Page</span>
                            <span>2</span>
                        </a>
                    </li>
                                                                <li class="item">
                        <a href="https://shop.iffcobazar.com/en/seeds.html?p=3&amp;product_list_dir=asc" class="page">
                            <span class="label">Page</span>
                            <span>3</span>
                        </a>
                    </li>
                            
            
            
                            <li class="item pages-item-next">
                                        <a class="action  next" href="https://shop.iffcobazar.com/en/seeds.html?p=2&amp;product_list_dir=asc" title="Next">
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
</script><script type="text/x-magento-init">
    {
        "body": {
            "requireCookie": {"noCookieUrl":"https:\/\/shop.iffcobazar.com\/en\/cookie\/index\/noCookies\/","triggers":{"compareProductLink":".action.tocompare"}}        }
    }
</script>
</div></div></main><footer class="page-footer"><div id="shopify-section-footer" class="shopify-section footer-section">
<footer class="site-footer smalltext-center">
 <div class="wrapper">
<div class="grid">
<div class="grid-item smallone-whole one-quarter">
<h3>Products</h3>
<ul>
<li><a href="https://shop.iffcobazar.com/en/catalogsearch/advanced/">Search</a></li>
<li><a href="https://shop.iffcobazar.com/en/plant-growth-promoters.html/">Plant Growth Promoters</a></li>
<li><a href="https://shop.iffcobazar.com/en/more/agro-chemicals.html/">Agro Chemicals</a></li>
<li><a href="https://www.iffcotokio.co.in">General Insurance</a></li>
<li><a href="http://www.iffcokisan.com">Green Sim</a></li>
</ul>
</div>
<div class="grid-item small--one-whole one-quarter">
<h3>Customer Service</h3>
<ul>
<li><a href="https://www.iffcobazar.in/news">News</a></li>
<li><a href="http://drusawasthi.com">Blogs</a></li>
<!--li><a href="https://shop.iffcobazar.com/en/collections/handicrafts/">New Products</a></li-->
</ul>
</div>
<div class="grid-item small--one-whole one-quarter"></div>
<div class="grid-item small--one-whole one-quarter">
<h3>Newsletter</h3>
<p><div class="block newsletter">
    <div class="title"><strong>Newsletter</strong></div>
    <div class="content">
        <form class="form subscribe"
            novalidate
            action="https://shop.iffcobazar.com/en/newsletter/subscriber/new/"
            method="post"
            data-mage-init='{"validation": {"errorClass": "mage-error"}}'
            id="newsletter-validate-detail">
            <div class="field newsletter">
                <label class="label" for="newsletter"><span>Sign Up for Our Newsletter:</span></label>
                <div class="control">
                    <input name="email" type="email" id="newsletter"
                                placeholder="Email Address"
                                data-validate="{required:true, 'validate-email':true}"/>
                </div>
            </div>
            <div class="actions">
                <button class="action subscribe primary" title="SIGN UP" type="submit">
                    <span>SIGN UP</span>
                </button>
            </div>
        </form>
    </div>
</div>
</p>
</div>
</div>
</div>
<hr class="hr--small" />
<div class="grid">
<div class="grid-itemone-whole text-center"></div>
</div>
<hr class="hr--small" />
<div class="grid copyrightCount">
<div class="grid-item large--two-fifths">
<ul class="legal-links inline-list">
<li>&copy; 2017 <a title="" href="/">IFFCO BAZAR</a></li>
<li>Developed by Locovida</li>
</ul>
</div>
<!-- <div class="grid-item large--three-fifths large--text-right">
  <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
  <i class="fa fa-cc-visa" aria-hidden="true"></i>

</div> -->
</div>
 </footer>
 </div>
<!-- 
  <div id="shopify-section-footer" class="shopify-section footer-section">

<footer class="site-footer smalltext-center" role="contentinfo">
  <div class="wrapper">

    <div class="grid">

    

      


    <div class="grid-item smallone-whole one-quarter">
      
        <h3>Products</h3>
      

      
        <ul>
          
            <li><a href="/search">Search</a></li>
          
            <li><a href="/collections/plant-growth-promoters">Plant Growth Promoters</a></li>
          
            <li><a href="/collections/agro-chemicals-1">Agro Chemicals</a></li>
          
            <li><a href="https://www.iffcotokio.co.in">General Insurance</a></li>
          
            <li><a href="http://www.iffcokisan.com">Green Sim</a></li>
          
        </ul>

        
      </div>
    

      


    <div class="grid-item small--one-whole one-quarter">
      
        <h3>Customer Service</h3>
      

      
        <ul>
          
            <li><a href="https://www.iffcobazar.in/news">News</a></li>
          
            <li><a href="http://drusawasthi.com">Blogs</a></li>
          
            <li><a href="/collections/handicrafts">New Products</a></li>
          
        </ul>

        
      </div>
    

      


    <div class="grid-item small--one-whole one-quarter">
      
        <h3>My account</h3>
      

      
        <ul>
          
            <li><a href="/">My account</a></li>
          
            <li><a href="/">Orders</a></li>
          
            <li><a href="/">Addresses</a></li>
          
            <li><a href="/">Wishlist</a></li>
          
            <li><a href="/">Apply for Vendor account</a></li>
          
        </ul>

        
      </div>-->
    

      


   <!--  <div class="grid-item small--one-whole one-quarter">
      
        <h3>Newsletter</h3>
      

      
          <div class="form-vertical">
    <form method="post" action="" id="contact_form" class="contact-form" accept-charset="UTF-8"><input type="hidden" value="customer" name="form_type"><input type="hidden" name="utf8" value="✓">
      
      
        <input type="hidden" name="contact[tags]" value="newsletter">
        <div class="input-group">
          <label for="Email" class="visually-hidden">E-mail</label>
          <input type="email" value="" placeholder="Email Address" name="contact[email]" id="Email" class="input-group-field" aria-label="Email Address" autocorrect="off" autocapitalize="off">
          <span class="input-group-btn">
            <button type="submit" class="btn-secondary btn--small" name="commit" id="subscribe">Sign Up</button>
          </span>
        </div>  
      
    </form>
  </div>
        
      </div>
    

  </div>

  
  <hr class="hr--small">
  

    <div class="grid">
    
      
      <div class="grid-itemone-whole text-center">
          <ul class="inline-list social-icons">
             
             
             
             
             
             
             
             
             
           </ul>
        </div>
      
      </div>
      <hr class="hr--small">
      <div class="grid">
      <div class="grid-item large--two-fifths">
          <ul class="legal-links inline-list">
              <li>
                © 2017 <a href="/" title="">IFFCO BAZAR</a>
              </li>
              <li>
               Developed by Locovida
              </li>
          </ul>
      </div>

      
        <div class="grid-item large--three-fifths large--text-right">
          
          <ul class="inline-list payment-icons">
            
              
            
              
                <li>
                  <span class="icon-fallback-text">
                    <span class="icon icon-master" aria-hidden="true"></span>
                    <span class="fallback-text">master</span>
                  </span>
                </li>
              
            
              
                <li>
                  <span class="icon-fallback-text">
                    <span class="icon icon-visa" aria-hidden="true"></span>
                    <span class="fallback-text">visa</span>
                  </span>
                </li>
              
            
          </ul>
        </div>
      

    </div>

  </div>

</footer>


</div> 

</body>
 --></footer></div>
	<?php include("core_scripts.php"); ?>
 </body>
</html>

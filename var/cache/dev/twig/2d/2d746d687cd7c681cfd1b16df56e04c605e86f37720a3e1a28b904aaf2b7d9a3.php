<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* root/index.html.twig */
class __TwigTemplate_ecd57233e6d3986ef8afe3b4250f2e81583bd67fc079206533b0ffb6c2b6e043 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Karl - Fashion Ecommerce Template | Home</title>

    <!-- Favicon  -->
    <link rel=\"icon\" href=\"img/core-img/favicon.ico\">

    <!-- Core Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/css/core-style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/style.css"), "html", null, true);
        echo "\">

    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/css/responsive.css"), "html", null, true);
        echo "\">
</head>

<body>
<div class=\"catagories-side-menu\">
    <!-- Close Icon -->
    <div id=\"sideMenuClose\">
        <i class=\"ti-close\"></i>
    </div>
    <!--  Side Nav  -->
    <div class=\"nav-side-menu\">
        <div class=\"menu-list\">
            <h6>Categories</h6>
            <ul id=\"menu-content\" class=\"menu-content collapse out\">
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#women\" class=\"collapsed active\">
                    <a href=\"#\">Woman wear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"women\">
                        <li><a href=\"#\">Midi Dresses</a></li>
                        <li><a href=\"#\">Maxi Dresses</a></li>
                        <li><a href=\"#\">Prom Dresses</a></li>
                        <li><a href=\"#\">Little Black Dresses</a></li>
                        <li><a href=\"#\">Mini Dresses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#man\" class=\"collapsed\">
                    <a href=\"#\">Man Wear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"man\">
                        <li><a href=\"#\">Man Dresses</a></li>
                        <li><a href=\"#\">Man Black Dresses</a></li>
                        <li><a href=\"#\">Man Mini Dresses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#kids\" class=\"collapsed\">
                    <a href=\"#\">Children <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"kids\">
                        <li><a href=\"#\">Children Dresses</a></li>
                        <li><a href=\"#\">Mini Dresses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#bags\" class=\"collapsed\">
                    <a href=\"#\">Bags &amp; Purses <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"bags\">
                        <li><a href=\"#\">Bags</a></li>
                        <li><a href=\"#\">Purses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#eyewear\" class=\"collapsed\">
                    <a href=\"#\">Eyewear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"eyewear\">
                        <li><a href=\"#\">Eyewear Style 1</a></li>
                        <li><a href=\"#\">Eyewear Style 2</a></li>
                        <li><a href=\"#\">Eyewear Style 3</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#footwear\" class=\"collapsed\">
                    <a href=\"#\">Footwear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"footwear\">
                        <li><a href=\"#\">Footwear 1</a></li>
                        <li><a href=\"#\">Footwear 2</a></li>
                        <li><a href=\"#\">Footwear 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id=\"wrapper\">

    <!-- ****** Header Area Start ****** -->
    <header class=\"header_area\">
        <!-- Top Header Area Start -->
        <div class=\"top_header_area\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-end\">

                    <div class=\"col-12 col-lg-7\">
                        <div class=\"top_single_area d-flex align-items-center\">
                            <!-- Logo Area -->
                            <div class=\"top_logo\">
                                <a href=\"#\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/core-img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </div>
                            <!-- Cart & Menu Area -->
                            <div class=\"header-cart-menu d-flex align-items-center ml-auto\">
                                <!-- Cart Area -->
                                <div class=\"cart\">
                                    <a href=\"/basket\" id=\"header-cart-btn\"><span class=\"cart_quantity\">0</span> <i class=\"ti-bag\"></i> Your Bag \$20</a>
                                    <!-- Cart List Area Start -->
                                    <ul class=\"cart-list\">
                                        <li>
                                            <a href=\"#\" class=\"image\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-10.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\"></a>
                                            <div class=\"cart-item-desc\">
                                                <h6><a href=\"#\">Women's Fashion</a></h6>
                                                <p>1x - <span class=\"price\">\$10</span></p>
                                            </div>
                                            <span class=\"dropdown-product-remove\"><i class=\"icon-cross\"></i></span>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"image\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-11.jpg"), "html", null, true);
        echo "\" class=\"cart-thumb\" alt=\"\"></a>
                                            <div class=\"cart-item-desc\">
                                                <h6><a href=\"#\">Women's Fashion</a></h6>
                                                <p>1x - <span class=\"price\">\$10</span></p>
                                            </div>
                                            <span class=\"dropdown-product-remove\"><i class=\"icon-cross\"></i></span>
                                        </li>
                                        <li class=\"total\">
                                            <span class=\"pull-right\">Total: \$20.00</span>
                                            <a href=\"/basket\" class=\"btn btn-sm btn-cart\">Cart</a>
                                            <a href=\"/basket\" class=\"btn btn-sm btn-checkout\">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"header-right-side-menu ml-15\">
                                    <a href=\"#\" id=\"sideMenuBtn\"><i class=\"ti-menu\" aria-hidden=\"true\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Top Header Area End -->
        <div class=\"main_header_area\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-12 d-md-flex justify-content-between\">
                        <!-- Header Social Area -->
                        <div class=\"header-social-area\">
                            <a href=\"#\"><span class=\"karl-level\">Share</span> <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                        <!-- Menu Area -->
                        <div class=\"main-menu-area\">
                            <nav class=\"navbar navbar-expand-lg align-items-start\">

                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#karl-navbar\" aria-controls=\"karl-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"><i class=\"ti-menu\"></i></span></button>

                                <div class=\"collapse navbar-collapse align-items-start collapse\" id=\"karl-navbar\">
                                    <ul class=\"navbar-nav animated\" id=\"nav\">
                                        <li class=\"nav-item active\"><a class=\"nav-link\" href=\"index.html\">Home</a></li>
                                        <li class=\"nav-item active\"><a class=\"nav-link\" href=\"/parfumeriya-dlja-zhenshhin\">Парфюмерия для женщин</a></li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"karlDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"karlDropdown\">
                                                <a class=\"dropdown-item\" href=\"index.html\">Home</a>
                                                <a class=\"dropdown-item\" href=\"shop.html\">Shop</a>
                                                <a class=\"dropdown-item\" href=\"product-details.html\">Product Details</a>
                                                <a class=\"dropdown-item\" href=\"cart.html\">Cart</a>
                                                <a class=\"dropdown-item\" href=\"checkout.html\">Checkout</a>
                                            </div>
                                        </li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Dresses</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"karl-level\">hot</span> Shoes</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Help Line -->
                        <div class=\"help-line\">
                            <a href=\"tel:+346573556778\"><i class=\"ti-headphone-alt\"></i> +34 657 3556 778</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Top Discount Area Start ****** -->
    <section class=\"top-discount-area d-md-flex align-items-center\">
        <!-- Single Discount Area -->
        <div class=\"single-discount-area\">
            <h5>Free Shipping &amp; Returns</h5>
            <h6><a href=\"#\">BUY NOW</a></h6>
        </div>
        <!-- Single Discount Area -->
        <div class=\"single-discount-area\">
            <h5>20% Discount for all dresses</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
        <!-- Single Discount Area -->
        <div class=\"single-discount-area\">
            <h5>20% Discount for students</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
    </section>
    <!-- ****** Top Discount Area End ****** -->

    <!-- ****** Welcome Slides Area Start ****** -->
    <section class=\"welcome_area\">
        <div class=\"welcome_slides owl-carousel\">
            <!-- Single Slide Start -->
            <div class=\"single_slide height-800 bg-img background-overlay\" style=\"background-image: url(";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-1.jpg"), "html", null, true);
        echo ");\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"welcome_slide_text\">
                                <h6 data-animation=\"bounceInDown\" data-delay=\"0\" data-duration=\"500ms\">* Only today we offer free shipping</h6>
                                <h2 data-animation=\"fadeInUp\" data-delay=\"500ms\" data-duration=\"500ms\">Fashion Trends</h2>
                                <a href=\"#\" class=\"btn karl-btn\" data-animation=\"fadeInUp\" data-delay=\"1s\" data-duration=\"500ms\">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class=\"single_slide height-800 bg-img background-overlay\" style=\"background-image: url(";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-4.jpg"), "html", null, true);
        echo ");\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"welcome_slide_text\">
                                <h6 data-animation=\"fadeInDown\" data-delay=\"0\" data-duration=\"500ms\">* Only today we offer free shipping</h6>
                                <h2 data-animation=\"fadeInUp\" data-delay=\"500ms\" data-duration=\"500ms\">Summer Collection</h2>
                                <a href=\"#\" class=\"btn karl-btn\" data-animation=\"fadeInLeftBig\" data-delay=\"1s\" data-duration=\"500ms\">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class=\"single_slide height-800 bg-img background-overlay\" style=\"background-image: url(";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-2.jpg"), "html", null, true);
        echo ");\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"welcome_slide_text\">
                                <h6 data-animation=\"fadeInDown\" data-delay=\"0\" data-duration=\"500ms\">* Only today we offer free shipping</h6>
                                <h2 data-animation=\"bounceInDown\" data-delay=\"500ms\" data-duration=\"500ms\">Women Fashion</h2>
                                <a href=\"#\" class=\"btn karl-btn\" data-animation=\"fadeInRightBig\" data-delay=\"1s\" data-duration=\"500ms\">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Slides Area End ****** -->

    <!-- ****** Top Catagory Area Start ****** -->
    <section class=\"top_catagory_area d-md-flex clearfix\">
        <!-- Single Catagory -->
        <div class=\"single_catagory_area d-flex align-items-center bg-img\" style=\"background-image: url(";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-2.jpg"), "html", null, true);
        echo ");\">
            <div class=\"catagory-content\">
                <h6>On Accesories</h6>
                <h2>Sale 30%</h2>
                <a href=\"#\" class=\"btn karl-btn\">SHOP NOW</a>
            </div>
        </div>
        <!-- Single Catagory -->
        <div class=\"single_catagory_area d-flex align-items-center bg-img\" style=\"background-image: url(";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-3.jpg"), "html", null, true);
        echo ");\">
            <div class=\"catagory-content\">
                <h6>in Bags excepting the new collection</h6>
                <h2>Designer bags</h2>
                <a href=\"#\" class=\"btn karl-btn\">SHOP NOW</a>
            </div>
        </div>
    </section>
    <!-- ****** Top Catagory Area End ****** -->

    <!-- ****** Quick View Modal Area Start ****** -->
    <div class=\"modal fade\" id=\"quickview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"quickview\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <button type=\"button\" class=\"close btn\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                <div class=\"modal-body\">
                    <div class=\"quickview_body\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-12 col-lg-5\">
                                    <div class=\"quickview_pro_img\">
                                        <img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-lg-7\">
                                    <div class=\"quickview_pro_des\">
                                        <h4 class=\"title\">Boutique Silk Dress</h4>
                                        <div class=\"top_seller_product_rating mb-15\">
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                        </div>
                                        <h5 class=\"price\">\$120.99 <span>\$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                        <a href=\"#\">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class=\"cart\" method=\"post\">
                                        <div class=\"quantity\">
                                            <span class=\"qty-minus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>

                                            <input type=\"number\" class=\"qty-text\" id=\"qty\" step=\"1\" min=\"1\" max=\"12\" name=\"quantity\" value=\"1\">

                                            <span class=\"qty-plus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                                        </div>
                                        <button type=\"submit\" name=\"addtocart\" value=\"5\" class=\"cart-submit\">Add to cart</button>
                                        <!-- Wishlist -->
                                        <div class=\"modal_pro_wishlist\">
                                            <a href=\"wishlist.html\" target=\"_blank\"><i class=\"ti-heart\"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class=\"modal_pro_compare\">
                                            <a href=\"compare.html\" target=\"_blank\"><i class=\"ti-stats-up\"></i></a>
                                        </div>
                                    </form>

                                    <div class=\"share_wf mt-30\">
                                        <p>Share With Friend</p>
                                        <div class=\"_icon\">
                                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Quick View Modal Area End ****** -->

    <!-- ****** New Arrivals Area Start ****** -->
    <section class=\"new_arrivals_area section_padding_100_0 clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section_heading text-center\">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"karl-projects-menu mb-100\">
            <div class=\"text-center portfolio-menu\">
                <button class=\"btn active\" data-filter=\"*\">ALL</button>
                <button class=\"btn\" data-filter=\".women\">WOMAN</button>
                <button class=\"btn\" data-filter=\".man\">MAN</button>
                <button class=\"btn\" data-filter=\".access\">ACCESSORIES</button>
                <button class=\"btn\" data-filter=\".shoes\">shoes</button>
                <button class=\"btn\" data-filter=\".kids\">KIDS</button>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row karl-new-arrivals\">

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig\" data-wow-delay=\"0.2s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig\" data-wow-delay=\"0.3s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig\" data-wow-delay=\"0.4s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig\" data-wow-delay=\"0.5s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig\" data-wow-delay=\"0.6s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig\" data-wow-delay=\"0.7s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"img/product-img/product-6.jpg";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/css/core-style.css"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** New Arrivals Area End ****** -->

    <!-- ****** Offer Area Start ****** -->
    <section class=\"offer_area height-700 section_padding_100 bg-img\" style=\"background-image: url(";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-5.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-end justify-content-end\">
                <div class=\"col-12 col-md-8 col-lg-6\">
                    <div class=\"offer-content-area wow fadeInUp\" data-wow-delay=\"1s\">
                        <h2>White t-shirt <span class=\"karl-level\">Hot</span></h2>
                        <p>* Free shipping until 25 Dec 2017</p>
                        <div class=\"offer-product-price\">
                            <h3><span class=\"regular-price\">\$25.90</span> \$15.90</h3>
                        </div>
                        <a href=\"#\" class=\"btn karl-btn mt-30\">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Offer Area End ****** -->

    <!-- ****** Popular Brands Area Start ****** -->
    <section class=\"karl-testimonials-area section_padding_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section_heading text-center\">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-8\">
                    <div class=\"karl-testimonials-slides owl-carousel\">

                        <!-- Single Testimonial Area -->
                        <div class=\"single-testimonial-area text-center\">
                            <span class=\"quote\">\"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class=\"testimonial-info d-flex align-items-center justify-content-center\">
                                <div class=\"tes-thumbnail\">
                                    <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/tes-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"testi-data\">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class=\"single-testimonial-area text-center\">
                            <span class=\"quote\">\"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class=\"testimonial-info d-flex align-items-center justify-content-center\">
                                <div class=\"tes-thumbnail\">
                                    <img src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/tes-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"testi-data\">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class=\"single-testimonial-area text-center\">
                            <span class=\"quote\">\"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class=\"testimonial-info d-flex align-items-center justify-content-center\">
                                <div class=\"tes-thumbnail\">
                                    <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/tes-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"testi-data\">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ****** Popular Brands Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer-logo\">
                            <a href=\"/\">
                                <img src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/core-img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"copywrite_text d-flex align-items-center\">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single_footer_area\">
                        <ul class=\"footer_widget_menu\">
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Faq</a></li>
                            <li><a href=\"#\">Returns</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single_footer_area\">
                        <ul class=\"footer_widget_menu\">
                            <li><a href=\"#\">My Account</a></li>
                            <li><a href=\"#\">Shipping</a></li>
                            <li><a href=\"#\">Our Policies</a></li>
                            <li><a href=\"#\">Afiliates</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-lg-5\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer_heading mb-30\">
                            <h6>Subscribe to our newsletter</h6>
                        </div>
                        <div class=\"subscribtion_form\">
                            <form action=\"#\" method=\"post\">
                                <input type=\"email\" name=\"mail\" class=\"mail\" placeholder=\"Your email here\">
                                <button type=\"submit\" class=\"submit\">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"line\"></div>

            <!-- Footer Bottom Area Start -->
            <div class=\"footer_bottom_area\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"footer_social_area text-center\">
                            <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
</div>
<!-- /.wrapper end -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap js -->
<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Plugins js -->
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Active js -->
<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/active.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "root/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 675,  795 => 673,  790 => 671,  785 => 669,  780 => 667,  707 => 597,  678 => 571,  660 => 556,  642 => 541,  600 => 502,  578 => 483,  557 => 465,  536 => 447,  515 => 429,  494 => 411,  473 => 393,  384 => 307,  357 => 283,  346 => 275,  323 => 255,  305 => 240,  287 => 225,  185 => 126,  174 => 118,  161 => 108,  72 => 22,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Karl - Fashion Ecommerce Template | Home</title>

    <!-- Favicon  -->
    <link rel=\"icon\" href=\"img/core-img/favicon.ico\">

    <!-- Core Style CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lp/css/core-style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lp/style.css') }}\">

    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lp/css/responsive.css') }}\">
</head>

<body>
<div class=\"catagories-side-menu\">
    <!-- Close Icon -->
    <div id=\"sideMenuClose\">
        <i class=\"ti-close\"></i>
    </div>
    <!--  Side Nav  -->
    <div class=\"nav-side-menu\">
        <div class=\"menu-list\">
            <h6>Categories</h6>
            <ul id=\"menu-content\" class=\"menu-content collapse out\">
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#women\" class=\"collapsed active\">
                    <a href=\"#\">Woman wear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"women\">
                        <li><a href=\"#\">Midi Dresses</a></li>
                        <li><a href=\"#\">Maxi Dresses</a></li>
                        <li><a href=\"#\">Prom Dresses</a></li>
                        <li><a href=\"#\">Little Black Dresses</a></li>
                        <li><a href=\"#\">Mini Dresses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#man\" class=\"collapsed\">
                    <a href=\"#\">Man Wear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"man\">
                        <li><a href=\"#\">Man Dresses</a></li>
                        <li><a href=\"#\">Man Black Dresses</a></li>
                        <li><a href=\"#\">Man Mini Dresses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#kids\" class=\"collapsed\">
                    <a href=\"#\">Children <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"kids\">
                        <li><a href=\"#\">Children Dresses</a></li>
                        <li><a href=\"#\">Mini Dresses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#bags\" class=\"collapsed\">
                    <a href=\"#\">Bags &amp; Purses <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"bags\">
                        <li><a href=\"#\">Bags</a></li>
                        <li><a href=\"#\">Purses</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#eyewear\" class=\"collapsed\">
                    <a href=\"#\">Eyewear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"eyewear\">
                        <li><a href=\"#\">Eyewear Style 1</a></li>
                        <li><a href=\"#\">Eyewear Style 2</a></li>
                        <li><a href=\"#\">Eyewear Style 3</a></li>
                    </ul>
                </li>
                <!-- Single Item -->
                <li data-toggle=\"collapse\" data-target=\"#footwear\" class=\"collapsed\">
                    <a href=\"#\">Footwear <span class=\"arrow\"></span></a>
                    <ul class=\"sub-menu collapse\" id=\"footwear\">
                        <li><a href=\"#\">Footwear 1</a></li>
                        <li><a href=\"#\">Footwear 2</a></li>
                        <li><a href=\"#\">Footwear 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id=\"wrapper\">

    <!-- ****** Header Area Start ****** -->
    <header class=\"header_area\">
        <!-- Top Header Area Start -->
        <div class=\"top_header_area\">
            <div class=\"container h-100\">
                <div class=\"row h-100 align-items-center justify-content-end\">

                    <div class=\"col-12 col-lg-7\">
                        <div class=\"top_single_area d-flex align-items-center\">
                            <!-- Logo Area -->
                            <div class=\"top_logo\">
                                <a href=\"#\"><img src=\"{{ asset('bundles/lp/img/core-img/logo.png') }}\" alt=\"\"></a>
                            </div>
                            <!-- Cart & Menu Area -->
                            <div class=\"header-cart-menu d-flex align-items-center ml-auto\">
                                <!-- Cart Area -->
                                <div class=\"cart\">
                                    <a href=\"/basket\" id=\"header-cart-btn\"><span class=\"cart_quantity\">0</span> <i class=\"ti-bag\"></i> Your Bag \$20</a>
                                    <!-- Cart List Area Start -->
                                    <ul class=\"cart-list\">
                                        <li>
                                            <a href=\"#\" class=\"image\"><img src=\"{{ asset('bundles/lp/img/product-img/product-10.jpg') }}\" class=\"cart-thumb\" alt=\"\"></a>
                                            <div class=\"cart-item-desc\">
                                                <h6><a href=\"#\">Women's Fashion</a></h6>
                                                <p>1x - <span class=\"price\">\$10</span></p>
                                            </div>
                                            <span class=\"dropdown-product-remove\"><i class=\"icon-cross\"></i></span>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"image\"><img src=\"{{ asset('bundles/lp/img/product-img/product-11.jpg') }}\" class=\"cart-thumb\" alt=\"\"></a>
                                            <div class=\"cart-item-desc\">
                                                <h6><a href=\"#\">Women's Fashion</a></h6>
                                                <p>1x - <span class=\"price\">\$10</span></p>
                                            </div>
                                            <span class=\"dropdown-product-remove\"><i class=\"icon-cross\"></i></span>
                                        </li>
                                        <li class=\"total\">
                                            <span class=\"pull-right\">Total: \$20.00</span>
                                            <a href=\"/basket\" class=\"btn btn-sm btn-cart\">Cart</a>
                                            <a href=\"/basket\" class=\"btn btn-sm btn-checkout\">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"header-right-side-menu ml-15\">
                                    <a href=\"#\" id=\"sideMenuBtn\"><i class=\"ti-menu\" aria-hidden=\"true\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Top Header Area End -->
        <div class=\"main_header_area\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-12 d-md-flex justify-content-between\">
                        <!-- Header Social Area -->
                        <div class=\"header-social-area\">
                            <a href=\"#\"><span class=\"karl-level\">Share</span> <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                        <!-- Menu Area -->
                        <div class=\"main-menu-area\">
                            <nav class=\"navbar navbar-expand-lg align-items-start\">

                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#karl-navbar\" aria-controls=\"karl-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"><i class=\"ti-menu\"></i></span></button>

                                <div class=\"collapse navbar-collapse align-items-start collapse\" id=\"karl-navbar\">
                                    <ul class=\"navbar-nav animated\" id=\"nav\">
                                        <li class=\"nav-item active\"><a class=\"nav-link\" href=\"index.html\">Home</a></li>
                                        <li class=\"nav-item active\"><a class=\"nav-link\" href=\"/parfumeriya-dlja-zhenshhin\">Парфюмерия для женщин</a></li>
                                        <li class=\"nav-item dropdown\">
                                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"karlDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages</a>
                                            <div class=\"dropdown-menu\" aria-labelledby=\"karlDropdown\">
                                                <a class=\"dropdown-item\" href=\"index.html\">Home</a>
                                                <a class=\"dropdown-item\" href=\"shop.html\">Shop</a>
                                                <a class=\"dropdown-item\" href=\"product-details.html\">Product Details</a>
                                                <a class=\"dropdown-item\" href=\"cart.html\">Cart</a>
                                                <a class=\"dropdown-item\" href=\"checkout.html\">Checkout</a>
                                            </div>
                                        </li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Dresses</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"karl-level\">hot</span> Shoes</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Help Line -->
                        <div class=\"help-line\">
                            <a href=\"tel:+346573556778\"><i class=\"ti-headphone-alt\"></i> +34 657 3556 778</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Top Discount Area Start ****** -->
    <section class=\"top-discount-area d-md-flex align-items-center\">
        <!-- Single Discount Area -->
        <div class=\"single-discount-area\">
            <h5>Free Shipping &amp; Returns</h5>
            <h6><a href=\"#\">BUY NOW</a></h6>
        </div>
        <!-- Single Discount Area -->
        <div class=\"single-discount-area\">
            <h5>20% Discount for all dresses</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
        <!-- Single Discount Area -->
        <div class=\"single-discount-area\">
            <h5>20% Discount for students</h5>
            <h6>USE CODE: Colorlib</h6>
        </div>
    </section>
    <!-- ****** Top Discount Area End ****** -->

    <!-- ****** Welcome Slides Area Start ****** -->
    <section class=\"welcome_area\">
        <div class=\"welcome_slides owl-carousel\">
            <!-- Single Slide Start -->
            <div class=\"single_slide height-800 bg-img background-overlay\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-1.jpg') }});\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"welcome_slide_text\">
                                <h6 data-animation=\"bounceInDown\" data-delay=\"0\" data-duration=\"500ms\">* Only today we offer free shipping</h6>
                                <h2 data-animation=\"fadeInUp\" data-delay=\"500ms\" data-duration=\"500ms\">Fashion Trends</h2>
                                <a href=\"#\" class=\"btn karl-btn\" data-animation=\"fadeInUp\" data-delay=\"1s\" data-duration=\"500ms\">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class=\"single_slide height-800 bg-img background-overlay\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-4.jpg') }});\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"welcome_slide_text\">
                                <h6 data-animation=\"fadeInDown\" data-delay=\"0\" data-duration=\"500ms\">* Only today we offer free shipping</h6>
                                <h2 data-animation=\"fadeInUp\" data-delay=\"500ms\" data-duration=\"500ms\">Summer Collection</h2>
                                <a href=\"#\" class=\"btn karl-btn\" data-animation=\"fadeInLeftBig\" data-delay=\"1s\" data-duration=\"500ms\">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide Start -->
            <div class=\"single_slide height-800 bg-img background-overlay\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-2.jpg') }});\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"welcome_slide_text\">
                                <h6 data-animation=\"fadeInDown\" data-delay=\"0\" data-duration=\"500ms\">* Only today we offer free shipping</h6>
                                <h2 data-animation=\"bounceInDown\" data-delay=\"500ms\" data-duration=\"500ms\">Women Fashion</h2>
                                <a href=\"#\" class=\"btn karl-btn\" data-animation=\"fadeInRightBig\" data-delay=\"1s\" data-duration=\"500ms\">Check Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Slides Area End ****** -->

    <!-- ****** Top Catagory Area Start ****** -->
    <section class=\"top_catagory_area d-md-flex clearfix\">
        <!-- Single Catagory -->
        <div class=\"single_catagory_area d-flex align-items-center bg-img\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-2.jpg') }});\">
            <div class=\"catagory-content\">
                <h6>On Accesories</h6>
                <h2>Sale 30%</h2>
                <a href=\"#\" class=\"btn karl-btn\">SHOP NOW</a>
            </div>
        </div>
        <!-- Single Catagory -->
        <div class=\"single_catagory_area d-flex align-items-center bg-img\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-3.jpg') }});\">
            <div class=\"catagory-content\">
                <h6>in Bags excepting the new collection</h6>
                <h2>Designer bags</h2>
                <a href=\"#\" class=\"btn karl-btn\">SHOP NOW</a>
            </div>
        </div>
    </section>
    <!-- ****** Top Catagory Area End ****** -->

    <!-- ****** Quick View Modal Area Start ****** -->
    <div class=\"modal fade\" id=\"quickview\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"quickview\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <button type=\"button\" class=\"close btn\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                <div class=\"modal-body\">
                    <div class=\"quickview_body\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-12 col-lg-5\">
                                    <div class=\"quickview_pro_img\">
                                        <img src=\"{{ asset('bundles/lp/img/product-img/product-1.jpg') }}\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-12 col-lg-7\">
                                    <div class=\"quickview_pro_des\">
                                        <h4 class=\"title\">Boutique Silk Dress</h4>
                                        <div class=\"top_seller_product_rating mb-15\">
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                                        </div>
                                        <h5 class=\"price\">\$120.99 <span>\$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                        <a href=\"#\">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class=\"cart\" method=\"post\">
                                        <div class=\"quantity\">
                                            <span class=\"qty-minus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>

                                            <input type=\"number\" class=\"qty-text\" id=\"qty\" step=\"1\" min=\"1\" max=\"12\" name=\"quantity\" value=\"1\">

                                            <span class=\"qty-plus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                                        </div>
                                        <button type=\"submit\" name=\"addtocart\" value=\"5\" class=\"cart-submit\">Add to cart</button>
                                        <!-- Wishlist -->
                                        <div class=\"modal_pro_wishlist\">
                                            <a href=\"wishlist.html\" target=\"_blank\"><i class=\"ti-heart\"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class=\"modal_pro_compare\">
                                            <a href=\"compare.html\" target=\"_blank\"><i class=\"ti-stats-up\"></i></a>
                                        </div>
                                    </form>

                                    <div class=\"share_wf mt-30\">
                                        <p>Share With Friend</p>
                                        <div class=\"_icon\">
                                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                                            <a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Quick View Modal Area End ****** -->

    <!-- ****** New Arrivals Area Start ****** -->
    <section class=\"new_arrivals_area section_padding_100_0 clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section_heading text-center\">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"karl-projects-menu mb-100\">
            <div class=\"text-center portfolio-menu\">
                <button class=\"btn active\" data-filter=\"*\">ALL</button>
                <button class=\"btn\" data-filter=\".women\">WOMAN</button>
                <button class=\"btn\" data-filter=\".man\">MAN</button>
                <button class=\"btn\" data-filter=\".access\">ACCESSORIES</button>
                <button class=\"btn\" data-filter=\".shoes\">shoes</button>
                <button class=\"btn\" data-filter=\".kids\">KIDS</button>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row karl-new-arrivals\">

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig\" data-wow-delay=\"0.2s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"{{ asset('bundles/lp/img/product-img/product-1.jpg') }}\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig\" data-wow-delay=\"0.3s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"{{ asset('bundles/lp/img/product-img/product-2.jpg') }}\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item access wow fadeInUpBig\" data-wow-delay=\"0.4s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"{{ asset('bundles/lp/img/product-img/product-3.jpg') }}\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item shoes wow fadeInUpBig\" data-wow-delay=\"0.5s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"{{ asset('bundles/lp/img/product-img/product-4.jpg') }}\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item Start -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig\" data-wow-delay=\"0.6s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"{{ asset('bundles/lp/img/product-img/product-5.jpg') }}\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>

                <!-- Single gallery Item -->
                <div class=\"col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig\" data-wow-delay=\"0.7s\">
                    <!-- Product Image -->
                    <div class=\"product-img\">
                        <img src=\"img/product-img/product-6.jpg{{ asset('bundles/lp/css/core-style.css') }}\" alt=\"\">
                        <div class=\"product-quicview\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#quickview\"><i class=\"ti-plus\"></i></a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class=\"product-description\">
                        <h4 class=\"product-price\">\$39.90</h4>
                        <p>Jeans midi cocktail dress</p>
                        <!-- Add to Cart -->
                        <a href=\"#\" class=\"add-to-cart-btn\">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** New Arrivals Area End ****** -->

    <!-- ****** Offer Area Start ****** -->
    <section class=\"offer_area height-700 section_padding_100 bg-img\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-5.jpg') }});\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-end justify-content-end\">
                <div class=\"col-12 col-md-8 col-lg-6\">
                    <div class=\"offer-content-area wow fadeInUp\" data-wow-delay=\"1s\">
                        <h2>White t-shirt <span class=\"karl-level\">Hot</span></h2>
                        <p>* Free shipping until 25 Dec 2017</p>
                        <div class=\"offer-product-price\">
                            <h3><span class=\"regular-price\">\$25.90</span> \$15.90</h3>
                        </div>
                        <a href=\"#\" class=\"btn karl-btn mt-30\">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Offer Area End ****** -->

    <!-- ****** Popular Brands Area Start ****** -->
    <section class=\"karl-testimonials-area section_padding_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"section_heading text-center\">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class=\"row justify-content-center\">
                <div class=\"col-12 col-md-8\">
                    <div class=\"karl-testimonials-slides owl-carousel\">

                        <!-- Single Testimonial Area -->
                        <div class=\"single-testimonial-area text-center\">
                            <span class=\"quote\">\"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class=\"testimonial-info d-flex align-items-center justify-content-center\">
                                <div class=\"tes-thumbnail\">
                                    <img src=\"{{ asset('bundles/lp/img/bg-img/tes-1.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"testi-data\">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class=\"single-testimonial-area text-center\">
                            <span class=\"quote\">\"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class=\"testimonial-info d-flex align-items-center justify-content-center\">
                                <div class=\"tes-thumbnail\">
                                    <img src=\"{{ asset('bundles/lp/img/bg-img/tes-1.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"testi-data\">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class=\"single-testimonial-area text-center\">
                            <span class=\"quote\">\"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class=\"testimonial-info d-flex align-items-center justify-content-center\">
                                <div class=\"tes-thumbnail\">
                                    <img src=\"{{ asset('bundles/lp/img/bg-img/tes-1.jpg') }}\" alt=\"\">
                                </div>
                                <div class=\"testi-data\">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ****** Popular Brands Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer-logo\">
                            <a href=\"/\">
                                <img src=\"{{ asset('bundles/lp/img/core-img/logo.png') }}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"copywrite_text d-flex align-items-center\">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single_footer_area\">
                        <ul class=\"footer_widget_menu\">
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Faq</a></li>
                            <li><a href=\"#\">Returns</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single_footer_area\">
                        <ul class=\"footer_widget_menu\">
                            <li><a href=\"#\">My Account</a></li>
                            <li><a href=\"#\">Shipping</a></li>
                            <li><a href=\"#\">Our Policies</a></li>
                            <li><a href=\"#\">Afiliates</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-lg-5\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer_heading mb-30\">
                            <h6>Subscribe to our newsletter</h6>
                        </div>
                        <div class=\"subscribtion_form\">
                            <form action=\"#\" method=\"post\">
                                <input type=\"email\" name=\"mail\" class=\"mail\" placeholder=\"Your email here\">
                                <button type=\"submit\" class=\"submit\">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"line\"></div>

            <!-- Footer Bottom Area Start -->
            <div class=\"footer_bottom_area\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"footer_social_area text-center\">
                            <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
</div>
<!-- /.wrapper end -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src=\"{{ asset('bundles/lp/js/jquery/jquery-2.2.4.min.js') }}\"></script>
<!-- Popper js -->
<script src=\"{{ asset('bundles/lp/js/popper.min.js') }}\"></script>
<!-- Bootstrap js -->
<script src=\"{{ asset('bundles/lp/js/bootstrap.min.js') }}\"></script>
<!-- Plugins js -->
<script src=\"{{ asset('bundles/lp/js/plugins.js') }}\"></script>
<!-- Active js -->
<script src=\"{{ asset('bundles/lp/js/active.js') }}\"></script>

</body>

</html>", "root/index.html.twig", "/var/www/symfony/templates/root/index.html.twig");
    }
}

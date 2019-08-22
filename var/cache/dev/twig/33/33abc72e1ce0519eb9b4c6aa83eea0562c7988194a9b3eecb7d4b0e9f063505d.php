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

/* @LpCatalog/catalog/index.html.twig */
class __TwigTemplate_e40e23490a833d5224928eb32880ebfb1fce35c7c5b0b830a47c9452d6118917 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LpCatalog/catalog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@LpCatalog/catalog/index.html.twig"));

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
    <header class=\"header_area bg-img background-overlay-white\" style=\"background-image: url(";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/bg-img/bg-1.jpg"), "html", null, true);
        echo ");\">
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
                                    <a href=\"#\" id=\"header-cart-btn\" target=\"_blank\"><span class=\"cart_quantity\">2</span> <i class=\"ti-bag\"></i> Your Bag \$20</a>
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
                                            <a href=\"cart.html\" class=\"btn btn-sm btn-cart\">Cart</a>
                                            <a href=\"checkout-1.html\" class=\"btn btn-sm btn-checkout\">Checkout</a>
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
        // line 233
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

    <section class=\"shop_grid_area section_padding_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-4 col-lg-3\">
                    <div class=\"shop_sidebar_area\">

                        <div class=\"widget catagory mb-50\">
                            <!--  Side Nav  -->
                            <div class=\"nav-side-menu\">
                                <h6 class=\"mb-0\">Catagories</h6>
                                <div class=\"menu-list\">
                                    <ul id=\"menu-content2\" class=\"menu-content collapse out\">
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#women2\">
                                            <a href=\"#\">Woman wear</a>
                                            <ul class=\"sub-menu collapse show\" id=\"women2\">
                                                <li><a href=\"#\">Midi Dresses</a></li>
                                                <li><a href=\"#\">Maxi Dresses</a></li>
                                                <li><a href=\"#\">Prom Dresses</a></li>
                                                <li><a href=\"#\">Little Black Dresses</a></li>
                                                <li><a href=\"#\">Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#man2\" class=\"collapsed\">
                                            <a href=\"#\">Man Wear</a>
                                            <ul class=\"sub-menu collapse\" id=\"man2\">
                                                <li><a href=\"#\">Man Dresses</a></li>
                                                <li><a href=\"#\">Man Black Dresses</a></li>
                                                <li><a href=\"#\">Man Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#kids2\" class=\"collapsed\">
                                            <a href=\"#\">Children</a>
                                            <ul class=\"sub-menu collapse\" id=\"kids2\">
                                                <li><a href=\"#\">Children Dresses</a></li>
                                                <li><a href=\"#\">Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#bags2\" class=\"collapsed\">
                                            <a href=\"#\">Bags &amp; Purses</a>
                                            <ul class=\"sub-menu collapse\" id=\"bags2\">
                                                <li><a href=\"#\">Bags</a></li>
                                                <li><a href=\"#\">Purses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#eyewear2\" class=\"collapsed\">
                                            <a href=\"#\">Eyewear</a>
                                            <ul class=\"sub-menu collapse\" id=\"eyewear2\">
                                                <li><a href=\"#\">Eyewear Style 1</a></li>
                                                <li><a href=\"#\">Eyewear Style 2</a></li>
                                                <li><a href=\"#\">Eyewear Style 3</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#footwear2\" class=\"collapsed\">
                                            <a href=\"#\">Footwear</a>
                                            <ul class=\"sub-menu collapse\" id=\"footwear2\">
                                                <li><a href=\"#\">Footwear 1</a></li>
                                                <li><a href=\"#\">Footwear 2</a></li>
                                                <li><a href=\"#\">Footwear 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"widget price mb-50\">
                            <h6 class=\"widget-title mb-30\">Filter by Price</h6>
                            <div class=\"widget-desc\">
                                <div class=\"slider-range\">
                                    <div data-min=\"0\" data-max=\"3000\" data-unit=\"\$\" class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\" data-value-min=\"0\" data-value-max=\"1350\" data-label-result=\"Price:\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                    </div>
                                    <div class=\"range-price\">Price: 0 - 1350</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"widget color mb-70\">
                            <h6 class=\"widget-title mb-30\">Filter by Color</h6>
                            <div class=\"widget-desc\">
                                <ul class=\"d-flex justify-content-between\">
                                    <li class=\"gray\"><a href=\"#\"><span>(3)</span></a></li>
                                    <li class=\"red\"><a href=\"#\"><span>(25)</span></a></li>
                                    <li class=\"yellow\"><a href=\"#\"><span>(112)</span></a></li>
                                    <li class=\"green\"><a href=\"#\"><span>(72)</span></a></li>
                                    <li class=\"teal\"><a href=\"#\"><span>(9)</span></a></li>
                                    <li class=\"cyan\"><a href=\"#\"><span>(29)</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"widget size mb-50\">
                            <h6 class=\"widget-title mb-30\">Filter by Size</h6>
                            <div class=\"widget-desc\">
                                <ul class=\"d-flex justify-content-between\">
                                    <li><a href=\"#\">XS</a></li>
                                    <li><a href=\"#\">S</a></li>
                                    <li><a href=\"#\">M</a></li>
                                    <li><a href=\"#\">L</a></li>
                                    <li><a href=\"#\">XL</a></li>
                                    <li><a href=\"#\">XXL</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"widget recommended\">
                            <h6 class=\"widget-title mb-30\">Recommended</h6>

                            <div class=\"widget-desc\">
                                <!-- Single Recommended Product -->
                                <div class=\"single-recommended-product d-flex mb-30\">
                                    <div class=\"single-recommended-thumb mr-3\">
                                        <img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"single-recommended-desc\">
                                        <h6>Men’s T-shirt</h6>
                                        <p>\$ 39.99</p>
                                    </div>
                                </div>
                                <!-- Single Recommended Product -->
                                <div class=\"single-recommended-product d-flex mb-30\">
                                    <div class=\"single-recommended-thumb mr-3\">
                                        <img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"single-recommended-desc\">
                                        <h6>Blue mini top</h6>
                                        <p>\$ 19.99</p>
                                    </div>
                                </div>
                                <!-- Single Recommended Product -->
                                <div class=\"single-recommended-product d-flex\">
                                    <div class=\"single-recommended-thumb mr-3\">
                                        <img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"single-recommended-desc\">
                                        <h6>Women’s T-shirt</h6>
                                        <p>\$ 39.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-12 col-md-8 col-lg-9\">
                    <div class=\"shop_grid_product_area\">
                        <div class=\"row\">

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.2s\">
                                <a href=\"/cosmetics-sredstva-dlja-volos-dopolnitelnyi-uhod-maski/-green-pharma-maska-dlya-dolgogo-sohraneniya-cveta-okrashennyh-volos-3568.htm\" data-toggle=\"moda123l\" data-target=\"#quickview123\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        <div class=\"product-quicview\">
                                            <i class=\"ti-plus\"></i>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <h4 class=\"product-price\">\$39.90</h4>
                                        <p>Маска для долгого сохранения цвета</p>
                                        <!-- Add to Cart -->
                                        <a href=\"/cosmetics-sredstva-dlja-volos-dopolnitelnyi-uhod-maski/-green-pharma-maska-dlya-dolgogo-sohraneniya-cveta-okrashennyh-volos-3568.htm\" class=\"add-to-cart-btn\">ADD TO CART</a>
                                    </div>
                                </a>
                            </div>

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.3s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 469
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

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.4s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 487
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

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.5s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 505
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

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.6s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 523
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.7s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-6.jpg"), "html", null, true);
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.8s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-7.jpg"), "html", null, true);
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.9s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-8.jpg"), "html", null, true);
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"1s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-9.jpg"), "html", null, true);
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

                    <div class=\"shop_pagination_area wow fadeInUp\" data-wow-delay=\"1.1s\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination pagination-sm\">
                                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">01</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">02</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">03</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ****** Footer Area Start ****** -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer-logo\">
                            <img src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/core-img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
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
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap js -->
<script src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Plugins js -->
<script src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Active js -->
<script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/active.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@LpCatalog/catalog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 710,  822 => 708,  817 => 706,  812 => 704,  807 => 702,  736 => 634,  694 => 595,  673 => 577,  652 => 559,  631 => 541,  610 => 523,  589 => 505,  568 => 487,  547 => 469,  525 => 450,  501 => 429,  488 => 419,  475 => 409,  296 => 233,  186 => 126,  175 => 118,  162 => 108,  149 => 98,  70 => 22,  64 => 19,  60 => 18,  41 => 1,);
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
    <header class=\"header_area bg-img background-overlay-white\" style=\"background-image: url({{ asset('bundles/lp/img/bg-img/bg-1.jpg') }});\">
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
                                    <a href=\"#\" id=\"header-cart-btn\" target=\"_blank\"><span class=\"cart_quantity\">2</span> <i class=\"ti-bag\"></i> Your Bag \$20</a>
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
                                            <a href=\"cart.html\" class=\"btn btn-sm btn-cart\">Cart</a>
                                            <a href=\"checkout-1.html\" class=\"btn btn-sm btn-checkout\">Checkout</a>
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

    <section class=\"shop_grid_area section_padding_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-md-4 col-lg-3\">
                    <div class=\"shop_sidebar_area\">

                        <div class=\"widget catagory mb-50\">
                            <!--  Side Nav  -->
                            <div class=\"nav-side-menu\">
                                <h6 class=\"mb-0\">Catagories</h6>
                                <div class=\"menu-list\">
                                    <ul id=\"menu-content2\" class=\"menu-content collapse out\">
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#women2\">
                                            <a href=\"#\">Woman wear</a>
                                            <ul class=\"sub-menu collapse show\" id=\"women2\">
                                                <li><a href=\"#\">Midi Dresses</a></li>
                                                <li><a href=\"#\">Maxi Dresses</a></li>
                                                <li><a href=\"#\">Prom Dresses</a></li>
                                                <li><a href=\"#\">Little Black Dresses</a></li>
                                                <li><a href=\"#\">Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#man2\" class=\"collapsed\">
                                            <a href=\"#\">Man Wear</a>
                                            <ul class=\"sub-menu collapse\" id=\"man2\">
                                                <li><a href=\"#\">Man Dresses</a></li>
                                                <li><a href=\"#\">Man Black Dresses</a></li>
                                                <li><a href=\"#\">Man Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#kids2\" class=\"collapsed\">
                                            <a href=\"#\">Children</a>
                                            <ul class=\"sub-menu collapse\" id=\"kids2\">
                                                <li><a href=\"#\">Children Dresses</a></li>
                                                <li><a href=\"#\">Mini Dresses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#bags2\" class=\"collapsed\">
                                            <a href=\"#\">Bags &amp; Purses</a>
                                            <ul class=\"sub-menu collapse\" id=\"bags2\">
                                                <li><a href=\"#\">Bags</a></li>
                                                <li><a href=\"#\">Purses</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#eyewear2\" class=\"collapsed\">
                                            <a href=\"#\">Eyewear</a>
                                            <ul class=\"sub-menu collapse\" id=\"eyewear2\">
                                                <li><a href=\"#\">Eyewear Style 1</a></li>
                                                <li><a href=\"#\">Eyewear Style 2</a></li>
                                                <li><a href=\"#\">Eyewear Style 3</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle=\"collapse\" data-target=\"#footwear2\" class=\"collapsed\">
                                            <a href=\"#\">Footwear</a>
                                            <ul class=\"sub-menu collapse\" id=\"footwear2\">
                                                <li><a href=\"#\">Footwear 1</a></li>
                                                <li><a href=\"#\">Footwear 2</a></li>
                                                <li><a href=\"#\">Footwear 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"widget price mb-50\">
                            <h6 class=\"widget-title mb-30\">Filter by Price</h6>
                            <div class=\"widget-desc\">
                                <div class=\"slider-range\">
                                    <div data-min=\"0\" data-max=\"3000\" data-unit=\"\$\" class=\"slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all\" data-value-min=\"0\" data-value-max=\"1350\" data-label-result=\"Price:\">
                                        <div class=\"ui-slider-range ui-widget-header ui-corner-all\"></div>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                        <span class=\"ui-slider-handle ui-state-default ui-corner-all\" tabindex=\"0\"></span>
                                    </div>
                                    <div class=\"range-price\">Price: 0 - 1350</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"widget color mb-70\">
                            <h6 class=\"widget-title mb-30\">Filter by Color</h6>
                            <div class=\"widget-desc\">
                                <ul class=\"d-flex justify-content-between\">
                                    <li class=\"gray\"><a href=\"#\"><span>(3)</span></a></li>
                                    <li class=\"red\"><a href=\"#\"><span>(25)</span></a></li>
                                    <li class=\"yellow\"><a href=\"#\"><span>(112)</span></a></li>
                                    <li class=\"green\"><a href=\"#\"><span>(72)</span></a></li>
                                    <li class=\"teal\"><a href=\"#\"><span>(9)</span></a></li>
                                    <li class=\"cyan\"><a href=\"#\"><span>(29)</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"widget size mb-50\">
                            <h6 class=\"widget-title mb-30\">Filter by Size</h6>
                            <div class=\"widget-desc\">
                                <ul class=\"d-flex justify-content-between\">
                                    <li><a href=\"#\">XS</a></li>
                                    <li><a href=\"#\">S</a></li>
                                    <li><a href=\"#\">M</a></li>
                                    <li><a href=\"#\">L</a></li>
                                    <li><a href=\"#\">XL</a></li>
                                    <li><a href=\"#\">XXL</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"widget recommended\">
                            <h6 class=\"widget-title mb-30\">Recommended</h6>

                            <div class=\"widget-desc\">
                                <!-- Single Recommended Product -->
                                <div class=\"single-recommended-product d-flex mb-30\">
                                    <div class=\"single-recommended-thumb mr-3\">
                                        <img src=\"{{ asset('bundles/lp/img/product-img/product-10.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"single-recommended-desc\">
                                        <h6>Men’s T-shirt</h6>
                                        <p>\$ 39.99</p>
                                    </div>
                                </div>
                                <!-- Single Recommended Product -->
                                <div class=\"single-recommended-product d-flex mb-30\">
                                    <div class=\"single-recommended-thumb mr-3\">
                                        <img src=\"{{ asset('bundles/lp/img/product-img/product-11.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"single-recommended-desc\">
                                        <h6>Blue mini top</h6>
                                        <p>\$ 19.99</p>
                                    </div>
                                </div>
                                <!-- Single Recommended Product -->
                                <div class=\"single-recommended-product d-flex\">
                                    <div class=\"single-recommended-thumb mr-3\">
                                        <img src=\"{{ asset('bundles/lp/img/product-img/product-12.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"single-recommended-desc\">
                                        <h6>Women’s T-shirt</h6>
                                        <p>\$ 39.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-12 col-md-8 col-lg-9\">
                    <div class=\"shop_grid_product_area\">
                        <div class=\"row\">

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.2s\">
                                <a href=\"/cosmetics-sredstva-dlja-volos-dopolnitelnyi-uhod-maski/-green-pharma-maska-dlya-dolgogo-sohraneniya-cveta-okrashennyh-volos-3568.htm\" data-toggle=\"moda123l\" data-target=\"#quickview123\">
                                    <!-- Product Image -->
                                    <div class=\"product-img\">
                                        <img src=\"{{ asset('bundles/lp/img/product-img/product-1.jpg') }}\" alt=\"\">
                                        <div class=\"product-quicview\">
                                            <i class=\"ti-plus\"></i>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class=\"product-description\">
                                        <h4 class=\"product-price\">\$39.90</h4>
                                        <p>Маска для долгого сохранения цвета</p>
                                        <!-- Add to Cart -->
                                        <a href=\"/cosmetics-sredstva-dlja-volos-dopolnitelnyi-uhod-maski/-green-pharma-maska-dlya-dolgogo-sohraneniya-cveta-okrashennyh-volos-3568.htm\" class=\"add-to-cart-btn\">ADD TO CART</a>
                                    </div>
                                </a>
                            </div>

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.3s\">
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

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.4s\">
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

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.5s\">
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

                            <!-- Single gallery Item -->
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.6s\">
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.7s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"{{ asset('bundles/lp/img/product-img/product-6.jpg') }}\" alt=\"\">
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.8s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"{{ asset('bundles/lp/img/product-img/product-7.jpg') }}\" alt=\"\">
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"0.9s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"{{ asset('bundles/lp/img/product-img/product-8.jpg') }}\" alt=\"\">
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
                            <div class=\"col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig\" data-wow-delay=\"1s\">
                                <!-- Product Image -->
                                <div class=\"product-img\">
                                    <img src=\"{{ asset('bundles/lp/img/product-img/product-9.jpg') }}\" alt=\"\">
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

                    <div class=\"shop_pagination_area wow fadeInUp\" data-wow-delay=\"1.1s\">
                        <nav aria-label=\"Page navigation\">
                            <ul class=\"pagination pagination-sm\">
                                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">01</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">02</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">03</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ****** Footer Area Start ****** -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer-logo\">
                            <img src=\"{{ asset('bundles/lp/img/core-img/logo.png') }}\" alt=\"\">
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

</html>", "@LpCatalog/catalog/index.html.twig", "/var/www/symfony/src/Lp/CatalogBundle/Resources/views/catalog/index.html.twig");
    }
}

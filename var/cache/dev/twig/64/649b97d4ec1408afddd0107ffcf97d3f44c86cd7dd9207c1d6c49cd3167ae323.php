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

/* basket/index.html.twig */
class __TwigTemplate_d01696963dce1ca8248da81a75e42d7825292486b9cb6602d82f2cdb4490ece6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

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
        // line 97
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
                                <a href=\"/\"><img src=\"";
        // line 107
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
        // line 117
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
        // line 125
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

    <!-- ****** Cart Area Start ****** -->
    <div class=\"cart_area section_padding_100 clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"cart-table clearfix\">
                        <table class=\"table table-responsive\">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=\"cart_product_img d-flex align-items-center\">
                                    <a href=\"#\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/img/product-img/product-9.jpg"), "html", null, true);
        echo "\" alt=\"Product\"></a>
                                    <h6>Yellow Cocktail Dress</h6>
                                </td>
                                <td class=\"price\"><span>\$49.88</span></td>
                                <td class=\"qty\">
                                    <div class=\"quantity\">
                                        <span class=\"qty-minus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                                        <input type=\"number\" class=\"qty-text\" id=\"qty\" step=\"1\" min=\"1\" max=\"99\" name=\"quantity\" value=\"1\">
                                        <span class=\"qty-plus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                                    </div>
                                </td>
                                <td class=\"total_price\"><span>\$49.88</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=\"cart-footer d-flex mt-30\">
                        <div class=\"back-to-shop w-50\">
                            <a href=\"shop-grid-left-sidebar.html\">Continue shooping</a>
                        </div>
                        <div class=\"update-checkout w-50 text-right\">
                            <a href=\"#\">clear cart</a>
                            <a href=\"#\">Update cart</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"coupon-code-area mt-70\">
                        <div class=\"cart-page-heading\">
                            <h5>Cupon code</h5>
                            <p>Enter your cupone code</p>
                        </div>
                        <form action=\"#\">
                            <input type=\"search\" name=\"search\" placeholder=\"#569ab15\">
                            <button type=\"submit\">Apply</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"shipping-method-area mt-70\">
                        <div class=\"cart-page-heading\">
                            <h5>Shipping method</h5>
                            <p>Select the one you want</p>
                        </div>

                        <div class=\"custom-control custom-radio mb-30\">
                            <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\">
                            <label class=\"custom-control-label d-flex align-items-center justify-content-between\" for=\"customRadio1\"><span>Next day delivery</span><span>\$4.99</span></label>
                        </div>

                        <div class=\"custom-control custom-radio mb-30\">
                            <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
                            <label class=\"custom-control-label d-flex align-items-center justify-content-between\" for=\"customRadio2\"><span>Standard delivery</span><span>\$1.99</span></label>
                        </div>

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"customRadio3\" name=\"customRadio\" class=\"custom-control-input\">
                            <label class=\"custom-control-label d-flex align-items-center justify-content-between\" for=\"customRadio3\"><span>Personal Pickup</span><span>Free</span></label>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-4\">
                    <div class=\"cart-total-area mt-70\">
                        <div class=\"cart-page-heading\">
                            <h5>Cart total</h5>
                            <p>Final info</p>
                        </div>

                        <ul class=\"cart-total-chart\">
                            <li><span>Subtotal</span> <span>\$59.90</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span><strong>Total</strong></span> <span><strong>\$59.90</strong></span></li>
                        </ul>
                        <a href=\"checkout.html\" class=\"btn karl-checkout-btn\">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Cart Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Footer Area Start -->
                <div class=\"col-12 col-md-6 col-lg-3\">
                    <div class=\"single_footer_area\">
                        <div class=\"footer-logo\">
                            <img src=\"";
        // line 332
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
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/jquery/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Popper js -->
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap js -->
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Plugins js -->
<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/plugins.js"), "html", null, true);
        echo "\"></script>
<!-- Active js -->
<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/lp/js/active.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 409,  485 => 407,  480 => 405,  475 => 403,  470 => 401,  398 => 332,  301 => 238,  185 => 125,  174 => 117,  161 => 107,  148 => 97,  70 => 22,  64 => 19,  60 => 18,  41 => 1,);
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
                                <a href=\"/\"><img src=\"{{ asset('bundles/lp/img/core-img/logo.png') }}\" alt=\"\"></a>
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

    <!-- ****** Cart Area Start ****** -->
    <div class=\"cart_area section_padding_100 clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"cart-table clearfix\">
                        <table class=\"table table-responsive\">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=\"cart_product_img d-flex align-items-center\">
                                    <a href=\"#\"><img src=\"{{ asset('bundles/lp/img/product-img/product-9.jpg') }}\" alt=\"Product\"></a>
                                    <h6>Yellow Cocktail Dress</h6>
                                </td>
                                <td class=\"price\"><span>\$49.88</span></td>
                                <td class=\"qty\">
                                    <div class=\"quantity\">
                                        <span class=\"qty-minus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></span>
                                        <input type=\"number\" class=\"qty-text\" id=\"qty\" step=\"1\" min=\"1\" max=\"99\" name=\"quantity\" value=\"1\">
                                        <span class=\"qty-plus\" onclick=\"var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></span>
                                    </div>
                                </td>
                                <td class=\"total_price\"><span>\$49.88</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=\"cart-footer d-flex mt-30\">
                        <div class=\"back-to-shop w-50\">
                            <a href=\"shop-grid-left-sidebar.html\">Continue shooping</a>
                        </div>
                        <div class=\"update-checkout w-50 text-right\">
                            <a href=\"#\">clear cart</a>
                            <a href=\"#\">Update cart</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"coupon-code-area mt-70\">
                        <div class=\"cart-page-heading\">
                            <h5>Cupon code</h5>
                            <p>Enter your cupone code</p>
                        </div>
                        <form action=\"#\">
                            <input type=\"search\" name=\"search\" placeholder=\"#569ab15\">
                            <button type=\"submit\">Apply</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"shipping-method-area mt-70\">
                        <div class=\"cart-page-heading\">
                            <h5>Shipping method</h5>
                            <p>Select the one you want</p>
                        </div>

                        <div class=\"custom-control custom-radio mb-30\">
                            <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\">
                            <label class=\"custom-control-label d-flex align-items-center justify-content-between\" for=\"customRadio1\"><span>Next day delivery</span><span>\$4.99</span></label>
                        </div>

                        <div class=\"custom-control custom-radio mb-30\">
                            <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
                            <label class=\"custom-control-label d-flex align-items-center justify-content-between\" for=\"customRadio2\"><span>Standard delivery</span><span>\$1.99</span></label>
                        </div>

                        <div class=\"custom-control custom-radio\">
                            <input type=\"radio\" id=\"customRadio3\" name=\"customRadio\" class=\"custom-control-input\">
                            <label class=\"custom-control-label d-flex align-items-center justify-content-between\" for=\"customRadio3\"><span>Personal Pickup</span><span>Free</span></label>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-4\">
                    <div class=\"cart-total-area mt-70\">
                        <div class=\"cart-page-heading\">
                            <h5>Cart total</h5>
                            <p>Final info</p>
                        </div>

                        <ul class=\"cart-total-chart\">
                            <li><span>Subtotal</span> <span>\$59.90</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span><strong>Total</strong></span> <span><strong>\$59.90</strong></span></li>
                        </ul>
                        <a href=\"checkout.html\" class=\"btn karl-checkout-btn\">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Cart Area End ****** -->

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

</html>", "basket/index.html.twig", "/var/www/symfony/templates/basket/index.html.twig");
    }
}

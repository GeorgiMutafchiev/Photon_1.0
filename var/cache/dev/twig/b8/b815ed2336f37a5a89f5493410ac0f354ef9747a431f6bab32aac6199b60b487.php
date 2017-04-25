<?php

/* blog/index.html.twig */
class __TwigTemplate_1c4d075cb7f4092adedf2cfb67ff93ef0614981aef6a870684d66b7def781dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a413f66e00d22f43c61c7f63708a970383ba7c1f72fcc91129577b9547fde3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a413f66e00d22f43c61c7f63708a970383ba7c1f72fcc91129577b9547fde3e7->enter($__internal_a413f66e00d22f43c61c7f63708a970383ba7c1f72fcc91129577b9547fde3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a413f66e00d22f43c61c7f63708a970383ba7c1f72fcc91129577b9547fde3e7->leave($__internal_a413f66e00d22f43c61c7f63708a970383ba7c1f72fcc91129577b9547fde3e7_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_887ea3d7f443ce8cc2a84f695237f4a38214ddaf1ded2941ce987a62ba3b62ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887ea3d7f443ce8cc2a84f695237f4a38214ddaf1ded2941ce987a62ba3b62ae->enter($__internal_887ea3d7f443ce8cc2a84f695237f4a38214ddaf1ded2941ce987a62ba3b62ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <section id=\"home\">
        <div class=\"inverse-wrapper\">
            <div class=\"rev_slider_wrapper\">
                <div id=\"slider1\" class=\"rev_slider\" data-version=\"5.0\">
                    <ul>
                        <li data-transition=\"fade\"> <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg2.jpg"), "html", null, true);
        echo "\" alt=\"\" data-bgposition=\"center center\" data-kenburns=\"on\" data-duration=\"10000\" data-ease=\"Power1.easeOut\" data-scalestart=\"110\" data-scaleend=\"100\" data-rotatestart=\"0\" data-rotateend=\"0\" data-offsetstart=\"0 0\" data-offsetend=\"0 0\" class=\"rev-slidebg\" data-no-retina>
                            <div class=\"tp-caption large text-center\" data-x=\"center\" data-y=\"center\" data-voffset=\"['-80','-80','-60','-100']\" data-fontsize=\"['50','50','40','30']\" data-lineheight=\"['60','60','50','40']\" data-width=\"['1000','800','600','300']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;\" data-transform_out=\"s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;\" style=\"z-index: 5;\">Become a freelance photographer</div>
                            <div class=\"tp-caption medium text-center\" data-x=\"center\" data-y=\"center\" data-voffset=\"0\" data-fontsize=\"['35','35','30','25']\" data-lineheight=\"['45','45','40','35']\" data-width=\"['1000','800','600','300']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"1000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;\" data-transform_out=\"s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;\" style=\"z-index: 5;\">if you love to turn moments into beautiful photos.</div>
                            <a class=\"tp-caption btn text-center\" href=\"#portfolio\" data-x=\"center\" data-y=\"center\" data-voffset=\"['85','85','70','80']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1300;e:Power4.easeInOut;\" data-transform_out=\"s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;\" data-start=\"1500\"  data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7;\">Create Portfolio</a>
                        </li>
                        <li data-transition=\"fade\"> <img  src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/art/slider-bg1.jpg"), "html", null, true);
        echo "\" alt=\"\" data-bgposition=\"center center\" data-kenburns=\"on\" data-duration=\"10000\" data-ease=\"Power1.easeOut\" data-scalestart=\"110\" data-scaleend=\"100\" data-rotatestart=\"0\" data-rotateend=\"0\" data-offsetstart=\"0 0\" data-offsetend=\"0 0\" class=\"rev-slidebg\" data-no-retina>
                            <div class=\"tp-caption large\" data-x=\"left\" data-hoffset=\"['600', '500', '400', '250']\" data-y=\"center\" data-voffset=\"['-50','-50','-50','-65']\" data-fontsize=\"['50','50','40','30']\" data-lineheight=\"['60','60','50','40']\" data-width=\"['500','500','380','200']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"x:-50px;opacity:0;s:2000;e:Power3.easeOut;\" data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\" style=\"z-index: 5;\">My name is PHOTON.</div>
                            <div class=\"tp-caption medium\" data-x=\"left\" data-hoffset=\"['600', '500', '400', '250']\" data-y=\"center\" data-voffset=\"['50','50','50','65']\" data-fontsize=\"['35','35','30','25']\" data-lineheight=\"['45','45','40','35']\" data-width=\"['500','500','380','200']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"1000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"x:50px;opacity:0;s:1000;e:Power3.easeOut;\" data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\" style=\"z-index: 5;\">I will make the best visualisation of your photographic skills.</div>
                        </li>
                    </ul>
                    <div class=\"tp-bannertimer tp-bottom\"></div>
                </div>
            </div>
            <!-- /.rev_slider -->
        </div>
        <!-- /.inverse-wrapper -->
    </section>
    <!-- /#home -->

    <section id=\"services\">
        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">Our IDEA</h2>
                        <p class=\"lead text-center\">PHOTON is a social network for freelance photographers. They can create a portfolio and write or upload different information.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide10\"></div>
                <div class=\"blog list-view row\">
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/photo2.jpg"), "html", null, true);
        echo "\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>Buy<br />
                                            A camera</h4>
                                        <p>If you want to become a photographer.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/photo1.jpg"), "html", null, true);
        echo "\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>Practice<br />
                                            Photography</h4>
                                        <p>Learn the photographic basic rules and tricks.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/photo4.jpg"), "html", null, true);
        echo "\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>Find<br />
                                            Your partners</h4>
                                        <p>Share your experience with other photographers.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/photo3.jpg"), "html", null, true);
        echo "\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>BE<br />
                                            The best</h4>
                                        <p>Start taking the best shoots.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->
    </section>
    <!-- /#services -->
    <section id=\"portfolio\">
        <div class=\"dark-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">PHOTON's Portfolio</h2>
                        <p class=\"lead text-center\">Thanks for taking some time to visit PHOTON member's portfolio. Here you will be able to find their latest and favorite works.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide20\"></div>
                <div id=\"js-lightbox-filter\" class=\"cbp-filter-container text-center\">
                    <div data-filter=\"*\" class=\"cbp-filter-item-active cbp-filter-item\">All</div>
                    <div data-filter=\".1\" class=\"cbp-filter-item\">Nature</div>
                    <div data-filter=\".2\" class=\"cbp-filter-item\">Portrait</div>
                    <div data-filter=\".3\" class=\"cbp-filter-item\">Outdoor</div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"divide25\"></div>
                <div id=\"js-grid-lightbox\" class=\"cbp cbp-l-grid-inline light-gallery\">
                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 132
            echo "                    <div class=\"cbp-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", array()), "html", null, true);
            echo " conceptual food-drink\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"cbp-caption\" >
                            <div class=\"cbp-caption-defaultWrap\"> <img width=\"200px\" src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["article"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\"> </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-title\">
                                            <h5>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"caption";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" class=\"hidden\">
                                <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4></a>
                                <p>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</p>
                            </div>
                        </a> </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.dark-wrapper -->
    </section>
    <!-- /#portfolio -->
    <section id=\"gallery\">
        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">Our newest members</h2>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide10\"></div>
                <div class=\"tiles\">
                    <div class=\"items row row-offset-0\">
                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 171
            echo "                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <figure class=\"overlay\"> <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile_see", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                    <div class=\"text-overlay caption\">
                                        <div class=\"info\">
                                            <h2 class=\"post-title\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullName", array()), "html", null, true);
            echo "</h2>
                                            <div class=\"meta\"> <span class=\"count\">Nature Photography</span></div>
                                        </div>
                                    </div>
                                    <img src=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/photos/" . $this->getAttribute($context["user"], "photo", array()))), "html", null, true);
            echo "\" alt=\"\" /></a> </figure>
                        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.tiles -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </section>
    <!-- /#gallery -->
    <!-- /#gallery -->

    <section id=\"about\">
        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">About Me</h2>
                        <p class=\"lead text-center\">Hello! My name is Georgi Mutafchiev and I am a young entrepreneur from Bansko, Bulgaria.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide20\"></div>
                <div class=\"row\">
                    <div class=\"col-md-5 rp20 bm20\">
                        <figure><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/photos/15995045_1271542236217241_4237100595249248420_o.jpg"), "html", null, true);
        echo "\" alt=\"\" /></figure>
                    </div>
                    <!-- /column -->
                    <div class=\"col-md-7\">
                        <h3>Who is Behind?</h3>
                        <p>I am 16 years old and I study german at the Foreign Languages High-School in Blagoevgrad. The entrepreneurship is my passion and I am especially very happy, when I make projects that are helpful for my friends. I also play piano, do photograph and ride ski.</p>
                        <blockquote>
                            <p> I love my life because it gives me the opportunity to think, to dream, to love and to take risks. Strive for happiness and take control of your live.</p>
                        </blockquote>
                        <h3>Elsewhere</h3>
                        <ul class=\"social\">
                            <li> <a href=\"https://www.facebook.com/profile.php?id=100001566423057\"><i class=\"ion-social-facebook\"></i></a> </li>
                            <li> <a href=\"https://www.linkedin.com/in/georgi-mut/\"><i class=\"ion-social-linkedin\"></i></a> </li>
                        </ul>
                    </div>
                    <!-- /column -->

                </div>
                <!-- /.row -->

            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->


    </section>
    <!-- /#contact -->
";
        
        $__internal_887ea3d7f443ce8cc2a84f695237f4a38214ddaf1ded2941ce987a62ba3b62ae->leave($__internal_887ea3d7f443ce8cc2a84f695237f4a38214ddaf1ded2941ce987a62ba3b62ae_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 211,  286 => 182,  277 => 179,  270 => 175,  264 => 172,  261 => 171,  257 => 170,  235 => 150,  224 => 145,  218 => 144,  214 => 143,  206 => 138,  198 => 133,  191 => 132,  187 => 131,  141 => 88,  123 => 73,  105 => 58,  87 => 43,  55 => 14,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <section id=\"home\">
        <div class=\"inverse-wrapper\">
            <div class=\"rev_slider_wrapper\">
                <div id=\"slider1\" class=\"rev_slider\" data-version=\"5.0\">
                    <ul>
                        <li data-transition=\"fade\"> <img src=\"{{ asset('images/art/slider-bg2.jpg') }}\" alt=\"\" data-bgposition=\"center center\" data-kenburns=\"on\" data-duration=\"10000\" data-ease=\"Power1.easeOut\" data-scalestart=\"110\" data-scaleend=\"100\" data-rotatestart=\"0\" data-rotateend=\"0\" data-offsetstart=\"0 0\" data-offsetend=\"0 0\" class=\"rev-slidebg\" data-no-retina>
                            <div class=\"tp-caption large text-center\" data-x=\"center\" data-y=\"center\" data-voffset=\"['-80','-80','-60','-100']\" data-fontsize=\"['50','50','40','30']\" data-lineheight=\"['60','60','50','40']\" data-width=\"['1000','800','600','300']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;\" data-transform_out=\"s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;\" style=\"z-index: 5;\">Become a freelance photographer</div>
                            <div class=\"tp-caption medium text-center\" data-x=\"center\" data-y=\"center\" data-voffset=\"0\" data-fontsize=\"['35','35','30','25']\" data-lineheight=\"['45','45','40','35']\" data-width=\"['1000','800','600','300']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"1000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;e:Power2.easeOut;\" data-transform_out=\"s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;\" style=\"z-index: 5;\">if you love to turn moments into beautiful photos.</div>
                            <a class=\"tp-caption btn text-center\" href=\"#portfolio\" data-x=\"center\" data-y=\"center\" data-voffset=\"['85','85','70','80']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1300;e:Power4.easeInOut;\" data-transform_out=\"s:1300;e:Power3.easeInOut;s:1300;e:Power3.easeInOut;\" data-start=\"1500\"  data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7;\">Create Portfolio</a>
                        </li>
                        <li data-transition=\"fade\"> <img  src=\"{{ asset('images/art/slider-bg1.jpg') }}\" alt=\"\" data-bgposition=\"center center\" data-kenburns=\"on\" data-duration=\"10000\" data-ease=\"Power1.easeOut\" data-scalestart=\"110\" data-scaleend=\"100\" data-rotatestart=\"0\" data-rotateend=\"0\" data-offsetstart=\"0 0\" data-offsetend=\"0 0\" class=\"rev-slidebg\" data-no-retina>
                            <div class=\"tp-caption large\" data-x=\"left\" data-hoffset=\"['600', '500', '400', '250']\" data-y=\"center\" data-voffset=\"['-50','-50','-50','-65']\" data-fontsize=\"['50','50','40','30']\" data-lineheight=\"['60','60','50','40']\" data-width=\"['500','500','380','200']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"x:-50px;opacity:0;s:2000;e:Power3.easeOut;\" data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\" style=\"z-index: 5;\">My name is PHOTON.</div>
                            <div class=\"tp-caption medium\" data-x=\"left\" data-hoffset=\"['600', '500', '400', '250']\" data-y=\"center\" data-voffset=\"['50','50','50','65']\" data-fontsize=\"['35','35','30','25']\" data-lineheight=\"['45','45','40','35']\" data-width=\"['500','500','380','200']\" data-whitespace=\"['normal','normal','normal','normal']\" data-start=\"1000\" data-splitin=\"none\" data-splitout=\"none\" data-responsive=\"on\" data-responsive_offset=\"on\" data-transform_idle=\"o:1;\" data-transform_in=\"x:50px;opacity:0;s:1000;e:Power3.easeOut;\" data-transform_out=\"s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;\" style=\"z-index: 5;\">I will make the best visualisation of your photographic skills.</div>
                        </li>
                    </ul>
                    <div class=\"tp-bannertimer tp-bottom\"></div>
                </div>
            </div>
            <!-- /.rev_slider -->
        </div>
        <!-- /.inverse-wrapper -->
    </section>
    <!-- /#home -->

    <section id=\"services\">
        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">Our IDEA</h2>
                        <p class=\"lead text-center\">PHOTON is a social network for freelance photographers. They can create a portfolio and write or upload different information.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide10\"></div>
                <div class=\"blog list-view row\">
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"{{ asset('uploads/photos/photo2.jpg') }}\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>Buy<br />
                                            A camera</h4>
                                        <p>If you want to become a photographer.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"{{ asset('uploads/photos/photo1.jpg') }}\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>Practice<br />
                                            Photography</h4>
                                        <p>Learn the photographic basic rules and tricks.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"{{ asset('uploads/photos/photo4.jpg') }}\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>Find<br />
                                            Your partners</h4>
                                        <p>Share your experience with other photographers.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                    <div class=\"col-sm-6\">
                        <div class=\"post bm30\">
                            <figure> <img height=\"200px\" src=\"{{ asset('uploads/photos/photo3.jpg') }}\" />
                                <figcaption>
                                    <div class=\"inner\">
                                        <h4>BE<br />
                                            The best</h4>
                                        <p>Start taking the best shoots.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->
    </section>
    <!-- /#services -->
    <section id=\"portfolio\">
        <div class=\"dark-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">PHOTON's Portfolio</h2>
                        <p class=\"lead text-center\">Thanks for taking some time to visit PHOTON member's portfolio. Here you will be able to find their latest and favorite works.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide20\"></div>
                <div id=\"js-lightbox-filter\" class=\"cbp-filter-container text-center\">
                    <div data-filter=\"*\" class=\"cbp-filter-item-active cbp-filter-item\">All</div>
                    <div data-filter=\".1\" class=\"cbp-filter-item\">Nature</div>
                    <div data-filter=\".2\" class=\"cbp-filter-item\">Portrait</div>
                    <div data-filter=\".3\" class=\"cbp-filter-item\">Outdoor</div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"divide25\"></div>
                <div id=\"js-grid-lightbox\" class=\"cbp cbp-l-grid-inline light-gallery\">
                    {% for article in articles|slice(0,10) %}
                    <div class=\"cbp-item {{ article.category}} conceptual food-drink\"> <a href=\"{{ path('article_view', {'id': article.id}) }}\" class=\"cbp-caption\" >
                            <div class=\"cbp-caption-defaultWrap\"> <img width=\"200px\" src=\"{{ asset('uploads/photos/' ~ article.photo) }}\" alt=\"\"> </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-title\">
                                            <h5>{{ article.title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"caption{{ article.id }}\" class=\"hidden\">
                                <a href=\"{{ path('article_view', {'id': article.id}) }}\"><h4>{{ article.title }}</h4></a>
                                <p>{{ article.author }}</p>
                            </div>
                        </a> </div>

                    {% endfor %}
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.dark-wrapper -->
    </section>
    <!-- /#portfolio -->
    <section id=\"gallery\">
        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">Our newest members</h2>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide10\"></div>
                <div class=\"tiles\">
                    <div class=\"items row row-offset-0\">
                        {% for user in users|slice(0,6) %}
                        <div class=\"item col-xs-6 col-sm-6 col-md-4\">
                            <figure class=\"overlay\"> <a href=\"{{ path('profile_see', {'id': user.id}) }}\">
                                    <div class=\"text-overlay caption\">
                                        <div class=\"info\">
                                            <h2 class=\"post-title\">{{ user.fullName }}</h2>
                                            <div class=\"meta\"> <span class=\"count\">Nature Photography</span></div>
                                        </div>
                                    </div>
                                    <img src=\"{{ asset('uploads/photos/' ~ user.photo) }}\" alt=\"\" /></a> </figure>
                        </div>
{% endfor %}

                    </div>
                    <!--/.row -->
                </div>
                <!-- /.tiles -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.light-wrapper -->
    </section>
    <!-- /#gallery -->
    <!-- /#gallery -->

    <section id=\"about\">
        <div class=\"light-wrapper\">
            <div class=\"container inner\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h2 class=\"section-title text-center\">About Me</h2>
                        <p class=\"lead text-center\">Hello! My name is Georgi Mutafchiev and I am a young entrepreneur from Bansko, Bulgaria.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class=\"divide20\"></div>
                <div class=\"row\">
                    <div class=\"col-md-5 rp20 bm20\">
                        <figure><img src=\"{{ asset('uploads/photos/15995045_1271542236217241_4237100595249248420_o.jpg') }}\" alt=\"\" /></figure>
                    </div>
                    <!-- /column -->
                    <div class=\"col-md-7\">
                        <h3>Who is Behind?</h3>
                        <p>I am 16 years old and I study german at the Foreign Languages High-School in Blagoevgrad. The entrepreneurship is my passion and I am especially very happy, when I make projects that are helpful for my friends. I also play piano, do photograph and ride ski.</p>
                        <blockquote>
                            <p> I love my life because it gives me the opportunity to think, to dream, to love and to take risks. Strive for happiness and take control of your live.</p>
                        </blockquote>
                        <h3>Elsewhere</h3>
                        <ul class=\"social\">
                            <li> <a href=\"https://www.facebook.com/profile.php?id=100001566423057\"><i class=\"ion-social-facebook\"></i></a> </li>
                            <li> <a href=\"https://www.linkedin.com/in/georgi-mut/\"><i class=\"ion-social-linkedin\"></i></a> </li>
                        </ul>
                    </div>
                    <!-- /column -->

                </div>
                <!-- /.row -->

            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->


    </section>
    <!-- /#contact -->
{% endblock %}
";
    }
}

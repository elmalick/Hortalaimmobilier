<?php

/* HTLImmobilierBundle:Reservation:accueil.html.twig */
class __TwigTemplate_3e59984cd7104d17508f36858d02802920e8a5cf9c8b05d52466045f10d7ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b4811e548dcfd659774012d2e14ce7ef7c4a22e16760c189f142cbd9a4189ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4811e548dcfd659774012d2e14ce7ef7c4a22e16760c189f142cbd9a4189ab->enter($__internal_0b4811e548dcfd659774012d2e14ce7ef7c4a22e16760c189f142cbd9a4189ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        $__internal_27a334580d003ffebf09974a71cfa73a82b453358b238d46738518867c847967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a334580d003ffebf09974a71cfa73a82b453358b238d46738518867c847967->enter($__internal_27a334580d003ffebf09974a71cfa73a82b453358b238d46738518867c847967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Reservation:accueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <style>
        .container{
            height: auto;
            background-color: white;
        }
        .header{
            text-align: center;
            border-bottom: 3px solid gray;
            padding: 0px;
             color:gray;
            font-family: 'nettizen';
        }
        .navbar-nav{
            display: flex;list-style-type: none;            flex-wrap: wrap;

        }
        .nav-item{
            margin-right: 100px;
            border: 1px solid gray;
            padding: 10px;
            border-radius: 10px;
            background-color: gray;
        }
        .nav-link{
            text-decoration: none;
            color:white;
        }
        nav{
            padding-top: 10px;
        }
        .section{
            height: 370px;
            border-top: 3px solid gray;
            border-bottom: 3px solid gray;
            padding-top: 10px;
            margin-top: -10px;
            background-color: white;
        }
       
        .aside{
            display: flex;
            margin-top: 20px;
        } .aside1{
            display: flex;           
            margin-top: 20px;
        }
        .card-img-top{
            width: 300px;
            height: 200px;
        }
        .divfooter{
            width: auto;
        }
        footer{
            background-color: gray;
            color: white;
            display: flex;            flex-wrap: wrap;

            padding: 20px;
        }
        #api{
            width: 400px;
            height: 300px;
        }
        .afooter{
            color: white;
        }
        .btn-default{
            background-color: gray;
        }
      /*  .recherche{
            height: 100px;
            width: 900px;
            background-color: black;
            position: absolute;
            margin-top: -120px;
            margin-left: 30px;
           opacity: 0.6;
        }*/
        .imgsection{
            width: 980px;
            height: 280px;
        } 
        
input
        {
            border-radius: 0px;
        }
        .conec{
box-shadow: 10px 10px    15px; 
        margin-left: 300px;}
        </style>
        ";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 320
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 334
        echo "    </body>
</html>
";
        
        $__internal_0b4811e548dcfd659774012d2e14ce7ef7c4a22e16760c189f142cbd9a4189ab->leave($__internal_0b4811e548dcfd659774012d2e14ce7ef7c4a22e16760c189f142cbd9a4189ab_prof);

        
        $__internal_27a334580d003ffebf09974a71cfa73a82b453358b238d46738518867c847967->leave($__internal_27a334580d003ffebf09974a71cfa73a82b453358b238d46738518867c847967_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aba2702f941ccef001a12469cd81977292c6d22d4257a19b80017da17fe78163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba2702f941ccef001a12469cd81977292c6d22d4257a19b80017da17fe78163->enter($__internal_aba2702f941ccef001a12469cd81977292c6d22d4257a19b80017da17fe78163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77fae909a9d66220ae18ddd57e308b8afe190b7c281a59617100248e7efad90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fae909a9d66220ae18ddd57e308b8afe190b7c281a59617100248e7efad90e->enter($__internal_77fae909a9d66220ae18ddd57e308b8afe190b7c281a59617100248e7efad90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77fae909a9d66220ae18ddd57e308b8afe190b7c281a59617100248e7efad90e->leave($__internal_77fae909a9d66220ae18ddd57e308b8afe190b7c281a59617100248e7efad90e_prof);

        
        $__internal_aba2702f941ccef001a12469cd81977292c6d22d4257a19b80017da17fe78163->leave($__internal_aba2702f941ccef001a12469cd81977292c6d22d4257a19b80017da17fe78163_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0f0b2ec7497a5e239fc9b42c3e82da7b95cfa4603d38c7a51acd7fb4b4c0894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f0b2ec7497a5e239fc9b42c3e82da7b95cfa4603d38c7a51acd7fb4b4c0894->enter($__internal_b0f0b2ec7497a5e239fc9b42c3e82da7b95cfa4603d38c7a51acd7fb4b4c0894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b38969269728ee37dfca2a1f30d1b1755de2016c0cc8d7ac96cb157d2dcfeb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b38969269728ee37dfca2a1f30d1b1755de2016c0cc8d7ac96cb157d2dcfeb2->enter($__internal_0b38969269728ee37dfca2a1f30d1b1755de2016c0cc8d7ac96cb157d2dcfeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
          <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
   <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
 
";
        
        $__internal_0b38969269728ee37dfca2a1f30d1b1755de2016c0cc8d7ac96cb157d2dcfeb2->leave($__internal_0b38969269728ee37dfca2a1f30d1b1755de2016c0cc8d7ac96cb157d2dcfeb2_prof);

        
        $__internal_b0f0b2ec7497a5e239fc9b42c3e82da7b95cfa4603d38c7a51acd7fb4b4c0894->leave($__internal_b0f0b2ec7497a5e239fc9b42c3e82da7b95cfa4603d38c7a51acd7fb4b4c0894_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_16a9d8682353e628f85fa0bae0eb098a88ca1c2da9e668c68cb8562afd72af86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a9d8682353e628f85fa0bae0eb098a88ca1c2da9e668c68cb8562afd72af86->enter($__internal_16a9d8682353e628f85fa0bae0eb098a88ca1c2da9e668c68cb8562afd72af86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b513c43e11044ceb3a8f24c3b9cd8a3d831a61f14a357fd2c7a376005db85cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b513c43e11044ceb3a8f24c3b9cd8a3d831a61f14a357fd2c7a376005db85cf0->enter($__internal_b513c43e11044ceb3a8f24c3b9cd8a3d831a61f14a357fd2c7a376005db85cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "        
        <div class=\"container\">
            <header class=\"row header\">
                <h1>HORTALA IMMOBILIER</h1>
            </header>
                    <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
                        <ul class=\"navbar-nav\">
                          <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\" id=\"accueil\">Accueil</a>
                          </li>
                          <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Faire gerer</a>
                          </li>
                          <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Pricing</a>
                          </li>
                          <li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                          </li><li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\" id=\"connexionbuton\">Se connecter</a>
                          </li>
                        </ul>
                    </nav>
            <section class=\"row section\">

<div class=\"row connexion col-sm-6 card conec\" > <form>
    <div class=\"card-header\"><h2>Connecter vous</h2></div>
    <div class=\"card-body\"> <div class=\"form-group\">
        <label>email</label>
  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
    <input id=\"email\" type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
  </div></div><div class=\"form-group\">        <label>pwd</label>

  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
  </div></div>
<button class=\"btn btn-default\"  >conexion</button>  
    </div>
</form> 
                vous etes nouveau ?----><a href=\"#\">inscrivez vous</a> </div>
              <div id=\"myCarousel\" class=\"carousel slide col-sm-8\" data-ride=\"carousel\">

  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index.jpeg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"600px\" height=\"300px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index3.jpeg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"600px\" height=\"300px\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index4.jpeg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" class=\"baniere1\" width=\"600px\" height=\"300px\">
    </div>
  </div>
</div>   <div class=\"col-sm-4 recherche\">
      <form action=\"\" id=\"formreservation\" class=\"form-group\">
     <div class=\"form-group\">
  <label for=\"usr\">Type de bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"type\">
</div>
<div class=\"form-group\">
  <label for=\"lieu\">Localite:</label>
  <input type=\"password\" class=\"form-control\" id=\"lieu\">
</div>
  <p>
  <label for=\"amount\">Budget:</label>
  <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:red; font-weight:bold;\">
</p>
 
<div id=\"slider-range\"></div>
 
 
</form>    
                </div>
            </section>
           <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\"> 
                    <img class=\"card-img-top thumbnail\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div></div>
             <div class=\"col-lg-4 card\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index1.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                <div class=\"card-block\">
                                  <h4 class=\"card-title\">Card title</h4>
                                 <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                                </div></div>
             <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index3.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div>
                </div>


            </aside>
            <aside class=\"row aside\">
                <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div></div>
             <div class=\"col-lg-4 card \"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index1.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                <div class=\"card-block\">
                                  <h4 class=\"card-title\">Card title</h4>
                                 <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                                </div></div>
             <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index3.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div>
                </div>


            </aside><aside class=\"row aside\">
                <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div></div>
             <div class=\"col-lg-4 card\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index1.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                <div class=\"card-block\">
                                  <h4 class=\"card-title\">Card title</h4>
                                 <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                                </div></div>
             <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/index3.jpeg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div>
                </div>


                </aside>
    <footer class=\"row\">
                    <div class=\"col-lg-7 divfooter\"><img class=\"thumbnail image-responsive\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/api.png"), "html", null, true);
        echo "\" alt=\"Card image cap\" id=\"api\"></div>
                    <div class=\"col-lg-2 divfooter\">
                       <ul>
                        <li><a href=\"#\" class=\"afooter\">Facebook</a></li>
                        <li><a href=\"#\"  class=\"afooter\">linkedin</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 divfooter\">
      <form>
          <div class=\"form-group\">
                              <label>Email</label>

    <div class=\"input-group\">
      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
      <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
    </div></div>
               <div class=\"form-group\"> <label>Message</label>
    <div class=\"input-group\">
               
      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-comment\"></i></span>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>                   </div></div>
            <button type=\"submit\" class=\"btn btn-danger\">Submit</button>

  </form>
        </div>
    </footer>
            </div>


<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Demande de reservation</h4>
      </div>
      <div class=\"modal-body\" id=\"divreservation\">
 <form action=\"\" id=\"formreservation\">
  <div class=\"form-group\">
    <label for=\"prenom\">Prenom & nom:</label>
    <input type=\"text\" class=\"form-control\" id=\"prenom\">
  </div>
  <div class=\"form-group\">
    <label for=\"email\">Email:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"tel\">Telephone:</label>
    <input type=\"number\" class=\"form-control\" id=\"tel\">
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>       </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
    
</div>
        ";
        
        $__internal_b513c43e11044ceb3a8f24c3b9cd8a3d831a61f14a357fd2c7a376005db85cf0->leave($__internal_b513c43e11044ceb3a8f24c3b9cd8a3d831a61f14a357fd2c7a376005db85cf0_prof);

        
        $__internal_16a9d8682353e628f85fa0bae0eb098a88ca1c2da9e668c68cb8562afd72af86->leave($__internal_16a9d8682353e628f85fa0bae0eb098a88ca1c2da9e668c68cb8562afd72af86_prof);

    }

    // line 320
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72afc14d728ca7c46918a169f462b6648fbd03c1ee103d0a88d278b1d8bed85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72afc14d728ca7c46918a169f462b6648fbd03c1ee103d0a88d278b1d8bed85c->enter($__internal_72afc14d728ca7c46918a169f462b6648fbd03c1ee103d0a88d278b1d8bed85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e6347444d7c6932aae74b9c372f01fe00e8434080e763072ee9e21e23c262271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6347444d7c6932aae74b9c372f01fe00e8434080e763072ee9e21e23c262271->enter($__internal_e6347444d7c6932aae74b9c372f01fe00e8434080e763072ee9e21e23c262271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 321
        echo "        
                         <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"> </script>


         <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
         
        ";
        
        $__internal_e6347444d7c6932aae74b9c372f01fe00e8434080e763072ee9e21e23c262271->leave($__internal_e6347444d7c6932aae74b9c372f01fe00e8434080e763072ee9e21e23c262271_prof);

        
        $__internal_72afc14d728ca7c46918a169f462b6648fbd03c1ee103d0a88d278b1d8bed85c->leave($__internal_72afc14d728ca7c46918a169f462b6648fbd03c1ee103d0a88d278b1d8bed85c_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Reservation:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 328,  489 => 325,  483 => 322,  480 => 321,  471 => 320,  397 => 256,  384 => 246,  376 => 241,  368 => 236,  356 => 227,  348 => 222,  340 => 217,  327 => 207,  319 => 202,  311 => 197,  282 => 171,  275 => 167,  268 => 163,  214 => 111,  205 => 110,  187 => 8,  184 => 7,  175 => 6,  157 => 5,  145 => 334,  142 => 320,  140 => 110,  41 => 15,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
{% block stylesheets %}

          <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
   <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
 
{% endblock %}        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <style>
        .container{
            height: auto;
            background-color: white;
        }
        .header{
            text-align: center;
            border-bottom: 3px solid gray;
            padding: 0px;
             color:gray;
            font-family: 'nettizen';
        }
        .navbar-nav{
            display: flex;list-style-type: none;            flex-wrap: wrap;

        }
        .nav-item{
            margin-right: 100px;
            border: 1px solid gray;
            padding: 10px;
            border-radius: 10px;
            background-color: gray;
        }
        .nav-link{
            text-decoration: none;
            color:white;
        }
        nav{
            padding-top: 10px;
        }
        .section{
            height: 370px;
            border-top: 3px solid gray;
            border-bottom: 3px solid gray;
            padding-top: 10px;
            margin-top: -10px;
            background-color: white;
        }
       
        .aside{
            display: flex;
            margin-top: 20px;
        } .aside1{
            display: flex;           
            margin-top: 20px;
        }
        .card-img-top{
            width: 300px;
            height: 200px;
        }
        .divfooter{
            width: auto;
        }
        footer{
            background-color: gray;
            color: white;
            display: flex;            flex-wrap: wrap;

            padding: 20px;
        }
        #api{
            width: 400px;
            height: 300px;
        }
        .afooter{
            color: white;
        }
        .btn-default{
            background-color: gray;
        }
      /*  .recherche{
            height: 100px;
            width: 900px;
            background-color: black;
            position: absolute;
            margin-top: -120px;
            margin-left: 30px;
           opacity: 0.6;
        }*/
        .imgsection{
            width: 980px;
            height: 280px;
        } 
        
input
        {
            border-radius: 0px;
        }
        .conec{
box-shadow: 10px 10px    15px; 
        margin-left: 300px;}
        </style>
        {% block body %}
        
        <div class=\"container\">
            <header class=\"row header\">
                <h1>HORTALA IMMOBILIER</h1>
            </header>
                    <nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\">
                        <ul class=\"navbar-nav\">
                          <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\" id=\"accueil\">Accueil</a>
                          </li>
                          <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Faire gerer</a>
                          </li>
                          <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Pricing</a>
                          </li>
                          <li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                          </li><li class=\"nav-item\">
                            <a class=\"nav-link disabled\" href=\"#\" id=\"connexionbuton\">Se connecter</a>
                          </li>
                        </ul>
                    </nav>
            <section class=\"row section\">

<div class=\"row connexion col-sm-6 card conec\" > <form>
    <div class=\"card-header\"><h2>Connecter vous</h2></div>
    <div class=\"card-body\"> <div class=\"form-group\">
        <label>email</label>
  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
    <input id=\"email\" type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
  </div></div><div class=\"form-group\">        <label>pwd</label>

  <div class=\"input-group  col-xs-8\">
    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
  </div></div>
<button class=\"btn btn-default\"  >conexion</button>  
    </div>
</form> 
                vous etes nouveau ?----><a href=\"#\">inscrivez vous</a> </div>
              <div id=\"myCarousel\" class=\"carousel slide col-sm-8\" data-ride=\"carousel\">

  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"{{ asset('image/index.jpeg')}}\" alt=\"Los Angeles\" class=\"baniere1\" width=\"600px\" height=\"300px\">
    </div>

    <div class=\"item\">
      <img src=\"{{ asset('image/index3.jpeg')}}\" alt=\"Los Angeles\" class=\"baniere1\" width=\"600px\" height=\"300px\">
    </div>

    <div class=\"item\">
      <img src=\"{{ asset('image/index4.jpeg')}}\" alt=\"Los Angeles\" class=\"baniere1\" width=\"600px\" height=\"300px\">
    </div>
  </div>
</div>   <div class=\"col-sm-4 recherche\">
      <form action=\"\" id=\"formreservation\" class=\"form-group\">
     <div class=\"form-group\">
  <label for=\"usr\">Type de bien:</label>
  <input type=\"text\" class=\"form-control\" id=\"type\">
</div>
<div class=\"form-group\">
  <label for=\"lieu\">Localite:</label>
  <input type=\"password\" class=\"form-control\" id=\"lieu\">
</div>
  <p>
  <label for=\"amount\">Budget:</label>
  <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:red; font-weight:bold;\">
</p>
 
<div id=\"slider-range\"></div>
 
 
</form>    
                </div>
            </section>
           <aside class=\"row aside1\">
                <div class=\"col-lg-4 card div1\"> 
                    <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div></div>
             <div class=\"col-lg-4 card\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index1.jpeg')}}\" alt=\"Card image cap\">
                                <div class=\"card-block\">
                                  <h4 class=\"card-title\">Card title</h4>
                                 <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                                </div></div>
             <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index3.jpeg')}}\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div>
                </div>


            </aside>
            <aside class=\"row aside\">
                <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div></div>
             <div class=\"col-lg-4 card \"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index1.jpeg')}}\" alt=\"Card image cap\">
                                <div class=\"card-block\">
                                  <h4 class=\"card-title\">Card title</h4>
                                 <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                                </div></div>
             <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index3.jpeg')}}\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div>
                </div>


            </aside><aside class=\"row aside\">
                <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index.jpeg')}}\" alt=\"Card image cap\">
                    <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div></div>
             <div class=\"col-lg-4 card\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index1.jpeg')}}\" alt=\"Card image cap\">
                                <div class=\"card-block\">
                                  <h4 class=\"card-title\">Card title</h4>
                                 <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                                </div></div>
             <div class=\"col-lg-4 card div1\"> <img class=\"card-img-top thumbnail\" src=\"{{ asset('image/index3.jpeg')}}\" alt=\"Card image cap\">
                        <div class=\"card-block\">
                      <h4 class=\"card-title\">Card title</h4>
                     <p class=\"card-text\"><button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#myModal\">Reserver</button></p>
                    </div>
                </div>


                </aside>
    <footer class=\"row\">
                    <div class=\"col-lg-7 divfooter\"><img class=\"thumbnail image-responsive\" src=\"{{ asset('image/api.png')}}\" alt=\"Card image cap\" id=\"api\"></div>
                    <div class=\"col-lg-2 divfooter\">
                       <ul>
                        <li><a href=\"#\" class=\"afooter\">Facebook</a></li>
                        <li><a href=\"#\"  class=\"afooter\">linkedin</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-3 divfooter\">
      <form>
          <div class=\"form-group\">
                              <label>Email</label>

    <div class=\"input-group\">
      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
      <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
    </div></div>
               <div class=\"form-group\"> <label>Message</label>
    <div class=\"input-group\">
               
      <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-comment\"></i></span>
  <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>                   </div></div>
            <button type=\"submit\" class=\"btn btn-danger\">Submit</button>

  </form>
        </div>
    </footer>
            </div>


<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Demande de reservation</h4>
      </div>
      <div class=\"modal-body\" id=\"divreservation\">
 <form action=\"\" id=\"formreservation\">
  <div class=\"form-group\">
    <label for=\"prenom\">Prenom & nom:</label>
    <input type=\"text\" class=\"form-control\" id=\"prenom\">
  </div>
  <div class=\"form-group\">
    <label for=\"email\">Email:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"tel\">Telephone:</label>
    <input type=\"number\" class=\"form-control\" id=\"tel\">
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>       </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
    
</div>
        {% endblock %}
        {% block javascripts %}
        
                         <script src=\"{{ asset('js/script.js') }}\"> </script>


         <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
          <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
         
        {% endblock %}
    </body>
</html>
", "HTLImmobilierBundle:Reservation:accueil.html.twig", "/var/www/html/hortala/src/HTL/ImmobilierBundle/Resources/views/Reservation/accueil.html.twig");
    }
}

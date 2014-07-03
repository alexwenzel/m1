<?php
/**
 * M1 header, included in the main and detail files.  Also includes all menu information.
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<div id="dokuwiki__header">

    <div id="m1-header-left"> <!--Left hand mobile menu -->
        <a id="m1-menu-ltrig" href="#m1-menu-left"><i class="fa fa-lg fa-bars"></i></a>
    </div>

    <div id="m1-header-center"> <!--Logo and main center image -->
            <?php
            echo "<h1><a href=\"".DOKU_BASE."\" class=\"m1-logo\" accesskey=\"h\"";
             if (file_exists(DOKU_TPLINC."images/logo.png")){
            //user defined PNG
            echo "><img src=\"".DOKU_TPL."images/logo.png\" class=\"m1-imglogo\" alt=\"PaddlingABC\"/></a></h1>\n";
            }elseif (file_exists(DOKU_TPLINC."images/logo.gif")){
            //user defined GIF
            echo "><img src=\"".DOKU_TPL."images/logo.gif\" class=\"m1-imglogo\" alt=\"PaddlingABC\"/></a></h1>\n";
            }elseif (file_exists(DOKU_TPLINC."images/logo.jpg")){
            //user defined JPG
            echo "><img src=\"".DOKU_TPL."images/logo.jpg\" class=\"m1-imglogo\" alt=\"PaddlingABC\"/></a></h1>\n";
            }else{
            //default
            echo " class=\"m1-txtlogo\">".hsc($conf["title"])."</a></h1>\n";
            }
            ?>
        </div>

    <div id="m1-header-right"> <!--Right hand mobile menu -->
    </div>


    <!--NON-MOBILE MENU-->
    <div id="m1-menu"> <!--Menu displayed for tablet and desktop viewing, hidden on phone size -->
        <ul>
            <?php _tpl_toolsevent('usertools', array(
                'admin'     => tpl_action('admin', 1, 'li', 1),
                'profile'   => tpl_action('profile', 1, 'li', 1),
                'register'  => tpl_action('register', 1, 'li', 1),
                'login'     => tpl_action('login', 1, 'li', 1),
            )); ?>
            </ul>
        </div>

    <!-- BREADCRUMBS -->
    <?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
    <div class="breadcrumbs">
    <?php if($conf['youarehere']): ?>
    <div class="youarehere"><?php tpl_youarehere() ?></div>
    <?php endif ?>
    <?php if($conf['breadcrumbs']): ?>
    <div class="trace"><?php tpl_breadcrumbs() ?></div>
    <?php endif ?>
    </div>
    <?php endif ?>

</div><!-- /dokuwiki__header -->
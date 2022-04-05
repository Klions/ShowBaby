<?php
function active($currect_page){
    $currect_page = strtolower($currect_page);
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url || $currect_page.'.php' == $url || ($currect_page == 'início' && $url == null)){
        return 'current-menu-ancestor '; //class name in css 
    }
    return '';
}

function AddPage($nome_page){
    $nome_page = strtolower($nome_page);
    if($nome_page == 'início' || $nome_page == 'inicio'){
        echo '<li class="'.active($nome_page).'menu-item"><a href="/"><span>'.$nome_page.'</span></a></li>';
    }else{
        echo '<li class="'.active($nome_page).'menu-item"><a href="'.$nome_page.'.php"><span>'.$nome_page.'</span></a></li>';
    }
    
}

function breadcum(){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($url != '/' && $url != null){
        $url = substr($url, 0, strrpos($url, '.'));
       echo '<div class="top_panel_title top_panel_style_6 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
            <div class="content_wrap">
                <h1 class="page_title ">'.strtoupper($url).'</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="/">INÍCIO</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">'.strtoupper($url).'</span>
                </div>
            </div>
        </div>
       </div>';
    }
    
}



?>
<div class="top_panel_fixed_wrap"></div>
<header class="top_panel_wrap top_panel_style_4 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_4 top_panel_position_above">
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="columns_wrap">
                    <div class="contact_logo column-1_4">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="" class="logo_main" height="74" src="https://i.imgur.com/Ilkg5o3.png" width="121">
                                <img alt="" class="logo_fixed" height="74" src="https://i.imgur.com/Ilkg5o3.png" width="121">
                            </a>
                        </div>
                    </div>
                    <div class="menu_main_wrap column-3_4">
                        <div class="search_wrap search_style_fullscreen search_state_closed top_panel_icon">
                            <div class="search_form_wrap">
                                <form action="index.html" class="search_form" method="get" role="search">
                                    <button class="search_submit icon-search" title="Open search" type="submit"></button>
                                    <input class="search_field" name="s" placeholder="Search" type="text" value="">
                                    <a class="search_close icon-cancel"></a>
                                </form>
                            </div>
                        </div>
                        <nav class="menu_main_nav_area menu_hover_fade">
                            <ul id="menu_main" class="menu_main_nav">
                                <?php
                                AddPage('início');
                                AddPage('Lojas');
                                AddPage('Contato');
                                ?>
                                <!--
                                <li class="menu-item"><a href="/"><span>Início</span></a></li>
                                <li class="menu-item"><a href="lojas.php"><span>Lojas</span></a></li>
                                <li class="menu-item"><a href="contato.php"><span>Contato</span></a></li>
-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="index.html">
                <img alt="" class="logo_main" height="74" src="images/logo.png" width="121">
            </a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">
            Close
        </div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_mobile" class="menu_main_nav">
                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="#"><span>Home</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item current-menu-item current_page_item"><a href="index.html"><span>Home 1</span></a></li>
                            <li class="menu-item"><a href="home-2.html"><span>Home 2</span></a></li>
                            <li class="menu-item"><a href="home-3.html"><span>Home 3</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="about.html"><span>About Us</span></a></li>
                    <li class="menu-item menu-item-has-children"><a href="#"><span>Pages</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="services.html"><span>Our Services</span></a></li>
                            <li class="menu-item"><a href="team.html"><span>Our Team</span></a></li>
                            <li class="menu-item"><a href="single-team.html"><span>Expert&#8217;s Profile</span></a></li>
                            <li class="menu-item"><a href="contacts.html"><span>Contact Us</span></a></li>
                            <li class="menu-item"><a href="faq.html"><span>FAQ’s</span></a></li>
                            <li class="menu-item"><a href="404.html"><span>Page 404</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a><span>Blog</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="blog-sidebar.html"><span>Classic With Sidebar</span></a></li>
                            <li class="menu-item"><a href="blog.html"><span>Classic Without Sidebar</span></a></li>
                            <li class="menu-item"><a href="blog-masonry.html"><span>Masonry</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a><span>Elements</span></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="typography.html"><span>Typography</span></a></li>
                            <li class="menu-item"><a href="shortcodes.html"><span>Shortcodes</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="shop.html"><span>Shop</span></a></li>
                </ul>
            </nav>
            <div class="search_wrap search_style_ search_state_fixed search_ajax">
                <div class="search_form_wrap">
                    <form action="index.html" class="search_form" method="get" role="search">
                        <button class="search_submit icon-search" title="Start search" type="submit"></button>
                        <input class="search_field" name="s" placeholder="Search" type="text" value="">
                    </form>
                </div>
                <div class="search_results widget_area scheme_original">
                    <a class="search_results_close icon-cancel"></a>
                    <div class="search_results_content"></div>
                </div>
            </div>
            <div class="login">
                <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
            </div>
            <div class="login">
                <a href="#popup_registration" class="popup_link popup_register_link icon-pencil">Register</a>
            </div>
        </div>
        <div class="panel_bottom"></div>
    </div>
    <div class="mask"></div>
</div>

<?php
breadcum();
?>
<?php
/* pageId */
$pageId = 9;

/* iniciar sessão e importar classes */

include 'head/session_start.php';
include 'head/xml.php';
include 'head/mvc.php';
/* head */
include 'head/DOCTYPE.php';
include 'head/meta.php';
//include 'head/title_dynamic.php';
//include 'head/css_dynamic';
include 'head/category_creator.php';
include 'head/w3.css.php';
include 'head/bootstrap.php';
include 'head/close.php';
/* body */
include 'header/start.php';
include 'bar/sidebar.php';
include 'bar/navbar.php';
include 'content/category_menu_content.php';
include dirname(__DIR__) . '/js/sidebar.php';
include dirname(__DIR__) . '/js/dynamic_table_order.php';
//include 'footer/footer.php';
include 'footer/close.php';

?>

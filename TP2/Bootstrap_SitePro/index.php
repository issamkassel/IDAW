<?php
require_once('template_header.php');
$currentPageId = 'accueil';
if(isset($_GET['page'])) {
$currentPageId = $_GET['page'];
}
$currentlang = 'fr';
if(isset($_GET['lang'])) {
$currentlang = $_GET['lang'];
}


require_once('template_menu.php');


?>
<?php
renderMenuToHTML($currentPageId,$currentlang);
?>
<section class="corps">
<?php
$pageToInclude = $currentlang."/".$currentPageId.$currentlang . ".php";
if(is_readable($pageToInclude))
    require_once($pageToInclude);
else
    require_once("error.php");
?>
</section>
<?php
require_once('template_footer.php');
?>
 


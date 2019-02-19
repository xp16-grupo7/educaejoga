<?php include('includes/layout/header.php'); ?>


<?php 
    get_template_part("includes/sections/main");
    get_template_part("includes/sections/about");
    /*get_template_part("includes/sections/participants");*/
    get_template_part("includes/sections/call");
    get_template_part("includes/sections/location");
    get_template_part("includes/sections/who-we-are");
    get_template_part("includes/sections/call-footer"); 
?>

<?php include('includes/layout/footer.php'); ?>
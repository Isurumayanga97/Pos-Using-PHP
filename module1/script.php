<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 6/19/2019
 * Time: 12:44 PM
 */
?>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/myjs.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

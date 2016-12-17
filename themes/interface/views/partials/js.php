<script src="<?php echo theme_locations();?>js/libs/jquery-2.2.4.min.js"></script>
<script src="<?php echo theme_locations();?>js/libs/bootstrap.min.js"></script>
<script src="<?php echo theme_locations();?>js/libs/owl.carousel.min.js"></script>
<script src="<?php echo theme_locations();?>js/libs/jquery.meanmenu.js"></script>
<script src="<?php echo theme_locations();?>js/libs/jquery.syotimer.js"></script>
<script src="<?php echo theme_locations();?>js/libs/parallax.min.js"></script>
<script src="<?php echo theme_locations();?>js/libs/jquery.waypoints.min.js"></script>
<script src="<?php echo theme_locations();?>js/custom/main.js"></script>
<script>
    jQuery(document).ready(function () {
        $('#time').syotimer({
            year: 2016,
            month: 12,
            day: 7,
            hour: 7,
            minute: 7,
        });
    });
</script>

<script type="text/javascript">
setInterval("hide()", 6000);
function hide(){
   $("#hide").hide(1000);
    // alert('tes');
}
</script>
<div class="row main-section" id="events" style="margin: 30px;">
	<?php
    $SelSql = "SELECT * FROM `tblevents`";
    $res = mysqli_query($connect, $SelSql);
    $num_of_rows = mysqli_num_rows($res);
    if ($num_of_rows > 0) {
	    // output data of each row
    	while ($num_of_rows > 0) {
		    $num_of_rows--;
		    $r = mysqli_fetch_assoc($res);
		    include('templates/event.php');
	    }
    } else {
	    echo '<div class="container">No Events Available</div>';
    }
    ?>
</div>
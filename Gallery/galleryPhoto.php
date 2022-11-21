<div class="container-fluid">
    <?php
    include "../admin.php";
    include "../header.php";
    $start = 0;
    $end = 1;
    $flag = 0;
    $x = showPhoto();
    for ($i = 0; $i < mysqli_num_rows($x); $i++) {
        if ($start % 4 == 0) {
            $flag = 1;
            echo "<div class='row'>";
        }
        $rs = mysqli_fetch_row($x);
        echo "<div class='col-md-3 col-lg-3 col-sm-6 col-xs-12'>";
        echo "<p style='font-size:10px;'>id is - $rs[0] <br>";
        echo "$rs[1] <br>";
        echo "<img src=fetchPhoto.php?n=$rs[0] class='img-thumbnail' style='height:180px;width:100%;'>";
        echo "</p></div>";
        if ($end % 4 == 0) {
            echo "</div>";
            $flag = 0;
        }
        $start++;
        $end++;
    }
    if ($flag == 1)
        echo "</div>";
    ?>
</div>
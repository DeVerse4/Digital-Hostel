<?php
include 'header.php';
?>
<div class="container mt-3" style="overflow:auto;">
    <table class="table table-striped" style="height: 50vh;">
        <tr>
            <th colspan="9">
                <h3 class="h3-responsive font-weight text-center">Rooms</h3>
            </th>
        </tr>
        <tr>
            <th>Room No</th>
            <th>College Id</th>
            <th>Name</th>
            <th>Room type</th>
            <th>Floor</th>
            <th>Wing</th>
            <th>Allotment Date</th>
        </tr>
        <?php

        $x = getAllRooms();
        while ($row = mysqli_fetch_array($x)) {
            echo "<tr>";
            echo "<td>" . $row['roomno'] . "</td>";
            echo "<td>" . $row['collegeid'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['roomtype'] . "</td>";
            echo "<td>" . $row['floor'] . "</td>";
            echo "<td>" . $row['wing'] . "</td>";
            echo "<td>" . $row['allotmentdate'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
<?php
include_once 'footer.php';
?>
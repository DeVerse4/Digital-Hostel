<?php

?>

<div class="container mt-3" style="overflow:auto;">
    <table class="table table-striped" style="height: 50vh;">
        <tr>
            <th colspan="9">
                <h3 class="h3-responsive font-weight text-center">Registered Student</h3>
            </th>
        </tr>
        <tr>
            <th>S.No</th>
            <th>College Id</th>
            <th>Team</th>
            <th>No. of members</th>
            <th>Event</th>
            <th>Category</th>
            <th>Phone No.</th>
            <th>Registeration Date</th>
        </tr>
        <?php

        $x = eventStudent();
        while ($row = mysqli_fetch_array($x)) {
            echo "<tr>";
            echo "<td>" . $row['slno'] . "</td>";
            echo "<td>" . $row['collegeid'] . "</td>";
            echo "<td>" . $row['team'] . "</td>";
            echo "<td>" . $row['members'] . "</td>";
            echo "<td>" . $row['eventname'] . "</td>";
            echo "<td>" . $row['catagory'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['reg_date'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
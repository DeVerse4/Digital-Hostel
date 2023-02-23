<?php
include "header.php";
// include "admin.php";
?>
<table class="table table-striped table-hover">
  <tr>
    <th>Sno </th>
    <th>Name</th>
    <th>Userid</th>
    <th>Mail id</th>
    <th>Mobile</th>
    <th>Feedback Message</th>
    <th>Feedback Date</th>
    <th>Action</th>
  </tr>
  <?php
  $x = getFeedbackReport();
  for ($i = 0; $i < mysqli_num_rows($x); $i++) {
    echo "<tr>";
    $rs = mysqli_fetch_row($x);
    foreach ($rs as $n)
      echo "<td>$n</td>";
    echo "<td><a href=DeleteFeedback.php?n=$rs[0]>DELETE</a></td>";
    echo "</tr>";

  }
  ?>
</table>
<?php
if (isset($_GET["s"]))
  echo "Ur Feedback Successfully Deleted...";
include "footer.php";
?>
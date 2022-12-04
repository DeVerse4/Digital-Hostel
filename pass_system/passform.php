<?php
include "../header.php";
$id = $_SESSION['id'];
if (isset($_GET['pr'])) 
    include 'pendingRequest.php?passid=' . $_GET['pr'];
include_once "../admin.php";
?>
    <style>
      .lbl {text-align:right;}
    </style>
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="pass_submit.php" method="post">
           <table class="table table-stripped table-hover">
             <tr>
             <td colspan=4 style="text-align:center;font-size:20px;">Pass Generation Form</td>
             </tr>
             <tr>
               <td class="lbl">Name</td>
               <td><input type="text" id="inputEmail" name="name" class="form-control" value='<?php echo $name; ?>'
                        placeholder="Name" readonly></td>
               <td class="lbl">College ID</td>
               <td><input type="text" id="inputcollegeid" name="collegeid" class="form-control"
                        value="<?php echo $id; ?>" readonly></td>
             </tr>
             <tr>
                <td class="lbl">Room No</td>
                <td><input type="text" id="inputName" name="room_no" value="<?php echo getRoom($id); ?>" readonly class="form-control" placeholder="Room Number"
                        required autofocus>
                </td>
                <td class="lbl">Phone Number</td>
                <td><input type="text" id="inputName" name="phone_no" class="form-control" placeholder="Phone Number" value="<?php echo getMobile($id); ?>"
                        required autofocus>
                </td>
             </tr>
             <tr>
                <td class="lbl">Destination Address</td>
                <td><input list="cty" name="destination" class="form-control"
                        placeholder="Destination Address" required>
                <datalist id="cty">
                <?php
                   $x = getCity();
                   for($i=0;$i<mysqli_num_rows($x);$i++)
                   {
                      $r = mysqli_fetch_row($x);
                      echo "<option value='$r[0]'>";
                   }                   
                ?>
                </datalist>
                </td>
                <td class="lbl">Purpose</td>
                <td><input type="text" id="inputPassword" name="purpose" class="form-control" placeholder="Purpose"
                        required>
                </td>
             </tr>
             <tr>
                <td class="lbl">Out Date</td>
                <td><input type="date" id="outd" name="outdate" class="form-control" required>
                </td>
                <td class="lbl">Return Date</td>
                <td><input type="date" id="rdate" name="returndate" class="form-control" required>
                </td>
            </tr>
             <tr>
             <td colspan=4 style="text-align:center">
              <button class="btn btn-md btn-primary btn-block" type="submit" name="submit">Generate Pass</button>
             </td>
             <?php if(isset($_GET["pa"])) echo "<tr><td colspan=4>Pass request send to Admin for Approve</td></tr>"; ?>
            </tr>
           </form>
      </table>
    </div>
  </div>


<?php include '../footer.php'; ?>
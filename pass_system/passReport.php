<?php
include '../header.php';
// include '../admin.php';
?>
<div class="">

    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col xs-12">
            <div class="section-title">
                <h2 class="h1-responsive font-weight-bold">Gate Pass report</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="active nav-item"><a class="active nav-link" data-toggle="tab" href="#home">Pending</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Approved</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Denied</a></li>
        </ul>
        <div class="tab-content col-md-12">
            <div id="home" class="tab-pane fade-in active">
                <?php include 'pendingpasses.php' ?>
            </div>
            <div id="menu1" class="tab-pane fade">
                <?php include 'approvedpass.php' ?>

            </div>
            <div id="menu2" class="tab-pane fade">
                <?php include 'deniedpasses.php' ?>

            </div>
        </div>
    </div>
</div>
<?php include '../footer.php' ?>
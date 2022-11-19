<?php
ob_start();
include("../header.php");
$buffer = ob_get_contents();
ob_end_clean();

$title = "Gallery | Arya Bhatta Hostel";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer;
?>
<div class="container-fluid" style='background: #f1f2f6'>
    <!--Heading starts-->
    <div class="container-fluid py-5">
        <div class="col-md-12 col-sm-12 col xs-12">
            <div class="page-title">
                <h1 class="h1-responsive font-weight-bold">Events and Gallery</h1>
            </div>
        </div>
    </div>
    <!--Heading ends-->


    <!--Filter bar starts-->
    <div class="filter-bar">

        <div class="filter_nav">
            <ul class="filters nav justify-content-center ">
                <li class="nav-item ml-1 mb-3">
                    <span class="item active" data-name="all">All</span>
                </li>
                <li class="nav-item ml-1 mb-3">
                    <span class="item" data-name="premise">Premise</span>
                </li>
                <li class="nav-item ml-1 mb-3">
                    <span class="item" data-name="spandan">Spandan</span>
                </li>
                <li class="nav-item ml-1 mb-3">
                    <span class="item" data-name="hpl">HPL</span>
                </li>
                <li class="nav-item ml-1 mb-3">
                    <span class="item" data-name="dj">DJ Night</span>
                </li>
                <li class="nav-item ml-1 mb-3">
                    <span class="item" data-name="festival">Festival</span>
                </li>
            </ul>
        </div>
        <!--        <div class="filter_nav">
                    <div class="filters">
                    </div>
                </div>-->
        <!-- filter images-->
        <div class="gallery">
            <div class="image" data-name="dj"><span><img src="Hostel images/dj1.jpg" alt=""></span></div>
            <div class="image" data-name="festival"><span><img src="Hostel images/festivals1.jpg" alt=""></span></div>
            <div class="image" data-name="hpl"><span><img src="Hostel images/hpl1.jpg" alt=""></span></div>
            <div class="image" data-name="spandan"><span><img src="Hostel images/spandan1.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Hostel images/premise1.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Hostel images/room1.jpg" alt=""></span></div>
            <div class="image" data-name="hpl"><span><img src="Hostel images/hpl2.jpg" alt=""></span></div>
            <div class="image" data-name="dj"><span><img src="Hostel images/sj2.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Hostel images/room2.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Hostel images/premise3.jpg" alt=""></span></div>
            <div class="image" data-name="spandan"><span><img src="Hostel images/spandan3.jpg" alt=""></span></div>
            <div class="image" data-name="spandan"><span><img src="Hostel images/spandan2.jpg" alt=""></span></div>
            <div class="image" data-name="premise"><span><img src="Hostel images/premise2.jpg" alt=""></span></div>
        </div>
    </div>
    <!--Filter bar ends-->

    <!-- full screen image preview -->
    <div class="preview-box">
        <div class="details">
            <span class="title">Image Catagory: <p>Not defined</p></span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box">
            <img src="Hostel images/hpl2.jpg" alt="">
        </div>
    </div>
    <div class="shadow"></div>
</div>

<?php
include '../footer.php';
?>
<script src="/Digital-Hostel/Scripts/filter-img.js"></script>

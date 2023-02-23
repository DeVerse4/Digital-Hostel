<?php
ob_start();
include_once("../header.php");
include_once("../admin.php");
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
    <?php
    if ($id == "") {
        echo '';
    } else {
        $collegeid = $_SESSION["id"];
        echo '
            <div class="container mb-5 uploadForm" id="uploadForm">
            <div class="row col-md-12">
                <div class="col-md-3 col-sm-2 col-xm-2">
                </div>
                <div class="col-md-6 col-sm-8 col-xm-8">
                    <h3 class="text-center h3-responsive"></h3>
                    <form action="uploadPhotoAction.php" method="post" enctype="multipart/form-data">
                        <div class="form-section" id="updForm">
                            <div class="form-elements">
                                <label for="tag" class="input-label">Picture tag</label>
                                <select class="form-select form-select-lg" name="photo_tag"
                                    aria-label="Default select example">
                                    <option selected>Select a tag</option>
                                    <option value="dj">DJ Night</option>
                                    <option value="festival">Festival</option>
                                    <option value="hpl">HPL</option>
                                    <option value="spandan">Spandan</option>
                                    <option value="premise">Premise</option>
                                </select>
                            </div>
                            <div class="form-elements uploadFile">
                                <label for="photo" class="input-label">Upload: </label>
                                <input type="file" id="galleryPhoto" name="photo" class="">
                            </div>
                        </div>
                        <div class="btns">
                            <button name="cancel" type="button" class="btn btn-md btn-outline-danger cancelBtn">Cancel</button>
                            <button class="btn btn-md btn-primary" id="uploadBtn" type="submit">Upload a
                                Picture</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-2 col-xm-2">
                </div>
            </div>
        </div>';
    }
    ?>
    <!--Filter bar starts-->
    <?php
    if ($id == "") {
        echo '<div class="filter-bar">'
            . '<div class="container filter_nav">';
    } else {
        $collegeid = $_SESSION["id"];
        echo '<div class="container-fluid filter-bar">'
            . '<div class="container filter_nav d-flex justify-content-between align-items-center">';
    }
    ?>
    <div>
        <ul class="filters nav justify-content-center ">
            <li class="nav-item ml-1 pb-3">
                <span class="item active" data-name="all">All</span>
            </li>
            <li class="nav-item ml-1 pb-3">
                <span class="item" data-name="premise">Premise</span>
            </li>
            <li class="nav-item ml-1 pb-3">
                <span class="item" data-name="spandan">Spandan</span>
            </li>
            <li class="nav-item ml-1 pb-3">
                <span class="item" data-name="hpl">HPL</span>
            </li>
            <li class="nav-item ml-1 pb-3">
                <span class="item" data-name="dj">DJ Night</span>
            </li>
            <li class="nav-item ml-1 pb-3">
                <span class="item" data-name="festival">Festival</span>
            </li>
        </ul>
    </div>
    <?php
    if ($id == "") {
        echo '';
    } else {
        $collegeid = $_SESSION["id"];
        echo '<div class="uploadBtn nav-item ml-1 mb-3">
                <button class="item">Upload Photo</button>
            </div>';
    }
    ?>

</div>

<!-- filter images-->
<div class="gallery">
    <?php
    $x = showPhoto();
    for ($i = 0; $i < mysqli_num_rows($x); $i++) {
        $rs = mysqli_fetch_row($x);
    ?>
    <div class="image" data-name=<?php echo "$rs[3]"; ?>>
        <span class="d-flex flex-column justify-content-between border-primary">
            <img src=<?php echo "fetchPhoto.php?n=$rs[0]"; ?> style="height:300px;" class="img img-thumbnail" id="myImg" alt="<?php echo "$rs[1]"; ?>">
            <!-- <?php
        if ($id == "") {
            echo '';
        } else {
            $collegeid = $_SESSION["id"];
            echo "<div class='d-flex flex-row justify-content-between p-2'>
                        <i class='fa-regular fa-pen-to-square'></i>
                        <i class='fa-solid fa-trash'></i>
                    </div>";
        }
            ?> -->
        </span>
    </div>
    <?php
    }
    ?>
</div>
</div>
<!--Filter bar ends-->

<!-- full screen image preview -->
<div class="preview-box">
    <div class="details">
        <span class="title">Image Catagory: <p>Not defined</p></span>
        <span class="name">Credit: <b>Not defined</b></span>
        <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
        <img src="Hostel images/hpl2.jpg" alt="">
    </div>
</div>
<div class="shadow"></div>
</div>

<?php
include_once '../footer.php';
?>
<script src="/Digital-Hostel/Scripts/filter-img.js"></script>
<script src="/Digital-Hostel/Scripts/script.js"></script>
<script>
    const uploadBtn = document.querySelector('.uploadBtn');
    const cancelBtn = document.querySelector('.cancelBtn');
    const uploadForm = document.querySelector('#uploadForm');
    uploadBtn.addEventListener('click', () => {
        uploadForm.style.display = 'block';
        uploadForm.style.pointerEvents = 'auto';
    });
    cancelBtn.addEventListener('click', () => {
        uploadForm.style.display = 'none';
        uploadForm.style.pointerEvents = 'none';
    });
</script>
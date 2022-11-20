<<<<<<< HEAD:Gallary/gallery.php
<?php
include 'gallery_header.php';
include '../header.php';
?>
<!--Heading starts-->
<h1 class="heading">
    Events and Gallery
</h1>
<!--Heading ends-->

<!--Filter bar starts-->
<div class="filter-bar">
    <div class="filter_nav">
        <div class="filters">
            <span class="item active" data-name="all">All</span>
            <span class="item" data-name="premise">Premise</span>
            <span class="item" data-name="spandan">Spandan</span>
            <span class="item" data-name="hpl">HPL</span>
            <span class="item" data-name="dj">DJ Night</span>
            <span class="item" data-name="festival">Festival</span>
        </div>
    </div>
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
        <span class="icon fas fa-times">x</span>
    </div>
    <div class="image-box">
        <img src="Hostel images/hpl2.jpg" alt="">
    </div>
</div>
<div class="shadow"></div>
<script>
    //selecting all required elements
=======
//Start of Gallery JS
//selecting all required elements
>>>>>>> faaca54efdba986ceb011be03876b4998c963665:Scripts/filter-img.js
    const filterItem = document.querySelector(".filters");
    const filterImg = document.querySelectorAll(".image");

    window.onload = () => { //once window loaded
        filterItem.onclick = (selectedItem) => { // when user clicked on filterItem div
            if (selectedItem.target.classList.contains("item")) { //if user click element has .item class
                filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is the first element
                selectedItem.target.classList.add("active");
                let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of the user selected item and storing n a filtername variable
                console.log(filterName);
                filterImg.forEach((image) => {
                    let filterImages = image.getAttribute("data-name"); // getting image data-name value
                    //if user selected item data-name value is equal to image data-name value
                    // or user selected item data-name value is equal to "all"
                    if ((filterImages == filterName) || filterName == "all") {
                        image.classList.remove("hide");
                        image.classList.add("show");
                    } else {
                        image.classList.add("hide");
                        image.classList.remove("show");
                    }
                });
            }
        };
        for (let index = 0; index < filterImg.length; index++) {
            filterImg[index].setAttribute("onclick", "preview(this)"); // adding onclick attribute in all available image
        }
    };
    //selecting all required elements
    const previewBox = document.querySelector(".preview-box"),
        previewImg = previewBox.querySelector("img"),
        categoryName = previewBox.querySelector(".title p"),
        closeIcon = previewBox.querySelector(".icon"),
        shadow = document.querySelector(".shadow");

    //fullscreen image preview function
    function preview(element) {
        //once user click on image then remove the scrollbar of body, so user can't scroll
        document.querySelector("body").style.overflow = "hidden";
        let selectedPrevImg = element.querySelector("img").src; //getting user clicked img source link and store it
        let selectedImgCategory = element.getAttribute("data-name"); // getting user clicked data name value
        categoryName.textContent = selectedImgCategory; // passing data-name value to catagory value
        previewImg.src = selectedPrevImg; // passing user click img source in preview source
        previewBox.classList.add("show"); // show the preview box
        shadow.classList.add("show"); // show the grey color background
        closeIcon.onclick = () => { // if user click on cross icon
            previewBox.classList.remove("show"); //hide the preview box
            shadow.classList.remove("show"); // show the preview box
            document.querySelector("body").style.overflow = "scroll"; /// show the scroll feature
        }
    }
    
    //End of Gallery JS
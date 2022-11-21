//Start of Gallery JS
//selecting all required elements
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
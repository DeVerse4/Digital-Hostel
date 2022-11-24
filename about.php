<?php include 'header.php'; ?>
<style>
    .overlapText {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .overlapText::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
    }

    .overlapText h1 {
        font-size: 3rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.2rem;
        margin-bottom: 1rem;
        z-index: 1;
    }
    .aboutPhoto {
        width: 50%;
        height: 50%;
        object-fit: cover;
        box-shadow: -10px 10px 0px #4B49AC;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="image"
                style="height: 500px; width: 100%; background-image:url(./images/hostel1.png); background-repeat: no-repeat; background-size: cover;">
                <div class="overlapText f-flex justify-content-center align-items-center" style="padding-top: 15%;">
                    <h1 class="text-center text-white font-weight-bold">About Us</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="color: #4B49AC;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5 mb-5">
                        <p class="text-left lead">
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget
                            sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu
                            sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in
                            dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.
                                Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id
                                bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec,
                            posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit.
                                Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                        </p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center flex-column">
                        <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg"
                            class="rounded aboutPhoto" />
                            <div class="pt-4">
                                <h3>Warden</h3>
                            </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5 mb-5">
                        <p class="lead text-left">
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget
                            sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu
                            sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in
                            dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.
                                Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id
                                bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec,
                            posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit.
                                Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                        </p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center flex-column">
                        <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg"
                            class="rounded aboutPhoto" />
                            <div class="pt-4">
                                <h3>Warden</h3>
                            </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>
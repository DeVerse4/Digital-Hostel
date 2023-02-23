<?php include "header.php"; ?>
<script>
    function validateMe() {
        if (document.getElementById("mob").value.length != 10) {
            alert("Sorry Mobile Number should be Min 10 Digit, Plz Enter valid Mobile No");
            return false;
        } else if (document.getElementById("msg").value.length <= 15) {
            alert("Sorry Feedback Message should be Min 15 Charactors, Plz Enter valid Feedback message");
            return false;
        } else return true;
    }
</script>
<style>
    .fas {
        margin-right: 5px;
    }

    .formDiv {
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    }
    .feedback h2 {
        text-align: center;
        color: #000;
        font-size: 5rem;
        font-weight: 700;
        margin-bottom: 30px;
        letter-spacing: 4px;
        text-transform: uppercase;
        text-shadow: 5px 5px 0 rgba(0, 0, 0, 0.5);
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="col-md-12 col-sm-12 col xs-12">
                    <div class="section-title feedback">
                        <h2 class="h1-responsive font-weight-bold">feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row m-3">
                <div class="col-md-1">
                </div>
                <div class="col-md-5 container d-flex flex-column justify-content-center mb-5" style="gap: 15px;">
                    <address>
                        <i class="fas fa-map"></i>
                        <strong>
                            Address:
                        </strong><br>
                        <p class="ml-4">
                            Vishveshwarya Group of Institutions (VGI)<br />
                            Ghaziabad-Bulandshahar G.T. Road, NH-91 Greater Noida<br />
                            Phase-II,Gautam Buddha Nagar, UP-203207<br />
                        </p>
                    </address>
                    <div>
                        <div class="d-flex" style="gap: 10px;">
                            <i class="fas fa-phone"></i>
                            <b>For Enquiry: </b>
                            <p>+91 9507531556</p>
                        </div>
                        <div class="d-flex" style="gap: 10px;">
                            <i class="fas fa-phone"></i>
                            <b>Office Number: </b>
                            <p>+91 9507531556</p>
                        </div>
                        <div class="d-flex" style="gap: 10px;">
                            <i class="fas fa-phone"></i>
                            <b>For Query: </b>
                            <p>+91 9507531556</p>
                        </div>
                        <div class="d-flex" style="gap: 10px;">
                            <i class="fas fa-phone"></i>
                            <b>For Advertisement: </b>
                            <p>+91 9507531556</p>
                        </div>
                        <div class="d-flex" style="gap: 10px;">
                            <i class="fas fa-envelope"></i>
                            <b>Email: </b>
                            <a href="mailto:gyan_kr@yahoo.com">gyan_kr@yahoo.com</a>
                        </div>
                        <div class="d-flex" style="gap: 10px;">
                            <i class="fas fa-globe"></i>
                            <b>Website: </b>
                            <a href="http://www.vgi.ac.in">www.vgi.ac.in</a>
                            <a href="https://vgihostel.live" target="_blank">VGI Hostel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="container formDiv">
                        <form action="FeedbackAction.php" method="post" onsubmit="return validateMe()">
                            <div class="form-group">
                                <label class="form-label font-weight-bold" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label font-weight-bold" for="mob">Email</label>
                                <input type="email" class="form-control" id="email" name="mailid" placeholder="Enter Mobile" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label font-weight-bold" for="mob">Mobile</label>
                                <input type="text" class="form-control" id="mob" name="mobile" placeholder="Enter Mobile" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label font-weight-bold" for="mob">Message</label>
                                <textarea name="msg" class="form-control" style="resize: none;" id="msg" rows="4" placeholder="Your Thaught">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                        <p>
                            <?php
                            if (isset($_SESSION['status'])) {
                                echo $_SESSION['status'];
                                unset($_SESSION['status']);
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
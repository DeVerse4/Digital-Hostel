<?php
include_once '../header.php';
$id = $_SESSION['id'];
?>
<style>
    body {
        background-color: #f5f7ff;
    }

    .dashNav {
        position: sticky;
        top: 110px;
        z-index: 1;
    }

    .dashNav a {
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #4B49AC;
        text-align: justify;
        font-size: 18px;
        font-weight: 600;
    }

    .dashNav a img {
        color: #4B49AC;
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .dashNav a:hover {
        background-color: #4B49AC;
        color: #fff;
    }

    .dashNav a.active {
        background-color: #4B49AC;
        color: #fff;
    }

    .studentProfile {
        background-color: #ffffff;
        padding: 20px 10px;
        border-radius: 10px;
    }

    .studentProfile form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .studentProfile form .inputFlds {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .studentProfile form h1 {
        font-size: 30px;
        font-weight: 600;
        color: #4B49AC;
        text-align: center;
        margin-bottom: 20px;
    }

    .studentProfile form label {
        display: block;
        font-weight: bold;
        font-size: 18px;
        color: #4B49AC;
        margin-bottom: 10px;
    }

    .studentProfile form input,
    .studentProfile form select {
        width: 100%;
        border: 1px solid #4B49AC;
        border-radius: 10px;
        background-color: transparent;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .studentProfile form textarea {
        width: 100%;
        border: 1px solid #4B49AC;
        border-radius: 10px;
        background-color: transparent;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 10px;
        resize: none;
    }

    .studentProfile form .btns {
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .studentProfile form button {
        width: 100px;
        height: 40px;
        border: none;
        border-radius: 10px;
        background-color: #4B49AC;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
    }

    .studentProfile form button:hover {
        background-color: #fff;
        color: #4B49AC;
        border: 1px solid #4B49AC;
    }
</style>
<div class="container-fluid">
    <div class="row m-3">
        <div class="col-md-12">
            <div class="row border bg-light" style="height: 10vh;">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <h3 class="text-uppercase font-weight-bold">
                        Dashboard
                    </h3>
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-md-2 text-center shadow-sm rounded p-4" style="background-color:#ffffff; height: auto;">
                    <div class="dashNav mt-3 d-flex flex-column align-items-start font-weight-bold"
                        style="border-color:#4B49AC;">
                        <a href="studentProfile" class="active w-100 mt-2 p-2 border rounded text-decoration-none">
                            Profile
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentDashboard" class=" w-100 mt-2 p-2 border rounded text-decoration-none">
                            Academics
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>

                        <a href="studentAttendance" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Attendance
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentResult" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Result
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentFees" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Fees
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentNotice" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Notice
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentComplaint" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Complaint
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentFeedback" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Feedback
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                        <a href="studentLogout" class="w-100 mt-2 p-2 border rounded text-decoration-none">
                            Logout
                            <img src="https://img.icons8.com/material-rounded/24/null/chevron-right.png" />
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <section>
                        <div class="studentProfile">
                            <div class="cards">
                                <div class="cardbody">
                                    <form action="" method="POST" autocomplete="off">
                                        <div class="form-group">
                                            <div>
                                                <h1>Personal details</h1>
                                            </div>
                                            <div class="inputFlds">
                                                <div>
                                                    <label for="name">First Name: </label>
                                                    <input type="text" name="name" placeholder="Your Name" />
                                                </div>
                                                <div>
                                                    <label for="name">Last Name: </label>
                                                    <input type="text" name="name" placeholder="Your Name" />
                                                </div>
                                            </div>
                                            <div class="inputFlds">
                                                <div>
                                                    <label for="email">Email: </label>
                                                    <input type="text" name="email" placeholder="Your Email" />
                                                </div>
                                                <div>
                                                    <label for="email">Gender: </label>
                                                    <input type="text" name="email" placeholder="Your Email" />
                                                </div>
                                            </div>
                                            <div class="inputFlds">
                                                <div>
                                                    <label for="collegeid">College ID: </label>
                                                    <input type="text" name="collegeid" placeholder="College ID" />
                                                </div>
                                                <div>
                                                    <label for="phone">Roll Number: </label>
                                                    <input type="text" name="phone"
                                                        placeholder="University Roll Number" />
                                                </div>
                                            </div>
                                            <div class="inputFlds">
                                                <div>
                                                    <label for="email">Course: </label>
                                                    <input type="text" name="email" placeholder="Your Email" />
                                                </div>
                                                <div>
                                                    <label for="email">Branch: </label>
                                                    <input type="text" name="email" placeholder="Your Email" />
                                                </div>
                                            </div>
                                            <div class="inputFlds">
                                                <div>
                                                    <label for="email">Year: </label>
                                                    <input type="text" name="email" placeholder="Your Email" />
                                                </div>
                                                <div>
                                                    <label for="phone">Phone: </label>
                                                    <input type="text" name="phone" placeholder="Your Phone" />
                                                </div>
                                            </div>
                                            <div>
                                                <label for="address">Address: </label>
                                                <textarea name="addr" id="addr" cols="10" rows="5"
                                                    placeholder="Your Address"></textarea>
                                            </div>
                                            <div class="btns">
                                                <button type="submit">Update</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../footer.php';
?>
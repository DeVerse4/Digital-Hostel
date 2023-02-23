<?php
include_once '../admin.php';
?>
<style>
    body {
        font-family: 'poppins', sans-serif;
        background-color: #f5f7ff;
    }
    .sectionHai {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .studentProfile {
        width: 45vw;
        background-color: #ffffff;
        height: auto;
        padding: 20px;
        border-radius: 10px;
    }

    form {
        width: 100%;
        margin: 0 auto;
    }

    form .inputFlds {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;

    }

    form h1 {
        font-size: 30px;
        font-weight: 600;
        color: #4B49AC;
        text-align: center;
        margin-bottom: 20px;
    }

    form label {
        display: block;
        font-weight: bold;
        font-size: 18px;
        color: #4B49AC;
        margin-bottom: 10px;
    }

    form input,
    form select {
        width: calc(43vw/2);
        border: 1px solid #4B49AC;
        border-radius: 10px;
        background-color: transparent;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 10px;
    }

    form textarea {
        width: 100%;
        border: 1px solid #4B49AC;
        border-radius: 10px;
        background-color: transparent;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 10px;
        resize: none;
    }

    form .btns {
        display: flex;
        justify-content: end;
        align-items: center;
    }

    form button {
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

    form button:hover {
        background-color: #fff;
        color: #4B49AC;
        border: 1px solid #4B49AC;
    }
</style>
<section class="sectionHai">
    <section>
        <div class="studentProfile">
            <div class="card">
                <div class="card-body">
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
                                    <input type="text" name="phone" placeholder="University Roll Number" />
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

    <!-- Parents details -->
    <section>
        <div class="studentProfile">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group">
                            <div>
                                <h1>More details</h1>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="name">Father's Name: </label>
                                    <input type="text" name="fathname" placeholder="Father's Name" />
                                </div>
                                <div>
                                    <label for="name">Mother's Name: </label>
                                    <input type="text" name="mothname" placeholder="Mother's Name" />
                                </div>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="email">Father's Phone: </label>
                                    <input type="text" name="fathphone" placeholder="Father's Phone" />
                                </div>
                                <div>
                                    <label for="email">Father's Occupation: </label>
                                    <input type="text" name="fathocc" placeholder="Father's Occupation" />
                                </div>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="email">Mother's Phone: </label>
                                    <input type="text" name="mothphone" placeholder="Mother's Phone" />
                                </div>
                                <div>
                                    <label for="email">Mother's Occupation: </label>
                                    <input type="text" name="mothocc" placeholder="Mother's Occupation" />
                                </div>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="name">Religion: </label>
                                    <input type="text" name="fathname" placeholder="Father's Name" />
                                </div>
                                <div>
                                    <label for="name">Category: </label>
                                    <input type="text" name="mothname" placeholder="Mother's Name" />
                                </div>
                            </div>
                            <div class="btns">
                                <button type="submit">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Hostel Details -->
    <section>
        <div class="studentProfile">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group">
                            <div>
                                <h1>Hostel details</h1>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="name">Room Number: </label>
                                    <input type="text" name="fathname" placeholder="Father's Name" />
                                </div>
                                <div>
                                    <label for="name">Date of Allotment: </label>
                                    <input type="text" name="mothname" placeholder="Mother's Name" />
                                </div>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="email">Roommate 1: </label>
                                    <input type="text" name="fathphone" disabled placeholder="Father's Phone" />
                                </div>
                                <div>
                                    <label for="email">Roommate 2: </label>
                                    <input type="text" name="fathocc" disabled placeholder="Father's Occupation" />
                                </div>
                            </div>
                            <div class="btns">
                                <button disabled type="submit">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Acedemic Details -->
    <section>
        <div class="studentProfile">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group">
                            <div>
                                <h1>Acedemic details</h1>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="name">Course: </label>
                                    <select name="fathname" placeholder="Father's Name">
                                        <option value="">Select Course</option>
                                        <option value="B.Tech">B.Tech</option>
                                        <option value="M.Tech">M.Tech</option>
                                        <option value="M.Tech">Polytechnic</option>
                                        <option value="BBA">BBA</option>
                                        <option value="MBA">MBA</option>
                                        <option value="B.Pharma">B.Pharma</option>
                                        <option value="D.pharma">D.Pharma</option>
                                        <option value="other">Others</option>

                                    </select>
                                </div>
                                <div>
                                    <label for="name">Branch: </label>
                                    <input type="text" name="mothname" placeholder="Mother's Name" />
                                </div>
                            </div>
                            <div class="inputFlds">
                                <div>
                                    <label for="email">University Name: </label>
                                    <input type="text" name="fathphone" placeholder="Father's Phone" />
                                </div>
                                <div>
                                    <label for="email">Graduation Year: </label>
                                    <input type="text" name="fathocc" placeholder="Father's Occupation" />
                                </div>
                            </div>
                            <div class="btns">
                                <button disabled type="submit">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
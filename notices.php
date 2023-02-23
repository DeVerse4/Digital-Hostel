<?php
include_once "header.php";
?>
<style>
    .uploadNotice form {
        width: 30rem;
        /* border: 1px solid #494BAC; */
        padding: 2rem;
        margin: 2rem auto;
        border-radius: 1rem;
        background-color: #fff;
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2);
    }

    form label {
        font-size: 1.2rem;
        font-weight: bold;
    }

    input[type="file"] {
        /* display: none;   */
        width: 100%;
        padding: 0.5rem;
        margin: 0.5rem 0;
    }

    form textarea {
        resize: none;
    }
</style>
<?php if ($mode == "admin") { ?>
<div class="container uploadNotice">
    <div class="row justify-content-center">
        <form action="noticeUploadAction.php" method="post" enctype="multipart/form-data">
            <h3 class="text-center">Upload Notice</h3>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title of Notice" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control"
                    placeholder="Description about notice"></textarea>
            </div>
            <div class="form-group dropfile">
                <label for="myfile">Select File</label>
                <input type="file" name="noticePhoto" id="myfile" class="form-control" required>
                <small>* Upload file as image </small>
            </div>
            <div class="form-group">
                <input type="submit" value="Upload" class="btn btn-block btn-primary">
            </div>
        </form>
    </div>
</div>
<?php } ?>

<div class="container w-100 mb-5">
    <table class="table table-striped">
        <thead>
            <tr class="text-center">
                <th colspan="5" scope="col">
                    <h2>All Notices</h2>
                </th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">File</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $x = fetchAllNotice();
            while ($rs = mysqli_fetch_row($x)) {
            ?>
            <tr>
                <td>
                    <?php echo $rs[1]; ?>
                </td>
                <td>
                    <?php echo $rs[2]; ?>
                </td>
                <td>
                    <img src=<?php echo "noticePhoto.php?n=$rs[0];" ?> style="height:200px;" class="img img-thumbnail"
                    />
                </td>
                <td>
                    <?php echo $rs[4]; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include_once "footer.php";
?>
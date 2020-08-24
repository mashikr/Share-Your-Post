<?php require_once APPROOT . '/views/include/header.php'; ?>
<?php require_once APPROOT . '/views/include/navbar.php'; ?>

<div class="card bg-light">
    <div class="card-body">
        <a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-angle-double-left"></i> Back</a>
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6">
                <h2>Add post</h2>
                <p>Enter your post title and body</p>
                <form action="<?php echo URLROOT; ?>/posts/add" method="post">
                    <div class="form-group">
                        <label for="title">Title: <sup>*</sup></label>
                        <input type="text" name="title" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>" placeholder="Enter title">
                        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="body">Body: <sup>*</sup></label>
                        <textarea name="body" rows="7" class="form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" placeholder="Enter body"><?php echo $data['body']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Add post">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once  APPROOT . '/views/include/footer.php'; ?>
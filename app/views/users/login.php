<?php require_once APPROOT . '/views/include/header.php'; ?>
<?php require_once APPROOT . '/views/include/navbar.php'; ?>

<div class="card bg-light">
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6">
            <?php flash('register_success'); ?>
                <h2>Login</h2>
                <p>Please fill in your credential to login</p>
                <form action="<?php echo URLROOT; ?>/users/login" method="post">
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="Enter email">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="Enter password">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block" value="Login">
                            </div>
                            <div class="col">
                                <p>No account? <a href="<?php echo URLROOT; ?>users/register">Register</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once  APPROOT . '/views/include/footer.php'; ?>
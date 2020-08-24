<?php require_once APPROOT . '/views/include/header.php'; ?>
<?php require_once APPROOT . '/views/include/navbar.php'; ?>

<div class="card">
    <div class="card-body px-5">
        
        <a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-angle-double-left"></i> Back</a>
            
        <h4 class="mt-4"><?php echo $data['post']->title; ?></h4>
        <div class="bg-dark text-white px-2">
            <span>Written by <?php echo $data['post']->name; ?> on <?php echo $data['post']->create_at; ?></span>
            </div>
        <div class="bg-light p-2">
        <?php echo $data['post']->body; ?>
        </div>
        <div class="d-flex justify-content-between mt-2">
            <?php if ($data['post']->id == $_SESSION['user_id']): ?>
                <a href="<?php echo URLROOT; ?>posts/edit/<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo URLROOT; ?>posts/delete/<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once  APPROOT . '/views/include/footer.php'; ?>
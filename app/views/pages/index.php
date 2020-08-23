<?php require_once APPROOT . '/views/include/header.php'; ?>
<?php require_once APPROOT . '/views/include/navbar.php'; ?>

<div class="card bg-light">
    <div class="card-body text-center py-5">
        <span class="display-4"><?php echo $data['title']; ?></span>
        <p class="lead"><?php echo $data['description']; ?></p>
    </div>
</div>

<?php require_once  APPROOT . '/views/include/footer.php'; ?>
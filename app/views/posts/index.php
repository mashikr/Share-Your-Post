<?php require_once APPROOT . '/views/include/header.php'; ?>
<?php require_once APPROOT . '/views/include/navbar.php'; ?>

<div class="card">
    <div class="card-body px-5">
        <div class="d-flex justify-content-between">
            <div><h3>Posts</h3></div>
            <div><a href="<?php echo URLROOT; ?>posts/add" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> add post</a></div>
        </div>
        <?php flash('post_message'); ?>
        <?php flash('edit_message'); ?>
        <?php flash('delete_message'); ?>
            <?php foreach($data['posts'] as $post): ?>
                <div class="card mt-3">
                    <div class="card-header">
                        <h5><?php echo $post->title; ?></h5>
                        <span>Written by <?php echo $post->name; ?> on <?php echo $post->create_at; ?></span>
                    </div>
                    <div class="card-body">
                        <p><?php echo $post->body; ?></p>
                        <!-- <p><?php //print_r($post->body); ?></p> -->
                        <a href="<?php echo URLROOT; ?>posts/details/<?php echo $post->id; ?>" class="btn btn-dark">More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
  
    </div>
</div>

<?php require_once  APPROOT . '/views/include/footer.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <span class="navbar-brand"><?php echo SITENAME; ?></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo $data['page'] == 'home' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $data['page'] == 'about' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>pages/about">About</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <span class="nav-link">Welcome <?php echo $_SESSION['user_name']; ?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>users/logout">Logout</a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link <?php echo $data['page'] == 'login' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>users/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $data['page'] == 'register' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>users/register">Register</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
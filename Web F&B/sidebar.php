<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded-3 border mt-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" style="width:300px">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link ps-2 
            <?php echo (isset($_GET['x']) && $_GET['x']=='home') ? 'active link-light' :'link-dark';?>" aria-current= "page" 
            href="index.php?
            x=home"><i 
            class="bi bi-house"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark ps-2
            <?php echo (isset($_GET['x']) && $_GET['x']=='product') ? 'active link-light' :'link-dark';?>" 
            href="index.php?x=product"><i class="bi bi-cloud-fog"></i> product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark ps-2
            <?php echo (isset($_GET['x']) && $_GET['x']=='about') ? 'active link-light' :'link-dark';?>" 
            href="index.php?x=product"><i class="bi bi-person-circle"></i> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark ps-2
            <?php echo (isset($_GET['x']) && $_GET['x']=='report') ? 'active link-light' :'link-dark';?>"
            href="index.php?x=about"><i class="bi bi-flag"></i> Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark ps-2
            <?php echo (isset($_GET['x']) && $_GET['x']=='checkout') ? 'active link-light' :'link-dark';?>"
            href="index.php?x=checkout"><i class="bi bi-basket"></i> Checkout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    </div>
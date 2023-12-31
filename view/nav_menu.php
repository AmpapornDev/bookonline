

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php 
            $data_uri = getLinkActiveMenu($_SERVER['REQUEST_URI']);
            if($data_uri == 'home'){ echo 'active'; }
            ?>" aria-current="page" href="../home/index.php">
              <span data-feather="home"></span>
              รายการหนังสือทั้งหมด
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link <?php 
            $data_uri = getLinkActiveMenu($_SERVER['REQUEST_URI']);
            if($data_uri == 'category'){ echo 'active'; }
            ?>" href="../category/index.php">
            <span data-feather="file-text"></span>
              หมวดหนังสือ 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

      </div>
    </nav>
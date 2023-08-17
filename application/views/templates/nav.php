  <!-- Sidebar -->
  <div class="sidebar">
  <div class="sidebar-logo">
      <img src="<?php echo base_url().'assets/img/logo2.png'; ?>" class="logo-image">
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#"><i class="fa-solid fa-house"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#FileMaintenance" role="button" aria-expanded="false" aria-controls="FileMaintenance"><i class="fa-solid fa-file"></i> File Maintenance</a>
        <!-- FileMaintenance Dropdown -->
        <div class="collapse collapsible" id="FileMaintenance">
          <ul class="list-unstyled">
            <li><a class="nav-link" href="#">Option 1</a></li>
            <li><a class="nav-link" href="#">Option 2</a></li>
            <li><a class="nav-link" href="#">Option 3</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-brands fa-dropbox"></i> Inventory Manag...</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'main/purchase_order'; ?>">  
          <div class="custom-icon">
            <i class="fas fa-cart-shopping"></i>
            <span class="plus-icon fw-bold">+</span>
          </div> 
        Purchasing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cart-shopping"></i> Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"data-bs-toggle="collapse" href="#RevolvingFund" role="button" aria-expanded="false" aria-controls="RevolvingFund"><i class="fa-solid fa-money-bill"></i> Revolving Fund</a>
          <!-- RevolvingFund Dropdown -->
          <div class="collapse collapsible" id="RevolvingFund">
            <ul class="list-unstyled">
              <li><a class="nav-link" href="#">Daily Replenishment</a></li>
              <li><a class="nav-link" href="#">Daily Expenses</a></li>
            </ul>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-calculator"></i> Accounting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" href="<?php echo base_url().'user/logout';?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
      </li>
    </ul>
  </div>
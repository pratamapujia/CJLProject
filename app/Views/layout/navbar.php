<nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
            
            <a href="/" class="logo d-flex align-items-center">
              <img src="<?= base_url(); ?>/assets/img/icon/logocjl.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
       

          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li><a class="nav-link" href="<?= site_url('home'); ?>">Home</a></li>
              <li class="dropdown"><a href="javascript:void(0)"><span>Catalogue</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="<?= site_url('machinery'); ?>">Machinery</a></li>
                <li><a href="<?= site_url('machinetool'); ?>">Machine Tool</a></li>
                <li><a href="<?= site_url('cuttingtool'); ?>">Cutting Tool</a></li>
                <li><a href="<?= site_url('measuringtool'); ?>">Measuring Tool</a></li>
                <li><a href="<?= site_url('handtool'); ?>">Hand Tool</a></li>
                <li><a href="<?= site_url('cuttingcoolant'); ?>">Cutting Coolant</a></li>
                <li><a href="<?= site_url('abrasive'); ?>">Abrasive</a></li>
              </ul>
              </li>
              <li><a class="nav-link" href="<?= site_url('abouts'); ?>">About Us</a></li>
              <li><a class="nav-link" href="<?= site_url('promo'); ?>">Promo</a></li>
              <li><a class="nav-link" href="<?= site_url('newproducts'); ?>">New Products</a></li>
            </ul>
          </div>
        
      </div>
</nav>
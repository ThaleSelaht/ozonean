<nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
  	<img src="<?php echo get_home_url() . '/wp-content/uploads/logo-ozonean.png'; ?>" alt="Logo Ozonean">
  </a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse" id="navbarCollapse" style="">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url() . '/ozonean'; ?>">OZONEAN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url() . '/equipe'; ?>">EQUIPE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="servicos-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          IN COMPANY
        </a>
        <div class="dropdown-menu" aria-labelledby="servicos-dropdown">
          <a class="dropdown-item" href="<?php echo get_site_url() . '/consultorias'; ?>">Consultorias</a>
          <a class="dropdown-item" href="<?php echo get_site_url() . '/palestras-e-workshops'; ?>">Palestras e Workshops</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url() . '/empresas'; ?>">EMPRESAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url() . '/blog'; ?>">BLOG</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url() . '/contato'; ?>">CONTATO</a>
      </li> -->
    </ul>			        
  </div>
</nav>
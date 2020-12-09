<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;"></a>
      </div>
      <div>
      <marquee direction="left" scrollamount="4" align="center"> Welcome to Library New System </marquee>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="search" value="" class="form-control" placeholder aria-controls="table">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboards">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">4</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/employees">Data Pegawai Berhasil ditambahkan</a>
              <a class="dropdown-item" href="/members">Data Anggota Berhasil ditambahkan</a>
              <a class="dropdown-item" href="/books">Data Buku Terbaru Berhasil ditambahkan</a>
              <a class="dropdown-item" href="/transactions">Lihat Transaksi terupdate</a>
              {{-- <a class="dropdown-item" href="#">Another One</a> --}}
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              {{-- <a class="dropdown-item" href="members.edit">Profile</a>
              <a class="dropdown-item" href="employees.edit">Edit Profile</a> --}}
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>


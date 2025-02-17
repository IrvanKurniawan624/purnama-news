  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
          <?php
        $url_menu = Request::segment(2);
        $url_submenu = Request::segment(3);
        ?>

          <li class="nav-item">
              <a class="nav-link @if($url_menu == "dashboard") active @endif" href="/admin/dashboard">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item @if($url_menu == "master") active @endif">
              <a class="nav-link @if($url_menu !== "master") collapsed @endif" data-bs-target="#master-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-menu-button-wide"></i><span>Master</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="master-nav" class="nav-content collapse @if($url_menu == "master") show @endif" data-bs-parent="#master-nav">
                  <li>
                      <a href="/admin/master/kategori" class="@if($url_menu == "master" && $url_submenu == "kategori") active @endif">
                          <i class="bi bi-circle"></i><span>Kategori</span>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/master/berita" class="@if($url_menu == "master" && $url_submenu == "berita") active @endif">
                          <i class="bi bi-circle"></i><span>Berita</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Components Nav -->

          <li class="nav-item @if($url_menu == "laporan") active @endif">
              <a class="nav-link @if($url_menu !== "laporan") collapsed @endif" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-journal-bookmark-fill"></i><span>Laporan</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="laporan-nav" class="nav-content collapse @if($url_menu == "laporan") show @endif" data-bs-parent="#laporan-nav">
                  <li>
                      <a href="/admin/laporan/trending" class="@if($url_menu == "laporan" && $url_submenu == "trending") active @endif">
                          <i class="bi bi-circle"></i><span>Trending</span>
                      </a>
                  </li>
              </ul>
          </li><!-- End Components Nav -->

          {{-- <li class="nav-item">
              <a class="nav-link @if($url_menu == "berita") active @endif" href="/admin/berita">
                  <i class="bi bi-newspaper"></i>
                  <span>Berita</span>
              </a>
          </li><!-- End Berita Nav --> --}}
      </ul>

  </aside><!-- End Sidebar-->

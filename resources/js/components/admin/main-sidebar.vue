<template>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/admin_assets2/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ChidungPlus Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin_assets2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Nguyễn Chí Dũng </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          

          <li class="nav-item">
            <router-link :to="{name: 'Dashboard'}" class="nav-link ">
              <i class="nav-icon fab fa-vuejs"></i> 
              <p>
                VueJs Admin
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link :to="{name: 'UserList'}" class="nav-link ">
              <i class="nav-icon fas fa-users"></i> 
              <p>
                Users
                <span class="right badge badge-danger">New</span>
              </p>
            </router-link>
          </li>
                    

          <li class="nav-header">ACCOUNTS</li>

          <li class="nav-item">
            <router-link :to="{name: 'AccList'}" class="nav-link ">
              <i class="nav-icon fas fa-chess-queen"></i> 
              <p>
                Account
              </p>
            </router-link>
          </li>


                    
                    <li class="nav-item">
            <a href="/admin/random" class="nav-link">
              <i class="nav-icon fas fa-random"></i>
              <p>
                Random
                
              </p>
            </a>
          </li>
          
          
          <li class="nav-header">HISTORIES</li>
                    <li class="nav-item">
            <a href="/admin/card" class="nav-link">
              <i class="nav-icon fab fa-cc-apple-pay"></i>
              <p>
                Nạp thẻ
          
              </p>
            </a>
          </li>
                              <li class="nav-item">
            <a href="/admin/card/pending" class="nav-link">
              <i class="nav-icon fab fa-apple-pay"></i>
              <p>
                Nạp thẻ Pending
        
              </p>
            </a>
          </li>
                              <li class="nav-item">
            <a href="/admin/acc/histories" class="nav-link">
              <i class="nav-icon fas fa-quran"></i>
              <p>
                Mua Acc
             
              </p>
            </a>
          </li>
                              <li class="nav-item">
            <a href="/admin/random/histories" class="nav-link">
              <i class="nav-icon fas fa-journal-whills"></i>
              <p>
                Random
                
              </p>
            </a>
          </li>
                              <li class="nav-item">
            <a href="/admin/coin/widthdraw" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Width Draw
          
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/coin/widthdraw/pending" class="nav-link">
              <i class="nav-icon fab fa-waze"></i>
              <p>
                Width Draw Pending
           
              </p>
            </a>
          </li>
          

          <li class="nav-header">SETTING</li>
                    <li class="nav-item">
            <a href="/admin/config" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p class="text">Config</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/module" class="nav-link">
              <i class="nav-icon fab fa-themeisle"></i>
              <p class="text">Module</p>
            </a>
          </li>
                              <li class="nav-item">
            <a href="/admin/seo" class="nav-link">
              <i class="nav-icon fab fa-ups"></i>
              <p class="text">Seo</p>
            </a>
          </li>
                              <li class="nav-item">
            <a href="/admin/permission" class="nav-link">
              <i class="nav-icon fas fa-radiation"></i>
              <p class="text">Permission</p>
            </a>
          </li>
          

          
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
  export default {
        data: function () {
            return {
              
              orderBy   : 'desc',
              name    : '',
                list_users: {},
                pageSize  : 14,
                currentPage : 1,
                errors: [],
  
            }
        }
  }

</script>
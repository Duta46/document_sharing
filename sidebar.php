  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="">
    <div class="dropdown" style="">
   	<a href="javascript:void(0)" class="brand-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <?php if(empty($_SESSION['login_avatar'])): ?>
        <span class="brand-image img-circle elevation-3 d-flex justify-content-center align-items-center bg-primary text-white font-weight-500" style="width: 38px;height:50px"><?php echo strtoupper(substr($_SESSION['login_firstname'], 0,1).substr($_SESSION['login_lastname'], 0,1)) ?></span>
        <?php else: ?>
          <span class="image">
            <img src="assets/uploads/<?php echo $_SESSION['login_avatar'] ?>" style="width: 38px;height:38px" class="img-circle elevation-2" alt="User Image">
          </span>
        <?php endif; ?>
        <span class="brand-text font-weight-light"><?php echo ucwords($_SESSION['login_firstname'].' '.$_SESSION['login_lastname']) ?></span>

      </a>
      <div class="dropdown-menu" style="">
        <a class="dropdown-item manage_account" href="javascript:void(0)" data-id="<?php echo $_SESSION['login_id'] ?>">Manage Account</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="ajax.php?action=logout">Logout</a>
      </div>
    </div>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <div>  
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        </div>    
        <?php if($_SESSION['login_type'] == 1): ?>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_user" class="nav-link nav-new_user tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_rldc nav-view_rldc d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
              Rangkaian Listrik DC
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document_rldc" class="nav-link nav-new_document_rldc tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list_rldc" class="nav-link nav-document_list_rldc tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_rlac nav-view_rlac d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p class="text-wrap">
              Rangkaian Listrik AC
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document_rlac" class="nav-link nav-new_document_rlac tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list_rlac" class="nav-link nav-document_list_rlac tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_document nav-view_document d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p class="text-wrap">
              Kewirausahaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document" class="nav-link nav-new_document tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list" class="nav-link nav-document_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_document_k3 nav-view_document_k3 d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p class="text-wrap">
              Keselamatan dan Kesehatan Kerja
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document_k3" class="nav-link nav-new_document_k3 tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list_k3" class="nav-link nav-document_list_k3 tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_document_apdk nav-view_document_apdk d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p class="text-wrap">
              Arsitektur dan Pemrograman Dasar Komputer
                <i class="right fas fa-angle-left d-flex align-items-center justify-content-center"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document_apdk" class="nav-link nav-new_document_apdk tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list_apdk" class="nav-link nav-document_list_apdk tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
        <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_document_disda nav-view_document_disda d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
              Distribusi Daya
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document_disda" class="nav-link nav-new_document_disda tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list_disda" class="nav-link nav-document_list_disda tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
        </div>
          
        <?php else: ?>
          <div>
          <li class="nav-item">
            <a href="#" class="nav-link nav-is-tree nav-edit_rldc nav-view_rldc d-flex align-items-center">
              <i class="nav-icon fa fa-folder-open"></i>
              <p>
              Rangkaian Listrik DC
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_document_rldc" class="nav-link nav-new_document_rldc tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=document_list_rldc" class="nav-link nav-document_list_rldc tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          </div>
          <div>
            <li class="nav-item">
              <a href="#" class="nav-link nav-is-tree nav-edit_rlac nav-view_rlac d-flex align-items-center">
                <i class="nav-icon fa fa-folder-open"></i>
                <p class="text-wrap">
                Rangkaian Listrik AC
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php?page=new_document_rlac" class="nav-link nav-new_document_rlac tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index.php?page=document_list_rlac" class="nav-link nav-document_list_rlac tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a href="#" class="nav-link nav-is-tree nav-edit_document nav-view_document d-flex align-items-center">
                <i class="nav-icon fa fa-folder-open"></i>
                <p class="text-wrap">
                Kewirausahaan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php?page=new_document" class="nav-link nav-new_document tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index.php?page=document_list" class="nav-link nav-document_list tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a href="#" class="nav-link nav-is-tree nav-edit_document_k3 nav-view_document_k3 d-flex align-items-center">
                <i class="nav-icon fa fa-folder-open"></i>
                <p class="text-wrap">
                Keselamatan dan Kesehatan Kerja
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php?page=new_document_k3" class="nav-link nav-new_document_k3 tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index.php?page=document_list_k3" class="nav-link nav-document_list_k3 tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a href="#" class="nav-link nav-is-tree nav-edit_document_apdk nav-view_document_apdk d-flex align-items-center">
                <i class="nav-icon fa fa-folder-open"></i>
                <p class="text-wrap">
                Arsitektur dan Pemrograman Dasar Komputer
                  <i class="right fas fa-angle-left d-flex align-items-center justify-content-center"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php?page=new_document_apdk" class="nav-link nav-new_document_apdk tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index.php?page=document_list_apdk" class="nav-link nav-document_list_apdk tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
          </div>
          <div>
            <li class="nav-item">
              <a href="#" class="nav-link nav-is-tree nav-edit_document_disda nav-view_document_disda d-flex align-items-center">
                <i class="nav-icon fa fa-folder-open"></i>
                <p>
                Distribusi Daya
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php?page=new_document_disda" class="nav-link nav-new_document_disda tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index.php?page=document_list_disda" class="nav-link nav-document_list_disda tree-item">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
              </ul>
            </li>
          </div>
        <?php endif; ?>
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
      $('.manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})

    $(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
      $('.manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})
  </script>
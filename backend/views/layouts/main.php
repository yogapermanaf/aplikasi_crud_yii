<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>
<header>

  <div class="wrapper">
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
           <a href="index3.html" class="nav-link">Home</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
           <a href="#" class="nav-link">Contact</a>
         </li>
       </ul>

       <!-- SEARCH FORM -->
       <form class="form-inline ml-3">
         <div class="input-group input-group-sm">
           <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
           <div class="input-group-append">
             <button class="btn btn-navbar" type="submit">
               <i class="fas fa-search"></i>
             </button>
           </div>
         </div>
       </form>

       <!-- Right navbar links -->
       <ul class="navbar-nav ml-auto">
         <!-- Messages Dropdown Menu -->
         <li class="nav-item dropdown">
           <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="far fa-comments"></i>
             <span class="badge badge-danger navbar-badge">3</span>
           </a>
           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                 <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     Brad Diesel
                     <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                   </h3>
                   <p class="text-sm">Call me whenever you can...</p>
                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                 </div>
               </div>
               <!-- Message End -->
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                 <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     John Pierce
                     <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                   </h3>
                   <p class="text-sm">I got your message bro</p>
                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                 </div>
               </div>
               <!-- Message End -->
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <!-- Message Start -->
               <div class="media">
                 <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                 <div class="media-body">
                   <h3 class="dropdown-item-title">
                     Nora Silvester
                     <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                   </h3>
                   <p class="text-sm">The subject goes here</p>
                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                 </div>
               </div>
               <!-- Message End -->
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
           </div>
         </li>
         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown">
           <a class="nav-link" data-toggle="dropdown" href="#">
             <i class="far fa-bell"></i>
             <span class="badge badge-warning navbar-badge">15</span>
           </a>
           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <span class="dropdown-item dropdown-header">15 Notifications</span>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-envelope mr-2"></i> 4 new messages
               <span class="float-right text-muted text-sm">3 mins</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-users mr-2"></i> 8 friend requests
               <span class="float-right text-muted text-sm">12 hours</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item">
               <i class="fas fa-file mr-2"></i> 3 new reports
               <span class="float-right text-muted text-sm">2 days</span>
             </a>
             <div class="dropdown-divider"></div>
             <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
             <i class="fas fa-th-large"></i>
           </a>
         </li>
       </ul>
     </nav>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Clinics</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Yoga Permana</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          </li>
          <li class="nav-link">            
           <?= html ::a('<i class ="nav-icon fas fa-th"></i><span class="hide-menu"> Data Pasien</span>',['/tb-pasien/index'])?>
          </li>
          <li class="nav-link">            
           <?= html ::a('<i class ="nav-icon fas fa-th"></i><span class="hide-menu"> Data Dokter</span>',['/tb-dokter/index'])?>
          </li>
          <li class="nav-link">            
           <?= html ::a('<i class ="nav-icon fas fa-th"></i><span class="hide-menu"> Pembayaran</span>',['/tb-tindakan/index'])?>
          </li>
 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</aside> 
     <!-- /.navbar -->
</header>

<main role="main" class="flex-shrink-0">
    <div class="content-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();

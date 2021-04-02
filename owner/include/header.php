<?php require_once('autho/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admin Panel</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link href="http://www.aqeeqtrading.com/images/logo.png" type="img/x-icon" rel="shortcut icon">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css"> 
  
    
    <!-- jquery script -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
       <script>
function goBack() {
  window.history.back();
}
</script>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="add-product.php" style="    font-family: 'Rubik', sans-serif;">Aqeeq</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        
        
       <!--  <a href="#"onclick="goBack()"><i class="fa fa-arrow-left" style="color: #ffffff;background-color: #000000;" aria-hidden="true"></i></a> -->
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><span class="app-menu__icon ti-user"></span></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           
            <li><a class="dropdown-item" href="autho/log-out.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $fullname; ?></p>
          <p class="app-sidebar__user-designation"><?php echo $username; ?></</p>
        </div>
      </div>
      <ul class="app-menu">
        <?php if($role=='admin'){ ?>
        <li><a class="app-menu__item" href="index.php"><span class="app-menu__icon ti-home"></span> <span class="app-menu__label">Dashboard</span></a></li>   
         <li><a class="app-menu__item" href="add-categories.php"><span class="app-menu__icon ti-move"></span> <span class="app-menu__label">Add Category</span></a></li>   
           <li><a class="app-menu__item" href="add-brand.php"><span class="app-menu__icon ti-move"></span> <span class="app-menu__label">Add Brand</span></a></li>    
        <!--  <li><a class="app-menu__item" href="subcat.php"><span class="app-menu__icon ti-shopping-cart"></span><span class="app-menu__label">Add Sub Category</span></a></li>   -->  
        <!-- <li><a class="app-menu__item" href="add-product.php"><span class="app-menu__icon ti-shopping-cart-full"></span><span class="app-menu__label">Add Product</span></a></li> -->
        <li><a class="app-menu__item" href="view-product.php"><span class="app-menu__icon ti-eye"></span><span class="app-menu__label">View-Product</span></a></li>
        <li><a class="app-menu__item" href="users.php"><span class="app-menu__icon ti-user"></span><span class="app-menu__label">User Management</span></a></li>
       <!--  <li><a class="app-menu__item" href="vendors-view.php"><span class="app-menu__icon ti-user"></span><span class="app-menu__label">Vendor Management</span></a></li> -->
<li><a class="app-menu__item" href="bulk-view.php"><span class="app-menu__icon ti-user"></span><span class="app-menu__label">Bulk Deals Management</span></a></li>
       <!--  vendor message -->
       <li><a class="app-menu__item" href="form-vendor.php"><span class="app-menu__icon ti-user"></span><span class="app-menu__label">Dealer Management</span></a></li>     
        <li><a class="app-menu__item" href="view-subscribe.php"><span class="app-menu__icon ti-user"></span><span class="app-menu__label">Subcribers</span></a></li>

        <li><a class="app-menu__item" href="order-history.php"><span class="app-menu__icon ti-receipt"></span><span class="app-menu__label">Order History</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__icon ti-settings"></span><span class="app-menu__label">Web Master</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="offer-notice.php"><i class="icon fa fa-circle-o"></i> Offer Notice</a></li>
              <li><a class="treeview-item" href="shipping.php"><i class="icon fa fa-circle-o"></i>Shipping Charges</a></li>
            <li><a class="treeview-item" href="offer.php"><i class="icon fa fa-circle-o"></i> Offer Amount</a></li>
            <li><a class="treeview-item" href="premium-product-slider.php"><i class="icon fa fa-circle-o"></i> Prepium Product Slider</a></li>
            <li><a class="treeview-item" href="add-slider.php"><i class="icon fa fa-circle-o"></i> Web Slider</a></li>
            <li><a class="treeview-item" href="add-status.php"><i class="icon fa fa-circle-o"></i> Add Status</a></li>
          </ul>
        </li>
        <?php }else {?>
        <li><a class="app-menu__item" href="index.php"><span class="app-menu__icon ti-home"></span> <span class="app-menu__label">Dashboard</span></a></li>   
<!--         <li><a class="app-menu__item" href="add-product.php"><span class="app-menu__icon ti-shopping-cart-full"></span><span class="app-menu__label">Add Product</span></a></li>
 -->        <li><a class="app-menu__item" href="view-product.php"><span class="app-menu__icon ti-eye"></span><span class="app-menu__label">View-Product</span></a></li>
        <?php } ?>  
        
<!--         <li><a class="app-menu__item" href="prescription.php"><span class="app-menu__icon ti-bookmark-alt"></span><span class="app-menu__label">Prescription History</span></a></li>
 -->
        
                        
       <!--  <li><a class="app-menu__item" href="topprouct.php"><i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label">Add Top Product</span></a></li>                
        <li><a class="app-menu__item" href="add-slider.php"><i class="app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Add Slider</span></a></li>           -->      
        <li><a class="app-menu__item" href="autho/log-out.php"><span class="app-menu__icon ti-lock"></span><span class="app-menu__label">Log Out</span></a></li>                
      </ul>

               <!-------wave------->
              <li class="posset"><div class="waveWrapper waveAnimation">
          <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('./img/wave-top.png')"></div>
          </div>
          <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('./img/wave-mid.png')"></div>
          </div>
          <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('./img/wave-bot.png')"></div>
          </div>
        </div></li> 
        <!-------wave------->


    </aside>

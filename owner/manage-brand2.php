<?php require_once('include/header.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus-circle" aria-hidden="true"></i> Manage Brand</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-plus-circle" aria-hidden="true"></i></li>
          <li class="breadcrumb-item"><a href="#">Manage Brand</a></li>
        </ul>
      </div>
     
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <iframe src="https://aqeeqtrading.com/owner/manage-brand/" style="width: 100%; height: 500px;"></iframe>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
   <!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Select Js -->
    <script src="js/bootstrap-select.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

  <script>

  $(document).ready(function(){
    $( "#post_list" ).sortable({
      placeholder : "ui-state-highlight",
      update  : function(event, ui)
      {
        var post_order_ids = new Array();
        $('#post_list li').each(function(){
          post_order_ids.push($(this).data("post-id"));
        });
        $.ajax({
          url:"ajax_upload.php",
          method:"POST",
          data:{post_order_ids:post_order_ids},
          success:function(data)
          {
           if(data){
            $(".alert-danger").hide();
            $(".alert-success ").show();
           }else{
            $(".alert-success").hide();
            $(".alert-danger").show();
           }
          }
        });
      }
    });
  });
  </script>
    
  </body>
</html>
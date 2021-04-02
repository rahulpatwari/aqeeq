<?php require_once('../autho/data-autho.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aqeeq</title>
     <link href="http://www.aqeeqtrading.com/images/logo.png" type="img/x-icon" rel="shortcut icon">
    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

	<!-- Bootstrap Select Css -->
    <link href="css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/app_style.css" rel="stylesheet" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	.li-post-group {
		background: #f5f5f5;
		padding: 5px 10px;
		border-bottom: solid 1px #CFCFCF;
		margin-top: 5px;
	}
	.li-post-title {
	    border-left: solid 4px #304d49;
	    background: #a7d4d2;
	    padding: 5px;
	    color: #304d49;
	    margin: 0px;
	}
	.show-more {
	    background: #10c1b9;
	    width: 100%;
	    text-align: center;
	    padding: 10px;
	    border-radius: 5px;
	    margin: 5px;
	    color: #fff;
	    cursor: pointer;
	    font-size: 20px;
	    display: none;
	    margin: 0px;
    	margin-top: 25px;
	}
	.li-post-desc {
	    line-height: 15px !important;
	    font-size: 12px;
	    box-shadow: inset 0px 0px 5px #7d9c9b;
	    padding: 10px;
	    margin: 0px;
	}
	.panel-default {
	    margin-bottom: 100px;
	}
	.post-data-list {
	    max-height: 374px;
	    overflow-y: auto;
	}
	.radio-inline {
	    font-size: 20px;
	    color: #c36928;
	}
	.progress, .progress-bar{ height: 40px; line-height: 40px; display: none; }

	#post_list li
   {
    border: 1px solid #a7d4d2;
    cursor: move;
    margin-top:10px;
   }
   #post_list li.ui-state-highlight {
    padding: 20px;
    background-color: #eaecec;
    border: 1px dotted #ccc;
    cursor: move;
    margin-top: 12px;
    }

	</style>
</head>
<body>
    <div class="all-content-wrapper">
		<!-- Top Bar -->
<!--  -->		<!-- #END# Top Bar -->
	
		<section class="container">
			<div class="form-group custom-input-space has-feedback">
				<!-- <div class="page-heading">
					<h3 class="post-title">Drag and Drop Table Row Sorting (Ajax, PHP and MySQLi) - Learn Infinity</h3>
				</div> -->
				<div class="page-body clearfix">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading">Slider List:</div>
								<div class="panel-body">
									<div class="alert icon-alert with-arrow alert-success form-alter" role="alert">
										<i class="fa fa-fw fa-check-circle"></i>
										<strong> Success ! </strong> <span class="success-message"> Post Order has been updated successfully </span>
									</div>
									<div class="alert icon-alert with-arrow alert-danger form-alter" role="alert">
										<i class="fa fa-fw fa-times-circle"></i>
										<strong> Note !</strong> <span class="warning-message"> Empty list cant be ordered </span>
									</div>

									<ul class="list-unstyled" id="post_list">
									<?php
									//get rows query
									$query = mysqli_query($con, "SELECT * FROM slider ORDER BY serial_no ASC");
									
									//number of rows
									$rowCount = mysqli_num_rows($query);
									
									if($rowCount > 0){ 
										while($row = mysqli_fetch_assoc($query)){ 
											$tutorial_id = 	$row['post_id'];
									?>
										<li data-post-id="<?php echo $row["id"]; ?>">
											<div class="li-post-group">
											<h5 class="li-post-title"><?php echo $row["serial_no"].') '; ?></h5>
											<p class="li-post-desc"><img src="https://aqeeqtrading.com/slider/<?php echo ucfirst($row["f_newfile"]); ?>" style="height: 100px; width:70%;"></p>
										</div>
										</li>
									<?php } 
									} ?>
									</ul>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</section>
    </div>
	
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

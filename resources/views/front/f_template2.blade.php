<!DOCTYPE html>
<html>
<head>
<title>Putra Candi Tobacco</title>
<link href="{{ asset('template\front') }}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="{{ asset('template\front') }}/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="{{ asset('template\front') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="{{ asset('template\front') }}/js/jquery.easydropdown.js"></script>
<link href="{{ asset('template\front') }}/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="{{ asset('template\front') }}/js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->



<script src="{{ asset('template\front') }}/js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="/"><img src="{{ asset('template\front') }}/images/lgo1.png" style="height:150px" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
						<ul class="nav" style="background-color: rgb(226, 129, 17) ">
							<li class="dropdown1"><a >
								<?php 
									$user = Auth::user();
									if(!empty($user)){
										echo "Welcome, $user->name";
									}else{
										echo "Welcome";
									}
								?>
							 </a>
								<ul class="dropdown2">
									<li><?php 
										$user = Auth::user();
										?>
										<?php
										if(!empty($user)){?>
											<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
														  document.getElementById('logout-form').submit();">
											 {{ __('Logout') }}
											</a>
											
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											 @csrf
											</form>
										<?php }else{ ?>
											<a href="/login">LOGIN</a>
											<a href="/register">REGISTER</a>
										<?php } ?>
									
							</li>
							 </ul>
						</ul>
					   <ul class="nav">
						  <li class="dropdown1"><a >Kualitas</a>
							  <ul class="dropdown2">
									<li><a href="/indexG?kategori=Grade A">Grade A+</a></li>
									<li><a href="/indexG?kategori=Premium">Premium</a></li>
									<li><a href="/indexG?kategori=High Class">High Class</a></li>												
							  </ul>
						  </li>          
						 <li class="dropdown1"><a >Alat</a>
							 <ul class="dropdown2">
									<li><a href="/detailalat/1">Vapir</a></li>
									<li><a href="/detailalat/4">Busa Filter</a></li>
									<li><a href="/detailalat/2">Alat Linting</a></li>
									<li><a href="/detailalat/3">Lem Stick</a></li>
							  </ul>
						 </li>

						 <li>
							<a href="#" data-toggle="modal" data-target="#al3" class="button2" onclick="showCart()"><img src="{{ asset('template\front') }}/images/cart.png" alt=""/>
							</a>
							<div class="modal fade" id="al3" tabindex="-1" role="dialog">
							  <div class="modal-dialog">
								  <!-- Modal content-->
								  <div class="modal-content">
									  <div class="modal-header">
										  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  </div>
									  <div class="modal-body modal-body-sub_agile">
										  <div class="modal_body_left modal_body_left1">
											  <h3 class="agileinfo_sign">CART</h3>
											  <form action="{{url('/checkout')}}" method="post">
												  @csrf
												  <div class="bs-docs-example">
													 <div id="mycart"></div>
												  </div>
												  <input type="submit" class="button" value="Checkout">
											  </form>
											  {{-- <a href="">aa</a> --}}
										  </div>
									  </div>
								  </div>         
							</li>
						
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>

<!--/banner-->
@yield('content2')
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="/"><img src="{{ asset('template\front') }}/images/lgo1.png" style="height:100px" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				<li><a href="#">TEMBAKAU</a></li>
				<li><a href="#">ALAT</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->
<script>
	function addtocart(id_produk, qty){
		var data={
      // "_token": "{{ csrf_token() }}",
			'id_produk': id_produk,
			'qty': qty,
		}
		$.post(
			'{{ url("index/addCart") }}',
			JSON.stringify(data),
			function(res){
				alert('res.massage')
			},
			"JSON",
		)
	}

	function showCart(){
		$.get('{{ url("cart") }}',function(res){
			$('#mycart').html(res);
		});
	}

	function deleteItem(id_item){
		$.get(
			'{{url('delete')}}/'+id_item,function(res){
				showCart()
		});
	}
</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Putra Candi Tobacco</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="bike Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
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

<script>
	function addtocart(id_produk, qty){
		var data={
			'id_produk': id_produk,
			'qty': qty,
		}
		$.post(
			'{{ url("addCart") }}',
			JSON.stringify(data),
			function(res){
				alert(res.massage)
				// var rowCount = $('#myTable >tbody >tr').length;
				// $(".jumalItem").text($('.table').size());
				// alert(res.btn)
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
                        <a class="shop" href="cart.html"><img src="{{ asset('template\front') }}/images/cart.png" alt=""/></a>
                                   
                        </li>
                      
                   </div>
               <div class="clearfix"></div>
           </div>
    </div> 				 
</div>
<!--/banner-->
@yield('content4')

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

</body>
</html>

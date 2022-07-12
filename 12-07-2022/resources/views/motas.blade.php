@extends('layouts.outer')

@section('content')
<body>
	<!-- Start banner Area -->
	<section class="generic-banner relative">
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="index.html"><img src="img/logo.png" alt=""></a>
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="index.html#home">Home</a>
								<a href="index.html#contact">Contact</a>
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</section>
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 pb-30 header-text">
					<h1 class="text-white">Motas</h1>
					<!--tipo projeto, nome projeto... -->
					<!--www.nunoconceicao.com(Verificar)-->
				</div>
			</div>
			<div class="gal">
				<a href="img/b2.jpg"><img src="img/b2.jpg" alt=""></a>
				<a href="img/rz.jpg"><img src="img/rz.jpg" alt=""></a>
				<a href="img/pm1.jpg"><img src="img/pm1.jpg" alt=""></a>
				<a href="img/pm2.jpg"><img src="img/pm2.jpg" alt=""></a>
				<a href="img/m1.jpg"><img src="img/m1.jpg" alt=""></a>
				<a href="img/m2.jpg"><img src="img/m2.jpg" alt=""></a>
				<a href="img/m3.jpg"><img src="img/m3.jpg" alt=""></a>
				<a href="img/m4.jpg"><img src="img/m4.jpg" alt=""></a>
				<a href="img/dt1.jpg"><img src="img/dt1.jpg" alt=""></a>
				<a href="img/dt2.jpg"><img src="img/dt2.jpg" alt=""></a>
				<a href="img/dt3.jpg"><img src="img/dt3.jpg" alt=""></a>
				<a href="img/dt4.jpg"><img src="img/dt4.jpg" alt=""></a>
				<a href="img/dt5.jpg"><img src="img/dt5.jpg" alt=""></a>
				<a href="img/dt6.jpg"><img src="img/dt6.jpg" alt=""></a>
				<a href="img/dt7.jpg"><img src="img/dt7.jpg" alt=""></a>
				<a href="img/dt8.jpg"><img src="img/dt8.jpg" alt=""></a>
			</div>
		</div>
	</section>
@endsection

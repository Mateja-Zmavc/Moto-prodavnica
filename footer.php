
<!DOCTYPE html>
<html>

<body>
<link rel="stylesheet" type="text/css" href="css/style.css">

</body>

<footer id="footer" style="background-color: #111211;">
			<!-- top footer -->
			<div id="downn" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informacije</h3>
								
								<ul class="footer-links">
									<li><a href="https://www.google.com/maps/place/ITS+-+Information+Technology+School/@44.8016856,20.4179246,17z/data=!3m1!4b1!4m5!3m4!1s0x475a6fed108da8a7:0x9c662a8e931516fb!8m2!3d44.8016818!4d20.4201133"><i class="fa fa-map-marker"></i>Adresa</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>011/329-2159</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>its@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<a href="#" style="color:white;">Mi smo novo osnovana online Moto Shop prodavnica sa namerom</a>
							<a href="#" style="color:white;">da omogucimo klijentima sto laksu kupovinu i da pruzimo sto</a>
							<a href="#" style="color:white;">sto vise prozivoda kako bi zadovoljili sve klijent i usrecili.</a>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
							
							</span>
						</div>

						

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	</html>

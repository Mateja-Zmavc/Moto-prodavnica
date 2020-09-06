<?php
include 'header.php';
?>
     <script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            e.stopPropagation();
        };		
    };
})(window);
</script>
      <div class="main main-raised">       
		<div class="section" style=" background: linear-gradient(to right, #111211 , #54034c);font-family">
			<div class="container">
				<div class="row">
					<div id="aside" class="col-md-3">
						<div id="get_category" >
				        </div>
						<div id="get_brand">
				        </div>
					</div>
					<div id="store" class="col-md-9">						
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-19" id="product_msg">
					</div>
							<div id="get_product">
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
include "footer.php";
?>
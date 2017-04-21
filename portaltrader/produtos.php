<?php
$title = 'Produtos | Portal Trader ';
include "header.php";
?>
<!-- portfolio -->
	<div class="portfolio">
		<div class="container">
			<h2 class="w3ls_head">Nossos Produtos</h2>
			<p class="w3layouts_para">Fusce quis leo in augue ultricies tincidunt a quis mi. Donec at massa nec sem eleifend fermentum.</p>

            <div class="portfolio-agile">
			<div class="main">

                <a href="produto1.php" >
                <div class="view view-seventh">
                    <div rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <img src="images/g1-.jpg" />
                        <div class="mask">
                            <h2>Currenty Alert</h2>
                            <p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
                        </div>
                    </div>
                </div></a>

                <div class="view view-seventh">
                    <a href="" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/g2-.jpg" />
						<div class="mask">
							<h2>Double-X</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
						</div>
					</a>
                </div>

                <div class="view view-seventh">
                    <a href="" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/g3-.jpg" />
                        <div class="mask">
							<h2>Programa de Riquezas</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
                        </div>
					</a>
                </div>
                <div class="view view-seventh">
                    <a href="" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/g4-.jpg" />
						<div class="mask">
							<h2>Max Income</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
						</div>
					</a>
                </div>
				

                <div class="view view-seventh">
					<a href="" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/g5-.jpg" />
						<div class="mask">
							<h2>Managed Portfolios</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
						</div>
					</a>
                </div>
                <div class="view view-seventh">
                    <a href="images/g6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/g6-.jpg" />
						<div class="mask">
							<h2>Futures</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
						</div>
					</a>
                </div>
                <div class="view view-seventh">
                    <a href="images/g7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/g7-.jpg" />
						<div class="mask">
							<h2>Mutual Funds</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
						</div>
					</a>
                </div>
                <div class="view view-seventh">
                    <a href='produto1.php' class="b-link-stripe b-animate-go thickbox">
						<img src="images/g2-.jpg" />
						<div class="mask">
							<h2>Annuities</h2>
							<p>Sed tristique nisi augue, sed elementum diam rhoncus nec.sit amet sollicitudin finibus. </p>
						</div>
					</a>
                </div>

				<div class="clearfix"></div>

            </div>
            </div>
		</div>
	</div>
<!-- //portfolio -->
<!-- pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.view-seventh a').Chocolat();
});
</script>
<!-- //pop-up-script -->

<!-- footer -->
<?php include "footer.php"; ?>
<?php
  /**
   * 说说-黑石哔哔
   * 
   * @package custom 
   * 
   **/
?>
<?php $this->need('header.php'); ?>
	<main>
		<section class="section section-lg section-hero section-shaped">
			<?php printBackground(($this->fields->pic?$this->fields->pic:getRandomImage($this->options->randomImage)), $this->options->bubbleShow); ?>
			<div class="container shape-container d-flex align-items-center py-lg">
				<div class="col px-0 text-center">
					<div class="row align-items-center justify-content-center">
						<h1 class="text-white">胡言乱语</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="section section-components bg-secondary content-card-container">
			<div class="container container-lg py-5 align-items-center content-card-container">
				<div class="card shadow content-card content-card-head">
					<section class="section">
						<div class="container">
							<div class="content">
								<script type="text/javascript" src="https://jsd.compc.cc/npm/artitalk"></script>
								<div id="bbtalk"></div>
								<!-- 引用 bbtalk -->
								<script src="https://jsd.compc.cc/npm/bbtalk@0.1.5/dist/bbtalk.min.js"></script>
								<script>
									bbtalk.init({
										appId: "appId",
										appKey: "appKey",
										serverURLs: 'serverURLs'
									})
								</script>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
	</main>
<?php $this->need('footer.php'); ?>
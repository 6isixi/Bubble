<?php
  /**
   * 说说-哔哔点啥
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
								<!--  自言自语  -->
								<div id='speak'></div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
	</main>
<?php $this->need('footer.php'); ?>

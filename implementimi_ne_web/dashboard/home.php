	
	<main class="content-wrap">
		<header class="content-head">
			<h1>General Information</h1>
		</header>
		
		<div class="content">
			<section class="info-boxes">

			<?php include __DIR__ . "/../queries/general-info-queries.php"; ?>
				
			</section>
		
        <header class="content-head">
			<h1>Our Trainers</h1>
		</header>

			<section class="person-boxes">
				<?php include __DIR__ . "/../queries/trainers-query.php"; ?>
			</section>
		</div>
	</main>


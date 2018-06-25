
	
<?php include ('navbar.php') ?>

		<section>
			<div class="endereco">
				<h1>Localização</h1>
				<img src="img/mapa.jpg" alt="" />
				<ul class="sem-padding sem-marcador">
					<li>Rua José Lourenço Kelmer, S/n - Martelos, Juiz de Fora - MG, 36036-330</li>
				</ul>
			</div>
		</section>
    <div class="mapa">
    <section id="map"> <!-- Map -->
        <iframe width="100%" height="550" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=UFJF&key=AIzaSyAoTAmjuouJBPtSCqntFFN8Tvj3p-ytFmk" allowfullscreen></iframe>
    </section>
  </div>

	<?php
		include("footer.php");
	?>
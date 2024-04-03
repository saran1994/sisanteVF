
	function afficherPDF(){   
	 var form_nom = document.querySelector('.form_nom');
	 var form_prenom = document.querySelector('.form_prenom');
	 var body = document.querySelector('.body');
	 body.innerHTML = `<div class="piece">
	<div class="logo">
		<img src="">
		<p> generer pdf</p>
	</div>
	<h1>piece identite</h1>
	<div class="elements">
		<p>nom <strong>steev</strong></p>
		<p>prenom <strong>johson</strong></p>
	</div>
	<div class="generateurBtn">
		<button class="submit">telecharger pdf</button>
		<a href="essai.php" class="submit">generer autre </a>
	</div>
</div>` 

	}

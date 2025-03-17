<html>
<head>
	<title></title>
</head>
<body>
	<!-- Bannière promotionnelle d'abonnement desktop -->
	<div class="r-selligent--surf-connecte-content -only-desktop">
		<p class="title--surf-connecte"><span class="status--surf-connecte"> 🎉 La Voix du Nord fête ses 80 ans : Abonnement à vie pour 80€ seulement !</span></p>

		<p><a class="r-btn2" data-slg-action="CTA desktop" expr:href="LINK(100)">Je m'abonne</a></p>
	</div>
	<!-- Bannière promotionnelle d'abonnement mobile -->

	<div class="r-selligent--surf-connecte-content -only-mobile">
		<p class="title--surf-connecte"><span class="status--surf-connecte"> 🎉 Abonnement à vie pour 80€</span></p>
		<a class="r-btn2" data-slg-action="CTA mobile" expr:href="LINK(100)">Je m'abonne</a>
	</div>
	<style type="text/css">/* Bouton CTA */
        .r-btn2 {
        background-color: #FDC800;
        color: black;
        font-weight: bold;
        border-radius: 5px;
        padding: 8px 12px;
        text-decoration: none; /* Retire la décoration de lien sous forme de soulignement */
        cursor: pointer; /* Change le curseur pour indiquer que c'est cliquable */
    }

    .r-btn2:hover {
        background-color: #0065B1;
        color: white;
        text-decoration: none;
    }
	</style>
	<!-- TRACKING GENERIQUE --><script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'slg_offer_load',
            'loaded_offer': '[%requestValue('OFFER')%] Promo - [%requestValue('ACTION')%][%if(isnotempty(requestValue('CX_EDITOR')),concat(' - ',requestValue('CX_EDITOR')),'')%][%if(isnotempty(requestValue('CX_SUB_EDITOR')),concat(' - ',requestValue('CX_SUB_EDITOR')),'')%][%if(isnotempty(requestValue('CX_MEMBERSTATUS')),concat(' - ',requestValue('CX_MEMBERSTATUS')),'')%]'
        });
    </script>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Validation de paiement</title>
<link href="style-pages.css" rel="stylesheet" type="text/css" />

<!-- Start google analytics section -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30184079-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End google analytics section -->

</head>

<body>

<?php include("entete.php"); ?>
<?php include("menu.php"); ?>
<div id="conteneur">
<div class="contvalid">
<div class="title">
        <h1><span class="blue">Traitement</span><span class="logo2">R�servation</span></h1>
        <p class="claim3">Validation de votre paiement</p>
    </div>
<div class="separ"><img src="images/images-design/sep.png"></div>

<div class="textevalid"><p>Merci d'avoir choisi easy way shuttle.</p><br>
<p>Votre transaction a bien �t� enregistr�e !</p><br>
<p>Vous allez recevoir un e-mail de confirmation de votre r�servation.<p><br>
<p>Pour des raisons de s�curit� il est possible que cet e-mail puisse se trouver dans vos courriers ind�sirables.<p><br>
<p>Le service client prendra prochainement contact avec vous soit par e-mail soit par t�l�phone pour un suivi de votre commande.<p><br>
<p>easy way shuttle vous remercie de votre confiance.<p></div>

<?php
  // v�rifier que payment_status a la valeur Completed
                if ( $payment_status == "Completed") {
                    // v�rifier que txn_id n'a pas �t� pr�c�demment trait�: Cr�ez une fonction qui va interroger votre base de donn�es
                    if (VerifIXNID($txn_id) == 0) {
                        // v�rifier que receiver_email est votre adresse email PayPal principale
                        if ( "votreEmailSeller" == $receiver_email) {
                            // v�rifier que payment_amount et payment_currency sont corrects
                            // traiter le paiement
                         }
			  else {
				// Mauvaise adresse email paypal
			  }
			}
			else {
				// ID de transaction d�j� utilis�
					}
			}
		  else {
		        	// Statut de paiement: Echec
		  }
?>


</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>

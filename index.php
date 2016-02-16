<?php   
    session_start();//On démarre les sessions
    $_SESSION['token'] = (isset($_SESSION['token'])) ? $_SESSION['token'] : uniqid(rand(), true) ;//Génération de jeton unique
    $_SESSION['token_time'] = time();//Enregistrement d'un timestamp
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>Priority Order</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Cascading Style Sheets -->
	<link href="page.css" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Javascript -->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.priorityOrder.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	 <?php $lang = (isset($_GET['lang'])) ? 'fr' : 'en' ; ?>
	<h1><?php echo ($lang=="fr") ? 'Mon ordre de priorité' : 'My Priority Order' ; ?></h1>
	<p style="font-style: italic;"><?php echo ($lang=="fr") ? 'Faites glisser les actions pour les ordonner' : 'Click on the Name of the Actions you want to sort' ; ?></p>
	
	
	<form action="traitement.php?lang=<?php echo $lang; ?>" onsubmit="return validateForm()" id="form" method="post" accept-charset="utf-8">
		<div style="display:none;">
                <input type="hidden" name="token" value=<?php echo $_SESSION['token']; ?> />
                <input type="hidden" id="inputcount" name="count" value="99999"/>
        </div> 
        <div class="priorityOrder">
			<ul>
				<li id="idG" value="1"><?php echo ($lang=="fr") ? 'Récupérer le linge' : 'Get Clothes' ; ?></li>
				<li id="idA" value="2"><?php echo ($lang=="fr") ? 'Répondre au téléphone' : 'Answer Phone' ; ?></li>
				<li id="idO" value="3"><?php echo ($lang=="fr") ? 'Ouvrir la porte' : 'Open Door' ; ?></li>
				<li id="idB" value="4"><?php echo ($lang=="fr") ? "S'occuper du bébé" : 'Care of Baby' ; ?></li>
				<li id="idC" value="5"><?php echo ($lang=="fr") ? 'Refermer le robinet' : 'Close Tap' ; ?></li>
			</ul>
		</div>
		<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-ok"></i> <?php echo ($lang=="fr") ? "J'ai fini" : "I'm done" ; ?> </button>
	</form>

<script type="text/javascript">
function validateForm(){
	//je dois obtenir l'ordre et l'envoyer
	var item = $("ul > li > span.item").text();
	// alert(item);
	var count = "";
	var li = $("ul > li ").each(function(index){
		// alert(index + ": "+  $(this).attr('value'));
		count += $(this).attr('value') ;
	});
	
	 // alert(count);
	// var countG=$("#idG > span.count").text();
	// var countA=$("#idA > span.count").text();
	// var countO=$("#idO > span.count").text();
	// var countB=$("#idB > span.count").text();
	// var countC=$("#idC > span.count").text();
	// var count = countG+countA+countO+countB+countC;
	//Ordre à modifier => On veut connaître l'ordre des solutions, et pas la position de chaque solution
	$("#inputcount").val(count);
	
};
</script>

</body>
</html>

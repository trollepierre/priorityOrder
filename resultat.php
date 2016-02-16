<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>Priority Results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Cascading Style Sheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css">   

    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
</head>

<body>
    <div class='container'>
        <div class="row">
             <?php $lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'en' ; ?>
    <h1 style="font-family: Open Sans, sans-serif !important; margin: 20px;" ><?php echo ($lang=="fr") ? 'Les priorités de ma vie' : 'My Priority Results' ; ?></h1>
    <h3 style="font-family: Open Sans, sans-serif !important; margin: 20px; color: rgb(255,0,0); font-style: italic;" >
    <?php echo ($lang=="fr") ? "Ce test est plus qu'une banale étude sur la réaction des gens en situation d'urgence. En analysant vos choix, il est possible d'interpréter des choses. Voici les résultats :": 
    ' The test is more than a situation test. Actually this test is able to reveal what really matters in your life. By analysing your choice, we can interpret here. Time for results: ' ; ?>
    </h3>
    </div>

    <?php 
    $lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'en' ;
        if($lang=="en") {
    $arrayName = array(
        '1' => 
        "Your personal creation.
        It tooks a lot of time to dry the laundry and the rain will oblige you to do it again. That is the indicator of how proud you are about your personal achievement.",
        '2' => 
        "Work.
        The phone symbolises work and how responsive you are about business issues.
        ",
        '3' => 
        "Friendship.
        Opening your door represents how fast you let your close relatives enter to your place. 
        ",
        '4' => 
        "Family.
        Taking care of the baby is a sign of how important your family counts for you.
        ",
        '5' => 
        "The tap...
        Well, we don't know exactly what the tap can mean. However the psychologists that conceive this test (and myself) notice that people giving a huge importance to the tap are the ones that give a big importance to their ... SEX LIFE.
        "
    );
        }else{
    $arrayName = array(        
        '1' => 
        "Vos créations personnelles
        Faire un lessive prend du temps et de l'amour... et la pluie vous obligera de devoir la refaire. Voici l'indicateur de l'importance que vous accordez à vos accomplissements personnels.",
        '2' => 
        "Travail.
        Le téléphone est le symbole des contraintes, du travail et montre votre réactivité envers les problèmes professionnels.
        ",
        '3' => 
        "Amitié.
        Les personnes sonnant à votre porte sont généralement vos proches. Ce critère démontrant votre estime pour vos relations.
        ",
        '4' => 
        "Famille.
        Prendre soin d'un bébé est un signe de l'importance accordée à la famille.
        ",
        '5' => 
        "Le robinet....
        Alors, comment dire... En fait, on ne sait pas vraiment comment interpréter la signification du robinet. Cependant les études psychologiques ont trouvé un lien entre les personnes plaçant le robinet en première position et ceux qui accorde également une grande importance au... SEXE.
        "  
    );
        }
     $arrayImg = array(
        '1' => 
        "clothes.jpg",
        '2' => 
        "phone.jpg",
        '3' => 
        "door.jpg",
        '4' => 
        "baby.jpg",
        '5' => 
        "tap.jpg"
    );
    $order = (isset($_GET['ordre'])) ? $_GET['ordre'] : '54321' ;
    $last =   $order % 10 ;
    $fourth = ($order % 100 - $last) / 10;
    $third = ($order % 1000 - $fourth * 10)/100;
    $second = ($order % 10000 - $third * 100)/1000;
    $first = ($order - $second * 1000) / 10000 ;

    $path="http://liwymoi.recontact.me/img/";
    

    echo '<div class="row">';
    echo '<p style="font-family: Open Sans, sans serif, sans-serif !important; margin: 20px; font-size: 18px; color: rgb(0,162,225); font-style: italic; " ><br> ';
    $text = ($lang=="fr") ? '5. Le moins important selon vous est ' : '5. The less important for you is: ';
    echo $text. '</p>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-xs-12 col-md-6"><br><br>'.$arrayName [$last].'</div>';
    echo '<div class="col-xs-12 col-md-6"><img style="border : 1px solid black; margin: 10px; width: 480px;" src="'.$path.$arrayImg [$last].'"></div>';
    echo '</div>';


    echo '<div class="row">';
    echo '<p style="font-family: Open Sans, sans serif, sans-serif !important; margin: 20px; font-size: 18px; color: rgb(0,162,225); font-style: italic;"><br> ';
    $text = ($lang=="fr") ? "4. Un peu plus important mais pas trop, il s'agit de " : ' 4. A little bit more important but not much is';
    echo $text. '</p>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-xs-12 col-md-6"><br><br>'.$arrayName [$fourth].'</div>';
    echo '<div class="col-xs-12 col-md-6"><img style="border : 1px solid black; margin: 10px; width: 480px;" src="'.$path.$arrayImg [$fourth].'"></div>';
    echo '</div>';

    echo '<div class="row">';
    echo '<p style="font-family: Open Sans, sans serif, sans-serif !important; margin: 20px; font-size: 18px; color: rgb(0,162,225); font-style: italic;"><br> ';
    $text = ($lang=="fr") ? '3. La priorité numéro 3 est ' : ' 3. In the middle of your concerns, you ranked: ';
    echo $text. '</p>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-xs-12 col-md-6"><br><br>'.$arrayName [$third].'</div>';
    echo '<div class="col-xs-12 col-md-6"><img style="border : 1px solid black; margin: 10px; width: 480px;" src="'.$path.$arrayImg [$third].'"></div>';
    echo '</div>';

    echo '<div class="row">';
    echo '<p style="font-family: Open Sans, sans serif, sans-serif !important; margin: 20px; font-size: 18px; color: rgb(0,162,225); font-style: italic;"><br> ';
    $text = ($lang=="fr") ? '2. La deuxième priorité de votre vie est ' : ' 2. The second more important for you is: ';
    echo $text. '</p>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-xs-12 col-md-6"><br><br>'.$arrayName [$second].'</div>';
    echo '<div class="col-xs-12 col-md-6"><img style="border : 1px solid black; margin: 10px; width: 480px;" src="'.$path.$arrayImg [$second].'"></div>';
    echo '</div>';

    echo '<div class="row">';
    echo '<p style="font-family: Open Sans, sans serif, sans-serif !important; margin: 20px; font-size: 18px; color: rgb(0,162,225); font-style: italic;"><br> ';
    $text = ($lang=="fr") ? '1. Et le numéro 1 est...  ' : ' 1. And the number one is... ';
    echo $text. '</p>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-xs-12 col-md-6"><br><br>'.$arrayName [$first].'</div>';
    echo '<div class="col-xs-12 col-md-6"><img style="border : 1px solid black; margin: 10px; width: 480px;" src="'.$path.$arrayImg [$first].'"></div>';
    echo '</div>';


    echo "</div>";
   
    
    
?>


</body>
</html>

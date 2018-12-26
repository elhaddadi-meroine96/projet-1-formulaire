<?php
$formSan = array(trim(
    'name' => FILTER_SANITIZE_STRING,
    'prenom' => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
    'pays' => FILTER_SANITIZE_NUMBER_INT,
    'message' => FILTER_SANITIZE_STRING,
    'gender' => FILTER_SANITIZE
));


$result = filter_input_array(trim(INPUT_POST, $form));
if ($result != null AND $result != FALSE) {
       echo "<strong>Nous avons bien recu votre message </strong>" . '<br/>' .  '<br/>' .
       "<strong>Votre prénom est </strong>" . $result['prenom'] . '<br/>' .
       "<strong>Votre nom est </strong>" . $result['name'] . '<br/>' .
       "<strong>Votre email est </strong>" . $result['email'] . '<br/>' .
       "<strong>Votre pays est </strong>" . $result['pays'] . '<br/>' .
       "<strong>Votre message est </strong>" . $result['message'] . '<br/>' ;
       
       
    

} else {
    echo "* Un champ est vide ou n'est pas correct!";
}
if ($result["gender"] == 1) {
    echo $result["gender"] = "<strong>Votre genre est feminin</strong>" . '<br/>';

}
else if ($result["gender"] == 2) {
    echo $result["gender"] = "<strong>Votre genre est masculin</strong>" . '<br/>';
}
else {
    $result["gender"] = null;
}
foreach($_POST["sujet"] as $result["sujet"]) {
    if ($result["sujet"] == 1) {
        echo $result["sujet"] = "<strong>Votre sujet est</strong> les kits". '<br/>';
    }
    else if ($result["sujet"] == 2) {
        echo $result["sujet"] = "<strong>Votre sujet est</strong> les accessoires". '<br/>';
    }
    else if ($result["sujet"] == 3) {
        echo $result["sujet"] = "<strong>Votre sujet est</strong> le service après vente". '<br/>';
    }
}
if (!isset($result["sujet"])) {
        echo $result["sujet"] = "<strong>Votre sujet est</strong>  autre";
}
}       




$message = $_POST['message']; 
$headers = 'FROM: site@local.dev';  
mail('contact@local.dev', 'Formulaire de contact', $result);  
?>
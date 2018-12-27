<?php

//SANITIZE//
$formSan = array(
    'name' =>  FILTER_SANITIZE_STRING,
    'prenom' => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
    'pays' => FILTER_SANITIZE_STRING,
    'message' => FILTER_SANITIZE_STRING,
    'gender' => FILTER_SANITIZE_NUMBER_INT,
    'sujet 1' 	=> FILTER_SANITIZE_NUMBER_INT,
    'sujet 2' 	=> FILTER_SANITIZE_NUMBER_INT,
    'sujet 3' 	=> FILTER_SANITIZE_NUMBER_INT
);

//FEEDBACK//
$result = filter_input_array(INPUT_POST, $formSan);
if ($result != null AND $result != FALSE) {
       echo
            "Votre prénom est " . $result['prenom'] . '<br/>' .
            "Votre nom est " . $result['name'] . '<br/>' .
            "Votre pays est " . $result['pays'] . '<br/>' .
            "Votre email est " . $result['email'] . '<br/>' .
            "Votre message est " . $result['message'] . '<br/>' ;
}




if ($result["gender"] == 1) {
    echo $result["gender"] = "Vous êtes un homme" . '<br/>';

}
else if ($result["gender"] == 2) {
    echo $result["gender"] = "Vous êtes une femme" . '<br/>';
}

else {
    $result["genre"] = null;
}


foreach($_POST["sujet"] as $result["sujet"]) {
    if ($result["sujet"] == 1) {
        echo $result["sujet"] = "Votre sujet est Hacker un pc". '<br/>';
    }
    else if ($result["sujet"] == 2) {
        echo $result["sujet"] = "Votre sujet est Manger du poulet". '<br/>';
    }
    else if ($result["sujet"] == 3) {
        echo $result["sujet"] = "Votre sujet est Autre". '<br/>';
    }
}

       


//ENVOI//

$message = $_POST['message']; 
$headers = 'FROM: site@local.dev';  
//mail('contact@local.dev','Formulaire de contact',$result);  
?>
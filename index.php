<?php
require 'vendor/autoload.php';
require 'ApiTest.php';

Flight::route('/', function(){
    echo 'hello worldddd!';

    ApiTest::sayHello();
    echo '<br>';
    // exec('php /var/www/mon_script.php > /dev/null 2>&1 & echo $!', $op);
    // $pid = (int)$op[0];
    // echo $pid;
    // $pid= pcntl_fork();
    // echo 'le pid'.$pid;
    echo "<br> voici l'autre";
    echo getmypid();
});

Flight::route('/abort', function(){

    // exec('KILL -2 '.getmypid());
    // posix_kill(getmygid());
    // $pid= pcntl_fork();
    // echo 'le pid'.$pid;

    // $cmd = "pkill -P ".getmypid();
    // $retour = shell_exec($cmd);

    // exec('php /var/www/mon_script.php > /dev/null 2>&1 & echo $!', $op);
    // $pid = (int)$op[0];
    exec('Kill -9 '.getmypid());
    echo 'arret du launch du fichier';
    // echo $retour;
    var_dump("Annulation de l'envoi du fichier");

    die;
});

Flight::route('/api/helloworld', function(){
    // $response = $this->make_request("POST", "/uploadFile");

    // Flight::json($response);

    // $response= [
    //     "data"=> "On est a ce niveau" 
    // ];

    // Flight::json($response);
    // dd("Annulation de l'envoi du fichier");

});

Flight::route('/uploadFile', function(){
    // if ($_FILES['mon_fichier']['error']) {
    //     switch ($_FILES['mon_fichier']['error']){
    //       case 1: // UPLOAD_ERR_INI_SIZE
    //         echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
    //         break;
    //       case 2: // UPLOAD_ERR_FORM_SIZE
    //         echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
    //         break;
    //       case 3: // UPLOAD_ERR_PARTIAL
    //         echo "L'envoi du fichier a été interrompu pendant le transfert !";
    //         break;
    //       case 4: // UPLOAD_ERR_NO_FILE
    //         echo "Le fichier que vous avez envoyé a une taille nulle !";
    //         break;
    //     }
    //   }else{
        // $_FILES['nom_du_fichier']['error'] vaut 0 soit UPLOAD_ERR_OK
        // ce qui signifie qu'il n'y a eu aucune erreur

            $nom = $_FILES['mon_fichier']['tmp_name'];
            $nomdestination = './files';
            sleep(5);
            echo '<br>';
            echo getmypid();

            move_uploaded_file($nom, "E:\Gateaway\EssaieLocalAlax\alax_custom_backend\/files\/".time() ) ;
            echo 'Upload function';
            // $pid= pcntl_fork();
            // echo'le pid'.$pid; 

    //   }

});




Flight::start();
?>
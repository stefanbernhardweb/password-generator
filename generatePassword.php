<?php 

if( count( $_POST ) > 0 ) {
    if( isset( $_POST['possibility'] ) ) {
        require 'includes/PasswordGenerator.php';

        $length = (int) $_POST['length'];

        if( $length < 5 ){
            $length = 5;
        }
            
        $passwordGenerator = PasswordGenerator::getInstance();
        $passwordGenerator->setSettings( htmlspecialchars($_POST['possibility']), $length );

        echo $passwordGenerator->generatePassword();
    }
}

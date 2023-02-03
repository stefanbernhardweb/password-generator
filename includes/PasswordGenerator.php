<?php

class PasswordGenerator{

    private static $instance = null;
    private array $availableChars = [];
    private int $length;

    private function __construct(){}

    /**
     * Returns the instance of the class
     *
     * @return object
     */
    public static function getInstance(): object{
        if( self::$instance === null ){
            self::$instance = new PasswordGenerator();
        }

        return self::$instance;
    }

     /**
     * Generates chars, depends on what method get chosen and saving the password length 
     *
     * @param string $letters
     * @param integer $length
     */
    public function setSettings( string $method, int $length = 8 ): void {
        $this->generateLetters(); 
        $this->generateNumbers();

        if( $method == 'random' ) {
            $this->generateSpecialChars();
        }

        $this->length = $length;
    }

    /**
     * Generates upper- and lowercase letters
     *
     * @return void
     */
    private function generateLetters(): void {
        $upperCase = range('A', 'Z');
        $lowerCase = range('a', 'z');

        $this->availableChars = array_merge( $upperCase, $lowerCase );
    }

    /**
     * Generates numbers
     *
     * @return void
     */
    private function generateNumbers(): void {
        $this->availableChars = array_merge( range( 1, 9 ), $this->availableChars );  
    }

    /**
     * Generates special chars
     *
     * @return void
     */
    private function generateSpecialChars(): void {
        $this->availableChars = array_merge( range( '!', '-' ), $this->availableChars );  
    }

    /**
     * Building password
     *
     * @return string
     */
    public function generatePassword(): string {
        $password = '';
        $availableCharsLength = count( $this->availableChars ) - 1;

        for( $i = 0; $i <= $this->length; $i++ ){
            shuffle($this->availableChars);
            
            $key = rand( 0, $availableCharsLength );
            $password .= $this->availableChars[$key];
        }

        return $password;
    }
}

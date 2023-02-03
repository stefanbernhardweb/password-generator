"use strict";

window.addEventListener( 'load', function() {
    let form = document.getElementById( 'password-settings' );
    let lengthRange = document.getElementById( 'length' );
    let length = document.getElementById( 'choosenLength' );
    
    lengthRange.addEventListener( 'input', function(){
        length.innerText = this.value;
    });

    form.addEventListener( 'submit', function( e ) {
        e.preventDefault();
      
        let data = new FormData( this );

        $.ajax({
            url: 'generatePassword.php',
            method: 'POST',
            data: data,
            processData: false,
            contentType: false,
        }).done( ( data ) => {
            let output = document.getElementById( 'response' );
            let passwordOutput = document.getElementById( 'password' );
    
          
            output.innerText = '';
            passwordOutput.innerHTML = 'Das Passwort: <strong class="pass_thick">' + data + '</strong>';
            passwordOutput.style.backgroundColor = 'white';
            
        });
    });  
});
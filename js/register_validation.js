/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

(function () {



    var email = null;
    var pwd1 = null;
    var pwd2 = null;

    let pwdRegExp = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\$@\.\?])(?=.{6,})');

    window.onload = function () {
//        if (window.history.replaceState) {
//            console.log('replaceState');
//            window.history.replaceState(null, null, window.location.href);
//        }
        onceLoaded();

    };

    function onceLoaded() {
        let form = document.getElementById("registerForm");
        //let form =  document.querySelector("#registerForm");


        email = document.getElementById("email");
        pwd1 = document.querySelector("#pwd1");
        pwd2 = document.querySelector("#pwd2");
        //https://www.w3schools.com/cssref/sel_gen_sibling.php
        errorPwd = document.querySelector("#pwd2 ~ span.error");




        form.addEventListener('submit', validate);


    }



    function validate(event) {
        clearErrors();
        let valid = true;

        if (pwd1.value !== pwd2.value) {
            valid = false;
            showErrorPwdError('Las contraseñas no coinciden');
        } else {
            if (pwdRegExp.test(pwd1.value) === false) {
                valid = false;
                showErrorPwdError('La contraseña debe tener un número, una letra mayúscula, una letra minúscula y un símbolo: $@.? ');
            } 

        }

        if (!valid) {
            // Luego evitamos que se envíe el formulario cancelando el evento
            event.preventDefault();
        }
    }

    function clearErrors() {
        errorPwd.textContent = "";
        //https://getbootstrap.com/docs/5.0/utilities/display/
        //display:none
        errorPwd.classList.add('d-none');
    }
 

    function showErrorPwdError(msg) {
        errorPwd.textContent = msg;
        //display:inline-block;
        errorPwd.classList.remove('d-none');
    }



})();
   
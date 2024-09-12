    <?php
    $errorMessage ="";
    $error = true;
    ?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"/> 
        <title>Contact form submission</title>         
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css"/> 
        <!-- Template Main CSS File -->         
        <link href="../assets/css/main.css" rel="stylesheet"/> 
        <link href="../assets/css/captcha.css" rel="stylesheet"/> 
    </head>     
    <body> 
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>         
    <body> 
        <!-- 
            <form method="post" id="contact-form"> 
                <h2>Contact us</h2> 
                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?> 
                <p> <label>First Name:</label> <input name="name" type="text"/> </p> 
                <p> <label>Email Address:</label> <input style="cursor: pointer;" name="email" type="text"/> </p> 
                <p> <label>Message:</label> <textarea name="message"></textarea> </p> 
                <p> <input type="submit" value="Send"/> </p> 
            </form>   
             text-nowrap          
            -->         
        <div class="col-lg-8 contact mx-auto mt-5"> 
            <div class="section-header"> 
                <h2>Contacto con el desarrollador</h2> 
                <p>Si quiere desarrollar una Web para su negocio, pongase en contacto con el autor y se le proporcionara un presupuesto lo mas ajustado posible.<br/>Indique brevemente el tipo de proyecto Web que tiene planeado para valorarlo adecuadamente.</p> 
            </div>             
            <form action="contact.php" method="post" role="form" class="php-email-form"> 
                <div class="row"> 
                    <div class="col-md-6 form-group"> 
                        <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required/> 
                    </div>                     
                    <div class="col-md-6 form-group mt-3 mt-md-0"> 
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo" required/> 
                    </div>                     
                </div>                 
                <div class="form-group mt-3"> 
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required/> 
                </div>                 
                <div class="form-group mt-3"> 
                    <textarea class="form-control" name="message" rows="7" placeholder="Mensaje" required></textarea> 
                </div>                 
                <div class="center"> 
                    <div id="captchaBackground"> 
                        <canvas id="captcha" width="250" height="50" class="text-center">captcha text</canvas>                         
                        <input id="textBox" class="captcha-text form-control" type="text" name="text" placeholder="Introduzca el texto de arriba" required/> 
                        <div id="buttons"> 
                            <button id="refreshButton" class="btn btn-secondary mb-1" type="button">Refrescar</button>                             
                        </div>
                        <span id="output"></span> 
                    </div>                     
                </div>                 
                <div class="my-3"> 
                    <div class="loading">Cargando</div>                     
                    <div class="error-message"></div>                     
                    <div class="sent-message">Tu mensaje se ha enviado. Gracias!</div>                     
                </div>                 
                <div class="text-center"> 
                    <?php  
                            if($error)
                                echo '<button type="submit">Enviar Mensaje</button>';
                            ?> 
                            <a class="btn btn-primary btn-goback" href="..">Volver</a> 
                </div>  
                <input type="hidden" name="tomail" value="josemalm12@gmail.com" />               
            </form>             
            <div style="text-align: center; font-size: 18px;"> 
                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?> 
            </div>             
        </div>         
        <script src="../assets/js/captcha.js" defer></script>         
        <script src="../assets/vendor/php-email-form/validate.js"></script>         
        <script>
     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         message: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.name.value,
             email: form.elements.email.value,
             message: form.elements.message.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script>         
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>         
    </body>     
</html>

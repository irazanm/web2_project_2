<!DOCTYPE html>

<!-- 
background color : #3b4465
button color : #a7e245
font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
------------------------------------
<link rel="icon" href="image/Logo1.png" type="image/gif" sizes="16x16">
for the logo in the bar , must add it at all the pages

-->
<?php
require 'configration.php';

?>
<html>

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/Logo1.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="newcss.css">
        <script src="javaS/home.js"></script>
        <style>
            /* radio buttom */
            /* The container */
            .container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                float: left;
                vertical-align: middle;

            }

            /* Hide the browser's default radio button */
            .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                float: left;
                clear: left;
                width: 50px;
                line-height: 20px;
                background-color:#a7e245;

            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 20px;
                width: 20px;
                background-color: #eee;
                border-radius: 50%;
            }



            /* When the radio button is checked, add a blue background */
            .container input:checked ~ .checkmark {
                background-color: #a7e245;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .container input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .container .checkmark:after {
                top: 6px;
                left: 6px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }
        </style>
    </head>

    <body>
        <!-- Home page that provides links to log in as a coach or a trainee. It also gives the option
    for new trainees to ‘sign-up’ -->
        <section class="forms-section">
            <img class="section-title" src="image/Logo1.png" width ="300" alt="Logo">
            <div class="forms">
                <div class="form-wrapper is-active">
                    <button type="button" class="switcher switcher-login">
                        Login
                        <span class="underline"></span>
                    </button>
                    <form class="form form-login" method="POST">
                        <fieldset>
                            <legend>Please, enter your email and password for login.</legend>
                            <div class="input-block">
                                <label for="login-email">E-mail</label>
                                <input id="login-email" type="email" name="login-email" required>
                            </div>
                            <div class="input-block">
                                <label for="login-password">Password</label>
                                <input id="login-password" type="password" name="login-password" required>
                            </div>
                            <div class="input-block">  
                                <label>I am : <br> </label>
                                <label for="Coach" class="container" >Coach &nbsp;&nbsp;
                                    <input type="radio" id="Coach" name="Type" value="Coach" class="container" required >
                                    <span class="checkmark"></span>
                                </label>
                                <label for="Trainee" class="container" >Trainee 
                                    <input type="radio" id="Trainee" name="Type" value="Trainee" class="container">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn-login" onclick="Redirect_Login(); return false;">Login</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        if (isset($_POST['login-email']) && isset($_POST['login-password']) && isset($_POST['Type'])) {
                            
                            
                        } else {
                            //acually no need becouse the attrbiute required at the input but just to make sure.
                            echo '<script type="text/JavaScript">  
                                    alert("Enter All the requirment please !"); 
                                    </script>';
                        }
                    }
                    ?>
                </div>
                <div class="form-wrapper">
                    <button type="button" class="switcher switcher-signup">
                        Sign Up - Trainee 
                        <span class="underline"></span>
                    </button>
                    <form class="form form-signup"  method="Post">
                        <fieldset>
                            <!-- INSERT INTO `trainee` (`id`, `username`, `password`, `name`, `email`) VALUES ('1', 't_1', '1234', 'Razan', 'Razan@gmail.com'); -->
                            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                            <div class="input-block">
                                <label for="fullName">Full Name</label>
                                <input id="fullName" type="text" required>
                            </div>
                            <div class="input-block">
                                <label for="signup-email">E-mail</label>
                                <input id="signup-email" type="email" required>
                            </div>
                            <div class="input-block">
                                <label for="signup-password">Password</label>
                                <input id="signup-password" type="password" required>
                            </div>

                        </fieldset>
                        <button type="submit" class="btn-signup" onclick="Redirect_Signup(); return false;">Continue</button>
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <br>
            <br>
        </footer>
        <script type="text/javascript">
            const switchers = [...document.querySelectorAll('.switcher')];

            switchers.forEach(item => {
                item.addEventListener('click', function () {
                    switchers.forEach(item => item.parentElement.classList.remove('is-active'));
                    this.parentElement.classList.add('is-active');
                });
            });
            /*--to make the submit by the enter key at the keybord--*/
            $(document).ready(function () {

                var makeAllFormSubmitOnEnter = function () {
                    $('form input, form select').live('keypress', function (e) {
                        if (e.which && e.which == 13) {
                            $(this).parents('form').submit();
                            return false;
                        } else {
                            return true;
                        }
                    });
                };

                makeAllFormSubmitOnEnter();
            });
        </script>
    </body>

</html>

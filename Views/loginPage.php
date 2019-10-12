<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>Seal Login</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,700,900&amp;display=swap" rel="stylesheet" />
    <!-- FONT  AWESOME -->
    <script src="https://kit.fontawesome.com/2a49eb69db.js"></script>
    <!--link to favicon-->
	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

    <body id="loginPage">
        <main role="main" class="h-100">
            <div id="loginForm" class="text-center mx-auto px-5 py-5 shadow-lg formWrapper">
                <form method="post" action="index.php" class="form-signin needs-validation" novalidate>

                <input type="hidden" name="controller" value="outside">
                <input type="hidden" name="route" value="processlogin">
                <!-- selecting controller and route upon form submission -->

                    <img id="loginLogo" class="mx-auto my-5" src="imgs/logo-s.png" alt="Suggest logo icon">

                    <div class="fieldset">
                        <label for="validationCustom01" class="sr-only">Username</label>
                        <input type="email" name="strUserName" id="inputEmail" class="form-control needs-validation" placeholder="Username" required autofocus>
                        <div class="invalid-feedback">Uh oh, can you check your username?</div>
                    </div>

                    <div class="fieldset mt-2">
                        <label for="validationCustom02" class="sr-only">Password</label>
                        <input type="password" name="strPassword" id="inputPassword" class="form-control needs-validation" placeholder="Password" required>
                        <div class="invalid-feedback">Uh oh, can you try your password again?</div>
                    </div>

                    <div class="fieldset mt-4 mb-4">
                        <button class="btn btn-primary btn-block btn-lg" type="submit" name="strSubmit">Sign in</button>
                    </div>

                    <div class="fieldset mt-3 mb-3">
                        <small class="finePrint">Not a member? <a href="#" type="button" data-toggle="modal" data-target="#registerModal" class="highlight">Create an account</a></small>
                    </div>
                </form>
            </div><!--//form wrapper-->

            <!-- Modal -->
            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header mx-auto">
                            <h5 class="modal-title" id="registerModalLabel">Create an account to use Seal!</h5>

                        </div>

                        <div class="modal-body">
                            <div id="registerForm" class="text-center mx-auto px-5 py-5 formWrapper">
                                <form method="post" action="index.php" class="form-signin needs-validation" novalidate>

                                    <input type="hidden" name="controller" value="outside">
                                    <input type="hidden" name="route" value="createnewuser">
                                    <!-- selecting controller and route upon form submission -->

                                    <img id="loginLogo" class="mx-auto my-5" src="imgs/logo-s.png" alt="Suggest logo icon">
                                    
                                    <div class="fieldset">
                                        <label for="validationCustom01" class="sr-only">First Name</label>
                                        <input type="text" name="strFirstName" id="inputFirstName" class="form-control needs-validation" placeholder="First Name" required autofocus>
                                        <div class="invalid-feedback">Sorry, we need your first name!</div>
                                    </div>

                                    <div class="fieldset mt-2">
                                        <label for="validationCustom01" class="sr-only">Last Name</label>
                                        <input type="text" name="strLastName" id="inputLastName" class="form-control needs-validation" placeholder="Last Name" required >
                                        <div class="invalid-feedback">Sorry, we need your last name!</div>
                                    </div>

                                    <div class="fieldset mt-2">
                                        <label for="validationCustom01" class="sr-only">Email Address</label>
                                        <input type="email" name="strEmail" id="inputEmail" class="form-control needs-validation" placeholder="Email" required >
                                        <div class="invalid-feedback">Sorry, we need you email!</div>
                                    </div>

                                    <div class="fieldset mt-2">
                                        <label for="validationCustom01" class="sr-only">Username</label>
                                        <input type="text" name="strUserName" id="inputUsername" class="form-control needs-validation" placeholder="Username" required >
                                        <div class="invalid-feedback">Sorry, we need a username!</div>
                                    </div>

                                    <div class="fieldset mt-2">
                                        <label for="validationCustom02" class="sr-only">Password</label>
                                        <input type="password" name="strPassword" id="inputPassword" class="form-control needs-validation" placeholder="Password" required>
                                        <div class="invalid-feedback">Sorry, we need a password!</div>
                                    </div>
                        </div><!--//modal body-->
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-secondary">Register</button>
                        </div><!--//modal footer-->

                                </form><!--//form (slightly out of sequential order due to modal)-->
                            </div><!--//formwrapper (slightly out of sequential order due to modal)-->
                    </div><!--//modal content-->
                </div><!--//modal dialogue-->
            </div><!--//modal-->
        </main>

        <!-- JS FORM VALIDATION -->
        <script type="text/javascript" src="js/form-validation-plugin.js"></script>

        <!-- BOOTSTRAP JQUERY -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP POPPER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
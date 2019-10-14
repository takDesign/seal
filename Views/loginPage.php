    <body id="loginPage">
        <main role="main" class="container-fluid">
            <section class="row">
                <div class="col-md-6 h100">
                    <div class="col-md-4 mx-auto d-flex flex-column justify-content-center align-items-center h100">

                        <img src="Views/imgs/logo2.png" alt="seal logo" class="fluid logoLg">

                        <hr class="shortSeparator">

                        <div id="loginText" class="text-center mt-2">
                            <h1 class="mt-1">Seal</h1>
                            <p class="mt-4">The suggestion box app</p>
                        </div><!-- //copy-->
                    </div><!-- //col4 -->
                </div><!-- //col6 -->

                <div class="col-12 col-md-4 d-flex align-items-center h100">
                    <div id="loginForm" class="d-flex mx-auto px-md-5 py-md-5 shadow-lg formWrapper">
                        <form method="post" action="index.php" class="form-signin px-3 py-3 needs-validation" novalidate>

                            <input type="hidden" name="controller" value="outside">
                            <input type="hidden" name="route" value="processlogin">
                            <!-- selecting controller and route upon form submission -->
                            <div class="formHeader">
                                <p class="h2">Sign in</p>
                                <?php
                                if (isset($_GET['error'])) {
                                    echo '<p style="color:red;">Incorrect username or password.</p>';
                                }
                                ?>
                                <p>To see the latest suggestions</p>
                            </div>

                            <div class="fieldset">
                                <label for="validationCustom01" class="sr-only">Username</label>
                                <input type="text" name="username" id="inputEmail" class="form-control needs-validation" placeholder="Username" required autofocus>
                                <div class="invalid-feedback">Uh oh, can you check your username?</div>
                            </div>

                            <div class="fieldset mt-2">
                                <label for="validationCustom02" class="sr-only">Password</label>
                                <input type="password" name="password" id="inputPassword" class="form-control needs-validation" placeholder="Password" required>
                                <div class="invalid-feedback">Uh oh, can you try your password again?</div>
                            </div>

                            <div class="fieldset mt-4 mb-4">
                                <button class="btn btn-primary btn-lg" type="submit" name="strSubmit">Sign in</button>
                            </div>

                            <div class="fieldset mt-3 mb-3">
                                <p class="finePrint">Not a member? <a href="#" type="button" data-toggle="modal" data-target="#registerModal" class="highlight">Create an account</a></p>
                            </div>
                        </form>
                    </div>
                    <!--//form wrapper-->

                    <!-- Modal -->
                    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header mx-auto mt-4">
                                    <h5 class="modal-title" id="registerModalLabel">Create an account to use Seal!</h5>
                                </div>

                                <div class="modal-body">
                                    <div id="registerForm" class="text-center mx-auto px-md-5 py-md-2 formWrapper">
                                        <form method="post" action="index.php" class="form-signin needs-validation" novalidate>

                                            <input type="hidden" name="controller" value="outside">
                                            <input type="hidden" name="route" value="createNewUser">
                                            <!-- selecting controller and route upon form submission -->

                                            <img id="loginLogo" class="mx-auto mb-3" src="Views/imgs/logo.png" alt="Suggest logo icon">

                                            <div class="fieldset">
                                                <label for="validationCustom01" class="sr-only">First Name</label>
                                                <input type="text" name="strFirstName" id="inputFirstName" class="form-control needs-validation" placeholder="First Name" required autofocus>
                                                <div class="invalid-feedback">Sorry, we need your first name!</div>
                                                <?php if (isset($_GET['firstNameError'])) {
                                                    echo '<div style="color: red;">Please use only letters for your first name</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="validationCustom01" class="sr-only">Last Name</label>
                                                <input type="text" name="strLastName" id="inputLastName" class="form-control needs-validation" placeholder="Last Name" required>
                                                <div class="invalid-feedback">Sorry, we need your last name!</div>
                                                <?php if (isset($_GET['lastNameError'])) {
                                                    echo '<div style="color: red;">Please use only letters for your last name</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="validationCustom01" class="sr-only">Email Address</label>
                                                <input type="email" name="strEmail" id="inputEmail" class="form-control needs-validation" placeholder="Email" required>
                                                <div class="invalid-feedback">Sorry, we need you email!</div>
                                                <?php if (isset($_GET['emailError'])) {
                                                    echo '<div style="color: red;">Please enter a valid email</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="validationCustom01" class="sr-only">Username</label>
                                                <input type="text" name="strUserName" id="inputUsername" class="form-control needs-validation" placeholder="Username" required>
                                                <div class="invalid-feedback">Sorry, we need a username!</div>
                                                <?php if (isset($_GET['userNameError'])) {
                                                    echo '<div style="color: red;">Please enter a real username</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="validationCustom02" class="sr-only">Password</label>
                                                <input type="password" name="strPassword" id="inputPassword" class="form-control needs-validation" placeholder="Password" required>
                                                <div class="invalid-feedback">Sorry, we need a password!</div>
                                                <?php if (isset($_GET['passwordError'])) {
                                                    echo '<div style="color: red;">Please enter a password that have at least: 8charactors, 1upper case letter, 1lower case letter and 1number.</div>';
                                                } ?>
                                            </div>
                                    </div>
                                    <!--//modal body-->

                                    <div class="modal-footer mx-5 mt-3 mb-4">
                                        <button type="button" class="btn btn-outline-secondary float-left" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary float-left">Register</button>
                                    </div>
                                    <!--//modal footer-->

                                    </form>
                                    <!--//form (slightly out of sequential order due to modal)-->
                                </div>
                                <!--//formwrapper (slightly out of sequential order due to modal)-->
                            </div>
                            <!--//modal content-->
                        </div>
                        <!--//modal dialogue-->
                    </div>
                    <!--//modal-->
                </div>
                <!--//BS col-->
            </section><!--  //BS row -->
        </main>

        <!-- JS FORM VALIDATION -->
        <script src="Views/js/form-validation-plugin.js"></script>
        <!-- BOOTSTRAP JQUERY -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP POPPER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
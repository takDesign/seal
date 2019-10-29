    <body id="loginPage">
        <main class="container-fluid">
            <section class="row">
            <div class="fish"><img src="Views/imgs/big.png"></div>
            <div class="fishSmall"><img src="Views/imgs/small.png"></div>
            <div class="one"><img src="Views/imgs/big.png"></div>
            <div class="oneSmall"><img src="Views/imgs/small.png"></div>
            <div class="two"><img src="Views/imgs/big.png"></div>
            <div class="twoSmall"><img src="Views/imgs/small.png"></div>
            <div class="three"><img src="Views/imgs/big.png"></div>
            <div class="threeSmall"><img src="Views/imgs/small.png"></div>
            <div class="four"><img src="Views/imgs/big.png"></div>
            <div class="fourSmall"><img src="Views/imgs/small.png"></div>
            <div class="five"><img src="Views/imgs/big.png"></div>
            <div class="fiveSmall"><img src="Views/imgs/small.png"></div>
            <div class="six"><img src="Views/imgs/big.png"></div>
            <div class="sixSmall"><img src="Views/imgs/small.png"></div>
            <div class="seven"><img src="Views/imgs/big.png"></div>
            <div class="sevenSmall"><img src="Views/imgs/small.png"></div>
            <div class="eight"><img src="Views/imgs/big.png"></div>
            <div class="eightSmall"><img src="Views/imgs/small.png"></div>
            <div class="nine"><img src="Views/imgs/big.png"></div>
            <div class="nineSmall"><img src="Views/imgs/small.png"></div>
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
                    <div class="d-flex mx-auto px-md-5 py-md-5 shadow-lg formWrapper">
                        <form id="login" method="post" action="index.php" class="form-signin px-3 py-3 needs-validation" novalidate>

                            <input type="hidden" name="controller" value="outside">
                            <input type="hidden" name="route" value="processlogin">
                            <!-- selecting controller and route upon form submission -->
                            <div class="formHeader">
                                <p class="h2">Sign in</p>
                                <p>To see the latest suggestions</p>
                                <?php
                                if (isset($_GET['error'])) {
                                    echo '<p class="error">Incorrect Email or Password.</p>';
                                }
                                ?>
                            </div>

                            <div class="fieldset">
                                <label for="inputEmail" class="sr-only">Email</label>
                                <input type="text" name="email" id="inputEmail" class="form" placeholder="Email" autofocus>
                            </div>

                            <div class="fieldset mt-2">
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" name="password" id="inputPassword" class="form password" placeholder="Password">
                                <small class="note">The password must contain at least 1 Uppercase character, lowercase character, number and special charactor.</small>
                            </div>

                            <div class="fieldset mt-4 mb-4">
                                <button class="btn btn-primary btn-lg" type="submit" name="strSubmit">Sign in</button>
                            </div>

                            <div class="fieldset mt-3 mb-3">
                                <p class="finePrint">Not a member? <a href="#" data-toggle="modal" data-target="#registerModal" class="highlight">Create an account</a></p>
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
                                    <div class="text-center mx-auto px-md-5 py-md-2 formWrapper">
                                        <form id="register" method="post" action="index.php" class="form-signin" novalidate>

                                            <input type="hidden" name="controller" value="outside">
                                            <input type="hidden" name="route" value="createNewUser">
                                            <!-- selecting controller and route upon form submission -->

                                            <img id="loginLogo" class="mx-auto mb-3" src="Views/imgs/logo.png" alt="Suggest logo icon">

                                            <div class="fieldset">
                                                <label for="inputFirstName" class="sr-only">First Name</label>
                                                <input type="text" name="strFirstName" id="inputFirstName" class="form firstName" placeholder="First Name" required>
                                                <!-- <div class="invalid-feedback">The first name must have at least 2 charactors and contain only letters.</div> -->
                                                <?php if (isset($_GET['firstNameError'])) {
                                                    echo '<div class ="invalid-feedback">The first name must have at least 2 charactors and contain only letters.</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="inputLastName" class="sr-only">Last Name</label>
                                                <input type="text" name="strLastName" id="inputLastName" class="form lastName" placeholder="Last Name" required>
                                                <!-- <div class="invalid-feedback">The last name must have at least 2 charactors and contain only letters.</div> -->
                                                <?php if (isset($_GET['lastNameError'])) {
                                                    echo '<div class ="invalid-feedback">The last name must have at least 2 charactors and contain only letters.</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="inputEmail" class="sr-only">Email Address</label>
                                                <input type="email" name="strEmail" id="inputEmail" class="form email" placeholder=" Email" required>
                                                <!-- <div class="invalid-feedback">Please enter a valid email</div> -->
                                                <?php if (isset($_GET['emailError'])) {
                                                    echo '<div class ="invalid-feedback">Please enter a valid email</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="inputUsername" class="sr-only">Username</label>
                                                <input type="text" name="strUserName" id="inputUsername" class="form userName" placeholder="Username" required>
                                                <!-- <div class="invalid-feedback">The user name must have at least 2 charactors and contain only letters.</div> -->
                                                <?php if (isset($_GET['userNameError'])) {
                                                    echo '<div class ="invalid-feedback">The user name must have at least 2 charactors and contain only letters.</div>';
                                                } ?>
                                            </div>

                                            <div class="fieldset mt-2">
                                                <label for="inputPassword" class="sr-only">Password</label>
                                                <input type="password" name="strPassword" id="inputPassword" class="form password" placeholder="Password" required>
                                                <small class="note">The password must contain at least 1 Uppercase character, lowercase character, number and special charactor</small>
                                                <!-- <div class="invalid-feedback">The password must contain at least 1 Uppercase character, lowercase character, number and special charactor</div> -->
                                                <?php if (isset($_GET['passwordError'])) {
                                                    echo '<div style="color: red;">The password must contain at least 1 Uppercase character, lowercase character, number and special charactor</div>';
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

        <!-- BOOTSTRAP JQUERY -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- JS FORM VALIDATION -->
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script src="Views/js/form-validation-plugin.js"></script>
        <!-- BOOTSTRAP POPPER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
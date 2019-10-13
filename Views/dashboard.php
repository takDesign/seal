<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <title>Seal Dashboard</title>

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

    <body id="dashboardPage">
        <main role="main" class="container-fluid">
            <section class="row">
                <div class="col-md-3 shadow accountCol pl-md-5 pt-5">
                    <svg class="shadow-sm bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                        <title>User Avatar</title>
                        <rect width="100%" height="100%" fill="#777"/>
                        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>
                    <p class="mt-4 h2">Hey Username!</p>
                    <p class="h3">This is your dashboard</p>
                </div><!--  //accountsCol -->

                <div class="col-md-8 suggestCol removeGutter">
                    <form class="px-4 py-4 shadow-sm">
                        <div class="form-group row">
                            <div class="col-sm-12 px-5 py-3">
                                <p class="h2 mb-3">Have an idea?</p>
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Enter your suggestion here">
                                <div class="fieldset float-right mt-4">
                                    <button class="btn btn-primary btn-lg" type="submit" name="strSubmit">Suggest it</button>
                                </div><!-- //fieldset -->
                            </div><!-- /BS col -->
                        </div><!-- /form-group -->
                    </form>

                    <div class="col-md-10 mx-auto mt-5 listHeader">
                        <p class="h3 float-left">The top five</p>
                        <a href="#" class="h3 float-right">View all</a>
                    </div>
                </div><!--  //suggestionsCol -->

                <div class="col-md-1 shadow statsCol">
                    <div class="logoSm d-flex justify-content-center">
                        <img src="imgs/logo.png" alt="seal logo" class="fluid mt-4 logoSm">
                    </div>
                    
                </div><!--  //statsCol -->
            </section><!--  //BS row -->
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
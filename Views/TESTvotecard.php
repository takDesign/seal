<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<title>Seal</title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,700,900&amp;display=swap" rel="stylesheet" />
	<!-- FONT  AWESOME -->
	<script src="https://kit.fontawesome.com/2a49eb69db.js"></script>
	<!--link to favicon-->
	<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<!--JQUERY-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  	crossorigin="anonymous"></script>
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="Views/css/style.css" />
</head>
<!--html framework with body tag -->
<body id="dashboardPage">

                    <div id="suggestionList" class="card w-75 mx-auto mt-2 mb-2 shadow-sm suggestCard">
                        <div class="card-body px-5 py-5 suggestion" data-suggestionid="<?=$suggestion["id"]?>">
                            <h6 class="card-title"><i class="fas fa-circle fa-lg mr-1"></i>Username</h6>
                            <p class="card-text"><em>Content</em></p>
                            <div class="votesystem">
                                <i class="far fa-comment-alt fa-lg mr-3"></i>
                                <a href="#"><div class="heart" data-type="positive"></div></a>
                                <span class="float-right count">17 votes</span>
                            </div><!-- //comments votes -->
                            <div class="card-text mt-3">
                                <small class="cardDate">Date-Time</small>
                            </div><!-- //date time -->
                        </div><!-- //card-body -->
                    </div><!-- //card -->


        <!-- JS FORM VALIDATION -->
        <script src="Views/js/form-validation-plugin.js"></script>
        <script src="Views/js/heart.js"></script>
        <!-- BOOTSTRAP JQUERY -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP POPPER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <!-- VOTING JS  -->
        <script src="Views/js/voting.js"></script>
        <!-- MUSTACHE-REPLACEMENT -->
        <script src="Views/js/mustache-replacement.js"></script>
    </body>
</html>
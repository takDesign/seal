<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hey! Create a New Suggestion</h1>
    <?php
    if (isset($_GET['success'])) {
        echo '<p style="color:red"}>Suggestion Posted!</p>';
    }
    ?>
    <div class="loginform">
        <form method="post" action="index.php?controller=inside&route=processSuggestion">
            <div class="fieldset">
                <label>Title of the Suggestion</label>
                <input type="text" name="strTitle" value="">
            </div>

            <div class="fieldset">
                <label>Suggestion</label>
                <textarea name="strContent"></textarea>
            </div>

            <div class="fieldset">
                <input type="submit" value="Submit" class="btn btnPositive">
            </div>
        </form>
    </div>
    </div>
</body>

</html>
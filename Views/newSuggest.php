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
        
        <div class="listview">
<?php

foreach($arrSuggestions as $suggestions)
{
    echo "<div class='suggestions'>".$suggestions->suggestion." <span class='date'>".$suggestions->dPosted."<a href='index.php?controller=inside&route=likeSuggestion&id=".$suggestions->id."'>LIKE</a> <a href='index.php?controller=inside&route=deleteSuggestion&id=".$suggestions->id."'>DELETE</a></div>";
}
?>
</div>
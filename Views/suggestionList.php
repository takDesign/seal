
<div class="listview">
<?php

foreach($data as $suggestions)
{
    echo "<div class='suggestions'>".$suggestions->suggestion." <span class='date'>".$suggestions->dPosted."<a href='index.php?controller=inside&route=likeSuggestion&id=".$suggestions->id."'>LIKE</a> <a href='index.php?controller=inside&route=deleteSuggestion&id=".$suggestions->id."'>DELETE</a></div>";
}
?>
</div>

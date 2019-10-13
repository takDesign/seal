<div class="listview">
    <?php
    foreach ($data as $suggestions) {
        $dPosted = date('g:i A - j M Y ', strtotime($suggestions->dPosted));
        echo '<div class="suggestions">' . 'ID: ' . $suggestions->id . '<br>' .
            '<p class="title">' . 'Title: ' . $suggestions->strTitle . '</p>' .
            '<p class="suggestion">' . 'Suggestion: ' . $suggestions->strContent . '</p>' .
            '<p class="date">' . 'Date Posted: ' . $dPosted . '</p>' .
            '<p class="advocate">' . 'Posted By : ' . $suggestions->strUserName . '</p>' .
            '<a href="index.php?controller=inside&route=likeSuggestion&id=' . $suggestions->id . '">LIKE</a><br>' .
            '<a href="index.php?controller=inside&route=deleteSuggestion&id=' . $suggestions->id . '">DELETE</a></div>';
    }
    ?>
</div>
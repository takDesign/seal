<footer></footer>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="templates/js/vendor/modernizr-3.7.1.min.js"></script>
<script src="templates/js/plugins.js"></script>
<?php
$url = $_SERVER['REQUEST_URI'];
if (strstr($url, 'suggestions.php') == true || strstr($url, 'pageDetail.php') == true) {
	echo '<script src="templates/js/vote.js"></script>';
}
if (strstr($url, 'index.php') != true && strstr($url, 'signUp.php') != true) {
	echo '<script src="templates/js/main.js"></script>';
}
?>
</body>

</html>
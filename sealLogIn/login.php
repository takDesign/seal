<?php
include("database.php");
include("Users.php");
//if there are users then show a log in form, else show a register form
$oUsers = new Users();

if($oUsers->checkUsers())
{
    //log in form
    ?>
    <form method="post" action="dashboard.php">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit">
</form>
<?php
} else {
    //register log in
    ?>
    <form method="post" action="processLogIn.php">
        <input type = "text" name= "username" placeholder="username"><br/>
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
    <?php
}
?>

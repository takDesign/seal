<?php
Class User extends Database
{
    public function createUser($username, $password)
    {
        //check if we have a user
        if(!$this->getUserByUsername($username))
        {
            //if the above statement is false then we create a user
            //password_hash - >created a new password using a strong one-way hashing algorithm
            //PASSWORD_DEFAULT -> this is a constant that is designed to change over time as new and stronger algorithsma are added to PHP. 
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            //mysqli_real_escape_string used to create a legal SQL string that you can use in a SQL statement. It is encoded.
            $sql = "INSERT INTO users (strUsername, strPassword) VALUES ('".mysqli_real_escape_string($this->con, $username)."', '".$hashedPass."')";

            mysqli_query($this->con, $sql);

            if($this->getUserByUsername($username))
            {
                echo "ya did it";
                //brings user back to log in?
                //brings user to dashboard?
            } else {
                echo "user not created";
                //oops! Sorry something went wrong on our end, please try again
            }
        } else {
            //if this is returned true then someone has this username and you can't take it
            echo "username was taken";
        }

        public function getUserByUsername($username)
        {
            //check db for for a user by a username
            $sql = "SELECT * FROM users WHERE strUsername='".mysqli_real_escape_string($this->, $username)."'";
            $results = mysqli_query($this->con, $sql);
            
            return mysqli_fetch_assoc($results);
        }
}
?>
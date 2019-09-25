<?php

Class Users extends Database {
    public function checkUsers()
    {
        //check to see if I have any users in the db
        $sql = "SELECT * FROM users";
        $results = mysqli_query($this->con, $sql);

        //$oneRecord = mysqli_fetch_assoc($results);
        //return $oneRecord;

        return mysqli_fetch_assoc($results);
    }
}

?>

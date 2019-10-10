<?php

Class Db
{
	public static function con(){
        //hasn't been moved to the proper place but...?
		$conDets = parse_ini_file("config.ini");
		$con = mysqli_connect( $conDets['host'], $conDets['username'], $conDets['password'], $conDets['database'] ); 
        return $con;
        // $oDb = new Db($con);
        // return $oDb;   
        
        // echo $conDets;
        //  die;     
    }

        
    
    // echo $oDb;
    // die;
 
	// static public function connect()
	// {
	// 	return mysqli_connect("localhost", "root", "", "seal");
	// }

	public static function query($con, $sql)
	{
		Util::log($sql);
		$results = mysqli_query($con, $sql);
		return $results;
	}
}

?>
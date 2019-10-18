<?php
// this file handles data for the voting

class Voting 
{

	static public function saveUserVote()
	{
        // db connection
        $con = Db::con();
        // check user login??
        $checkLogin = Inside::preTrip();

        //does this userID match voteID ? If yes, can't vote if no save vote

        // save who voted and what they voted on into the db
        if (isset($_GET['nVote'])) {
            
            $sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (" . $_GET['nSuggestionsID'] . "," . $_GET['nVote'] . "," . $_SESSION['userID'] . ")";
        
            mysqli_query($con, $sql);
        }

        // this gets the stats for the current suggestion
        $sql = "SELECT COUNT(id) as numVotes FROM votes WHERE nSuggestionsID=" . $_GET['nSuggestionsID'];
    
        $results = mysqli_query($con, $sql);
    
        $arrDataResult = mysqli_fetch_assoc($results);
        
        // return as JSON for AJAX call on suggestion cards
        echo json_encode($arrDataResult);
        
    }

    static public function getNumVotes()
    {
        // check login??

        // db connection
        $con = Db::con();
        // get the number of votes from the db for a specific suggestion
        $sql = "SELECT nSuggestionsID, COUNT(id) as numVotes FROM votes GROUP BY nSuggestionsID";

        $results = mysqli_query($con, $sql);

        while ($arrDataResult = mysqli_fetch_assoc($results)) {
            $arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
        }

        // encode as JSON for AJAX call on suggestion cards
        echo json_encode($arrData);
    }
}
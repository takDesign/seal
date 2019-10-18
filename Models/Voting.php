<?php
// this file handles data for the voting

class Voting 
{
    //does this userID match voteID ? If yes, can't vote if no save vote

	static public function saveUserVote()
	{
        // db connection
        $con = Db::con();
        // check user login??
        $checkLogin = Inside::preTrip();

        // if we voted, then save it
        if (isset($_GET['nVote']))
        {
            $sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (".$_GET['suggestionsID'].",".$_GET['nVote'].",".$loggedInUserID.")";
            mysqli_query($con, $sql);
        }

        // get the votes for the current suggestion
        $sql = "SELECT COUNT(id) as numVotes, SUM(nVote) as posVotes FROM votes WHERE nSuggestionsID=".$_GET['suggestionsID'];

        $results = mysqli_query($con, $sql);
        $arrDataResult = mysqli_fetch_assoc($results);

        // encode JSON for the API call
        echo json_encode($arrDataResult);
    }

    static public function getNumVotes()
    {
         // db connection
        $con = Db::con();
        // check user login??
        $checkLogin = Inside::preTrip();
        
        $sql = "SELECT nSuggestionsID, COUNT(id) FROM votes GROUP BY nSuggestionsID";
        $results = mysqli_query($con, $sql);

        while($arrDataResult = mysqli_fetch_assoc($results))
        {
            $arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
        }

        // encode JSON for the API call
        echo json_encode($arrData);
    }

    public function getVoteHistory() 
    {
        // SQL tests ok
        $sql = "SELECT votes.id,
        votes.nSuggestionsID,
        votes.nVote,
        votes.nUsersID,
        users.strUserName
        FROM votes
        LEFT JOIN users ON users.id=votes.nUsersID
        WHERE votes.nSuggestionsID=".$_GET['nSuggestionsID'];

        $results = mysqli_query($con, $sql);

        while($arrDataResult = mysqli_fetch_assoc($results)){
            $arrData[$arrDataResult["id"]] = $arrDataResult;
        }

        echo json_encode($arrData);
    }
}
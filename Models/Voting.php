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

        // get current user ID
        $loggedInUserID = User::getCurrentUser();

        // if we voted, then save it
        if (isset($_GET['nVote']))
        {
            $sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (".$_GET['nSuggestionsID'].",".$_GET['nVote'].",".$loggedInUserID.")";
            mysqli_query($con, $sql);
        }

        // get the votes for the current suggestion
        $sql = "SELECT COUNT(id) as voteCount FROM votes WHERE nSuggestionsID=".$_GET['nSuggestionsID'];

        $results = mysqli_query($con, $sql);
        $arrDataResult = mysqli_fetch_assoc($results);

        // encode JSON for the API call
        echo json_encode($arrDataResult);
    }

    static public function getVoteCount()
    {
         // db connection
        $con = Db::con();
        // check user login??
        $checkLogin = Inside::preTrip();
        
        $sql = "SELECT nSuggestionsID, COUNT(id) as voteCount FROM votes GROUP BY nSuggestionsID";
        $results = mysqli_query($con, $sql);

        while($arrDataResult = mysqli_fetch_assoc($results))
        {
            $arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
        }

        // encode JSON for the API call
        echo json_encode($arrData);
        // JSON object indexed by suggestion ID
        /* EXAMPLE OUTPUT $arrData
        {
            "0":{"nSuggestionID":"0","voteCount":"7"},
            "1":{"nSuggestionID":"1","voteCount":"97"},
            "3":{"nSuggestionID":"3","voteCount":"34"},
            "4":{"nSuggestionID":"4","voteCount":"10"},
            "6":{"nSuggestionID":"6","voteCount":"5"},
            "7":{"nSuggestionID":"7","voteCount":"2"},
            "8":{"nSuggestionID":"8","voteCount":"1"}
        }
        */
    
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
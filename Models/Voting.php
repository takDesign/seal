<?php
// this file handles data for the voting

class Voting 
{
    //does this userID match voteID ? If yes, can't vote if no save vote

	static public function saveUserVote()
	{
        // db connection
        $con = Db::con();
        // check user login
        $checkLogin = Inside::preTrip();

        // get current user ID so we can save who voted on what
        $loggedInUserID = User::getCurrentUser();

        // if the heart is clicked then
        if (isset($_GET['nVote']))
        {
            $sql = "INSERT INTO votes (nSuggestionsID, nVote, nUsersID) VALUES (".$_GET['nSuggestionsID'].",".$_GET['nVote'].",".$loggedInUserID.")";
            // sql tests ok

            mysqli_query($con, $sql);
        }

        // get the votes for the current suggestion
        $sql = "SELECT COUNT(id) as voteCount FROM votes WHERE nSuggestionsID=".$_GET['nSuggestionsID'];
        // sql tests ok

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
        // sql tests ok
        $results = mysqli_query($con, $sql);

        while($arrDataResult = mysqli_fetch_assoc($results))
        {
            $arrData[$arrDataResult["nSuggestionsID"]] = $arrDataResult;
        }

        // encode JSON for the API call
        echo json_encode($arrData);
        // JSON object is indexed by suggestion ID
        /* EXAMPLE OUTPUT $arrData
        JSON OBJECT 
        {
            "1":{"nSuggestionsID":"1","voteCount":"37"},
            "2":{"nSuggestionsID":"2","voteCount":"2"},
            "3":{"nSuggestionsID":"3","voteCount":"5"},
            "4":{"nSuggestionsID":"4","voteCount":"2"},
            "5":{"nSuggestionsID":"5","voteCount":"2"},
            "6":{"nSuggestionsID":"6","voteCount":"5"},
            "8":{"nSuggestionsID":"8","voteCount":"1"},
            "9":{"nSuggestionsID":"9","voteCount":"1"},
            "18":{"nSuggestionsID":"18","voteCount":"1"},
            "19":{"nSuggestionsID":"19","voteCount":"2"},
            "20":{"nSuggestionsID":"20","voteCount":"2"}
        }
        */
    }

    public function getVoteHistory() 
    {
        $sql = "SELECT votes.id,
        votes.nSuggestionsID,
        votes.nVote,
        votes.nUsersID,
        users.strUserName
        FROM votes
        LEFT JOIN users ON users.id=votes.nUsersID
        WHERE votes.nSuggestionsID=".$_GET['nSuggestionsID'];
        // sql test ok

        $results = mysqli_query($con, $sql);

        while($arrDataResult = mysqli_fetch_assoc($results)){
            $arrData[$arrDataResult["id"]] = $arrDataResult;
        }

        echo json_encode($arrData);
    }
}
<!-- SECTION TO BE DYNAMICALLY CREATED VIA PHP -->
<div id="suggestionlist" class="card w-75 mx-auto mt-2 mb-2 shadow-sm suggestCard saltandpepper" data-api="index.php?controller=inside&route=showDashboard" data-callback="bindVoteSystem">

    <div class="card-body px-5 py-5 suggestion" data-suggestionid="{id}">
        <h6 class="card-title"><i class="fas fa-circle fa-lg mr-1"></i>{strUserName}</h6>
        <p class="card-text"><em>{strContent}</em></p>

        <div class="votesystem">
            <i class="far fa-comment-alt fa-lg mr-3"></i>
            <a href="#" class="pos">
                <div class="heart" data-type="positive"></div>
            </a>
            <span class="float-right count">{totalVotes}</span>

            <div class="card-text mt-3">
                <small class="cardDate">{dPosted}</small>
            </div><!-- //date time -->
        </div> <!-- votesystem -->
    </div><!-- //card-body -->
</div><!-- //card -->
<!-- END SECTION TO BE DYNAMICALLY CREATED VIA PHP -->
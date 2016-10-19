<style type="text/css">

#developmentTitle {
	margin-top: 80px;
	text-align: center;
    font-size: 100px;
    font-family: "bebas_neueregular", Arial;
    letter-spacing: 30px;
    position: absolute;
    width: 100%;
}
</style>

<div id="projectDescription">
	<div id="projectMainTitle">
		<div class="projectTxtTypeP">
			<div id="projectTypeIns" class="projectTxtTypeIns"></div>
		</div>
		<div id="projectTxtTitleP" class="projectTxtTitleP"></div>
		<div id="projectTxtClient" class="projectTxtClientP">
			<div id="projectTxtClientInsP" class="projectTxtClientIns">TVN</div>
		</div>
		<div id="projectDesc"></div>
	</div>
</div>

<div id="stageHolder">
	<div id="developmentTitle" class="title-page" style="display: block;">Development</div>
	<div id="projectsStageHolder"></div>
	<div id="navigationProjects"></div>
	<div id="navigationPhotos"></div>
</div>

<script type="text/javascript">

$( document ).ready(function() {
    $("#developmentTitle").css('display', 'block');
			var $all_msg = $('#developmentTitle');
			  //get a list of letters from the welcome text
			  var $wordList = $('#developmentTitle').text().split("");
			  //clear the welcome text msg
			  $('#developmentTitle').text("");
			  //loop through the letters in the $wordList array
			  $.each($wordList, function(idx, elem) {
			    //create a span for the letter and set opacity to 0
			    var newEL = $("<span/>").text(elem).css({
			      opacity: 0
			    });
			    //append it to the welcome message
			    newEL.appendTo($all_msg);
			    //set the delay on the animation for this element
			    newEL.delay(idx * 70);
			    //animate the opacity back to full 1
			    newEL.animate({
			      opacity: 1
			    }, 1100);
			  });
});
</script>
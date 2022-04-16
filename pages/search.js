
// id to add to the template
currId = 1;
var myTemplate = $('#card-template')[0].outerHTML;

function load(playerScore, enemyScore){
	let stringId = currId.toString();
	// add the template before the benchmark
	$("#toStack").before(myTemplate);
	// change the id of the newly added template
	$("#toStack").prev().attr("id", stringId);
	
	// add id # and text for each unique item
	$("#"+stringId).find(".mydropdown").attr("value", "collapse-" + stringId);
	$("#"+stringId).find("#card-template-collapse").attr("id", "collapse-" + stringId);
	$("#"+stringId).find("#score").attr("id", "score-" + stringId);

	$("#"+stringId).find(".player-score").text(playerScore.toString());
	$("#"+stringId).find(".enemy-score").text(enemyScore.toString());


	// modify html id tags to specific values from db
	// other are empty for now since its dummy data only	


	// change color if win / lose
	let status = playerScore > enemyScore ? "win" : "lose";
	if (status == "win"){
		$("#"+stringId).find(".card-display").addClass("victory-card");
		$("#"+stringId).find(".status").addClass("victory");
		$("#"+stringId).find(".status").text("Victory");
		$("#"+stringId).find(".score").addClass("victory");
		$("#"+stringId).find(".mydropdown").addClass("dropdown-victory");
	}else{
		$("#"+stringId).find(".card-display").addClass("defeat-card");
		$("#"+stringId).find(".status").addClass("defeat");
		$("#"+stringId).find(".status").text("Defeat");
		$("#"+stringId).find(".score").addClass("defeat");
		$("#"+stringId).find(".mydropdown").addClass("dropdown-defeat");
	}

	// increment for next template
	currId += 1;
}


load(20, 10); // score of player,enemy
load(5, 15); // score of player,enemy
load(23, 12); // score of player,enemy
load(12, 29); // score of player,enemy
load(3, 22); // score of player,enemy


// FOR BAR FILL STATISTICS
// change width property of .bar-fill


// FOR #column-stat
if ($(window).width() < 992){
	$("#column-stat").addClass("order-first");
}else{
	if ($("#column-stat").hasClass("order-first")){
		$("#column-stat").removeClass("order-first");
	}
}
$( window ).resize(function() {
  if ($(window).width() < 992){
		$("#column-stat").addClass("order-first");
	}else{
		if ($("#column-stat").hasClass("order-first")){
			$("#column-stat").removeClass("order-first");
		}
	}
});


// FOR DROPDOWN
$( ".mydropdown" ).each(function(index) {
    $(this).on("click", function(){
			let target = $(this).val(); 
			if ($(this).find("img").hasClass("down")){
				$(this).find("img").removeClass("down");
				$("#"+target).css("height", "0px");
				$("#"+target).css("overflow-y", "hidden");
			}else{
				$(this).find("img").addClass("down");
				$("#"+target).css("height", "8em");
				$("#"+target).css("overflow-y", "auto");
			}
    });
});
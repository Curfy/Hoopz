// id to add to the template
currId = 0;

// set template as object
var myTemplate = $('#card-template')[0].outerHTML;

// function that adds new template
function load(){
	// add the template before the benchmark
	$("#toStack").before(myTemplate);
	// change the id of the newly added template
	$("#card-template").attr("id", currId.toString());
	

	// modify html tags to specific values from db
	// empty for now since its dummy data only	


	// increment for next template
	currId += 1;
}


for (let i = 0; i < 5; i++){
	load();
}


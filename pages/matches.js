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
	

	// modify html id tags to specific values from db
	// empty for now since its dummy data only	


	// increment for next template
	currId += 1;
}


for (let i = 0; i < 5; i++){
	load();
}

// for calendar
// Initialize all input of type date
var calendars = bulmaCalendar.attach('[type="date"]', {
	type: 'date', 
	dateFormat: 'MMMM dd, yyyy',
	isRange: false,
	showHeader: false,
	showFooter: false,
	showButtons: false,
	labelFrom: 'Date',
	headerPosition: 'bottom',
	color: 'dark'
});

// Loop on each calendar initialized
for(var i = 0; i < calendars.length; i++) {
	// Add listener to select event
	calendars[i].on('select', date => {
		console.log(date);
	});
}

// To access to bulmaCalendar instance of an element
var element = document.querySelector('#myCalendar');
if (element) {
	// bulmaCalendar instance is available as element.bulmaCalendar
	element.bulmaCalendar.on('select', function(datepicker) {
		console.log(datepicker.data.value());
	});
}


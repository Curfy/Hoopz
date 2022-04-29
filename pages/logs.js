currLogId = 1;
currModId = 1;
var myTemplateLog = $('#card-template-log')[0].outerHTML;
var myTemplateMod = $('#card-template-mod')[0].outerHTML;

function loadLog(){
	let stringId = currLogId.toString();
	// add the template before the benchmark
	$("#toStackLog").before(myTemplateLog);
	// change the id of the newly added template
	$("#toStackLog").prev().attr("id", stringId);




	// increment for next template
	currLogId += 1;
}

function loadMod(){
	let stringId = currModId.toString();
	// add the template before the benchmark
	$("#toStackMod").before(myTemplateMod);
	// change the id of the newly added template
	$("#toStackMod").prev().attr("id", stringId);




	// increment for next template
	currModId += 1;
}

for(let i=0; i<10; i++){
	loadLog();
}
for(let i=0; i<7; i++){
	loadMod();
}
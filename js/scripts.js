$(".button-collapse").sideNav();

$(document).ready(function(){
		$('select').material_select();
		$('.modal').modal();
		$('.10').addClass("disabledbutton");
		$('.9').addClass("disabledbutton");
		$('.5').addClass("disabledbutton");
		$('.26').addClass("disabledbutton");
		$('.23').addClass("disabledbutton");
		$('.22').addClass("disabledbutton");
		$('.20').addClass("disabledbutton");
		$('.18').addClass("disabledbutton");
		$('.17').addClass("disabledbutton");
		});

function myFunction(id){
	document.getElementById("span"+id).innerHTML = counter;	
};

function level(val,id){
	var skillName = id.substring(3);
	var maxLevel = document.getElementById("max"+skillName).innerHTML;
	var max = parseInt(maxLevel,10);
	var level = document.getElementById("level"+skillName).value;
	var hidden = document.getElementById("hidden"+skillName).innerHTML;
	var new_level = parseInt(level,10) + val;
	var new_hidden = parseInt(hidden,10) + val;
	document.getElementById("level"+skillName).value = new_level;
	document.getElementById("hidden"+skillName).innerHTML = new_hidden;

	if(new_level == max){
		document.getElementById("add"+skillName).style.visibility = "hidden";
	}

	if(new_level < max){
		document.getElementById("add"+skillName).style.visibility = "visible";
	}

	if(new_level == 0){
		document.getElementById("min"+skillName).style.visibility = "hidden";
	}

	if(new_level > 0){
		document.getElementById("min"+skillName).style.visibility = "visible";
	}
	//Endure
	if($('.hidden8').html() >= 5){
		$('.10').removeClass("disabledbutton");
	}

	if($('.hidden8').html() < 5){
		$('.10').addClass("disabledbutton");
	}

	//Magnum Break
	if($('.hidden7').html() >= 5){
		$('.9').removeClass("disabledbutton");
	}

	if($('.hidden7').html() < 5){
		$('.9').addClass("disabledbutton");
	}

	//Two Hand Sword Mastery
	if($('.hidden4').html() >= 1){
		$('.5').removeClass("disabledbutton");
	}

	if($('.hidden4').html() < 1){
		$('.5').addClass("disabledbutton");
	}

	//Thunder Storm
	if($('.hidden25').html() >= 4){
		$('.26').removeClass("disabledbutton");
	}

	if($('.hidden25').html() < 4){
		$('.26').addClass("disabledbutton");
	}

	//Fire Wall
	if($('.hidden15').html() >= 1 && $('.hidden22').html() >= 5){
		$('.23').removeClass("disabledbutton");
	}

	if($('.hidden15').html() < 1 || $('.hidden22').html() < 5){
		$('.23').addClass("disabledbutton");
	}

	//Fire Ball
	if($('.hidden24').html() >= 4){
		$('.22').removeClass("disabledbutton");
	}

	if($('.hidden24').html() < 4){
		$('.22').addClass("disabledbutton");
	}

	//Frost Diver
	if($('.hidden19').html() >= 5){
		$('.20').removeClass("disabledbutton");
	}

	if($('.hidden19').html() < 5){
		$('.20').addClass("disabledbutton");
	}

	//Soul Strike
	if($('.hidden16').html() >= 4){
		$('.18').removeClass("disabledbutton");
	}

	if($('.hidden16').html() < 4){
		$('.18').addClass("disabledbutton");
	}

	//Safety Wall
	if($('.hidden18').html() >= 5 && $('.hidden16').html() >= 7){
		$('.17').removeClass("disabledbutton");
	}

	if($('.hidden18').html() < 5 || $('.hidden16').html() < 7){
		$('.17').addClass("disabledbutton");
	}

	return [new_level, new_hidden];
};
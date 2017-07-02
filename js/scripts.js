$(".button-collapse").sideNav();

$(document).ready(function(){
		$('select').material_select();
		$('.modal').modal();
		$('.collapsible').collapsible();
		$("[id^=min]").css("visibility", "hidden");
		$('.10').addClass("disabledbutton");
		$('.9').addClass("disabledbutton");
		$('.5').addClass("disabledbutton");
		$('.26').addClass("disabledbutton");
		$('.23').addClass("disabledbutton");
		$('.22').addClass("disabledbutton");
		$('.20').addClass("disabledbutton");
		$('.18').addClass("disabledbutton");
		$('.17').addClass("disabledbutton");
		$('.29').addClass("disabledbutton");
		$('.30').addClass("disabledbutton");
		$('.32').addClass("disabledbutton");
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
	var sp_left = document.getElementById("sp_left").innerHTML;
	var new_level = parseInt(level,10) + val;
	var new_hidden = parseInt(hidden,10) + val;
	var new_sp_left = parseInt(sp_left,10) - val;
	document.getElementById("level"+skillName).value = new_level;
	document.getElementById("hidden"+skillName).innerHTML = new_hidden;
	document.getElementById("sp_left").innerHTML = new_sp_left;

	if(new_sp_left <= 0){
		alert('All points used!');
		$("[id^=add]").addClass("disabledbutton");
	}

	if(new_sp_left > 0){
		$("[id^=add]").removeClass("disabledbutton");
	}

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

	//Skill Unlock Requirements Section
	//Endure
	if($('.hidden8').html() >= 5){
		$('.10').removeClass("disabledbutton");
	}

	if($('.hidden8').html() < 5){
		$('.10').addClass("disabledbutton");
		$('.level10').val(0);
		$('.hidden10').html(0);
	}

	//Magnum Break
	if($('.hidden7').html() >= 5){
		$('.9').removeClass("disabledbutton");
	}

	if($('.hidden7').html() < 5){
		$('.9').addClass("disabledbutton");
		$('.level9').val(0);
		$('.hidden9').html(0);
	}

	//Two Hand Sword Mastery
	if($('.hidden4').html() >= 1){
		$('.5').removeClass("disabledbutton");
	}

	if($('.hidden4').html() < 1){
		$('.5').addClass("disabledbutton");
		$('.level5').val(0);
		$('.hidden5').html(0);
	}

	//Thunder Storm
	if($('.hidden25').html() >= 4){
		$('.26').removeClass("disabledbutton");
	}

	if($('.hidden25').html() < 4){
		$('.26').addClass("disabledbutton");
		$('.level26').val(0);
		$('.hidden26').html(0);
	}

	//Fire Wall
	if($('.hidden15').html() >= 1 && $('.hidden22').html() >= 5){
		$('.23').removeClass("disabledbutton");
	}

	if($('.hidden15').html() < 1 || $('.hidden22').html() < 5 || $('.hidden24').html() < 4){
		$('.23').addClass("disabledbutton");
		$('.level23').val(0);
		$('.hidden23').html(0);
	}

	//Fire Ball
	if($('.hidden24').html() >= 4){
		$('.22').removeClass("disabledbutton");
	}

	if($('.hidden24').html() < 4){
		$('.22').addClass("disabledbutton");
		$('.level22').val(0);
		$('.hidden22').html(0);
	}

	//Frost Diver
	if($('.hidden19').html() >= 5){
		$('.20').removeClass("disabledbutton");
	}

	if($('.hidden19').html() < 5){
		$('.20').addClass("disabledbutton");
		$('.level20').val(0);
		$('.hidden20').html(0);
	}

	//Soul Strike
	if($('.hidden16').html() >= 4){
		$('.18').removeClass("disabledbutton");
	}

	if($('.hidden16').html() < 4){
		$('.18').addClass("disabledbutton");
		$('.level18').val(0);
		$('.hidden18').html(0);
	}

	//Safety Wall
	if($('.hidden18').html() >= 5 && $('.hidden16').html() >= 7){
		$('.17').removeClass("disabledbutton");
	}

	if($('.hidden18').html() < 5 || $('.hidden16').html() < 7){
		$('.17').addClass("disabledbutton");
		$('.level17').val(0);
		$('.hidden17').html(0);
	}

	//Vulture's Eye
	if($('.hidden28').html() >= 3){
	$('.29').removeClass("disabledbutton");
	}

	if($('.hidden28').html() < 3){
		$('.29').addClass("disabledbutton");
		$('.level29').val(0);
		$('.hidden29').html(0);
	}

	//Attention Concentrate
	if($('.hidden29').html() >= 1){
		$('.30').removeClass("disabledbutton");
	}

	if($('.hidden28').html() < 1 || $('.hidden28').html() < 3){
		$('.30').addClass("disabledbutton");
		$('.level30').val(0);
		$('.hidden30').html(0);
	}

	//Arrow Shower
	if($('.hidden31').html() >= 5){
		$('.32').removeClass("disabledbutton");
	}

	if($('.hidden31').html() < 5){
		$('.32').addClass("disabledbutton");
		$('.level32').val(0);
		$('.hidden32').html(0);
	}

	return [new_level, new_hidden, new_sp_left];
};


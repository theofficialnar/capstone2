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

// function myFunction(id){
// 	document.getElementById("span"+id).innerHTML = counter;	
// };

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
		new_level = 0;
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
		var skill_pts = parseInt($('.level10').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.10').addClass("disabledbutton");
		$('.level10').val(0);
		$('.hidden10').html(0);
		$('.min10').css("visibility", "hidden");
	}

	if($('.hidden8').html() >= 5 && $('.level10').val() > 0){
		$('.min10').css("visibility", "visible");
	}

	//Magnum Break
	if($('.hidden7').html() >= 5){
		$('.9').removeClass("disabledbutton");
	}

	if($('.hidden7').html() < 5){
		var skill_pts = parseInt($('.level9').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.9').addClass("disabledbutton");
		$('.level9').val(0);
		$('.hidden9').html(0);
		$('.min9').css("visibility", "hidden");
	}

	if($('.hidden7').html() >= 5 && $('.level9').val() > 0){
		$('.min9').css("visibility", "visible");
	}

	//Two Hand Sword Mastery
	if($('.hidden4').html() >= 1){
		$('.5').removeClass("disabledbutton");
	}

	if($('.hidden4').html() < 1){
		var skill_pts = parseInt($('.level5').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.5').addClass("disabledbutton");
		$('.level5').val(0);
		$('.hidden5').html(0);
		$('.min5').css("visibility", "hidden");
	}

	if($('.hidden4').html() >= 1 && $('.level5').val() > 0){
		$('.min5').css("visibility", "visible");
	}

	//Thunder Storm
	if($('.hidden25').html() >= 4){
		$('.26').removeClass("disabledbutton");
	}

	if($('.hidden25').html() < 4){
		var skill_pts = parseInt($('.level26').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.26').addClass("disabledbutton");
		$('.level26').val(0);
		$('.hidden26').html(0);
		$('.min26').css("visibility", "hidden");
	}

	if($('.hidden25').html() >= 4 && $('.level26').val() > 0){
		$('.min26').css("visibility", "visible");
	}

	//Fire Wall
	if($('.hidden15').html() >= 1 && $('.hidden22').html() >= 5){
		$('.23').removeClass("disabledbutton");
	}

	if($('.hidden15').html() < 1 || $('.hidden22').html() < 5 || $('.hidden24').html() < 4){
		var skill_pts = parseInt($('.level23').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.23').addClass("disabledbutton");
		$('.level23').val(0);
		$('.hidden23').html(0);
		$('.min23').css("visibility", "hidden");
	}

	if($('.hidden15').html() >= 1 && $('.hidden22').html() >= 5 && $('.level23').val() > 0){
		$('.min23').css("visibility", "visible");
	}

	//Fire Ball
	if($('.hidden24').html() >= 4){
		$('.22').removeClass("disabledbutton");
	}

	if($('.hidden24').html() < 4){
		var skill_pts = parseInt($('.level22').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.22').addClass("disabledbutton");
		$('.level22').val(0);
		$('.hidden22').html(0);
		$('.min22').css("visibility", "hidden");
	}

	if($('.hidden24').html() >= 4 && $('.level22').val() > 0){
		$('.min22').css("visibility", "visible");
	}

	//Frost Diver
	if($('.hidden19').html() >= 5){
		$('.20').removeClass("disabledbutton");
	}

	if($('.hidden19').html() < 5){
		var skill_pts = parseInt($('.level20').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.20').addClass("disabledbutton");
		$('.level20').val(0);
		$('.hidden20').html(0);
		$('.min20').css("visibility", "hidden");
	}

	if($('.hidden19').html() >= 5 && $('.level20').val() > 0){
		$('.min20').css("visibility", "visible");
	}

	//Soul Strike
	if($('.hidden16').html() >= 4){
		$('.18').removeClass("disabledbutton");
	}

	if($('.hidden16').html() < 4){
		var skill_pts = parseInt($('.level18').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.18').addClass("disabledbutton");
		$('.level18').val(0);
		$('.hidden18').html(0);
		$('.min18').css("visibility", "hidden");
	}

	if($('.hidden16').html() < 4 && $('.level18').val() > 0){
		$('.min18').css("visibility", "visible");
	}

	//Safety Wall
	if($('.hidden18').html() >= 5 && $('.hidden16').html() >= 7){
		$('.17').removeClass("disabledbutton");
	}

	if($('.hidden18').html() < 5 || $('.hidden16').html() < 7){
		var skill_pts = parseInt($('.level17').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.17').addClass("disabledbutton");
		$('.level17').val(0);
		$('.hidden17').html(0);
		$('.min17').css("visibility", "hidden");
	}

	if($('.hidden18').html() >= 5 && $('.hidden16').html() >= 7 && $('.level17').val() > 0){
		$('.min17').css("visibility", "visible");
	}

	//Vulture's Eye
	if($('.hidden28').html() >= 3){
		$('.29').removeClass("disabledbutton");
	}

	if($('.hidden28').html() < 3){
		var skill_pts = parseInt($('.level29').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.29').addClass("disabledbutton");
		$('.level29').val(0);
		$('.hidden29').html(0);
		$('.min29').css("visibility", "hidden");
	}

	if($('.hidden28').html() >= 3 && $('.level29').val() > 0){
		$('.min29').css("visibility", "visible");
	}

	//Attention Concentrate
	if($('.hidden29').html() >= 1){
		$('.30').removeClass("disabledbutton");
	}

	if($('.hidden29').html() < 1 || $('.hidden28').html() < 3){
		var skill_pts = parseInt($('.level30').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.30').addClass("disabledbutton");
		$('.level30').val(0);
		$('.hidden30').html(0);
		$('.min30').css("visibility", "hidden");
	}

	if($('.hidden29').html() >= 1 && $('.hidden28').html() >= 3 && $('.level30').val() > 0){
		$('.min30').css("visibility", "visible");
	}

	//Arrow Shower
	if($('.hidden31').html() >= 5){
		$('.32').removeClass("disabledbutton");
	}

	if($('.hidden31').html() < 5){
		var skill_pts = parseInt($('.level32').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.32').addClass("disabledbutton");
		$('.level32').val(0);
		$('.hidden32').html(0);
		$('.min32').css("visibility", "hidden");
	}

	if($('.hidden31').html() >= 5 && $('.level32').val() > 0){
		$('.min32').css("visibility", "visible");
	}

	return [new_level, new_hidden, new_sp_left];
};


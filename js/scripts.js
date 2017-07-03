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
		$('.36').addClass("disabledbutton");
		$('.38').addClass("disabledbutton");
		$('.39').addClass("disabledbutton");
		$('.40').addClass("disabledbutton");
		$('.42').addClass("disabledbutton");
		$('.43').addClass("disabledbutton");
		$('.45').addClass("disabledbutton");
		$('.46').addClass("disabledbutton");
		$('.47').addClass("disabledbutton");
		$('.48').addClass("disabledbutton");
		$('.51').addClass("disabledbutton");
		$('.52').addClass("disabledbutton");
		$('.53').addClass("disabledbutton");
		$('.55').addClass("disabledbutton");
		$('.57').addClass("disabledbutton");
		$('.65').addClass("disabledbutton");
		$('.67').addClass("disabledbutton");
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

	if(new_level < max || new_level == 0){
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

	//Demon Bane
	if($('.hidden35').html() >= 3){
		$('.36').removeClass("disabledbutton");
	}

	if($('.hidden35').html() < 3){
		var skill_pts = parseInt($('.level36').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.36').addClass("disabledbutton");
		$('.level36').val(0);
		$('.hidden36').html(0);
		$('.min36').css("visibility", "hidden");
	}

	if($('.hidden35').html() >= 3 && $('.level36').val() > 0){
		$('.min36').css("visibility", "visible");
	}

	//Pneuma
	if($('.hidden40').html() >= 4 && $('.hidden37').html() >= 1 && $('.hidden39').html() >= 2){
		$('.38').removeClass("disabledbutton");
	}

	if($('.hidden40').html() < 4 || $('.hidden39').html() < 2 || $('.hidden37').html() < 1){
		var skill_pts = parseInt($('.level38').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.38').addClass("disabledbutton");
		$('.level38').val(0);
		$('.hidden38').html(0);
		$('.min38').css("visibility", "hidden");
	}

	if($('.hidden39').html() >= 2 && $('.hidden37').html() >= 1 && $('.hidden40').html() >= 4 && $('.level38').val() > 0){
		$('.min38').css("visibility", "visible");
	}

	if($('.level38').val() == 0){
		$('.add38').css("visibility", "visible");
	}

	//Teleportation
	if($('.hidden37').html() >= 1){
		$('.39').removeClass("disabledbutton");
		// $('.add39').css("visibility", "visible");
	}

	if($('.hidden37').html() < 1){
		var skill_pts = parseInt($('.level39').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.39').addClass("disabledbutton");
		$('.level39').val(0);
		$('.hidden39').html(0);
		$('.min39').css("visibility", "hidden");
	}

	if($('.hidden37').html() >= 1 && $('.level39').val() > 0){
		$('.min39').css("visibility", "visible");
	}

	if($('.level39').val() == 0){
		$('.add39').css("visibility", "visible");
	}

	//Warp Portal
	if($('.hidden39').html() >= 2 && $('.hidden37').html() >= 1){
		$('.40').removeClass("disabledbutton");
	}

	if($('.hidden39').html() < 2 || $('.hidden37').html() < 1){
		var skill_pts = parseInt($('.level40').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.40').addClass("disabledbutton");
		$('.level40').val(0);
		$('.hidden40').html(0);
		$('.min40').css("visibility", "hidden");
	}

	if($('.hidden39').html() >= 2 && $('.hidden37').html() >= 1 && $('.level40').val() > 0){
		$('.min40').css("visibility", "visible");
	}

	if($('.level40').val() == 0){
		$('.add40').css("visibility", "visible");
	}

	//Inc Agi
	if($('.hidden41').html() >= 3){
		$('.42').removeClass("disabledbutton");
	}

	if($('.hidden41').html() < 3){
		var skill_pts = parseInt($('.level42').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.42').addClass("disabledbutton");
		$('.level42').val(0);
		$('.hidden42').html(0);
		$('.min42').css("visibility", "hidden");
	}

	if($('.hidden41').html() >= 3 && $('.level42').val() > 0){
		$('.min42').css("visibility", "visible");
	}

	//Dec Agi
	if($('.hidden41').html() >= 3 && $('.hidden42').html() >= 1){
		$('.43').removeClass("disabledbutton");
	}

	if($('.hidden41').html() < 3 || $('.hidden42').html() < 1){
		var skill_pts = parseInt($('.level43').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.43').addClass("disabledbutton");
		$('.level43').val(0);
		$('.hidden43').html(0);
		$('.min43').css("visibility", "hidden");
	}

	if($('.hidden41').html() >= 3 && $('.hidden42').html() >= 1 && $('.level43').val() > 0){
		$('.min43').css("visibility", "visible");
	}

	//Signum Crucis
	if($('.hidden35').html() >= 3 && $('.hidden36').html() >= 3){
		$('.45').removeClass("disabledbutton");
	}

	if($('.hidden35').html() < 3 || $('.hidden36').html() < 3){
		var skill_pts = parseInt($('.level45').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.45').addClass("disabledbutton");
		$('.level45').val(0);
		$('.hidden45').html(0);
		$('.min45').css("visibility", "hidden");
	}

	if($('.hidden35').html() >= 3 && $('.hidden36').html() >= 3 && $('.level45').val() > 0){
		$('.min45').css("visibility", "visible");
	}

	//Angelus
	if($('.hidden35').html() >= 3){
		$('.46').removeClass("disabledbutton");
	}

	if($('.hidden35').html() < 3){
		var skill_pts = parseInt($('.level46').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.46').addClass("disabledbutton");
		$('.level46').val(0);
		$('.hidden46').html(0);
		$('.min46').css("visibility", "hidden");
	}

	if($('.hidden35').html() >= 3 && $('.level46').val() > 0){
		$('.min46').css("visibility", "visible");
	}

	//Blessing
	if($('.hidden35').html() >= 5){
		$('.47').removeClass("disabledbutton");
	}

	if($('.hidden35').html() < 5){
		var skill_pts = parseInt($('.level47').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.47').addClass("disabledbutton");
		$('.level47').val(0);
		$('.hidden47').html(0);
		$('.min47').css("visibility", "hidden");
	}

	if($('.hidden35').html() >= 5 && $('.level47').val() > 0){
		$('.min47').css("visibility", "visible");
	}

	//Cure
	if($('.hidden41').html() >= 2){
		$('.48').removeClass("disabledbutton");
	}

	if($('.hidden41').html() < 2){
		var skill_pts = parseInt($('.level48').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.48').addClass("disabledbutton");
		$('.level48').val(0);
		$('.hidden48').html(0);
		$('.min48').css("visibility", "hidden");
	}

	if($('.hidden41').html() >= 2 && $('.level48').val() > 0){
		$('.min48').css("visibility", "visible");
	}

	//Discount
	if($('.hidden50').html() >= 3){
		$('.51').removeClass("disabledbutton");
	}

	if($('.hidden50').html() < 3){
		var skill_pts = parseInt($('.level51').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.51').addClass("disabledbutton");
		$('.level51').val(0);
		$('.hidden51').html(0);
		$('.min51').css("visibility", "hidden");
	}

	if($('.hidden50').html() >= 3 && $('.level51').val() > 0){
		$('.min51').css("visibility", "visible");
	}

	//Overcharge
	if($('.hidden50').html() >= 3 && $('.hidden51').html() >= 3){
		$('.52').removeClass("disabledbutton");
	}

	if($('.hidden50').html() < 3 || $('.hidden51').html() < 3){
		var skill_pts = parseInt($('.level52').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.52').addClass("disabledbutton");
		$('.level52').val(0);
		$('.hidden52').html(0);
		$('.min52').css("visibility", "hidden");
	}

	if($('.hidden50').html() >= 3 && $('.hidden51').html() >= 3 && $('.level52').val() > 0){
		$('.min52').css("visibility", "visible");
	}

	//Pushcart
	if($('.hidden50').html() >= 5){
		$('.53').removeClass("disabledbutton");
	}

	if($('.hidden50').html() < 5){
		var skill_pts = parseInt($('.level53').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.53').addClass("disabledbutton");
		$('.level53').val(0);
		$('.hidden53').html(0);
		$('.min53').css("visibility", "hidden");
	}

	if($('.hidden50').html() >= 5 && $('.level53').val() > 0){
		$('.min53').css("visibility", "visible");
	}

	//Vending
	if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3){
		$('.55').removeClass("disabledbutton");
	}

	if($('.hidden50').html() < 5 || $('.hidden53').html() < 3){
		var skill_pts = parseInt($('.level55').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.55').addClass("disabledbutton");
		$('.level55').val(0);
		$('.hidden55').html(0);
		$('.min55').css("visibility", "hidden");
	}

	if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3 && $('.level55').val() > 0){
		$('.min55').css("visibility", "visible");
	}

	//Buying Store
	if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3 && $('.hidden55').html() >= 1){
		$('.57').removeClass("disabledbutton");
	}

	if($('.hidden50').html() < 5 || $('.hidden53').html() < 3 || $('.hidden55').html() < 1){
		var skill_pts = parseInt($('.level57').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.57').addClass("disabledbutton");
		$('.level57').val(0);
		$('.hidden57').html(0);
		$('.min57').css("visibility", "hidden");
	}

	if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3 && $('.hidden55').html() >= 1 && $('.level57').val() > 0){
		$('.min57').css("visibility", "visible");
	}

	if($('.level57').val() == 0){
		$('.add57').css("visibility", "visible");
	}

	//Hiding
	if($('.hidden64').html() >= 5){
		$('.65').removeClass("disabledbutton");
	}

	if($('.hidden64').html() < 5){
		var skill_pts = parseInt($('.level65').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.65').addClass("disabledbutton");
		$('.level65').val(0);
		$('.hidden65').html(0);
		$('.min65').css("visibility", "hidden");
	}

	if($('.hidden64').html() >= 5 && $('.level65').val() > 0){
		$('.min65').css("visibility", "visible");
	}

	//Detoxify
	if($('.hidden66').html() >= 3){
		$('.67').removeClass("disabledbutton");
	}

	if($('.hidden66').html() < 3){
		var skill_pts = parseInt($('.level67').val());
		new_sp_left = parseInt(new_sp_left,10) + skill_pts;
		document.getElementById("sp_left").innerHTML = new_sp_left;
		$('.67').addClass("disabledbutton");
		$('.level67').val(0);
		$('.hidden67').html(0);
		$('.min67').css("visibility", "hidden");
	}

	if($('.hidden66').html() >= 3 && $('.level67').val() > 0){
		$('.min67').css("visibility", "visible");
	}

	if($('.level67').val() == 0){
		$('.add67').css("visibility", "visible");
	}

	return [new_level, new_hidden, new_sp_left];
};
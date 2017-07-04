$(".button-collapse").sideNav();

$(document).ready(function(){
		$('select').material_select();
		$('.modal').modal();
		$('.collapsible').collapsible();
		$('.skill-data10').hide();
		$('.10').addClass("disabledbutton");
		$('.skill-data9').hide();
		$('.9').addClass("disabledbutton");
		$('.skill-data5').hide();
		$('.5').addClass("disabledbutton");
		$('.skill-data26').hide();
		$('.26').addClass("disabledbutton");
		$('.skill-data23').hide();
		$('.23').addClass("disabledbutton");
		$('.skill-data22').hide();
		$('.22').addClass("disabledbutton");
		$('.skill-data20').hide();
		$('.20').addClass("disabledbutton");
		$('.skill-data18').hide();
		$('.18').addClass("disabledbutton");
		$('.skill-data17').hide();
		$('.17').addClass("disabledbutton");
		$('.skill-data29').hide();
		$('.29').addClass("disabledbutton");
		$('.skill-data30').hide();
		$('.30').addClass("disabledbutton");
		$('.skill-data32').hide();
		$('.32').addClass("disabledbutton");
		$('.skill-data36').hide();
		$('.36').addClass("disabledbutton");
		$('.skill-data38').hide();
		$('.38').addClass("disabledbutton");
		$('.skill-data39').hide();
		$('.39').addClass("disabledbutton");
		$('.skill-data40').hide();
		$('.40').addClass("disabledbutton");
		$('.skill-data42').hide();
		$('.42').addClass("disabledbutton");
		$('.skill-data43').hide();
		$('.43').addClass("disabledbutton");
		$('.skill-data45').hide();
		$('.45').addClass("disabledbutton");
		$('.skill-data46').hide();
		$('.46').addClass("disabledbutton");
		$('.skill-data47').hide();
		$('.47').addClass("disabledbutton");
		$('.skill-data48').hide();
		$('.48').addClass("disabledbutton");
		$('.skill-data51').hide();
		$('.51').addClass("disabledbutton");
		$('.skill-data52').hide();
		$('.52').addClass("disabledbutton");
		$('.skill-data53').hide();
		$('.53').addClass("disabledbutton");
		$('.skill-data55').hide();
		$('.55').addClass("disabledbutton");
		$('.skill-data57').hide();
		$('.57').addClass("disabledbutton");
		$('.skill-data65').hide();
		$('.65').addClass("disabledbutton");
		$('.skill-data67').hide();
		$('.67').addClass("disabledbutton");
		});

function level(val,id){
	var skillName = id.substring(3);
	var maxLevel = document.getElementById("max"+skillName).innerHTML;
	var max = parseInt(maxLevel,10);
	var level = document.getElementById("level"+skillName).value;
	var hidden = document.getElementById("hidden"+skillName).innerHTML;
	var sp_left = document.getElementById("sp_left").value;
	if(val == -1 && parseInt(level,10) > 0 || val == 1 && parseInt(level,10) < max){
		var new_level = parseInt(level,10) + val;
		var new_hidden = parseInt(hidden,10) + val;
		var new_sp_left = parseInt(sp_left,10) - val;
		document.getElementById("level"+skillName).value = new_level;
		document.getElementById("hidden"+skillName).innerHTML = new_hidden;
		document.getElementById("sp_left").value = new_sp_left;

		if(new_sp_left <= 0){
			alert('All points used!');
			$("[id^=add]").addClass("disabledbutton");
		};

		if(new_sp_left > 0){
			$("[id^=add]").removeClass("disabledbutton");
		};

		if(new_level == max){
			document.getElementById("add"+skillName).classList.add("disable");
		};

		if(new_level < max && document.getElementById("add"+skillName).classList.contains("disable")){
			document.getElementById("add"+skillName).classList.remove("disable");
		};

		if(new_level == 0){
			document.getElementById("min"+skillName).classList.add("disable");
		};

		if(new_level > 0 && document.getElementById("min"+skillName).classList.contains("disable")){
			document.getElementById("min"+skillName).classList.remove("disable");
		};


		//Skill Unlock Requirements Section
		//Endure
		if($('.hidden8').html() >= 5){
			$('.10').removeClass("disabledbutton");
			$('.skill-data10').show();
			$('.skill-requirements10').hide();

		}

		if($('.hidden8').html() < 5){
			var skill_pts = parseInt($('.level10').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.10').addClass("disabledbutton");
			$('.level10').val(0);
			$('.hidden10').html(0);
			$('.min10').css("visibility", "hidden");
			$('.skill-data10').hide();
			$('.skill-requirements10').show();
		}

		if($('.hidden8').html() >= 5 && $('.level10').val() > 0){
			$('.min10').css("visibility", "visible");
		}

		//Magnum Break
		if($('.hidden7').html() >= 5){
			$('.9').removeClass("disabledbutton");
			$('.skill-data9').show();
			$('.skill-requirements9').hide();
		}

		if($('.hidden7').html() < 5){
			var skill_pts = parseInt($('.level9').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.9').addClass("disabledbutton");
			$('.level9').val(0);
			$('.hidden9').html(0);
			$('.min9').css("visibility", "hidden");
			$('.skill-data9').hide();
			$('.skill-requirements9').show();
		}

		if($('.hidden7').html() >= 5 && $('.level9').val() > 0){
			$('.min9').css("visibility", "visible");
		}

		//Two Hand Sword Mastery
		if($('.hidden4').html() >= 1){
			$('.5').removeClass("disabledbutton");
			$('.skill-data5').show();
			$('.skill-requirements5').hide();
		}

		if($('.hidden4').html() < 1){
			var skill_pts = parseInt($('.level5').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.5').addClass("disabledbutton");
			$('.level5').val(0);
			$('.hidden5').html(0);
			$('.min5').css("visibility", "hidden");
			$('.skill-data5').hide();
			$('.skill-requirements5').show();
		}

		if($('.hidden4').html() >= 1 && $('.level5').val() > 0){
			$('.min5').css("visibility", "visible");
		}

		//Thunder Storm
		if($('.hidden25').html() >= 4){
			$('.26').removeClass("disabledbutton");
			$('.skill-data26').show();
			$('.skill-requirements26').hide();
		}

		if($('.hidden25').html() < 4){
			var skill_pts = parseInt($('.level26').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.26').addClass("disabledbutton");
			$('.level26').val(0);
			$('.hidden26').html(0);
			$('.min26').css("visibility", "hidden");
			$('.skill-data26').hide();
			$('.skill-requirements26').show();
		}

		if($('.hidden25').html() >= 4 && $('.level26').val() > 0){
			$('.min26').css("visibility", "visible");
		}

		//Fire Wall
		if($('.hidden15').html() >= 1 && $('.hidden22').html() >= 5){
			$('.23').removeClass("disabledbutton");
			$('.skill-data23').show();
			$('.skill-requirements23').hide();
		}

		if($('.hidden15').html() < 1 || $('.hidden22').html() < 5 || $('.hidden24').html() < 4){
			var skill_pts = parseInt($('.level23').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.23').addClass("disabledbutton");
			$('.level23').val(0);
			$('.hidden23').html(0);
			$('.min23').css("visibility", "hidden");
			$('.skill-data23').hide();
			$('.skill-requirements23').show();
		}

		if($('.hidden15').html() >= 1 && $('.hidden22').html() >= 5 && $('.level23').val() > 0){
			$('.min23').css("visibility", "visible");
		}

		//Fire Ball
		if($('.hidden24').html() >= 4){
			$('.22').removeClass("disabledbutton");
			$('.skill-data22').show();
			$('.skill-requirements22').hide();
		}

		if($('.hidden24').html() < 4){
			var skill_pts = parseInt($('.level22').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.22').addClass("disabledbutton");
			$('.level22').val(0);
			$('.hidden22').html(0);
			$('.min22').css("visibility", "hidden");
			$('.skill-data22').hide();
			$('.skill-requirements22').show();
		}

		if($('.hidden24').html() >= 4 && $('.level22').val() > 0){
			$('.min22').css("visibility", "visible");
		}

		//Frost Diver
		if($('.hidden19').html() >= 5){
			$('.20').removeClass("disabledbutton");
			$('.skill-data20').show();
			$('.skill-requirements20').hide();
		}

		if($('.hidden19').html() < 5){
			var skill_pts = parseInt($('.level20').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.20').addClass("disabledbutton");
			$('.level20').val(0);
			$('.hidden20').html(0);
			$('.min20').css("visibility", "hidden");
			$('.skill-data20').hide();
			$('.skill-requirements20').show();
		}

		if($('.hidden19').html() >= 5 && $('.level20').val() > 0){
			$('.min20').css("visibility", "visible");
		}

		//Soul Strike
		if($('.hidden16').html() >= 4){
			$('.18').removeClass("disabledbutton");
			$('.skill-data18').show();
			$('.skill-requirements18').hide();
		}

		if($('.hidden16').html() < 4){
			var skill_pts = parseInt($('.level18').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.18').addClass("disabledbutton");
			$('.level18').val(0);
			$('.hidden18').html(0);
			$('.min18').css("visibility", "hidden");
			$('.skill-data18').hide();
			$('.skill-requirements18').show();
		}

		if($('.hidden16').html() < 4 && $('.level18').val() > 0){
			$('.min18').css("visibility", "visible");
		}

		//Safety Wall
		if($('.hidden18').html() >= 5 && $('.hidden16').html() >= 7){
			$('.17').removeClass("disabledbutton");
			$('.skill-data17').show();
			$('.skill-requirements17').hide();
		}

		if($('.hidden18').html() < 5 || $('.hidden16').html() < 7){
			var skill_pts = parseInt($('.level17').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.17').addClass("disabledbutton");
			$('.level17').val(0);
			$('.hidden17').html(0);
			$('.min17').css("visibility", "hidden");
			$('.skill-data17').hide();
			$('.skill-requirements17').show();
		}

		if($('.hidden18').html() >= 5 && $('.hidden16').html() >= 7 && $('.level17').val() > 0){
			$('.min17').css("visibility", "visible");
		}

		//Vulture's Eye
		if($('.hidden28').html() >= 3){
			$('.29').removeClass("disabledbutton");
			$('.skill-data29').show();
			$('.skill-requirements29').hide();
		}

		if($('.hidden28').html() < 3){
			var skill_pts = parseInt($('.level29').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.29').addClass("disabledbutton");
			$('.level29').val(0);
			$('.hidden29').html(0);
			$('.min29').css("visibility", "hidden");
			$('.skill-data29').hide();
			$('.skill-requirements29').show();
		}

		if($('.hidden28').html() >= 3 && $('.level29').val() > 0){
			$('.min29').css("visibility", "visible");
		}

		//Attention Concentrate
		if($('.hidden29').html() >= 1){
			$('.30').removeClass("disabledbutton");
			$('.skill-data30').show();
			$('.skill-requirements30').hide();
		}

		if($('.hidden29').html() < 1 || $('.hidden28').html() < 3){
			var skill_pts = parseInt($('.level30').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.30').addClass("disabledbutton");
			$('.level30').val(0);
			$('.hidden30').html(0);
			$('.min30').css("visibility", "hidden");
			$('.skill-data30').hide();
			$('.skill-requirements30').show();
		}

		if($('.hidden29').html() >= 1 && $('.hidden28').html() >= 3 && $('.level30').val() > 0){
			$('.min30').css("visibility", "visible");
		}

		//Arrow Shower
		if($('.hidden31').html() >= 5){
			$('.32').removeClass("disabledbutton");
			$('.skill-data32').show();
			$('.skill-requirements32').hide();
		}

		if($('.hidden31').html() < 5){
			var skill_pts = parseInt($('.level32').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.32').addClass("disabledbutton");
			$('.level32').val(0);
			$('.hidden32').html(0);
			$('.min32').css("visibility", "hidden");
			$('.skill-data32').hide();
			$('.skill-requirements32').show();
		}

		if($('.hidden31').html() >= 5 && $('.level32').val() > 0){
			$('.min32').css("visibility", "visible");
		}

		//Demon Bane
		if($('.hidden35').html() >= 3){
			$('.36').removeClass("disabledbutton");
			$('.skill-data36').show();
			$('.skill-requirements36').hide();
		}

		if($('.hidden35').html() < 3){
			var skill_pts = parseInt($('.level36').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.36').addClass("disabledbutton");
			$('.level36').val(0);
			$('.hidden36').html(0);
			$('.min36').css("visibility", "hidden");
			$('.skill-data36').hide();
			$('.skill-requirements36').show();
		}

		if($('.hidden35').html() >= 3 && $('.level36').val() > 0){
			$('.min36').css("visibility", "visible");
		}

		//Pneuma
		if($('.hidden40').html() >= 4 && $('.hidden37').html() >= 1 && $('.hidden39').html() >= 2){
			$('.38').removeClass("disabledbutton");
			$('.skill-data38').show();
			$('.skill-requirements38').hide();
		}

		if($('.hidden40').html() < 4 || $('.hidden39').html() < 2 || $('.hidden37').html() < 1){
			var skill_pts = parseInt($('.level38').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.38').addClass("disabledbutton");
			$('.level38').val(0);
			$('.hidden38').html(0);
			$('.min38').css("visibility", "hidden");
			$('.skill-data38').hide();
			$('.skill-requirements38').show();
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
			$('.skill-data39').show();
			$('.skill-requirements39').hide();
		}

		if($('.hidden37').html() < 1){
			var skill_pts = parseInt($('.level39').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.39').addClass("disabledbutton");
			$('.level39').val(0);
			$('.hidden39').html(0);
			$('.min39').css("visibility", "hidden");
			$('.skill-data39').hide();
			$('.skill-requirements39').show();
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
			$('.skill-data40').show();
			$('.skill-requirements40').hide();
		}

		if($('.hidden39').html() < 2 || $('.hidden37').html() < 1){
			var skill_pts = parseInt($('.level40').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.40').addClass("disabledbutton");
			$('.level40').val(0);
			$('.hidden40').html(0);
			$('.min40').css("visibility", "hidden");
			$('.skill-data40').hide();
			$('.skill-requirements40').show();
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
			$('.skill-data42').show();
			$('.skill-requirements42').hide();
		}

		if($('.hidden41').html() < 3){
			var skill_pts = parseInt($('.level42').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.42').addClass("disabledbutton");
			$('.level42').val(0);
			$('.hidden42').html(0);
			$('.min42').css("visibility", "hidden");
			$('.skill-data42').hide();
			$('.skill-requirements42').show();
		}

		if($('.hidden41').html() >= 3 && $('.level42').val() > 0){
			$('.min42').css("visibility", "visible");
		}

		//Dec Agi
		if($('.hidden41').html() >= 3 && $('.hidden42').html() >= 1){
			$('.43').removeClass("disabledbutton");
			$('.skill-data43').show();
			$('.skill-requirements43').hide();
		}

		if($('.hidden41').html() < 3 || $('.hidden42').html() < 1){
			var skill_pts = parseInt($('.level43').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.43').addClass("disabledbutton");
			$('.level43').val(0);
			$('.hidden43').html(0);
			$('.min43').css("visibility", "hidden");
			$('.skill-data43').hide();
			$('.skill-requirements43').show();
		}

		if($('.hidden41').html() >= 3 && $('.hidden42').html() >= 1 && $('.level43').val() > 0){
			$('.min43').css("visibility", "visible");
		}

		//Signum Crucis
		if($('.hidden35').html() >= 3 && $('.hidden36').html() >= 3){
			$('.45').removeClass("disabledbutton");
			$('.skill-data45').show();
			$('.skill-requirements45').hide();
		}

		if($('.hidden35').html() < 3 || $('.hidden36').html() < 3){
			var skill_pts = parseInt($('.level45').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.45').addClass("disabledbutton");
			$('.level45').val(0);
			$('.hidden45').html(0);
			$('.min45').css("visibility", "hidden");
			$('.skill-data45').hide();
			$('.skill-requirements45').show();
		}

		if($('.hidden35').html() >= 3 && $('.hidden36').html() >= 3 && $('.level45').val() > 0){
			$('.min45').css("visibility", "visible");
		}

		//Angelus
		if($('.hidden35').html() >= 3){
			$('.46').removeClass("disabledbutton");
			$('.skill-data46').show();
			$('.skill-requirements46').hide();
		}

		if($('.hidden35').html() < 3){
			var skill_pts = parseInt($('.level46').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.46').addClass("disabledbutton");
			$('.level46').val(0);
			$('.hidden46').html(0);
			$('.min46').css("visibility", "hidden");
			$('.skill-data46').hide();
			$('.skill-requirements46').show();
		}

		if($('.hidden35').html() >= 3 && $('.level46').val() > 0){
			$('.min46').css("visibility", "visible");
		}

		//Blessing
		if($('.hidden35').html() >= 5){
			$('.47').removeClass("disabledbutton");
			$('.skill-data47').show();
			$('.skill-requirements47').hide();
		}

		if($('.hidden35').html() < 5){
			var skill_pts = parseInt($('.level47').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.47').addClass("disabledbutton");
			$('.level47').val(0);
			$('.hidden47').html(0);
			$('.min47').css("visibility", "hidden");
			$('.skill-data47').hide();
			$('.skill-requirements47').show();
		}

		if($('.hidden35').html() >= 5 && $('.level47').val() > 0){
			$('.min47').css("visibility", "visible");
		}

		//Cure
		if($('.hidden41').html() >= 2){
			$('.48').removeClass("disabledbutton");
			$('.skill-data48').show();
			$('.skill-requirements48').hide();
		}

		if($('.hidden41').html() < 2){
			var skill_pts = parseInt($('.level48').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.48').addClass("disabledbutton");
			$('.level48').val(0);
			$('.hidden48').html(0);
			$('.min48').css("visibility", "hidden");
			$('.skill-data48').hide();
			$('.skill-requirements48').show();
		}

		if($('.hidden41').html() >= 2 && $('.level48').val() > 0){
			$('.min48').css("visibility", "visible");
		}

		//Discount
		if($('.hidden50').html() >= 3){
			$('.51').removeClass("disabledbutton");
			$('.skill-data51').show();
			$('.skill-requirements51').hide();
		}

		if($('.hidden50').html() < 3){
			var skill_pts = parseInt($('.level51').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.51').addClass("disabledbutton");
			$('.level51').val(0);
			$('.hidden51').html(0);
			$('.min51').css("visibility", "hidden");
			$('.skill-data51').hide();
			$('.skill-requirements51').show();
		}

		if($('.hidden50').html() >= 3 && $('.level51').val() > 0){
			$('.min51').css("visibility", "visible");
		}

		//Overcharge
		if($('.hidden50').html() >= 3 && $('.hidden51').html() >= 3){
			$('.52').removeClass("disabledbutton");
			$('.skill-data52').show();
			$('.skill-requirements52').hide();
		}

		if($('.hidden50').html() < 3 || $('.hidden51').html() < 3){
			var skill_pts = parseInt($('.level52').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.52').addClass("disabledbutton");
			$('.level52').val(0);
			$('.hidden52').html(0);
			$('.min52').css("visibility", "hidden");
			$('.skill-data52').hide();
			$('.skill-requirements52').show();
		}

		if($('.hidden50').html() >= 3 && $('.hidden51').html() >= 3 && $('.level52').val() > 0){
			$('.min52').css("visibility", "visible");
		}

		//Pushcart
		if($('.hidden50').html() >= 5){
			$('.53').removeClass("disabledbutton");
			$('.skill-data53').show();
			$('.skill-requirements53').hide();
		}

		if($('.hidden50').html() < 5){
			var skill_pts = parseInt($('.level53').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.53').addClass("disabledbutton");
			$('.level53').val(0);
			$('.hidden53').html(0);
			$('.min53').css("visibility", "hidden");
			$('.skill-data53').hide();
			$('.skill-requirements53').show();
		}

		if($('.hidden50').html() >= 5 && $('.level53').val() > 0){
			$('.min53').css("visibility", "visible");
		}

		//Vending
		if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3){
			$('.55').removeClass("disabledbutton");
			$('.skill-data55').show();
			$('.skill-requirements55').hide();
		}

		if($('.hidden50').html() < 5 || $('.hidden53').html() < 3){
			var skill_pts = parseInt($('.level55').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.55').addClass("disabledbutton");
			$('.level55').val(0);
			$('.hidden55').html(0);
			$('.min55').css("visibility", "hidden");
			$('.skill-data55').hide();
			$('.skill-requirements55').show();
		}

		if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3 && $('.level55').val() > 0){
			$('.min55').css("visibility", "visible");
		}

		//Buying Store
		if($('.hidden50').html() >= 5 && $('.hidden53').html() >= 3 && $('.hidden55').html() >= 1){
			$('.57').removeClass("disabledbutton");
			$('.skill-data57').show();
			$('.skill-requirements57').hide();
		}

		if($('.hidden50').html() < 5 || $('.hidden53').html() < 3 || $('.hidden55').html() < 1){
			var skill_pts = parseInt($('.level57').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.57').addClass("disabledbutton");
			$('.level57').val(0);
			$('.hidden57').html(0);
			$('.min57').css("visibility", "hidden");
			$('.skill-data57').hide();
			$('.skill-requirements57').show();
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
			$('.skill-data65').show();
			$('.skill-requirements65').hide();
		}

		if($('.hidden64').html() < 5){
			var skill_pts = parseInt($('.level65').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.65').addClass("disabledbutton");
			$('.level65').val(0);
			$('.hidden65').html(0);
			$('.min65').css("visibility", "hidden");
			$('.skill-data65').hide();
			$('.skill-requirements65').show();
		}

		if($('.hidden64').html() >= 5 && $('.level65').val() > 0){
			$('.min65').css("visibility", "visible");
		}

		//Detoxify
		if($('.hidden66').html() >= 3){
			$('.67').removeClass("disabledbutton");
			$('.skill-data67').show();
			$('.skill-requirements67').hide();
		}

		if($('.hidden66').html() < 3){
			var skill_pts = parseInt($('.level67').val());
			new_sp_left = parseInt(new_sp_left,10) + skill_pts;
			document.getElementById("sp_left").innerHTML = new_sp_left;
			$('.67').addClass("disabledbutton");
			$('.level67').val(0);
			$('.hidden67').html(0);
			$('.min67').css("visibility", "hidden");
			$('.skill-data67').hide();
			$('.skill-requirements67').show();
		}

		if($('.hidden66').html() >= 3 && $('.level67').val() > 0){
			$('.min67').css("visibility", "visible");
		}

		if($('.level67').val() == 0){
			$('.add67').css("visibility", "visible");
		}
	};

	return [new_level, new_hidden, new_sp_left];
}; //function end

//Build comment auto post AJAX
$('#build-comment-submit').click(function(){
	var comment = document.getElementById('build_comment').value;
	var build_id = document.getElementById('build_id').innerHTML;
	var user_id = document.getElementById('user_id').innerHTML;
	$.post('build_comment.php?bid='+build_id,
		{
			comment: comment,
			user_id: user_id
		},
		function(data,status){
			// alert(data)
			document.getElementById('comment-section').innerHTML += data
		});
});
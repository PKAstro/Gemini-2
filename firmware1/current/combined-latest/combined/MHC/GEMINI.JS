var currentSpeed = "Guide";
	
var refreshTime = 10000;
var map;
var catalogsLoaded = false;
var catalogArray;
var catalogStartIndex;
var catalogEndIndex;
$.mobile.page.prototype.options.addBackBtn = true;

function ResetButton(){ 
    $('a.ui-btn').removeClass('ui-btn-active');      
}

$.ajaxSetup ({  
   cache: false,
   timeout: 1000
});
$(document).ready(function() {
	  start();
	 });
function start() 
{
	$.mobile.allowCrossDomainPages = true;
	
	if (supports_html5_storage()){
		refreshTime = localStorage.getItem("refreshTime");
		if (refreshTime == null){
			refreshTime = 10000;
		}
	}
	
	
	
	$('#Map').live("pageshow", function(event, ui) {

		google.maps.event.trigger(map,'resize');

	});
	
	$('#Options').live("pageshow", function(event, ui) {

		$("#sliderRefresh").val(refreshTime/1000);
		
		$("#sliderRefresh").slider('refresh');

	});
	
	$('#Site').live("pageshow", function(event, ui) {

		LoadSite();

	});
	$('#Time').live("pageshow", function(event, ui) {

		LoadTime();

	});
	
	$('#Mount').live("pageshow", function(event, ui) {

		LoadMount();

	});
	$('#Model').live("pageshow", function(event, ui) {

		LoadModel();

	});
	$('#Track').live("pageshow", function(event, ui) {

		LoadTrack();

	});
	
	
	$('#Catalog').live("pageshow", function(event, ui) {

		GetCatalogs();
	});
	
	$('#CatalogContent').live("pageshow", function(event, ui) {

		DisplayCatalogContent();
	});
	$('#CatalogIndex').live("pageshow", function(event, ui) {

		DisplayCatalogIndex();
	});
	
//	$('#CatalogContent').live('pagebeforecreate',function(event){
//		var html = '<DIV ID="pleasewaitScreen" STYLE="position:absolute;z-index:5;top:30%;left:42%;visibility:hidden">';
//			html += '<TABLE BGCOLOR="#000000" BORDER="1" BORDERCOLOR="#000000" CELLPADDING="0" CELLSPACING="0" HEIGHT="100" WIDTH="150" ID="Table1">';
//			html +=	'<TR><TD WIDTH="100%" HEIGHT="100%" BGCOLOR="silver" ALIGN="CENTER" VALIGN="MIDDLE">';
//			html +=	'<FONT FACE="Arial" SIZE="4" COLOR="blue"><B>Loading<br>Please Wait</B></FONT></TD></TR></TABLE></DIV>';
//		$('#catalogcontent-div').html(html);
//	});
	
	

	if (screen.width<=480){
		$('#ButtonRate').css('font-size','small');
		$('#ButtonMenu').css('font-size','small');
		$('#ButtonGoto').css('font-size','small');
		$('#CheckboxRevRaLabel').css('font-size','small');
		$('#CheckboxRevDecLabel').css('font-size','small');
		$('#CheckboxTrackingLabel').css('font-size','small');
		$('#CheckboxPecLabel').css('font-size','small');
	}
	
	
		
		
	$('#buttonnorth').bind( 'vmousedown', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseDownNorth();
		} );
	$('#buttonnorth').bind( 'vmouseup', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseUpNorth();
		} );
	$('#buttonsouth').bind( 'vmousedown', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseDownSouth();
		} );
	$('#buttonsouth').bind( 'vmouseup', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseUpSouth();
		} );
	$('#buttonwest').bind( 'vmousedown', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseDownWest();
		} );
	$('#buttonwest').bind( 'vmouseup', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseUpWest();
		} );
	$('#buttoneast').bind( 'vmousedown', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseDownEast();
		} );
	$('#buttoneast').bind( 'vmouseup', function(event){
		var e = event.originalEvent;
		e.preventDefault();
		MouseUpEast();
		} );
		
	$('#movespeed').hide();
	
	$('#CheckboxTracking').change(function() {
		Tracking();
	});
	
	$('#CheckboxPec').change(function() {
		Pec();
	});
	
	retrieveStatus();
	
	if (supports_html5_canvas()){
		var powersource = document.getElementById("powersource");
		var lithiumsource = document.getElementById("lithiumsource");
		ArcGauge(powersource,12,24,10,12,0,12,24,0);
		ArcGauge(lithiumsource,4,5,3,4,0,4,5,0);
	}
	
    
    
}

function retrieveStatus()
{
	$.ajax({
		  url: 'hcstate.cgx',
		  success: function(xml) {
			  updateStatus(xml);
		  }
		});
	setTimeout("retrieveStatus()", refreshTime);
}

function updateStatus(xmlDoc)
{
	var i;
	var now = new Date();
	var hours = '0' + now.getHours();
	var minutes = '0' + now.getMinutes();
	var seconds = '0' + now.getSeconds();
	var month = '0' + (now.getMonth() + 1);
	var day = '0' + now.getDate();
	var year = now.getFullYear();
	
	$('#LocalTime').html(day.substring(day.length-2) + '.' + month.substring(month.length - 2) +'.' + year + ' ' + hours.substring(hours.length-2) +'.' + minutes.substring(minutes.length-2) + '.' + seconds.substring(seconds.length-2));
	$('#DeviceTimeZone').html(-now.getTimezoneOffset()/60 + ':00');
	
	var ra = "";
	var dec = "";
	var lst = "";
	var tolimit = "";
	
	var txt = "";
    x = xmlDoc.getElementsByTagName("ra");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#racurrent').html(txt);
    
    ra = txt;
    
    
    
    $('#currentradecimal').val(ra);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("dec");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#deccurrent').html(txt);
    
    dec = txt;
    

    $('#currentdecdecimal').val(dec);
    
    $('#RADEC').html(ra + '&nbsp;' + dec);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("utcdate");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
   txt += " ";
    x = xmlDoc.getElementsByTagName("utctime");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    document.getElementById("UniversalTime").innerHTML = txt;
    
    txt = "";
    x = xmlDoc.getElementsByTagName("civildate");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    txt += " ";
    x = xmlDoc.getElementsByTagName("civiltime");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    document.getElementById("CivilTime").innerHTML = txt;
    
    txt = "";
    x = xmlDoc.getElementsByTagName("lst");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    lst = txt;
    document.getElementById("LocalSiderealTime").innerHTML = txt;

    txt = "";
    x = xmlDoc.getElementsByTagName("timetolimit");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }

    tolimit = txt;
    
    $('#LSTToLimit').html(lst + '&nbsp;&nbsp;&nbsp;' + tolimit);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("velocityra");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#ramotion').html(txt);
   
    if (txt == "No Motion") {
        if ($('#CheckboxTracking').is(":checked")) {
        	$('#CheckboxTracking').attr("checked",false).checkboxradio("refresh");
        }
        
    }
    else {
        if (!$('#CheckboxTracking').is(":checked")) {
        	$('#CheckboxTracking').attr("checked",true).checkboxradio("refresh");
        }
    }
    
    txt = "";
    x = xmlDoc.getElementsByTagName("pec");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
   
    if (txt == "32") {
    	$('#pecavailable').html("Available");
    	$('#CheckboxPec').checkboxradio("enable");
        if ($('#CheckboxPec').is(":checked")) {
        	$('#CheckboxPec').attr("checked",false).checkboxradio("refresh");
        }
        $('#CheckboxPec').checkboxradio("refresh");
        
    }
    else if (txt == "33") {
    	$('#pecavailable').html("Available");
    	$('#CheckboxPec').checkboxradio("enable");
        if (!$('#CheckboxPec').is(":checked")) {
        	$('#CheckboxPec').attr("checked",true).checkboxradio("refresh");
        }
        $('#CheckboxPec').checkboxradio("refresh");
    }else {
    	if ($('#CheckboxPec').is(":checked")) {
        	$('#CheckboxPec').attr("checked",false).checkboxradio("refresh");
        }
    	$('#CheckboxPec').checkboxradio("disable");
    	$('#CheckboxPec').checkboxradio("refresh");
    	$('#pecavailable').html("Not Available");
    }
    
    var velocityra = txt;
    
    txt = "";
    x = xmlDoc.getElementsByTagName("velocitydec");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#decmotion').html(txt);
    
    var velocitydec = txt;
    if (velocitydec == "No Motion" && velocityra == "No Motion") {
    	$('#State').html("STOP");
    } else if (velocitydec == "Slewing" || velocityra == "Slewing") {
    	$('#State').html("SLEW");
    } else if (velocitydec == "Centering" || velocityra == "Centering") {
    	$('#State').html("CENTER");
    } else if (velocitydec == "Guiding" || velocityra == "Guiding") {
    	$('#State').html("GUIDE");
    } else {
    	$('#State').html("TRACK");
    }
    
    txt = "";
    x = xmlDoc.getElementsByTagName("display");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    if (txt == "") {txt="&nbsp;";}
    
    $('#Display').html(txt);
    $('#Display2').html(txt);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("object");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#targetobject').html(txt);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("targetra");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#targetra').html(txt);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("targetdec");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#targetdec').html(txt);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("targetradelta");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#targetradelta').html(txt);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("targetdecdelta");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    $('#targetdecdelta').html(txt);
    
    txt = "";
    x = xmlDoc.getElementsByTagName("state");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {}
    }
    
    if (txt == "0"){
    	$.mobile.changePage( $("#Boot"), { transition: "slideup"} );
    } else {
    	if ($.mobile.activePage.attr('id') == 'Boot') { $.mobile.changePage( $("#Main"), { transition: "slideup"} );}
    }
    
    var powersource = document.getElementById("powersource");
	
	
    txt = "";
    x = xmlDoc.getElementsByTagName("powervoltage");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {
        		txt="0";
        	}
    }
    
    
	ArcGauge(powersource,12,24,10,12,0,12,24,parseFloat(txt));
	$('#powersourcevalue').html(txt + " V");
	
	var lithiumsource = document.getElementById("lithiumsource");
	txt = "";
    x = xmlDoc.getElementsByTagName("lithiumvoltage");
    for (i = 0; i < x.length; i++) {
    	try{
            txt = txt + x[i].childNodes[0].nodeValue;
        	}
        	catch (err) {
        		txt="0";
        	}
    }
	$('#lithiumsourcevalue').html(txt + " V");
	ArcGauge(lithiumsource,4,5,3,4,0,4,5,parseFloat(txt));
	
}

function Tracking() {
    if (!$('#CheckboxTracking').is(":checked")) {
        $.ajax({
		  url: '../command.cgi?PS=',
		  });
    } else {
        $.ajax({
		  url: '../command.cgi?PW=',
		  });
    }
}

function Pec() {
    if (!$('#CheckboxPec').is(":checked")) {
        $.ajax({
		  url: '../command.cgi?ps=',
		  });
    } else {
        $.ajax({
		  url: '../command.cgi?pe=',
		  });
    }
}
function TrainPec(){
	$.ajax({
		  url: '../command.cgi?pt=',
		  });
}
function AbortTrainPec(){
	$.ajax({
		  url: '../command.cgi?pa=',
		  });
}
function SetSpeed() {
	
	if (currentSpeed=="Guide")
		{
		currentSpeed="Center";
		$('#CurrentSpeed').html("CENTER");
		}
	else if (currentSpeed=="Center"){
		currentSpeed="Move";
		$('#CurrentSpeed').html("MOVE");
	}
	else if (currentSpeed=="Move"){
		currentSpeed="Slew";
		$('#CurrentSpeed').html("SLEW");
	}
	else if (currentSpeed=="Slew"){
		currentSpeed="Guide";
		$('#CurrentSpeed').html("GUIDE");
	}
	if (currentSpeed == "Move"){
		$('#movespeed').show('slow');
	}else{
		$('#movespeed').hide('slow');
	}
}

function Alignment(type, page) {
    if (type == "add") {
        $.ajax({
			  url: '../command.cgi?aa=',
			  });
    } 
    else if (type == "initial") {
        $.ajax({
		  url: '../command.cgi?ia=',
		  });
  	} 
    else if (type == "reset") {
        $.ajax({
		  url: '../command.cgi?cm=',
		  });
  	} 
    else if (type == "undo") {
        $.ajax({
		  url: '../command.cgi?au=',
		  });
  	} 
    else {
        $.ajax({
		  url: '../command.cgi?Sm=',
		  });
    }
    if (page == 'model'){
    	LoadModel();
    }
}
function Park(type) {
    if (type == "cwd") {
        $.ajax({
			  url: '../../command.cgi?PC=',
			  });
    } else if (type == "home") {
    	 $.ajax({
 			  url: '../command.cgi?PH=',
 			  });
    } else if (type == "current") {
        $.ajax({
			  url: '../command.cgi?PS=',
			  });
    } else if (type == "zenith") {
        $.ajax({
			  url: '../command.cgi?PZ=',
			  });
  }
    $.mobile.changePage( $("#Main"), { transition: "slideup"} );
    
}
function Unpark(){
	$.ajax({
		  url: '../command.cgi?PW=',
		  });
}
function MouseDownNorth() {
	$('#buttonnorth').attr("src", "images/buttondown.gif");
	
	if (currentSpeed == "Guide") {
    	$.ajax({
		  url: '../command.cgi?R1=G',
		  });
    } else if (currentSpeed == "Center") {
        $.ajax({
			  url: '../command.cgi?R1=C',
			  });
    } else if (currentSpeed == "Slew") {
    	$.ajax({
		  url: '../command.cgi?R1=S',
		  });
    } else if (currentSpeed == "Move") {
    	$.ajax({
		  url: '../command.cgi?R1=M',
		  });
    }
    
    if ($("input[id*='CheckboxRevDec']").is(':checked')) {
        $.ajax({
		  url: '../command.cgi?MD=s',
		  });
    }
    else {
    	 $.ajax({
 			  url: '../command.cgi?MD=n',
 			  });
    }
}
function MouseUpNorth() {
	$('#buttonnorth').attr("src", "images/buttonup.gif");
	$.ajax({
		  url: '../command.cgi?MD=q',
		  });
}

function MouseDownSouth() {
	$('#buttonsouth').attr("src", "images/buttondown.gif");
	
	if (currentSpeed == "Guide") {
    	$.ajax({
		  url: '../command.cgi?R1=G',
		  });
    } else if (currentSpeed == "Center") {
        $.ajax({
			  url: '../command.cgi?R1=C',
			  });
    } else if (currentSpeed == "Slew") {
    	$.ajax({
		  url: '../command.cgi?R1=S',
		  });
    } else if (currentSpeed == "Move") {
    	$.ajax({
		  url: '../command.cgi?R1=M',
		  });
    }
    
    if ($("input[id*='CheckboxRevDec']").is(':checked')) {
        $.ajax({
		  url: '../command.cgi?MD=n',
		  });
    }
    else {
    	 $.ajax({
 			  url: '../command.cgi?MD=s',
 			  });
    }
}
function MouseUpSouth() {
	$('#buttonsouth').attr("src", "images/buttonup.gif");
	$.ajax({
		  url: '../command.cgi?MD=q',
		  });
}

function MouseDownWest() {
	$('#buttonwest').attr("src", "images/buttondown.gif");
	
	if (currentSpeed == "Guide") {
    	$.ajax({
		  url: '../command.cgi?R1=G',
		  });
    } else if (currentSpeed == "Center") {
        $.ajax({
			  url: '../command.cgi?R1=C',
			  });
    } else if (currentSpeed == "Slew") {
    	$.ajax({
		  url: '../command.cgi?R1=S',
		  });
    } else if (currentSpeed == "Move") {
    	$.ajax({
		  url: '../command.cgi?R1=M',
		  });
    }
    
    if ($("input[id*='CheckboxRevRa']").is(':checked')) {
        $.ajax({
		  url: '../command.cgi?MR=e',
		  });
    }
    else {
    	 $.ajax({
 			  url: '../command.cgi?MR=w',
 			  });
    }
}
function MouseUpWest() {
	$('#buttonwest').attr("src", "images/buttonup.gif");
	$.ajax({
		  url: '../command.cgi?MR=q',
		  });
}
function MouseDownEast() {
	$('#buttoneast').attr("src", "images/buttondown.gif");
	
	if (currentSpeed == "Guide") {
    	$.ajax({
		  url: '../command.cgi?R1=G',
		  });
    } else if (currentSpeed == "Center") {
        $.ajax({
			  url: '../command.cgi?R1=C',
			  });
    } else if (currentSpeed == "Slew") {
    	$.ajax({
		  url: '../command.cgi?R1=S',
		  });
    } else if (currentSpeed == "Move") {
    	$.ajax({
		  url: '../command.cgi?R1=M',
		  });
    }
    
    if ($("input[id*='CheckboxRevRa']").is(':checked')) {
        $.ajax({
		  url: '../command.cgi?MR=w',
		  });
    }
    else {
    	 $.ajax({
 			  url: '../command.cgi?MR=e',
 			  });
    }
}
function MouseUpEast() {
	$('#buttoneast').attr("src", "images/buttonup.gif");
	$.ajax({
		  url: '../command.cgi?MR=q',
		  });
}

function AllStop(){
	$.ajax({
		  url: '../command.cgi?SE=:Q%23',
		  });
}
function MoveSpeedUp(){
	$.ajax({
		  url: '../command.cgi?Vi=',
		  });
}
function MoveSpeedDown(){
	$.ajax({
		  url: '../command.cgi?Vd=',
		  });
}
function Flip() {
    $.ajax({
		  url: '../command.cgi?gtf=',
		  });
}
function GotoSolarSystem(object){
	var url = "hcgoto.cgi?SO=" + object.toString();
	$.get(url, function(data){
		   if (data != "<B>Object below horizon!</B>" && data != "")
			   {
			   		$.ajax({
					  url: '../command.cgi?GT=',
					  });
			   		$.mobile.changePage( $("#Target"), { transition: "slideup"} );
			   }
		   else 
		   {
			   $.mobile.changePage( $("#SolarSystemBelowHorizon"), { transition: "slideup"} );
		   }
		 });

}
function GetCatalogs(){
	if (catalogsLoaded != true){
		$.get("hccats.cgi", function(data){
				var tmparray = data.split(",");
				var html = "<ul data-role='listview' data-theme='g' id='CatalogList-list' data-filter='true'>";
	            for (x in tmparray) {
	            	if (tmparray[x] != ""){
		     			html += "<li>";
		            	html += "<a href='javascript:void()' onclick=\"LoadCatalogContent('" + tmparray[x] + "')\">" + tmparray[x].replace(".guc","").replace(/_/gi," ") + "</a>";
		            	html += "</li>";
	            	}
	            }
	            html += "</ul>";
	            
	            
				//$('#cataloglist').remove(); 
	
				
				//$('<div id="cataloglist"></div>').insertBefore('#catalogbookmark');
	
				
				$('#cataloglist').html(html).trigger('create');                           //load new list
	
				
				//$('#cataloglist').page();
	
				
				//$('#cataloglist').empty();                            //Clear status msg 
	
			 });
		catalogsLoaded = true;
	}
}
function LoadCatalogContent(catalog){
	var url = "hcdyncat.cgi?CN=" + catalog;
	url = "../Catalogs/" + catalog;

			$.get(url, function(data){
				catalogArray = $.trim(data).split("\n");
				var numRows = catalogArray.length;
				if(numRows <=250){
					catalogStartIndex = 0;
					catalogEndIndex = numRows - 1;
					$.mobile.changePage(($("#CatalogContent")));
				}
				else{
					$.mobile.changePage(($("#CatalogIndex")));
				}
			 });
	
}
function DisplayCatalogContent(){
	var html = "<ul data-role='listview' data-theme='g' id='CatalogContent-list' data-filter='true'>";
    for (var x=catalogStartIndex;x<=catalogEndIndex;x++) {
    	if (catalogArray[x] != ""){
    		var tmp = unescape(escape(catalogArray[x]).replace("%0D",""));
    		var tmparray2 = tmp.split(",");
 			html += "<li>";
        	html += "<a href='javascript:void()' onclick=\"GotoCatalogObject('" + tmparray2[0].trim() + "," + tmparray2[1].trim() + "," + tmparray2[2].replace('#','').trim() + "')\">" + tmparray2[0] + "</a>";
        	html += "</li>";
    	}
    }
    html += "</ul>";
    
    
    $('#catalogcontent-div').remove();
    var newDiv = '<div id="catalogcontent-div"></div>';

    $(newDiv).insertBefore('#catalogcontentbookmark').html(html).trigger('create');
    //$('#catalogcontentlist-' + selectedCatalog.replace('.','')).html(html).trigger('create'); 	
}
function SetCatalogIndex(indexFrom, indexTo){
	catalogStartIndex = indexFrom;
	catalogEndIndex = indexTo;
}
function DisplayCatalogIndex(){
	var numRows = catalogArray.length;
	var numIndexes = Math.ceil(numRows/250);
	var html = "<ul data-role='listview' data-theme='g' id='CatalogIndex-list' data-filter='true'>";
    for (var x=0;x<numIndexes;x++) {
    		var startIndex = x * 250;
    		var endIndex = startIndex + 249;
    		if (endIndex > numRows - 1){endIndex = numRows -1;}
 			html += "<li>";
        	html += "<a href='#CatalogContent' onclick=\"SetCatalogIndex('" + startIndex + "','" + endIndex + "')\">" + catalogArray[startIndex].split(",")[0] + " to " + catalogArray[endIndex].split(",")[0] + "</a>" ;
        	html += "</li>";
    }
    html += "</ul>";
    
    
    $('#catalogindex-div').remove();
    var newDiv = '<div id="catalogindex-div"></div>';

    $(newDiv).insertBefore('#catalogindexbookmark').html(html).trigger('create');
    //$('#catalogcontentlist-' + selectedCatalog.replace('.','')).html(html).trigger('create'); 	
}
function GotoCatalogObject(s){
	var url = "hcgoto.cgi?co=" + s;
	$.get(url, function(data){
		   if (data != "<B>Object below horizon!</B>" && data != "")
			   {
			   		$.ajax({
					  url: '../command.cgi?GT=',
					  });
			   		$.mobile.changePage( $("#Target"), { transition: "slideup"} );
			   }
		   else 
		   {
			   $.mobile.changePage( $("#CatalogObjectBelowHorizon"), { transition: "slideup"} );
		   }
		 });
}
function GotoCoordinates(){
	var url = "hcgoto.cgi?co=" + $("#ObjectName").val() + "," + $("#ObjectRa").val() + "," + $("#ObjectDec").val();
	if($("#CheckboxJ2000").attr("checked")=="true"){
		url += "&sdo=";
	}
	$.get(url, function(data){
		   if (data != "<B>Object below horizon!</B>" && data != "")
			   {
			   		$.ajax({
					  url: '../command.cgi?GT=',
					  });
			   		$.mobile.changePage( $("#Target"), { transition: "slideup"} );
			   }
		   else 
		   {
			   $.mobile.changePage( $("#CoordinatesBelowHorizon"), { transition: "slideup"} );
		   }
		 });

}
function LoadSite(){
	$.ajax({
		  url: 'hcsite.cgx',
		  async: false,
		  success: function(xmlDoc) {
			  	var txt = "";
			  	var i;
		        x = xmlDoc.getElementsByTagName("name");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        document.getElementById("SiteName").value = txt;

		        txt = "";
		        x = xmlDoc.getElementsByTagName("longitude");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        document.getElementById("LongitudeDegrees").value = txt.split("~")[0];
		        document.getElementById("LongitudeMinutes").value = txt.split("~")[1];
		        document.getElementById("LongitudeSeconds").value = txt.split("~")[2];
		        
		        
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("latitude");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        document.getElementById("LatitudeDegrees").value = txt.split("~")[0];
		        document.getElementById("LatitudeMinutes").value = txt.split("~")[1];
		        document.getElementById("LatitudeSeconds").value = txt.split("~")[2];
		        
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("elevation");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        document.getElementById("Elevation").value = txt;
		        
		        
				
		        txt = "";
		        x = xmlDoc.getElementsByTagName("site1");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        var optionList = "<option value='0' " + txt.split("~")[0] + ">" + txt.split("~")[1] + "</option>";
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("site2");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        optionList += "<option value='1' " + txt.split("~")[0] + ">" + txt.split("~")[1] + "</option>";
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("site3");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        optionList += "<option value='2' " + txt.split("~")[0] + ">" + txt.split("~")[1] + "</option>";
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("site4");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        optionList += "<option value='3' " + txt.split("~")[0] + ">" + txt.split("~")[1] + "</option>";

		        $("#SavedSiteList").html(optionList).selectmenu('refresh', true);
		  }
		});
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(foundLocation, noLocation, {enableHighAccuracy: true, maximumAge: 10000, timeout:10000});
    }

}
function foundLocation(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
    var userLocation = lat + ', ' + lon;
    var altitude = position.coords.altitude;
    
    var latSign = 1;
    var lonSign = 1;
    
    if (lat<0){latSign = -1;}
    if (lon<0){lonSign = -1;}
    
    lat = Math.abs(lat);
    lon = Math.abs(lon);
    	    
    var LatDeg = Math.floor(lat);
    var LatMin = Math.floor((lat-LatDeg)*60);
    var LatSec =  Math.round(((lat-LatDeg)*60 - LatMin) * 60);
    var LonDeg = Math.floor(lon);
    var LonMin = Math.floor((lon-LonDeg)*60);
    var LonSec = Math.round(((lon-LonDeg)*60 - LonMin) * 60);
    
    LonDeg = LonDeg * lonSign;
    LatDeg = LatDeg * latSign;
    
    $('#gpslongitudedegrees').html(LonDeg);
    $('#gpslongitudeminutes').html(LonMin);
    $('#gpslongitudeseconds').html(LonSec);
    
    $('#gpslatitudedegrees').html(LatDeg);
    $('#gpslatitudeminutes').html(LatMin);
    $('#gpslatitudeseconds').html(LatSec);
    
    $('#gpselevation').html(altitude);

    $('#savedlatitude').val(position.coords.latitude);
    $('#savedlongitude').val(position.coords.longitude);
  }
  function noLocation() {
	  
  }
  
  
  function LoadMap(){
	  window.location = String(window.location).replace(/\#.*$/, "") + "#Map";
	  if (map) {
		  
		  var latlng = new google.maps.LatLng($('#savedlatitude').val(),$('#savedlongitude').val());
		  map.setCenter(latlng);
		  var marker = new google.maps.Marker({
	  	      position: latlng, 
	  	      map: map, 
	  	      title:"Your Location!"
	  	  });  
	  }
	  else {
		  try{InitializeMap();}catch(err){
			  alert("Map not available");
		  }
		  
	  }
	  google.maps.event.trigger(map, 'resize');
  }
  function InitializeMap(){

	  		var latlng = new google.maps.LatLng($('#savedlatitude').val(),$('#savedlongitude').val());
	  	    var myOptions = {
	  	      zoom: 9,
	  	      center: latlng,
	  	      mapTypeId: google.maps.MapTypeId.ROADMAP
	  	    };
	  	    map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
	  	  var marker = new google.maps.Marker({
	  	      position: latlng, 
	  	      map: map, 
	  	      title:"Your Location!"
	  	  });  
  }
  
function ChangeSite(){
	var url = "../command.cgi?si=" + $("#SavedSiteList").val();
	$.ajax({
		  url: url,
		  async: false,
	});
	LoadSite();
}
function SetSite(){
	var url = "../command.cgi?so=" + $("#LongitudeDegrees").val() + "°" + $("#LongitudeMinutes").val() + "'" + $("#LongitudeSeconds").val();
	url += "&sa=" + $("#LatitudeDegrees").val() + "°" + $("#LatitudeMinutes").val() + "'" + $("#LatitudeSeconds").val();
	url += "&se=" + $("#Elevation").val();
	url += "&s%23=" + $("#SaveSite").val();
	url += "&sn=" + $("#SiteName").val();
	
	$.ajax({
		  url: url,
		  async: false,
	});
	LoadSite();
}
function SetGPS(){
	var url = "../command.cgi?so=" + $("#gpslongitudedegrees").text() + "°" + $("#gpslongitudeminutes").text() + "'" + $("#gpslongitudeseconds").text();
	url += "&sa=" + $("#gpslatitudedegrees").text() + "°" + $("#gpslatitudeminutes").text() + "'" + $("#gpslatitudeseconds").text();
	url += "&se=" + $("#gpselevation").text();
	
	$.ajax({
		  url: url,
		  async: false,
	});
	LoadSite();
}
function LoadTime(){
	$.ajax({
		  url: 'hcsite.cgx',
		  async: false,
		  success: function(xmlDoc) {
			  var txt = "";
			  var i;
		        x = xmlDoc.getElementsByTagName("timezone");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#TimeZone').html(txt);
		  }
		  });
}
function SetTime(){
	var now = new Date();
	var hours = '0' + now.getHours();
	var minutes = '0' + now.getMinutes();
	var seconds = '0' + now.getSeconds();
	var month = '0' + (now.getMonth() + 1);
	var day = '0' + (now.getDate());
	var year = now.getFullYear();
	
	var url = "../command.cgi?st=" + -now.getTimezoneOffset()/60 + '&dc=' + day.substring(day.length -2) + '.' + month.substring(month.length -2) +'.' + year + '&tc=' + hours.substring(hours.length-2) +':' + minutes.substring(minutes.length-2) + ':' + seconds.substring(seconds.length-2);
	
	$.get(url, function(data){
		LoadTime();
	});
}
function LoadModel(){
	$.ajax({
		  url: 'hcmodellist.cgi',
		  async: false,
		  success: function(txt) {
			  $('#NamedModelList').html(txt.replace('<form action=modeling.cgi>','').replace('<select name=fm size=1>','<select id=NamedModelList>')).trigger('create');
			  $('#DeleteModelList').html(txt.replace('<form action=modeling.cgi>','').replace('<select name=fm size=1>','<select id=NamedModelList>')).trigger('create');
		  }
	  });
	$.ajax({
		  url: 'hcmodel.cgx',
		  async: false,
		  success: function(xmlDoc) {
			  var txt = "";
			  var i;
		        x = xmlDoc.getElementsByTagName("eastalign");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#eastalign').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("westalign");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#westalign').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("azimuthpole");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#azimuthpole').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("elevationpole");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#elevationpole').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("meridianortho");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#meridianortho').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("poleortho");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#poleortho').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raerror");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#raerror').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decerror");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#decerror').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("tubeflex");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#tubeflex').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("cantileverflex");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#cantileverflex').html(txt);
		        
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("flipra");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#flipra').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("flipdec");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#flipdec').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("model0");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#SaveModel').val('0');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("model1");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#SaveModel').val('1');
		        }
		        
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("modelname");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        $('#ModelName').val(txt);

		  }
		  });
}
function SelectModel(){
	var url = "../command.cgi?mn=" + $("#SaveModel").val();
	$.get(url, function(data){
		LoadModel();
	});
	
}
function SaveModel(){
	var url = "../command.cgi?sm=" + $("#SaveModel").val();
	$.get(url, function(data){
		LoadModel();
	});
}
function SaveNamedModel(){
	var url = "../command.cgi?sm=&mf=" + $("#ModelName").val();
	$.get(url, function(data){
		
	});
	LoadModel();
	
}
function LoadNamedModel(){
	var url = "../command.cgi?rm=&mf=" + $("#LoadModelList").val();
	$.get(url, function(data){
		
	});
	LoadModel();
	
}
function DeleteNamedModel(){
	var url = "../command.cgi?dm=&mf=" + $("#DeleteModelList").val();
	$.get(url, function(data){
		
	});
	LoadModel();
	
}
function LoadTrack(){
	$.ajax({
		  url: 'hctracking.cgx',
		  async: false,
		  success: function(xmlDoc) {
			  var i;
			  var txt = "";
		        x = xmlDoc.getElementsByTagName("hcmode0");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#HCMode').val('0');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("hcmode1");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#HCMode').val('1');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("hcmode2");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#HCMode').val('2');
		        }
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode0");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('0');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode1");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('1');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode2");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('2');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode3");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('3');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode4");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('4');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode5");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('5');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("trackmode6");
		        for (i = 0; i < x.length; i++) {
		        	try{
			            txt = txt + x[i].childNodes[0].nodeValue;
			        	}
			        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#TrackMode').val('6');
		        }
		  }
		  });
}
function SelectTrackMode(){
	var url = "../command.cgi?ts=" + $('#TrackMode').val();
	$.ajax({
		  url: url,
		  });
}
function SelectHCMode(){
	var url = "../command.cgi?hc=" + $('#HCMode').val();
	$.ajax({
		  url: url,
		  });
}
function LoadMount(){
	
	$.ajax({
		  url: 'hcmount.cgx',
		  async: false,
		  success: function(xmlDoc) {
			  var i;
			  	var txt = "";
			  	x = xmlDoc.getElementsByTagName("mounttype0");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('0');
		        }
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("mounttype1");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('1');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("mounttype2");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('2');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("mounttype3");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('3');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("mounttype4");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('4');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("mounttype5");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('5');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("mounttype6");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#MountType').val('6');
		        }
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("bootmode0");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#BootMode').val('0');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("bootmode1");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#BootMode').val('1');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("bootmode2");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#BootMode').val('2');
		        }
		        txt = "";
		        x = xmlDoc.getElementsByTagName("bootmode3");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        if (txt == 'selected'){
		        	$('#BootMode').val('3');
		        }
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("rawormratio");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAWormRatio').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decwormratio");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECWormRatio').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raspurratio");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RASpurRatio').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decspurratio");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECSpurRatio').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raencoder");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAEncoder').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decencoder");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECEncoder').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("dectvcstep");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECTVCStep').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raresolution");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAResolution').html(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decresolution");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECResolution').html(txt);
		       
		        
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("ramanual");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAManual').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decmanual");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECManual').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("ramove");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAMove').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decmove");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECMove').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("ragoto");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAGoto').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decgoto");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECGoto').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raaccel");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAAccel').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decaccel");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECAccel').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("racenter");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RACenter').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("deccenter");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECCenter').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raguide");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAGuide').val(txt);
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decguide");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECGuide').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("rightlimit");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RightLimit').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("leftlimit");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#LeftLimit').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("gotolimit");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#GotoLimit').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("raaxisencoder");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#RAAxisEncoder').val(txt);
		        
		        txt = "";
		        x = xmlDoc.getElementsByTagName("decaxisencoder");
		        for (i = 0; i < x.length; i++) {
		            try{
		            txt = txt + x[i].childNodes[0].nodeValue;
		        	}
		        	catch (err) {}
		        }
		        $('#DECAxisEncoder').val(txt);
		  }
		  });
}
function SelectMountType(){
	var url = "../command.cgi?mt=" + $("#MountType").val();
	$.get(url, function(data){
		LoadMount();
	});
}
function SelectBootMode(){
	var url = "../command.cgi?bm=" + $("#BootMode").val();
	$.get(url, function(data){
		LoadMount();
	});
}
function SetGearing(){
	var url = "../command.cgi?wr=" + $("#RAWormRatio").val();
	url += "&wd=" + $("#DECWormRatio").val();
	url += "&sr=" + $("#RASpurRatio").val();
	url += "&sd=" + $("#DECSpurRatio").val();
	url += "&mr=" + $("#RAEncoder").val();
	url += "&md=" + $("#DECEncoder").val();
	url += "&dt=" + $("#DECTVCStep").val();
	$.get(url, function(data){
		LoadMount();
	});
}
function SetSpeeds(){
	var url = "../command.cgi?VM=" + $("#RAManual").val();
	url += "&Vm=" + $("#DECManual").val();
	url += "&VT=" + $("#RAGoto").val();
	url += "&Vt=" + $("#DECGoto").val();
	url += "&VV=" + $("#RAMove").val();
	url += "&Vv=" + $("#DECMove").val();
	url += "&VA=" + $("#RAAccel").val();
	url += "&Va=" + $("#DECAccel").val();
	url += "&VC=" + $("#RACenter").val();
	url += "&Vc=" + $("#DECCenter").val();
	url += "&VG=" + $("#RAGuide").val();
	url += "&Vg=" + $("#DECGuide").val();

	$.get(url, function(data){
		LoadMount();
	});
}
function SetSafety(){
	var url = "../command.cgi?Sr=" + $("#RightLimit").val().split('.')[0] + "°" + $("#RightLimit").val().split('.')[1] + "'";
	url += "&Sl="  + $("#LeftLimit").val().split('.')[0] + "°" + $("#LeftLimit").val().split('.')[1] + "'";
	url += "&Sg=" +  + $("#GotoLimit").val().split('.')[0] + "°" + $("#GotoLimit").val().split('.')[1] + "'";
	$.get(url, function(data){
		LoadMount();
	});
}
function SetEncoders(){
	var url = "../command.cgi?ER=" + $("#RAAxisEncoder").val();
	url += "&ED=" + $("#DECAxisEncoder").val();
	$.get(url, function(data){
		LoadMount();
	});
}
function BootGemini(){
	var url = "../command.cgi?bo=" + $("#BootGemini").val();
	$.get(url, function(data){
		$.mobile.changePage( $("#Main"), { transition: "slideup"} );
	});
}

function SetRefreshTime() {
	refreshTime = $("#sliderRefresh").val() * 1000;
	if (supports_html5_storage()){
		localStorage.setItem("refreshTime", refreshTime);
	}
	$.mobile.changePage( $("#Main"), { transition: "slideup"} );
}

function supports_html5_storage() {
	  try {
	    return 'localStorage' in window && window['localStorage'] !== null;
	  } catch (e) {
	    return false;
	  }
}
function supports_html5_canvas() {
	  return !!document.createElement('canvas').getContext;
}

/**
 * 
 */
function ArcGauge(canvas, greenMin, greenMax, yellowMin, yellowMax, redMin, redMax, Max, value){

	
	 if (canvas.getContext) {
        var context = canvas.getContext("2d");
        
        context.clearRect(0,0,150,300);
        
        var centerX = 135;
        var centerY = 135;
        var radius = 100;
        
        var ticksPerRadian = Math.PI/Max;
        var counterclockwise = false;
        
        
        var startingAngle = redMin * ticksPerRadian + Math.PI;
        var endingAngle = redMax * ticksPerRadian + Math.PI;
        if (endingAngle >= 2*Math.PI){endingAngle=0;}
        
        
        //Red Arc
        context.beginPath();
        context.arc(centerX, centerY, radius, startingAngle, 
            endingAngle, counterclockwise);
     
        context.lineWidth = 30;
        context.strokeStyle = "red"; // line color
        context.stroke();

        startingAngle = yellowMin * ticksPerRadian + Math.PI;
        endingAngle = yellowMax * ticksPerRadian + Math.PI;
        if (endingAngle >= 2*Math.PI){endingAngle=0;}
        
        //Yellow Arc
        context.beginPath();
        context.arc(centerX, centerY, radius, startingAngle, 
                endingAngle, counterclockwise);

        context.strokeStyle = "yellow"; // line color
        context.stroke();
        
        startingAngle = greenMin * ticksPerRadian + Math.PI;
        endingAngle = greenMax * ticksPerRadian + Math.PI;
        if (endingAngle >= 2*Math.PI){endingAngle=0;}
       
        //Green Arc
        context.beginPath();
        context.arc(centerX, centerY, radius, startingAngle, 
                endingAngle, counterclockwise);
        

        context.strokeStyle = "green"; // line color
        context.stroke();
        
        
        //Outline
        counterclockwise=true;
        startingAngle = 0;
        endingAngle = Math.PI;
        radius = 115;
        
        context.beginPath();
        context.arc(centerX, centerY, radius, startingAngle, 
                endingAngle, counterclockwise);
         
        context.lineWidth = 2;
        context.strokeStyle = "black"; // line color
        
        context.moveTo(20,135);
        context.lineTo(250,135);
        context.stroke();
        
        startingAngle = 0;
        endingAngle = Math.PI;
        radius = 85;
        
        context.beginPath();
        context.arc(centerX, centerY, radius, startingAngle, 
                endingAngle, counterclockwise);
		 
		 context.moveTo(50,135);
		 context.lineTo(220,135);
         
        context.lineWidth = 2;
        context.strokeStyle = "black"; // line color
		context.fillStyle = "white";
		 context.closePath();
        context.stroke();
		 context.fill();
        
        
        
        //Tick Marks
        context.lineWidth = 2;
        context.strokeStyle = "black"; // line color
        
        context.save();
        context.translate(centerX,centerY);
        context.beginPath();
    	context.moveTo(105,0);
    	context.lineTo(120,0);
    	
    	context.stroke();
	    for (var i=0;i<10;i++){
	      context.beginPath();
	      context.rotate(-Math.PI/10);
	      context.moveTo(105,0);
	      context.lineTo(120,0);
	    	
	      context.stroke();
	     }
	    context.restore();
	    
	    context.save();
	    context.translate(centerX,centerY);
	    context.lineWidth = 1;
	    context.rotate(Math.PI);
        context.strokeStyle = "black"; // line color
        for (i=0;i<11;i++){
        	context.beginPath();
        	context.strokeText(Math.floor(i/10*Max),122,0);
        	context.rotate(Math.PI/10);
        }
        context.restore();
        
        //Draw the needle
        context.save();
        context.translate(centerX,centerY);
	    context.lineWidth = 4;
	    context.strokeStyle = "blue";
	    context.moveTo(0,0);
	    context.rotate((value/Max)*Math.PI);
	    
	    context.lineTo(-98,0);
	    context.stroke();
	    context.restore();
	    
	    //Draw the hub
	    startingAngle = 2*Math.PI;
        endingAngle = 0;
        radius = 15;
        
        context.beginPath();
        context.arc(centerX, centerY, radius, startingAngle, 
                endingAngle, counterclockwise);
        context.fillStyle = "black";
        context.fill();
	 }
}
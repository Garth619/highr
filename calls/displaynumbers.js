/*
TODO

add function to change standard image
http://javascript.internet.com/miscellaneous/change-image.html

add optional formatting with regular expressions


*/

//google phone number
var gorganicnum = ' (858) 333-8879';

//yahoo phone number
var yorganicnum = ' 1-800-753-6997';

//bing phone number
var borganicnum = ' 1-800-753-6997';

//your 'real' phone number
var defaultNum = ' 1-800-753-6997';

//list of your 'branded' search terms separated by commas only
var brandedTerms = 'XXXX';

//name of the class containing your phone number in your HTML
var phoneClassName = 'tele';





//variables to deal with our CSS background header image
var idToChangeClass = 'wrapper-a';
var gBGurl = '../images/wrapper_0210.jpg';
var yBGurl = '../images/wrapper_0186.jpg';
var bBGurl = '../images/wrapper_0743.jpg';


//create an array out of the branded terms list
var brandedTermsArray = brandedTerms.split(',');

function _uGC(l,n,s) {
 if (!l || l=="" || !n || n=="" || !s || s=="") return "-";
 var i,i2,i3,c="-";
 i=l.indexOf(n);
 i3=n.indexOf("=")+1;
 if (i > -1) {
  i2=l.indexOf(s,i); if (i2 < 0) { i2=l.length; }
  c=l.substring((i+i3),i2);
 }
 return c;
}

// 
// Get the __utmz cookie value. This is the cookies that 
// stores all campaign information. 
// 
var z = _uGC(document.cookie, '__utmz=', ';'); 
// 
// The cookie has a number of name-value pairs. 
// Each identifies an aspect of the campaign. 
// 
// utmcsr  = campaign source 
// utmcmd  = campaign medium 
// utmctr  = campaign term (keyword) 
// utmcct  = campaign content  
// utmccn  = campaign name 
// utmgclid = unique identifier used when AdWords auto tagging is enabled 
// 
// This is very basic code. It separates the campaign-tracking cookie 
// and populates a variable with each piece of campaign info. 
// 
var source  = _uGC(z, 'utmcsr=', '|'); 
var medium  = _uGC(z, 'utmcmd=', '|'); 
var term    = _uGC(z, 'utmctr=', '|'); 
var content = _uGC(z, 'utmcct=', '|'); 
var campaign = _uGC(z, 'utmccn=', '|'); 
var gclid   = _uGC(z, 'utmgclid=', '|'); 
// 
// The gclid is ONLY present when auto tagging has been enabled. 
// All other variables, except the term variable, will be '(not set)'. 
// Because the gclid is only present for Google AdWords we can 
// populate some other variables that would normally 
// be left blank. 
// 
if (gclid !="-") { 
      source = 'google'; 
      medium = 'cpc'; 
} 
// Data from the custom segmentation cookie can also be passed 
// back to your server via a hidden form field 
var csegment = _uGC(document.cookie, '__utmv=', ';'); 
if (csegment != '-') { 
      var csegmentex = /[1-9]*?\.(.*)/;
      csegment    = csegment.match(csegmentex); 
      csegment    = csegment[1]; 
} else { 
      csegment = '(not set)'; 
} 

//
// One more bonus piece of information.  
// We're going to extract the number of visits that the visitor
// has generated.  It's also stored in a cookie, the __utma cookis
// 
var a = _uGC(document.cookie, '__utma=', ';');
var aParts = a.split(".");
var nVisits = aParts[5];


function isNotBrandedTerm(){

	for (i=0;i<brandedTermsArray.length;i++)
	{
		if(term == brandedTermsArray[i]){
			return false;
		}
	} 
	
	return true;
}

function formatPhoneNumber(numIn){

	//need functionality that formats the number according to selected pattern;
	
	return numIn;

}

//return the proper phone number based on the rules
function getPhoneNumber(){
	
	if(source == 'google' && (medium == "organic" || medium =="localpack")){
		return gorganicnum;
	} else if(source == 'yahoo' && medium == "organic"){
		return yorganicnum;
	} else if(source == 'bing' && medium == "organic"){
		return borganicnum;
	} else {
		return defaultNum;
	}

}

function displayTextNumber(){
	
	if(isNotBrandedTerm()){
		var NumberSpans = document.getElementsByTagName('span');
		for(var i=0; i < NumberSpans.length; i++) {
				if(NumberSpans[i].className== phoneClassName) {
						NumberSpans[i].innerHTML=getPhoneNumber();
				}//CLOSE IF
		} //CLOSE FOR
	}//close isNotBrandedTerm

	}//CLOSE FUNCTION
	
	
function replaceBGImage(){
	if(isNotBrandedTerm()){
		if(getPhoneNumber() == gorganicnum){
			document.getElementById(idToChangeClass).style.backgroundImage = 'url('+ gBGurl +')';
		} else if(getPhoneNumber() ==yorganicnum){
			document.getElementById(idToChangeClass).style.backgroundImage = 'url('+ yBGurl +')';
		} else if(getPhoneNumber() == borganicnum){
			document.getElementById(idToChangeClass).style.backgroundImage = 'url('+ bBGurl +')';
		}
	}//close isNotBrandedTerm
}
<?php
include("includes/start-page.html");



$headCode = file_get_contents('includes/template/html/head.html');

$siteID = '4';
$logoCheck = 'true';
$logoSrc = 'http://swconsultant.schoolwires.net/cms/lib8/SW00000039/Centricity/Template/GlobalAssets/images//logos/kankakee-logo.png';
$siteName = 'Kankakee School District 111';
$siteNameOne = 'Kankakee';
$siteNameTwo = 'School District 111';

$siteIDReplace = str_replace('[$SiteID$]', $siteID, $headCode);
$logoCheckReplace = str_replace('<SWCtrl controlname="Custom" props="Name:showLogo" />', $logoCheck, $siteIDReplace);
$logoSrcReplace = str_replace('<SWCtrl controlname="Custom" props="Name:logoSrc" />', $logoSrc, $logoCheckReplace);
$siteNameReplace = str_replace('[$SiteName$]', $siteName, $logoSrcReplace);
$siteNameOneReplace = str_replace('<SWCtrl controlname="Custom" props="Name:siteNameOne" />', $siteNameOne, $siteNameReplace);
$siteNameTwoReplace = str_replace('<SWCtrl controlname="Custom" props="Name:siteNameTwo" />', $siteNameTwo, $siteNameOneReplace);


$headContent = $siteNameTwoReplace;


$hpCode = file_get_contents('includes/template/html/hp.html');

$channelBar = '<div id="sw-channel-list-container">
<ul id="channel-navigation" class="sw-channel-list" role="menubar">
<li class="sw-channel-item  first" role="menuitem" style="z-index: 7000;">
<a href="/domain/170">
<span>District</span></a>
</li><li class="sw-channel-item " role="menuitem" style="z-index: 6998;">
<a href="/domain/171">
<span>Parents</span></a>
</li><li class="sw-channel-item  last" role="menuitem" aria-haspopup="true" style="z-index: 6996;">
<a href="/domain/172">
<span>Community</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
</ul>
</li></ul><div class="clear"></div>
</div>



<script type="text/javascript">
    $(document).ready(function() {
        channelHoverIE();
        channelTouch();
    });

    function channelTouch() {
        // this will change the dropdown behavior when it is touched vs clicked.
        // channels will be clickable on second click. first click simply opens the menu.
        $("#channel-navigation > .sw-channel-item > a").on({
            "touchstart": function (e) {
                
                // see if has menu
                if ($(this).siblings("ul.sw-channel-dropdown").length > 0) {
                    var button = $(this);

                    // add href as property if not already set
                    // then remove href attribute
                    if (!button.prop("linkHref")) {
                        button.prop("linkHref", button.attr("href"));
                        button.removeAttr("href");
                    }

                    // check to see if menu is already open
                    if ($(this).siblings("ul.sw-channel-dropdown").is(":visible")) {
                        // if open go to link
                        window.location.href = button.prop("linkHref");
                    } 

                } 
            }
        });
    }


    
    function channelHoverIE(){
		// set z-index for IE7
		var parentZindex = $("#channel-navigation").parents("div:first").css("z-index");
		var zindex = (parentZindex > 0 ? parentZindex : 8000);
		$(".sw-channel-item").each(function(ind) {
			$(this).css("z-index", zindex - ind);
			zindex --;
		});
	    $(".sw-channel-item").hover(function(){
	        var subList = $(this).children("ul");
	        if ($.trim(subList.html()) !== "") {
		        subList.show();
		    }
		    $(this).addClass("hover");
	    }, function(){
		    $(".sw-channel-dropdown").hide();
		    $(this).removeClass("hover");
	    });
    }

</script>';

$regionOne = '<div id="sw-content-container1" class="region ui-hp"><div id="pmi-17">



<div id="sw-module-180">
    <script type="text/javascript">
        $(document).ready(function() {
            var DomainID = "4";
            var PageID = "1";
            var RenderLoc = "0";
            var MIID = "18";

            //added to check to make sure moderated content doesn"t bleed through the dialog
            if ($("#dialog-overlay-WindowLargeModal-body.moderateContent").length > 0) {
                $("#module-content-" + MIID).find(".ui-widget-detail").find(".ui-article").append("<p>&nbsp;</p>");
            }
        });
    </script>

    <script type="text/javascript">$(document).ready(function() {CheckScript("ModuleView");CheckScript("Mustache");
 });</script>
    
    <div id="module-content-18">
<div class="ui-widget app headlines">
	
	<div class="ui-widget-header">
		<h1>Headlines</h1>
	</div>
	
	<div class="ui-widget-detail" id="sw-app-headlines">
		<ul class="ui-articles">
<li>  <div class="ui-article">   <a class="ui-article-thumb" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=4&amp;PageID=1" style="display: inline;"><span class="img"><img alt="" height="95" width="135" src="../..//cms/lib8/SW00000039/Centricity/Domain/4/Headlines-Icon-13.jpg" style="display: inline-block; width: 100%; max-width: 135px; height: auto; max-height: 95px;"></span></a>   <h1 class="ui-article-title has-thumb"><a href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=4&amp;PageID=1"><span>Headline One</span></a></h1>     <p class="ui-article-description has-thumb">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a class="custom-read-more" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=4&amp;PageID=1">Read Full Story »</a></p>   <div class="ui-article-controls has-thumb">                                    <a class="sub-link" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=4&amp;PageID=1"><span>Comments (-1)</span></a>       </div>   <div class="clear has-thumb"></div>  </div> </li>
<li>  <div class="ui-article">   <a class="ui-article-thumb" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=5&amp;PageID=1" style="display: inline;"><span class="img"><img alt="" height="95" width="135" src="../..//cms/lib8/SW00000039/Centricity/Domain/4/Headlines-Icon-11.jpg" style="display: inline-block; width: 100%; max-width: 135px; height: auto; max-height: 95px;"></span></a>   <h1 class="ui-article-title has-thumb"><a href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=5&amp;PageID=1"><span>Headline Two</span></a></h1>     <p class="ui-article-description has-thumb">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.<a class="custom-read-more" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=5&amp;PageID=1">Read Full Story »</a></p>   <div class="ui-article-controls has-thumb">                                    <a class="sub-link" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=5&amp;PageID=1"><span>Comments (-1)</span></a>       </div>   <div class="clear has-thumb"></div>  </div> </li>
<li>  <div class="ui-article">   <a class="ui-article-thumb" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=6&amp;PageID=1" style="display: inline;"><span class="img"><img alt="" height="95" width="135" src="../..//cms/lib8/SW00000039/Centricity/Domain/4/Headlines-Icon-14.jpg" style="display: inline-block; width: 100%; max-width: 135px; height: auto; max-height: 95px;"></span></a>   <h1 class="ui-article-title has-thumb"><a href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=6&amp;PageID=1"><span>Headline Three</span></a></h1>     <p class="ui-article-description has-thumb">Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.<a class="custom-read-more" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=6&amp;PageID=1">Read Full Story »</a></p>   <div class="ui-article-controls has-thumb">                                    <a class="sub-link" href="../../site/default.aspx?PageType=3&amp;DomainID=4&amp;ModuleInstanceID=18&amp;ViewID=047E6BE3-6D87-4130-8424-D8E4E9ED6C2A&amp;RenderLoc=0&amp;FlexDataID=6&amp;PageID=1"><span>Comments (-1)</span></a>       </div>   <div class="clear has-thumb"></div>  </div> </li>
</ul>
	</div>

	<div class="ui-widget-footer">
		
		
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
        $(document).on("click", "a.ui-article-thumb", function() {
        	window.location = $(this).attr("href");
    	});
    		
		$("#sw-app-headlines").find("img").each(function() {
			if ($.trim(this.src) == "" ) {
				$(this).parent().parent().remove();
			}
		});
        
        // Jason Smith - 12/9/2014 - Removed due to bandwidth implications
		//SetImgSrc();
	});
	
	function  SetImgSrc(){
		$("img").each(function() {
		    
			var imgsrc = this.src.toLowerCase();
			if(-1 != imgsrc.indexOf("http://") || -1 != imgsrc.indexOf("https://")){
				var ext;
				if(-1 != imgsrc.lastIndexOf("http://")){
					ext = imgsrc.substring(imgsrc.lastIndexOf("http://"));
				}
				if(-1 != imgsrc.lastIndexOf("https://")){
					ext = imgsrc.substring(imgsrc.lastIndexOf("https://"));
				}
				this.src = ext;
		    }
		});
	}
</script>
<input type="hidden" id="hidFullPath" value="http://swconsultant.schoolwires.net/">
<input type="hidden" id="hidModuleInstanceID0" value="18">
<script type="text/javascript">
$(document).ready(function (){
});
function LoadGroupedData(container, MIID, PMI, groupYear, groupMonth, groupBy, tag) {
  //ViewToUse looks at the hidden Sidebar List View defined in the Builder View.
  var viewToUse = "";
    if($("#hid-"+MIID+"-SidebarListView").length > 0){
      viewToUse = $("#hid-" + MIID + "-SidebarListView").val();
    };
  GetContent("http://swconsultant.schoolwires.net//cms/UserControls/ModuleView/ModuleViewRendererWrapper.aspx?DomainID=4&PageID=1&ModuleInstanceID=" + MIID + "&PageModuleInstanceID=" + PMI + "&RenderLoc=0&FromRenderLoc=0&GroupYear=" + groupYear + "&GroupMonth=" + groupMonth + "&GroupByField=" + groupBy + "&EnableQuirksMode=0&ViewID=" + viewToUse + "&Tag=" + tag, container, 2, "chkSidebar();");
}
function LoadData(container, MIID, PMI, flexDataID, groupYear, groupMonth, groupBy, targetView, tag) {
  if(targetView !== undefined || targetView.Length() == 0){
  //targetView looks at the hidden Detail View defined in the Builder View.
      targetView = $("#hid-"+MIID+"-DetailView").val();
   }
  GetContent("http://swconsultant.schoolwires.net//cms/UserControls/ModuleView/ModuleViewRendererWrapper.aspx?DomainID=4&PageID=1&ModuleInstanceID=" + MIID + "&PageModuleInstanceID=" + PMI + "&FlexDataID=" + flexDataID + "&GroupYear=" + groupYear + "&GroupMonth=" + groupMonth + "&GroupByField=" + groupBy + "&RenderLoc=0&FromRenderLoc=0&EnableQuirksMode=0&Tag=" + tag + "&ViewID=" + targetView, container, 2, "chkSidebar();");
}
function LoadTaggedData(container, MIID, PMI, tag) {
  //ViewToUse looks at the hidden Sidebar List View defined in the Builder View.
  var viewToUse = "";
    if($("#hid-"+MIID+"-SidebarListView").length > 0){
      viewToUse = $("#hid-" + MIID + "-SidebarListView").val();
    };
  GetContent("http://swconsultant.schoolwires.net//cms/UserControls/ModuleView/ModuleViewRendererWrapper.aspx?DomainID=4&PageID=1&ModuleInstanceID=" + MIID + "&PageModuleInstanceID=" + PMI + "&RenderLoc=0&FromRenderLoc=0&Tag=" + tag + "&EnableQuirksMode=0&ViewID="+viewToUse, container, 2, "chkSidebar();");
}
</script>
</div>

</div></div>
</div>';

$regionTwo = '<div id="sw-content-container2" class="region ui-hp"><div id="pmi-16">
<div id="module-content-17"><div class="ui-widget app upcomingevents last-app">
 <div class="ui-widget-header">
     <h1>Events</h1>
 </div>
 <div class="ui-widget-detail">
		<ul class="ui-articles">
<li>
<div class="ui-article">
     <h1 class="ui-article-title sw-calendar-block-date">Monday</h1>
     <p class="ui-article-description">
         <span class="sw-calendar-block-time">8:00 AM - 9:00 AM</span>
         <span class="sw-calendar-block-title"><a href="
http://swconsultant.schoolwires.net/site/Default.aspx?PageID=2&amp;PageType=17&amp;DomainID=4&amp;ModuleInstanceID=1&amp;EventDateID=58">Raystown Boating</a></span>
     </p>
</div>
</li>
<li>
<div class="ui-article">
     <h1 class="ui-article-title sw-calendar-block-date">Tuesday</h1>
     <p class="ui-article-description">
         <span class="sw-calendar-block-time">8:00 AM - 9:00 AM</span>
         <span class="sw-calendar-block-title"><a href="
http://swconsultant.schoolwires.net/site/Default.aspx?PageID=2&amp;PageType=17&amp;DomainID=4&amp;ModuleInstanceID=1&amp;EventDateID=297">Chest Day</a></span>
     </p>
</div>
</li>
<li>
<div class="ui-article">
     <h1 class="ui-article-title sw-calendar-block-date">July 24, 2015</h1>
     <p class="ui-article-description">
         <span class="sw-calendar-block-time">8:00 AM - 9:00 AM</span>
         <span class="sw-calendar-block-title"><a href="
http://swconsultant.schoolwires.net/site/Default.aspx?PageID=2&amp;PageType=17&amp;DomainID=4&amp;ModuleInstanceID=1&amp;EventDateID=506">TGIF Lunch</a></span>
     </p>
</div>
</li>
<li>
<div class="ui-article">
     <h1 class="ui-article-title sw-calendar-block-date">July 27, 2015</h1>
     <p class="ui-article-description">
         <span class="sw-calendar-block-time">8:00 AM - 9:00 AM</span>
         <span class="sw-calendar-block-title"><a href="
http://swconsultant.schoolwires.net/site/Default.aspx?PageID=2&amp;PageType=17&amp;DomainID=4&amp;ModuleInstanceID=1&amp;EventDateID=59">Raystown Boating</a></span>
     </p>
</div>
</li>
<li>
<div class="ui-article last-article">
     <h1 class="ui-article-title sw-calendar-block-date">August 3, 2015</h1>
     <p class="ui-article-description">
         <span class="sw-calendar-block-time">7:00 AM - 9:00 AM</span>
         <span class="sw-calendar-block-title"><a href="
http://swconsultant.schoolwires.net/site/Default.aspx?PageID=2&amp;PageType=17&amp;DomainID=4&amp;ModuleInstanceID=1&amp;EventDateID=60">Raystown Boating</a></span>
     </p>
</div>
</li>
	</ul>
<a class="view-calendar-link" href="/Page/2"><span>View Calendar</span></a>
 </div>
 <div class="ui-widget-footer">
 </div>
</div>
</div>
</div>
</div>';

$channelBarReplace = str_replace('[$ChannelListNavigation props="DisplayType:Text;SectionMax:<SWCtrl controlname="Custom" props="Name:sectionMax" />;DirectoryType:6;DisplayHomeButton:<SWCtrl controlname="Custom" props="Name:showHomeChannel" />;DisplayCalendarButton:<SWCtrl controlname="Custom" props="Name:showCalendarChannel" />;HideSingleSectionDD:<SWCtrl controlname="Custom" props="Name:hideSingleSectionDD" />"$]', $channelBar, $hpCode);
$regionOneReplace = str_replace('[$ContentRegion props="ContainerNumber:1"$]', $regionOne, $channelBarReplace);
$regionTwoReplace = str_replace('[$ContentRegion props="ContainerNumber:2"$]', $regionTwo, $regionOneReplace);

$homePage = $regionTwoReplace;

$myStart = '<div id="sw-mystart-outer" class="noprint">
<div id="sw-mystart-inner">
<div id="sw-mystart-left">
<div class="sw-mystart-nav sw-mystart-button home"><a tabindex="0" href="http://swconsultant.schoolwires.net/Domain/4" alt="District Home" title="Return to the homepage on the district site."><span>District Home<div id="sw-home-icon"></div>
</span></a></div>
<div class="sw-mystart-nav sw-mystart-dropdown schoollist" tabindex="0">
<div class="selector">Select a School...</div>
<div class="sw-dropdown">
<div class="sw-dropdown-selected">Select a School</div>
<ul class="sw-dropdown-list">
<li><a href="/Domain/8" tabindex="-1">JG Elementary</a></li>
<li><a href="/Domain/9" tabindex="-1">Grannas Middle School</a></li>
<li><a href="/Domain/10" tabindex="-1">Grannas High</a></li>
<li><a href="/Domain/105" tabindex="-1">Hankerdoo Academy</a></li>
<li><a href="/Domain/106" tabindex="-1">Baby Willie Elementary</a></li>
<li><a href="/Domain/107" tabindex="-1">Supra Middle School</a></li>
<li><a href="/Domain/108" tabindex="-1">Radnor Township</a></li>
<li><a href="/Domain/109" tabindex="-1">Sub Site 8</a></li>
<li><a href="/Domain/110" tabindex="-1">Sub Site 9</a></li>
<li><a href="/Domain/111" tabindex="-1">Brandon O"neill</a></li>
</ul>
</div>
<div class="sw-dropdown-arrow">▼</div>
</div>
</div>
<div id="sw-mystart-right">
<div id="ui-btn-signin" class="sw-mystart-button signin"><a href="http://swconsultant.schoolwires.net/site/Default.aspx?PageType=7&amp;SiteID=4&amp;IgnoreRedirect=true" title="Sign in to your website."><span>Sign In</span></a></div>
<div id="ui-btn-register" class="sw-mystart-button register"><a href="http://swconsultant.schoolwires.net/site/Default.aspx?PageType=10&amp;SiteID=4" title="Register for this site."><span>Register</span></a></div>
<div id="sw-mystart-search" class="sw-mystart-nav">
<script type="text/javascript">
$(document).ready(function() {
    $("#sw-search-input").keyup(function(e) {        if (e.keyCode == 13) {
            SWGoToSearchResultsPageswsearchinput();
        }
    });
    $("#sw-search-input").val($("#swsearch-hid-word").val())});
function SWGoToSearchResultsPageswsearchinput() {
window.location.href="http://swconsultant.schoolwires.net/site/Default.aspx?PageType=6&SiteID=4&SearchString=" + $("#sw-search-input").val();
}
</script>
<input id="sw-search-input" type="text" title="Type the word to search for and click Search." value="Search...">
<a tabindex="0" id="sw-search-button" onclick="SWGoToSearchResultsPageswsearchinput();"><span><img src="http://swconsultant.schoolwires.net/Static/V2_11_01//globalassets/images/sw-mystart-search.png" alt="Search"></span></a>
</div>
<div class="clear"></div>
</div>
</div>
</div>';

$swFooter = '<div id="sw-footer-outer">
<div id="sw-footer-inner">
<div id="sw-footer-left"></div>
<div id="sw-footer-right">
<div id="sw-footer-links">
<ul>
<li><a title="Click to email the primary contact" href="mailto:brenton.kelly@schoolwires.com">Questions or Feedback?</a> | </li>
<li><a href="http://www.schoolwires.com/privacy" target="_blank">Blackboard Schoolwires Privacy Policy (Updated)</a> | </li>
<li><a href="http://www.schoolwires.com/terms" target="_blank">Terms of Use</a></li>
</ul>
</div>
<div id="sw-footer-copyright">Copyright © 2002-2015 Blackboard, Inc. All rights reserved.</div>
<div id="sw-footer-logo"><a href="http://www.schoolwires.com" title="This site is powered by Schoolwires.">
<img src="http://swconsultant.schoolwires.net/Static/V2_11_01//GlobalAssets/Images/sw-footer-logo.png" alt="Powered by Schoolwires logo">
</a></div>
</div>
</div>
</div>';

print $headContent;
print "</head><body>";
print $myStart;
print $homePage;
print $swFooter;

include("includes/end-page.html");

?>
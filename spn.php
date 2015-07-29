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


$spCode = file_get_contents('includes/template/html/spn.html');

$channelBar = '<div id="sw-channel-list-container">
<ul id="channel-navigation" class="sw-channel-list" role="menubar">
<li class="sw-channel-item  first" role="menuitem" aria-haspopup="true" style="z-index: 7000;" aria-hidden="true">
<a href="/domain/170">
<span>District</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/170" tabindex="-1"><span>Sample</span></a></li>
<li class="" role="menuitem"><a href="/domain/173" tabindex="-1"><span>Adam</span></a></li>
<li class="" role="menuitem"><a href="/domain/174" tabindex="-1"><span>Test 1</span></a></li>
<li class="" role="menuitem"><a href="/domain/175" tabindex="-1"><span>This is my first New Section</span></a></li>
<li class="" role="menuitem"><a href="/domain/176" tabindex="-1"><span>I love you.</span></a></li>
<li class="" role="menuitem"><a href="/domain/177" tabindex="-1"><span>Section Numero 3</span></a></li>
<li class="" role="menuitem"><a href="/domain/178" tabindex="-1"><span>Another One</span></a></li>
<li class="" role="menuitem"><a href="/domain/179" tabindex="-1"><span>I got this.</span></a></li>
<li class="" role="menuitem"><a href="/domain/180" tabindex="-1"><span>Levi Jonathan Cruse</span></a></li>
<li class="" role="menuitem"><a href="/domain/181" tabindex="-1"><span>Violet Grace Cruse</span></a></li>
<li class="" role="menuitem"><a href="/domain/182" tabindex="-1"><span>Im gonna make this a long one.</span></a></li>
<li class="" role="menuitem"><a href="/domain/183" tabindex="-1"><span>9! 9 New Sections... HA HA HA!</span></a></li>
<li class="" role="menuitem"><a href="/domain/184" tabindex="-1"><span>That last one is to be said in the Counts voice.</span></a></li>
<li class="" role="menuitem"><a href="/domain/185" tabindex="-1"><span>I love you. Again.</span></a></li>
<li class="" role="menuitem"><a href="/domain/186" tabindex="-1"><span>My Heart = Happy</span></a></li>
<li class="" role="menuitem"><a href="/domain/187" tabindex="-1"><span>White Out</span></a></li>
<li class="" role="menuitem"><a href="/domain/188" tabindex="-1"><span>Paper Clip</span></a></li>
<li class="" role="menuitem"><a href="/domain/189" tabindex="-1"><span>Blue Highlighter</span></a></li>
</ul>
</li><li class="sw-channel-item " role="menuitem" aria-haspopup="true" style="z-index: 6998;">
<a href="/domain/171">
<span>Parents</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/171" tabindex="-1"><span>Another Sample</span></a></li>
<li class="" role="menuitem"><a href="/domain/190" tabindex="-1"><span>Purple Highlighter</span></a></li>
<li class="" role="menuitem"><a href="/domain/191" tabindex="-1"><span>"Anyone who puts a hand to the plow and then looks back is not fit for the Kingdom of God."</span></a></li>
<li class="" role="menuitem"><a href="/domain/192" tabindex="-1"><span>Luke 9:62</span></a></li>
<li class="" role="menuitem"><a href="/domain/193" tabindex="-1"><span>Let your eyes look straight ahead; fix your gaze directly before you.</span></a></li>
<li class="" role="menuitem"><a href="/domain/194" tabindex="-1"><span>Proverbs 4:25</span></a></li>
<li class="" role="menuitem"><a href="/domain/195" tabindex="-1"><span>Orange Highlighter</span></a></li>
<li class="" role="menuitem"><a href="/domain/196" tabindex="-1"><span>I love your face off</span></a></li>
<li class="" role="menuitem"><a href="/domain/197" tabindex="-1"><span>Levi &amp; Violet</span></a></li>
<li class="" role="menuitem"><a href="/domain/198" tabindex="-1"><span>Ivan &amp; Norah</span></a></li>
<li class="" role="menuitem"><a href="/domain/199" tabindex="-1"><span>David Adam Cruse, Owner of my Heart</span></a></li>
<li class="" role="menuitem"><a href="/domain/200" tabindex="-1"><span>Blah Blah Blah</span></a></li>
<li class="" role="menuitem"><a href="/domain/201" tabindex="-1"><span>Don’t worry about anything; instead, pray about everything. Tell God what you need, and thank him fo</span></a></li>
<li class="" role="menuitem"><a href="/domain/202" tabindex="-1"><span>Philippians 4:6-7</span></a></li>
<li class="" role="menuitem"><a href="/domain/203" tabindex="-1"><span>Vacation!!!</span></a></li>
<li class="" role="menuitem"><a href="/domain/204" tabindex="-1"><span>Wahoooo!</span></a></li>
</ul>
</li><li class="sw-channel-item  last" role="menuitem" aria-haspopup="true" style="z-index: 6996;">
<a href="/domain/172">
<span>Community</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/205" tabindex="-1"><span>New Section of a New Section</span></a></li>
<li class="" role="menuitem"><a href="/domain/206" tabindex="-1"><span>Second New Section</span></a></li>
<li class="" role="menuitem"><a href="/domain/207" tabindex="-1"><span>This is getting old</span></a></li>
<li class="" role="menuitem"><a href="/domain/208" tabindex="-1"><span>But Im happy to help :)</span></a></li>
<li class="" role="menuitem"><a href="/domain/209" tabindex="-1"><span>Violet is a toot</span></a></li>
<li class="" role="menuitem"><a href="/domain/210" tabindex="-1"><span>Ivan Humperdink the Terrible</span></a></li>
<li class="" role="menuitem"><a href="/domain/211" tabindex="-1"><span>I cant wait for vacation!!!</span></a></li>
<li class="" role="menuitem"><a href="/domain/212" tabindex="-1"><span>La la la la</span></a></li>
<li class="" role="menuitem"><a href="/domain/213" tabindex="-1"><span>I hope youre having a nice day</span></a></li>
<li class="" role="menuitem"><a href="/domain/214" tabindex="-1"><span>Swing Set!!!</span></a></li>
<li class="" role="menuitem"><a href="/domain/215" tabindex="-1"><span>Levi is gonna be so excited!</span></a></li>
<li class="" role="menuitem"><a href="/domain/216" tabindex="-1"><span>Violet too</span></a></li>
<li class="" role="menuitem"><a href="/domain/217" tabindex="-1"><span>almost done</span></a></li>
<li class="" role="menuitem"><a href="/domain/218" tabindex="-1"><span>One more...after this one.</span></a></li>
<li class="" role="menuitem"><a href="/domain/219" tabindex="-1"><span>...and....scene.</span></a></li>
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

$contentRegion = '<div id="sw-content-layout-wrapper" class="ui-spn ui-print"><div id="sw-content-layout1"><div id="sw-content-container1" class="ui-column-one region"><div id="pmi-1">
<div id="module-content-1">
<link rel="Stylesheet" type="text/css" href="http://swconsultant.schoolwires.net/Static/V2_11_01//site/assets/styles/fullcalendar.css">

<style type="text/css">
	span.fc-event-title.ellipsis {
		-moz-binding: url("http://swconsultant.schoolwires.net//cms/Module/Calendar/ellipsis.xml#ellipsis");
	}
	
	#calendar-pnl-toolbar select {
	    margin: 0 0 10px 0;
	}
</style>

<script type="text/javascript" src="http://swconsultant.schoolwires.net/Static/V2_11_01//GlobalAssets/Scripts/ThirdParty/jquery.fullcalendar1.6.1.js"></script>
<script type="text/javascript" src="http://swconsultant.schoolwires.net/Static/V2_11_01//GlobalAssets/Scripts/ThirdParty/jquery.dropdown.js"></script>
<script type="text/javascript">
    eventDateID = 0;
    currentMonth = 0;
    currentYear = 0;

    $(document).ready(function() {		   
        // ADA click events
        $("#calendar-pnl-filter-toggle a").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-print").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#A1").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-calendarfollow").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-icalfed").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-change-today").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-change-day").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-change-week").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#calendar-btn-change-month").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#ui-btn-calendarlist-list").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#ui-btn-calendarlist-back").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $("#ui-btn-calendarlist-forward").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $(".calendar-filter-btn").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $(".category-filter-btn").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

		// Don"t show the sidebar if the width is not greater than 900 px.
	    var intCalendarWidth = $("#calendar-pnl-calendarcontainer").width();

		if (intCalendarWidth < 900 ) {
			$("#calendar-pnl-smcalendar").addClass("ui-helper-hidden")
		}
			
		var thisYear = new Date().getFullYear();

	    $("#calendarlist-year").append("<option value="" + (thisYear - 1) + "">" + (thisYear - 1) + "</option>")
				.append("<option selected="selected" value="" + thisYear + "">" + (thisYear) + "</option>")
	            .append("<option value="" + (thisYear + 1) + "">" + (thisYear + 1) + "</option>")
	            .append("<option value="" + (thisYear + 2) + "">" + (thisYear + 2) + "</option>")
	            .append("<option value="" + (thisYear + 3) + "">" + (thisYear + 3) + "</option>")
	            .append("<option value="" + (thisYear + 4) + "">" + (thisYear + 4) + "</option>")
	            .append("<option value="" + (thisYear + 5) + "">" + (thisYear + 5) + "</option>")
	            .append("<option value="" + (thisYear + 6) + "">" + (thisYear + 6) + "</option>")
	            .append("<option value="" + (thisYear + 7) + "">" + (thisYear + 7) + "</option>");
	    
	    var thisMonth;
	    //if (eventDateID > 0) {
	    //	thisMonth = 6;
	    //} else {
	    	thisMonth = new Date().getMonth();
	    //}

	    $("#calendarlist-month").val(thisMonth + 1).change();

	    //function LoadEventPrint() {	
        //		var view = $("#calendar").fullCalendar("getView");
    //		var month = $("#calendar").fullCalendar("getmonth");
//		var date = $("#calendar").fullCalendar("getdate");
//		var year = $("#calendar").fullCalendar("getyear");
//		if(!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")){
//			view = "list";
//			month = $("#calendarlist-month").val() - 1;
//            year = $("#calendarlist-year").val();
//		} 
//		
//OpenWindow("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarPrint.aspx?ModuleInstanceID=1&PageID=2&Date=" + date + "&Month=" + month + "&Year=" + year + "&View=" + view, "PrintCalendar", "width=" + (screen.width - 100) + ",height=" + (screen.height - 100) + ",menubar=yes");
	    // }

        //remove extra datepicker div that gets added into footer
	    if ($("#ui-datepicker-div").length){
	        $("#ui-datepicker-div").hide();
	    }

        $("#calendar").fullCalendar({
	        editable: false,
	        header: {
	            left: "",
	            center: "title",
	            right: ""
	        },
            month: new Date().getMonth(),
            date: new Date().getDate(),
            year: new Date().getFullYear(),
            defaultView: "month",
	        weekMode: "liquid",
	        timeFormat: "h:mmtt",
	        events: function(start, end, callback) {
                $.ajax({
                    type: "POST",
                    url: "http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarController.aspx/GetEvents",
                    data: "{ModuleInstanceID: 1, " +
                                "StartDate: "" + (parseInt(start.getMonth()) + 1) + "/" + start.getDate() + "/" + start.getFullYear() +  "", " +
                                "EndDate: "" + (parseInt(end.getMonth()) + 1) + "/" + end.getDate() + "/" + end.getFullYear() + ""}", 
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    cache: false,
                    success: function(result) { 
                        var calevents = eval(result.d);
	                    callback(calevents);
						$(".fc-event-title").addClass("ellipsis");
                    }
                });
	        }, 
	        eventClick: function(calEvent, jsEvent, view) {
	            if ($(this).hasClass("fc-event-more")) {
	                $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");

	                // get weekday and date
	                var dayClass;
	                var dateClass = "fc-day" + (calEvent.start.getDate() - 1);

	                switch (calEvent.start.getDay()) {
	                    case 0:
	                        dayClass = "fc-sun";
	                        break;
	                    case 1:
	                        dayClass = "fc-mon";
	                        break;
	                    case 2: 
	                        dayClass = "fc-tue";
	                        break;
	                    case 3:
	                        dayClass = "fc-wed";
	                        break;
	                    case 4:
	                        dayClass = "fc-thu";
	                        break;
	                    case 5:
	                        dayClass = "fc-fri";
	                        break;
	                    case 6:
	                        dayClass = "fc-sat";
	                        break;
	                }

	                $("td." + dayClass + "." + dateClass).addClass("fc-active-day").attr("m", calEvent.start.getMonth()).attr("d", calEvent.start.getDate()).attr("y", calEvent.start.getFullYear());
	                ChangeView("basicDay", calEvent.start);
	            } else {
                    LoadEventDetail(calEvent.id);
	            }
	        },
	        eventMouseover: function(calEvent, jsEvent, view) {
	            ShowEventOverlay(this, calEvent.id, calEvent.eventid, calEvent.recurringevent, calEvent.title, calEvent.start, calEvent.end, calEvent.noendtime);
	        },
	        eventMouseout: function() {
	            $("#calendar-event-overlay").remove();
	        },
	        dayClick: function(dayDate, allDay, jsEvent, view) {
	            // highlight the day and set it to active
	            $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");
	            $(this).addClass("fc-active-day").attr("m", dayDate.getMonth()).attr("d", dayDate.getDate()).attr("y", dayDate.getFullYear());
	        },
	        dayRender: function(date, cell) {
	            cell.bind("dblclick", function() {
	                $("#calendar").fullCalendar("changeView", "basicDay");
	                $("#calendar").fullCalendar("gotoDate", date);
	            });
	        },
	        viewDisplay: function(view) {
	            var startDate = new Date();
	            var endDate = new Date();

	            startDate = view.start;
	            endDate = view.end;

	            var view = $("#calendar").fullCalendar("getView");
	                
	            // if month view, save month
	            if (view.name == "month") {
	                var d = $("#calendar").fullCalendar("getDate");
                    
	                currentMonth = $.fullCalendar.formatDate(d, "M");
	                currentYear = $.fullCalendar.formatDate(d, "yyyy");

	                currentMonth = currentMonth - 1;

	                /*currentMonth = $("#calendar").fullCalendar("getmonth");
	                currentYear = $("#calendar").fullCalendar("getyear");*/

	                $("#calendarlist-month").val(currentMonth + 1);
	                ChangeYearDropDown(currentYear);
                    $("#calendar-pnl-title h1").text(getFullMonth(currentMonth + 1) + " " + currentYear);
	            } else if (view.name == "basicWeek") {
                    // select day
                    if ("" == "basicWeek") {
                        var curdate = new Date(0, 0, 0);
                        var dateClass = "fc-day" + curdate.getDay();
                        $("td." + dateClass).addClass("fc-active-day").attr("m", curdate.getMonth()).attr("d", curdate.getDate()).attr("y", curdate.getFullYear());
                    }

	                // first see if week falls inside same month
	                if (startDate.getMonth() == endDate.getMonth()) {
	                    $("#calendarlist-month").val(startDate.getMonth() + 1);
	                    ChangeYearDropDown(startDate.getFullYear());
                        $("#calendar-pnl-title h1").text(getFullMonth(startDate.getMonth() + 1) + " " + startDate.getFullYear());
	                } else {
	                    // see if part of original month still shows
	                    if ((startDate.getMonth() == currentMonth && startDate.getFullYear() == currentYear) || (endDate.getMonth() == currentMonth && endDate.getFullYear() == currentYear)) {
	                         $("#calendarlist-month").val(currentMonth + 1);
	                         ChangeYearDropDown(currentYear);
                             $("#calendar-pnl-title h1").text(getFullMonth(currentMonth + 1) + " " + currentYear);
	                    } else {
	                        // moved away from that month, see which month covers more area
	                        if (endDate.Date < 3) {
	                            $("#calendarlist-month").val(endDate.getMonth() + 1);
	                            ChangeYearDropDown(endDate.getFullYear());
                                $("#calendar-pnl-title h1").text(getFullMonth(endDate.getMonth() + 1) + " " + endDate.getFullYear());
	                        } else {
	                            $("#calendarlist-month").val(startDate.getMonth() + 1);
	                            ChangeYearDropDown(startDate.getFullYear());
                                $("#calendar-pnl-title h1").text(getFullMonth(startDate.getMonth() + 1) + " " + startDate.getFullYear());
	                        }
	                    }
	                }
	            } else if (view.name == "basicDay") {
	                $("#calendarlist-month").val(startDate.getMonth() + 1);
	                ChangeYearDropDown(startDate.getFullYear());
                    $("#calendar-pnl-title h1").text(getFullMonth(startDate.getMonth() + 1) + " " + startDate.getFullYear());
	            }
	            
	           //alert("finished - dropdown says " + $("#calendarlist-month").val() + ", calendar says " + $("#calendar").fullCalendar("getmonth"));
	            
				if (!$("#calendar-pnl-smcalendar").hasClass("ui-helper-hidden")) {
				    var d = $("#calendar").fullCalendar("getDate");
                    
				    var myMonth = $.fullCalendar.formatDate(d, "M");
				    var myYear = $.fullCalendar.formatDate(d, "yyyy");

				    myMonth = myMonth - 1;

				    $("#small-calendar-1").datepicker("setDate", new Date(myYear, myMonth));
				}

				// set toggle button classes
				$("#calendarview-toggle a").removeClass("active");

				switch (view.name) {
					case "month":
						$("#calendarview-toggle a.month").addClass("active");
						break;
					case "basicWeek":
						$("#calendarview-toggle a.week").addClass("active");
						break;
					case "basicDay":
						$("#calendarview-toggle a.day").addClass("active");
						break;
				}
	        },
            eventRender: function(event, eventElement) {
                var view = $("#calendar").fullCalendar("getView");

                eventElement.attr("tabIndex", 0);

                eventElement.css("backgroundColor", event.CategoryColor);
                eventElement.css("borderColor", event.CategoryColor);

                eventElement.keydown(function(e) {
                    e.stopImmediatePropagation();

                    if (e.keyCode == 13) {
                        LoadEventDetail(event.id);
                    }
                });

                adjustColour(eventElement);

                if (event.nativeevent == 0) {
                    eventElement.addClass("calendarevent-locked");
                } else if (event.registration.toLowerCase() == "true") {
                    eventElement.addClass("calendarevent-register");
                } else if (event.mandatory.toLowerCase() == "true") {
                    eventElement.addClass("calendarevent-mandatory");
                }

                // check for dates to display that are spanning and in current month only
                // hide all single day events that don"t fall in current month
                if (view.name == "month") {
                    var d = $("#calendar").fullCalendar("getDate");
                    var currentMonth = $.fullCalendar.formatDate(d, "M");

                    var eventStartYear = $.fullCalendar.formatDate(event.start, "yyyy");
                    var eventEndYear = $.fullCalendar.formatDate(event.end, "yyyy");

                    var eventStartMonth = $.fullCalendar.formatDate(event.start, "M");
                    var eventEndMonth = $.fullCalendar.formatDate(event.end, "M");

                    if (eventEndYear == eventStartYear) {
                        if (eventStartMonth != currentMonth) {
                            if (event.start.getDate() - event.end.getDate() == 0) {
                                eventElement.addClass("ui-helper-hidden");
                            }

                            if (eventStartMonth > currentMonth) {
                                eventElement.addClass("ui-helper-hidden");
                            }
                        }
                    }
                }
	        }
        });

        // set up small calendars
        
        $("#small-calendar-1").datepicker({ 
            dayNamesMin: ["", "", "", "", "", "", ""],
            numberOfMonths: [3, 1],
            monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            onSelect: function(dateText, inst) { 
                var myDate = new Date(dateText);

                $("#calendar").fullCalendar("changeView", "basicDay");
                $("#calendar").fullCalendar("gotoDate", myDate);
            }
        });
        
        $(document).on("click", "#calendar-tbl-calendars .ui-datepicker-title", function() {
            var tempMonth = $.trim($(this).text()).substring(0, 3);
            var myMonth = 0;
            var myYear = $.trim($(this).text()).substring(3);

            switch (tempMonth.toLowerCase()) {
                case "jan":
                    myMonth = 0;
                    break;
                 case "feb":
                    myMonth = 1;
                    break;
                 case "mar":
                    myMonth = 2;
                    break;
                 case "apr":
                    myMonth = 3;
                    break;
                 case "may":
                    myMonth = 4;
                    break;
                 case "jun":
                    myMonth = 5;
                    break;
                 case "jul":
                    myMonth = 6;
                    break;
                 case "aug":
                    myMonth = 7;
                    break;
                 case "sep":
                    myMonth = 8;
                    break;
                 case "oct":
                    myMonth = 9;
                    break;
                 case "nov":
                    myMonth = 10;
                    break;
                 case "dec":
                    myMonth = 11;
                    break;
            }

            var myDate = new Date(parseInt(myYear), parseInt(myMonth));// parseInt necessary for safari

            $("#calendar").fullCalendar("changeView", "month");
            $("#calendar").fullCalendar("gotoDate", myDate);
            
            if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
                myMonth = myMonth + 1;
                                
                $("#calendarlist-month").val(myMonth).change();
                $("#calendarlist-year").val($.trim(myYear)).change();
                
                if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
                    LoadEventListView(1, myMonth, myYear);
                }

                if (!$("#calendar-pnl-smcalendar").hasClass("ui-helper-hidden")) {
					    $("#small-calendar-1").datepicker("setDate", new Date(myYear, myMonth - 1));
				}
			}
        });
        
	    $(document).on("click", "#calendar-btn-myevents", function() {
            OpenDialogOverlay("WindowLargeModal", { LoadType: "U", LoadURL: "http://swconsultant.schoolwires.net//site/UserControls/Calendar/MyEventsWrapper.aspx?ModuleInstanceID=1" });
        });

	    $(document).on("click", "#calendar-btn-legend", function() {
            OpenDialogOverlay("WindowMediumModal", { LoadType: "U", LoadURL: "http://swconsultant.schoolwires.net//site/UserControls/Calendar/CategoryLegendWrapper.aspx?ModuleInstanceID=1" });
        });
        
	    $(document).on("click", "#eventexport-btn-save", function() {
		   $("#calendarexport-pnl-detail").validate({ onSuccess: EventDetailExportByDateRange });
		});
       
        if ("" == "list") {
            LoadEventListView(1, 0, 0);
        }
        
	    $(document).on("click", "#myeventslist-btn-filter", function() {
            $("#myeventslist-pnl-toolbar").validate({ onSuccess: SearchMyEvents });
        });
        
	    $(document).on("change", "#calendarlist-month, #calendarlist-year", function() {
            $("#calendar-pnl-title h1").text(getFullMonth($("#calendarlist-month").val()) + " " + $("#calendarlist-year").val());
	    });

	    $("#calendar").fullCalendar("render");

        // remove table header for ADA compliance
	    setTimeout(function() {$(".ui-datepicker-calendar thead").remove();}, 250);
   }); // end document ready
   
    function ChangeYearDropDown(year) {
        if ( year < parseInt($("#calendarlist-year option:first").val())) {
            $("<option value="" + year + "">" + year + "</option>").insertBefore("#calendarlist-year option:first");
        } else if (year > parseInt($("#calendarlist-year option:last").val())) {
            $("#calendarlist-year").append("<option value="" + year + "">" + year + "</option>");
        }
    
        $("#calendarlist-year").val(year);
    }

	function ChangeView(type, eDate) {
        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {                    
            $("#calendarlist-pnl-specialview").addClass("ui-helper-hidden");
            $("#calendar").removeClass("ui-helper-hidden");
            setTimeout("$("#calendar").fullCalendar("refetchEvents");", 500);
        }

        if (eDate !== undefined) { // clicked "more" link
            var gotoDate = new Date(eDate.getFullYear(), eDate.getMonth(), eDate.getDate());

            $("#calendar").fullCalendar("gotoDate", gotoDate);
            $("#calendar").fullCalendar("changeView", type);
        } else if ($("#calendar").find(".fc-active-day").length > 0) { // active day
			var activeDay = $("td.fc-active-day");
			var gotoDate = new Date(activeDay.attr("y"), activeDay.attr("m"), activeDay.attr("d"));

			$("#calendar").fullCalendar("gotoDate", gotoDate);
            $("#calendar").fullCalendar("changeView", type);
        } else { // go to view w/o changing
            var gotoDate = new Date($("#calendarlist-year").val(), ($("#calendarlist-month").val() - 1), 1);
            $("#calendar").fullCalendar("gotoDate", gotoDate);
            $("#calendar").fullCalendar("changeView", type);
        }

        // remove table header for ADA compliance
        $(".ui-datepicker-calendar thead").remove();
    }
	
	function LoadEventDetail(eventDateID, userRegID, isEdit) {
	    (userRegID === undefined ? userRegID = 0 : "");
	    (isEdit === undefined ? isEdit = false : "");
	   
        var isListView = !$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")
        var currentView = $("#calendar").fullCalendar("getView");

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            currentView = "list";
        } else {
            currentView = currentView.name;
        }

        /*var currentDate = $("#calendar").fullCalendar("getdate");
        var currentMonth = $("#calendar").fullCalendar("getmonth");
        var currentYear = $("#calendar").fullCalendar("getyear");*/

        var currentDate = $("#calendar").fullCalendar("getDate");
        var currentMonth = $.fullCalendar.formatDate(currentDate, "M");
        var currentYear = $.fullCalendar.formatDate(currentDate, "yyyy");

        currentMonth = currentMonth - 1;

        parent.location.href = "http://swconsultant.schoolwires.net//site/Default.aspx?PageID=2&PageType=17&DomainID=4&ModuleInstanceID=1&EventDateID=" + eventDateID + "&CurrentView=" + currentView; //"&UserRegID=" + userRegID + "&IsEdit=" + isEdit;
    }
	
	function ShowEventOverlay(obj, eventDateID, eventID, recurring, title, start, end, noEndTime) {
        $this = $(obj);
        $("#calendar-event-overlay").remove();

        // get date for display
		var startDate = (start.getMonth() + 1) + "/" + start.getDate() + "/" + start.getFullYear();
		var endDate = "";
	    //if (end !== null) {
		    endDate = (end.getMonth() + 1) + "/" + end.getDate() + "/" + end.getFullYear();
        //} else endDate = startDate;
		
		var strDate = "";
		var allDay = false;
		//var noEndTime = false;
		
		// get times
		var startHour = start.getHours().toString();
		var startMinute = start.getMinutes().toString();

		var startTime = (startHour < 12 ? (startHour.length == 2 ? startHour : (startHour == "0" ? "12" : "0" + startHour)) + ":" + (startMinute.length == 2 ? startMinute : "0" + startMinute) + " am" : ((startHour - 12).toString().length == 2 ? startHour - 12 : (startHour - 12 == 0 ? "12" : "0" + (startHour - 12))) + ":" + (startMinute.length == 2 ? startMinute : "0" + startMinute) + " pm");
		
		var endHour = "";
		var endMinute = "";

	    if (end !== null) {
		    endHour = end.getHours().toString();
		    endMinute = end.getMinutes().toString();
	    } else {
		    endHour = "00";
		    endMinute = "00";
	    }

        var endTime = (endHour < 12 ? (endHour.length == 2 ? endHour : "0" + endHour) + ":" + (endMinute.length == 2 ? endMinute : "0" + endMinute) + " am" : ((endHour - 12).toString().length == 2 ? endHour - 12 : (endHour - 12 == 0 ? "12" : "0" + (endHour - 12))) + ":" + (endMinute.length == 2 ? endMinute : "0" + endMinute) + " pm");
		
        // check if all day
		if (startTime == "12:00 am" && endTime == "11:59 pm") {
			allDay = true;
		}
		
		// check no end time for migrated data
	    //if (endTime == "00:00 am") {
		//    noEndTime = true;
	    //}
	
		// set start date
		strDate += startDate;

		// add time if not all day
		if (allDay == false) {
			strDate += " " + startTime;
		}

		// if not same day, add end date
		if (startDate != endDate) {
			strDate += " to " + endDate;
		}

		// add end time if not all day
		if (allDay == false && noEndTime == false) {
			if (startDate != endDate) {
				strDate += " " + endTime;
			} else {
				strDate += " to  " + endTime;
			}
		}

		// check title length and add ellipsis if necessary
		if (title.length > 70) {
		    title = title.substring(0, 69) + "...";
		}

        $("body").append("<div id="calendar-event-overlay"><h1>" + title.replace(/&/g, "&amp").replace(/\"/g, "&quot;").replace(/</g, "&lt;").replace(/>/g, "&gt;")  + "</h1><h2> " + strDate + "</h2></span></div>");
        
        $(document).on("click", function() {
            $("#calendar-event-overlay").remove();
        });

        $("#calendar-event-overlay").css({
			"left": ($this.offset().left + -5) + "px",
            "top": ($this.offset().top + $this.outerHeight()) + "px"
        }).bind("mouseleave", function() {
            $(this).remove();
        });
	}

    function EditMyEventRegistration(eventDateID, userRegID) {
        //LoadEventRegistrationEdit(userRegID);
        LoadEventDetail(eventDateID, userRegID, true)
    }
    
    function RemoveMyEventRegistration(userRegID,EventDateID) {
        //var data = "{userRegID:" + userRegID + ", EventDateID:" + EventDateID + "}";
        swalert("Are you sure you want to remove this registration?","Remove Registration","critical","yesno",YesRemoveMyEventRegistration,"","",{userRegID:userRegID,EventDateID:EventDateID});
    }
    
    function YesRemoveMyEventRegistration(userData) {
        var data = "{UserRegistrationID: " + userData.userRegID  + ", EventDateID: " + userData.EventDateID + "}";
        var StartDate;
        var EndDate;

        if ($("#myeventslist-txt-startdate").val() == "") {
            StartDate = "1/1/1900";
        } else {
            StartDate = $("#myeventslist-txt-startdate").val();
        }

        if ($("#myeventslist-txt-enddate").val() == "") {
            EndDate = "1/1/1900";
        } else {
            EndDate = $("#myeventslist-txt-enddate").val();
        }       
              
        if (StartDate != "1/1/1900") {
            StartDate += " 0:00:00";
        }

        if (EndDate != "1/1/1900") {
            EndDate += " 23:59:59";
        }

        var success = "GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/MyEventsListWrapper.aspx?ModuleInstanceID=1&StartDate=" + StartDate + "&EndDate=" + EndDate + "", "myeventslist-pnl-detail", 2, ""); ShowNotification("Success! You have deleted your registration for this event.");";
        var failure = "CallControllerFailure(result[0].errormessage);";
        
        CallController("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarController.aspx/DeleteRegistration", data, success, failure);
    } 
       
    function LoadEventListView(ModuleInstanceID, Month, Year) {
		$("#calendarview-toggle a").removeClass("active");
		$("#calendarview-toggle a.list").addClass("active");

        $("#calendarlist-pnl-specialview").removeClass("ui-helper-hidden");
        $("#calendar").addClass("ui-helper-hidden");

        Month = $("#calendarlist-month").val();
        Year = $("#calendarlist-year").val();

        GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/EventListViewWrapper.aspx?ModuleInstanceID=" + ModuleInstanceID + "&Month=" + Month + "&Year=" + Year, "calendarlist-pnl-specialview", 2, "");
    }

    function ChangeMonth() { 
        var itemid = $("#calendarlist-month").val();
        $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");
        var gotoDate = new Date($("#calendarlist-year").val(), (itemid - 1), 1);
        $("#calendar").fullCalendar("gotoDate", gotoDate);

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        }
        
        if (!$("#calendar-pnl-smcalendar").hasClass("ui-helper-hidden")) {
	        $("#small-calendar-1").datepicker("setDate", new Date($("#calendarlist-year").val(), parseInt($("#calendarlist-month").val()-1)));
        }    
        
        // remove table header for ADA compliance
        $(".ui-datepicker-calendar thead").remove();
    }

    function ChangeYear(itemid) { 
		var itemid = $("#calendarlist-year").val();
        $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");
        var gotoDate = new Date(itemid, ($("#calendarlist-month").val() - 1), 1);
        $("#calendar").fullCalendar("gotoDate", gotoDate);

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        }
        
        if (!$("#calendar-pnl-smcalendar").hasClass("ui-helper-hidden")) {
		    $("#small-calendar-1").datepicker("setDate", new Date($("#calendarlist-year").val(), parseInt($("#calendarlist-month").val()-1)));
        }

        // remove table header for ADA compliance
        $(".ui-datepicker-calendar thead").remove();
    }

    function GoToNext() {
        $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");
        $("#calendar").fullCalendar("next");

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            var month = parseInt($("#calendarlist-month").val()) + 1;
            var year = parseInt($("#calendarlist-year").val());

            if (month > 12) {
                month = 1;
                year = year + 1;
            }

            $("#calendarlist-month").val(month).change();
            ChangeYearDropDown(year);
            $("#calendarlist-year").val(year).change();
            
            if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
                LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
            }

            if (!$("#calendar-pnl-smcalendar").hasClass("ui-helper-hidden")) {
				$("#small-calendar-1").datepicker("setDate", new Date($("#calendarlist-year").val(), parseInt($("#calendarlist-month").val())-1));
			}
        }

        // remove table header for ADA compliance
        $(".ui-datepicker-calendar thead").remove();
    }
    
    function GoToPrevious() {
        $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");
        $("#calendar").fullCalendar("prev");

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            var month = $("#calendarlist-month").val() - 1;
            var year = $("#calendarlist-year").val();

            if (month < 1) {
                month = 12;
                year = year - 1;
            }

            $("#calendarlist-month").val(month).change();
            ChangeYearDropDown(year);
            $("#calendarlist-year").val(year).change();
            
            if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
                LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
            }

            if (!$("#calendar-pnl-smcalendar").hasClass("ui-helper-hidden")) {
				$("#small-calendar-1").datepicker("setDate", new Date($("#calendarlist-year").val(), parseInt($("#calendarlist-month").val())-1));
			}
        }

        // remove table header for ADA compliance
        $(".ui-datepicker-calendar thead").remove();
    }
    
    function GoToToday() {
        $("#calendar").find("td.fc-active-day").removeClass("fc-active-day");
        $("#calendar").fullCalendar("today");

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        }

        // remove table header for ADA compliance
        $(".ui-datepicker-calendar thead").remove();
    }

    function LoadEventPrint() {
        var view = $("#calendar").fullCalendar("getView");
        view = view.name;

		/*var month = $("#calendar").fullCalendar("getmonth");
		var date = $("#calendar").fullCalendar("getdate");
		var year = $("#calendar").fullCalendar("getyear");*/

        var date = $("#calendar").fullCalendar("getDate");
        var month = $.fullCalendar.formatDate(date, "M");
        var day = $.fullCalendar.formatDate(date, "d");
        var year = $.fullCalendar.formatDate(date, "yyyy");

        month = month - 1;

		if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
			view = "list";
			month = $("#calendarlist-month").val() - 1;
            year = $("#calendarlist-year").val();
		} 
		
		OpenWindow("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarPrint.aspx?ModuleInstanceID=1&PageID=2&DomainID=4&Date=" + day + "&Month=" + month + "&Year=" + year + "&View=" + view, "PrintCalendar", "width=" + (screen.width - 100) + ",height=" + (screen.height - 100) + ",menubar=yes,scrollbars=yes,top=0,left=0,resizable=yes");
    }
	
    function ToggleEventListDetail() {
        if ($("#eventlist-chk-toggledetail").is(":checked")) {
            $(".ui-eventlistview-detail").removeClass("ui-helper-hidden");
        } else {
            $(".ui-eventlistview-detail").addClass("ui-helper-hidden");
        }
    }

    function LoadEventExportByDateRange() {
        OpenDialogOverlay("WindowMediumModal", { LoadType: "U", LoadURL: "http://swconsultant.schoolwires.net//site/UserControls/Calendar/EventExportByDateRangeWrapper.aspx" });
    }

    function EventDetailExportByDateRange() {
        var eventDate = new Date($("#eventexport-txt-startdate").val());
        var endDate = new Date($("#eventexport-txt-enddate").val());
                
        if (endDate < eventDate) {
            swalert("The start date must come before the end date.", "Attention", "warning", "ok");
            return false;
        }

        document.location.href = "http://swconsultant.schoolwires.net//site/UserControls/Calendar/EventExport.aspx?ModuleInstanceID=1&StartDate=" + $("#eventexport-txt-startdate").val() + "&EndDate=" + $("#eventexport-txt-enddate").val();
        CloseDialogOverlay("WindowMediumModal");
    }

    function getFullMonth(monthValue) {
        monthValue = parseInt(monthValue);
        var fullMonth = "";

        switch(monthValue) {
            case 1:
                fullMonth = "January";
                break;
            case 2:
                fullMonth = "February";
                break;
            case 3:
                fullMonth = "March";
                break;
            case 4:
                fullMonth = "April";
                break;
            case 5:
                fullMonth = "May";
                break;
            case 6:
                fullMonth = "June";
                break;
            case 7:
                fullMonth = "July";
                break;
            case 8:
                fullMonth = "August";
                break;
            case 9:
                fullMonth = "September";
                break;
            case 10:
                fullMonth = "October";
                break;
            case 11:
                fullMonth = "November";
                break;
            case 12:
                fullMonth = "December";
                break;
        }

        return fullMonth;
    }
    
    function SearchMyEvents() {
        var StartDate;
        var EndDate;

        if ($("#myeventslist-txt-startdate").val() == "") {
            StartDate = "1/1/1900";
        } else {
            StartDate = $("#myeventslist-txt-startdate").val();
        }

        if ($("#myeventslist-txt-enddate").val() == "") {
            EndDate = "1/1/1900";
        } else {
            EndDate = $("#myeventslist-txt-enddate").val();
        }
        
        if ((StartDate != "1/1/1900") && (EndDate != "1/1/1900")) {
            if (new Date(StartDate) > new Date(EndDate)) {
                swalert("The start date must come before the end date.", "Attention", "warning", "ok", "", "", "");
                return false;
            }
        } else if ((EndDate != "1/1/1900") && (StartDate == "1/1/1900")) {
            var CurrentDate = new Date();

            StartDate = (parseInt(CurrentDate.getMonth()) + 1) + "/" + CurrentDate.getDate() + "/" + CurrentDate.getFullYear();

            if (new Date(StartDate) > new Date(EndDate)) {
                swalert("The end date must come after the current date.", "Attention", "warning", "ok", "", "", "");
                return false;
            }
        }
              
        if (StartDate != "1/1/1900") {
            StartDate += " 0:00:00";
        }

        if (EndDate != "1/1/1900") {
            EndDate += " 23:59:59";
        }

        GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/MyEventsListWrapper.aspx?ModuleInstanceID=1&StartDate=" + StartDate + "&EndDate=" + EndDate, "myeventslist-pnl-detail", 2, "");
    }

    function RefreshCalendarFilter() {
        if ($("#calendar-pnl-calendarfilter-closed").is(":visible")) {
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + false, "calendar-pnl-calendarfilter-closed", 2);
        } else {
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + true, "calendar-pnl-calendarfilter-open", 2);             
        }
    }
    
    function ToggleCalendarFilter(expanded) {
        if (expanded === undefined) {
            expanded = $("#calendar-pnl-calendarfilter-closed").is(":visible");
        }

        if (expanded === true) {
            var callback = "$("#calendar-pnl-calendarfilter-closed").fadeOut("fast",function() { $("#calendar-pnl-calendarfilter-open").fadeIn("fast");});";
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + true, "calendar-pnl-calendarfilter-open", 3, callback);
        } else {
            var callback = "$("#calendar-pnl-calendarfilter-open").fadeOut("fast",function() { $("#calendar-pnl-calendarfilter-closed").fadeIn("fast");});";
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + false, "calendar-pnl-calendarfilter-closed", 3, callback); 
        }
    }

    function OpenCalendarFilter() {
        OpenDialogOverlay("WindowLargeModal", { LoadType: "U", LoadURL: "http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarFilterNewWrapper.aspx?DomainID=4&ModuleInstanceID=1" });
    }

    function RefreshCategoryFilter() {
        if ($("#calendar-pnl-categoryfilter-closed").is(":visible")) {
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CategoryFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + false, "calendar-pnl-categoryfilter-closed", 2);
        } else {
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CategoryFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + true, "calendar-pnl-categoryfilter-open", 2);             
        }
    }

    function ToggleCategoryFilter(expanded) {
        if (expanded === undefined) {
            expanded = $("#calendar-pnl-categoryfilter-closed").is(":visible");
        }

        if (expanded === true) {
            var callback = "$("#calendar-pnl-categoryfilter-closed").fadeOut("fast",function() { $("#calendar-pnl-categoryfilter-open").fadeIn("fast");});";
            GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CategoryFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + true, "calendar-pnl-categoryfilter-open", 3, callback);
        } else {
             var callback = "$("#calendar-pnl-categoryfilter-open").fadeOut("fast",function() { $("#calendar-pnl-categoryfilter-closed").fadeIn("fast");});";
             GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CategoryFilterListWrapper.aspx?ModuleInstanceID=" + "1" + "&Expanded=" + false, "calendar-pnl-categoryfilter-closed", 3, callback); 
         }
     }

    function OpenCategoryFilter() {
        OpenDialogOverlay("WindowLargeModal", { LoadType: "U", LoadURL: "http://swconsultant.schoolwires.net//site/UserControls/Calendar/CategoryFilterNewWrapper.aspx?DomainID=4&ModuleInstanceID=1" });
    }

    function RemoveCalendarFilter(ModuleInstanceID) {
        $("#calendarfilter-ul-list li[itemid=" + ModuleInstanceID + "]").remove();

        var strCalendarFilter = GetCookie("CalendarFilter");
        strCalendarFilter = strCalendarFilter.replace(ModuleInstanceID + "-", "");

        SetCookie("CalendarFilter", strCalendarFilter, 365);

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        } else {
            $("#calendar").fullCalendar("refetchEvents");
        }
    }

    function AddCategoryFilter(EventCategoryMasterID) {
        $("#categoryfilter-ul-list li[itemid=" + EventCategoryMasterID + "]").remove();

        var strCategoryFilter = GetCookie("CategoryFilter");
        strCategoryFilter = strCategoryFilter + EventCategoryMasterID + "-";

        SetCookie("CategoryFilter", strCategoryFilter, 365);

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        } else {
            $("#calendar").fullCalendar("refetchEvents");
        }
    }

    function UpdateCalendarFilter(id) {
        var strCalendarFilter = GetCookie("CalendarFilter");

        if ($("#calendarfilter-chk-calendar" + id).is(":checked")) {
            strCalendarFilter = strCalendarFilter + id + "-";
        } else {
            strCalendarFilter = strCalendarFilter.replace(id + "-", "");
        }

        SetCookie("CalendarFilter", strCalendarFilter, 365);
    }  

    function LoadCalendarChannelList() {
        GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarChannelListWrapper.aspx?DomainID=" + $("#calendarfilter-hid-siteid").val(), "calendarfilter-pnl-channellist", 2);
        LoadCalendarSearchList();
    }  

    function SelectFilteredCalendars() {
        var arrValues = GetCookie("CalendarFilter").split("-");
        
        $.each(arrValues, function() {
            $("#calendarfilter-chk-calendar" + this).attr("checked", true);
        });
    }   

    function LoadCalendarSearchList() {
        var DomainID = $("#calendarfilter-hid-channelid").val();

        if (DomainID == 0) {
            DomainID = $("#calendarfilter-hid-siteid").val();
        }

        GetContent("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarSearchListWrapper.aspx?DomainID=" + DomainID + "&ModuleInstanceID=" + "1" + "&SearchFor=" + $("#calendarfilternew-txt-search").val(), "calendarfilter-pnl-results", 2, "");
    } 

    function CloseCalendarFilter() {
        CloseDialogOverlay("WindowLargeModal");

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        } else {
            $("#calendar").fullCalendar("refetchEvents");
        }

        RefreshCalendarFilter();
    }

    function CloseCategoryFilter() {
        CloseDialogOverlay("WindowLargeModal");

        if (!$("#calendarlist-pnl-specialview").hasClass("ui-helper-hidden")) {
            LoadEventListView(1, $("#calendar").fullCalendar("getmonth"), $("#calendar").fullCalendar("getyear"));
        } else {
            $("#calendar").fullCalendar("refetchEvents");
        }

        RefreshCategoryFilter();
    }

    function SelectFilteredCategories() {
        var arrValues = GetCookie("CategoryFilter").split("-");

        $.each(arrValues, function() {
            $("#categoryfilter-chk-category" + this).attr("checked", false);
        });
    }

    function UpdateCategoryFilter(id) {
        var strCategoryFilter = GetCookie("CategoryFilter");

        if ($("#categoryfilter-chk-category" + id).is(":checked")) {
            strCategoryFilter = strCategoryFilter.replace(id + "-", "");
        } else {
            strCategoryFilter = strCategoryFilter + id + "-";
        }

        SetCookie("CategoryFilter", strCategoryFilter, 365);
    }

    function toggleFilters() {
        if ($("#calendar-filter-wrapper").hasClass("open")) {
            $("#calendar-filter-wrapper").removeClass("open").addClass("closed");
            SlideUpControl("calendar-filter-wrapper");
            $("#calendar-pnl-filter-toggle-chevron").attr("src", "http://swconsultant.schoolwires.net/Static/V2_11_01//GlobalAssets/Images/Icons/16/toggle-closed.png");
        } else {
            $("#calendar-filter-wrapper").removeClass("closed").addClass("open");
            SlideDownControl("calendar-filter-wrapper");
            $("#calendar-pnl-filter-toggle-chevron").attr("src", "http://swconsultant.schoolwires.net/Static/V2_11_01//GlobalAssets/Images/Icons/16/toggle-open.png");
        }
    }

    function UpdateCalendarFollow() {
        var data = "{ModuleInstanceID: 1}";
        var success = "ShowNotification("Success! You are now following this calendar in MyView.");";
        //var failure = "CallControllerFailure(result[0].errormessage);";
        var failure = "ShowNotification(result[0].errormessage);";
        
        CallController("http://swconsultant.schoolwires.net//site/UserControls/Calendar/CalendarController.aspx/UpdateCalendarFollow", data, success, failure);
    }
</script>

<div class="ui-widget app calendar last-app" style="overflow: hidden;">
<div class="ui-widget-header ui-helper-hidden">
    
</div>
	
<div class="ui-widget-detail" style="overflow: hidden;">
<div id="calendar-pnl-calendarcontainer">

    <div id="calendar-pnl-toolbar">
        <div id="calendar-pnl-filter-toggle"><a onclick="toggleFilters();" tabindex="0"><span><img id="calendar-pnl-filter-toggle-chevron" src="http://swconsultant.schoolwires.net/Static/V2_11_01//GlobalAssets/Images/Icons/16/toggle-closed.png" width="10" height="10" alt="Close" style="display: inline-block; width: 100%; max-width: 10px; height: auto; max-height: 10px;">Customize Calendar View</span></a></div>

        <div id="calendar-filter-wrapper" class="ui-helper-hidden closed">
        

        <div id="calendarfilter-calendar-wrapper" class="calendarfilter-wrapper">
            <div class="ui-lbl-calendarfilter">
                Calendars <a onclick="ToggleCalendarFilter();" tabindex="0" class="calendar-filter-btn">&nbsp;</a>
            </div>
            <div id="calendar-pnl-calendarfilter-open" class="calendarfilter-container open ui-helper-hidden"></div>
		    <div id="calendar-pnl-calendarfilter-closed" class="calendarfilter-container closed">
		        <ul id="calendarfilter-ul-list" class="filter-display"><li itemid="1" style="color: rgb(0, 0, 0);"><span style="color: rgb(0, 0, 0);">District Calendar</span></li>
</ul>
<script type="text/javascript">
    $(document).ready(function() {
        // ADA click events
        $(".ui-calendarfilter-removefilter").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $(".ui-calendarfilter-addremove").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $(".ui-btn-toolbar").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });
    });
</script>
		    </div>
        </div>
        
        <div id="calendarfilter-category-wrapper" class="calendarfilter-wrapper">
            <div class="ui-lbl-calendarfilter">
                Categories <a onclick="ToggleCategoryFilter();" tabindex="0" class="category-filter-btn">&nbsp;</a>
            </div>
            <div id="calendar-pnl-categoryfilter-open" class="calendarfilter-container open ui-helper-hidden"></div>
            <div id="calendar-pnl-categoryfilter-closed" class="calendarfilter-container closed category">
                <script type="text/javascript">$(document).ready(function() {$(".filter-display li").each(function() {adjustColour($(this));});});</script><ul class="filter-display inline"><li style="color: rgb(0, 0, 0); background: rgb(225, 225, 225);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-0" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-0" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(225, 225, 225);">Unassigned</div></li><li style="color: rgb(0, 0, 0); background: rgb(168, 187, 239);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-10" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-10" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(168, 187, 239);">Academic - Quiz</div></li>
<li style="color: rgb(0, 0, 0); background: rgb(24, 130, 237);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-1" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-1" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(24, 130, 237);">Academic - Test</div></li>
<li style="color: rgb(0, 0, 0); background: rgb(237, 237, 0);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-4" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-4" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(237, 237, 0);">Assembly</div></li>
<li style="color: rgb(255, 255, 255); background: rgb(0, 160, 0);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-3" position="bottom" style="color: rgb(255, 255, 255);">&nbsp;</a><div id="categoryhover-3" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(255, 255, 255); background: rgb(0, 160, 0);">Athletic Event</div></li>
<li style="color: rgb(0, 0, 0); background: rgb(150, 220, 36);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-11" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-11" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(150, 220, 36);">Athletic Practice</div></li>
<li style="color: rgb(255, 255, 255); background: rgb(239, 0, 120);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-12" position="bottom" style="color: rgb(255, 255, 255);">&nbsp;</a><div id="categoryhover-12" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(255, 255, 255); background: rgb(239, 0, 120);">Holiday</div></li>
<li style="color: rgb(255, 255, 255); background: rgb(0, 40, 146);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-9" position="bottom" style="color: rgb(255, 255, 255);">&nbsp;</a><div id="categoryhover-9" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(255, 255, 255); background: rgb(0, 40, 146);">Homework</div></li>
<li style="color: rgb(255, 255, 255); background: rgb(239, 0, 27);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-8" position="bottom" style="color: rgb(255, 255, 255);">&nbsp;</a><div id="categoryhover-8" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(255, 255, 255); background: rgb(239, 0, 27);">Musical or Art Event</div></li>
<li style="color: rgb(0, 0, 0); background: rgb(238, 104, 244);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-7" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-7" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(238, 104, 244);">Parent Teacher Conference</div></li>
<li style="color: rgb(255, 255, 255); background: rgb(103, 22, 239);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-6" position="bottom" style="color: rgb(255, 255, 255);">&nbsp;</a><div id="categoryhover-6" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(255, 255, 255); background: rgb(103, 22, 239);">PTO/PTA Meeting</div></li>
<li style="color: rgb(255, 255, 255); background: rgb(237, 119, 0);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-5" position="bottom" style="color: rgb(255, 255, 255);">&nbsp;</a><div id="categoryhover-5" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(255, 255, 255); background: rgb(237, 119, 0);">School Board Meeting</div></li>
<li style="color: rgb(0, 0, 0); background: rgb(167, 121, 245);"><a class="ui-detail-overlay calendarfilter-detailoverlaybtn" actiontype="hover" actionclass="active" targetdivid="categoryhover-2" position="bottom" style="color: rgb(0, 0, 0);">&nbsp;</a><div id="categoryhover-2" class="calendarfilter-detailoverlaypnl ui-helper-hidden ui-detail-overlay-panel" style="color: rgb(0, 0, 0); background: rgb(167, 121, 245);">Staff Meeting</div></li>
</ul>


<script type="text/javascript">
    $(document).ready(function() {
        
        $(".ui-detail-overlay").detailoverlay();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        // ADA click events
        $(".ui-calendarfilter-addremove").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });

        $(".ui-btn-toolbar").keydown(function(e) {
            e.stopImmediatePropagation();

            if (e.keyCode == 13) {
                $(this).click();
            }
        });
    });
</script>
            </div>
        </div>

        </div>
        
        
		
		<div id="calendar-pnl-buttons">
            <div id="calendar-pnl-wrapper">
                <div id="calendar-pnl-title">
                    <h1>July 2015</h1>
                </div>
                <div id="calendar-pnl-buttons-top">
			        <div id="calendar-pnl-more-panel" class="ui-btn-menu-panel"> 
				        <ul>
                            
					        <!--<li><a id="calendar-btn-myevents" tabindex="0"><span>View My Events</span></a></li>-->
					        <li><a id="ui-btn-calendarlist-export" onclick="LoadEventExportByDateRange();" title="Export events by date range."><span>Export Events</span></a></li>
				        </ul>
			        </div>
				
                    <a id="calendar-btn-print" onclick="LoadEventPrint();" title="Print the selected calendar view." class="ui-btn-toolbar icon" tabindex="0">
                        <span><div class="ui-btn-toolbar-icon print">&nbsp;</div>&nbsp;</span>
                    </a>

                    <!--
			        <a id="calendar-btn-more" href="#calendar-pnl-more-panel" class="ui-btn-menu"><span>More<span class="ui-chevron"></span></span></a>
                    -->

                    <a id="calendar-btn-myevents" class="ui-btn-toolbar icon" tabindex="0"><span><div class="ui-btn-toolbar-icon star">&nbsp;</div>My Events</span></a>
                    <a id="A1" onclick="LoadEventExportByDateRange();" title="Export events by date range." class="ui-btn-toolbar icon" tabindex="0">
                        <span><div class="ui-btn-toolbar-icon export">&nbsp;</div>Export</span>
                    </a>

                    

			        <!--

<script type="text/javascript">
    $(document).ready(function() {
        $("a.ui-btn-menu").menubutton();
    });
</script>-->
                    
                    <div class="app-level-social-ical"><a id="calendar-btn-icalfed" tabindex="0" class="ui-btn-toolbar ical" href="http://swconsultant.schoolwires.net//site/Default.aspx?PageID=2&amp;PageType=20&amp;DomainID=4&amp;ModuleInstanceID=1" title="iCal Feed Instructions"><span>iCal Feed Instructions</span></a></div>
                </div>
            </div>
		</div>
            
        <div id="calendar-pnl-title-container">
            <div id="calendar-pnl-buttons-bottom">
                <a id="calendar-btn-change-today" onclick="GoToToday()" class="ui-btn-toolbar icon" tabindex="0">
                    <span>Today</span>
                </a>
           
			    <span class="ui-toggle" id="calendarview-toggle">
				    <span class="inner">
					    <a id="calendar-btn-change-day" onclick="ChangeView("basicDay")" class="ui-btn-toggle first day" tabindex="0">
                            <span><div class="ui-btn-toggle-icon day">&nbsp;</div>Day</span>
                        </a>
                        <a id="calendar-btn-change-week" onclick="ChangeView("basicWeek")" class="ui-btn-toggle week" tabindex="0">
                            <span><div class="ui-btn-toggle-icon week">&nbsp;</div>Week</span>
                        </a>
                        <a id="calendar-btn-change-month" onclick="ChangeView("month")" class="ui-btn-toggle month active" tabindex="0">
                            <span><div class="ui-btn-toggle-icon month">&nbsp;</div>Month</span>
                        </a>
                        <a id="ui-btn-calendarlist-list" onclick="LoadEventListView(1,$("#calendar").fullCalendar("getmonth"),$("#calendar").fullCalendar("getyear"));" title="View events in a list format." class="ui-btn-toggle last list" tabindex="0">
                            <span><div class="ui-btn-toggle-icon list">&nbsp;</div>List</span>
                        </a>
				    </span>
			    </span>
            

                <div id="calendar-pnl-dateselect">
                    <a id="ui-btn-calendarlist-back" onclick="GoToPrevious()" title="Go back." class="ui-btn-toolbar symbol" tabindex="0"><span><b>‹</b></span></a>
			        <label for="calendarlist-month" class="ui-calendar-label hidden">Change Month</label>
                    <select id="calendarlist-month" onchange="ChangeMonth()">
				        <option value="1">January</option>
				        <option value="2">February</option>
				        <option value="3">March</option>
				        <option value="4">April</option>
				        <option value="5">May</option>
				        <option value="6">June</option>
				        <option value="7">July</option>
				        <option value="8">August</option>
				        <option value="9">September</option>
				        <option value="10">October</option>
				        <option value="11">November</option>
				        <option value="12">December</option>
			        </select>
			
			        <label for="calendarlist-year" class="ui-calendar-label hidden">Change Year</label> 
			        <select id="calendarlist-year" onchange="ChangeYear()">
			        <!-- filled via javascript -->
			        <option value="2014">2014</option><option selected="selected" value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option></select>

			        <a id="ui-btn-calendarlist-forward" onclick="GoToNext()" title="Go forward." class="ui-btn-toolbar symbol" tabindex="0"><span><b>›</b></span></a>
                </div>
            </div>

        </div>
    </div>
    
    <table id="calendar-tbl-calendars" style="position: relative;">
        <caption>Calendar</caption>
        <tbody><tr>
        <td id="calendar-tbl-calendars-col1">
            <div id="calendar-pnl-smcalendar">
               <div id="small-calendar-1" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi" style="display: block;"><div class="ui-datepicker-group"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">Jul</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class="  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default ui-state-active" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class="  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default ui-state-highlight" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="6" data-year="2015"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-group"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-title"><span class="ui-datepicker-month">Aug</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="7" data-year="2015"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-group"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-title"><span class="ui-datepicker-month">Sep</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">5</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">12</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">19</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">26</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div></div></div>
            </div>
        </td>
        <td style="width: 100%;" id="calendar-tbl-calendars-col2">
            <div id="calendar" style="width: 100%" class="fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-left"></td><td class="fc-header-center"><span class="fc-header-title"><h2>July 2015</h2></span></td><td class="fc-header-right"></td></tr></tbody></table><div class="fc-content" style="position: relative; min-height: 1px;"><div class="fc-view fc-view-month fc-grid" style="position: relative; min-height: 1px;" unselectable="on"><div style="position:absolute;z-index:8;top:0;left:0"><div class="fc-event fc-event-hori fc-event-start fc-event-end ui-helper-hidden" style="position: absolute; z-index: 8; left: 116px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 53px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Raystown Boating</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end ui-helper-hidden" style="position: absolute; z-index: 8; left: 219px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 53px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Chest Day</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 528px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 53px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">TGIF Lunch</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 116px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 155px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Raystown Boating</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 219px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 155px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Chest Day</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 528px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 155px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">TGIF Lunch</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 116px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 257px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Raystown Boating</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 219px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 257px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Chest Day</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 528px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 257px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">TGIF Lunch</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 116px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 359px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Raystown Boating</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 219px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 359px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Chest Day</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 528px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 359px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">TGIF Lunch</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 116px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 461px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Raystown Boating</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 219px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 461px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">Chest Day</span></div></div><div class="fc-event fc-event-hori fc-event-start fc-event-end" style="position: absolute; z-index: 8; left: 528px; border-color: rgb(225, 225, 225); color: rgb(0, 0, 0); width: 81px; top: 461px; background-color: rgb(225, 225, 225);" tabindex="0"><div class="fc-event-inner" style="color: rgb(0, 0, 0);"><span class="fc-event-time" style="color: rgb(0, 0, 0);">8:00am</span><span class="fc-event-title ellipsis" style="color: rgb(0, 0, 0);">TGIF Lunch</span></div></div></div><table class="fc-border-separate" style="width:100%" cellspacing="0"><thead><tr class="fc-first fc-last"><th class="fc-day-header fc-sun fc-widget-header fc-first" style="width: 85px;">Sun</th><th class="fc-day-header fc-mon fc-widget-header" style="width: 85px;">Mon</th><th class="fc-day-header fc-tue fc-widget-header" style="width: 85px;">Tue</th><th class="fc-day-header fc-wed fc-widget-header" style="width: 85px;">Wed</th><th class="fc-day-header fc-thu fc-widget-header" style="width: 85px;">Thu</th><th class="fc-day-header fc-fri fc-widget-header" style="width: 85px;">Fri</th><th class="fc-day-header fc-sat fc-widget-header fc-last">Sat</th></tr></thead><tbody><tr class="fc-week fc-first"><td class="fc-day fc-sun fc-widget-content fc-other-month fc-first" data-date="2015-06-28"><div style="min-height: 84px;"><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content fc-other-month" data-date="2015-06-29"><div><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-other-month" data-date="2015-06-30"><div><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content" data-date="2015-07-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content" data-date="2015-07-02"><div><div class="fc-day-number">2</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content" data-date="2015-07-03"><div><div class="fc-day-number">3</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-last" data-date="2015-07-04"><div><div class="fc-day-number">4</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-first" data-date="2015-07-05"><div style="min-height: 84px;"><div class="fc-day-number">5</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content" data-date="2015-07-06"><div><div class="fc-day-number">6</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content" data-date="2015-07-07"><div><div class="fc-day-number">7</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content" data-date="2015-07-08"><div><div class="fc-day-number">8</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content" data-date="2015-07-09"><div><div class="fc-day-number">9</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content" data-date="2015-07-10"><div><div class="fc-day-number">10</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-last" data-date="2015-07-11"><div><div class="fc-day-number">11</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-first" data-date="2015-07-12"><div style="min-height: 84px;"><div class="fc-day-number">12</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content" data-date="2015-07-13"><div><div class="fc-day-number">13</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content" data-date="2015-07-14"><div><div class="fc-day-number">14</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content" data-date="2015-07-15"><div><div class="fc-day-number">15</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content" data-date="2015-07-16"><div><div class="fc-day-number">16</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content" data-date="2015-07-17"><div><div class="fc-day-number">17</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-last" data-date="2015-07-18"><div><div class="fc-day-number">18</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td></tr><tr class="fc-week"><td class="fc-day fc-sun fc-widget-content fc-first" data-date="2015-07-19"><div style="min-height: 84px;"><div class="fc-day-number">19</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content" data-date="2015-07-20"><div><div class="fc-day-number">20</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content" data-date="2015-07-21"><div><div class="fc-day-number">21</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content" data-date="2015-07-22"><div><div class="fc-day-number">22</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content" data-date="2015-07-23"><div><div class="fc-day-number">23</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content" data-date="2015-07-24"><div><div class="fc-day-number">24</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-last" data-date="2015-07-25"><div><div class="fc-day-number">25</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td></tr><tr class="fc-week fc-last"><td class="fc-day fc-sun fc-widget-content fc-first" data-date="2015-07-26"><div style="min-height: 84px;"><div class="fc-day-number">26</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-mon fc-widget-content" data-date="2015-07-27"><div><div class="fc-day-number">27</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-tue fc-widget-content fc-today fc-state-highlight" data-date="2015-07-28"><div><div class="fc-day-number">28</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-wed fc-widget-content" data-date="2015-07-29"><div><div class="fc-day-number">29</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-thu fc-widget-content" data-date="2015-07-30"><div><div class="fc-day-number">30</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-fri fc-widget-content" data-date="2015-07-31"><div><div class="fc-day-number">31</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td><td class="fc-day fc-sat fc-widget-content fc-other-month fc-last" data-date="2015-08-01"><div><div class="fc-day-number">1</div><div class="fc-day-content"><div style="position: relative; height: 31px;">&nbsp;</div></div></div></td></tr></tbody></table></div></div></div>
            <div id="calendarlist-pnl-specialview" style="width: 100%" class="ui-helper-hidden loaded">
<div id="event-pnl-listview">

    <script type="text/javascript">
        $(document).ready(function() {
            $(".eventlist-item").bind("mouseenter", function() {
                $this = $(this);
                ShowEventOverlay(this, $this.attr("eventdateid"), $this.attr("eventid"), $this.attr("recurringevent"), $this.attr("title"), $this.attr("nativeevent"));
            });

            $("tr[id^="eventlist-ui-article"]").each(function () {
                adjustColour($(this).find("td.ui-cell-detail"));
                $(this).find("h1 a").css({ "color": $(this).find("td.ui-cell-detail").css("color") });
            });
        });
    </script>
    <div id="eventlist-pnl-toggledetail">
        <input id="eventlist-chk-toggledetail" onclick="ToggleEventListDetail();" type="checkbox" checked="checked">
        <label for="eventlist-chk-toggledetail" class="ui-lbl-inline">Show Event Descriptions</label>
    </div>
    <table class="ui-table">
        <caption>Event List</caption>

        <tbody><tr id="eventlist-ui-article3">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="503" eventid="3" recurringevent="True" title="TGIF Lunch" nativeevent="1" onclick="LoadEventDetail(503);" style="color: rgb(0, 0, 0);">
                    7/3/2015 8:00 AM - 9:00 AM                                         
                    TGIF Lunch
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article1">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="56" eventid="1" recurringevent="True" title="Raystown Boating" nativeevent="1" onclick="LoadEventDetail(56);" style="color: rgb(0, 0, 0);">
                    7/6/2015 8:00 AM - 9:00 AM                                         
                    Raystown Boating
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">this is the description for Raystown Boating.</span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article4">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="295" eventid="4" recurringevent="True" title="Chest Day" nativeevent="1" onclick="LoadEventDetail(295);" style="color: rgb(0, 0, 0);">
                    7/7/2015 8:00 AM - 9:00 AM                                         
                    Chest Day
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article3">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="504" eventid="3" recurringevent="True" title="TGIF Lunch" nativeevent="1" onclick="LoadEventDetail(504);" style="color: rgb(0, 0, 0);">
                    7/10/2015 8:00 AM - 9:00 AM                                         
                    TGIF Lunch
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article1">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="57" eventid="1" recurringevent="True" title="Raystown Boating" nativeevent="1" onclick="LoadEventDetail(57);" style="color: rgb(0, 0, 0);">
                    7/13/2015 8:00 AM - 9:00 AM                                         
                    Raystown Boating
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">this is the description for Raystown Boating.</span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article4">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="296" eventid="4" recurringevent="True" title="Chest Day" nativeevent="1" onclick="LoadEventDetail(296);" style="color: rgb(0, 0, 0);">
                    7/14/2015 8:00 AM - 9:00 AM                                         
                    Chest Day
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article3">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="505" eventid="3" recurringevent="True" title="TGIF Lunch" nativeevent="1" onclick="LoadEventDetail(505);" style="color: rgb(0, 0, 0);">
                    7/17/2015 8:00 AM - 9:00 AM                                         
                    TGIF Lunch
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article1">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="58" eventid="1" recurringevent="True" title="Raystown Boating" nativeevent="1" onclick="LoadEventDetail(58);" style="color: rgb(0, 0, 0);">
                    7/20/2015 8:00 AM - 9:00 AM                                         
                    Raystown Boating
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">this is the description for Raystown Boating.</span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article4">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="297" eventid="4" recurringevent="True" title="Chest Day" nativeevent="1" onclick="LoadEventDetail(297);" style="color: rgb(0, 0, 0);">
                    7/21/2015 8:00 AM - 9:00 AM                                         
                    Chest Day
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article3">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="506" eventid="3" recurringevent="True" title="TGIF Lunch" nativeevent="1" onclick="LoadEventDetail(506);" style="color: rgb(0, 0, 0);">
                    7/24/2015 8:00 AM - 9:00 AM                                         
                    TGIF Lunch
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article1">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="59" eventid="1" recurringevent="True" title="Raystown Boating" nativeevent="1" onclick="LoadEventDetail(59);" style="color: rgb(0, 0, 0);">
                    7/27/2015 8:00 AM - 9:00 AM                                         
                    Raystown Boating
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">this is the description for Raystown Boating.</span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article4">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="298" eventid="4" recurringevent="True" title="Chest Day" nativeevent="1" onclick="LoadEventDetail(298);" style="color: rgb(0, 0, 0);">
                    7/28/2015 8:00 AM - 9:00 AM                                         
                    Chest Day
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>

        <tr id="eventlist-ui-article3">
            
            <td class="ui-cell-detail" style="color: rgb(0, 0, 0);">
                  
                <h1 style="color: rgb(0, 0, 0);"><a class="eventlist-item" eventdateid="507" eventid="3" recurringevent="True" title="TGIF Lunch" nativeevent="1" onclick="LoadEventDetail(507);" style="color: rgb(0, 0, 0);">
                    7/31/2015 8:00 AM - 9:00 AM                                         
                    TGIF Lunch
                </a></h1>
                
                <div class="ui-eventlistview-detail" style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);">Location: Unspecified</span><br style="color: rgb(0, 0, 0);">
                    <span style="color: rgb(0, 0, 0);"></span>
                </div>
            </td>
        </tr>
</tbody></table>



<div class="ui-no-records-message">

	

	<div class="clear"></div>
</div>
</div>
</div>
        </td>
        </tr>
    </tbody></table>
    
    
    
</div>
</div>

<div class="ui-widget-footer">
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div><div class="clear"></div></div></div>';

$breadcrumbs = '<ul class="ui-breadcrumbs">
<li class="ui-breadcrumb-first"><a href="/Domain/4"><span>Home</span></a></li>

<li><a href="/domain/170"><span>District</span></a></li>

<li class="ui-breadcrumb-last"><a href="/Domain/173"><span>Adam</span></a></li>

</ul>';

$channelBarReplace = str_replace('[$ChannelListNavigation props="DisplayType:Text;SectionMax:<SWCtrl controlname="Custom" props="Name:sectionMax" />;DirectoryType:6;DisplayHomeButton:<SWCtrl controlname="Custom" props="Name:showHomeChannel" />;DisplayCalendarButton:<SWCtrl controlname="Custom" props="Name:showCalendarChannel" />;HideSingleSectionDD:<SWCtrl controlname="Custom" props="Name:hideSingleSectionDD" />"$]', $channelBar, $spCode);
$breadCrumbReplace = str_replace('[$Breadcrumb props="MaxLevels:3"$]', $breadcrumbs, $channelBarReplace);
$contentRegionReplace = str_replace('[$ContentLayoutPlaceholder$]', $contentRegion, $breadCrumbReplace);

$subPage = $contentRegionReplace;

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
print $subPage;
print $swFooter;

include("includes/end-page.html");

?>
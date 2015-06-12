<?php
include("includes/start-page.html");

$hpCode = file_get_contents('includes/hp.html');

$channelBar = '<div id="sw-channel-list-container">
<ul id="channel-navigation" class="sw-channel-list" role="menubar">
<li class="sw-channel-item active first" role="menuitem" style="z-index: 7000;"><a href="/Page/97"><span class="icon-font"></span></a></li>
<li class="sw-channel-item" role="menuitem" aria-haspopup="true" style="z-index: 6998;" aria-hidden="true">
<a href="/domain/71">
<span>About Us</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/78" tabindex="-1"><span>Welcome</span></a></li>
<li class="" role="menuitem"><a href="/domain/79" tabindex="-1"><span>Our Mission</span></a></li>
<li class="" role="menuitem"><a href="/domain/80" tabindex="-1"><span>Contact Us</span></a></li>
</ul>
</li><li class="sw-channel-item " role="menuitem" aria-haspopup="true" style="z-index: 6996;">
<a href="/domain/186">
<span>Classrooms</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/186" tabindex="-1"><span>Section One</span></a></li>
<li class="" role="menuitem"><a href="/domain/188" tabindex="-1"><span>Section Two</span></a></li>
<li class="" role="menuitem"><a href="/domain/189" tabindex="-1"><span>Section Three</span></a></li>
<li class="" role="menuitem"><a href="/domain/190" tabindex="-1"><span>Section Four</span></a></li>
</ul>
</li><li class="sw-channel-item " role="menuitem" aria-haspopup="true" style="z-index: 6994;">
<a href="/domain/187">
<span>Academics</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/187" tabindex="-1"><span>Section One</span></a></li>
<li class="" role="menuitem"><a href="/domain/191" tabindex="-1"><span>Section Two</span></a></li>
<li class="" role="menuitem"><a href="/domain/192" tabindex="-1"><span>Section Three</span></a></li>
</ul>
</li><li class="sw-channel-item " role="menuitem" style="z-index: 6992;">
<a href="/domain/212">
<span>Programs</span></a>
</li><li class="sw-channel-item " role="menuitem" style="z-index: 6990;">
<a href="/domain/213">
<span>My View</span></a>
</li><li class="sw-channel-item  last" role="menuitem" style="z-index: 6988;"><a href="/Page/98"><span>Calendar</span></a></li>
</ul><div class="clear"></div>
</div>';

$hpCodeRP = str_replace("[channelbar]", $channelBar, $hpCode);


print $hpCodeRP;

include("includes/end-page.html");

?>
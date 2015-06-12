<?php
include("includes/start-page.html");

$hpCode = file_get_contents('includes/template/html/hp.html');

$channelBar = '<div id="sw-channel-list-container">
<ul id="channel-navigation" class="sw-channel-list" role="menubar">
<li class="sw-channel-item  first" role="menuitem" aria-haspopup="true" style="z-index: 7000;">
<a href="/domain/104">
<span>About Us</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/104" tabindex="-1"><span>Contact</span></a></li>
<li class="" role="menuitem"><a href="/domain/105" tabindex="-1"><span>Our Mission</span></a></li>
<li class="" role="menuitem"><a href="/domain/142" tabindex="-1"><span>Staff</span></a></li>
</ul>
</li><li class="sw-channel-item " role="menuitem" aria-haspopup="true" style="z-index: 6998;">
<a href="/domain/96">
<span>Digital Learning Day</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/138" tabindex="-1"><span>Section One</span></a></li>
<li class="" role="menuitem"><a href="/domain/139" tabindex="-1"><span>Section Two</span></a></li>
</ul>
</li><li class="sw-channel-item " role="menuitem" style="z-index: 6996;">
<a href="/domain/208">
<span>Starting A Charter</span></a>
</li><li class="sw-channel-item  last" role="menuitem" aria-haspopup="true" style="z-index: 6994;">
<a href="/domain/145">
<span>New Charters</span></a>
<ul class="sw-channel-dropdown" aria-hidden="true" role="menu" style="display: none;">
<li class="" role="menuitem"><a href="/domain/146" tabindex="-1"><span>test section</span></a></li>
</ul>
</li></ul><div class="clear"></div>
</div>';

$hpCodeRP = str_replace("[channelbar]", $channelBar, $hpCode);


print $hpCodeRP;

include("includes/end-page.html");

?>
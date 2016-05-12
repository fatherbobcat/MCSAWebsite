<?php
echo("<div id=\"nav\">
<img id=\"back\" src=\"theme/chineselion.jpg\" alt=\"chineselionbackground\"/>
<a href=\"index.php\"><img id=\"navh\" onmouseover=\"highlight();\" src=\"theme/home.jpg\" alt=\"home\"/></a>
<a href=\"about.php\"><img id=\"nava\" src=\"theme/about.jpg\" alt=\"about\"/></a>
<a href=\"events.php\"><img id=\"navev\" src=\"theme/events.jpg\" alt=\"events\"/></a>
<a href=\"media.php\"><img id=\"navm\" src=\"theme/media.jpg\" alt=\"media\"/></a>
<a href=\"eboard.php\"><img id=\"naveb\" src=\"theme/eboard.jpg\" alt=\"eboard\"/></a>
<a href=\"contact.php\"><img id=\"navc\" src=\"theme/contact.jpg\" alt=\"contact\"/></a>
<img id=\"login\" src=\"theme/login.jpg\" alt=\"login\"/>
<img id=\"base\" src=\"theme/base.jpg\" alt=\"base\"/>

<script type=\"text/javascript\">
function highlight(){
$(\"#navh\").remove();
$(\"#nav\").append('<img id=\"navh\" onmouseout=\"revert();\" src=\"theme/home1.jpg\" alt=\"home\"/>')
}
function revert(){
$(\"#navh\").remove();
$(\"#nav\").append('<img id=\"navh\" onmouseover=\"highlight();\" src=\"theme/home.jpg\" alt=\"home\"/>')
}
</script>

");
?>
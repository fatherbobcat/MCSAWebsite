
<img id="back" src="theme/chineselion.jpg" alt="chineselionbackground"/>

<div id="nav">
<a href="index.php"><img class="nav" id="home" onmouseover="highlight('home');" src="theme/home.jpg" alt="home"/></a>
<a href="about.php"><img class="nav" id="about" onmouseover="highlight();" src="theme/about.jpg" alt="about"/></a>
<a href="events.php"><img class="nav" id="events" onmouseover="highlight();" src="theme/events.jpg" alt="events"/></a>
<a href="media.php"><img class="nav" id="media" onmouseover="highlight();" src="theme/media.jpg" alt="media"/></a>
<a href="eboard.php"><img class="nav" id="eboard" onmouseover="highlight();" src="theme/eboard.jpg" alt="eboard"/></a>
<a href="contact.php"><img class="nav" id="contact" onmouseover="highlight();" src="theme/contact.jpg" alt="contact"/></a>
</div>

<img id="login" src="theme/login.jpg" onmouseover="highlight();" alt="login"/>

<script type="text/javascript">
function highlight(page){
$("#"+page).remove();
$("#nav").append('<a href="index.php"><img class="nav" id="'+page+'" onmouseout="revert('+"'"+page+"'"+');" src="theme/'+page+"1"+'.jpg" alt="'+page+'"/></a>')
}
function revert(page){
$("#"+page).remove();
$("#nav").append('<a href="index.php"><img class="nav" id="home" onmouseover="highlight('+"'"+page+"'"+');" src="theme/'+page+'.jpg" alt="home"/></a>')
}
</script>


<div class="fixed-nav-bar">
    <div class="logo"><span>Arsenal</span>Front</div>
    <input type="checkbox" id="menuButton" />
    <div id="mainListDiv" class="main_list">
        <ul class="navlinks">
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
    </span>


<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
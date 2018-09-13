// Countdown Timer
// ***************

// Set the date we're counting down to
var countDownDate = new Date("Oct 3, 2018 09:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

	// Check to see if element timer is null so that pages without timer do not throw error on console
	var timerElement = document.getElementById("timer");
	// Returns the execution if element is null
    if(!timerElement){
        return;
    }
	
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    // + minutes + "m " + seconds + "s ";

    timerElement.innerHTML = "<div class='counter'><div class='counter-item'><h4>" + days + "</h4>Days</div><div class='counter-item'><h4>" + hours + "</h4>Hrs</div><div class='counter-item'><h4>" + minutes + "</h4>Mins</div><div class='counter-item'><h4>" + seconds + "</h4>secs</div></div>";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {    // If page is scrolled more than 50px
        $('#top').fadeIn("fast");       // Fade in the arrow
    } else {
        $('#top').fadeOut("fast");      // Else fade out the arrow
    }
});
$('#top').click(function() {            // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                   // Scroll to top of body
    }, 500);
});
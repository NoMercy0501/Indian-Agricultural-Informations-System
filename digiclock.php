
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="wp-includes/sticky.css" rel="stylesheet" type="text/css">
<style>
body{
  margin:0;
  padding:0;
  background:#191919;
  width:200px;
  height:33px;
  position:absolute;
  min-width:200px;
}

.clock {
  height:33px;
  position:absolute;
  top:50%;
  left:50%;
  width:200px;
  margin-left:-90px;
  margin-top:-15px;
  text-align:center;
}

.digit {
  width:20px;
  height:33px;
  margin:0 1px;
  position:relative;
  display:inline-block;
}

.digit .segment {
  background:#c00;
  border-radius:1px;
  position:absolute;
  opacity:0.15;
  transition:opacity 0.2s;
  -webkit-transition:opacity 0.2s;
  -ms-transition:opacity 0.2s;
  -moz-transition:opacity 0.2s;
  -o-transition:opacity 0.2s;
}

.digit .segment.on, .separator {
  opacity:1;
  box-shadow:0 0 10px rgba(255,0,0,0.7);
  transition:opacity 0s;
  -webkit-transition:opacity 0s;
  -ms-transition:opacity 0s;
  -moz-transition:opacity 0s;
  -o-transition:opacity 0s;
}

.separator {
  width:4px;
  height:4px;
  background:#c00;
  border-radius:50%;
  display:inline-block;
  position:relative;
  top:-9px;
}

.digit .segment:nth-child(1) {
  top:2px;
  left:4px;
  right:4px;
  height:2px;
}

.digit .segment:nth-child(2) {
  top:4px;
  right:2px;
  width:2px;
  height:15px;
  height:calc(50% - 5px);
}

.digit .segment:nth-child(3) {
  bottom:4px;
  right:2px;
  width:2px;
  height:15px;
  height:calc(50% - 5px);
}

.digit .segment:nth-child(4) {
  bottom:2px;
  right:4px;
  height:2px;
  left:4px;
}

.digit .segment:nth-child(5) {
  bottom:4px;
  left:2px;
  width:2px;
  height:15px;
  height:calc(50% - 5px);
}

.digit .segment:nth-child(6) {
  top:4px;
  left:2px;
  width:2px;
  height:15px;
  height:calc(50% - 5px);
}

.digit .segment:nth-child(7) {
  bottom:19px;
  bottom:calc(50% - 1px);
  right:4px;
  left:4px;
  height:2px;
}
</style>
<div class="clock">
  <div class="digit hours">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="digit hours">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="separator"></div>

  <div class="digit minutes">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="digit minutes">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="separator"></div>

  <div class="digit seconds">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>

  <div class="digit seconds">
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
    <div class="segment"></div>
  </div>
</div>
<script>
var digitSegments = [
    [1,2,3,4,5,6],
    [2,3],
    [1,2,7,5,4],
    [1,2,7,3,4],
    [6,7,2,3],
    [1,6,7,3,4],
    [1,6,5,4,3,7],
    [1,2,3], 
    [1,2,3,4,5,6,7],
    [1,2,7,3,6]
]

document.addEventListener('DOMContentLoaded', function() {
  var _hours = document.querySelectorAll('.hours');
  var _minutes = document.querySelectorAll('.minutes');
  var _seconds = document.querySelectorAll('.seconds');
  
  setInterval(function() {
    var date = new Date();
    var hours = date.getHours(), minutes = date.getMinutes(), seconds = date.getSeconds();  
    
    setNumber(_hours[0], Math.floor(hours/10), 1);
    setNumber(_hours[1], hours%10, 1);

    setNumber(_minutes[0], Math.floor(minutes/10), 1);
    setNumber(_minutes[1], minutes%10, 1);

    setNumber(_seconds[0], Math.floor(seconds/10), 1);
    setNumber(_seconds[1], seconds%10, 1);
  }, 1000);
});

var setNumber = function(digit, number, on) {
  var segments = digit.querySelectorAll('.segment');
  var current = parseInt(digit.getAttribute('data-value'));

  // only switch if number has changed or wasn't set
  if (!isNaN(current) && current != number) {
    // unset previous number
    digitSegments[current].forEach(function(digitSegment, index) {
      setTimeout(function() {
        segments[digitSegment-1].classList.remove('on');
      }, index*45)
    });
  }
  
  if (isNaN(current) || current != number) {
    // set new number after
    setTimeout(function() {
      digitSegments[number].forEach(function(digitSegment, index) {
        setTimeout(function() {
          segments[digitSegment-1].classList.add('on');
        }, index*45)
      });
    }, 250);
    digit.setAttribute('data-value', number);
  }
}

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>

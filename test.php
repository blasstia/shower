<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
function getDate() {  
    var today = new Date();  
    var date = today.getFullYear() + "-" + twoDigits(today.getMonth() + 1) + "-" + twoDigits(today.getDate()) + " ";  
    var week = " 星期" + "日一二三四五六 ".charAt(today.getDay());  
    var time = twoDigits(today.getHours()) + ": " + twoDigits(today.getMinutes()) + ": " + twoDigits(today.getSeconds());  
    $(".font_3").html(date +" "+time);  
}  
function twoDigits(val) {  
    if (val < 10) return "0" + val; return val;  
}  
$(function () {  
    setInterval(getDate, 1000);  
});  
  </script>

<script type="text/javascript">

/* Copyright (C) 2007 Richard Atterer, richard©atterer.net
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License, version 2. See the file
 * COPYING for details.
 */

var imageNr = 0; // Serial number of current image
var finished = new Array(); // References to img objects which have finished downloading
var paused = false;
var previous_time = new Date();
var fNi = 0, msAvg = 0, fpsAvg = 0, fcnt = 0, fN = 80, msa = [], wsize = 4;

function createImageLayer() {
  var img = new Image();
  img.style.position = "absolute";
  img.style.zIndex = -1;
  img.onload = imageOnload;
  img.onclick = imageOnclick;
  img.width = 512;
  img.height = 384;
  img.src = "/?action=snapshot&n=" + (++imageNr);
  var webcam = document.getElementById("webcam");
window.info = document.getElementById('info').firstChild;
window.ravgFps = document.getElementById('ravgfps').firstChild;
window.ravgMs = document.getElementById('ravgms').firstChild;
webcam.insertBefore(img, webcam.firstChild);
document.getElementById('fN').firstChild.nodeValue = fN;
}


function runningAvgs (delta) {
// delta is the measured frame period
var len;
if (fcnt < fN) {

fcnt++;
// we need to populate the sample array
msa.push(delta);
// calculate average period so far
msAvg += (delta - msAvg) / fcnt;

} else {
/*
  running average (fN samples) according to the formula:
  rAvg = rAvg - value_fN_samples_back / fN + newest_value / fN
*/
msAvg += (delta - msa[0])/fN;
// drop oldest ms value, msa[0]
msa = msa.slice(1);
// append newest value, delta
msa.push(delta);
}
// calculate average fps
fpsAvg = 1000 / msAvg;
/*
once every fN frames, check if we need to adjust the averaging window
since faster rates seem to need more samples to reach a stable(er) readout
*/
if (++fNi == fN) {

fNi = 0;
// new window size
fN = parseInt(fpsAvg * wsize);
len = fcnt - fN;
// if our sample array, msa, has extra samples, then trim it to the new size
if (len > 0) {

  // adjust averaging window (nr of samples)
  msa = msa.splice(len);
  // avoid populating the sample array again
  fcnt = fN;
}
}
}

// Two layers are always present (except at the very beginning), to avoid flicker
function imageOnload() {
  this.style.zIndex = imageNr; // Image finished, bring to front!
  while (1 < finished.length) {
    var del = finished.shift(); // Delete old image(s) from document
    del.parentNode.removeChild(del);
  }
  finished.push(this);
  current_time = new Date();
  delta = current_time.getTime() - previous_time.getTime();
  fps   = (1000.0 / delta).toFixed(1);
runningAvgs(delta);
  info.nodeValue = delta + " ms (" + fps + " fps)";
ravgFps.nodeValue = fpsAvg.toFixed(1);
ravgMs.nodeValue = msAvg.toFixed(0);
previous_time = current_time;
  if (!paused) createImageLayer();
}

function imageOnclick() { // Clicking on the image will pause the stream
  paused = !paused;
  if (!paused) createImageLayer();
}

</script>


</head>
<body>
  
<div class="container">
  <h1>房間</h1>
  <h2>連結到：<a href="http://192.168.57.236/html/test.php">房間</a>    <a href="http://192.168.57.236/html/test.php">客廳</a></h2> 


  <h1><font class="font_3" color="#00000" style="font-size: 24px; " face="黑體"></font></h1> 
  <!-- <div>
  <IMG
   SRC="http://192.168.57.236:8080/?action=stream"
   ALT="Larry" height="100%">
  </div> -->

  <div id="webcam" style="width:512px;height:394px"><noscript><img src="http://192.168.57.236:8080/?action=snapshot" width="512px" height="384px" /></noscript></div>

</div>

</body>
</html>
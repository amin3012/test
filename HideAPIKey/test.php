<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<!-- Please see the Javascript Pane for copyright and licensing notices -->
<a href="https://www.programmableweb.com" target="_newtab"><img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/163318/pw-logo.png' alt=''></a>
<p><h4>Code Sample PlayPen (Tutorial Companion)</h4></p>
<p>This ProgrammableWeb PlayPen is an example of how to operationalize any sample code that depends on an API key that you'd rather not reveal in source code. Instead of including the API key in the source code, prompt the user for his or her API key and store that key in HTML5 storage. All this code sample does is show how you can prompt the user, store their response in HTML5 storage, display the contents of HTML5 storage, clear the display, and clear the storage. Try it out with some dummy text (click the Input button) or cut n' paste this code into your own development environment.
<p>Click <a href="https://www.programmableweb.com/news/how-to-hide-api-keys-html5-storage-public-code-samples/how-to/2018/01/17" target="_newtab">here</a> to view the matching tutorial on <a href="http://www.programmableweb.com" target="_newtab">ProgrammableWeb</a></p>

 <!-- standard group of buttons for getting API key at run time.
      see the Javascript pane for explanation of why -->

    <button id="getAPIKey">Input API Key</button>
    <button id="showKey">Display API Key</button>
    <button id="wipeKeyDisplay">Wipe Key Display</button>
    <button id="clearLocalStorage">Clear Key in HTML5 Storage</button> 

<!-- end API key group -->

    <div id="div1"></div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="script.js" runat="server"></script>
<script type="text/javascript">
 
var apiKey = null;

var getAPIKeybutton        = document.querySelector("#getAPIKey");          // button gets API key from end user
var displayAPIKeyButton    = document.querySelector("#showKey");            // button displays the API key if it exists in local HTML5 storage
var clearAPIKeyButton      = document.querySelector("#wipeKeyDisplay");     // button clears display of API key
var clearStorageButton     = document.querySelector("#clearLocalStorage");  // button is for clearing API key stored in HTML5 storage

displayAPIKeyButton.addEventListener("click", function() {
  if (localStorage.getItem("storedApiKey")) {                                           // content in the HTML5 storage field for API key?
     document.getElementById("div1").innerHTML = localStorage.getItem("storedApiKey");  // true=display what's in HTML5 storage
  } else {
     document.getElementById("div1").innerHTML = "No API Key in Storage";               // false=different message
  }   
});

clearAPIKeyButton.addEventListener("click", function() {
  document.getElementById("div1").innerHTML = "";         // set div that displays API key to blank.
});


getAPIKeybutton.addEventListener("click", function() {
    apiKey = prompt("Enter API Key:");                    // get YouTube API Key from user
    if (apiKey) {                                         // if the user entered something.
       document.getElementById("div1").innerHTML = "";    // if an API key was already displaying, clear it
       localStorage.setItem("storedApiKey", apiKey);      // store locally in HTML5 storage
    }
});

clearStorageButton.addEventListener("click", function() {
  localStorage.removeItem('storedApiKey');                   // take API key out of local HTML5 storage
  $("#playListContainer").empty();                           // clear the playlist (using jquery) since you probably should do that
  document.getElementById("div1").innerHTML = "";            // clear the API key (using good 'ole JS) if it's being displayed
});

</script>
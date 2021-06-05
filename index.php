<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/favicon.png" type="image/x-icon" />
<title>Google Clone - Latif Yılmaz</title>
<link rel="stylesheet" type="text/css" href="google.css">
</head>
<body id="body">
 
<center>
<div class="content" id="main">

    <img  src="img/googleLogo.png" class="logo"/>
    <div class="field">
        <img style="opacity: 0.5; cursor: default;" src="img/search.png" class="search">

        <input id="searchBar" maxlength="2048"type="text" autocapitalize="off" autocomplete="off" 
        autocorrect="off" autofocus="" title="Ara" value="" 
        aria-label="Ara">

        <img src="img/keyboard2.png"class="keyboard">
        <img src="img/mic.png" class="mic">
    </div>
    <div class="buttons">
            <input type="submit" onClick="openPagee()" value="Google Search">
            <a><input type="submit" value="I'm Feeling Lucky"></a>
    </div>
</div>
</center>

<div class="ctrl">
<a href="">Gmail</a>
<a>Images</a>
<img src="img/panel.png">
<button>Sign in</button>
</div>



<div class="footer">
    <div>
        <span class="footer-right">
            <a class="f-element">Privacy</a>
            <a class="f-element">Terms</a>
            <a class="f-element">Settings</a>
        </span>
        <span class="footer-left">
            <a class="f-element">Advertising</a>
            <a class="f-element">Business</a>
            <a class="f-element">About</a>
            <a class="f-element">How Search Works</a>
        </span>
    </div>
</div>

</body>

<script>
	function openPagee(){
		var url = document.getElementById("searchBar").value;
		var googleUrl = "https://www.google.com.tr/search?q=" + url
		window.open(googleUrl, "_self");
	}
</script>
</html>
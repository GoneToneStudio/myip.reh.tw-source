<html>
<head>
<title>查詢IP - REH.TW</title>
<meta name="keywords" content="REH.TW,IP,whatismyip,查IP,我的ip,ip查詢" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<style type="text/css">
<!--
.style2 {color: #003399}
a:link {
	font-size: 16px;
	text-decoration: none;
}
.style1 {
	color: #808000;
}
-->
</style>
</head>
<body id="TestPage" bgcolor="#AAFFEE">

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557c114a390b18d3" async="async"></script>

<br><br><br><br><br><br><br><br><br><br><br>
<table width="623" align="center">
<tr>
<td width="615"><h1 align="center" class="style2" >您的 IP 是 <font color=green><?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
   $myip = $_SERVER['HTTP_CLIENT_IP'];
}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
   $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
   $myip= $_SERVER['REMOTE_ADDR'];
}
echo $myip;
?></font></h1></td>
</tr>
<tr>
<td align="center">方便的IP查詢網站 - myip.reh.tw</td>
</tr>
<tr>
<div style="text-align:center;">
<a href="JavaScript:window.location.reload()">重新整理</a> 
</div>
</tr>
<tr>
<td align="center">電腦版 | <a href="mobile.php">手機板</a></td>
</tr>
</table>

<br><br><br><br><br>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/reh.tw.sw" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/reh.tw.sw"><a href="https://www.facebook.com/reh.tw.sw">旋風之音</a></blockquote></div></div>
<div class="fb-page" data-href="https://www.facebook.com/reh.tw" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/reh.tw"><a href="https://www.facebook.com/reh.tw">改革旋風 - REH.TW</a></blockquote></div></div>

<br><br><br>

<div style="text-align:center;">
<a href="http://reh.tw" class="classname"><font size="5">REH.TW 官網</font></a>
</div>
<br><br><br>

<style type="text/css">
.classname {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5) );
	background:-moz-linear-gradient( center top, #79bbff 5%, #378de5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');
	background-color:#79bbff;
	-webkit-border-top-left-radius:10px;
	-moz-border-radius-topleft:10px;
	border-top-left-radius:10px;
	-webkit-border-top-right-radius:10px;
	-moz-border-radius-topright:10px;
	border-top-right-radius:10px;
	-webkit-border-bottom-right-radius:10px;
	-moz-border-radius-bottomright:10px;
	border-bottom-right-radius:10px;
	-webkit-border-bottom-left-radius:10px;
	-moz-border-radius-bottomleft:10px;
	border-bottom-left-radius:10px;
	text-indent:0;
	border:1px solid #84bbf3;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:40px;
	font-weight:bold;
	font-style:normal;
	height:50px;
	line-height:50px;
	width:30%;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #528ecc;
}
.classname:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff) );
	background:-moz-linear-gradient( center top, #378de5 5%, #79bbff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff');
	background-color:#378de5;
}.classname:active {
	position:relative;
	top:1px;
}</style>

</body>
</html>
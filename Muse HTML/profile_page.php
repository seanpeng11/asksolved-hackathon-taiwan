<?php
if(!isset($_GET["username"]) ) {
	header('Location: home.php');
}
$db = mysqli_connect("localhost", "root", "", "samplelogindb");
$sql = "SELECT * FROM `newuser` WHERE `username` = '".$_GET["username"]."'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

$sql_asked = "SELECT COUNT( * ) as 'total' FROM questiontb WHERE username ='".$_GET["username"]."'";
$sql_ansed = "SELECT COUNT( * ) as 'total' FROM answertb WHERE username ='".$_GET["username"]."'";
$asked = mysqli_fetch_assoc(mysqli_query($db, $sql_asked));
$ansed = mysqli_fetch_assoc(mysqli_query($db, $sql_ansed));
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.0.386"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "require.js", "profile_page.css"], "outOfDate":[]};
</script>
  
  <title>Profile_Page</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=4275521114"/>
  <link rel="stylesheet" type="text/css" href="css/master_profile_master.css?crc=493358629"/>
  <link rel="stylesheet" type="text/css" href="css/profile_page.css?crc=4288422163" id="pagesheet"/>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="browser_width colelem" id="u1618-bw">
     <div class="museBGSize" id="u1618"><!-- group -->
      <div class="clearfix" id="u1618_align_to_page">
       <a class="nonblock nontext clip_frame grpelem" id="u1668" href="home.php"><!-- image --><img class="block" id="u1668_img" src="images/61449_poster_.png?crc=3902089025" alt="" width="73" height="73"/></a>
       <div class="clearfix grpelem" id="u1620"><!-- column -->
        <div class="position_content" id="u1620_position_content">
         <div class="clip_frame colelem" id="u1645"><!-- image -->
          <img class="block" id="u1645_img" src="images/pasted%20image%20640x640.jpg?crc=4172769994" alt="" width="138" height="138"/>
         </div>
         <div class="clearfix colelem" id="u1652-4"><!-- content -->
          <p><span id="u1652"><?php echo $row['username']; ?></span></p>
         </div>
         <div class="clearfix colelem" id="pu1641"><!-- group -->
          <div class="grpelem" id="u1641"><!-- custom html -->
           <html>
<head>
<title>Profile_Page</title>
<style>
	div.container {
	margin:20 auto;
	width:80%;
	padding: 5px;
}
div.t-container {
	margin: 20px auto;
	width:70%;
}
div.sidebar {
	width: 18%;
	height: 100%;
	position: absolute;
	display: none;
	top: 0;
	right: 0;
	background-color: rgb(50, 50, 50);
	color: white;
	padding: 15px;
}

table {
	border: 1px solid;
	border-collapse: collapse;
}
table.thread {
	width: 100%;
}
table.profile_container {
	width: 80%;
}

td {
	padding: 5px;
	vertical-align: center;
}

td.solved {
	text-align: center;
	width: 50px !important;
}
td.date {
	width: 90px !important;
}
td.user {
	width: 90px !important;
}
td.title {
	width: 60%;
}
td.likes {
	width: 30px;
	font-size: 18px;
}
td.active {
	color: rgb(0, 10, 200);
}
td.like_btn_container {
	width: 20px;
}
td.liked {
	width: 20px;
	font-size: 14px;
	color:rgb(100, 100, 100);
}

img.like_btn {
	width:20px;
	cursor: pointer;
}
img.back_btn {
	width:60px;
	position: absolute;
	cursor: pointer;
}
img.profile {
	width:200px;
}
img.sidebar_btn {
	width:35px;
	position: absolute;
	top: 0;
	right: 0;
	z-index:2;
	cursor: pointer;
}
img.question_pic, img.thread_pic {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.form_content {
	width: 200px;
	font-size: 16px;
	height: 18px;
}

input.go_btn {
	width: 170px !important;
}

ul {
	list-style: none;
}
	</style>
</head>

<body><font face="Arial">
	

	<div class="container">
	
	<!--<h2>testUser1</h2>-->
	<table align="center" class="profile_container">
		<!--<tr><td align="center" colspan="2"><img src="profile_pic.jpg" class="profile"></td></tr>-->
		<tr>
			<td>Level: </td>
			<td><?php echo $row['qualification'] ?></td>
		</tr>
		<tr>
			<td>School: </td>
			<td><?php echo $row['school'] ?></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><?php echo $row['email'] ?></td>
		</tr>
		<tr>
			<td>Asked Questions: </td>
			<td><?php echo $asked['total'] ?></td>
		</tr>
		<tr>
			<td>Answered Questions: </td>
			<td><?php echo $ansed['total'] ?></td>
		</tr>
	</table>
	

	</div>
</font>
</body>

</html>

          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="561" data-content-above-spacer="699" data-content-below-spacer="0"></div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):alert(g)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.watch"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=7928878" type="text/javascript" async data-main="scripts/museconfig.js?crc=310584261" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>

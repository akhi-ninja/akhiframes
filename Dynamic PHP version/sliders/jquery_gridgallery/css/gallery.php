<?php header ('content-type: text/css; charset: UTF-8'); ?>
<?php echo '@import url("animate/'.$_GET['effect'].'.css");'; ?>
/* The actual CSS start from here */

#transition{ position: absolute; background: url(../img/selection.png) no-repeat; width: 360px; height: 120px; bottom: 6px; left: 12px; }
#transition div#selections{ display: none; position: absolute; bottom: 20px; left: 12px; background: #333; padding: 18px; -moz-border-radius: 4px; border-radius: 4px; }
#transition div#toggleImg{ margin-top: 96px; background: url(../img/toggle.png) no-repeat;	 width: 24px; height: 24px; cursor: pointer; }
#transition p{ font-size: 12px; }
#transition select{ font-size: 12px; margin-bottom: 12px; }

#grid_gallery{ margin: 0 auto; text-align: center; width: 960px; }

.thumbContainer{ position: absolute; width: 660px; margin-left: -330px; bottom: 0px; z-index: 1002; left: 50%; }

.largeContainer{ width: 960px; min-height: 600px; background: url(../img/loading.gif) center center no-repeat;}
.largeContainer img{ position: relative; z-index: 1000;}
body.dark .largeContainer img {border:4px solid #000;}
body.light .largeContainer img {border:4px solid #FFF;}

.largeContainer span.caption{ text-shadow: 0 0 1px rgba(255,255,255,0.3); display: block; position: relative; margin: 0 auto; width: auto; padding: 12px; opacity: 1; }
.largeContainer span.caption a, .largeContainer span.caption a:visited{ color: #FF4242; }
.largeContainer span.caption a:hover{ color: #B22222; }

.closeButton { background-image: url(../img/slider2_controls.png); background-repeat: no-repeat; width: 39px; height: 39px; position: absolute; z-index: 1001;
-webkit-transition: background-position 0.15s ease-in; -moz-transition: background-position 0.15s ease-in; -ms-transition: background-position 0.15s ease-in; transition: background-position 0.15s ease-in;}
body.dark .closeButton,
body.light .closeButton:hover {background-position:-39px 0;}
body.light .closeButton,
body.dark .closeButton:hover {background-position:0 0;}


#arrowButton{ cursor: pointer; position: fixed; width: 39px; height:78px; top:50%; right:0; margin-top:-39px; } 
#arrowButton > div {width: 39px; height: 39px; background-image: url(../img/slider2_controls.png); background-repeat: no-repeat; -webkit-transition: background-position 0.15s ease-in; -moz-transition: background-position 0.15s ease-in; -ms-transition: background-position 0.15s ease-in; transition: background-position 0.15s ease-in;}
body.dark #arrowButton .prevArrow,
body.light #arrowButton .prevArrow:hover {margin-bottom:1px; background-position:0 -39px; } 
body.dark #arrowButton .prevArrow:hover,
body.light #arrowButton .prevArrow {background-position:0 -78px; } 
body.dark #arrowButton .nextArrow,
body.light #arrowButton .nextArrow:hover {background-position:-39px -78px;}
body.dark #arrowButton .nextArrow:hover,
body.light #arrowButton .nextArrow {background-position:-39px -39px;}


.holder {margin:0; clear: left; padding:4px; }
body .holder a { font-size:10px; cursor:pointer; margin:0 5px; color:#ddd; text-shadow:1px 1px 0 #000; }
body .holder a:hover { color:#fff; }
.holder a.jp-previous { margin-right:15px; text-decoration: none; } 
.holder a.jp-next { color: #FFF; margin-left:15px; text-decoration: none; }
.holder a.jp-current,a.jp-current:hover { font-weight:bold; color:#fff; }
.holder a.jp-disabled,a.jp-disabled:hover { color:#bbb; text-decoration: none; }
.holder a.jp-current,a.jp-current:hover,.holder a.jp-disabled,a.jp-disabled:hover { cursor:default; background:none; }
.holder span { margin:0 5px; }

ul#thumbnails { list-style: none; margin: 0px;  padding:5px ; }
ul#thumbnails li { float: left; cursor:pointer; margin:5px;}
ul#thumbnails li img { width: 120px; height: 75px; vertical-align: top; }

body.dark ul#thumbnails {background:#000;}
body.dark ul#thumbnails li.selected { outline: 3px solid #FFF; }
body.light ul#thumbnails {background:#FFF;}
body.light ul#thumbnails li.selected { outline: 3px solid #000; }

#background {z-index:0;}
.oldie #background {z-index:1;}

.jp-disabled{ display:none; }

.animate1{
-webkit-animation-duration: .6s;
-webkit-animation-delay: .2s;
-webkit-animation-timing-function: ease;
-webkit-animation-fill-mode: both;
-moz-animation-duration: .6s;
-moz-animation-delay: .2s;
-moz-animation-timing-function: ease;
-moz-animation-fill-mode: both;
-ms-animation-duration: .6s;
-ms-animation-delay: .2s;
-ms-animation-timing-function: ease;
-ms-animation-fill-mode: both;
animation-duration: .6s;
animation-delay: .2s;
animation-timing-function: ease;
animation-fill-mode: both;	          
} 


.animate2{
-webkit-animation-duration: .6s;
-webkit-animation-delay: .4s;
-webkit-animation-timing-function: ease;
-webkit-animation-fill-mode: both;
-moz-animation-duration: .6s;
-moz-animation-delay: .4s;
-moz-animation-timing-function: ease;
-moz-animation-fill-mode: both;
-ms-animation-duration: .6s;
-ms-animation-delay: .4s;
-ms-animation-timing-function: ease;
-ms-animation-fill-mode: both;
animation-duration: .6s;
animation-delay: .4s;
animation-timing-function: ease;
animation-fill-mode: both;	          
} 

.animate3{
-webkit-animation-duration: .6s;
-webkit-animation-delay: .6s;
-webkit-animation-timing-function: ease;
-webkit-animation-fill-mode: both;
-moz-animation-duration: .6s;
-moz-animation-delay: .6s;
-moz-animation-timing-function: ease;
-moz-animation-fill-mode: both;
-ms-animation-duration: .6s;
-ms-animation-delay: .6s;
-ms-animation-timing-function: ease;
-ms-animation-fill-mode: both;
animation-duration: .6s;
animation-delay: .6s;
animation-timing-function: ease;
animation-fill-mode: both;	          
}  
/*
Animate.css - http://daneden.me/animate
LICENSED UNDER THE  MIT LICENSE (MIT)

Copyright (c) 2011 Dan Eden

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

.animated {
-webkit-animation-duration: 1s;
-moz-animation-duration: 1s;
-ms-animation-duration: 1s;
-o-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
-moz-animation-fill-mode: both;
-ms-animation-fill-mode: both;
-o-animation-fill-mode: both;
animation-fill-mode: both;
}


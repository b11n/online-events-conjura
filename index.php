<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Online Events | Conjua'12</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
    
    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	var xAdd = 0;
        var opc=50;
        var flag=true;
	var scrollInterval = setInterval(function(){
		xAdd++;
		if(xAdd >= 1000){
			xAdd = 0;
		}
		$('#bg1').css('background-position',xAdd + 'px 100%');
		$('#bg2').css('background-position',(xAdd * 2) + 'px 100%');
                $('#bg3').css('background-position',(xAdd * 1.5 ) + 'px 100%');		
	},30);
      var dim=setInterval(function(){
      if(flag)
      {
        opc--;
        if(opc==10)
        {
            flag=false;
        }
        
      }
      else{
        opc ++;
        if(opc==50)
        {
            flag = true;
        }
      }
      $('#bg1').css('opacity',(opc/50));
      },30);
});
</script>
</head>
<body>
    <div id="bg1"></div>
    <div id="bg2">
        
    </div>
    <div id="bg3"></div>
    <div id="wrapper1024">

<div id="header"><img src="images/ol_header.png">
<a href="http://www.conjura.in"><div id="conjura12"></div></a>
</div>

<div id="wrapper3">

<div class="view view-ninth">
                    <img src="images/2.jpg" />
                    <div class="mask mask-1"></div>
                    <div class="mask mask-2"></div>
                    <div class="content">
                        <h2>Bulls & Bears</h2>
                        <p>Have you ever wanted to trade on a real stock market and earn with out any real investments? Try this amazing virtual Stock exchange game and win real money with virtual cash !</p>
                        <a href="#" class="info">Starting Soon</a>
                    </div>
</div>
<div class="view view-second">
                    <img src="images/incog.jpg" />
                    <div class="mask"></div>
                    <div class="content">
                        <h2>iNCOGNITO !</h2>
                        <p>Incognito is the online treasure hunt of Conjura'12.Through the years this game has evolved from a simple online puzzle to a complex crypt hunt !</p>
                        <a href="#" class="info">Starting Soon</a>
                    </div>
</div>
<div class="view view-sixth">
                    <img src="images/3.jpg" />
                    <div class="mask">
                        <h2>Xpeditia</h2>
                        <p>Around the world in 28 days.Fasten your seatbelts for this amazing race !</p>
                        <a href="#" class="info">Starting Soon</a>
                    </div>
</div>

</div>

</div>
<div id="footer">
    All pages beyond this are best viewd in <a href="https://support.google.com/chrome/bin/answer.py?hl=en&answer=95346">Google Chrome</a> or  <a href="http://www.mozilla.org/en-US/firefox/new/"> Firefox 9.0.1</a>   |   <a href="http://www.facebook.com/conjura">Conjura'12</a> Home    |
</div>
</body>
</html>

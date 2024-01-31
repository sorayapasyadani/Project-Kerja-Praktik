<HEAD>

<script LANGUAGE="javascript">
<!--
function panggil()
{
Nifty("div.footer","top big");
}
function cs()
{
setTimeout('bcs()',1500);
}
function bcs()
{
setTimeout('cs()',1500);
}
-->
</script>
<script type="text/javascript" src="niftycube.js"></script>

<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('jam').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}
</script>

<!--<script src="http://code.jquery.com/jquery-latest.js"> </script>-->
<script type="text/javascript" src="jquery-latest.js"> </script>
  <script type="text/javascript">
  
    setInterval("my_function();",5000); 
    function my_function(){
      $('#refresh').load(location.href + ' #container');
    }
  </script>

<style type="text/css">
body { margin: 0; padding: 0; background-color: #000; text-align: center; cursor:text; overflow: hidden; }

#container { width: 1920; height: 945px; position:relative; overflow: hidden;
             margin-left: auto; margin-right: auto; background-color: #ffffff; }
@font-face {
    font-family: "roboto-condensed.light";
    src: url(/departure/roboto-condensed.light.ttf)
    }
@font-face {
    font-family: "roboto-condensed.bold";
    src: url(/departure/roboto-condensed.bold.ttf)
    }
@font-face {
    font-family: "roboto-condensed.regular";
    src: url(/departure/roboto-condensed.regular.ttf)
    }	
.header {
    width: 1920; height: 133px;
    color: #FFF; position:relative; overflow: hidden;
    margin-left: auto; margin-right: auto; background: url("/departure/headerheader4.jpg")no-repeat scroll;
    text-align:left; 
    }
	
.header .jam {
    margin-left: 1600px;
    margin-top: 20px;
    font-size: 75px;
    font-family: "roboto-condensed.regular"; font-weight:regular;
    }
.header .tanggal {
    margin-left: -250px;
    margin-top: -60px;
    font-size: 40px;
    font-family: "roboto-condensed.light";
    }
	
.header .title1 {
    margin: -110;
    margin-left: -1300px;
    font-size: 32px;
    font-family: "roboto-condensed.light";
    color: white;
      
    }
.header .icon {
    margin: -56;
    margin-left: -520px;
    border: 0;
    font-size: 100%;
    font: inherit;
     }
.header .icon img { width: 70px }


div.judul { width:1920px; height:20px; clear:both; font-size:26px; line-height:20px;padding-top:20px;padding-bottom:20px;
            color:#fff; background-color:#0A4580; font-family: "roboto-condensed.regular"; }
div.j1 { float:left; margin-left:100px; }
div.j2 { float:left; margin-left:165px; }
div.j3 { float:left; margin-left:120px; }
div.j4 { float:left; margin-left:130px; }
div.j5 { float:left; margin-left:110px; }
div.j6 { float:left; margin-left:115px; }
div.j7 { float:left; margin-left:180px; }




div.baris,div.barisf,div.barisd { width:1920px; height:40px; clear:both; padding-top:8px; padding-bottom:8px;
font-size:32px; border-bottom:2px solid #CBCBCB; font-family: "roboto-condensed.regular" }
div.baris { color:#222222; }
div.barisf { -webkit-animation:blink 1s linear infinite; -moz-animation:blink 3s linear infinite;
animation:blink 3s linear infinite; }
div.barisd { color:#0b60bb; }

div.c1 { width:250; height:24px; float:left; margin-left:15px; }
div.c2 { width:250; height:24px; float:left; color:#222222; text-align:left:10px;font-family: "roboto-condensed.regular"; }
div.c3 { width:200; height:50px; float:left; color:#0b60bb; font-family: "roboto-condensed.regular"; }
div.c4 { width:350; height:50px; float:left; color:#0b60bb; font-family: "roboto-condensed.regular"; font-weight:bold; }
div.c5 { width:80; height:1px; float:left; color:#0b60bb;font-family: "roboto-condensed.regular"; }
div.c6 { width:270; height:1px; float:left; color:#0b60bb;font-family: "roboto-condensed.regular"; }
div.c7 { width:270; height:15px; float:left; font-family: "roboto-condensed.regular"; text-transform: uppercase;  }



div.footer { height: 40px; width: 1940px; left:-10px; bottom:0px; position: absolute;
             color: #fff; background:#0A4580; font-family: "roboto-condensed.regular";
             text-align: center; font-size: 27px; font-weight:bold; }
			 
span.h { color::#FFFFFF;font-size:35px; }

@keyframes blink{
0%{color:red}
50%{color:white}
100%{color:red}
}
@-webkit-keyframes blink{
0%{color:red}
50%{color:white}
100%{color:red}
}

</style>
</HEAD>
<body onload="startTime()">
<div class="header"> 
<div class="jam"><div id="jam"></div>
<div class="tanggal">3 May 2023 <div class="title1"><h1>Departure</h1>
 

</div>
</div>
</div>
</div>

<BODY onload="panggil()">

<div id="container">

<div id="refresh">
<div class='judul'>
<div class='j1'><span class='h'>Airline</span></div>
<div class='j2'><span class='h'>Flight</span></div>
<div class='j3'><span class='h'>Schedule</span></div>
<div class='j4'><span class='h'>Destination</span></div>
<div class='j5'><span class='h'>Gate</span></div>
<div class='j6'><span class='h'>ETD</span></div>
<div class='j7'><span class='h'>Remark</span></div>
</div>
<div class='barisf'><div class='c1'><img name='img0' src='/display/images/jt-t.gif' width='190' height='45' /></div><div class='c2' id='cstext0'>JT 222</div><div class='c3'>12:25</div><div class='c4' id='0'>BANJARMASIN</div><div class='c5'>13</div><div class='c6'>14:11</div><div class='c7'>Boarding</div></div>
<div class='barisf'><div class='c1'><img name='img1' src='/display/images/jt-t.gif' width='190' height='45' /></div><div class='c2' id='cstext1'>JT 642</div><div class='c3'>13:00</div><div class='c4' id='1'>LOMBOK PRAYA</div><div class='c5'>11</div><div class='c6'>14:03</div><div class='c7'>Boarding</div></div>
<div class='barisf'><div class='c1'><img name='img2' src='/display/images/jt-t.gif' width='190' height='45' /></div><div class='c2' id='cstext2'>JT 804</div><div class='c3'>13:30</div><div class='c4' id='2'>DENPASAR</div><div class='c5'>14</div><div class='c6'>13:50</div><div class='c7'>Boarding</div></div>
<div class='barisd'><div class='c1'><img name='img3' src='/display/images/iu-t.gif' width='190' height='45' /></div><div class='c2' id='cstext3'>IU 542</div><div class='c3'>13:45</div><div class='c4' id='3'>MAKASSAR</div><div class='c5'>12</div><div class='c6'>14:04</div><div class='c7'>Departed</div></div>
<div class='baris'><div class='c1'><img name='img4' src='/display/images/iw-t.gif' width='190' height='45' /></div><div class='c2' id='cstext4'>IW 1811</div><div class='c3'>13:50</div><div class='c4' id='4'>JOGJAKARTA</div><div class='c5'>10</div><div class='c6'>15:20</div><div class='c7'>Operational</div></div>
<div class='barisf'><div class='c1'><img name='img5' src='/display/images/jt-t.gif' width='190' height='45' /></div><div class='c2' id='cstext5'>JT 836</div><div class='c3'>13:50</div><div class='c4' id='5'>PONTIANAK</div><div class='c5'>10</div><div class='c6'>13:59</div><div class='c7'>Boarding</div></div>
<div class='baris'><div class='c1'><img name='img6' src='/display/images/iu-t.gif' width='190' height='45' /></div><div class='c2' id='cstext6'>IU 616</div><div class='c3'>13:50</div><div class='c4' id='6'>BALIKPAPAN</div><div class='c5'>8</div><div class='c6'></div><div class='c7'>Check In Closed</div></div>
<div class='baris'><div class='c1'><img name='img7' src='/display/images/iu-t.gif' width='190' height='45' /></div><div class='c2' id='cstext7'>IU 636</div><div class='c3'>14:05</div><div class='c4' id='7'>BANJARMASIN</div><div class='c5'>13</div><div class='c6'>14:35</div><div class='c7'>Operational</div></div>
<div class='baris'><div class='c1'><img name='img8' src='/display/images/id-t.gif' width='190' height='45' /></div><div class='c2' id='cstext8'>ID 6573</div><div class='c3'>14:10</div><div class='c4' id='8'>JAKARTA</div><div class='c5'>11</div><div class='c6'>15:00</div><div class='c7'>Operational</div></div>
<div class='barisf'><div class='c1'><img name='img9' src='/display/images/qg-t.gif' width='190' height='45' /></div><div class='c2' id='cstext9'>QG 948</div><div class='c3'>14:20</div><div class='c4' id='9'>BATAM</div><div class='c5'>5</div><div class='c6'>13:42</div><div class='c7'>Final Call</div></div>
<div class='baris'><div class='c1'><img name='img10' src='/display/images/jt-t.gif' width='190' height='45' /></div><div class='c2' id='cstext10'>JT 749</div><div class='c3'>14:20</div><div class='c4' id='10'>JAKARTA</div><div class='c5'>14</div><div class='c6'>14:50</div><div class='c7'>Operational</div></div>
<div class='baris'><div class='c1'><img name='img11' src='/display/images/qg-t.gif' width='190' height='45' /></div><div class='c2' id='cstext11'>QG 717</div><div class='c3'>14:20</div><div class='c4' id='11'>JAKARTA</div><div class='c5'>4</div><div class='c6'></div><div class='c7'>Waitingroom</div></div>
<div class='barisf'><div class='c1'><img name='img12' src='/display/images/iw-t.gif' width='190' height='45' /></div><div class='c2' id='cstext12'>IW 1890</div><div class='c3'>14:30</div><div class='c4' id='12'>PANGKALANBUN</div><div class='c5'>8</div><div class='c6'>14:09</div><div class='c7'>Boarding</div></div>
<div class='baris'><div class='c1'><img name='img13' src='/display/images/id-t.gif' width='190' height='45' /></div><div class='c2' id='cstext13'>ID 7514</div><div class='c3'>14:50</div><div class='c4' id='13'>HALIM PK</div><div class='c5'>10</div><div class='c6'></div><div class='c7'>Check In</div></div>
</div>

<div class="footer">
<marquee onmouseout='this.start()' onmouseover='this.stop()' scrollamount='9'><img src="/arrival_new/ap1logo.png" width="60" height="30"/>&nbsp&nbspSELAMAT DATANG DI TERMINAL 1 BANDAR UDARA INTERNASIONAL JUANDA SURABAYA&nbsp&nbsp<img src="/departure/ap1logo.png" width="60" height="30"/>&nbsp&nbspJANGAN MENINGGALKAN BARANG BAWAAN ANDA TANPA PENGAWASAN&nbsp&nbsp<img src="/departure/ap1logo.png" width="60" height="30"/>&nbsp&nbspDO NOT LEAVE YOUR LUGGAGE UNATTENDED&nbsp&nbsp<img src="/departure/ap1logo.png"width="60" height="30"/>&nbsp&nbspSILENT AIRPORT SUDAH DIBERLAKUKAN, MOHON PARA PENUMPANG SELALU MEMPERHATIKAN INFORMASI PENERBANGAN PADA MONITOR FIDS YANG TERSEDIA. TERIMAKASIH.&nbsp&nbsp<img src="/departure/ap1logo.png" width="60" height="30"/>&nbsp&nbspSILENT AIRPORT POLICY HAS BEEN ENFORCED, PASSANGERS ARE ADVISED TO CHECK FLIGHT INFORMATION ON AVAILABLE FIDS SCREEN. THANK YOU.&nbsp&nbsp</marquee>

</div>
</div>


</BODY>

</HTML>
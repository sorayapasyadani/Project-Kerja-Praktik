<?php
    session_start();
    include 'db.php';
    if (!$conn) {
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
?>

<HEAD>

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
    color: #000; position:relative; overflow: hidden;
    margin-left: auto; 
    margin-right: auto; 
    background: url("images/tes.png")no-repeat scroll;
    background-size: 1920px 133px;
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
    color: black;
      
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
<div class="tanggal">3 May 2023 <div class="title1"><h2>Airport Baggage Check Service</h2>
</div>
</div>
</div>
</div>

<BODY onload="panggil()">
<div id="container">
<div id="refresh">
<div class='judul'>
<div class='j1'><span class='h'>No</span></div>
<div class='j1'><span class='h'>Nomor Penerbangan</span></div>
<div class='j2'><span class='h'>Nama Penumpang</span></div>
<div class='j2'><span class='h'>Status</div>

</div>
<table >
<tr>
            <th width="60px">No</th>
            <th>Nomor Penerbangan</th>
            <th>Nama</th>
            <th>Status</th>
    </tr>
            <tbody>
                         <!-- Menampilkan Data yang ada di Database -->
                            <?php
                            $no = 1;
                            $tampil = mysqli_query($conn, "SELECT * FROM `tb_suspek` WHERE `status` like 'Aktif' ORDER BY `id_suspek`;
                            ");
                                    while($data = mysqli_fetch_array($tampil)) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nomor_penerbangan'] ?></td>
                                <td><?= $data['nama_penumpang'] ?></td>
                                <td><?= $data['status'] ?></td>
                                <?php } ?>
            <tr>
            <!---else--->
            </tr>
            </tbody>
</table>


<div class="footer">
<marquee onmouseout='this.start()' onmouseover='this.stop()' scrollamount='9'><img src="/arrival_new/ap1logo.png" width="60" height="30"/>&nbsp&nbspSELAMAT DATANG DI TERMINAL 1 BANDAR UDARA INTERNASIONAL JUANDA SURABAYA&nbsp&nbsp<img src="/departure/ap1logo.png" width="60" height="30"/>&nbsp&nbspJANGAN MENINGGALKAN BARANG BAWAAN ANDA TANPA PENGAWASAN&nbsp&nbsp<img src="/departure/ap1logo.png" width="60" height="30"/>&nbsp&nbspDO NOT LEAVE YOUR LUGGAGE UNATTENDED&nbsp&nbsp<img src="/departure/ap1logo.png"width="60" height="30"/>&nbsp&nbspSILENT AIRPORT SUDAH DIBERLAKUKAN, MOHON PARA PENUMPANG SELALU MEMPERHATIKAN INFORMASI PENERBANGAN PADA MONITOR FIDS YANG TERSEDIA. TERIMAKASIH.&nbsp&nbsp<img src="/departure/ap1logo.png" width="60" height="30"/>&nbsp&nbspSILENT AIRPORT POLICY HAS BEEN ENFORCED, PASSANGERS ARE ADVISED TO CHECK FLIGHT INFORMATION ON AVAILABLE FIDS SCREEN. THANK YOU.&nbsp&nbsp</marquee>

</div>
</div>


</BODY>

</HTML>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
<style>
   @page{
    size: 8in 9in;
   }

   #judul{
    text-align: center;
   }
   #halaman{
    width: auto;
    height: auto;
    padding-top: 10px;
    padding-left: 1px;
    padding-right: 1px;
    padding-bottom: 10px;
   }
   .jl{
    margin-bottom: -4px;
    margin-top: -10px;
   }
   .footer{
    width: 30%;
    text-align: left;
    float: right;
  }
  .footernama{
    width: 25%;
    text-align: left;
    float: right;
    margin-top: 100px;
  }
</style>

</head>
<body>
    <div id=halaman>
    <table width="100%">

        <tr>
        <td width="25"  align="center"><img src="" width="60%"></td>
        <td  align="center"><font size="5">YAYASAN AL-HASYIMIYYAH</font><br>
                                      <font size="5">SEKOLAH MENENGAH KEATAS</font><br>
                                      <font size="6">SMA ISLAM AL-HASYIMIYYAH</font><br>
                                      <font size="4">SK.DINAS P & K Nomor : 421.3/2/2787-TU</font><br>
                                      <font size="4">NSS : 302286113080</font><br>
                                      <font size="5">TERAKREDITASI</font>
                                    
                                    </td>
        </tr>
        <tr>
            <td colspan="9"><hr></td>
        </tr>
        </table>
        <div class="jl">
        <font size="1">Jl. Sukamandi Rt.01 Rw.09 Karangsari Neglasari kota Tangerang-Banten Telp (021) 2122251811, Email:smaislamalhasyimiyyah@yahoo.com</font>
    </div>
    <hr>
            <center>
                <font size="4">SURAT PERINGATAN</font>
            </center>
       
    <br>
        <table>
            <tr>
                <td>Yang bertanda tangan di bawah ini :</td>
            </tr>
    
                <table width="350">
                    @foreach ($data as $d )
                        
                   
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $d->nama }}</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td>{{ $d->kelas }}</td>
                    </tr>
                  
                </table>
        </table>
        <p>  Mendapatkan Peringatan dari sekolah, di karnakan point pelanggaran sudah mencapai {{ $d->point }} point, sehingga siswa/i mendapatkan peringatan, dan berharap kedepannya bisa mematuhi dan mengikuti tata tertib di sekolah ini.</p><br><br>
        @endforeach
        <div class="footer">
                Tangerang, 04 September 2022 <br>
                Yang Bertanda Tangan,
        </div>

       <br><br><br>
        <div class="footernama">( Kesiswaan/BP )</div>
    
    </div>


    </body>
</html>
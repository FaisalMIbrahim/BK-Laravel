<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Laporan</h4>
	
	</center>
 
        <table class='table table-bordered'>
          <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Wali Kelas</th>
                <th>Point</th>
                <th>Keterangan</th>
                <th>Penanganan</th>
                
              
            </tr>
        </thead>
        <tbody> 
          @if (count($laporan) == 0)
          <div class="alert alert-danger">Data Tidak Di Temukan</div>
      
          @elseif (!empty($laporan))
            @foreach ($laporan as $no => $item)
            <tr>
              
                <td>{{ $no + 1 }}</td>
                    <td>{{ $item->tgl_kejadian}}</td>
                    <td>{{ $item->nis}}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->kelas}}</td>
                    <td>{{ $item->wali_kelas}}</td>
                    <td>{{ $item->id_point}}</td>
                    <td>{{ $item->keterangan}}</td>
                    <td>{{ $item->penanganan}}</td>
                    
                </td>
            </tr>                    
            @endforeach
            @endif
        </tbody>
          </tbody>
        </table>
 
</body>
</html>

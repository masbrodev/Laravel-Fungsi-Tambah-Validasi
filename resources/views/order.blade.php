<html>
<head>
	<title>UAS WEB 2</title>
</head>
<body>
 
	
	<br/>
	<br/>


<h1>Keranjang</h1>

		<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama masakan</th>
            <th>jumlah</th>
            <th>Harga</th>
            <th>Total</th>
		</tr>
		@foreach($orders as $o)
		<tr>
			<td>{{ $o->id }}</td>
		<td>{{ $o->masakan->nama_masakan }}</td>
			<td>{{ $o->jumlah}}</td>
			<td>{{ $o->masakan->harga }}</td>
			<td>{{ $o->jumlah * $o->masakan->harga }}</td>

				
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>
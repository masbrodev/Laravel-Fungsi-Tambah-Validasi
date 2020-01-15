<html>
<head>
	<title>UAS WEB 2</title>
</head>
<body>
 
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama masakan</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>OPSI</th>
		</tr>
		@foreach($masakans as $p)
		<tr>
			<td>{{ $p->id }}</td>
		<td>{{ $p->nama_masakan }}</td>
			<td>{{ $p->harga }}</td>
			<td><img src="{{ asset($p->jumlah.'.jpg') }}" alt=""></td>
				<td>
				<form action="/tambah1" method="post">
                                @csrf
								<input type="hidden" name="id_masakan" id="id_masakan" value="{{ $p->id }}">
								<input type="hidden" name="jumlah" id="jumlah" value="1">
                                <button type="submit"><span class="lnr lnr-cart"></span> Tambah ke Keranjang</button>
							</form>

			</td>
		</tr>
		@endforeach
	</table>



	<br><br><br><br><br><br><br><br>

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
			<td>{{ $o->id_order }}</td>
		<td>{{ $o->masakan->nama_masakan }}</td>
			<td>{{ $o->jumlah}}</td>
			<td>{{ $o->masakan->harga }}</td>
			<td>{{ $o->jumlah * $o->masakan->harga }}</td>

				
		</tr>
		@endforeach
	</table>

</body>
</html>
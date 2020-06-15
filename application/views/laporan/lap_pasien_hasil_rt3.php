<div class="main" id="pasienhasil">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">

			<div class="panel panel-headline">
				<div class="panel-heading">
					<div class="block-options pull-right">
						<a href="javascript:void(0)" id="buttonPrint" class="btn btn-effect-ripple btn-default" onclick="printContent('pasienhasil')"><i class="fa fa-print"></i> Print</a>
					</div>
					<h3 class="panel-title">Laporan Pasien</h3>
					<hr class="sidebar-divider">
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPasien"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Pemeriksaan</a>
						</div>
					</div>
				</div>


				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped" id="example1" style="font-size:13px;">
											<thead>
												<tr>
													<th style="width:5px;">No</th>
													<th>Nama</th>
													<th>Tanggal Periksa</th>
													<th>Sistol</th>
													<th>Diastol</th>
													<th>Gula Darah</th>
													<th>Kategori Gula Darah</th>
													<th>Kategori Hipertensi</th>
													<th style="text-align:center;">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 0;
												foreach ($rt3_byNama->result_array() as $p) :
													$no++;
												?>
													<tr>
														<td><?= $no; ?></td>
														<td><?= $p['nama_warga']; ?></td>
														<td><?= $p['tanggal_periksa']; ?></td>
														<td><?= $p['sistol']; ?></td>
														<td><?= $p['diastol']; ?></td>
														<td><?= $p['gula_darah']; ?></td>
														<td><a href="#" class="badge badge-success" data-toggle="modal" data-target="#ModalKategori<?= $p['kategori_dm']; ?><?= $p['id']; ?>"><?= $p['kategori_dm']; ?></a></td>
														<td><a href="#" class="badge badge-success" data-toggle="modal" data-target="#ModalKategori<?= $p['kategori']; ?>"><?= $p['kategori']; ?></a></td>
														<td style=" text-align:center;">
															<a class="btn" data-toggle="modal" data-target="#ModalEditPasien<?= $p['id']; ?>"><span class="fas fa-edit"></span></a>
															<a class="btn" data-toggle="modal" data-target="#ModalHapusPasien<?= $p['id']; ?>"><span class="fa fa-trash"></span></a>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->


	<!--TAMBAH PASIEN-->
	<?php foreach ($rt3_byNama1->result_array() as $p) : ?>
		<div class="modal fade" id="ModalTambahPasien" tabindex="-1" role="dialog" aria-labelledby="ModalTambahPasienLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="panel">
						<div class="panel-heading">
							<div class="modal-header">
								<h3 class="modal-title" id="ModalTambahPasienLabel">Tambah Pemeriksaan</h3>
							</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<form class="form-horizontal" action="<?= base_url('rt3/simpan_periksa'); ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">

											<div class="form-group">
												<label for="inputpasien">Nama Warga</label>
												<input type="text" class="form-control" id="nama_pasien" name="nama_warga" value="<?= $p['nama_warga']; ?> " readonly autocomplete="off" required>
											</div>

											<div class="form-group">
												<label for="inputpasien">Sistol</label>
												<input type="text" class="form-control" id="alamat" name="sistol" autocomplete="off" required>
											</div>

											<div class="form-group">
												<label for="inputpasien">Diastol</label>
												<input type="text" class="form-control" id="no_rekam" name="diastol" autocomplete="off" required>
											</div>
											<div class="form-group">
												<label for="inputpasien">Gula Darah</label>
												<input type="text" class="form-control" id="no_rekam" name="gula_darah" autocomplete="off" required>
											</div>

											<div class="form-group">
												<label for="inputpasien">Tanggal Periksa</label>
												<input type="text" class="form-control pull-right datepicker" id="tanggal_periksa" name="tanggal_periksa" autocomplete="off" required>
											</div>

										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<!--END TAMBAH PASIEN-->

	<!--EDIT PASIEN-->
	<?php foreach ($rt3_byNama->result_array() as $p) : ?>
		<div class="modal fade" id="ModalEditPasien<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalEditPasienLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="panel">
						<div class="panel-heading">
							<div class="modal-header">
								<h3 class="modal-title" id="ModalEditPasienLabel">Edit Warga</h3>
							</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<form class="form-horizontal" action="<?= base_url('rt3/ubah_periksa'); ?>" method="post" enctype="multipart/form-data">
										<div class="modal-body">

											<input type="hidden" name="id" value="<?= $p['id']; ?> ">

											<div class="form-group">
												<label for="inputpasien">Nama</label>
												<input type="text" class="form-control" id="inputpasien" name="nama_warga" value="<?= $p['nama_warga']; ?> " autocomplete="off" required readonly>
											</div>

											<div class="form-group">
												<label for="inputpasien">Sistol</label>
												<input type="text" class="form-control" id="alamat" name="sistol" value="<?= $p['sistol']; ?>" autocomplete="off" required>
											</div>

											<div class=" form-group">
												<label for="inputpasien">Diastol</label>
												<input type="text" class="form-control" id="no_rekam" name="diastol" value="<?= $p['diastol']; ?> " autocomplete="off" required>
											</div>
											<div class=" form-group">
												<label for="inputpasien">Gula Darah</label>
												<input type="text" class="form-control" id="no_rekam" name="gula_darah" value="<?= $p['gula_darah']; ?> " autocomplete="off" required>
											</div>

											<div class="form-group">
												<label for="inputpasien">Kategori Diabetes</label>
												<input type="text" class="form-control" id="no_rekam" name="kategori_dm" value="<?= $p['kategori_dm']; ?> " autocomplete="off" required readonly>
											</div>
											<div class="form-group">
												<label for="inputpasien">Kategori Hipertensi</label>
												<input type="text" class="form-control" id="no_rekam" name="kategori" value="<?= $p['kategori']; ?> " autocomplete="off" required readonly>
											</div>

											<div class="form-group">
												<label for="inputobat">Tanggal Periksa</label>
												<input type="text" name="tanggal_periksa" class="form-control pull-right datepicker" id="datepicker" autocomplete="off" required>
											</div>
										</div>

								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Ubah</button>
								</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php endforeach; ?>
<!--END EDIT PASIEN-->

<!--HAPUS SATUAN-->
<?php foreach ($rt3_byNama->result_array() as $p) : ?>
	<div class="modal fade" id="ModalHapusPasien<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalHapusPasienLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="panel">
					<div class="panel-heading">
						<div class="modal-header">
							<h3 class="modal-title" id="ModalHapusPasienLabel">Hapus Pasien</h3>
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form class="form-horizontal" action="<?php echo base_url('rt3/hapus_periksa'); ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										<input type="hidden" name="id" value="<?= $p['id']; ?>" />
										<p>Menghapus pasien dapat <strong>menghapus</strong> data yang bersangkutan</p>
										<p>Apakah Anda yakin mau menghapus ? <b><?= $p['nama_warga']; ?></b> ?</p>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary">Hapus</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!--END HAPUS SATUAN-->

<!-- tinggi -->
<div class="modal fade" id="ModalKategoriTinggi" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriTinggi" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="panel">
				<div class="panel-heading">
					<div class="modal-header">
						<h3 class="modal-title" id="ModalKategoriTinggi">Diit Hipertensi</h3>
					</div>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="modal-body" style="margin-top: -30px;">
								<p>
									<p><b>
											<h4>Rendah Garam I </h4>
										</b></p>
								</p>
								<p>Diberikan untuk pasien dengan hipertensi berat (180/110mmhg), Dalam pengolahan makanan tidak ditambahkan garam dapur. Hindari mengkonsumsi bahan makanan yang tinggi kadar natriumnya seperti:
								</p>
								<ol>
									<li>Sumber hidrat arang yang diantaranya biscuit, krakers soda, krakers Graham, kue-kue, roti bakar, roti coklat, roti kismis, dan roti susu.</li><br>
									<li>Sumber protein hewani yang diantaranya daging kornet, daging anak sapi, daging bebek, daging domba, ginjal, ham, hati babi, hati sapi, ikan sarden, ikan tongkol, keju, susu.</li>
								</ol>

								<br>

								<p>
									<p><b>
											<h4>Olahraga untuk pasien hipertensi </h4>
										</b></p>
								</p>
								<p>Dianjurkan berolahraga, dapat berupa jalan, lari, jogging, bersepeda selama 20-25 menit dengan frekuensi 3-5 kali per minggu. Cukup istirahat (6-8 jam) dan megendalikan istirahat penting untuk penderita hipertensi.
								</p>
								<br>
								<p><b>
										<h4>Pola Makan </h4>
									</b></p>

								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th style=" text-align:center;">No</th>
												<th style=" text-align:center;">Pagi</th>
												<th style=" text-align:center;">Siang</th>
												<th style=" text-align:center;">Malam</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Telur bumbu balado</li>
														<li>Tumis buncis</li>
														<li>Jam 10.00 (Selingan) </li>
														<li>Jus wortel</li><br>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan pepes</li>
														<li>Sambal goreng kering tempe</li>
														<li>Sayur bening bayam</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ayam bakar</li>
														<li>Oseng-oseng tahu dan cabe hijau</li>
														<li>Cah sayuran</li>
														<li>Buah Jeruk manis</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Oseng-oseng tahu bihun</li>
														<li>Sayur bening katuk</li>
														<li>Jam 10.00 (Selingan)</li>
														<li>Jus Tomat</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Tumis terong/terong bakar</li>
														<li>Tahu/tempe goreng tanpa garam</li>
														<li>Buah Pisang</li>

													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan/telur goreng tanpa garam</li>
														<li>Cah kacang panjang</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
											</tr>


										</tbody>
									</table>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end tinggi -->

<!-- sedang -->
<div class="modal fade" id="ModalKategoriSedang" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriSedang" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="panel">
				<div class="panel-heading">
					<div class="modal-header">
						<h3 class="modal-title" id="ModalKategoriSedang">Diit Hipertensi</h3>
					</div>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="modal-body" style="margin-top: -30px;">
								<p><b>
										<h4>Rendah Garam II </h4>
									</b></p>
								<p>Diberikan untuk pasien dengan hpertensi ringan (160-179/100-110mmhg).
									Dalam pengolahan makanan boleh menggunakan ½ sdt garam (2 gram).
									Hindari/batasi konsumsi bahan makanan seperti:
								</p>

								<ol>
									<li>Makanan yang memiliki kadar lemak jenuh yang tinggi, seperti otak, ginjal, paru, minyak kelapa, gajih, margarine,mentega, keju mayonnaise, sumber protein hewani yang tinggi kolesterol seperti daging merah sapi atau kambing, kuning telur, dan kulit ayam.</li><br>
									<li>Makanan yang diolah dengan menggunakan garam natrium, seperti biskuit, kreker, keripik, dan makanan kering yang asin.</li>
									<li>Makanan yang diawetkan, seperti dendeng, asinan sayur atau buah, abon, ikan asin, pindang, udang kering, telur asin, selai kacang.</li>
									<li>Makanan dan minuman dalam kaleng, seperti sarden, sosis, korned, sayuran serta buah-buahan kaleng, dan soft drink.</li>
									<li>Bumbu-bumbu seperti kecap, maggi, terasi, saus tomat, saus sambal, tauco, serta bumbu penyedap lain yang pada umumnya mengandung garam natrium dan alkohol dan makanan yang mengandung alkohol seperti durian dan tape..</li>
								</ol>
								<br>

								<p>
									<p><b>
											<h4>Olahraga untuk pasien hipertensi </h4>
										</b></p>
								</p>
								<p>Dianjurkan berolahraga, dapat berupa jalan, lari, jogging, bersepeda selama 20-25 menit dengan frekuensi 3-5 kali per minggu. Cukup istirahat (6-8 jam) dan megendalikan istirahat penting untuk penderita hipertensi.
								</p>

								<p><b>
										<h4>Pola Makan </h4>
									</b></p>

								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th style=" text-align:center;">No</th>
												<th style=" text-align:center;">Pagi</th>
												<th style=" text-align:center;">Siang</th>
												<th style=" text-align:center;">Malam</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Telur bumbu balado</li>
														<li>Tumis buncis</li>
														<li>Jam 10.00 (Selingan) </li>
														<li>Jus wortel</li><br>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan pepes</li>
														<li>Sambal goreng kering tempe</li>
														<li>Sayur bening bayam</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ayam bakar</li>
														<li>Oseng-oseng tahu dan cabe hijau</li>
														<li>Cah sayuran</li>
														<li>Buah Jeruk manis</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Oseng-oseng tahu bihun</li>
														<li>Sayur bening katuk</li>
														<li>Jam 10.00 (Selingan)</li>
														<li>Jus Tomat</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Tumis terong/terong bakar</li>
														<li>Tahu/tempe goreng tanpa garam</li>
														<li>Buah Pisang</li>

													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan/telur goreng tanpa garam</li>
														<li>Cah kacang panjang</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
											</tr>


										</tbody>
									</table>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end sedang -->

<!-- rendah -->
<div class="modal fade" id="ModalKategoriRingan" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriRingan" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="panel">
				<div class="panel-heading">
					<div class="modal-header">
						<h3 class="modal-title" id="ModalKategoriRingan">Diit Hipertensi</h3>
					</div>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="modal-body" style="margin-top: -30px;">
								<p>
									<p><b>
											<h4>Rendah Garam III </h4>
										</b></p>
								</p>
								<p>Diberikan untuk pasien hipertensi ringan (140-160/90-99mmhg).
									Dalam pengolahan makanan boleh menggunakan 1 sdt garam (4 gram)
									Hindari/batasi konsumsi bahan makanan seperti:
								</p>

								<ol>
									<li>Makanan yang memiliki kadar lemak jenuh yang tinggi, seperti otak, ginjal, paru, minyak kelapa, gajih, margarine,mentega, keju mayonnaise, sumber protein hewani yang tinggi kolesterol seperti daging merah sapi atau kambing, kuning telur, dan kulit ayam.</li><br>
									<li>Makanan yang diolah dengan menggunakan garam natrium, seperti biskuit, kreker, keripik, dan makanan kering yang asin.</li>
									<li>Makanan yang diawetkan, seperti dendeng, asinan sayur atau buah, abon, ikan asin, pindang, udang kering, telur asin, selai kacang.</li>
									<li>Makanan dan minuman dalam kaleng, seperti sarden, sosis, korned, sayuran serta buah-buahan kaleng, dan soft drink.</li>
									<li>Bumbu-bumbu seperti kecap, maggi, terasi, saus tomat, saus sambal, tauco, serta bumbu penyedap lain yang pada umumnya mengandung garam natrium dan alkohol dan makanan yang mengandung alkohol seperti durian dan tape..</li>
								</ol>
								<br>

								<p>
									<p><b>
											<h4>Olahraga untuk pasien hipertensi </h4>
										</b></p>
								</p>
								<p>Dianjurkan berolahraga, dapat berupa jalan, lari, jogging, bersepeda selama 20-25 menit dengan frekuensi 3-5 kali per minggu. Cukup istirahat (6-8 jam) dan megendalikan istirahat penting untuk penderita hipertensi.
								</p>

								<p><b>
										<h4>Pola Makan </h4>
									</b></p>
								s
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th style=" text-align:center;">No</th>
												<th style=" text-align:center;">Pagi</th>
												<th style=" text-align:center;">Siang</th>
												<th style=" text-align:center;">Malam</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Telur bumbu balado</li>
														<li>Tumis buncis</li>
														<li>Jam 10.00 (Selingan) </li>
														<li>Jus wortel</li><br>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan pepes</li>
														<li>Sambal goreng kering tempe</li>
														<li>Sayur bening bayam</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ayam bakar</li>
														<li>Oseng-oseng tahu dan cabe hijau</li>
														<li>Cah sayuran</li>
														<li>Buah Jeruk manis</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Oseng-oseng tahu bihun</li>
														<li>Sayur bening katuk</li>
														<li>Jam 10.00 (Selingan)</li>
														<li>Jus Tomat</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Tumis terong/terong bakar</li>
														<li>Tahu/tempe goreng tanpa garam</li>
														<li>Buah Pisang</li>

													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan/telur goreng tanpa garam</li>
														<li>Cah kacang panjang</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- end rendah -->

<!-- Pra Hipertensi -->
<div class="modal fade" id="ModalKategoriPraHipertensi" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriPraHipertensi" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="panel">
				<div class="panel-heading">
					<div class="modal-header">
						<h3 class="modal-title" id="ModalKategoriPraHipertensi">Diit Hipertensi</h3>
					</div>
				</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<div class="modal-body" style="margin-top: -30px;">
								<p>
									<p><b>
											<h4>Rendah Garam III </h4>
										</b></p>
								</p>
								<p>Diberikan untuk pasien hipertensi ringan (140-160/90-99mmhg).
									Dalam pengolahan makanan boleh menggunakan 1 sdt garam (4 gram)
									Hindari/batasi konsumsi bahan makanan seperti:
								</p>

								<ol>
									<li>Makanan yang memiliki kadar lemak jenuh yang tinggi, seperti otak, ginjal, paru, minyak kelapa, gajih, margarine,mentega, keju mayonnaise, sumber protein hewani yang tinggi kolesterol seperti daging merah sapi atau kambing, kuning telur, dan kulit ayam.</li><br>
									<li>Makanan yang diolah dengan menggunakan garam natrium, seperti biskuit, kreker, keripik, dan makanan kering yang asin.</li>
									<li>Makanan yang diawetkan, seperti dendeng, asinan sayur atau buah, abon, ikan asin, pindang, udang kering, telur asin, selai kacang.</li>
									<li>Makanan dan minuman dalam kaleng, seperti sarden, sosis, korned, sayuran serta buah-buahan kaleng, dan soft drink.</li>
									<li>Bumbu-bumbu seperti kecap, maggi, terasi, saus tomat, saus sambal, tauco, serta bumbu penyedap lain yang pada umumnya mengandung garam natrium dan alkohol dan makanan yang mengandung alkohol seperti durian dan tape..</li>
								</ol>
								<br>

								<p>
									<p><b>
											<h4>Olahraga untuk pasien hipertensi </h4>
										</b></p>
								</p>
								<p>Dianjurkan berolahraga, dapat berupa jalan, lari, jogging, bersepeda selama 20-25 menit dengan frekuensi 3-5 kali per minggu. Cukup istirahat (6-8 jam) dan megendalikan istirahat penting untuk penderita hipertensi.
								</p>
								<br>
								<p><b>
										<h4>Pola Makan </h4>
									</b></p>

								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th style=" text-align:center;">No</th>
												<th style=" text-align:center;">Pagi</th>
												<th style=" text-align:center;">Siang</th>
												<th style=" text-align:center;">Malam</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Telur bumbu balado</li>
														<li>Tumis buncis</li>
														<li>Jam 10.00 (Selingan) </li>
														<li>Jus wortel</li><br>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan pepes</li>
														<li>Sambal goreng kering tempe</li>
														<li>Sayur bening bayam</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ayam bakar</li>
														<li>Oseng-oseng tahu dan cabe hijau</li>
														<li>Cah sayuran</li>
														<li>Buah Jeruk manis</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Oseng-oseng tahu bihun</li>
														<li>Sayur bening katuk</li>
														<li>Jam 10.00 (Selingan)</li>
														<li>Jus Tomat</li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Tumis terong/terong bakar</li>
														<li>Tahu/tempe goreng tanpa garam</li>
														<li>Buah Pisang</li>

													</ul>
												</td>
												<td>
													<ul>
														<li>Nasi</li>
														<li>Ikan/telur goreng tanpa garam</li>
														<li>Cah kacang panjang</li>
														<li>Buah Pepaya</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end Pra Hipertensi -->



<!-- tinggi -->
<?php foreach ($rt3_byNama->result_array() as $p) : ?>
	<div class="modal fade" id="ModalKategoriTinggi<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriTinggi" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="panel">
					<div class="panel-heading">
						<div class="modal-header">
							<h3 class="modal-title" id="ModalKategoriTinggi">Diit Diabetes</h3>
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="modal-body" style="margin-top: -30px;">
									<p><b>
											<h4>Diabetes Tinggi</h4>
										</b></p>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th style=" text-align:center;">BAHAN MAKANAN</th>
													<th style=" text-align:center;">DIANJURKAN</th>
													<th style=" text-align:center;">DIBATASI</th>
													<th style=" text-align:center;">DIHINDARI</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>SUMBER KARBOHIDRAT</td>
													<td></td>
													<td>Semua sumber karbohidrat dibatasi: nasi, bubur, roti, mie, kentang, singkong, ubi, sagu, gandum, pasta, jagung, talas, havermout, sereal, ketan, makaroni</td>
													<td></td>
												</tr>
												<tr>
													<td>SUMBER PROTEIN HEWANI</td>
													<td>Ayam tanpa kulit, ikan, telur rendah kolesterol atau putih telur, daging tidak berlemak</td>
													<td>hewani tinggi lemak jenuh (kornet, sosis, sarden, otak, jeroan, kuning telur)</td>
													<td>Keju, abon, dendeng, susu full cream,</td>
												</tr>
												<tr>
													<td>SUMBER PROTEIN NABATI</td>
													<td>tempe, tahu, kacang hijau, kacang merah, kacang tanah, kacang kedelai</td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>SAYURAN</td>
													<td>Sayur tinggi serat: kangkung, daun kacang, oyong, ketimun, tomat, labu air, kembang kol, lobak, sawi, selada, seledri, terong</td>
													<td>bayam, buncis, daun melinjo, labu siam, daun singkong, daun k etela, jagung muda, kapri, kacang panjang, pare, wortel, daun katuk</td>
													<td></td>
												</tr>
												<tr>
													<td>BUAH-BUAHAN</td>
													<td>jeruk, apel, pepaya, jambu air, salak, belimbing (se suai kebutuhan)</td>
													<td>nanas, anggur, mangga, sirsak, pisang, alpukat, sawo, semangka, nangka masak</td>
													<td>Buah-buahan yang manis dan diawetkan: durian, nangka, alpukat, kurma, manisan buah.</td>
												</tr>
												<tr>
													<td>MINUMAN</td>
													<td></td>
													<td></td>
													<td>Minumanyang mengandung alkohol, susu kental manis, soft drink, es krim, yoghurt, susu</td>
												</tr>
												<tr>
													<td>LAIN-LAIN</td>
													<td></td>
													<td>makanan yang digoreng dan yang menggunakan santan kental, kecap, saus tir am</td>
													<td>Gula pasir, gula mer ah, gula batu, madu Makanan/ minuman yang manis: cake, kue-kue manis, dodol, tarcis, sirup, selai manis, c oklat, permen, </td>
												</tr>

											</tbody>
										</table>
									</div>

									<p><b>
											<h4>Pola Makan</h4>
										</b></p>

									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th style=" text-align:center;">Sarapan pagi (07.00)</th>
													<th style=" text-align:center;">Snack pagi (10.00)</th>
													<th style=" text-align:center;">Makan siang (13.00)</th>
													<th style=" text-align:center;">Snack siang (15.00)</th>
													<th style=" text-align:center;">Makan malam (18.00)</th>
													<th style=" text-align:center;">Snack malam (21.00)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<ul>
															<li>Nasi (1 1/2 centong)</li>
															<li>Lauk hewani (1 potong)</li>
															<li>Lauk nabati(1 potong)</li>
															<li>Sayuran(bebas)</li>
															<li>Jenis digoreng maks 2</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Buah(1 Potong)</li>

														</ul>
													</td>
													<td>
														<ul>
															<li>Nasi(2 centong)</li>
															<li>Lauk hewani(1 potong)</li>
															<li>Lauk nabati(1 potong)</li>
															<li>Sayuran(bebas)</li>
															<li>Buah(1 potong)</li>
															<li>Jenis digoreng maks 3</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Buah(1 potong)</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Nasi(2 centong)</li>
															<li>Lauk hewani(1 potong)</li>
															<li>Lauk nabati(1 potong)</li>
															<li>Sayuran(bebas)</li>
															<li>Buah(1 potong)</li>
															<li>Jenis digoreng maks 2</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Buah(1 potong)</li>
														</ul>
													</td>
											</tbody>
										</table>
									</div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end tinggi -->

	<!-- sedang -->
	<div class="modal fade" id="ModalKategoriSedang<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriSedang" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="panel">
					<div class="panel-heading">
						<div class="modal-header">
							<h3 class="modal-title" id="ModalKategoriSedang">Diabetes</h3>
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="modal-body" style="margin-top: -30px;">
									<p>
										<p><b>
												<h4>Diabetes Sedang </h4>
											</b></p>
									</p>

									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th style=" text-align:center;">BAHAN MAKANAN</th>
													<th style=" text-align:center;">DIANJURKAN</th>
													<th style=" text-align:center;">DIBATASI</th>
													<th style=" text-align:center;">DIHINDARI</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>SUMBER KARBOHIDRAT</td>
													<td></td>
													<td>Semua sumber karbohidrat dibatasi: nasi, bubur, roti, mie, kentang, singkong, ubi, sagu, gandum, pasta, jagung, talas, havermout, sereal, ketan, makaroni</td>
													<td></td>
												</tr>
												<tr>
													<td>SUMBER PROTEIN HEWANI</td>
													<td>Ayam tanpa kulit, ikan, telur rendah kolesterol atau putih telur, daging tidak berlemak</td>
													<td>hewani tinggi lemak jenuh (kornet, sosis, sarden, otak, jeroan, kuning telur)</td>
													<td>Keju, abon, dendeng, susu full cream,</td>
												</tr>
												<tr>
													<td>SUMBER PROTEIN NABATI</td>
													<td>tempe, tahu, kacang hijau, kacang merah, kacang tanah, kacang kedelai</td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>SAYURAN</td>
													<td>Sayur tinggi serat: kangkung, daun kacang, oyong, ketimun, tomat, labu air, kembang kol, lobak, sawi, selada, seledri, terong</td>
													<td>bayam, buncis, daun melinjo, labu siam, daun singkong, daun k etela, jagung muda, kapri, kacang panjang, pare, wortel, daun katuk</td>
													<td></td>
												</tr>
												<tr>
													<td>BUAH-BUAHAN</td>
													<td>jeruk, apel, pepaya, jambu air, salak, belimbing (se suai kebutuhan)</td>
													<td>nanas, anggur, mangga, sirsak, pisang, alpukat, sawo, semangka, nangka masak</td>
													<td>Buah-buahan yang manis dan diawetkan: durian, nangka, alpukat, kurma, manisan buah.</td>
												</tr>
												<tr>
													<td>MINUMAN</td>
													<td></td>
													<td></td>
													<td>Minumanyang mengandung alkohol, susu kental manis, soft drink, es krim, yoghurt, susu</td>
												</tr>
												<tr>
													<td>LAIN-LAIN</td>
													<td></td>
													<td>makanan yang digoreng dan yang menggunakan santan kental, kecap, saus tir am</td>
													<td>Gula pasir, gula mer ah, gula batu, madu Makanan/ minuman yang manis: cake, kue-kue manis, dodol, tarcis, sirup, selai manis, c oklat, permen, </td>
												</tr>

											</tbody>
										</table>
									</div>

									<p><b>
											<h4>Pola Makan</h4>
										</b></p>

									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th style=" text-align:center;">Sarapan pagi (07.00)</th>
													<th style=" text-align:center;">Snack pagi (10.00)</th>
													<th style=" text-align:center;">Makan siang (13.00)</th>
													<th style=" text-align:center;">Snack siang (15.00)</th>
													<th style=" text-align:center;">Makan malam (18.00)</th>
													<th style=" text-align:center;">Snack malam (21.00)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<ul>
															<li>Nasi (1 1/2 centong)</li>
															<li>Lauk hewani (1 potong)</li>
															<li>Lauk nabati(1 potong)</li>
															<li>Sayuran(bebas)</li>
															<li>Jenis digoreng maks 2</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Buah(1 Potong)</li>

														</ul>
													</td>
													<td>
														<ul>
															<li>Nasi(2 centong)</li>
															<li>Lauk hewani(1 potong)</li>
															<li>Lauk nabati(1 potong)</li>
															<li>Sayuran(bebas)</li>
															<li>Buah(1 potong)</li>
															<li>Jenis digoreng maks 3</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Buah(1 potong)</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Nasi(2 centong)</li>
															<li>Lauk hewani(1 potong)</li>
															<li>Lauk nabati(1 potong)</li>
															<li>Sayuran(bebas)</li>
															<li>Buah(1 potong)</li>
															<li>Jenis digoreng maks 2</li>
														</ul>
													</td>
													<td>
														<ul>
															<li>Buah(1 potong)</li>
														</ul>
													</td>
											</tbody>
										</table>
									</div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sedang -->

	<!-- rendah -->
	<div class="modal fade" id="ModalKategori<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalKategoriRingan" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="panel">
					<div class="panel-heading">
						<div class="modal-header">
							<h3 class="modal-title" id="ModalKategori">Diabetes</h3>
						</div>
					</div>

					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<div class="modal-body" style="margin-top: -30px;">
									<p>
										<p><b>
												<h4>Diabetes Rendah </h4>
											</b></p>
									</p>

									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th style=" text-align:center;">BAHAN MAKANAN</th>
													<th style=" text-align:center;">DIANJURKAN</th>
													<th style=" text-align:center;">DIBATASI</th>
													<th style=" text-align:center;">DIHINDARI</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>SUMBER KARBOHIDRAT</td>
													<td></td>
													<td>Semua sumber karbohidrat dibatasi: nasi, bubur, roti, mie, kentang, singkong, ubi, sagu, gandum, pasta, jagung, talas, havermout, sereal, ketan, makaroni</td>
													<td></td>
												</tr>
												<tr>
													<td>SUMBER PROTEIN HEWANI</td>
													<td>Ayam tanpa kulit, ikan, telur rendah kolesterol atau putih telur, daging tidak berlemak</td>
													<td>hewani tinggi lemak jenuh (kornet, sosis, sarden, otak, jeroan, kuning telur)</td>
													<td>Keju, abon, dendeng, susu full cream,</td>
												</tr>
												<tr>
													<td>SUMBER PROTEIN NABATI</td>
													<td>tempe, tahu, kacang hijau, kacang merah, kacang tanah, kacang kedelai</td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>SAYURAN</td>
													<td>Sayur tinggi serat: kangkung, daun kacang, oyong, ketimun, tomat, labu air, kembang kol, lobak, sawi, selada, seledri, terong</td>
													<td>bayam, buncis, daun melinjo, labu siam, daun singkong, daun k etela, jagung muda, kapri, kacang panjang, pare, wortel, daun katuk</td>
													<td></td>
												</tr>
												<tr>
													<td>BUAH-BUAHAN</td>
													<td>jeruk, apel, pepaya, jambu air, salak, belimbing (se suai kebutuhan)</td>
													<td>nanas, anggur, mangga, sirsak, pisang, alpukat, sawo, semangka, nangka masak</td>
													<td>Buah-buahan yang manis dan diawetkan: durian, nangka, alpukat, kurma, manisan buah.</td>
												</tr>
												<tr>
													<td>MINUMAN</td>
													<td></td>
													<td></td>
													<td>Minumanyang mengandung alkohol, susu kental manis, soft drink, es krim, yoghurt, susu</td>
												</tr>
												<tr>
													<td>LAIN-LAIN</td>
													<td></td>
													<td>makanan yang digoreng dan yang menggunakan santan kental, kecap, saus tir am</td>
													<td>Gula pasir, gula mer ah, gula batu, madu Makanan/ minuman yang manis: cake, kue-kue manis, dodol, tarcis, sirup, selai manis, c oklat, permen, </td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- end rendah -->
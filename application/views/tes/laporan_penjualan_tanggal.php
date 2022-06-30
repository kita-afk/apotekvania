


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Laporan Penjualan Pertanggal</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix">
				</div>
			</div>

			<div class="x_content">
				<!-- <?php if($this->session->flashdata('inv_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('inv_added'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?> -->

				<form action="<?=  base_url("example/cari_laporan_jual");  ?>" method="post" >
							  <label for="">Kategori</label>
							  <?php 
							 $kategoris = $this->db->query("SELECT * FROM table_cat")->result_array(); 
							  ?>
							  <select name="kategori" id="" class="form-control">
								<option value="semua">Semua</option>
								<?php foreach($kategoris as $t) : ?>
									<option value="<?=  $t['nama_kategori'];  ?>"><?=  $t['nama_kategori'];  ?></option>
									<?php endforeach ?>
							  </select>
							  <br>
							  <label for="">Waktu Mulai</label>
							  <input type="date" name="mulai" class="form-control" required>
							  <br>
							  <label for="">Waktu Akhir</label>
							  <input type="date" name="akhir" class="form-control" required>
							  <br>
							  <button type="submit" class="btn btn-primary">Cari</button>
							  <br>
							  <br>
			</form>
			<br>
			<div class="text-center">
			<h3>Laporan Penjualan</h3>
			<?php if(isset($cari)) : ?>
				<h4>Periode : <?=  date("d, F Y",strtotime($start));  ?> S/d <?=  date("d, F Y",strtotime($end));  ?></h4>
				Apotek Vanisa
				<br>
				Desa Berare-Moyo hilir
				<br>
				Sunagawa-Indonesia
				<?php endif; ?>
			</div>
			<br>
				<table id="datatable-buttonss" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>No Transaksi</th>
							<th>Tanggal</th>
							<th>Nama Barang</th>
							<th>Satuan</th>
							<th>Harga (Rp)</th>
							<th>Qty</th>
							<th>Total</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach($result as $i){
							$kode = $i->nama_obat;
							$tbl_med = $this->db->query("SELECT * FROM table_med WHERE nama_obat = '$kode'")->row_array();
							?>
						<tr>
							<td><?=  $no++;  ?></td>
							<td><?=  $i->ref;  ?></td>
							<td><?php echo date('j F Y',strtotime($i->tgl_beli)) ?></td>
							<td><?=  $i->nama_obat;  ?></td>
							<td>
								<?php if($tbl_med) : ?>
									<?php echo $tbl_med['unit'] ?>
									<?php else: ?>
										Kosong
										<?php endif; ?>
							</td>
							<td>Rp <?php echo number_format($i->harga_jual) ?></td>
							<td><?php echo $i->banyak ?></td>	
							<td>Rp <?php echo number_format($i->subtotal) ?></td>
							<td>Sudah</td>
							
						</tr>

						<?php } ?>
					</tbody>

				</table>
		</div>
	</div>
	</div>

</div>



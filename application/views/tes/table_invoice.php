


<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Lihat Penjualan</h2>
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
				<?php if($this->session->flashdata('inv_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('inv_added'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_invoice') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Penjualan </button></a>
				<br>
				<form action="<?=  base_url("example/cari_penjualan");  ?>" method="POST">
				<label for="">Kategori</label>
				<select name="kategori" id="" class="form-control" required>
					<option value="semua">Semua</option>
					<?php 
				   $kategori = $this->db->query("SELECt * FROM table_cat")->result_array(); 
				   foreach($kategori as $r) :
					?>
					<option value="<?=  $r['nama_kategori'];  ?>"><?=  $r['nama_kategori'];  ?></option>
					<?php endforeach; ?>
				</select>
				<br>
				<label for="">Tanggal</label>
				<input type="date" name="waktu" required class="form-control">
				<br>
				<button type="submit" class="btn btn-primary">Cari</button>
			</form>
				<br>
				<div class="text-center">
			<h3>Laporan Penjualan</h3>
			<?php if(isset($cari)) : ?>
				<h4>Periode : <?=  date("d, F Y",strtotime($start));  ?></h4>
				Apotek Vanisa
				<br>
				Desa Berare-Moyo hilir
				<br>
				Sunagawa-Indonesia
				<?php endif; ?>
				</div>
				<br>
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th>No</th>
							<th>No Transaksi</th>
							<th>Tanggal Transaksi</th>
							<th>Nama Barang</th>
							<th>Satuan</th>
							<th>Harga (Rp)</th>
							<th>Qty</th>
							<th>Total</th>
							<th>Supplier</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0; foreach($table_invoice as $p){ 
							$id = $p->nama_obat;
							$med = $this->db->query("SELECT * FROM table_med WHERE nama_obat = '$id'")->row_array();
							?>
						<tr>
							<td><?=  $no++;  ?></td>
							<td><?=  $p->ref;  ?></td>
							<td><?php echo date('j F Y',strtotime($p->tgl_beli)) ?></td>
							<td><?php echo $p->nama_obat ?></td>
							<td>
								<?php if($med) : ?>
									<?php echo $med['unit'] ?>
									<?php else: ?>
										Kosong
										<?php endif; ?>
							</td>
							<td>Rp. <?=  number_format($p->harga_jual)  ?></td>
							<td><?php echo $p->banyak ?></td>
							<td>Rp. <?=  number_format($p->subtotal)  ?></td>
							<td>
								<?php if($med) : ?>
									<?php echo $med['nama_pemasok'] ?>
									<?php else: ?>
										Kosong
										<?php endif; ?>
							</td>
							<td style=" text-align: center;">
								<?php echo anchor('example/invoice_page/'.$p->ref, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-newspaper-o"></span></button>');?>
								
								<?php echo anchor('example/remove_inv/'.$p->ref, '<button class="btn btn-danger btn-xs" type="button"><span class="fa fa-trash"></span></button>');?>


					         </td>				
						</tr>

						<?php } ?>
					</tbody>

				</table>
		</div>
	</div>
	</div>

</div>



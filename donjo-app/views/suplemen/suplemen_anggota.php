<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * View untuk modul suplemen
 *
 * donjo-app/views/suplemen/suplemen_anggota.php,
 *
 */

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */
?>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Rincian Data Suplemen</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('suplemen')?>"> Data Suplemen</a></li>
			<li class="active">Rincian Data Suplemen</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="box box-info">
			<div class="box-header with-border">
				<a href="<?= site_url("suplemen/form_terdata/".$suplemen['id'])?>" title="Tambah Data Warga" class="btn btn-social btn-flat bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah Warga Terdata</a>
				<a href="<?= site_url("suplemen/dialog_daftar/$suplemen[id]/cetak")?>" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Data Suplemen <?= ucwords($suplemen[nama]); ?> "><i class="fa fa-print "></i> Cetak</a>
				<a href="<?= site_url("suplemen/dialog_daftar/$suplemen[id]/unduh")?>" class="btn btn-social btn-flat bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Data Suplemen <?= ucwords($suplemen[nama]); ?> "><i class="fa fa-download "></i> Unduh</a>
				<a href="<?= site_url("suplemen")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Data Suplemen">
					<i class="fa fa-arrow-circle-left "></i>Kembali ke Data Suplemen
				</a>
			</div>
			<div class="box-body">
				<?php $this->load->view('suplemen/rincian'); ?>

				<h5><b>Daftar Anggota</b></h5>
				<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<form id="mainform" name="mainform" action="" method="post">
						<div class="table-responsive">
							<table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
								<thead class="bg-gray disabled color-palette">
									<tr>
										<th>No</th>
										<th>Aksi</th>
										<th><?= $suplemen["judul_terdata_nama"]?></th>
										<th><?= $suplemen["judul_terdata_info"]?></th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Jenis-kelamin</th>
										<th>Alamat</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($terdata as $key => $item): ?>
										<tr>
											<td class="padat"><?= ($key + $paging->offset + 1); ?></td>
											<td class="aksi">
												<?php if ($this->CI->cek_hak_akses('h')): ?>
													<a href="<?= site_url("suplemen/edit_terdata_form/$item[id]"); ?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Terdata" title="Ubah Terdata" class="btn btn-warning btn-flat btn-sm"><i class="fa fa-edit"></i></a>
													<a href="#" data-href="<?= site_url("suplemen/hapus_terdata/$suplemen[id]/$item[id]"); ?>" class="btn bg-maroon btn-flat btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
												<?php endif; ?>
											</td>
											<td nowrap><a href="<?= site_url("suplemen/terdata/$suplemen[sasaran]/$item[id_terdata]"); ?>" title="Daftar suplemen untuk terdata"><?= $item["terdata_nama"] ?></a></td>
											<td nowrap><a href="<?= site_url("suplemen/data_terdata/$item[id]"); ?>" title="Data terdata"><?= $item['terdata_info'];?></a></td>
											<td><?= $item["tempat_lahir"] ?></td>
											<td><?= $item["tanggal_lahir"] ?></td>
											<td><?= strtoupper($item['sex'])?></td>
											<td><?= $item["info"];?></td>
											<td width="25%"><?= $item["keterangan"];?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</form>
					<?php $this->load->view('global/paging');?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('global/confirm_delete');?>

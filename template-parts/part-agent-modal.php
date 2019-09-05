<!-- Modal -->
<div class="modal fade alp-agent-modal" id="agen-modal" tabindex="-1" role="dialog" aria-labelledby="agen-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header alp-bg-bluepurple text-center">
                <h2>Mekanesme</h2>
            </div>            
            <div class="modal-body alp-agent-mbody">
                <div class="modal-skema">
                	<h4>Skema</h4>
                	<ul>
                		<li>
                			<div class="row">
                				<div class="col-md-2">
                					<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenpemula.svg' ?>" />
                				</div>
                				<div class="col-md-10">
                					<small>Pemula: < 20 transaksi/bulan</small><br />
                					<span>Semua outlet yang belum memiliki transaksi atau transaksinya masih dibawah 20x dalam 1 bulan sebelumnya akan menjadi agen pemula di bulan berikutnya.</span>
                				</div>
                			</div>
                		</li>
                		<li>
                			<div class="row">
	                			<div class="col-md-2">
	            					<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenpejuang.svg' ?>" />
	            				</div>
	            				<div class="col-md-10">
	            					<small>Pejuang: 21-90 transaksi/bulan</small><br />
	            					<span>Outlet yang memiliki transaksi 21 - 90 kali di bulan sebelumnya, akan naik level menjadi agen pejuang di bulan berikutnya.</span>
	            				</div>
	            			</div>
                		</li>
                		<li>
                			<div class="row">
	                			<div class="col-md-2">
	            					<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenunggulan.svg' ?>" />
	            				</div>
	            				<div class="col-md-10">
	            					<small>Unggulan: 91-210 transaksi/bulan</small><br />
	            					<span>Outlet yang melakukan transaksi 91 - 210 kali di bulan sebelumnya, akan naik level menjadi agen unggulan di bulan berikutnya.</span>
	            				</div>
	            			</div>
                		</li>
                		<li>
                			<div class="row">
	                			<div class="col-md-2">
	            					<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenpejuang.svg' ?>" />
	            				</div>
	            				<div class="col-md-10">
	            					<small>Jawara: >210 transaksi/bulan</small><br />
	            					<span>Outlet yang melakukan transaksi lebih dari 210 kali di bulan sebelumnya, akan naik level menjadi agen jawara di bulan berikutnya.</span>
	            				</div>
	            			</div>
                		</li>
                	</ul>
                </div>
                <div class="modal-desc">
                	<h4>Ketentuan Pemenang</h4>
                	<ol>
                		<li>Setiap akhir bulan, akan dipilih 3 pemenang dari tiap kategori profiling</li>
						<li>Pemenang tersebut dilihat dari jumlah transaksi yang dilakukan selama satu bulan.</li>
						<li>Jika jumlah transaksi sama, maka pemenang akan ditentukan dari kontribusi revenue (Sum of Denom)</li>
                	</ol>
                </div>
                <div class="text-center">
                	<a href="" class="close" data-dismiss="modal" aria-label="Close">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
	.alp-agent-mbody {
		padding: 40px;
	}
	.alp-agent-mbody h4 {
		font-weight: 500;
		font-family: 'SourceSansPro', sans-serif;
		font-size: 32px;
	}
	.alp-agent-mbody ol {
		padding-left: 15px;
	}
	.alp-agent-mbody ul {
		padding: 0;
		margin: 0;
		list-style: none;
	}
	.alp-agent-mbody ul li {
		border-bottom: 1px solid #e3e3e3;
		padding: 15px 0;
	}
	.alp-agent-modal .modal-dialog {
	    margin: 3.75rem auto;
	}
	.alp-agent-modal .modal-header h2 {
		color: #fff;
		margin: 0 auto;
	}
	.alp-agent-mbody .modal-desc {
		margin-top: 20px;
	}
</style>
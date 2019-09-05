<!-- Agent Level -->
<div class="alp-agentlvl alp-section">
	<div class="container">
    	
    	<div class="col-12 alp-row text-center">
    		<div>
    			<h2><?php echo $section['title'] ?></h2>
    			<p><?php echo $section['description'] ?></p>
    		</div>
    	</div>
    	<div class="alp-dfd">
			<div class="alp-agentlvl__table">
				<table>
					<thead>
						<tr>
							<th style="width: 12%">Level Agen</th>
							<td style="width: 22%">
								<div class="alp-agentlvl__pemula">
									<span class="alp-agentlvl__label">Agen Pemula</span>
									<span class="alp-agentlvl__icon">
										<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenpemula.svg' ?>" />
									</span>
								</div>
							</td>
							<td style="width: 22%">
								<div class="alp-agentlvl__pejuang">
									<span class="alp-agentlvl__label">Agen Pejuang</span>
									<span class="alp-agentlvl__icon">
										<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenpejuang.svg' ?>" />
									</span>
								</div>
							</td>
							<td style="width: 22%">
								<div class="alp-agentlvl__unggulan">
									<span class="alp-agentlvl__label">Agen Unggulan</span>
									<span class="alp-agentlvl__icon">
										<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenunggulan.svg' ?>" />
									</span>
								</div>
							</td>
							<td style="width: 22%">
								<div class="alp-agentlvl__jawara">
									<span class="alp-agentlvl__label">Agen Jawara</span>
									<span class="alp-agentlvl__icon">
										<img class="svg" src="<?php echo get_template_directory_uri() . '/assets/img/ic_agenjawara.svg' ?>" />
									</span>
								</div>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th style="width: 12%">Transaksi</th>
							<td style="width: 22%"><?php echo $section['agen_pemula']['transaction'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_pejuang']['transaction'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_unggulan']['transaction'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_jawara']['transaction'] ?></td>
						</tr>
						<tr>
							<th style="width: 12%">Juara 1</th>
							<td style="width: 22%" rowspan="3" class="p-0">
								<div class="grey-box">
									<?php echo $section['agen_pemula']['description']  ?>
								</div>
							</td>
							<td style="width: 22%"><?php echo $section['agen_pejuang']['juara_1'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_unggulan']['juara_1'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_jawara']['juara_1'] ?></td>
						</tr>
						<tr>
							<th style="width: 12%">Juara 2</th>
							<td style="width: 22%"><?php echo $section['agen_pejuang']['juara_2'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_unggulan']['juara_2'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_jawara']['juara_2'] ?></td>
						</tr>
						<tr>
							<th style="width: 12%">Juara 3</th>
							<td style="width: 22%"><?php echo $section['agen_pejuang']['juara_3'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_unggulan']['juara_3'] ?></td>
							<td style="width: 22%"><?php echo $section['agen_jawara']['juara_3'] ?></td>
						</tr>
					</tbody>
				</table>
				
				<?php echo $section['footer_desc'] ?>
			</div>
		</div>
	</div>
</div>

<?php  ?>
<style type="text/css">
	.alp-agentlvl {
	    padding: 40px 0;
	}
	.alp-agentlvl:after {
	    content: "";
	    display: block;
	    position: absolute;
	    background-color: #ecf2fc;
	    width: 100%;
	    height: 80%;
	    top: 0;
	    z-index: -1;
	}
	.alp-agentlvl__table {
		margin-top: 80px;
		background-color: #fff;
		border-radius: 9px;
		padding: 35px;
		-webkit-box-shadow: 3px 2px 8px 0px rgba(35,132,221,0.10);
		-moz-box-shadow: 3px 2px 8px 0px rgba(35,132,221,0.10);
		box-shadow: 3px 2px 8px 0px rgba(35,132,221,0.10);
	}
	.alp-agentlvl__table thead th,
	.alp-agentlvl__table thead td {
		position: relative;
		text-align: center;
		font-weight: 700;
	}
	.alp-agentlvl__table tbody tr{
		border-bottom: 1px solid #E8E8E8;
	}
	.alp-agentlvl__table th,
	.alp-agentlvl__table td {
		padding: 23px 15px;
		font-size: 15px;
	}
	.alp-agentlvl__table th {
		padding-left: 0;
	}
	.alp-agentlvl__icon {
		position: absolute;
	    left: 0;
	    right: 0;
	    top: -70px;
	}
	.alp-agentlvl__icon:after{
		display: block;
		content: "";
		width: 40px;
		height: 2px;
		border-radius: 4px;
		margin:0 auto;
		background: rgba(23,166,243,1);
		background: -moz-linear-gradient(left, rgba(23,166,243,1) 0%, rgba(50,133,222,1) 51%, rgba(135,129,226,1) 100%);
		background: -webkit-gradient(left top, right top, color-stop(0%, rgba(23,166,243,1)), color-stop(51%, rgba(50,133,222,1)), color-stop(100%, rgba(135,129,226,1)));
		background: -webkit-linear-gradient(left, rgba(23,166,243,1) 0%, rgba(50,133,222,1) 51%, rgba(135,129,226,1) 100%);
		background: -o-linear-gradient(left, rgba(23,166,243,1) 0%, rgba(50,133,222,1) 51%, rgba(135,129,226,1) 100%);
		background: -ms-linear-gradient(left, rgba(23,166,243,1) 0%, rgba(50,133,222,1) 51%, rgba(135,129,226,1) 100%);
		background: linear-gradient(to right, rgba(23,166,243,1) 0%, rgba(50,133,222,1) 51%, rgba(135,129,226,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#17a6f3', endColorstr='#8781e2', GradientType=1 );
	}
	.grey-box {
		background-color: #F4F4F4;
		border-radius: 8px;
		padding: 15px;
		padding: 40px;
	}

	@media (max-width: 767px) {
		.alp-agentlvl__table {
		    margin-top: 80px;
		    background-color: #fff;
		    border-radius: 9px;
		    border: 7px solid #ecf2fc;
		    padding: 20px;
		    padding-top: 100px;
		    overflow-x: auto;
		    -webkit-box-shadow: 3px 2px 8px 0px rgba(35,132,221,0.10);
		    -moz-box-shadow: 3px 2px 8px 0px rgba(35,132,221,0.10);
		    box-shadow: 3px 2px 8px 0px rgba(35,132,221,0.10);
		}
		.grey-box {
			padding: 20px;
		}
		.alp-agentlvl__table table {
			min-width: 700px;
		}
	}
</style>

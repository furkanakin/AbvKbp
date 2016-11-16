<?php
include 'set.php';
include 'header.php';
include 'sidebar-left.php';
include 'sidebar-right.php';
?>

</br>
</br>
</br>
</br>

			<div class="panel panel-flat">

				<div class="panel-heading">
					<div class="col-lg-12"><h5 class="panel-title pull-left">Menü Düzenleme</h5>
						<button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modal_menuekle">Menü Ekle</button>
						</br>
					</div>

					<div class="table">
						<table class="table datatable-reorder-state-saving">
							<thead>
								<tr>
									<th>Sıra</th>
									<th>Menü Adı</th>
									<th>Menü Url</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>

<?php
	$menusorgu=mysql_query("select * from menudb")or die("Sorgu hatasi: ".mysql_error());

		while ($menucek=mysql_fetch_assoc($menusorgu)){

			$modalid = "modal".md5(uniqid());

		?>

								<tr>
									<td><?php echo $menucek['menuid']; ?></td>
									<td><?php echo $menucek['menuisim']; ?></td>
									<td><?php echo $menucek['menulink']; ?></td>
									<td><span class="label label-success">Active</span></td>


									<td class="text-center"><button class="btn btn-success btn-md" type="submit" data-toggle="modal" data-target="#<?php echo $modalid; ?>" ><i class="icon-pencil6"></i> DÜZENLE</button></td>


													<td class="text-center"><form class="form-horizontal" action="islem.php" method="POST">
													<button class="btn btn-danger btn-md" type="submit" name="menuid" value="<?php echo $menucek['menuid']; ?>" ><i class="icon-trash"></i> KALDIR</button>
													</form></td>
								</tr>

															<!-- MENÜ DÜZENLE MODAL-->
									<div id="<?php echo $modalid; ?>" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="panel-title">Menü Düzenleme Sayfası</h4>
												</div>
												<div class="panel-body no-padding-bottom">
													<form class="form-horizontal" action="islem.php" method="POST">
														<fieldset>
															<div class="form-group form-group-xlg">
																<label class="control-label col-lg-6" >Menü Adı</label>
																<div class="col-lg-6">
																	<input class="form-control" type="text" name="menuisim" placeholder="Lütfen menü adını giriniz..." value="<?php echo $menucek['menuisim']; ?>">
																</div>

															</div>
																<div class="form-group form-group-xlg">
																	<label class="control-label col-lg-6">Menü URL</label>
																		<div class="col-lg-6">
																			<input class="form-control" type="text" name="menulink" placeholder="Lütfen menü adresini giriniz..." value="<?php echo $menucek['menulink']; ?>">
																		</div>

																</div>
																<div class="form-group form-group-xlg">
																	<label class="control-label col-lg-6">Menü Sıra</label>
																	<div class="col-lg-6">
																		<input class="form-control" type="text" name="menusira" placeholder="Lütfen menü sırasını giriniz..." value="<?php echo $menucek['menuid']; ?>">
																	</div>

																</div>
																</br>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
																	<input type="submit" name="menukaydet" class="btn btn-success btn-sm pull-right" value="Menü Kaydet">
																</div>
														</fieldset>
													</form>
												</div>

											</div>
										</div>
									</div>

								<?php } ?>


							</tbody>

						</table>
						<hr>
						</br>
						</br>
					</div>
				</div>


		<!-- MENÜ EKLE MODAL-->
		<div id="modal_menuekle" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="panel-title">Menü Ekleme Sayfası</h4>
					</div>
					<div class="panel-body no-padding-bottom">
						<form class="form-horizontal" action="islem.php" method="POST">
							<fieldset>
								<div class="form-group form-group-xlg">
									<label class="control-label col-lg-6" >Menü Adı</label>
									<div class="col-lg-6">
										<input class="form-control" type="text" name="menuisim" placeholder="Lütfen menü adını giriniz...">
									</div>

								</div>
									<div class="form-group form-group-xlg">
										<label class="control-label col-lg-6">Menü URL</label>
											<div class="col-lg-6">
												<input class="form-control" type="text" name="menulink" placeholder="Lütfen menü adresini giriniz...">
											</div>

									</div>
									<div class="form-group form-group-xlg">
										<label class="control-label col-lg-6">Menü Sıra</label>
										<div class="col-lg-6">
											<input class="form-control" type="text" name="menusira" placeholder="Lütfen menü sırasını giriniz...">
										</div>

									</div>
									</br>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
										<input type="submit" name="menukaydet" class="btn btn-success btn-sm pull-right" value="Menü Kaydet">
									</div>
							</fieldset>
						</form>
					</div>

				</div>
			</div>
		</div>



<?php include 'footer.php';?>

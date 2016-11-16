
<?php 
include 'set.php';
include 'header.php';
include 'sidebar-left.php';
include 'sidebar-right.php';?>

</br>
</br>
</br>
</br>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h4 class="panel-title">Menü Ekleme Sayfası</h4>				
					</div>							
					<div class="panel-body no-padding-bottom">
						<form class="form-horizontal" action="islem.php" method="POST">
							<fieldset>
								<div class="form-group form-group-xlg">
									<label class="control-label col-lg-4" >Menü Adı</label>
									<div class="col-lg-4">
										<input class="form-control" type="text" name="menuisim" placeholder="Lütfen menü adını giriniz...">
									</div>
													
								</div>
									<div class="form-group form-group-xlg">
										<label class="control-label col-lg-4">Menü URL</label>
											<div class="col-lg-4">
												<input class="form-control" type="text" name="menulink" placeholder="Lütfen menü adresini giriniz...">
											</div>
													
									</div>
									<div class="form-group form-group-xlg">
										<label class="control-label col-lg-4">Menü Sıra</label>
										<div class="col-lg-4">
											<input class="form-control" type="text" name="menusira" placeholder="Lütfen menü sırasını giriniz...">
										</div>
													
									</div>
									<div class="col-lg-12">
										<input type="submit" name="menukaydet" class="btn btn-success btn-sm pull-right" value="Menü Kaydet">
									</br>
									</div>
									</br>
							</fieldset>
						</form>
					</div>
					</br>
				</div>
			</div>
		</div>
		
		
		
		
						
						
<?php include 'footer.php';?>
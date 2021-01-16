<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="main-content-label mg-b-5">
					<?php echo e(__('Veuiller saisir les données de l\'utilisateur')); ?>

				</div>
				<p style="color:red" class="mg-b-20">
					<?php echo e(__('Note: Tous les champs sont obligatoires')); ?>

				</p>
				<div class="pd-30 pd-sm-40 bg-gray-200">
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
							<?php echo e(__('Compte N°')); ?>

						</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input disabled="" value="0011" class="form-control" placeholder="<?php echo e(__('Saisir le numéro du compte')); ?>" type="text">
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								<?php echo e(__('Propriétaire du compte ?')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<div class="row mg-t-10">
									<div class="col-lg-3">
										<label class="rdiobox">
											<input name="rdio" type="radio">
											<span>
												<?php echo e(__('Oui')); ?>

											</span>
										</label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="rdiobox">
											<input checked="" name="rdio" type="radio">
											<span>
												<?php echo e(__('Non')); ?>

											</span>
										</label>
									</div>

								</div>
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								<?php echo e(__('Prénom')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="<?php echo e(__('Saisir son prémon')); ?>" type="text">
						</div>
					</div>

					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0"><?php echo e(__('Nom')); ?></label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="<?php echo e(__('Saisir son nom')); ?>" type="text">
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								<?php echo e(__('Téléphone')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="<?php echo e(__('Saisir son téléphone')); ?>" type="text">
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								
								<?php echo e(__('Email')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="<?php echo e(__('Saisir son adresse email')); ?>" type="email">
						</div>
					</div>


					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								
								<?php echo e(__('Role(s)')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							
							<div class="row row-sm">
								<div class="col-lg-6 mg-b-20 mg-lg-b-0">
									
									<select class="form-control select2" multiple="multiple">
										<option value="Firefox">
											role1
										</option>
										<option value="Chrome">
											role2
										</option>
										<option value="Safari">
											role3
										</option>
										<option value="Firefox">
											role4
										</option>
										<option value="Chrome">
											role5
										</option>
										<option value="Safari">
											role6
										</option>
										
									</select>
								</div>			
							</div>
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0">
								<?php echo e(__('Mot de passe(par défaut)')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="<?php echo e(__('Saisir un mot de passe')); ?>" type="password">
						</div>
					</div>
					<div class="row row-xs align-items-center mg-b-20">
						<div class="col-md-4">
							<label class="form-label mg-b-0"><?php echo e(__('Comfirmer')); ?>

							</label>
						</div>
						<div class="col-md-8 mg-t-5 mg-md-t-0">
							<input class="form-control" placeholder="<?php echo e(__('Confirmer le mot de passe')); ?>" type="password">
						</div>
					</div>
					<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">
						<?php echo e(__('Sauvegarder')); ?>

					</button>
					
					<a href="<?php echo e(route('accounts',app()->getLocale())); ?>" class="btn btn-dark pd-x-30 mg-t-5"><?php echo e(__('Annuler')); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/admin/uncod/users/add/form.blade.php ENDPATH**/ ?>
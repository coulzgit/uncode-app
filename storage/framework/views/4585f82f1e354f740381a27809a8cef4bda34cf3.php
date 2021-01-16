<div style="display: flex;justify-content: center;" class="row row-sm">
	<a href="<?php echo e(route('accounts',app()->getLocale())); ?>">
		<i class="ti ti-arrow-left"></i>
		Retour
	</a>
</div>
<!-- GENERAL INFO -->
<div class="row row-sm">
	<div class="col-md-12 mg-md-t-0">
		<div class="card">
			<div class="card-header tx-medium bd-0 tx-white bg-primary">
				GENERAL
			</div>
			<div class="card-body ">
				<div class="row row-sm">
					<!-- LEFT -->
					<div style="border: 1px solid #eee;border-radius: 5px;margin-right: 20px;padding: 20px" class="col-md-5">
						<h6 class="price">
							N° du compte:
							<span style="color: #adadad" class="h6 ml-2"><?php echo e($account['account']->code); ?></span>
						</h6>
						<h6 class="price">
							Date de création:
							<span style="color: #adadad" class="h6 ml-2"><?php echo e($account['account']->created_at); ?></span>
						</h6>
						<h6 class="price">
                            Etat du compte:
                             <?php if($account['account']->statut==0): ?>
                             <span style="color: #adadad" class="h6 ml-2"><?php echo e(__('désactivé')); ?>

                            </span>
                                <?php else: ?>
                                    <span style="color: #adadad" class="h6 ml-2"><?php echo e(__('actif')); ?></span>
                            <?php endif; ?>
						</h6>
						<h6 class="price">
							Licence:
							<span style="color: #adadad" class="h6 ml-2"><?php echo e($account['licence']->nom); ?></span>
						</h6>
					</div>
					<!-- RIGHT -->
					<div style="border: 1px solid #eee;border-radius: 5px;padding: 20px"  class="col-md-6">
						<h6 class="price">
							Client:
							<span style="color: #adadad" class="h6 ml-2">
								<!-- <?php echo e($account['proprietaire']->prenom); ?> -->
							</span>
						</h6>
						<h6 class="price">
							<?php echo e(__('Nombre d\'utilisateur:')); ?>

							<span style="color: #adadad" class="h6 ml-2">3</span>
						</h6>
						<h6 class="price">
							<?php echo e(__('Nombre de projet:')); ?>

							<span style="color: #adadad" class="h6 ml-2">5</span>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- USERS -->
<div class="row row-sm">
	<div class="col-md-12 mg-md-t-0">
		<div class="card">
			<div class="card-header tx-medium bd-0 tx-white bg-primary">
				UTILISATEURS
			</div>
			<div class="card-body ">
				<?php echo $__env->make('admin.uncod.comptes_clients.liste_comptes.details.users_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
	</div>
</div>
<!-- PROJECTS -->
<div class="row row-sm">
	<div class="col-md-12 mg-md-t-0">
		<div class="card">
			<div class="card-header tx-medium bd-0 tx-white bg-primary">
				PROJETS
			</div>
			<div class="card-body ">
				<?php echo $__env->make('admin.uncod.comptes_clients.liste_comptes.details.projets_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
	</div>
</div>

<div style="display: flex;justify-content: center;margin-bottom: 20px" class="row row-sm">
	<a href="<?php echo e(route('accounts',app()->getLocale())); ?>">
		<i class="ti ti-arrow-left"></i>
		Retour
	</a>
</div>
<?php /**PATH /Users/mac/Sites/projets/web/uncode-app/resources/views/admin/uncod/comptes_clients/liste_comptes/details/content.blade.php ENDPATH**/ ?>
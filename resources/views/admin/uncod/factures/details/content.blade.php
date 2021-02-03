<!-- row -->
<div style="margin-bottom: 10px" class="row row-sm">
	<div class="col-lg-12">
	<button onclick="goToInvoices()" class="btn btn-primary">{{__('Retourn')}}</button>
	</div>
</div>
<div class="row row-sm">
	@include('admin.uncod.factures.details.pieces_invoice')
	@include('admin.uncod.factures.details.details_invoice')
	
</div>
				

		<!-- Modal -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Delete <?= $path ?></h4>
		      </div>
		      <div class="modal-body">
		        Hapus <?= $path ?> ?
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
		        <a id="modal_solusi" type="button" class="btn btn-info" href="<?= site_url('solusi/delete/'.$item['id']) ?>">Ya</a>
		      </div>
		    </div>
		  </div>
		</div>

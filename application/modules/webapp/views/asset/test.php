<style>
	body {
		background-color: #FFFFFF;
	}
	.table>thead>tr>th {
		cursor:pointer;
	}
</style>

<div class="wrapper">
	<div class="x_content">
		<legend>Assets <span class="hide pull-right"><a href="<?php echo base_url('/webapp/asset/create' ); ?>" ><i class="fas fa-plus text-green" style="color:#322332" ></i> <small>New Asset</small></a></span></legend>
		<div class="table-responsive alert alert-ssid alert-results" role="alert" style="overflow-y: hidden;" >
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="">
					<div class="col-md-4 col-sm-4 col-xs-12" style="margin:0">
						<div class="row">
							<h5 class="text-bold asset-color">Asset status</h5>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<span class="checkbox" style="margin:0">
										<label><input type="checkbox" id="check-all-statuses" value="all" > All Statuses</label>
									</span>
								</div>
								<?php if( !empty($asset_statuses) ) { foreach( $asset_statuses as $k =>$status ){ ?>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span class="checkbox" style="margin:0">
											<label><input type="checkbox" class="asset-statuses" name="asset_statuses[]" value="<?php echo $status->status_id; ?>" > <?php echo ucwords( $status->status_name ); ?></label>
										</span>
									</div>
								<?php } } ?>							
							</div>							
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12" style="margin:0">
						<div class="row">
							<h5 class="text-bold asset-color">Asset type</h5>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<span class="checkbox" style="margin:0">
										<label><input type="checkbox" id="check-all-types" > All types</label>
									</span>
								</div>
								<?php if( !empty($asset_types) ) { foreach( $asset_types as $k =>$asset_type ){ ?>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<span class="checkbox" style="margin:0">
											<label><input type="checkbox" class="asset-types" name="asset_types[]" value="<?php echo $asset_type->asset_type_id; ?>" > <?php echo ucwords( $asset_type->asset_type ); ?></label>
										</span>
									</div>
								<?php } } ?>							
							</div>							
						</div>
					</div>
					
					<div class="col-md-2 col-md-push-2 col-sm-4 col-xs-12" style="margin:0; display:none">
						<div class="row">
							<h5 class="text-bold asset-color">Quick actions</h5>
							<form>
								<div>
									<select name="active" id="select-action" class="form-control" required>
										<option value="">Select action</option>
										<option value="1">Assigne assets</option>									
										<option value="0">Delete assets</option>														
									</select>
								</div>
								<div class="assignees-list" style="display:none; margin-top:10px;">
									<select id="assign_to" name="assign_to" class="form-control">
										<option value="" >Please select assignee</option>
									</select>
								</div>
								<br/>
								<a id="submit-action" class="btn btn-sm btn-info btn-block" disabled >Submit Action</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<!-- Search bar -->
		<?php $this->load->view('webapp/_partials/search_bar') ?>
		
		<div class="clearfix"></div>
		<div class="table-responsive alert alert-ssid alert-results" role="alert" style="overflow-y: hidden;" >
			<table id="datatable" class="table table-responsive" style="margin-bottom:0px;width:100%" >
				<thead>
					<tr>
						<!-- <th width="5%">ID</th> -->
						<th width="25%">Asset Name</th>
						<th width="15%">Type</th>
						<th width="15%">Unique ID</th>
						<th width="15%">IMEI #</th>
						<th width="20%">Assignee</th>
						<th width="10%">Status</th>
					</tr>
				</thead>
				<tbody id="table-results">
					
				</tbody>
			</table>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-2 col-sm-3 col-xs-12">
				<a href="<?php echo base_url('/webapp/asset/create' ); ?>" class="btn btn-block btn-success">Add new</a>
			<div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		var search_str   		= null;
		var asset_types_arr		= [];
		var asset_statuses_arr	= [];
		var start_index	 		= 0;
		
		//Load default brag-statuses
		$('.asset-statuses').each(function(){
			if( $(this).is(':checked') ){
				asset_statuses_arr.push( $(this).val() );
			}
		});
		
		$('.asset-types').each(function(){
			if( $(this).is(':checked') ){
				asset_types_arr.push( $(this).val() );
			}
		});
		
		load_data( search_str, asset_statuses_arr, asset_types_arr );
		
		//Do Search when filters are changed
		$('.asset-statuses, .asset-types').change(function(){
			asset_types_arr =  get_statuses( '.asset-types' );
			asset_statuses_arr =  get_statuses( '.asset-statuses' );
			load_data( search_str, asset_statuses_arr, asset_types_arr );
		});
	
		//Do search when All is selected
		$('#check-all-statuses, #check-all-types').change(function(){
			var search_str  = $('#search_term').val();
			
			var identifier = $(this).attr('id');
			
			if( identifier == 'check-all-statuses' ){
				if( $(this).is(':checked') ){
					$('.asset-statuses').each(function(){
						$(this).prop( 'checked', true );
					});
				}else{
					$('.asset-statuses').each(function(){
						$(this).prop( 'checked', false );
					});
				}
				
				asset_statuses_arr  =  get_statuses( '.asset-statuses' );
				
			}else if( identifier == 'check-all-types' ){
				if( $(this).is(':checked') ){
					$('.asset-types').each(function(){
						$(this).prop( 'checked', true );
					});
				}else{
					$('.asset-types').each(function(){
						$(this).prop( 'checked', false );
					});
				}
					
				asset_types_arr 	=  get_statuses( '.asset-types' );
			}
			load_data( search_str, asset_statuses_arr, asset_types_arr );
		});

		//Pagination links
		$("#table-results").on("click", "li.page", function( event ){
			event.preventDefault();
			var start_index = $(this).find('a').data('ciPaginationPage');
			load_data( search_str, asset_statuses_arr, asset_types_arr, start_index );
		});
		
		function load_data( search_str, asset_statuses_arr, asset_types_arr, start_index ){
			$.ajax({
				url:"<?php echo base_url('webapp/asset/lookup'); ?>",
				method:"POST",
				data:{search_term:search_str,asset_statuses:asset_statuses_arr,asset_types:asset_types_arr,start_index:start_index},
				success:function(data){
					$('#table-results').html(data);
				}
			});
		}
		
		$('#search_term').keyup(function(){
			var search = $(this).val();
			if( search.length > 0 ){
				load_data( search , asset_statuses_arr, asset_types_arr,  );
			}else{
				load_data( search_str, asset_statuses_arr, asset_types_arr );
			}
		});
		
		function get_statuses( identifier ){

			var chkCount  = 0;
			var totalChekd= 0;
			var unChekd   = 0;
			
			var idClass	  = '';
			
			if( identifier == '.asset-statuses' ){
				
				asset_statuses_arr  = [];
				
				$( identifier ).each(function(){
					chkCount++;
					if( $(this).is(':checked') ){
						totalChekd++;
						asset_statuses_arr.push( $(this).val() );
					}else{
						unChekd++;
					}
				});
				
				if( chkCount > 0 && ( chkCount == totalChekd ) ){
					$( '#check-all-statuses' ).prop( 'checked', true );
				}else{
					$( '#check-all-statuses' ).prop( 'checked', false );
				}
				
				return asset_statuses_arr;
				
			}else if( identifier == '.asset-types' ){
				
				asset_types_arr 	= [];
				
				$( identifier ).each(function(){
					chkCount++;
					if( $(this).is(':checked') ){
						totalChekd++;
						asset_types_arr.push( $(this).val() );
					}else{
						unChekd++;
					}
				});
				
				if( chkCount > 0 && ( chkCount == totalChekd ) ){
					$( '#check-all-types' ).prop( 'checked', true );
				}else{
					$( '#check-all-types' ).prop( 'checked', false );
				}
				
				return asset_types_arr;
			}

		}
	});
</script>


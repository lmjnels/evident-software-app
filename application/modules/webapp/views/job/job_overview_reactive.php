<div class="row">
	<div class="row">
		<div class="x_panel no-border">
			<div class="row">
				<div class="x_content">
					<div class="row" style="margin-bottom:10px;">
						<div class="col-lg-6 col-md-6 col-sm-8">
							<div class="row">
					
								
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 filter-upper-container">
									<div id="reactive-job-date" class="filter-container" style="z-index:999">
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading"><i class="fas fa-filter filter-icon"></i><span style="font-size:14px;margin-left:10px;">Job Date <span class='filter-count'></span></span></div>
										<div class="filter-dropdown" style="display:none; z-index:998">
											<section class="active-filters">
												<div class="filter-item">
													<label for = "reactive-fil-ut-1" class="filter-label filter-start-date">From</label>
													<input id="reactive-fil-ut-1" type="text" class="datepicker-start" value="<?php echo !empty( $date_from ) ? $date_from : ''; ?>"  placeholder="DD/MM/YY" data-date-format="DD/MM/Y" style="border: none;" />
												</div>
												<div class="filter-item">
													<label for="reactive-fil-ut-2" class="filter-label filter-end-date">To</label>
													<input id="reactive-fil-ut-2" type="text" class="datepicker-end" value="<?php echo !empty( $date_to ) ? $date_to : ''; ?>" placeholder="DD/MM/YY" data-date-format="DD/MM/Y" style="border: none;" />
												</div>
											</section>
										</div>
									</div>
								</div>
								
								<?php /* <div class="col-md-3">
									<div id="reactive-contracts" class="filter-container" style="z-index:999" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Contract <span class='filter-count'></span></span></div>
										<div class="filter-dropdown" style="display:none; z-index:998">
											<section id="reactive-contract-options"  class="active-filters row" style="z-index:998">
												<?php if( !empty( $contracts ) ) { foreach( $contracts as $ckey => $contract ){ ?>
													<div class="filter-item">
														<input id="fil-contract-<?php echo $ckey; ?>" type="checkbox" class="filter-checkbox contract" value="<?php echo $contract->contract_id; ?>" >
														<label for = "fil-contract-<?php echo $ckey; ?>" class="filter-label"><?php echo ucwords( $contract->contract_name ); ?></label>
													</div>
												<?php } } ?>
											</section>
										</div>
									</div>
								</div> */ ?>
								
								<div class="col-md-4">
									<div id="reactive-regions" class="filter-container" style="z-index:999" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Region <span class='filter-count'></span></span></div>
										<div class="filter-dropdown" style="display:none;">
											<section id="reactive-region-options"  class="active-filters row">
												<?php if( !empty( $regions ) ) { foreach( $regions as $key => $region ){ ?>
													<div class="filter-item">
														<input id="reactive-fil-region-<?php echo $key; ?>" type="checkbox" class="filter-checkbox regions" value="<?php echo $region->region_id; ?>" >
														<label for = "reactive-fil-region-<?php echo $key; ?>" class="filter-label"><?php echo ucwords( $region->region_name ); ?></label>
													</div>
												<?php } } ?>
											</section>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div id="reactive-job-types" class="filter-container" style="z-index:999" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Job Types <span class="filter-count"></span></span></div>
										<div class="filter-dropdown" style="display:none;">
											<section id="reactive-job-type-options" class="active-filters row">
												<?php if( !empty( $reactive_job_types ) ) { foreach( $reactive_job_types as $k => $job_type ){ ?>
													<div class="col-md-12 filter-item">
														<input id="reactive-fil-jobtype-<?php echo $k; ?>" type="checkbox" class="filter-checkbox job-type-filters" value="<?php echo $job_type->job_type_id; ?>" >
														<label for = "reactive-fil-jobtype-<?php echo $k; ?>" class="filter-label"><?php echo ucwords( $job_type->job_type ); ?></label>
													</div>
												<?php } } ?>
											</section>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div id="reactive-job-assignees" class="filter-container" style="z-index:1" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Assignee <span class="filter-count"></span></span></div>
										<div class="filter-dropdown" style="display:none;">
											<section id="reactive-assignee-options" class="active-filters row">
												<?php if( !empty( $operatives ) ) { foreach( $operatives as $okey => $operative ){ ?>
													<div class="filter-item">
														<input id="reactive-fil-assignee-<?php echo $okey; ?>" type="checkbox" class="filter-checkbox assignee-filters" value="<?php echo $operative->id; ?>" >
														<label for = "reactive-fil-assignee-<?php echo $okey; ?>" class="filter-label"><?php echo ucwords( $operative->first_name.' '.$operative->last_name ); ?></label>
													</div>
												<?php } } ?>
											</section>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div id="reactive-job-statuses" class="filter-container" style="z-index:1" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Job Status <span class="filter-count"></span></span></div>
										<div class="filter-dropdown" style="display:none;">
											<section id="reactive-job-status-options" class="active-filters row">
												<?php if( !empty( $job_statuses ) ) { foreach( $job_statuses as $sk => $job_status ) { ?>
													<div class="filter-item">
														<input id="reactive-fil-job-status-<?php echo $sk; ?>" type="checkbox" class="filter-checkbox job-status-filters" value="<?php echo $job_status->status_id; ?>" >
														<label for="reactive-fil-job-status-<?php echo $sk; ?>" class="filter-label"><?php echo ucwords( $job_status->job_status ); ?></label>
													</div>
												<?php } } ?>
											</section>
										</div>
									</div>
								</div>
								<?php /* <div class="col-md-3">
									<div id="reactive-tracking-statuses" class="filter-container" style="z-index:1" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Tracking Status <span class="filter-count"></span></span></div>
										<div class="filter-dropdown" style="display:none;">
											<section id="reactive-tracking-status-options" class="active-filters row">
												<?php if( !empty( $tracking_statuses ) ) { foreach( $tracking_statuses as $tkey => $tracking_status ){ ?>
													<div class="filter-item">
														<input id="fil-tracking-status-<?php echo $tkey; ?>" type="checkbox" class="filter-checkbox tracking-status-filters" value="<?php echo $tracking_status->job_tracking_id; ?>" >
														<label for = "fil-tracking-status-<?php echo $tkey; ?>" class="filter-label"><?php echo ucwords( $tracking_status->job_tracking_status ); ?></label>
													</div>
												<?php } } ?>
												<div class="filter-item">
													<input id="fil-tracking-status-blnk" type="checkbox" class="filter-checkbox tracking-status-filters" value="_blanks" >
													<label for = "fil-tracking-status-blnk" class="filter-label"><strong>Blanks / Not Set</strong></label>
												</div>
											</section>
										</div>
									</div>
								</div> */?>
								
								<div class="col-md-4">
									<div id="reactive-disciplines" class="filter-container" style="z-index:998" >
										<div class="filter-clear pointer" title = "Clear Filter" style="display:none;"><i class="fas fa-times"></i></div>
										<div class="filter-heading pointer"><span style="font-size:14px;margin-left:0px;">Disciplines <span class="filter-count"></span></span></div>
										<div class="filter-dropdown" style="display:none;">
											<section id="reactive-discipline-options" class="active-filters row">
												<?php if( !empty( $disciplines ) ) { foreach( $disciplines as $dk => $discipline ){ ?>
													<div class="col-md-12 filter-item">
														<input id="reactive-fil-discipline-<?php echo $dk; ?>" type="checkbox" class="filter-checkbox discipline-filters" value="<?php echo $discipline->discipline_id; ?>" <?php echo ( !empty( $discipline_id ) && ( $discipline_id == $discipline->discipline_id ) ) ? 'checked' : ''; ?> >
														<label for = "reactive-fil-discipline-<?php echo $dk; ?>" class="filter-label"><?php echo ucwords( $discipline->account_discipline_name ); ?></label>
													</div>
												<?php } } ?>
											</section>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-4 zindex_99">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 zindex_99 pull-right">
									<div class="form-group top_search" style="margin-bottom:0px">
										<div>
											<!-- Search bar -->
											<div class="input-group">
												<input type="text" class="form-control <?php echo $module_identier; ?>-search_input" id="reactive_search_term" value="" placeholder="Search for...">
												<span class="input-group-btn">
													<button class="btn btn-default <?php echo $module_identier; ?>-bg search-go" type="button">Go!</button>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 zindex_99 pull-right">									
									<?php /*if( in_array( $this->user->account_id, [8] ) ) {?>
										<div style="background-color:#5cb85c; margin-top:10px; height: 32px; width: 14vw;" >
											<button id="reactive-pull-site-jobs" type="button" class="btn btn-block btn-success" style="border-color:#5cb85c " >Pull Tesseract Jobs</button>
										</div>
									<?php } */ ?>									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="table-responsive alert alert-ssid alert-results" role="alert" style="overflow-y: hidden;" >
						<table id="datatable-reactive" class="table table-responsive" style="margin-bottom:0px; font-size:90%; font-weight:300" >
							<thead>
								<tr>
									<th width="4%">Job</th>
									<th width="18%">Job Type</th>
									<th width="8%">Job Date</th>
									<th width="15%">Works Required</th>
									<th width="15%">Building Name</th>
									<th width="12%">Assignee</th>
									<th width="10%">Status</th>
									<th width="7%">Discipline</th>
									<th width="11%">Region</th>
									<!-- <th width="12%">Contract</th> -->
								</tr>
							</thead>
							<tbody id="reactive-table-results">

							</tbody>
						</table>
					</div>

					<div class="clearfix"></div>					
					<!-- Modal for pulling Jobs By Tesseract Site Number -->
					
				</div>
			</div>
		</div>
	</div>
	

	
</div>

<script type="text/javascript">
	$( document ).ready(function(){

		var search_str   		= null;
		var job_date_from       = $( '#reactive-fil-ut-1' ).val();
		var job_date_to         = $( '#reactive-fil-ut-2' ).val();
		var disciplineId        = "<?php echo !empty( $discipline_id ) ? $discipline_id : '' ?>";
		var overdueJobs         = "<?php echo !empty( $overdue_jobs )  ? $overdue_jobs 	: '' ?>";
		
		var start_index	 		= 0;
		var where = {
			'status_id'			: [],
			'job_type_id'		: [],
			'job_tracking_id'	: [],
			'contract_id'		: [],
			'region_id'			: [],
			'assigned_to'		: [],
			'discipline_id'		: [],
			'is_reactive'		: 1
		};
		
		//Default parameters
		if( job_date_from ){
			where.date_from 	= job_date_from;
		}
		
		if( job_date_to ){
			where.date_to   	= $( '#reactive-fil-ut-2' ).val();
		}	
		
		if( disciplineId ){
			where.discipline_id.push( disciplineId );
		}
		
		if( overdueJobs ){
			where.overdue_jobs = overdueJobs;
		}
		
		var contractFilter  	= new setupResultFilter( $( "#reactive-contracts" ) );
		var regionFilter  		= new setupResultFilter( $( "#reactive-regions" ) );
		var jobTypeFilter 		= new setupResultFilter( $( "#reactive-job-types" ) );
		var jobStatusFilter 	= new setupResultFilter( $( "#reactive-job-statuses" ) );
		var jobTrackingFilter 	= new setupResultFilter( $( "#reactive-tracking-statuses" ) );
		var jobAssigneeFilter 	= new setupResultFilter( $( "#reactive-job-assignees" ) );
		var disciplinesFilter 	= new setupResultFilter( $( "#reactive-disciplines" ) );

		//Pagination links
		$( "#reactive-table-results" ).on( "click", "li.page", function( event ){
			event.preventDefault();
			var start_index = $( this ).find('a').data('ciPaginationPage');
			var search_str 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();
			
			reactive_load_data( search_str, where, start_index );
		});


		jobDateFilter = new setupJobDateFilter( $( "#reactive-job-date" ) )
		jobDateFilter.update = function(){

			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();
			
			var search_str 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			reactive_load_data( search_str, where, start_index );
		}

		contractFilter.update  = function(){
			var search_str 	 = encodeURIComponent( $( '#reactive_search_term' ).val() );
			//var start_index = $( '#reactive-table-results' ).find( 'a' ).data( 'ciPaginationPage' );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();
			
			reactive_load_data( search_str, where, start_index );
		}
		
		regionFilter.update  = function(){
			var search_str 	 = encodeURIComponent( $( '#reactive_search_term' ).val() );
			//var start_index = $( '#reactive-table-results' ).find( 'a' ).data( 'ciPaginationPage' );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();

			reactive_load_data( search_str, where, start_index );
		}
		
		jobTypeFilter.update = function(){
			var search_str 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			//var start_index = $( '#reactive-table-results' ).find( 'a' ).data( 'ciPaginationPage' );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();
			
			reactive_load_data( search_str, where, start_index );
		}

		jobStatusFilter.update  = function(){
			var search_str 	 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			//var start_index  	= $( this ).find('a').data('ciPaginationPage');
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();

			reactive_load_data( search_str, where, start_index );
		}		

		jobTrackingFilter.update  = function(){
			var search_str 	 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			//var start_index = $( '#reactive-table-results' ).find( 'a' ).data( 'ciPaginationPage' );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();

			reactive_load_data( search_str, where, start_index );
		}
		
		jobAssigneeFilter.update  = function(){
			var search_str 	 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			//var start_index = $( '#reactive-table-results' ).find( 'a' ).data( 'ciPaginationPage' );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();

			reactive_load_data( search_str, where, start_index );
		}
		
		disciplinesFilter.update  = function(){
			var search_str 	 	= encodeURIComponent( $( '#reactive_search_term' ).val() );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.assigned_to 	 	= jobAssigneeFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();

			reactive_load_data( search_str, where, start_index );
		}

		reactive_load_data( search_str, where, start_index );

		function reactive_load_data( search_str, where, start_index ){
			$.ajax({
				url:"<?php echo base_url( 'webapp/job/job_search' ); ?>",
				method:"POST",
				data:{ search_term:search_str, where:where, start_index:start_index },
				success:function(data){
					$('#reactive-table-results').html(data);
				}
			});
		}

		$( '#reactive_search_term' ).keyup(function(){

			var search 		= encodeURIComponent( $(this).val() );
			
			where.date_from 		= $( '#reactive-fil-ut-1' ).val();
			where.date_to   		= $( '#reactive-fil-ut-2' ).val();
			where.status_id 	 	= jobStatusFilter.getFilters();
			where.job_type_id 	 	= jobTypeFilter.getFilters();
			where.job_tracking_id 	= jobTrackingFilter.getFilters();
			where.contract_id 	 	= contractFilter.getFilters();
			where.region_id 	 	= regionFilter.getFilters();
			where.discipline_id 	= disciplinesFilter.getFilters();
			
			if( search.length > 0 ){
				reactive_load_data( search, where, start_index );
			}else{
				reactive_load_data( search_str, where, start_index );
			}
		});

		$( '#reactive-pull-site-jobs' ).click(function(){
			$("#pull-tesseract-jobs-modal").modal( "show" );
		});
		
		$( '#reactive-pull-jobs-by-site-number' ).click( function(){
			
			var siteNums = $( '#site_numbers' ).val();
			
			if( siteNums.length == 0 || siteNums.length === null ){
				swal({
					type: 'error',
					title: 'Please provide at least 1 Site Number'
				});
				return false;
			}
			
			$.ajax({
				url:"<?php echo base_url('webapp/job/fetch_tesseract_jobs_by_site_number/' ); ?>",
				method:"POST",
				data:{ page:"details", site_number:siteNums },
				dataType: 'json',
				success:function(data){
					if( data.status == 1 ){
						
						$("#pull-tesseract-jobs-modal").modal( "hide" );
						
						swal({
							type: 'success',
							title: data.status_msg,
							showConfirmButton: false,
							timer: 2100
						})
						window.setTimeout(function(){
							var new_url = window.location.href.split('?')[0];
							window.location.href = new_url;
						} ,1000);
					} else {
						swal({
							type: 'error',
							title: data.status_msg
						})
					}
				}
			});
			
		});
		
		/*
		* Fetch Calls by Call Number
		*/
		$( '#pull-jobs-by-call-number' ).click( function(){
			
			var callNums = $( '#call_numbers' ).val();
			
			if( callNums.length == 0 || callNums.length === null ){
				swal({
					type: 'error',
					title: 'Please provide at least 1 Call Number',
				});
				return false;
			}
			
			$.ajax({
				url:"<?php echo base_url('webapp/job/fetch_tesseract_jobs_by_call_number/' ); ?>",
				method:"POST",
				data:{ page:"details", call_number:callNums },
				dataType: 'json',
				success:function(data){
					if( data.status == 1 ){
						
						$("#pull-tesseract-jobs-modal").modal( "hide" );
						
						swal({
							type: 'success',
							title: data.status_msg,
							showConfirmButton: false,
							timer: 2100
						})
						window.setTimeout(function(){
							var new_url = window.location.href.split('?')[0];
							window.location.href = new_url;
						} ,1000);
					} else {
						swal({
							type: 'error',
							title: data.status_msg
						})
					}
				}
			});
			
		});

	});
</script>
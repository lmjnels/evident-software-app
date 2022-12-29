<div class="row">
	<div class="col-md-8 col-sm-8 col-xs-12">
		<div class="x_panel tile has-shadow">
			<legend>EviDoc Checklist Responsess <span><a target="_blank" style="text-decoration:none" href="<?php echo base_url('/webapp/checklist/download/'.$checklist_details->job_id); ?>" class="pull-right text-red">PDF <i class="fas fa-file-pdf text-red"></i></a></span></legend>
				<?php if (!empty($checklist_details->checklists_data)) {
				    $counter = 1; ?>
					<div class="panel-title hide" style="margin-bottom:5px;">
						<div class="row text-bold">
							<div class="col-md-4 col-sm-4">CHECKLIST NAME</div>
							<div class="col-md-2 col-sm-2"><span class="text-center">TOTAL RESPONSES</span></div>
							<div class="col-md-2 col-sm-2">COMPLETION STATUS</div>
							<div class="col-md-2 col-sm-2">COMPLETED BY</div>
							<div class="col-md-2 col-sm-2"><span class="pull-right" >ACTION</span></div>															
						</div>
					</div>
					<?php foreach ($checklist_details->checklists_data as $check_id => $checklist_responses) {
					    $counter++; ?>
						<div class="panel">
							<div class="section-container-bar panel-heading collapsed bg-grey pointer no-radius" role="tab" id="heading<?php echo number_to_words($counter); ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo number_to_words($counter); ?>" aria-expanded="true" aria-controls="collapse<?php echo number_to_words($counter); ?>">
								<h4 class="panel-title small">
									<div class="row">
										<div class="col-md-4 col-sm-4"><i class="caret-icon fas fa-caret-down text-yellow"></i> <?php echo $checklist_responses->checklist_desc; ?></div>
										<div class="col-md-2 col-sm-2"><small class="text-white hide"><?php echo !empty($checklist_responses->responses_data) ? count($checklist_responses->responses_data) : 0; ?></small></div>
										<div class="col-md-2 col-sm-2"><small class="text-white hide"><i class="far fa-check-circle"></i> Completed</small></div>
										<div class="col-md-2 col-sm-2"><small class="text-white hide">&nbsp;&nbsp;<?php echo ($checklist_responses->completed_by) ? $checklist_responses->completed_by : ''; ?></small></div>
										<div class="col-md-2 col-sm-2"><a  class="pull-right pointer view-resps text-yellow small hide" data-checklist_id="<?php echo $checklist_responses->checklist_id; ?>" >View Responses</a></div>															
									</div>															
								</h4>
							</div>
							<div id="collapse<?php echo number_to_words($counter); ?>" class="panel-collapse collapse no-bg no-background <?php echo (!empty($toggled_section) && (strtolower(lean_string($toggled_section)) == strtolower(lean_string($checklist_responses->checklist_desc)))) ? 'show_toggled' : ''?>" role="tabpanel" aria-labelledby="heading<?php echo number_to_words($counter); ?>" >
								<div class="panel-body">
									<!-- <div class="resp-<?php echo $checklist_responses->checklist_id; ?>" style="display:block" > -->
									<div>
										<table class="table" style="width:100%">
											<tr>
												<th width="2%">#</th>
												<th width="58%">Question</th>
												<th width="15%">Response</th>
												<th width="10%">Status</th>
												<th width="15%"><span class="pull-right">Timestamp</span></th>
											</tr>
											<?php if (!empty($checklist_responses->responses_data)) {
											    foreach ($checklist_responses->responses_data as $response) { ?>
												<tr>
													<td width="2%"><?php echo $response->response_question_order; ?></td>
													<td width="58%"><?php echo $response->response_question_prompt; ?></td>
													<td width="15%"><?php echo $response->response_answer; ?></td>
													<td width="10%"><i class="far fa-check-circle text-green"></i> Completed</td>
													<td width="15%"><span class="pull-right"><?php echo (valid_date($response->response_last_update)) ? date('d-m-Y H:i:s', strtotime($response->response_last_update)) : date('d-m-Y H:i:s', strtotime($response->created_on)) ?></span></td>
												</tr>
											<?php }
											    } ?>									
										</table>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			
				<?php /* ?>
                <table class="table" style="width:100%">
                    <tr>
                        <th width="30%">CHECKLIST NAME</th>
                        <th width="25%"><span class="text-center">TOTAL RESPONSES</span></th>
                        <th width="15%">COMPLETION STATUS</th>
                        <th width="15%">COMPLETED BY</th>
                        <th width="15%"><span class="pull-right" >ACTION</span></th>
                    </tr>
                    <?php if( !empty( $checklist_details->checklists_data ) ){ foreach( $checklist_details->checklists_data as $checklist_responses ) { ?>
                        <tr class>
                            <th><?php echo $checklist_responses->checklist_desc; ?></a></th>
                            <td><span class="text-center"><?php echo !empty( $checklist_responses->responses_data ) ? count( $checklist_responses->responses_data ) : 0; ?></span></td>
                            <td><i class="far fa-check-circle text-green"></i> Completed</td>
                            <td><?php echo ( $checklist_responses->completed_by ) ? $checklist_responses->completed_by : ''; ?></td>
                            <td><a data-checklist_id="<?php echo $checklist_responses->checklist_id; ?>" class="pull-right pointer view-resps" >View Responses</a></td>
                        </tr>

                        <tr class="resp-<?php echo $checklist_responses->checklist_id; ?>" style="display:none" >
                            <td colspan="5" >
                                <table class="table" style="width:100%">
                                    <tr>
                                        <th width="2%">#</th>
                                        <th width="58%">Question</th>
                                        <th width="15%">Response</th>
                                        <th width="10%">Status</th>
                                        <th width="15%"><span class="pull-right">Timestamp</span></th>
                                    </tr>

                                    <?php if( !empty( $checklist_responses->responses_data ) ){ foreach( $checklist_responses->responses_data as $response ) { ?>
                                        <tr>
                                            <td width="2%"><?php echo $response->response_question_order; ?></td>
                                            <td width="58%"><?php echo $response->response_question_prompt; ?></td>
                                            <td width="15%"><?php echo $response->response_answer; ?></td>
                                            <td width="10%"><i class="far fa-check-circle text-green"></i> Completed</td>
                                            <td width="15%"><span class="pull-right"><?php echo ( valid_date( $response->response_last_update ) ) ? date( 'd-m-Y H:i:s', strtotime( $response->response_last_update ) ) :  date( 'd-m-Y H:i:s', strtotime( $response->created_on ) ) ?></span></td>
                                        </tr>
                                    <?php } } ?>
                                </table>
                            </td>
                        </tr>
                    <?php } } else { ?>
                        <?php echo $this->config->item( 'no_records' ); ?>
                <?php } ?>
                </table>
                <?php */ ?>
		</div>		
	</div>
	
	<div class="col-md-4 col-sm-4 col-xs-12">
		<div class="x_panel tile has-shadow">
			<legend>EviDoc Checklist Completion Information</legend>
			<table style="width:100%" class="responsive">
				<tr>
					<th width="30%">Completion Date</th><td width="70%"><?php echo (valid_date($checklist_details->finish_time)) ? date('d-m-Y H:i:s', strtotime($checklist_details->finish_time)) : ''; ?></td>
				</tr>
				<tr>
					<th width="30%">Conducted by</th><td width="70%"><?php echo ucwords($checklist_details->assignee); ?></td>
				</tr>
				<tr>
					<th width="30%">GPS Location (start)</th><td width="70%"><?php echo (!empty($checklist_details->gps_latitude)) ? $checklist_details->gps_latitude : ' - - -'; ?> <?php echo (!empty($checklist_details->gps_longitude)) ? $checklist_details->gps_longitude : ' - - - '; ?></td>
				</tr>
				<tr>
					<th width="50%">GPS Location (finish)</th><td width="50%"><?php echo (!empty($checklist_details->finish_gps_latitude)) ? 'Lat: '.$checklist_details->finish_gps_latitude : ' - - -'; ?> <?php echo (!empty($checklist_details->finish_gps_longitude)) ? '/ Long:'.$checklist_details->finish_gps_longitude : ' - - - '; ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<br/>
						<div class="full-width">
							<iframe width="100%" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $checklist_details->gps_latitude; ?>,<?php echo $checklist_details->gps_longitude; ?>&hl=es;zoom=1&amp;output=embed" ></iframe>
						</div>				
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<script>
	$( document ).ready( function(){
		
		$( '.view-resps' ).click( function( event ){
			var checkListId = $( this ).data( 'checklist_id' );
			$( '.resp-'+checkListId ).slideToggle( 'slow' );
		});
		
		$( '.section-container-bar' ).click( function(){
			$( this ).closest( 'div' ).find( '.caret-icon' ).toggleClass('fa-caret-up fa-caret-down');			
		});
		
	});
</script>
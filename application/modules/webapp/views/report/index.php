<style>
body {
		background-color: #FFFFFF;
	}
	.table>thead>tr>th {
		cursor:pointer;
	}

	div.xdsoft_datetimepicker{
		left: 1064.98px
	}

	.min-width-80{
		min-width: 100px;
	}
	
	.nav-tabs-custom>.nav-tabs>li.active {
		border-top-color: transparent;
		border-bottom-color: #0092CD;
	}
	
	.nav-tabs-custom>.nav-tabs>li {
		border-bottom: 3px solid transparent;
		margin-top: -2px;
		margin-right: 5px;
	}
	
	.nav-tabs-custom>.nav-tabs>li:first-of-type.active>a,
	.nav-tabs-custom>.nav-tabs>li.active>a {
		border-top-color: transparent !important;
		border-left-color: transparent !important;
		border-right-color: transparent !important;
		font-weight:600;
	}
	
	.nav-tabs-custom {
		margin-top: -10px;
		margin-bottom: 20px;
		background: #fff;
		/* box-shadow: none; */
		border-radius: 0px;
	}
	
	.nav-tabs-custom>.nav-tabs {
		border-bottom-color: transparent;
	}
	
	.nav>li>a {
		padding: 10px 5px;
	}
	
	.nav-tabs-custom>.tab-content {
		padding: 0 10px;
	}
	
	.pagination>li>a {
		font-weight: 300;
	}

</style>

<style>
	body {
		background-color: #FFFFFF;
	}
	.table>thead>tr>th {
		cursor:pointer;
	}

	div.xdsoft_datetimepicker{
		left: 1064.98px
	}

	.min-width-80{
		min-width: 100px;
	}
	
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
		padding: 8px 6px;
	}
	
	.filter-item {
		padding: 5px 10px;
		padding-left: 15px;
		margin-top: 5px;
		margin-bottom: 5px;
		font-size: 90% !important;
	}
	
	.filter-clear {
		top: 0px;
		width: 20px;
		right: 0px;
		color: #fff;
		background-color: #0191CC;
		height: 20px;
		padding: 2px;
		padding-top: 2px;
		font-size: 14px;
	}
	
	.filter-checkbox + label:last-child {
		margin-bottom: 0;
		font-size: 96%;
	}

</style>

<div class="row">
	<div class="x_panel no-border">
		<div class="row">
			<div class="x_content">
				<div class="rows">
					<div class="col-md-12">
						<div class="row">
							
								<!-- Custom Tabs -->
								<div class="nav-tabs-custom">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#generic_reports" data-toggle="tab">Generic Reports</a></li>
										<li><a href="#specific_reports" data-toggle="tab">Tailored Reports</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="generic_reports">
											<?php include( 'generic_reports.php' ); ?>
										</div>

										<div class="tab-pane" id="specific_reports">
											<?php include( 'tailored_reports.php' ); ?>
										</div>
									</div>
								</div>
							
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>


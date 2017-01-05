@extends('admin._master')

@push('css_import')
	<!-- BEGIN PAGE STYLES -->
	<link rel="stylesheet" type="text/css" href="/_admin_assets/global/plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.css"/>
	<!-- END PAGE STYLES -->
@endpush

@push('style')
@endpush

@section('class_body', '') {{-- Luôn có 1 dấu cách sau thi thêm --}}

@section('content')
<div class="modal fade" id="notarget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				 Widget settings form goes here
			</div>
			<div class="modal-footer">
				<button type="button" class="btn blue">Save changes</button>
				<button type="button" class="btn default" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<div class="row">
	<div class="col-md-12">
		<div class="note note-success note-bordered">
			<p>
				 GTreeTable is extension of Tweeter Bootstrap 3 framework, which allows to use tree structure inside HTML table. Full documentation is available <a href="https://github.com/gilek/bootstrap-gtreetable" target="_blank">here</a>
			</p>
		</div>
		<!-- BEGIN PORTLET-->
		<div class="portlet light">
			<div class="portlet-title">
				<div class="caption font-purple-plum">
					<i class="icon-speech font-purple-plum"></i>
					<span class="caption-subject bold uppercase"> Demo 2</span>
					<span class="caption-helper">right click inside the box</span>
				</div>
				<div class="actions">
					<div class="btn-group">
						<a class="btn btn-circle btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
						<i class="fa fa-user"></i> User <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="javascript:;">
								<i class="icon-user"></i> New User </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-basket"></i> New order </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
								</a>
							</li>
						</ul>
					</div>
					<a href="javascript:;" class="btn btn-circle red-sunglo btn-sm">
					<i class="fa fa-plus"></i> Add </a>
					<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-hover table-light gtreetable" id="gtreetable">
				<thead>
				<tr>
					<th>
						 Nested Tree Table
					</th>
				</tr>
				</thead>
				</table>
			</div>
		</div>
		<!-- END PORTLET-->
	</div>
</div>
@endsection

@push('js_import')
<script type="text/javascript" src="/_admin_assets/global/plugins/bootstrap-gtreetable/bootstrap-gtreetable.min.js"></script>
<script src="/_admin_assets/admin/pages/scripts/table-tree.js"></script>
@endpush

@push('script')
<script>
  jQuery(document).ready(function() {
     TableTree.init();
  });
</script>
@endpush

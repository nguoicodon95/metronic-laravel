@extends('admin._master')

@push('css_import')
<link rel="stylesheet" type="text/css" href="/_admin_assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/_admin_assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
@endpush

@push('style')
@endpush

@section('class_body', '') {{-- Luôn có 1 dấu cách sau thi thêm --}}

@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-edit"></i>Editable Table
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<a href="#portlet-config" data-toggle="modal" class="config">
					</a>
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<button id="sample_editable_1_new" class="btn green">
								Add New <i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="btn-group pull-right">
								<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="javascript:;">
										Print </a>
									</li>
									<li>
										<a href="javascript:;">
										Save as PDF </a>
									</li>
									<li>
										<a href="javascript:;">
										Export to Excel </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
				<thead>
				<tr>
					<th>
						 Username
					</th>
					<th>
						 Full Name
					</th>
					<th>
						 Points
					</th>
					<th>
						 Notes
					</th>
					<th>
						 Edit
					</th>
					<th>
						 Delete
					</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						 alex
					</td>
					<td>
						 Alex Nilson
					</td>
					<td>
						 1234
					</td>
					<td class="center">
						 power user
					</td>
					<td>
						<a class="edit" href="javascript:;">
						Edit </a>
					</td>
					<td>
						<a class="delete" href="javascript:;">
						Delete </a>
					</td>
				</tr>
				<tr>
					<td>
						 lisa
					</td>
					<td>
						 Lisa Wong
					</td>
					<td>
						 434
					</td>
					<td class="center">
						 new user
					</td>
					<td>
						<a class="edit" href="javascript:;">
						Edit </a>
					</td>
					<td>
						<a class="delete" href="javascript:;">
						Delete </a>
					</td>
				</tr>
				<tr>
					<td>
						 nick12
					</td>
					<td>
						 Nick Roberts
					</td>
					<td>
						 232
					</td>
					<td class="center">
						 power user
					</td>
					<td>
						<a class="edit" href="javascript:;">
						Edit </a>
					</td>
					<td>
						<a class="delete" href="javascript:;">
						Delete </a>
					</td>
				</tr>
				<tr>
					<td>
						 goldweb
					</td>
					<td>
						 Sergio Jackson
					</td>
					<td>
						 132
					</td>
					<td class="center">
						 elite user
					</td>
					<td>
						<a class="edit" href="javascript:;">
						Edit </a>
					</td>
					<td>
						<a class="delete" href="javascript:;">
						Delete </a>
					</td>
				</tr>
				<tr>
					<td>
						 webriver
					</td>
					<td>
						 Antonio Sanches
					</td>
					<td>
						 462
					</td>
					<td class="center">
						 new user
					</td>
					<td>
						<a class="edit" href="javascript:;">
						Edit </a>
					</td>
					<td>
						<a class="delete" href="javascript:;">
						Delete </a>
					</td>
				</tr>
				<tr>
					<td>
						 gist124
					</td>
					<td>
						 Nick Roberts
					</td>
					<td>
						 62
					</td>
					<td class="center">
						 new user
					</td>
					<td>
						<a class="edit" href="javascript:;">
						Edit </a>
					</td>
					<td>
						<a class="delete" href="javascript:;">
						Delete </a>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>

@endsection

@push('js_import')
<script type="text/javascript" src="/_admin_assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/_admin_assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/_admin_assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="/_admin_assets/admin/pages/scripts/table-editable.js"></script>
@endpush

@push('script')
<script>
jQuery(document).ready(function() {
   TableEditable.init();
});
</script>
@endpush

@extends('admin._master')

@push('css_import')
<link rel="stylesheet" type="text/css" href="/_admin_assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/_admin_assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
@endpush

@push('style')
@endpush

@section('class_body', '') {{-- Luôn có 1 dấu cách sau thi thêm --}}

@section('content')
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box grey-cascade">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-globe"></i>Managed Table
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
				<table class="table table-striped table-bordered table-hover" id="sample_1">
				<thead>
				<tr>
					<th class="table-checkbox">
						<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
					</th>
					<th>
						 Username
					</th>
					<th>
						 Email
					</th>
					<th>
						 Points
					</th>
					<th>
						 Joined
					</th>
					<th>
						 Status
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">
						shuxer@gmail.com </a>
					</td>
					<td>
						 120
					</td>
					<td class="center">
						 12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 looper
					</td>
					<td>
						<a href="mailto:looper90@gmail.com">
						looper90@gmail.com </a>
					</td>
					<td>
						 120
					</td>
					<td class="center">
						 12.12.2011
					</td>
					<td>
						<span class="label label-sm label-warning">
						Suspended </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@yahoo.com">
						userwow@yahoo.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 user1wow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 restest
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 foopl
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 weep
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 coop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 pppol
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 goop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 weep
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 15.11.2011
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 toopl
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 16.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 9.12.2012
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 tes21t
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 14.12.2012
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 fop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 13.11.2010
					</td>
					<td>
						<span class="label label-sm label-warning">
						Suspended </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 kop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 17.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 vopl
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.11.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 wap
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 12.12.2012
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 19.12.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 toop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 17.12.2010
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 weep
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						 20
					</td>
					<td class="center">
						 15.11.2011
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-sm-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-user"></i>Table
				</div>
				<div class="actions">
					<a href="javascript:;" class="btn btn-default btn-sm">
					<i class="fa fa-pencil"></i> Add </a>
					<div class="btn-group">
						<a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
						<i class="fa fa-cogs"></i> Tools <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:;">
								<i class="fa fa-pencil"></i> Edit </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-trash-o"></i> Delete </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-ban"></i> Ban </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="javascript:;">
								<i class="i"></i> Make admin </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_2">
				<thead>
				<tr>
					<th class="table-checkbox">
						<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
					</th>
					<th>
						 Username
					</th>
					<th>
						 Email
					</th>
					<th>
						 Status
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">
						shuxer@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 looper
					</td>
					<td>
						<a href="mailto:looper90@gmail.com">
						looper90@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-warning">
						Suspended </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@yahoo.com">
						userwow@yahoo.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 user1wow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 restest
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 foopl
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 weep
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 coop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 pppol
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
	<div class="col-md-6 col-sm-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box purple">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Table
				</div>
				<div class="actions">
					<a href="javascript:;" class="btn btn-default btn-sm">
					<i class="fa fa-plus"></i> Add </a>
					<a href="javascript:;" class="btn btn-default btn-sm">
					<i class="fa fa-print"></i> Print </a>
				</div>
			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover" id="sample_3">
				<thead>
				<tr>
					<th class="table-checkbox">
						<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
					</th>
					<th>
						 Username
					</th>
					<th>
						 Email
					</th>
					<th>
						 Status
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">
						shuxer@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 looper
					</td>
					<td>
						<a href="mailto:looper90@gmail.com">
						looper90@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-warning">
						Suspended </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@yahoo.com">
						userwow@yahoo.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 user1wow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 restest
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 foopl
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 weep
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 coop
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 pppol
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						good@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 userwow
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						userwow@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-default">
						Blocked </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						 test
					</td>
					<td>
						<a href="mailto:userwow@gmail.com">
						test@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success">
						Approved </span>
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

<script src="/_admin_assets/admin/pages/scripts/table-managed.js"></script>
@endpush

@push('script')
<script>
	jQuery(document).ready(function() {
	   TableManaged.init();
	});
</script>
@endpush

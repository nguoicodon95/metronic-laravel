@extends('admin._master')

@push('css_import')
@endpush

@push('style')
@endpush

@section('class_body', '') {{-- Luôn có 1 dấu cách sau thi thêm --}}

@section('content')
<div class="row">
	<div class="col-md-6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Simple Table
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
				<div class="table-scrollable">
					<table class="table table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 First Name
						</th>
						<th>
							 Last Name
						</th>
						<th>
							 Username
						</th>
						<th>
							 Status
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 1
						</td>
						<td>
							 Mark
						</td>
						<td>
							 Otto
						</td>
						<td>
							 makr124
						</td>
						<td>
							<span class="label label-sm label-success">
							Approved </span>
						</td>
					</tr>
					<tr>
						<td>
							 2
						</td>
						<td>
							 Jacob
						</td>
						<td>
							 Nilson
						</td>
						<td>
							 jac123
						</td>
						<td>
							<span class="label label-sm label-info">
							Pending </span>
						</td>
					</tr>
					<tr>
						<td>
							 3
						</td>
						<td>
							 Larry
						</td>
						<td>
							 Cooper
						</td>
						<td>
							 lar
						</td>
						<td>
							<span class="label label-sm label-warning">
							Suspended </span>
						</td>
					</tr>
					<tr>
						<td>
							 4
						</td>
						<td>
							 Sandy
						</td>
						<td>
							 Lim
						</td>
						<td>
							 sanlim
						</td>
						<td>
							<span class="label label-sm label-danger">
							Blocked </span>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
	<div class="col-md-6">
		<!-- BEGIN BORDERED TABLE PORTLET-->
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-coffee"></i>Bordered Table
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
				<div class="table-scrollable">
					<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 First Name
						</th>
						<th>
							 Last Name
						</th>
						<th>
							 Username
						</th>
						<th>
							 Status
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td rowspan="2">
							 1
						</td>
						<td>
							 Mark
						</td>
						<td>
							 Otto
						</td>
						<td>
							 makr124
						</td>
						<td>
							<span class="label label-sm label-success">
							Approved </span>
						</td>
					</tr>
					<tr>
						<td>
							 Jacob
						</td>
						<td>
							 Nilson
						</td>
						<td>
							 jac123
						</td>
						<td>
							<span class="label label-sm label-info">
							Pending </span>
						</td>
					</tr>
					<tr>
						<td>
							 2
						</td>
						<td>
							 Larry
						</td>
						<td>
							 Cooper
						</td>
						<td>
							 lar
						</td>
						<td>
							<span class="label label-sm label-warning">
							Suspended </span>
						</td>
					</tr>
					<tr>
						<td>
							 3
						</td>
						<td>
							 Sandy
						</td>
						<td>
							 Lim
						</td>
						<td>
							 sanlim
						</td>
						<td>
							<span class="label label-sm label-danger">
							Blocked </span>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END BORDERED TABLE PORTLET-->
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet box purple">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-comments"></i>Striped Table
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
				<div class="table-scrollable">
					<table class="table table-striped table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 First Name
						</th>
						<th>
							 Last Name
						</th>
						<th>
							 Username
						</th>
						<th>
							 Status
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 1
						</td>
						<td>
							 Mark
						</td>
						<td>
							 Otto
						</td>
						<td>
							 makr124
						</td>
						<td>
							<span class="label label-sm label-success">
							Approved </span>
						</td>
					</tr>
					<tr>
						<td>
							 2
						</td>
						<td>
							 Jacob
						</td>
						<td>
							 Nilson
						</td>
						<td>
							 jac123
						</td>
						<td>
							<span class="label label-sm label-info">
							Pending </span>
						</td>
					</tr>
					<tr>
						<td>
							 3
						</td>
						<td>
							 Larry
						</td>
						<td>
							 Cooper
						</td>
						<td>
							 lar
						</td>
						<td>
							<span class="label label-sm label-warning">
							Suspended </span>
						</td>
					</tr>
					<tr>
						<td>
							 4
						</td>
						<td>
							 Sandy
						</td>
						<td>
							 Lim
						</td>
						<td>
							 sanlim
						</td>
						<td>
							<span class="label label-sm label-danger">
							Blocked </span>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
	<div class="col-md-6">
		<!-- BEGIN CONDENSED TABLE PORTLET-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-picture"></i>Condensed Table
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
				<div class="table-scrollable">
					<table class="table table-condensed table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 First Name
						</th>
						<th>
							 Last Name
						</th>
						<th>
							 Username
						</th>
						<th>
							 Status
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 1
						</td>
						<td>
							 Mark
						</td>
						<td>
							 Otto
						</td>
						<td>
							 makr124
						</td>
						<td>
							<span class="label label-sm label-success">
							Approved </span>
						</td>
					</tr>
					<tr>
						<td>
							 2
						</td>
						<td>
							 Jacob
						</td>
						<td>
							 Nilson
						</td>
						<td>
							 jac123
						</td>
						<td>
							<span class="label label-sm label-info">
							Pending </span>
						</td>
					</tr>
					<tr>
						<td>
							 3
						</td>
						<td>
							 Larry
						</td>
						<td>
							 Cooper
						</td>
						<td>
							 lar
						</td>
						<td>
							<span class="label label-sm label-warning">
							Suspended </span>
						</td>
					</tr>
					<tr>
						<td>
							 4
						</td>
						<td>
							 Sandy
						</td>
						<td>
							 Lim
						</td>
						<td>
							 sanlim
						</td>
						<td>
							<span class="label label-sm label-danger">
							Blocked </span>
						</td>
					</tr>
					<tr>
						<td>
							 5
						</td>
						<td>
							 Sandy
						</td>
						<td>
							 Lim
						</td>
						<td>
							 sanlim
						</td>
						<td>
							<span class="label label-sm label-danger">
							Blocked </span>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END CONDENSED TABLE PORTLET-->
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-comments"></i>Contextual Rows
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
				<div class="table-scrollable">
					<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 Class Name
						</th>
						<th>
							 Column
						</th>
						<th>
							 Column
						</th>
						<th>
							 Column
						</th>
					</tr>
					</thead>
					<tbody>
					<tr class="active">
						<td>
							 1
						</td>
						<td>
							 active
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
					</tr>
					<tr class="success">
						<td>
							 2
						</td>
						<td>
							 success
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
					</tr>
					<tr class="warning">
						<td>
							 3
						</td>
						<td>
							 warning
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
					</tr>
					<tr class="danger">
						<td>
							 4
						</td>
						<td>
							 danger
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
						<td>
							 Column heading
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
	<div class="col-md-6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-comments"></i>Contextual Columns
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
				<div class="table-scrollable">
					<table class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>
							 #
						</th>
						<th>
							 Column
						</th>
						<th>
							 Column
						</th>
						<th>
							 Column
						</th>
						<th>
							 Column
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 1
						</td>
						<td class="active">
							 active
						</td>
						<td class="success">
							 success
						</td>
						<td class="warning">
							 warning
						</td>
						<td class="danger">
							 danger
						</td>
					</tr>
					<tr>
						<td>
							 2
						</td>
						<td class="active">
							 active
						</td>
						<td class="success">
							 success
						</td>
						<td class="warning">
							 warning
						</td>
						<td class="danger">
							 danger
						</td>
					</tr>
					<tr>
						<td>
							 3
						</td>
						<td class="active">
							 active
						</td>
						<td class="success">
							 success
						</td>
						<td class="warning">
							 warning
						</td>
						<td class="danger">
							 danger
						</td>
					</tr>
					<tr>
						<td>
							 4
						</td>
						<td class="active">
							 active
						</td>
						<td class="success">
							 success
						</td>
						<td class="warning">
							 warning
						</td>
						<td class="danger">
							 danger
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-bell-o"></i>Advance Table
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
				<div class="table-scrollable">
					<table class="table table-striped table-bordered table-advance table-hover">
					<thead>
					<tr>
						<th>
							<i class="fa fa-briefcase"></i> Company
						</th>
						<th class="hidden-xs">
							<i class="fa fa-user"></i> Contact
						</th>
						<th>
							<i class="fa fa-shopping-cart"></i> Total
						</th>
						<th>
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td class="highlight">
							<div class="success">
							</div>
							<a href="javascript:;">
							RedBull </a>
						</td>
						<td class="hidden-xs">
							 Mike Nilson
						</td>
						<td>
							 2560.60$
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs purple">
							<i class="fa fa-edit"></i> Edit </a>
						</td>
					</tr>
					<tr>
						<td class="highlight">
							<div class="info">
							</div>
							<a href="javascript:;">
							Google </a>
						</td>
						<td class="hidden-xs">
							 Adam Larson
						</td>
						<td>
							 560.60$
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs black">
							<i class="fa fa-trash-o"></i> Delete </a>
						</td>
					</tr>
					<tr>
						<td class="highlight">
							<div class="success">
							</div>
							<a href="javascript:;">
							Apple </a>
						</td>
						<td class="hidden-xs">
							 Daniel Kim
						</td>
						<td>
							 3460.60$
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs purple">
							<i class="fa fa-edit"></i> Edit </a>
						</td>
					</tr>
					<tr>
						<td class="highlight">
							<div class="warning">
							</div>
							<a href="javascript:;">
							Microsoft </a>
						</td>
						<td class="hidden-xs">
							 Nick
						</td>
						<td>
							 2560.60$
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs blue">
							<i class="fa fa-share"></i> Share </a>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
	<div class="col-md-6">
		<!-- BEGIN SAMPLE TABLE PORTLET-->
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-shopping-cart"></i>Advance Table
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
				<div class="table-scrollable">
					<table class="table table-striped table-bordered table-advance table-hover">
					<thead>
					<tr>
						<th>
							<i class="fa fa-briefcase"></i> From
						</th>
						<th class="hidden-xs">
							<i class="fa fa-question"></i> Descrition
						</th>
						<th>
							<i class="fa fa-bookmark"></i> Total
						</th>
						<th>
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							<a href="javascript:;">
							Pixel Ltd </a>
						</td>
						<td class="hidden-xs">
							 Server hardware purchase
						</td>
						<td>
							 52560.10$ <span class="label label-sm label-success label-mini">
							Paid </span>
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs green-stripe">
							View </a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="javascript:;">
							Smart House </a>
						</td>
						<td class="hidden-xs">
							 Office furniture purchase
						</td>
						<td>
							 5760.00$ <span class="label label-sm label-warning label-mini">
							Pending </span>
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs blue-stripe">
							View </a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="javascript:;">
							FoodMaster Ltd </a>
						</td>
						<td class="hidden-xs">
							 Company Anual Dinner Catering
						</td>
						<td>
							 12400.00$ <span class="label label-sm label-success label-mini">
							Paid </span>
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs blue-stripe">
							View </a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="javascript:;">
							WaterPure Ltd </a>
						</td>
						<td class="hidden-xs">
							 Payment for Jan 2013
						</td>
						<td>
							 610.50$ <span class="label label-sm label-danger label-mini">
							Overdue </span>
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs red-stripe">
							View </a>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END SAMPLE TABLE PORTLET-->
	</div>
</div>
@endsection

@push('js_import')
@endpush

@push('script')
<script>
</script>
@endpush

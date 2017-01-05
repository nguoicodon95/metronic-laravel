<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionTableController extends Controller
{
    public function treeTable(Request $request) {
      $records = array();
      $records['nodes'] = array();

      $id = isset($request->id) ? $request->id : '0';
      $level = 1;
      if ($id != '0') {
      	$id = explode(':', $id);
      	$level = $id[1] + 1;
      }

      for($i = 1; $i < 6; $i++) {
      	$id_ = time() + rand(1000, 20000) . ':' . ($level);
      	$records['nodes'][] = array('id' => $id_, 'parent' => $id, 'name' => 'Node - ' . $level . ' - ' . $i, 'level' => $level, 'type' => 'folder');
      }

      return json_encode($records);
    }

    public function ajaxTable(Request $request) {
        $iTotalRecords = 178;
        $iDisplayLength = intval($request->length);
        $iDisplayLength = $iDisplayLength < 0 ? $iTotalRecords : $iDisplayLength;
        $iDisplayStart = intval($request->start);
        $sEcho = intval($request->draw);

        $records = array();
        $records["data"] = array();

        $end = $iDisplayStart + $iDisplayLength;
        $end = $end > $iTotalRecords ? $iTotalRecords : $end;

        $status_list = array(
          array("success" => "Pending"),
          array("info" => "Closed"),
          array("danger" => "On Hold"),
          array("warning" => "Fraud")
        );

        for($i = $iDisplayStart; $i < $end; $i++) {
          $status = $status_list[rand(0, 2)];
          $id = ($i + 1);
          $records["data"][] = array(
            '<input type="checkbox" name="id[]" value="'.$id.'">',
            $id,
            '12/09/2013',
            'Jhon Doe',
            'Jhon Doe',
            '450.60$',
            rand(1, 10),
            '<span class="label label-sm label-'.(key($status)).'">'.(current($status)).'</span>',
            '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>',
         );
        }

        if (isset($request->customActionType) && $request->customActionType == "group_action") {
          $records["customActionStatus"] = "OK"; // pass custom message(useful for getting status of group actions)
          $records["customActionMessage"] = "Group action successfully has been completed. Well done!"; // pass custom message(useful for getting status of group actions)
        }

        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        return json_encode($records);
    }
}

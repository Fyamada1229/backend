<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;

class DevlceController extends Controller
{

    function listParams($id = null)
    {
        return $id ? Device::find($id) : Device::all();
    }

    function add(Request $request)
    {
        $device = new Device;
        $device->fill($request->all())->save();
        $result = $device;

        if ($result) {
            return ["Result" => "成功しました"];
        } else {
            return ["Result" => "失敗をしました"];
        }
    }

    function update(Request $request)
    {
        $device = Device::find($request->id);
        $device->fill($request->all())->save();
        $result = $device;

        if ($result) {
            return ["Result" => "成功しました"];
        } else {
            return ["Result" => "失敗をしました"];
        }
    }

    function search($name)
    {
        return Device::where("name", "like", "%" . $name . "%")->get();
    }
}
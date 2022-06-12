<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\DeviceService;
use App\Services\GetDataService;
use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Add;
use App\Http\Resources\DeviceResource;
use App\Http\Requests\DeviceRequest;

class DevlceController extends Controller
{

    function index(DeviceService $service)
    {
        $device = $service->getData();
        return new DeviceResource($device);
    }

    function store(DeviceService $service, Request $request)
    {
        $device = $service->store($request->all());
        return new DeviceResource($device);
        //return $device->fill($request->all())->save();
    }

    // function update(Request $request)
    // {
    //     $device = Device::find($request->id);
    //     $device->fill($request->all())->save();
    //     $result = $device;

    //     if ($result) {
    //         return ["Result" => "成功しました"];
    //     } else {
    //         return ["Result" => "失敗をしました"];
    //     }
    // }

    // function search($name)
    // {
    //     $device = new Device;
    //     $device->search($name);
    //     return $device;
    //     //return Device::where("name", "like", "%" . $name . "%")->get();
    // }

    // function delete($id)
    // {
    //     $device = Device::find($id);
    //     $result = $device->delete();

    //     if ($result) {
    //         return ["Result" => "成功しました"];
    //     } else {
    //         return ["Result" => "失敗をしました"];
    //     }
    // }

    // function save(Request $request)
    // {
    //     $rules = array(
    //         "menber_id" => "required"
    //     );
    //     $validator = Validator::make($request->all(), $rules);
    //     if ($validator->fails()) {
    //         return response()->json($validator->errors(), 401);
    //     } else {
    //         $device = new Device;
    //         $device->fill($request->all())->save();
    //         $result = $device;
    //         if ($result) {
    //             return ["Result" => "成功しました"];
    //         } else {
    //             return ["Result" => "失敗をしました"];
    //         }
    //     }
    // }
}
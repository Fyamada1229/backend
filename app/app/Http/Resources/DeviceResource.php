<?php

namespace App\Http\Resources;

use App\Http\Resources\BaseResource;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @SWG\Definition(definition="Master_CorporationGroupResource", type="object")
 */
class DeviceResource extends BaseResource
{
    /**
     * @var string
     */
    //public static $wrap = '';

    /** Jsonに出力するリレーション */
    public $with = [];

    /** Jsonに出力するアクセサ */
    protected $appends = [];

    /** Jsonに出力する項目 */
    protected $visible = [];

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
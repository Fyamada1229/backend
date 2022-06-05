<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\Model;

class BaseResource extends JsonResource
{
    // Resourceクラスが持っていた $with を別の用途で使用する。
    // https://readouble.com/laravel/5.6/ja/eloquent-resources.html#adding-meta-data
    // を利用する場合は with() をオーバーライドする。
    public $with = [];
    protected $appends = [];
    protected $visible = [];
    protected $hidden = [
        'deleted_at',
        'deleted_user',
    ];



    public function __construct($resource)
    {
        if ($resource instanceof Model) {
            if ($this->with) {
                //$resource->loadMissing($this->with);
                // TODO: Laravelのバージョンを上げたので、loadMissingで問題なくなっているかもしれない。
                //       検証が必要

                // 同階層のwithが効かなくなるので、先に読み込み済みでないリレーション先を取る。
                $targetWith = [];
                foreach ($this->with as $relation) {
                    // 深い階層を指定するとイーガーローディングが効かないので、最初の階層が読み込み済みなら深い階層は取らないようにしておく。
                    $first_relation = explode('.', $relation)[0];
                    if (!$resource->relationLoaded($first_relation)) {
                        $targetWith[] = $relation;
                    }
                }
                $resource->load($targetWith);
                // foreach ($targetWith as $relation) {
                //     $resource->load($relation);
                // }
            }
            if ($this->appends) {
                $resource->append($this->appends);
            }
            if ($this->visible) {
                $resource->makeVisible($this->visible);
            }
            if ($this->hidden) {
                $resource->makeHidden($this->hidden);
            }

            $this->prepare($resource, request());
        }

        parent::__construct($resource);
    }

    /**
     * データ準備
     */
    public function prepare($resource, $request)
    {
    }

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

    /**
     *
     * {@inheritDoc}
     * @see \Illuminate\Http\Resources\Json\JsonResource::with()
     */
    public function with($request)
    {
        return [];
    }
}
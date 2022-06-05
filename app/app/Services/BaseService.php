<?php

namespace App\Services;

class BaseService
{
    /**
     * 検索を行う
     * @param array $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function query(array $params)
    {
        return null;
    }

    /**
     * 検索を行う
     * @param array $params
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Collection
     */
    public function search(array $params)
    {
        $query = $this->query($params);
        $perPage = $this->getPerPage();
        if ($perPage) {
            return $query->paginate($perPage);
        }
        return $query->get();
    }

    /**
     * ページ表示数を取得する
     * @return \Illuminate\Http\Request|string|array
     */
    protected function getPerPage()
    {
        return request('per_page', config('const.paginate.per_page_default'));
    }
}
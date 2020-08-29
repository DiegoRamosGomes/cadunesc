<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

trait RequestPaginator
{
    /**
     * Cria paginacao dos items quando o request apresenta parametros
     * para realizar paginacao.
     *
     * @param Builder $query
     * @return LengthAwarePaginator|Paginator|Collection
     */
    public function rawPagination(Builder $query)
    {
        $request = request();

        if ($this->requestsPagination($request)) {
            $total = $this->countTotal($query);

            $items = $query->forPage($request->offset, $request->limit)->get();

            return new LengthAwarePaginator($items, $total, $request->limit, $request->offset);
        }

        return $query->get();
    }

    /**
     * Determina se request possui paginacao.
     *
     * @param Request|null  $request
     * @return bool
     */
    public function requestsPagination(Request $request = null)
    {
        $request = $request ?: request();

        return $request->has('offset') && $request->has('limit') && ($request->offset && $request->limit);
    }

    /**
     * Conta o total de resultados da query mesmo quando houver
     * clausulas UNION.
     *
     * @param Builder $query
     * @return int
     */
    protected function countTotal(Builder $query)
    {
        $bindings = $query->getBindings();

        $sql = $query->toSql();

        foreach ($bindings as $binding) {
            $value = is_numeric($binding) ? $binding : "'" . $binding . "'";
            $sql = preg_replace('/\?/', $value, $sql, 1);
        }

        $sql = str_replace('\\', '\\\\', $sql);

        return DB::select(DB::raw("select count(*) as aggregate from ({$sql}) as aggregate_table"))[0]->aggregate;
    }
}

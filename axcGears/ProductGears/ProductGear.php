<?php

namespace Axc\UserGears;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;


class ProductGear extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ProductMethods::class;
    }
}

class ProductMethods
{
    protected $model;

    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = new Product();
    }

    /**
     * Method all
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        return $this->model->all();
    }

    /**
     * Method own
     *
     * @param $params $params [explicite description]
     * @param $type $type [explicite description]
     * @param $paginate $paginate [explicite description]
     *
     * @return mixed
     */
    public function own($params, $type = 1, $paginate = 6): mixed
    {
        return $this->model->own($params, $type, $paginate);
    }



    /**
     * Method find
     *
     * @param int $id [explicite description]
     *
     * @return Product
     */
    public function find(int $id): ?Product
    {
        return $this->model->findOrFail($id);
    }


    /**
     * Method exists
     *
     * @param int $id [explicite description]
     *
     * @return Bool
     */
    public function exists(int $id): Bool
    {
        return $this->model->exists($id);
    }


    /**
     * Method get
     *
     * @param array $ids [Id's array of Users]
     *
     * @return Collection
     */
    public function get(array $ids): ?Collection
    {
        return $this->model->getByIds($ids);
    }


    /**
     * Method firstOrCreate
     *
     * @param array $params [explicite description]
     *
     * @return Product
     */
    public function firstOrCreate(array $params): Product
    {
        return $this->model->firstOrCreate($params);
    }

    /**
     * Method create
     *
     * @param array $data [explicite description]
     *
     * @return Product
     */
    public function create(array $data): Product
    {
        return $this->model->create($data);
    }

    /**
     * Method update
     *
     * @param Product $product [explicite description]
     * @param array $data [explicite description]
     *
     * @return Bool
     */
    public function update(Product $product, array $data): Bool
    {
        return $product->update(array_merge($product->toArray(), $data));
    }


    /**
     * Method delete
     *
     * @param Product $product [explicite description]
     *
     * @return bool
     */
    public function delete(Product $product): ?bool
    {
        return $product->delete();
    }
}

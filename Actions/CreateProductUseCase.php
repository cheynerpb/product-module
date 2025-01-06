<?php

namespace Modules\Product\Actions;

use Modules\Product\Models\Product;

class CreateProductUseCase
{
    public function __invoke(array $data): Product
    {
        return Product::create($data);
    }
}

<?php

namespace HexagonBoilerplate\Promotion\Infrastructure\Persistence;

use HexagonBoilerplate\Promotion\Domain\Brand;
use HexagonBoilerplate\Promotion\Domain\BrandId;
use HexagonBoilerplate\Promotion\Domain\BrandReadRepository;
use HexagonBoilerplate\Promotion\Domain\BrandWriteRepository;

class BrandRepository implements BrandReadRepository, BrandWriteRepository
{

    public function get(BrandId $brandId): ?Brand
    {
        // TODO: Just find data
    }

    public function getNextBrandId(): BrandId
    {
        return BrandId::next();
    }

    public function getAndLock(BrandId $brandId): ?Brand
    {
        // TODO: Find data with PESSIMISTIC_WRITE lock
    }

    public function put(Brand $brand): BrandId
    {
        // TODO: Only persist, without flush.
    }

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $offset
     * @param int|null $limit
     * @return Brand[]
     */
    public function getByCriteria(array $criteria, ?array $orderBy = null, ?int $offset = null, ?int $limit = null): array
    {
        // TODO: Implement getByCriteria() method.
    }
}
<?php

namespace HexagonBoilerplate\Promotion\Domain;


interface BrandReadRepository
{
    public function get(BrandId $brandId): ?Brand;

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param int|null $offset
     * @param int|null $limit
     * @return Brand[]
     */
    public function getByCriteria(array $criteria, ?array $orderBy = null, ?int $offset = null, ?int $limit = null): array;
}
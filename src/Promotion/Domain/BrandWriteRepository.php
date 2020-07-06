<?php

namespace HexagonBoilerplate\Promotion\Domain;


interface BrandWriteRepository
{
    public function getNextBrandId(): BrandId;
    public function get(BrandId $brandId): ?Brand;
    public function getAndLock(BrandId $brandId): ?Brand;
    public function put(Brand $brand): BrandId;
}
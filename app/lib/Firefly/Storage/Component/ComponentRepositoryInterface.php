<?php


namespace Firefly\Storage\Component;


interface ComponentRepositoryInterface
{

    public function count();

    public function store($data);

} 
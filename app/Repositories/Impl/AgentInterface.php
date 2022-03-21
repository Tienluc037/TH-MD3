<?php
namespace App\Repositories\Impl;
interface AgentInterface
{
    public function store($request);

    public function update($id,$request);
}

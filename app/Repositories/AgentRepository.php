<?php
namespace App\Repositories;
use App\Models\Agent;
use App\Repositories\Impl\BaseInterface;

class AgentRepository extends BaseRepository implements BaseInterface
{
    public $table = "agent-management";
    public function getModel()
    {
        return Agent::class;
    }
}

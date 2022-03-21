<?php
namespace App\Services;
use App\Models\Agent;
use App\Repositories\AgentRepository;

class AgentService extends BaseService
{
   public $agentRepository;
   public function __construct(AgentRepository $agentRepository)
   {
       $this->agentRepository = $agentRepository;
   }

    public function getAll()
    {
        return $this->agentRepository->getAll();
    }
    public function store($request)
    {
        $agent = new Agent();
//        $agent->agentCode = $request->input('agentCode');
        $agent->name = $request->input('name');
        $agent->phone = $request->input('phone');
        $agent->email = $request->input('email');
        $agent->address = $request->input('address');
        $agent->managerName = $request->input('managerName');

        $agent->save();

    }
    public function update($id,$request)
    {
        $agent =$this->agentRepository->getById($id);
//        $agent->agentCode = $request->input('agentCode');
        $agent->name = $request->input('name');
        $agent->phone = $request->input('phone');
        $agent->email = $request->input('email');
        $agent->address = $request->input('address');
        $agent->managerName = $request->input('managerName');

        $agent->save();

    }

    public function getById($id)
    {
        return $this->agentRepository->getById($id);
    }

    public function deleteById($id)
    {
        return $this->agentRepository->deleteById($id);
    }
}

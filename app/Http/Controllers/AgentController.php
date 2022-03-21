<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Repositories\AgentRepository;
use App\Services\AgentService;
use Illuminate\Http\Request;

class AgentController extends Controller
{

    protected $agentService;

    public function __construct(AgentService $agentService )
    {
        $this->agentService = $agentService;
    }

        public function index()
    {
        $agents = $this->agentService->getAll();
        return view('agent.list',compact('agents'));
    }


        public function create()
    {
        $status = Status::all();
        return view('agent.create',compact('status'));
    }

        public function store(Request $request)
    {
        $this->agentService->store($request);
        return redirect()->route('agents.index');
    }

        public function edit($id)
    {
        $status = Status::all();
        $agent = $this->agentService->getById($id);
        return view('agent.update',compact('agent','status'));
    }

        public function update(Request $request, $id)
    {
        $this->agentService->update($id,$request);
        return redirect()->route('agents.index');
    }

        public function destroy($id)
    {
        $this->agentService->deleteById($id);
        return redirect()->route('agents.index');
    }

}

<a href="{{route('agents.create')}}">Create</a>
<table border="2px">
    <thead>
    <tr>
        <th>Agent Code</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Manager Name</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($agents as $agent)
        <tr>
            <td>{{$agent->agentCode}}</td>
            <td>{{$agent->name}}</td>
            <td>{{$agent->phone}}</td>
            <td>{{$agent->email}}</td>
            <td>{{$agent->address}}</td>
            <td>{{$agent->managerName}}</td>
            <td><a style="color: #0d730a" href="{{route('agents.edit',$agent->id)}}">Update</a></td>
            <td><a style="color: red" onclick="return confirm('Are you sure?')"
                   href="{{route('agents.destroy',$agent->id)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

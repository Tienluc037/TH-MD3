<form method="post" action="{{ route('agents.store') }}">
    @csrf
    <label for="">Trạng thái</label>
    <select name="status" id="status"  >
        @foreach($status as $statu)
            <option value="{{$statu->id}}">{{$statu->name}}</option>
        @endforeach
    </select>
    <input type="text" name="name" placeholder="Enter name">
    <input type="text" name="phone" placeholder="Enter phone">
    <input type="text" name="email" placeholder="Enter email">
    <input type="text" name="address" placeholder="Enter address">
    <input type="text" name="managerName" placeholder="Enter Manager Name">
    <button type="submit" class="btn btn-primary">Create</button>
    <a class="btn btn-success" href="{{route('agents.index')}}">Back</a>
</form>

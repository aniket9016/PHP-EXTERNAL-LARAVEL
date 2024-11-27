<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
<h1>Employee data</h1>
<a href="register" class="btn btn-outline-primary">Add</a>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Hobby</th>
        <th>City</th>
        <th>DOB</th>
        <th>Action</th>
    </tr>
    @foreach ($employee as $e)
        <tr>
            <td>{{$e->name}}</td>
            <td>{{$e->email}}</td>
            <td>{{$e->gender}}</td>
            <td>{{$e->hobby}}</td>
            <td>{{$e->city}}</td>
            <td>{{$e->dob}}</td>
            <td>
                <a href="/update/{{$e->eid}}" class="btn btn-outline-dark">Update</a>
                <a href="/delete/{{$e->eid}}" class="btn btn-outline-danger">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@if(session('success'))
    <div class="alert alert-danger">
        {{session('success')}}
    </div>
@endif
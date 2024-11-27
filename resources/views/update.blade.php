<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
<h1>User Updation</h1>
<form action="/update" method="post">
    @csrf
    <table>
        <input type="hidden" name="eid" value="{{$employee->eid}}">
        <tr>
            <td><label for="name">Name :</label></td>
            <td><input class="form-control" type="text" name="name" id="name" value="{{$employee->name}}" required></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input class="form-control" type="email" name="email" id="email" value="{{$employee->email}}" required>
            </td>
        </tr>
        <tr>

            <td><label for="gender">Gender :</label></td>
            <td>
                <div class="form-control">
                    <input type="radio" {{$employee->gender == "male" ? 'checked' : ''}} name="gender" value="male">Male
                    <input type="radio" name="gender" value="female" {{$employee->gender == "female" ? 'checked' : ''}}>Female
                </div>
            </td>
        </tr>
        <tr>
            <td>
                City:
            </td>
            <td>
                <select class="form-select" name="city" id="city">
                    <option value="surat" {{$employee->city == "surat" ? 'selected' : ""}}>surat</option>
                    <option value="vapi" {{$employee->city == "vapi" ? 'selected' : ""}}>vapi</option>
                    <option value="valsad" {{$employee->city == "valsad" ? 'selected' : ""}}>valsad</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Hobby:
            </td>
            <td>
                @php
                    $arr = explode(',', $employee->hobby);
                @endphp
                <div class="form-control">
                    <input type="checkbox" {{in_array("cricket", $arr) ? 'checked' : ''}} class="form-check-input"
                        name="hobby[]" id="hobby" value="cricket"> Cricket
                    <input type="checkbox" {{in_array("hockey", $arr) ? 'checked' : ''}} class="form-check-input"
                        name="hobby[]" id="hobby" value="hockey"> Hockey
                    <input type="checkbox" {{in_array("other", $arr) ? 'checked' : ''}} class="form-check-input"
                        name="hobby[]" id="hobby" value="other"> Other
                </div>
            </td>
        </tr>
        <tr>
            <td>DOB: </td>
            <td><input class="form-control" type="date" name="dob" value="{{$employee->dob}}" id="dob" required></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-outline-success">Update</button>
    <a class="btn btn-outline-dark" href="/display">display</a>
</form>
@if(session('success'))
    <div class="alert alert-dark">
        {{session('success')}}
    </div>
@endif
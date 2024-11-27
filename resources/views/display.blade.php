<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
<h1>User Registration</h1>
<form action="/store" method="post">
    @csrf
    <table>
        <tr>
            <td><label for="name">Name :</label></td>
            <td><input class="form-control" type="text" name="name" id="name" required></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input class="form-control" type="email" name="email" id="email" required></td>
        </tr>
        <tr>

            <td><label for="gender">Gender :</label></td>
            <td>
                <div class="form-control">

                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </div>
            </td>
        </tr>
        <tr>
            <td>
                City:
            </td>
            <td>
                <select class="form-select" name="city" id="city">
                    <option value="surat">surat</option>
                    <option value="vapi">vapi</option>
                    <option value="valsad">valsad</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Hobby:
            </td>
            <td>
                <div class="form-control">
                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="cricket"> Cricket
                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="hockey"> Hockey
                    <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="other"> Other
                </div>
            </td>
        </tr>
        <tr>
            <td>DOB: </td>
            <td><input class="form-control" type="date" name="dob" id="dob" required></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-outline-success">Submit</button>
    <a href="display" class="btn btn-outline-dark">Display Data</a>
</form>
@if(session('success'))
    <div class="alert alert-primary">
        {{session('success')}}
    </div>
@endif
@extends('layout.inputlayout')

@section('content')
    



    <div class="container">
        <form method="get" style="max-width:500px" class="mx-auto mt-5" action="">
            <h1 class="mb-1">Register</h1>
            <div class="form-group mb-3">
                <label for="form-name">Name</label>
                <input class="form-control" type="text" name="student_name">
            </div>
            <div class="form-group mb-3">
                <label for="form-sname">Surname</label>
                <input class="form-control" type="text" name="form-sname">
            </div>
            <div class="form-group mb-3">
                <label for="form-dob">Birthdate</label>
                <input class="form-control" type="date" name="form-dob">
            </div>
            <div class="form-group mb-3">
                <label for="form-faculty">Faculty</label>
                <select class="form-select" name="form-faculty" >
                    <option selected></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <input type="submit" class="btn btn-primary mt-5 mx-auto d-block w-100" name="form-submit" value="Submit">
            <input type="button" class="btn btn-danger mt-2 mx-auto d-block w-100" name="form-cancel" value="Cancel">
        </form>
    </div>


@endsection
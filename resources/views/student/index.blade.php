@extends('layout.inputlayout')

@section('content')
<div class="container">
    <div class="table-responsive">
        
    <table class="table table-bordered  mx-auto mt-5">
        <thead>
        <a href="/student/create" class="btn btn-success mt-5">Student Create</a>
        <tr class="text-center">
            
            <th>First</th>
            <th>Last</th>
            <th>Faculty</th>
            <th width="150px"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $value)
            <tr>
                <td>{{$value['firstname']}}</td>
                <td>{{$value['lastname']}}</td>
                <td>{{$value['faculty']}}</td>
                <td class="text-center"><a href="#" class="btn btn-danger ">Do Something</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
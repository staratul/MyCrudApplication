@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-success">+ Add Student</button>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (isset($students) && count($students) > 0)
                            @foreach ($students as $key => $student)
                                <tr>
                                    <th scope="row">{{$key + 1}}</th>
                                    <td>{{$student->Name}}</td>
                                    <td>{{$student->Email}}</td>
                                    <td>{{$student->Password}}</td>
                                    <td>
                                        <a href="{{route('students.edit', $student->Id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('students.destory', $student->Id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
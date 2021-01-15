@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="d-flex justify-content-between">
                        <div> list</div>
                        <div>
                            <a href="/create" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                </h5>
                <table class=" table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Student No</th>
                            <th>Frist Name</th>
                            <th>Last Name</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>123456</td>
                            <td>Toon</td>
                            <td>php</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/show/1" class="btn btn-outline-primary">edit</a>
                                    <button class="btn btn-outline-danger">del</button>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

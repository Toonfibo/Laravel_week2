@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="d-flex justify-content-between">
                        <div>Show</div>
                    </div>
                </h5>
                <form action="">
                    <div class="form group">
                        <label for="student_no">Student No</label>
                        <input type="text" class="form-control" id="student_no" name="student_no">
                    </div>

                    <div class="form group">
                        <label for="student_no">Frist Name</label>
                        <input type="text" class="form-control" id="student_no" name="student_no">
                    </div>

                    <div class="form group">
                        <label for="student_no">Last Name</label>
                        <input type="text" class="form-control" id="student_no" name="student_no">
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

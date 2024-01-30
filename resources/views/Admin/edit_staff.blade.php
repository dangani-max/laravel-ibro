@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Staff</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{URL::to('update-staff/'.$staff->id)}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Customer Name</label>
                                        <input class="form-control py-4" name="name" value="{{ $staff->name }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Staff Email</label>
                                        <input class="form-control py-4" name="email" value="{{ $staff->email }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Staff Designation</label>
                                        <input class="form-control py-4" name="designation" value="{{ $staff->designation }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Staff Number</label>
                                        <input class="form-control py-4" name="staff_no" value="{{ $staff->staff_no }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Department</label>
                                        <input class="form-control py-4" name="department" value="{{ $staff->department }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Station</label>
                                        <input class="form-control py-4" name="station" value="{{ $staff->station }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Address</label>
                                        <input class="form-control py-4" name="address" value="{{ $staff->address }}" type="text" placeholder="" />
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Phone</label>
                                        <input class="form-control py-4" name="phone" value="{{ $staff->phone }}" type="text" placeholder="" />
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
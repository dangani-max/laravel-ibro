@extends('layouts.admin_master')

@section('content')

<main>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">New Schedule</h3></div>
        <div class="card-body">
            <form method="POST" action="{{url('/insert-new-order') }}" enctype="multipart/form-data">
            @csrf
                    <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputFirstName">Staff Name</label>
                            <select id="name" name="name" class="form-control">
                                <option selected>Choose...</option>
                                @foreach($customers as $c)
                                    <option value="{{$c->name}}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    
                        
                    
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputState">Machine Serial Number</label>
                            <select id="inputState" name="serial_no" class="form-control">
                            <option selected>Choose...</option>
                            @foreach($products as $row)
                                
                                    <option>{{ $row->serial_no }}</option>
                               
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputState">Machine Name</label>
                            <select id="inputState" name="machine_name" class="form-control">
                            <option selected>Choose...</option>
                            @foreach($products as $row)
                                
                                    <option value="{{$row->name}}">{{ $row->name }}</option>
                               
                            @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Station</label>
                            <select id="inputState" name="station" class="form-control">
                            <option selected>Choose...</option>
                            @foreach($products as $row)
                                
                                    <option value="{{$row->station}}">{{ $row->station }}</option>
                               
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Maintenance Due Date</label>
                            <input class="form-control py-4" name="maint_date" type="date" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Next Maintenance Date</label>
                            <input class="form-control py-4" name="next_date" type="date" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Maintenance Status</label>
                            <select id="inputState" name="maint_status" class="form-control">
                            <option value="0" selected>Pending</option>
                            <option value="1" selected>Completed</option>
                            
                            </select>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"></script>
<script>
$(document).ready(function(){
$("#name").change(function() {
    var c_name = $("#name").val(); 
    console.log(c_name);
    $.ajax({
        type: 'POST',
        url: "http://127.0.0.1:8000/api/get-customer",
        dataType: 'json',
        data: {
            "id" : c_name
        },
        success: function(data) {
            console.log(data);
            $("#email").html('<label class="small mb-1" for="inputFirstName">Staff Email</label>');
            var x = '<input class="form-control py-4" name="email" value="'+data.customer.email+'" type="text"/>';
            $("#email").append(x);

            $("#company").html('<label class="small mb-1" for="inputFirstName">Staff Station</label>');
            var x = '<input class="form-control py-4" name="station" value="'+data.customer.company+'" type="text"/>';
            $("#company").append(x);

            $("#phone").html('<label class="small mb-1" for="inputFirstName">Staff Phone</label>');
            var x = '<input class="form-control py-4" name="phone" value="'+data.customer.phone+'" type="text"/>';
            $("#phone").append(x);

            $("#address").html('<label class="small mb-1" for="inputFirstName">Staff Address</label>');
            var x = '<input class="form-control py-4" name="address" value="'+data.customer.address+'" type="text"/>';
            $("#address").append(x);
        }
    });
});
});
</script>
@endsection
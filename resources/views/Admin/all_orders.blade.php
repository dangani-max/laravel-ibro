@extends('layouts.admin_master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Maintenance List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Maint Id</th>
                        <th>Machine Serial No</th>
                        <th>Machine Name</th>
                        <th>Staff Name</th>
                        <th>Station</th>
                        <th>Maint. Due Date</th>
                        <th>Maint. Next Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($orders as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->serial_no }}</td>
                        <td>{{ $row->machine_name }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->station }}</td>
                        <td>{{ $row->maint_date }}</td>
                        <td>{{ $row->next_date }}</td>
                        <td>
                            @if($row->maint_status=='0')
                                <a href="#" class="btn btn-sm btn-info">Pending</a>
                            @else
                                <a href="#" class="btn btn-sm btn-info">Completed</a>
                            @endif
                        </td>
                        <td>
                            @if($row->maint_status=='0')
                                <a href="#" class="btn btn-sm btn-info">carry out maint</a>
                            @else
                                <a href="#" class="btn btn-sm btn-info">Finished</a>
                            @endif
                            
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        
<script>
   


   $('#dataTable').DataTable({
    columnDefs: [
    {bSortable: false, targets: [6]} 
  ],
                dom: 'lBfrtip',
           buttons: [
               {
                   extend: 'copyHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                       columns: [ 0, ':visible' ]
                       
                   }
               },
               {
                   extend: 'excelHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                    columns: [ 0, ':visible' ]
                   }
               },
               {
                   extend: 'pdfHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                       columns: [ 0, 1, 2, 5 ]
                   }
               },
               'colvis'
           ]
           });
       </script>
@endsection
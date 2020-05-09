@extends('admin.mainframe')
@section('content')
    <?php
        //Call User Privileges
        $canDelete = true;
        $access = \App\Helper\CommonFunction::getUserAccess('activity_log');
        if(!empty($access)){
            if($access->can_delete == NULL)
                $canDelete = false;
        }
    ?>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Activity Log</li>
        </ol>

        @include('admin.includes.messages')

        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="font-weight-bold">User's Log</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="">
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(!empty($logs)){
                                        foreach ($logs as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row->logmsg ?></td>
                                        <td><?php echo date("d-m-Y, h:i A", strtotime($row->created_at)) ?></td>
                                        <td>
                                            <?php if($canDelete){ ?>
                                            <a href="{{ url('/dashboard/activity-log/'.$row->id) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this?');">Delete</a>
                                            <?php } else echo "N/A" ?>
                                        </td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>

                            <div class="float-right">
                                {{ $logs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
        </script>
    
@endsection
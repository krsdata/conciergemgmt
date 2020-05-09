@extends('admin.mainframe')
@section('content')
<style>
    .error{
        font-size: 1rem;
    }
</style>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Header Logo</h1>
        </div>

        @include('admin.includes.messages')
        @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add a Logo</div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/dashboard/addlogo') }}" method="post" enctype="multipart/form-data" id="update_logo">
                            @csrf
                            
                            <?php foreach($logos as $logo){ ?>
                                <img src="{{ asset('../template/frontend/images/'.$logo['logo']) }}" height="30px" width="30px" id="blah">
                            <?php } ?>
                            <div>
                                <label>Logo</label>
                                <input type="file" name="logo" id="imgInp" accept="image/jpg,image/jpeg">
                            </div>
                            <div>*Note: The best fits is 170 px *150 px.</div><br/>
                            <div>
                                <button type="submit" class="btn btn-outline-success pull-right">Add Logo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

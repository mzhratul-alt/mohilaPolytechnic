@extends('admins.template.master');

@section('main_content')
<div class="container-fluid">
   <div class="card">
      <div class="card-header d-flex flex-wrap justify-content-between">
         <h5>User List</h5>
         <a href="#" class="btn btn-success">
            <i class="fas fa-user pe-3"></i>Add New User
         </a>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                     <th>Sl. No.</th>
                     <th>Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @forelse ($users as $user)
                  <tr>
                     <td>{{ $loop->index + 1 }}</td>
                     <td class="text-capitalize">{{ $user->name }}</td>
                     <td>
                        <a href="#" class="btn btn-sm btn-info">
                           <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-warning">
                           <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                           <i class="fas fa-trash"></i>
                        </a>
                     </td>
                  </tr>
                  @empty
                     <div class="alert alert-danger">No User Found!</div>
                  @endforelse
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
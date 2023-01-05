@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
          <a href="{{ route('travel-package.create')}}" class="btn btn-primary btn-sm sm-shadow ">
               <i class="fas fa-plus fa-sm text-white-50">
                    Tambah Category
               </i>
          </a>
          </div>

          <div class="row">
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered width=100%" cellspacing="0">
                              <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Parent</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @forelse ($items as $item)
                                         <tr>
                                       
                                             <td>{{ $item->id }}</td>
                                             <td>{{ $item->name}}</td>
                                             <td>{{ $item->slug}}</td>
                                             <td>{{ $item->parent_id }}</td>
                                            
                                             <td>
                                             <a href="{{route('travel-package.edit')}}" class="btn btn-info">
                                                  <i class="fa fa-pencil-alt"></i>
                                             </a>

                                             <form action="{{route('travel-package.destroy')}}" method="POST" class="d-inline">
                                                  @csrf
                                                  @method('delete')
                                                  <button class="btn btn-danger">
                                                       <i class="fa fa-trash"></i>
                                                  </button>
                                             </form>
                                        </td>
                                   </tr>
                                   @empty
                                        <tr colspan="7" class="text-center">
                                             <td>Data Kosong</td>
                                        </tr>
                                   @endforelse
                                       
                              
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
       

        

        </div>
        <!-- /.container-fluid -->
@endsection
@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Team" currentPage="Team"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- table dark start -->
            <div class="col-lg-12 mt-5">
                <div class="row justify-content-between">
                    
                    <div class="col-auto ml-0">
                        
                        <x-outline-button color="primary" href="{{route('teams.create')}}">Add Team Member</x-outline-button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-dark">
                                        <tr class="text-white">
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $cause)
                                            <td>{{$cause->title}}</td>
                                            <td>{{$cause->description}}</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor"
                                                            href="{{ route('cause.edit', $cause->id) }}"
                                                            title="Edit Category" class="btn btn-sm btn-success"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-toggle="modal"
                                                            data-target="#modal-delete{{ $cause->id }}"
                                                            title="Delete User"><i class="fas fa-trash "></i></button>
                                                        <div class="modal fade" id="modal-delete{{ $cause->id }}"
                                                            tabindex="-1" aria-labelledby="modal-new-address"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog  modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title" id="staticBackdropLabel">
                                                                        </h6>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="{{ route('cause.destroy', $cause->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <div class="row gy-3">
                                                                                <div class="col-xl-6">
                                                                                    <H2>Are you Sure ?</H2>
                                                                                    <p>You won't be able to revert this!</p>
                                                                                </div>
                                                                            </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-danger">Yes,
                                                                            Delete It</button>
                                                                    </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </td>
                                        @empty
                                            <td colspan="2">No data present</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table dark end -->
            
        </div>
    </div>
@endsection
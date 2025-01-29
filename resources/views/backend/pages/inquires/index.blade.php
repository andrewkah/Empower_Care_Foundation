@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Inquiries" currentPage="Inquiries"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- table dark start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                      @can('inquires-pdf')
                                            <a href="{{ route('contact.pdf') }}" class="btn btn-sm btn-primary float-right my-2 mr-3"
                                                            title="Download PDF Report"><i
                                                                class="fa fa-file fa-md mr-2"></i>Download PDF</a>
                                            @endcan
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-dark">
                                        <tr class="text-white">
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $cause)
                                            <tr>
                                                <td>{{ $cause->name }}</td>
                                                <td>{{ $cause->email }}</td>
                                                <td>{!! $cause->phone !!}</td>
                                                <td>{{ $cause->message }}</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        @can('inquires-delete')
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-toggle="modal"
                                                            data-target="#modal-delete{{ $cause->id }}"
                                                            title="Delete Contact"><i
                                                                class="fa fa-trash fa-lg"></i></button>
                                                        @endcan
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
                                                                            action="{{ route('contact.destroy', $cause->id) }}"
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
                                            </tr>
                                          
                                        @empty
                                        <tr>
                                            <td colspan="5">No data present</td>
                                        </tr>
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
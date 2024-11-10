@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Album" currentPage="Album"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- table dark start -->
            <div class="col-lg-12 mt-5">
                <div class="row justify-content-between">

                    <div class="col-auto ml-0">

                        <x-outline-button color="primary" href="{{ route('album.create') }}">Add Album</x-outline-button>
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
                                            <th scope="col">Details</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $cause)
                                        <tr>
                                            <td>{{ $cause->title }}</td>
                                            <td> 
                                                <div class="media mb-2 mt-2">                                               
                                                <div class="media-body">
                                                    <img class="img-fluid mr-2" src="{{Storage::url($cause->cover_photo)}}" style="height: 60px;" alt="image">
                                                    {!!$cause->description!!} <br>
                                                    
                                                </div>
                                            </div></td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="{{ route('album.edit', $cause->id) }}"
                                                        title="Edit Album" class="btn btn-sm btn-success"><i
                                                            class="fa fa-pencil-square-o fa-lg"></i></a>
                                                    <a aria-label="anchor" href="{{ route('album.show', $cause->id) }}"
                                                        title="view Album Album" class="btn btn-sm btn-success"><i
                                                            class="fa fa-eye"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                        data-target="#modal-delete{{ $cause->id }}"
                                                        title="Delete Album"><i class="fa fa-trash fa-lg"></i></button>
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
                                                                        action="{{ route('album.destroy', $cause->id) }}"
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
                                            <td colspan="3">No data present</td>
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

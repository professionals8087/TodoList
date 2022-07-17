@extends('index')
@section('title', 'Info ToDo')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card" id="list1"
                style="border-radius: .75rem; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                <div class="card-body py-4 px-4 px-md-5">
                    <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                        <i class="fas fa-check-square me-1"></i>
                        <u>My Todo-s</u>
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Update_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="fw-normal mb-0">{{ $show->description }}</p>
                                </td>
                                <td>{{ $show->created_at }}</td>
                                <td>{{ $show->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('index')
@section('title', 'List Categories')
@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card" id="list1"
                style="border-radius: .75rem; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                <div class="card-body py-4 px-4 px-md-5">
                    <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                        <i class="fas fa-check-square me-1"></i>
                        <u>My Categories</u>
                    </p>

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach

                    <div class="pb-2">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('createcategories') }}" method="POST">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <input type="text" name="name" class="form-control"
                                            id="exampleFormControlInput1" placeholder="Add new...">
                                        <button type="submit" class="btn btn-info text-white">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Updated_at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $stmt)
                                <tr>
                                    <td>{{ $stmt->id }}</td>
                                    <td>
                                        <p class="fw-normal mb-0">{{ $stmt->name }}</p>
                                    </td>
                                    <td>{{ $stmt->created_at }}</td>
                                    <td>{{ $stmt->updated_at }}</td>
                                    <td>
                                        <div class="d-flex flex-row justify-content-start">
                                            <a href="/categories/update/{{ $stmt->id }}"
                                                class="btn btn-primary btn-action m-1" data-mdb-toggle="tooltip"
                                                title="Edit ToDo"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="/categories/delete/{{ $stmt->id }}"
                                                class="btn btn-danger btn-action m-1" data-mdb-toggle="tooltip"
                                                title="Delete ToDo"
                                                onclick="return confirm('آیا میخواهید کار <{{ $stmt->name }}> را حذف کنید؟')"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

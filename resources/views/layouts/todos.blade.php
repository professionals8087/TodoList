    @extends('index')
    @section('title', 'List ToDos')
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

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach

                        <div class="pb-2">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('createtodos') }}" method="POST">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <input type="text" name="title" class="form-control border"
                                                id="exampleFormControlInput1" placeholder="Add new...">
                                        </div>
                                        <div class="mb-2">
                                            <textarea name="description" class="form-control border" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Add Description..."></textarea>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <select class="form-select" aria-label="Default select example" name="category">
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group-btn mt-3">
                                            <button type="submit" class="btn btn-info text-white w-100">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Done</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todo as $item)
                                    <tr class="p-5">
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <p class="fw-normal mb-0">{{ $item->title }}</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-0" name="category">{{ $item->category->name }}</p>
                                        </td>
                                        <td>{{ $item->done_at }}</td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-start">
                                                <a href="/todos/update/{{ $item->id }}"
                                                    class="btn btn-primary btn-action m-1" data-mdb-toggle="tooltip"
                                                    title="Edit ToDo"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="/todos/delete/{{ $item->id }}"
                                                    class="btn btn-danger btn-action m-1" data-mdb-toggle="tooltip"
                                                    title="Delete ToDo"
                                                    onclick="return confirm('آیا میخواهید کار <{{ $item->title }}> را حذف کنید؟')"><i
                                                        class="fas fa-trash-alt"></i></a>
                                                <a href="/todos/done/{{ $item->id }}"
                                                    class="btn btn-success btn-action m-1" data-mdb-toggle="tooltip"
                                                    title="Done ToDo"><i class="fa-solid fa-check"></i></a>
                                                <a href="/todos/details/{{ $item->id }}"
                                                    class="btn btn-warning btn-action m-1 text-white"
                                                    data-mdb-toggle="tooltip" title="Info ToDo"><i
                                                        class="fas fa-info-circle"></i></a>
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
        </div>
    @endsection

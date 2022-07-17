<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CategoryList</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                        <div class="card-body py-4 px-4 px-md-5">

                            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                <u>My Categories</u>
                            </p>

                            <div class="pb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('storeCategory') }}" method="POST">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center">
                                                <input type="text" name="name"
                                                    class="form-control form-control-lg border"
                                                    id="exampleFormControlInput1" placeholder="Add new...">
                                            </div><br>
                                            <div>
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
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
                                        <td>
                                            <div class="text-justify text-muted">
                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip"
                                                    title="created_at">
                                                    <p class="small mb-0">{{ $stmt->created_at}}<i class="fas fa-info-circle me-2"></i>
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-justify text-muted">
                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip"
                                                    title="updated_at">
                                                    <p class="small mb-0">{{ $stmt->updated_at}}<i class="fas fa-info-circle me-2"></i>
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-start p-2 mb-1">
                                                <a href="/category/update/{{ $stmt->id }}" class="text-info" data-mdb-toggle="tooltip"
                                                    title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
                                                <a href="/category/delete/{{ $stmt->id }}" class="text-danger" data-mdb-toggle="tooltip"
                                                    title="Delete todo" onclick="return confirm('آیا میخواهید دسته بندی <{{ $stmt->name }}> را حذف کنید؟')"><i class="fas fa-trash-alt"></i></a>
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
    </section>
    <script src="../js/all.js"></script>
</body>

</html>

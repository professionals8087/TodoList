<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList</title>
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
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center">
                                                <input type="text" name="title"
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


                        <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                            <p class="small mb-0 me-2 text-muted">Filter</p>
                            <select class="select">
                                <option value="1">All</option>
                                <option value="2">Completed</option>
                                <option value="3">Active</option>
                                <option value="4">Has due date</option>
                            </select>
                            <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                            <select class="select">
                                <option value="1">Added date</option>
                                <option value="2">Due date</option>
                            </select>
                            <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                                    class="fas fa-sort-amount-down-alt ms-2"></i></a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($todo as $stmt) --}}
                                    <tr>
                                        <td></td>
                                        <td>
                                            <p class="fw-normal mb-0"></p>
                                        </td>
                                        <td>
                                            <div class="text-justify text-muted">
                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip"
                                                    title="Created date">
                                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row justify-content-start p-2 mb-1">
                                                <a href="#!" class="text-info" data-mdb-toggle="tooltip"
                                                    title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
                                                <a href="#!" class="text-danger"
                                                    data-mdb-toggle="tooltip" title="Delete todo"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
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
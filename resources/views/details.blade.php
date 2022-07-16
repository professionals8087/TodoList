<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DetailsToDo</title>
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
                                <i class="fas fa-check-square me-1"></i>
                                <u>My Todo-s</u>
                            </p>

                            <div class="pb-2">
                                <div class="card">
                                </div>
                            </div>

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
                                        <td>
                                            <div class="text-justify text-muted">
                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip"
                                                    title="created_at">
                                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>
                                                        {{ $show->created_at }}
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-justify text-muted">
                                                <a href="#!" class="text-muted" data-mdb-toggle="tooltip"
                                                    title="updated_at">
                                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>
                                                        {{ $show->updated_at }}
                                                    </p>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
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

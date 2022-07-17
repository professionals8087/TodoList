<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditCategory</title>
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
                                <u>My Categories</u>
                            </p>

                            <div class="pb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('editCategory', ['id' => $id]) }}" method="POST">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center">
                                                <input type="text" name="name" value="{{ $id->name }}"
                                                    class="form-control form-control-lg border"
                                                    id="exampleFormControlInput1" placeholder="Add new...">
                                            </div><br>
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script src="../js/all.js"></script>
</body>

</html>

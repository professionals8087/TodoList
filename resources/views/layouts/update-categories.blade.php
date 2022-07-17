@extends('index')
@section('title', 'Edit Categories')
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
                    <div class="pb-2">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('editcategories', ['id' => $id]) }}" method="POST">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <input type="text" name="name" class="form-control"
                                            id="exampleFormControlInput1" value="{{ $id->name }}">
                                        <button type="submit" class="btn btn-info text-white">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endsection

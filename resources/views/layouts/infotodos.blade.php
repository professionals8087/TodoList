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
                    <div class="pb-2 d-flex justify-content-center">
                        <div class="card col-md-6">
                            <div class="card-body">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">ID</span>
                                    <input type="text" class="form-control border" id="exampleFormControlInput1"
                                        value="{{ $show->id }}" disabled>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text">Title</span>
                                    <input type="text" class="form-control border" id="exampleFormControlInput1"
                                        value="{{ $show->title }}" disabled>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text">Category</span>
                                    <input type="text" class="form-control border" id="exampleFormControlInput1"
                                        value="{{ $show->category->name }}" disabled>
                                </div>
                                <div class="mb-2">
                                    <textarea name="description" class="form-control border" id="exampleFormControlTextarea1" rows="3" disabled>{{ $show->description }}</textarea>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="far fa-calendar-plus"></i></span>
                                    <input type="text" class="form-control border" id="exampleFormControlInput1"
                                        value="{{ $show->created_at }}" disabled>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    <input type="text" class="form-control border" id="exampleFormControlInput1"
                                        value="{{ $show->updated_at }}" disabled>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text"><i class="far fa-calendar-check"></i></span>
                                    <input type="text" class="form-control border" id="exampleFormControlInput1"
                                        value="{{ $show->done_at }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

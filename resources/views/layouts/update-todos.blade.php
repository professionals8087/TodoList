@extends('index')
@section('title', 'Edit ToDos')
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
                    <div class="pb-2">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('edittodos', ['id' => $id]) }}" method="POST">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <input type="text" name="title" class="form-control border"
                                            id="exampleFormControlInput1" value="{{ $id->title }}">
                                    </div>
                                    <div class="mb-2">
                                        <textarea name="description" class="form-control border" id="exampleFormControlTextarea1" rows="3">{{ $id->description }}</textarea>
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <select class="form-select" aria-label="Default select example" name="category">
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}" selected>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group-btn mt-3">
                                        <button type="submit" class="btn btn-info text-white w-100">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endsection

<!-- resources/views/admin/home/edit.blade.php -->

@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Home Page</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.home.update', $homes[0]->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="home_title" class="form-control" value="{{ $homes[0]->home_title }}" required>
                </div>

                <div class="form-group">
                    <label for="home_description">Description:</label>
                    <textarea name="home_description" class="form-control" rows="3" required>{{ $homes[0]->home_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="button_teks">Button_Teks:</label>
                    <input type="text" name="button_teks" class="form-control" value="{{ $homes[0]->button_teks }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="button_url">Button_Url:</label>
                    <input type="text" name="button_url" class="form-control" value="{{ $homes[0]->button_url }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="home_image">Image: {{ $homes[0]->home_image }}</label>
                    <input type="file" name="home_image" class="form-control-file">
                    <img src="{{ asset('/storage/public/' . $homes[0]->home_image) }}" width="50" alt="Current Image">
                    {{-- <img src="/storage/public/" width="50" alt="Current Image"> --}}
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection

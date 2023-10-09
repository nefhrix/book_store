@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Books</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title}}</td>
                <td>{{ $book->escription}}</td>
                <td>
                    @if ($book->book_image)
                        <img src="{{ $book->book_image}}" alt="{{ $book->title}}" width="100px" height="100px">
                    @else
                        No image
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
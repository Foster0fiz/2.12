@extends('layouts.app')

@section('title', 'Show Product')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center post-header mb-4">{{ $product->name }}</h1>
        <h1 class="text-center">{{ $product->body }}</h1>

        @if($product->image)
            <img class="img-preview" src="{{ asset('storage/' . $product->image) }}" width="200" alt="Product Image">
        @else
            <p class="text-center text-muted">No Image Available</p>
        @endif

        <div class="post-details text-center">
            <h1 class="created-updated">Created At: {{ $product->created_at->format('Y-m-d H:i') }}</h1>
            <h1 class="created-updated">Updated At: {{ $product->updated_at->format('Y-m-d H:i') }}</h1>
        </div>

        <!-- Back to Index Button -->
        <div class="text-center back-btn">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
        }

        .post-header {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .post-details h1 {
            font-size: 1.5rem;
            color: #6c757d;
        }

        .img-preview {
            display: block;
            margin: 0 auto 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .created-updated {
            color: #495057;
            font-weight: 600;
        }

        .back-btn {
            margin-top: 20px;
        }
    </style>
@endsection

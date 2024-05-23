<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Test Bootsrap</title>
</head>
<body>

<div class="container my-5">
        <h1>Blog Posts</h1>
        <div class="row">
            @foreach ($blogPosts as $post)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Blog Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <p class="card-text">{{ $post['content'] }}</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

<script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

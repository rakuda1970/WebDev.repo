@extends('layout.app')
@section('content-title') Bootstrap Content @endsection
@section('content')
<h1>Bootstrap Content</h1>
<div class="col-lg-8 px-0">
    <p class="fs-5">Let's take a second to explore some examples of things we can do using Bootstrap.</p>

    <h3>Examples:</h3>

    <ul>
        <li>   <a href="/bootstrap/carousel-external-indicators"></a>
            Carousel with indicators outside of normal heirarchy</li>
    </ul>
    <hr class="col-1 my-4">

    <a href="https://getbootstrap.com" class="btn btn-primary">Read the Bootstrap docs</a>
    <a href="https://github.com/twbs/examples" class="btn btn-secondary">View on GitHub</a>
</div>
@endsection
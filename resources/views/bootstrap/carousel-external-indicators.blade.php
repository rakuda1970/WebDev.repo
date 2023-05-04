@extends('layout.app')
@section('content-title') Carousel with External Indicators @endsection
@section('content')
<h1>Bootstrap Content: Carousel with External Indicators</h1>
<div class="col-lg-8 px-0">
    <p class="fs-5">In this example it is desired to have indicator controllers that are outside the heirarchy of the carousel that we wish to manipulate.</p>

    <h3>Carousel with External Indicators:</h3>

    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://placehold.co/600x400" class="d-block w-100" alt="Apples">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/600x400" class="d-block w-100" alt="Oranges">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/600x400" class="d-block w-100" alt="Pears">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <div class="ext-indicators m-4">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1">1</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"  aria-label="Slide 2">2</button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"  aria-label="Slide 3">3</button>
  </div>

    
    <hr class="col-1 my-4">

    <a href="https://getbootstrap.com" class="btn btn-primary">Read the Bootstrap docs</a>
    <a href="https://github.com/twbs/examples" class="btn btn-secondary">View on GitHub</a>
</div>

<script type="text/javascript">
$('.ext-indicators').on('click', 'button', function() {
   $('.ext-indicators button.active').removeClass('active');
   $(this).addClass('active');
   return false;
});


</script>
@endsection
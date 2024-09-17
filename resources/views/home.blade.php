@include('header')

<!DOCTYPE html>
<html lang="en">
<div id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($sliders as $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('images/' . $slider) }}" class="d-block w-100" alt="Slider Image">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="slider.jpg" role="button" data-slide="next">
    <a class="carousel-control-next" href="slider2.jpg" role="button" data-slide="next">
    <a class="carousel-control-next" href="slider3.jpg" role="button" data-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</html>

@include('footer')

<!-- Slider -->
@php
    $item = getHomepageGallery();
    if($item){
        $gallery = json_decode($item->galleries);
    }
@endphp
<?php
    // echo "<pre>";
    // print_r($gallery);
    // echo "</pre>";
    // die();
?>
    @if($gallery)
        <section class="" id="partner" style="background-color: {{ setting('home.banner_background_color') }};">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <section class="customer-logos slider">
                            @foreach($gallery as $v)
                                <div class="slide">
                                    <img src="{{ Voyager::image($v) }}" alt="" title="">
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </section>
    @endif
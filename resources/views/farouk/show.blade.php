@extends('farouk.layouts.main')

@section('content')

    <!-- Heading Start -->
    <section class="uikit-heading-1" id="gallery">
        <h1>{{ $cat->name }}</h1>
        <div class="hr">
            <div class="hr-line"></div>
            <div class="hr-circle"></div>
            <div class="hr-line"></div>
        </div>
        <p>- I have designed and built many Websites.</p>
        <p>
            - I have created and published content on all social media platforms,
            including Facebook, Twitter, and Instagram, to grow an audience, build brand awareness,
            and ultimately, boost sales.
        </p>
    </section>
    <!-- Heading End -->

    <!-- Gallery  Start -->
    <div class="uikit-masonry-image-vid-gallery">
        <div class="images-container">
            <!--=======================================================-->
            <!--IINSERT NEW IMAGE & VIDEO ITEMS HERE-->
            <!-- 'data-title' = Image/Video Title -->
            <!-- 'data-source' = Video Source -->
            <!-- 'src' = Video Thumbnail/Image Source -->


            <!-- ads -->
            @if(count($products) > 0)
                @foreach ($products as $product)
                    <div class="item"><img class="img" src="{{ asset($product->image) }}"
                            @isset($product->title)
                        data-title="{{ $product->title }}"
                    @endisset
                            @isset($product->description)
                        data-content="{{ $product->description }}"
                    @endisset
                            @isset($product->link)
                        data-source="{{ $product->link }}"
                    @endisset>
                    </div>
                @endforeach
            @else
                    <h2>there is no products in this category</h2>
            @endif

            <!--=======================================================-->
            <!--=======================================================-->
        </div>
        <!-- Modal Start -->
        <div class="vid-modal-overlay">
            <div class="arrow-container arrow-container-left">
                <div class="arrow-left"></div>
            </div>
            <div class="arrow-container arrow-container-right">
                <div class="arrow-right"></div>
            </div>
            <div class="vid-modal">
                <div class="vid-modal-text">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle vid-close-btn"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                    <h3 class="vid-title"></h3>
                    <h3 class="vid-content"></h3>
                </div>
                <div class="vid-img-container"></div>
            </div>
        </div>
        <!-- Modal End -->
    </div>
    <!-- Gallery End -->








@endsection

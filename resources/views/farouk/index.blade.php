@extends('farouk.layouts.main')

@section('content')
    <header class="uikit-header-4">

        <a class="brand" href="index.html">
            <h3>Farouk Aiman</h3>
        </a>


        <div class="header-text">
            @if (session('success'))
                <div class="alert bg-transparent">
                    <h4 style="color: white">{{ session('success') }}</h4>
                </div>
            @endif
            <h1>Farouk Aiman</h1>
            <p>
                Multitasking person who has a lot of different experience in various fields, with a great mindset in
                marketing, management, and social media moderation.
                I have worked a lot of years
            </p>
            <a href="#gallery" class="main-btn">Get Started</a>
        </div>
        <div class="header-info">
            <div class="info-item">
                <h4>Phone</h4>
                <p>{{ $contact->mobile }}</p>
            </div>
            <div class="info-item">
                <h4>Email</h4>
                <p>{{ $contact->email }}</p>
            </div>
            <div class="info-item">
                <h4>Whats App</h4>
                <p><a href="{{ $contact->whatsapp }}" target="_blank" style=" color: #bbbbbb; text-decoration: none;" class="farroouukk"> <i class="fab fa-whatsapp"></i> Click
                        here</a></p>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Heading Start -->
    <section class="uikit-heading-1" id="gallery">
        <h1>Explore</h1>
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
            @isset($ad)
                <div class="item"><img class="img" src="{{ asset($ad->image) }}"
                        @isset($ad->title)
                            data-title="{{ $ad->title }}"
                        @endisset
                        @isset($ad->description)
                            data-content="{{ $ad->description }}"
                        @endisset
                        @isset($ad->link)
                            data-source="{{ $ad->link }}"
                        @endisset>
                </div>
            @endisset

            <!-- motion -->
            @isset($motion)
                <div class="item"><img class="img" src="{{ asset($motion->image) }}"
                        @isset($motion->title)
                            data-title="{{ $motion->title }}"
                        @endisset
                        @isset($motion->description)
                            data-content="{{ $motion->description }}"
                        @endisset
                        @isset($motion->link)
                            data-source="{{ $motion->link }}"
                        @endisset>
                </div>
            @endisset

            <!-- graphics -->
            @isset($graphics)
                <div class="item"><img class="img" src="{{ asset($graphics->image) }}"
                        @isset($graphics->title)
                            data-title="{{ $graphics->title }}"
                        @endisset
                        @isset($graphics->description)
                            data-content="{{ $graphics->description }}"
                        @endisset
                        @isset($graphics->link)
                            data-source="{{ $graphics->link }}"
                        @endisset>
                </div>
            @endisset

            <!-- ceo -->
            @isset($ceo)
                <div class="item"><img class="img" src="{{ asset($ceo->image) }}"
                        @isset($ceo->title)
                            data-title="{{ $ceo->title }}"
                        @endisset
                        @isset($ceo->description)
                            data-content="{{ $ceo->description }}"
                        @endisset
                        @isset($ceo->link)
                            data-source="{{ $ceo->link }}"
                        @endisset>
                </div>
            @endisset

            <!-- cem -->
            @isset($cem)
                <div class="item"><img class="img" src="{{ asset($cem->image) }}"
                        @isset($cem->title)
                            data-title="{{ $cem->title }}"
                        @endisset
                        @isset($cem->description)
                            data-content="{{ $cem->description }}"
                        @endisset
                        @isset($cem->link)
                            data-source="{{ $cem->link }}"
                        @endisset>
                </div>
            @endisset

            <!-- cm -->
            @isset($cm)
                <div class="item"><img class="img" src="{{ asset($cm->image) }}"
                        @isset($cm->title)
                            data-title="{{ $cm->title }}"
                        @endisset
                        @isset($cm->description)
                            data-content="{{ $cm->description }}"
                        @endisset
                        @isset($cm->link)
                            data-source="{{ $cm->link }}"
                        @endisset>
                </div>
            @endisset

            <!-- cc -->
            @isset($cc)
                <div class="item"><img class="img" src="{{ asset($cc->image) }}"
                        @isset($cc->title)
                            data-title="{{ $cc->title }}"
                        @endisset
                        @isset($cc->description)
                            data-content="{{ $cc->description }}"
                        @endisset
                        @isset($cc->link)
                            data-source="{{ $cc->link }}"
                        @endisset>
                </div>
            @endisset

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

    <!--Progrss Circles Start -->
    <div class="uikit-grid-3" id="services">
        @foreach ($cats as $cat)
            <div class="bg1">
                <a style="color: white; text-decoration: none;" class="progressCSS" href="{{ route('farouk.show', $cat->id) }}">
                    <h2><img src="{{ asset($cat->image) }}" width="32" height="32"></h2>
                    <p>{{ $cat->name }}</p>
                </a>
            </div>
        @endforeach

    </div>
    <!--Progrss Circles End -->

    <!--Counter starts here-->
    <section class="uikit-counters uikit-counters-1">
        <div class="counter-container">
            <div>
                <i class="fas fa-people-carry fa-4x"></i>
                <div class="counter" data-target="{{ $setting->customers }}">0</div>
                <h3>Customers</h3>
            </div>
            <div>
                <i class="fas fa-highlighter fa-4x"></i>
                <div class="counter" data-target="{{ $setting->design }}">0</div>
                <h3>Design</h3>
            </div>
            <div>
                <i class="fas fa-fax fa-4x"></i>
                <div class="counter" data-target="{{ $setting->ads }}">0</div>
                <h3>Advertisement</h3>
            </div>
            <div>
                <i class="fas fa-tape fa-4x"></i>
                <div class="counter" data-target="{{ $setting->motion }}">0</div>
                <h3>Motion</h3>
            </div>
        </div>
    </section>
    <!--Counter end-->



    <!-- Form Start -->
    <section class="uikit-contact-form-3" id="contact">
        <div class="form-container">
            <div class="formBx">
                <form action="{{ route('farouk.store') }}" method="POST">
                    @csrf
                    <h2>Contact</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea type="text" name="content" required="required"></textarea>
                        <span>Content</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="send">
                    </div>
                </form>
            </div>
            <div class="imgBox"><img src="{{ asset('farouk/WEB/image3.png') }}" alt=""></div>
        </div>
    </section>
    <!-- Form End -->

    <!-- Split Screen Start -->
    <section class="uikit-split-screen-1" id="about">
        <div class="layer right">
            <div class="content-wrap">
                <div class="content-body">
                    <h1>Contact</h1>
                    <p>
                        - I have a good post experience in devising strategy,
                        community management, creative directing, customer service,
                        copywriting, and analyzing data.
                    </p>
                </div>
                <a href="#contact" class="btn">Message</a>
            </div>
        </div>

        <div class="layer left">
            <div class="content-wrap">
                <div class="content-body">
                    <h1>Farouk Aiman</h1>
                    <p>
                        - Develop, implement, and manage social media strategies after conducting competitive research,
                        platform determination, messaging, and audience identification
                    </p>
                </div>
                <img src="{{ asset('farouk/WEB/image3.png') }}" alt="" />
                <div class="media-icons">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitch"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="handle"></div>
    </section>
    <!-- Split Screen End -->
@endsection

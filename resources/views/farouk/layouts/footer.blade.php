<!--Footer Start-->
<footer id="uikit-footer-1">
    <div class="footer-top">
        <div class="f-col-1">
            <h2>Farouk Aiman</h2>
            <p>I have worked a lot of years to build this strong experience in whole of these fields.</p>
        </div>
        <div class="f-col-2">
            <h3>Service1</h3>
            <p>designed and built many Websites.</p>
            <h3>Service2</h3>
            <p>created and published content on all social media platforms</p>
        </div>
        <div class="f-col-3">
            <h3>Contact</h3>
            <div class="contact-info-item">
                <div class="icon"><i class="fas fa-phone"></i></div><span>{{ $contact->mobile }}</span>
            </div>
            <div class="contact-info-item">
                <div class="icon"><i class="fas fa-envelope"></i></div><span>{{ $contact->email }}</span>
            </div>
            <div class="contact-info-item">
                <div class="icon"><i class="fas fa-map-marker"></i></div><span>Egypt, Mansoura</span>
            </div>
        </div>
        <div class="f-col-4">
            <h3>About Us</h3>
            <p>Multitasking person who has a lot of different experience in various fields,
                with a great mindset in marketing, management, and social media moderation.
                I have worked a lot of years
            </p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Farouk Aiman.</p>
    </div>
</footer>
<!-- Footer End -->

<script src="{{ asset('farouk/js/main.js') }}"></script>
<!-- JS Control -->
<!-- Change Values To Modify -->
<!-- Comment Out, Or Remove To Turn Off -->
<script>
    //Distance From Top When The Nav Menu is Activated, 300 recommended
    uikitHambNav(300);

    //Masonry Gallery, Max And Min Allowed Thumbnail Height
    //Heights are randomly generated within these two values
    masonryImageVideoGallery(36, 16);

    //Progress Circles Count Speed, 50 recommended
    uiKitProgressCirclesTwo(50);

    //Split Screen On Mouse Move
    uiKitSplitScreen1();
</script>
</body>

</html>

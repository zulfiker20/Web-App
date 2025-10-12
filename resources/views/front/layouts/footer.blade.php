<footer class="section-sm bg-tertiary">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Service</h5>
                    <ul class="list-unstyled">
                        @foreach ($footerServices ?? [] as $service)
                            <li class="mb-2">
                                <a href="{{ route('services.show', $service->id) }}">{{ $service->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="mb-2"><a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="mb-2"><a href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li class="mb-2"><a href="{{ route('teams') }}">Team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                    <ul class="list-unstyled">
                        <li class="list-inline-item me-4"><a class="text-black" href="{{ route('privacy') }}">Privacy
                                Policy</a>
                        </li>
                        <li class="list-inline-item me-4"><a class="text-black" href="{{ route('terms') }}">Terms &amp;
                                Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

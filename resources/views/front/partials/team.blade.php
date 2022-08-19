<div id="team" class="our-team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Our special Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($team as $item)
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{ asset('images/team/'.$item->image) }}" alt="">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="{{ $item->facebook }}">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->twitter }}">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->instagram }}">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>{{ $item->FullName }}</h4>
                            <p>{{ $item->captions }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- End column -->

        </div>
    </div>
</div>

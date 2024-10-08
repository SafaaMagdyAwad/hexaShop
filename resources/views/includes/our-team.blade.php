 <!-- ***** Our Team Area Starts ***** -->
 <section class="our-team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Amazing Team</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
            @foreach ($team as $item)

            <div class="col-lg-4">
                <div class="team-item">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <ul>
                                    <li><a href="{{ $item->socialLink?->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ $item->socialLink?->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ $item->socialLink?->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{ $item->socialLink?->behance }}"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="{{ asset('assets/images/team/'.$item->image) }}">
                    </div>
                    <div class="down-content">
                        <h4>{{ $item->name }}</h4>
                        <span>{{ $item->job_title }}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ***** Our Team Area Ends ***** -->

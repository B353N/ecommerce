<div class="free-offer ptb-95">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="free-offer-wrapper free-border">

                    <div class="row">
                        @foreach ($homeOffers as $homeOffer)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="single-free-offer text-center">
                                    <div class="title-head">
                                        <h4>{{ $homeOffer->title }}</h4>
                                    </div>
                                    <div class="free-offer-text">
                                        <p>{{ $homeOffer->text }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

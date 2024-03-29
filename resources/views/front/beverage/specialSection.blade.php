<section class="product-area product-lg-6 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title title-center mb-20" data-aos="fade-up">
                    <h2 class="title"> {{ convertUtf8($be->special_section_title) }}</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    @forelse ($special_product as $sproduct)
                    <div class="col-md-6 col-lg-4">
                        <div class="product text-center p-30 pb-70 radius-md mt-30 mb-30">
                            <div class="product-details">
                                <h3 class="product-title lc-1 mb-10">
                                    <a href="{{ route('front.product.details', [$sproduct->slug, $sproduct->id]) }}" target="_self" title="{{ convertUtf8($sproduct->title) }}">{{ convertUtf8($sproduct->title) }}</a>
                                </h3>
                                <div class="ratings justify-content-center mb-10">
                                    <div class="rate">
                                         <div class="rating-icon" style="width:{{$sproduct->rating ? $sproduct->rating * 20 : 0}}% !important"></div>
                                    </div>
                                    <span class="ratings-total">({{$sproduct->rating}})</span>
                                </div>
                                <div class="product-price mb-15">
                                    <span class="h4 new-price color-primary">{{ $be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : '' }}{{ convertUtf8($sproduct->current_price) }}{{ $be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : '' }}</span>
                                    @if (!empty(convertUtf8($sproduct->previous_price)))
                                    <span class="prev-price">{{ $be->base_currency_symbol_position == 'left' ? $be->base_currency_symbol : '' }}{{ convertUtf8($sproduct->previous_price) }}{{ $be->base_currency_symbol_position == 'right' ? $be->base_currency_symbol : '' }}</span>
                                    @endif
                                </div>
                                {{ convertUtf8(strlen($sproduct->summary)) > 70 ? convertUtf8(substr($sproduct->summary, 0, 70)) . '...' : convertUtf8($sproduct->summary) }}
                            </div>
                            <figure class="product-img mt-25 mb-15 mx-auto">
                                <a href="{{ route('front.product.details', [$sproduct->slug, $sproduct->id]) }}" target="_self" title="{{ convertUtf8($sproduct->title) }}" class="lazy-container ratio ratio-2-3 bg-none">
                                    <img class="lazyload" src="{{ asset('assets/front/img/product/featured/' . $sproduct->feature_image) }}" data-src="{{ asset('assets/front/img/product/featured/' . $sproduct->feature_image) }}" data-src="{{ asset('assets/front/img/product/featured/' . $sproduct->feature_image) }}" data-src="{{ asset('assets/front/img/product/featured/' . $sproduct->feature_image) }}" alt="Image">
                                </a>
                            </figure>
                            <a data-product="{{ $sproduct }}"
                              data-href="{{ route('add.cart', $sproduct->id) }}" href="{{ route('front.product.details', [$sproduct->slug, $sproduct->id]) }}" class="cart-link btn btn-lg btn-primary" title="{{ __('Add to Cart') }}" target="_self">{{ __('Add to Cart') }}</a>

                        </div>
                    </div>
                    @empty
                    {{__('No Special Food')}}
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>

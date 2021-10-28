<div class="swiper-container slider">
  <div class="swiper-wrapper">
    {{ $slot }}
  </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


@push('styles')
<link rel="stylesheet" href="/css/swiper.css"/>
@endpush
@push('scripts')
<script src="/js/swiper-bundle.min.js"></script>
<script>
var slider = new Swiper('.slider', {
navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},
});
</script>
@endpush
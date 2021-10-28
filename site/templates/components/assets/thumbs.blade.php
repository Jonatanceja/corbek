<div class="">  
    <div class="swiper-container mySwiper2">
        <div class="swiper-wrapper">
          {{ $slot }}
        </div>
    </div>
  </div>
  
  @push('scripts')
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
       var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
  </script>
  @endpush
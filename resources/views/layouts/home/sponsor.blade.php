<section class="bg-white py-10 overflow-hidden relative">
    {{-- <h2 class="text-center text-black text-sm mb-8 tracking-wide uppercase">
      Our Client
    </h2> --}}

    <div class="relative w-full overflow-hidden">
      <div class="marquee-wrapper">
        <div class="marquee flex items-center justify-center gap-16">
          @foreach ([
            ['src' => 'alluneed.png', 'alt' => 'All U Need'],
            ['src' => 'bidan.png', 'alt' => 'Bidan'],
            ['src' => 'Bunny.png', 'alt' => 'Bunny'],
            ['src' => 'Chu.png', 'alt' => 'Chu'],
            // ['src' => 'DirtyShoes.png', 'alt' => 'Dirty Shoes'],
            // ['src' => 'moeka.png', 'alt' => 'Moeka'],
            ['src' => 'Siburju2.png', 'alt' => 'Siburju'],
            ['src' => 'waroenk.png', 'alt' => 'Waroenk']
          ] as $logo)
            <a href="#" target="_blank" class="flex items-center justify-center">
              <img src="{{ asset('img/vendor/' . $logo['src']) }}" alt="{{ $logo['alt'] }}" class="client-logo h-[80px] w-auto filter grayscale hover:grayscale-0 transition-all duration-300">
            </a>
          @endforeach
        </div>
      </div>

      <!-- Gradient Fading Left and Right -->
      <div class="absolute left-0 top-0 h-full w-16 bg-gradient-to-r from-white via-white/70 to-transparent pointer-events-none"></div>
      <div class="absolute right-0 top-0 h-full w-16 bg-gradient-to-l from-white via-white/70 to-transparent pointer-events-none"></div>
    </div>

    <style>
      .marquee-wrapper {
        position: relative;
        width: 200%;
        display: flex;
      }

      .marquee {
        display: flex;
        animation: marquee 40s linear infinite;
      }

      @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
      }

      /* Responsiveness for Mobile */
      @media (max-width: 640px) {
        .client-logo {
          height: 35px; /* Slightly increase the logo size for better visibility */
        }

        .marquee {
          gap: 2px; /* Slightly increase the space between items on mobile for clarity */
        }
      }

      /* Responsiveness for Tablet and Larger Screens */
      @media (min-width: 641px) {
        .client-logo {
          height: 80px; /* Default logo size for larger screens */
        }

        .marquee {
          gap: 16px; /* Space between items on larger screens */
        }
      }
    </style>
</section>

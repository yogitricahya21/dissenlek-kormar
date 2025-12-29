$(document).ready(function () {
    // --- 1. INISIALISASI ISOTOPE ---
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        filter: '*',
        transitionDuration: '0.6s',
        stagger: 30 // Efek animasi muncul berurutan
    });

    var revealCount = 6; // Jumlah awal
    var increment = 6;    // Jumlah tambahan tiap klik

    // --- 2. FUNGSI VISIBILITAS (LOAD MORE & SHOW LESS) ---
    function updateVisibility() {
        var items = $grid.isotope('getItemElements');
        var $visibleItems = $(items);

        $visibleItems.each(function (i) {
            if (i < revealCount) { $(this).show(); } 
            else { $(this).hide(); }
        });

        $grid.isotope('layout');

        // Ubah teks tombol jika semua item sudah terbuka
        if (revealCount >= items.length && items.length > 6) {
            $('#btn-load-more').text('Show Less');
        } else {
            $('#btn-load-more').text('Load More');
        }

        // Sembunyikan tombol jika total item memang sedikit (<= 6)
        if (items.length <= 6) {
            $('#btn-load-more').hide();
        } else {
            $('#btn-load-more').show();
        }
    }

    // Jalankan saat gambar selesai dimuat
    $grid.imagesLoaded().progress(function () {
        updateVisibility();
    });

    // Event Tombol Load More / Show Less
    $('#btn-load-more').on('click', function (e) {
        e.preventDefault();
        var items = $grid.isotope('getItemElements');

        if (revealCount >= items.length) {
            revealCount = 6; // Kembali ke tampilan awal
            // Scroll otomatis kembali ke atas galeri saat "Show Less"
            $('html, body').animate({ scrollTop: $('#jops').offset().top - 100 }, 600);
        } else {
            revealCount += increment;
        }
        updateVisibility();
    });

   // ---3. LOGIKA FILTER KATEGORI (DENGAN RESET ALL) ---
    $('.masonary-menu').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        
        // Aktifkan state tombol
        $('.masonary-menu button').removeClass('active');
        $(this).addClass('active');

        if (filterValue === '*') {
            // JIKA KLIK TOMBOL 'ALL'
            revealCount = 6; // Reset hitungan ke 6
            $grid.isotope({ filter: '*' }); // Reset filter isotope
            updateVisibility(); // Jalankan fungsi tampilkan 6 saja
        } else {
            // JIKA KLIK KATEGORI LAIN (Duknis, Harsis, dll)
            $grid.isotope({ filter: filterValue }); // Tampilkan semua di kategori itu
            
            // Sembunyikan tombol Load More agar tidak mengganggu saat filter aktif
            $('#btn-load-more').hide(); 
            
            // Tampilkan semua item yang sesuai filter tanpa sembunyi (override visibility)
            var items = $grid.isotope('getItemElements');
            $(items).each(function() {
                var $this = $(this);
                if ($this.is(filterValue)) {
                    $this.show();
                }
            });
            $grid.isotope('layout');
        }
    });

    // --- 4. INTEGRASI SEARCH KE GALERI ---
    // Logika ini membuat galeri tersaring saat Anda mengetik di Global Search
    $('#global-search').on('keyup', function() {
        var searchTerm = $(this).val().toLowerCase();
        
        $grid.isotope({
            filter: function() {
                var title = $(this).find('.activity-title').text().toLowerCase();
                return title.indexOf(searchTerm) !== -1;
            }
        });

        if (searchTerm.length > 0) {
            $('#btn-load-more').hide();
        } else {
            updateVisibility();
        }
    });

    // --- 5. LOGIKA POPUP IMAGE (SINKRON DENGAN FILTER) ---
    $('.popup-image').magnificPopup({
        type: 'image',
        gallery: { enabled: true },
        // Kunci utamanya di sini: Hanya item yang 'visible' yang masuk galeri popup
        callbacks: {
            open: function() {
                this.items = $(document).find('.grid-item:visible .popup-image');
            }
        }
    });

    // --- 6. LOGIKA SEARCH & SCROLL ---
    function performSearch() {
        var searchTerm = $('#global-search').val().toLowerCase();
        if (searchTerm.length > 0) {
            // Mencari di semua elemen teks penting
            var targetElement = $("h1, h2, h3, h4, h5, p, span, li").filter(function () {
                return $(this).text().toLowerCase().indexOf(searchTerm) !== -1;
            }).first();

            if (targetElement.length) {
                $('html, body').animate({
                    scrollTop: targetElement.offset().top - 120
                }, 1000);

                // Highlight Effect
                targetElement.css('transition', 'background-color 0.5s ease');
                targetElement.css('background-color', 'yellow');
                setTimeout(function () {
                    targetElement.css('background-color', 'transparent');
                }, 3000);
            } else {
                alert("Kata '" + searchTerm + "' tidak ditemukan.");
            }
        }
    }

    $('#search-trigger').on('click', performSearch);
    $('#global-search').on('keypress', function (e) {
        if (e.which == 13) performSearch();
    });
});
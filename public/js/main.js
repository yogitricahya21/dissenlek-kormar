$(document).ready(function () {
    // Inisialisasi Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows', // atau 'masonry'
        filter: '*'
    });

    var revealCount = 6;
    var increment = 6;

    function updateVisibility() {
        var items = $grid.isotope('getItemElements');

        $(items).each(function (i) {
            if (i < revealCount) {
                $(this).show(); // Menampilkan 6 pertama
            } else {
                $(this).hide(); // Menyembunyikan sisanya
            }
        });

        $grid.isotope('layout');

        if (revealCount >= items.length) {
            $('.load-more-btn').hide();
        } else {
            $('.load-more-btn').show();
        }
    }

    // Jalankan saat gambar selesai dimuat
    $grid.imagesLoaded().progress(function () {
        updateVisibility();
    });

    // Tombol Load More
    $('.load-more-btn').on('click', function (e) {
        e.preventDefault();
        revealCount += increment;
        updateVisibility();
    });

    // Menu Filter
    $('.masonary-menu').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $('.masonary-menu button').removeClass('active');
        $(this).addClass('active');

        if (filterValue !== '*') {
            $grid.isotope({ filter: filterValue });
            $('.load-more-btn').hide();
        } else {
            updateVisibility();
        }
    });
});

$(document).ready(function () {
    $('.popup-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        mainClass: 'mfp-with-zoom', // Opsional: menambah animasi zoom
    });
});

    let d = document.querySelectorAll('.carousel-item').forEach(e=>{
        e.addEventListener('mouseover', function (){
            document.querySelectorAll('.carousel-caption').forEach(elem => {
                elem.style = ' opacity: 1; transform: translateY(-320px); transition: 1s; text-transform: uppercase; color: #fff; font-weight: bold';
            });
        });
        e.addEventListener('mouseout', function (){
            document.querySelectorAll('.carousel-caption').forEach(elem => {
                elem.style = ' opacity: 0; transform: translateY(35px); text-transform: uppercase;transition: 1s; color: #fff; font-weight: bold';
            });
        });

    });

    $(document).ready(function (){
        $('.menu-burger').click(function (event){
            $('.menu-burger, .menu').toggleClass('active');
        });
    });

    $(document).ready(function (){
        $('.menu-burger').click(function (event){
            $('.container').toggleClass('opacity');
        });
    });

    document.addEventListener("DOMContentLoaded", () => {

        // ======== Slider with one handle

        const priceSlider = document.getElementById('r-slider');

        noUiSlider.create(priceSlider, {
            start: [250, 3000],
            tooltips: true,
            connect: true,
            padding: 6,
            range: {
                'min': 0,
                'max': 3000
            },
            pips: {
                mode: 'values',
                values: [100, 500, 1000, 2000, 2500, 3000],
                density: 7
            }
        });

        priceSlider.noUiSlider.on('change', (values, handle) => {
            goSearch();
        });

        // ======== Slider with two handles



        // ======== Search filters

        function goSearch() {
            let winHref = window.location.href.split('?')[0];
            winHref += `?pricerange=${priceSlider.noUiSlider.get()}`;
            window.location.href = winHref;
        }

        // ======== Slider reset

        const resetButton = document.getElementById('reset');
        resetButton.onclick = (e) => {
            priceSlider.noUiSlider.reset();
        };

        // ======== Slider set

        const params = new URLSearchParams(window.location.search);
        const minDiscount = params.get("mindiscount");
        const priceRange = params.get("pricerange");

        if (priceRange) {
            priceSlider.noUiSlider.set(priceRange.split(','));
        }
    });

    $(document).ready(function (){
        $('.visible').click(function (event){
            $('.colors').toggleClass('swipe');
        });
    });

    $(document).ready(function (){
        $('.fill').click(function (event){
            $('.filter').toggleClass('open');
        });
    });
    $(document).ready(function (){
        $('#tap').click(function (event){
            $('.mailing').toggleClass('flash');
        });
    });

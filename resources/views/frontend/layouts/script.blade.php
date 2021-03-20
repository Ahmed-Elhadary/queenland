</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('assets/js/combining.js.download')}}"></script>
<!-- CONTACT JS  -->
<script src="{{ asset('assets/js/jquery.lazy.min.js.download')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('assets/js/jquery.themepunch.tools.min.js.download')}}"></script>
<script src="{{ asset('assets/js/jquery.themepunch.revolution.min.js.download')}}"></script>
<script src="{{ asset('assets/js/rev.slider.js.download')}}"></script>
<script type="text/javascript"
    src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
    src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
    src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
    src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('assets/js/demo.js')}}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/anime.min.js')}}" defer="defer"></script>
<script type="text/javascript" src="{{ asset('assets/js/demo2.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/vanilla-tilt.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".sss"), {
        max: 25,
        speed: 1000
    });


    function toggleBtn() {
        const Btns = document.querySelector(".btns");
        const add = document.getElementById("add");
        const remove = document.getElementById("remove");
        const btn = document.querySelector(".btns").querySelectorAll("a");
        Btns.classList.toggle("open");
        if (Btns.classList.contains("open")) {
            remove.style.display = "block";
            add.style.display = "none";
            btn.forEach((e, i) => {
                setTimeout(() => {
                    bottom = 40 * i;
                    e.style.bottom = bottom + "px";
                    console.log(e);
                }, 100 * i);
            });
        } else {
            add.style.display = "block";
            remove.style.display = "none";
            btn.forEach((e, i) => {
                e.style.bottom = "0px";
            });
        }
    }

</script>
@stack('custom-scripts')
</body>

</html>

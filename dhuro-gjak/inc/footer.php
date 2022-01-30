<footer>

    <div class="f-container">
        <div class="f-items">
            <a href="#">
                <i class="fas fa-search-location"></i>
                Lagjja Kalabria,10000 Prishtine, Kosovo
            </a>
            <a href="#">
                <i class="fas fa-home"></i>
                About us
            </a>
            <a href="#">
                <i class="fas fa-hospital"></i>
                Spitali
            </a>

        </div>
        <div class="f-items">
            <a href="#">
                <i class="fas fa-phone"></i>
                +39344547058
            </a>
            <a href="#">
                <i class="fas fa-blender-phone"></i>
                +39344547058
            </a>
            <a href="#">
                <i class="fas fa-address-book"></i>
                Kontakti
            </a>
        </div>
        <div class="f-items">
            <a href="#">
                <i class="fas fa-envelope"></i>
                info@probitacademy.com
            </a>
            <a href="#">
                <i class="fas fa-map-pin"></i>
                Campus map
            </a>
            <a href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
                Disclaimers
            </a>
        </div>
    </div>
</footer>
<script src="jquery-3.6.0.js"></script>
<script src="slick.min.js"></script>
<script src="jquery.validate.min.js"></script>
<script>
    // $.validator.setDefaults({
    //     submitHandler: function() {
    //         alert("submitted!");
    //     }
    // });

    $().ready(function() {
        $("#login").validate({
            rules: {

                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {

                email: {
                    required: "Ju lutem shtypni emailin",
                    email: "Ju lutem shtypni nje email valid"
                },
                password: {
                    required: "Ju lutem shtypni passwordin",
                    minlength: "Minimumi 6 karaktere"
                },
            }
        });
        $("#regjister").validate({
            rules: {
                emri: {
                    required: true,
                    number: false
                },
                mbiemri: {
                    required: true,
                    number: false
                },
                adresa: {
                    required: true,

                },
                email: {
                    required: true,
                    email: true
                },
                telefoni: {
                    required: true,
                    number: false
                },
                dtl: {
                    required: true,

                },
                tipigjakut: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                emri: {
                    required: "Shtypni Emrin",
                    alphanumeric: "Vlera Gabim"
                },
                mbiemri: {
                    required: "Shtypni Emrin",
                    alphanumeric: "Vlera Gabim"
                },
                adresa: {
                    required: "Shtypni Adresen"
                },
                telefoni: {
                    required: "Shtypni Telefonin",
                    number: "Duhet Numer"
                },
                dtl: {
                    required: "Plotesoni daten"
                },
                tipigjakut: {
                    required: "Ploteso vlere"
                },
                email: {
                    required: "Ju lutem shtypni emailin",
                    email: "Ju lutem shtypni nje email valid"
                },
                password: {
                    required: "Ju lutem shtypni passwordin",
                    minlength: "Minimumi 6 karaktere"
                },
            }
        });
    });
</script>
<script>
    $().ready(function() {
        $('.slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            pauseOnHover: true,
            prevArrow: false,
            nextArrow: false
        });
    })

    //$("#mesazhi").fadeOut(8000);
</script>
</body>

</html>
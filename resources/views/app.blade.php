<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Crafto - The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    @livewireStyles
</head>

<body data-mobile-nav-style="classic">
                    
        @include('components.header')

        <livewire:check-in-flow />

        @include('components.footer')
    
        <script src="{{ asset('js/signature_pad.min.js') }}" integrity="sha256-W+ivNvVjmQX6FTlF0S+SCDMjAuTVNKzH16+kQvRWcTg=" crossorigin="anonymous"></script>

<script>
//   document.addEventListener("DOMContentLoaded", function () {
//     var canvas = document.querySelector("#signature_pad");
//     var signaturePad = new SignaturePad(canvas, {
//       minWidth: 2,
//       maxWidth: 4,
//     });
//     var signatureChanged = false;
//     function handleSignatureChange() {
//       signatureChanged = true;
//       // Enable the "Save" button
//       document.getElementById("finish_button").disabled = false;
//     }
//     signaturePad.onEnd = handleSignatureChange;


//     function resizeCanvas() {
//       var ratio = Math.max(window.devicePixelRatio || 1, 1);
//       canvas.width = canvas.offsetWidth * ratio;
//       canvas.height = canvas.offsetHeight * ratio;
//       canvas.getContext("2d").scale(ratio, ratio);
//       let storedData = signaturePad.toData();
//       signaturePad.clear();
//       signaturePad.fromData(storedData);
//     }

//     window.addEventListener("resize", resizeCanvas);
//     resizeCanvas();

//     var clearButton = document.querySelector("#clear_button");
//     clearButton.addEventListener("click", function () {
//       signaturePad.clear();

//       signatureChanged = false;
//       document.getElementById("finish_button").disabled = true;
//     });


//   });



</script>


    @livewireScripts
</body>

</html>

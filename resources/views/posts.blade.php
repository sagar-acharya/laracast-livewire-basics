<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        @livewireStyles
        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body>
        <div class="container-fluid mt-5">
            <div class="grid text-center">
                <div class="row">
                    <div class="col-12">
                        @livewire('posts.create-post')
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="grid text-center">
                <div class="row">
                    <div class="col-12">
                        @livewire('posts.show-posts')
                    </div>
                </div>
            </div>
        </div>

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            // Array.prototype.slice.call(forms)
            //     .forEach(function (form) {
            //         form.classList.add('was-validated')
            //     })
            })()

            window.component = function(element) {
                let componentId = null;

                while(!componentId) {
                    element = element.parentElement
                    componentId = element.getAttribute('wire:id')
                }

                return window.livewire.find(componentId);
            }
        </script>
    </body>
</html>

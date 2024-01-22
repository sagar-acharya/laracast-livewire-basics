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

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="container-fluid mt-5">
            <div class="grid text-center">
                <div class="row">
                    <div class="col">
                        @livewire('counter')
                    </div>
                    <div class="col">
                        @livewire('forms.contact-form')
                    </div>
                    <div class="col">
                      Column
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script>
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                // Array.from(forms).forEach(form => {
                //     form.addEventListener('submit', event => {
                //     if (!form.checkValidity()) {
                //         event.preventDefault()
                //         event.stopPropagation()
                //     }

                //     form.classList.add('was-validated')
                //     }, false)
                // })
            })()
        </script>
        @livewireScripts
    </body>
</html>

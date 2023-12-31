<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Carmin Cargo') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="css/auth.css">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div>
        <div class="auth__container">
            <div class="auth__logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="724" height="100%" viewBox="0 0 726 718"
                    fill="none">
                    <g filter="url(#filter0_d_166_3439)" transform="translate(-100, 0)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M245.974 -173H325.844C325.844 -173 722 -61.743 722 365C722 791.743 325.844 903 325.844 903H244.5L-289 903C-289 903 -289 544.333 -289 365C-289 185.667 -289 6.33342 -289 -83.3333V-173L245.974 -173Z"
                            fill="#FFE11C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M245.974 -173H325.844C325.844 -173 722 -61.743 722 365C722 791.743 325.844 903 325.844 903H244.5L-289 903C-289 903 -289 544.333 -289 365C-289 185.667 -289 6.33342 -289 -83.3333V-173L245.974 -173Z" " />
                    </g>
                    <defs>
                        <filter id=" filter0_d_166_3439" x=" -293" y="-173" width="1019" height="1090"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="10" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_166_3439" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_166_3439"
                                result="shape" />
                            </filter>
                            </defs>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="507" height="558" viewBox="0 0 507 558"
                    fill="none" class="auth__logo-carmin">
                    <path
                        d="M388.98 107.702L502.186 319.524L506.815 328.959C506.926 329.192 506.987 329.445 506.998 329.703C507.009 329.963 506.968 330.221 506.878 330.464C492.87 367.53 468.121 394.499 432.635 411.371C418.542 418.078 406.628 422.259 396.896 423.913C376.783 427.325 358.597 430.817 338.01 427.918C312.572 424.33 288.989 415.531 267.258 401.52C266.807 401.232 266.579 401.36 266.579 401.905L266.8 514.351C266.8 514.779 267.006 514.955 267.416 514.879C309.302 507.639 349.449 472.928 372.928 438.474C375.108 435.27 375.692 435.549 374.681 439.307C373.724 442.895 372.528 446.707 371.095 450.743C366.061 468.535 359.861 485.861 352.498 502.722C352.135 503.571 351.614 503.843 350.808 504.147C348.975 503.411 347.284 502.156 345.736 500.383L343.018 490.788C342.808 490.063 342.456 489.983 341.96 490.548C326.435 508.628 309.333 525.003 290.658 539.675C279.652 548.325 268.217 554.434 256.357 558C224.705 540.156 196.534 518.98 171.843 494.473C171.243 493.886 170.927 494.014 170.895 494.857L170.611 501.36C170.475 503.433 170.112 504.82 169.521 505.525C152.789 494.36 142.614 457.775 138.491 439.595C137.911 437.022 138.48 436.734 140.197 438.73C168.557 471.695 202.053 501.104 243.417 514.623C244.418 514.955 244.917 514.582 244.917 513.502V414.062L245.312 404.451C245.324 404.237 245.256 404.025 245.124 403.855C244.992 403.686 244.804 403.57 244.595 403.53C244.387 403.49 244.17 403.527 243.985 403.634C222.572 416.46 199.604 424.112 175.082 426.588C172.482 426.034 170.058 426.588 167.814 428.254C144.442 429.504 121.395 426.391 98.6751 418.916C71.8682 408.719 48.1685 393.442 27.576 373.088C21.8565 367.722 -3.4705 341.997 0.400444 334.389C32.1159 272.079 63.7998 209.764 95.452 147.443L135.694 67.9615L140.229 58.5269C140.289 58.4002 140.309 58.2578 140.287 58.1191C140.265 57.9804 140.201 57.8516 140.105 57.7505C140.009 57.6494 139.884 57.5806 139.748 57.5533C139.612 57.5259 139.471 57.5416 139.344 57.5979L128 62.7717C116.476 66.1569 105.917 70.423 96.321 75.5701C96.0788 75.7089 95.8892 75.7142 95.7522 75.5861C95.7102 75.554 95.6786 75.5114 95.6574 75.4579C95.6154 75.3512 95.647 75.2551 95.7522 75.1696C136.326 43.7263 182.84 23.6077 233.968 18.9624C235.864 18.7862 239.151 18.9945 241.742 18.2897C242.279 18.151 242.563 17.7931 242.595 17.2165C242.785 13.0518 243.085 10.3128 243.495 8.99928C245.391 2.91244 251.79 -3.03024 258.079 1.72711C262.356 4.94139 264.667 9.91765 265.015 16.6558C265.078 17.8091 265.674 18.4393 266.8 18.546C317.465 23.4475 363.048 41.361 403.547 72.2864C405.992 74.1552 408.246 76.2588 410.31 78.5975C410.322 78.613 410.327 78.6321 410.326 78.6513C410.324 78.6705 410.316 78.6886 410.303 78.7022C410.289 78.7158 410.272 78.7242 410.253 78.7254C410.234 78.7269 410.215 78.7213 410.199 78.7096C394.81 68.7944 378.126 62.6756 361.536 55.2272C361.052 55.0137 360.935 55.1418 361.188 55.6116L388.98 107.702ZM272.63 196.698L344.488 51.6712C344.815 51.0305 344.625 50.6355 343.919 50.4859L305.415 42.1885L266.69 38.6646C266.247 38.622 266.032 38.8302 266.042 39.2893C268.175 91.0435 266.658 143.566 266.437 195.4C266.416 199.961 266.073 204.622 265.41 209.384C265.38 209.487 265.389 209.597 265.438 209.692C265.487 209.786 265.571 209.857 265.671 209.889C265.772 209.921 265.881 209.911 265.974 209.861C266.067 209.812 266.138 209.727 266.168 209.624L272.63 196.698ZM166.977 59.6482L243.906 212.011C244.349 212.887 244.57 212.834 244.57 211.851L244.522 42.5569L244.902 39.93C244.997 39.2467 244.703 38.8835 244.017 38.8408C241.69 38.7126 238.44 38.8355 234.268 39.2092C208.768 41.4837 184.948 45.5523 162.806 51.4149C162.259 51.5645 162.138 51.8794 162.443 52.36L166.977 59.6482ZM28.129 334.629C37.4405 341.304 46.7044 347.636 55.9209 353.626C58.6068 355.372 61.0716 355.372 64.0578 355.084L130.78 355.052L220.997 356.381C222.03 356.393 222.251 355.965 221.66 355.1L208.136 335.526C207.788 335.025 207.736 334.496 207.978 333.94L224.852 294.376L244.159 248.756C244.371 248.255 244.349 247.77 244.096 247.299L236.37 232.594L201.768 168.09L156.186 83.0985L151.067 74.5449C151.01 74.4437 150.917 74.3671 150.808 74.3299C150.698 74.2926 150.579 74.2973 150.473 74.3428C150.366 74.3882 150.28 74.4715 150.23 74.5769L23.5313 329.535C23.3109 329.974 23.2598 330.48 23.3885 330.954C23.5171 331.429 23.8162 331.837 24.2265 332.098L28.129 334.629ZM299.869 355.629C346.185 354.818 392.519 354.866 438.876 355.773C440.756 355.805 442.099 355.789 443.884 354.94C449.468 352.281 454.587 349.788 459.242 347.459L483.621 335.366C484.18 335.089 484.311 334.667 484.016 334.1L426.615 227.004L355.311 94.0869L351.866 87.4554C351.53 86.8041 351.171 86.7881 350.792 87.4073C348.602 90.9741 346.573 94.6262 344.709 98.3637C319.199 149.675 293.924 200.847 268.886 251.88C268.423 252.809 268.391 253.754 268.791 254.715L300.738 331.617C301.034 332.313 300.997 332.995 300.628 333.668L289.331 354.155C288.816 355.095 289.089 355.564 290.152 355.564L299.869 355.629ZM237.176 339.05L256.546 361.603C256.632 361.704 256.744 361.776 256.868 361.811C256.993 361.845 257.126 361.842 257.249 361.799C257.372 361.755 257.48 361.677 257.557 361.571L278.208 333.62C278.519 333.194 278.716 332.696 278.786 332.172C278.855 331.648 278.792 331.116 278.603 330.624L260.717 284.749L257.21 274.609C256.842 273.52 256.451 273.515 256.041 274.593L233.652 333.556C233.463 334.079 233.542 334.555 233.889 334.981L237.176 339.05Z"
                        fill="#173EB2" fill-opacity="0.2" />
                </svg>
            </div>
            <div class="auth__form">
                <h3 class="auth__title" style="margin-top: 1rem">Carmin Cargo Control</h3>
                @if ($errors->any())
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>Please check the fields!</strong>
                        @foreach ($errors->all() as $error)
                            <span class="badge badge-danger text-danger">{{ $error }}</span>
                        @endforeach
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="auth__form-group">
                        <label for="name" class="auth__form-label">{{ __('Nombre') }}</label>

                        <input id="name" type="text"
                            class="auth__form-input @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="auth__form-group">
                        <label for="email" class="auth__form-label">{{ __('Email') }}</label>

                        <input id="email" type="email"
                            class="auth__form-input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth__form-group">
                        <label for="password" class="auth__form-label">{{ __('Contraseña') }}</label>

                        <input id="password" type="password"
                            class="auth__form-input @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="auth__form-group">
                        <label for="password-confirm"
                            class="auth__form-label">{{ __('Confirmar
                                                        Contraseña') }}</label>

                        <input id="password-confirm" type="password" class="auth__form-input"
                            name="password_confirmation" required autocomplete="new-password">
                        <div style="text-align: left">
                            <a type="submit" class="auth__form-register" href="/login">

                                {{ __('Iniciar Sesión') }}
                            </a>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="auth__form-btn">
                            {{ __('Registrarse') }}
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

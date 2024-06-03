<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
            @if (Route::has('login'))
            <div style="position: fixed; top: 0; right: 0; padding: 1.5rem; text-align: right;">
                @auth
                    <a href="{{ route('public.home') }}" style="font-weight: 600; color: #4b5563; text-decoration: none; transition: color 0.2s ease-in-out; outline: none; border-radius: 0.375rem; padding: 0.5rem 1rem; background-color: #fff; border: 1px solid #cbd5e0; margin-right: 0.5rem;">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" style="font-weight: 600; color: #4b5563; text-decoration: none; transition: color 0.2s ease-in-out; outline: none; border-radius: 0.375rem; padding: 0.5rem 1rem; background-color: #fff; border: 1px solid #cbd5e0; margin-right: 0.5rem;">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="font-weight: 600; color: #4b5563; text-decoration: none; transition: color 0.2s ease-in-out; outline: none; border-radius: 0.375rem; padding: 0.5rem 1rem; background-color: #fff; border: 1px solid #cbd5e0; margin-right: 0.5rem;">Cadastrar</a>
                    @endif
                @endauth
            </div>
        @endif


            <div class="max-w-7xl p-6 ">
                <div class="flex justify-start p-0 m-0">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="160px" height="160px" viewBox="0 0 667.000000 286.000000"
                    preserveAspectRatio="xMidYMid meet">

                   <g transform="translate(0.000000,286.000000) scale(0.100000,-0.100000)"
                   fill="#000000" stroke="none">
                   <path d="M496 2613 c-5 -25 -156 -1173 -236 -1798 -16 -126 -38 -292 -48 -368
                   -10 -76 -16 -140 -13 -142 6 -7 71 -6 71 1 0 3 67 523 150 1155 83 632 150
                   1156 150 1164 0 10 -11 15 -34 15 -29 0 -35 -4 -40 -27z"/>
                   <path d="M875 2598 c-3 -24 -39 -297 -80 -608 -133 -1011 -215 -1647 -215
                   -1669 0 -19 6 -21 70 -21 82 0 71 -23 100 205 11 88 38 297 60 465 21 168 51
                   395 65 505 14 110 30 232 35 270 24 163 110 846 110 870 0 24 -2 25 -69 25
                   l-70 0 -6 -42z"/>
                   <path d="M1256 2593 c-3 -27 -18 -129 -31 -228 -53 -378 -66 -471 -115 -865
                   -4 -36 -24 -186 -44 -335 -19 -148 -43 -326 -51 -395 -9 -69 -25 -187 -36
                   -263 -10 -75 -19 -153 -19 -172 l0 -35 155 0 c85 0 155 3 155 6 0 5 165 1271
                   275 2118 14 104 25 195 25 203 0 10 -32 13 -154 13 l-153 0 -7 -47z"/>
                   <path d="M1831 2558 c-6 -46 -24 -191 -41 -323 -17 -132 -46 -355 -65 -495
                   -58 -429 -185 -1409 -185 -1425 0 -13 249 -15 2274 -15 l2274 0 6 33 c10 57
                   296 2264 296 2286 l0 21 -2274 0 -2274 0 -11 -82z m3767 -119 c58 -10 63 -13
                   58 -33 -3 -11 -6 -28 -6 -36 0 -12 -17 -15 -97 -15 l-97 0 -17 -30 c-25 -43
                   -46 -167 -33 -202 20 -58 124 -34 124 27 0 26 -4 30 -26 30 -22 0 -25 3 -22
                   32 3 37 22 45 106 47 35 1 52 -3 52 -11 0 -7 -9 -65 -20 -128 -11 -63 -20
                   -116 -20 -117 0 -2 -15 -3 -34 -3 -20 0 -36 6 -39 15 -5 12 -10 12 -34 0 -15
                   -8 -47 -15 -70 -15 -87 0 -131 83 -113 209 31 213 94 264 288 230z m-2745 -10
                   c30 -14 47 -48 47 -95 0 -37 -22 -90 -40 -96 -7 -2 -5 -15 6 -37 20 -41 14
                   -112 -13 -150 -29 -38 -74 -50 -195 -50 -96 -1 -108 1 -108 17 0 9 14 108 32
                   220 l32 202 107 0 c60 0 119 -5 132 -11z m428 -18 c25 -25 29 -37 29 -83 0
                   -66 -30 -135 -64 -148 l-24 -9 29 -78 c16 -43 29 -81 29 -85 0 -14 -100 -9
                   -105 5 -2 6 -14 45 -25 85 -21 67 -24 72 -50 72 -27 0 -29 -4 -35 -47 -18
                   -121 -16 -118 -69 -121 -48 -3 -48 -3 -42 25 3 15 17 100 31 188 13 88 27 175
                   30 193 l6 32 115 0 c114 0 116 0 145 -29z m422 24 c10 -4 12 -16 8 -43 l-6
                   -37 -97 -3 -97 -3 -7 -35 c-3 -19 -4 -37 -2 -39 3 -3 39 -8 81 -11 42 -4 77
                   -10 77 -14 0 -4 -3 -22 -6 -39 l-6 -31 -84 0 c-65 0 -84 -3 -84 -14 0 -7 -3
                   -28 -6 -45 l-6 -31 97 0 98 0 -6 -36 c-3 -20 -8 -38 -10 -40 -10 -11 -205 -15
                   -230 -5 -47 18 -49 45 -21 217 26 162 34 186 69 203 21 10 213 15 238 6z m352
                   -17 c9 -41 65 -386 65 -402 0 -12 -10 -16 -45 -16 -48 0 -44 -5 -61 78 -4 20
                   -10 22 -67 22 l-62 0 -25 -48 c-24 -46 -26 -47 -77 -50 l-53 -3 108 220 107
                   220 52 0 c47 1 53 -2 58 -21z m315 20 c0 -2 -7 -41 -15 -88 -8 -47 -15 -86
                   -15 -87 0 -2 4 -3 9 -3 6 0 40 40 78 90 l68 89 59 1 58 0 -24 -32 c-112 -150
                   -138 -186 -138 -195 0 -6 20 -54 45 -107 25 -54 45 -100 45 -102 0 -3 -23 -4
                   -52 -2 l-52 3 -38 85 c-50 115 -68 117 -83 10 -14 -103 -12 -100 -61 -100 -24
                   0 -44 2 -44 5 0 8 61 390 66 413 4 19 11 22 49 22 25 0 45 -1 45 -2z m420 -10
                   c1 -7 -14 -106 -32 -220 l-32 -208 -48 0 c-45 0 -48 2 -43 23 5 24 65 400 65
                   410 0 13 90 7 90 -5z m262 -108 c27 -63 53 -119 57 -123 4 -4 16 49 26 118
                   l18 125 49 0 c45 0 48 -2 43 -22 -4 -21 -65 -406 -65 -415 0 -2 -20 -3 -45 -1
                   l-46 3 -47 105 c-26 58 -52 116 -58 130 -9 20 -13 7 -28 -90 -24 -158 -20
                   -150 -72 -150 -24 0 -44 3 -44 8 0 12 61 406 66 420 3 9 19 12 50 10 l46 -3
                   50 -115z m-2412 -1041 c57 -138 106 -246 108 -240 2 6 20 117 40 248 l37 238
                   108 3 c95 2 107 1 107 -14 0 -17 -125 -816 -136 -866 l-6 -28 -106 0 -107 0
                   -105 246 c-57 135 -106 242 -107 237 -4 -13 -73 -461 -73 -472 0 -7 -40 -11
                   -110 -11 -60 0 -110 4 -110 9 0 4 32 207 70 449 39 242 70 443 70 446 0 3 49
                   6 108 6 l108 0 104 -251z m1073 235 c87 -7 82 3 63 -114 l-12 -75 -186 -5
                   c-103 -3 -189 -8 -193 -12 -9 -9 -24 -77 -25 -109 l0 -26 156 -6 c86 -3 157
                   -7 160 -9 4 -4 -23 -168 -28 -174 -2 -1 -76 -6 -165 -10 l-161 -7 -9 -58 c-15
                   -91 -20 -89 187 -89 l180 0 -1 -22 c0 -13 -6 -54 -12 -93 l-12 -70 -80 -7
                   c-44 -3 -145 -8 -225 -10 -128 -2 -150 0 -185 17 -57 28 -85 75 -85 141 0 55
                   72 528 92 603 19 71 72 121 153 142 30 8 239 4 388 -7z m411 -11 c3 -16 19
                   -149 36 -298 17 -148 32 -270 33 -271 1 -1 47 109 101 244 55 136 109 271 122
                   300 l23 52 110 0 c82 0 111 -3 111 -12 0 -7 -20 -58 -45 -112 -25 -55 -45
                   -109 -45 -120 -1 -37 44 -346 50 -346 3 0 59 132 125 293 l120 292 114 3 c108
                   3 113 2 108 -17 -2 -10 -90 -215 -193 -455 l-189 -436 -122 0 -121 0 -11 68
                   c-6 37 -17 105 -25 152 l-13 85 -16 -35 c-8 -19 -38 -87 -65 -150 l-49 -115
                   -131 -3 c-73 -1 -132 1 -132 5 0 4 -27 199 -60 433 -33 234 -60 435 -60 448 0
                   21 3 22 109 22 l109 0 6 -27z m1570 16 c104 -19 105 -19 95 -81 -5 -29 -12
                   -68 -15 -86 -5 -32 -7 -34 -37 -28 -18 3 -99 6 -181 7 -141 2 -150 1 -166 -19
                   -22 -27 -34 -100 -20 -117 7 -9 48 -14 123 -17 146 -4 180 -20 221 -102 l29
                   -57 -9 -123 c-13 -159 -33 -204 -114 -250 l-55 -31 -175 0 c-160 0 -293 15
                   -304 34 -3 4 19 159 23 167 1 0 80 -1 176 -4 206 -6 219 -1 231 73 10 68 -1
                   75 -110 75 -115 0 -162 13 -207 57 -48 46 -64 101 -56 201 15 194 63 274 182
                   303 47 11 305 10 369 -2z"/>
                   <path d="M2690 2331 c0 -16 -3 -36 -6 -45 -5 -13 2 -16 43 -16 54 0 83 20 83
                   57 0 25 -18 33 -76 33 -42 0 -44 -1 -44 -29z"/>
                   <path d="M2666 2168 c-3 -13 -7 -36 -9 -51 l-4 -28 56 3 c50 3 57 6 69 31 7
                   15 10 36 7 47 -5 17 -15 20 -60 20 -49 0 -55 -3 -59 -22z"/>
                   <path d="M3096 2323 c-11 -72 -11 -73 43 -73 54 0 69 12 73 56 3 44 -8 54 -61
                   54 -48 0 -48 0 -55 -37z"/>
                   <path d="M3947 2240 l-26 -60 40 0 40 0 -7 53 c-4 28 -10 55 -13 60 -4 4 -19
                   -20 -34 -53z"/>
                   </g>
                   </svg>

                </div>

                <div class="mt-16" style="width: 75%; margin: 0 auto;">
                    @livewire('listar-noticias')
                </div>



            </div>
        </div>
    </body>
</html>

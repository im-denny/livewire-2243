<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            @font-face {
                font-family: "Quantify";
                src: url("/fonts/Quantify.woff") format("woff");
                font-weight: normal;
                font-style: normal;
            }

            * {
                box-sizing: border-box;
            }

            body {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                font-family: 'Montserrat', sans-serif;
            }

            body {
                overflow-y: scroll !important;
            }

            .js-cookie-consent {
                display: flex;
                justify-content: space-between;
                position: fixed;
                max-width: 80%;
                z-index: 9999;
                padding: 20px;
                bottom: 0;
                background-color: #FFBB33;
                color: #1a1a1a;
                box-shadow: 0px 4px 6px rgba(71, 71, 71, 0.568);
            }

            .cookie-consent__message {
                max-width: 80%;
            }

            .cookie-consent__agree {
                padding: 10px 20px;
                background-color: #333;
                color: #fff;
                margin-top: 20px;
                max-height: 50px;
                border-radius: 5px;
                align-self: center;
                cursor: pointer;
            }

            @font-face {
                font-family: "Quantify";
                src: url("../fonts/Quantify.woff") format("woff");
                font-weight: normal;
                font-style: normal;
            }

            input[type="button"],
            input[type="submit"] {
                border: none;
                outline: none;
            }


            /* @font-face {
                font-family: "Quantify";
                src: url("../fonts/Quantify.ttf") format("truetype");
                font-weight: normal;
                font-style: normal;
            } */

            p {
                font-size: 14px;
                font-family: 'Montserrat', sans-serif;
            }

            a {
                font-family: 'Montserrat', sans-serif;
            }

            h1 {
                font-size: 26px;
            }

            h2 {
                font-size: 22px;
                font-family: 'Montserrat', sans-serif;
            }

            h3 {
                font-size: 20px;
                font-family: 'Montserrat', sans-serif;
            }

            h4 {
                font-size: 18px;
                font-family: 'Montserrat', sans-serif;
            }

            a,
            button,
            p,
            li {
                font-family: 'Montserrat', sans-serif;
            }

            .midpage__title-wrapper h2 {
                color: #FFBB33;
                font-size: 26px;
                text-align: center;
                MARGIN-TOP: 50PX;
            }

            .headertitle__yellow {
                font-size: 22px;
                color: #FFBB33;
                padding-left: 5px;
                margin-block-start: 0em;
                margin-block-end: 0em;
            }

            .headertitle__status {
                margin-top: 20px;
                margin-block-start: 0em;
                margin-block-end: 0em;
                margin-top: 20px;
                margin-left: 7px;
            }

            .dark__title h2 {
                color: #333132;
            }


            /* New button with effect */

            .opacity__invisible {opacity:0;}


            /* Button Styles */

            .button {
                display: inline-flex !important;
                color: #333 !important;
                text-decoration: none !important;

                align-items: center !important;
                justify-content: center !important;
                overflow: hidden !important;
                border-radius: 5px !important;
                height: 41px !important;

            }

            #button-5 a,
            #button-5 input {
                color: #333 !important;
                text-decoration: none !important;

            }





            /* Fifth Button */

            #button-5 {
                position: relative !important;
                overflow: hidden !important;
                cursor: pointer !important;
            }

            #button-5 a,
            #button-5 input,
            #button-5 button {
                position: relative !important;
                transition: all .45s ease-Out !important;
            }

            #translate {
                transform: rotate(50deg) !important;
                width: 100% !important;
                height: 250% !important;
                left: -250px !important;
                top: -30px !important;
                background: #e4a62c !important;
                position: absolute !important;
                transition: all .3s ease-Out !important;
            }

            #button-5:hover #translate {
                left: 0 !important;
            }

            #button-5:hover a,
            #button-5:hover input,
            #button-5:hover button {
                color: #2D3142 !important;
            }

            .detail__contact-btn #button-5 a,
            .benefits__background-yellow #button-5 a {

                color: #fff !important;
            }

            .swiper1 .swiper-slide .button {
                margin-bottom: 20px;
                z-index: 2 !important;
                height: 41px;
            }

            .swiper1 .swiper-slide .button .button__primary-yellow {
                padding: 10px 20px;
            }

            .blogswiper__wrapper .image__background {
                position: absolute !important;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;

            }

            .blogswiper__wrapper .slider-overlay h3 {
                padding: 20px;
                font-size: 20px;
            }

            .blogswiper__wrapper .button__primary-yellow {
                height: 41px;
            }


            .search__result-footer .button a {
                padding: 10px 40px;
                height: 41px;
                text-decoration: none;
            }

            .search__result-footer .button {
                margin-right: 20px;
                margin-left: 10px;
                height: 41px;
            }


            /* end new buttopn with effect */

            .button__secondary-blue {
                padding: 10px 20px;
                font-size: 16px;
                background-color: #150848;
                color: #fff !important;
                border: none;
                transition: .3s all;
                border-radius: 5px;
                outline: none;
                cursor: pointer;
                font-weight: 500;
                font-family: 'Montserrat';
                height: 41px !important;
            }


            .inlogbox__right #button-5 a {
                color: #fff !important;
            }

            .button__primary-yellow {
                padding: 10px 20px;
                font-size: 16px;
                background-color: #FFBB33;
                color: #333;
                border: none;
                transition: .3s all;
                border-radius: 5px;
                outline: none;
                cursor: pointer;
                font-weight: 500;
                font-family: 'Montserrat';
                height: 41px !important;
            }

            .menu__item-cta .button__primary-yellow {

                height: unset !important;
            }

            .slide__item-wrapper .button {
                margin-bottom: 20px;
            }



            .button__secondary2-purple {
                padding: 10px 20px;
                font-size: 16px;
                background-color: none;
                color: #000;
                border: 2px solid #150848;
                transition: .3s all;
                border-radius: 5px;
                outline: none;
                cursor: pointer;
                font-weight: 500;

            }

            .static__wrapper-bg #button-5 a {
                color: #fff !important;
            }

            #translate-purple {
                transform: rotate(50deg) !important;
                width: 100% !important;
                height: 250% !important;
                left: -250px !important;
                top: -30px !important;
                background: #15084823 !important;
                position: absolute !important;
                transition: all .3s ease-Out !important;
            }

            #translate-purple2 {
                transform: rotate(50deg) !important;
                width: 100% !important;
                height: 250% !important;
                left: -250px !important;
                top: -30px !important;
                background: #150848 !important;
                position: absolute !important;
                transition: all .3s ease-Out !important;
            }

            #button-5:hover #translate-purple {
                left: 0 !important;
            }

            #button-5:hover #translate-purple2 {
                left: 0 !important;
            }


            input.button__primary-yellow {
                height: 41px;
            }



            .button__secondary-blue-2 {
                padding: 4px 0px;
                font-size: 16px;
                background-color: transparent;
                color: #150848;
                border: solid 2px #150848;
                transition: .3s all;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                font-weight: 500;
            }

            .button__secondary-blue-2:hover {
                background-color: #150848;
                color: #fff;
                border: solid 2px #150848;
                transition: .3s all;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                font-weight: 500;
            }

            .addform__field:focus {
                box-shadow: 0 0 5px #FFBB33;
                border: 1px solid #FFBB33;
                border-radius: 5px;
                outline: none !important;
            }

            .header__advertisement-icon {
                width: 25px;
                margin-left: 10px;
            }

            .header__titlelink-wrapper {
                display: flex;
            }

            .white_bg {
                background-color: #fff !important;
            }

            .button__primary-yellow:hover,
            .button__secondary-blue:hover {
                opacity: .8;
            }

            button {
                padding: unset;
                margin: unset;
                border: unset;
                background: unset;
            }

            .header {
                display: grid;
                height: 80px;
                background-color: #ccc;
                grid-template-columns: 1fr;
                box-shadow: 0px 4px 6px rgba(71, 71, 71, 0.568);
                z-index: 50;
                position: sticky;
                background: #fff;
            }

            .header-wrapper {
                display: grid;
                grid-template-columns: 250px 1fr;
                max-width: 1530px;
                width: 100%;
                align-self: center;
                justify-self: center;
            }

            .nav__listgroup {
                list-style-type: none;
                display: flex;
                flex-direction: row;
                justify-content: flex-end;
                margin: 0;
                text-align: center;
                height: 100%;
                align-items: center;
                margin-top: 5px;
            }

            .nav__listgroup li a {
                padding: 20px 20px 20px 20px;
            }

            .nav__listgroup li a,
            .nav__listgroup li a:visited,
            .nav__listgroup li a:active {
                text-decoration: none;
                color: #333132;
            }

            /* .menu__item-cta a {
                padding: 10px 15px 10px 15px !important;
                color: #333 !important;
                background-color: #FFBB33;
                border-radius: 5px;
                z-index: 2;
                font-weight: 500;
            } */

            .menu {
                height: 100%;
                z-index: 99999;
                position: relative;
            }


            /* Dropdown menu */

            .sub-menu>a {
                padding: 20px 20px 43px 20px !important;
            }

            .sub-menu::after {
                content: "";
                margin: 0;
                display: inline-block;
                border: 6px solid transparent;
                border-top: 7px solid #333;
                border-bottom: 0 none;
            }

            trix-editor {
                border-color: #333 !important;
            }

            .fileupload__dropzone {
                display: flex;
                width: 240px;
                height: 240px;
                justify-content: center;
                align-items: center;
                border: #000 dotted 1px;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
                margin-left: 6px;
            }

            .fileupload__infobox img {
                width: 20px;
                margin-right: 5px;
            }

            .fileupload__infobox {
                margin-left: 10px;
            }

            .loading__overlay-animation {
                transition: all .3s ease-out;
                display: flex;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(24, 24, 24, 0.746);
                transition: all .3s ease-out;
                overflow: hidden;
                z-index: 23123;
            }

            .fileupload__dropzone img {
                width: 25px;
            }

            .fileupload__dropzone-small {
                height: 115px;
                width: 115px;
                cursor: pointer;
                margin: 5px;
                padding: 5px;
            }

            .fileupload__infobox {
                display: flex;
                justify-content: flex-start;
            }

            .fileupload__infobox p {
                font-style: italic;
            }

            .fileupload__dropzone-image {
                cursor: pointer;
            }

            .fileupload__dropzone-wrapper {
                display: flex;
                margin-left: 6px;
            }

            .fileupload__dropzone-item {
                position: relative;
                width: 115px;
                height: 115px;
                border: #000 dotted 1px;
                border-radius: 5px;
                margin: 5px;
                transition: box-shadow .2s ease-in-out;
                background-color: rgba(255, 255, 255, 0.623);
            }

            .fileupload__dropzone-item:first-child {
                width: 240px;
                height: 240px;
                grid-area: 1 / 1 / span 2 / span 2;
            }

            .fileupload__dropzone-item:hover {
                border: #FFBB33 solid 1px;
            }

            .fileupload__dropzone-item img {
                width: 100%;
                transition: all .3s ease-in-out;
                height: 100%;
                object-fit: cover;
                border-radius: 5px;
                opacity: 1;
            }

            .fileupload__dropzone-item:hover>.fileupload__item-image {
                opacity: 0.7;
            }

            .fileupload__item-remove img {
                width: 30px;
                height: 32px;
                position: absolute;
                right: 3px;
                top: 3px;
                border-radius: 5px;
                padding: 8px;
                background-color: #fff;
            }

            .editimage__preview-close img {
                width: 40px;
                height: 40px;
                position: absolute;
                right: 40px;
                top: 40px;
                cursor: pointer;
            }

            .editimage__rotate-wrapper a {
                padding: 10px 20px;
                background: #ccc;
                margin-top: 20px;
                display: block;
            }

            .rotate__button-wrapper input[type=range] {
                width: 50%;
            }

            .rotate__button-wrapper {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                justify-content: space-between;
                padding: 0px 38px;
            }

            .rotate__wrapper {
                display: flex;
                justify-content: space-between;
                flex-direction: column;
                height: 80vh;
            }

            .rotate__wrapper img {
                max-height: 90%;
                max-width: 90%;
                object-fit: cover;
                align-self: center;
            }

            .rotate90 {
                transform: rotate(90deg);
            }

            .rotate180 {
                transform: rotate(180deg);
            }

            .rotate270 {
                transform: rotate(270deg);
            }

            .rotate360 {
                transform: rotate(360deg);
            }

            .trix-button--icon-attach,
            .trix-button-group--file-tools {
                display: none !important;
            }

            .fileupload__item-edit img {
                width: 30px;
                height: 32px;
                position: absolute;
                right: 38px;
                top: 3px;
                border-radius: 5px;
                padding: 8px 7px;
                background-color: #fff;
            }

            .fileupload__item-edit {
                display: none;
            }

            .fileupload__dropzone-item:hover .fileupload__item-edit {
                display: block;
            }

            .fileupload__item-edit img:hover {
                border-radius: 5px;
                cursor: pointer;
                background-color: #f1f1f1;
                box-shadow: #333 1px 3px 9px;
            }

            .fileupload__item-remove {
                display: none;
            }

            .editimage__container {
                display: flex;
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
                justify-content: center;
                align-items: center;
                background-color: rgba(0, 0, 0, 0.801);
                z-index: 30077;
            }

            .editimage__content-wrapper {
                padding: 40px;
                border: 1px solid #ccc;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: #1a1a1ad1 20px 36px 47px;
            }

            .editimage__preview-wrapper {
                background-color: #fff;
                max-width: 700px;
                width: auto;
                height: auto;
                max-height: 90vh;
            }

            .fileupload__dropzone-item:hover .fileupload__item-remove {
                display: block;
            }

            .fileupload__item-remove img:hover {
                border-radius: 5px;
                cursor: pointer;
                background-color: #f1f1f1;
                box-shadow: #333 1px 3px 9px;
            }

            .fileupload__dropzoneitems-numbers {
                position: absolute;
                background-color: #FFBB33;
                width: 18px;
                height: 18px;
                border-radius: 5px;
                bottom: 2px;
                left: 2px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
                font-size: 10px;
            }

            .fileupload__dropzoneitems-grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
                outline: none;
            }


            /* end fileupload styling */


            /* Drag and drop styling */


            /* en drag and drop styling */

            .dropdown-navigation {
                visibility: hidden;
                cursor: pointer;
                pointer-events: none;
                /* this is so it behaves like display none and mouse does not interact with child when hidden */
                opacity: 0;
                transition: visibility 0s, opacity 0.2s;
                /* change length to longer for a nicer fade */
                transition-delay: .4s;
                position: absolute;
                top: 60px;
                box-shadow: 0px 13px 9px rgba(71, 71, 71, 0.568);
            }

            ul .sub-menu ul {
                background-color: #fff;
                min-width: 250px;
                width: auto;
                padding: 0px 0 0px 0;
            }

            .menu-item {
                margin: 0 10px;
            }

            .menu-item a,
            .nav__listgroup li a {
                font-weight: 500;
            }

            .menu-item .sub-menu {
                padding-right: 60px;
            }

            ul .sub-menu ul li {
                list-style: none;
            }

            .sub-menu li a {
                text-align: left;
                padding: 10px 10px 15px 20px;
                display: block;
                font-weight: 500;
            }

            .sub-menu li a:hover {
                color: #333;
                font-weight: 500;
                background-color: #fb3;
                ;
                transition: background-color ease-in-out .3s, color .1s;
            }

            .sub-menu li {
                position: relative;
                margin: 10px 0;
            }

            .sub-menu:hover>ul {
                visibility: visible;
                pointer-events: auto;
                opacity: 1;
                transition: opacity 0.3s;
                /* fade in when hovered */
                transition-delay: .2s;
            }

            .sub-menu ul li {
                padding: 0;
            }


            /* End dropdown */

            .logo {
                max-width: 200px;
            }

            .logo_wrapper {
                display: flex;
                justify-content: flex-start;
                padding-left: 20px;
            }

            .logo_wrapper a svg {
                height: 60px;
                margin-top: 8px;
            }

            .section {
                display: grid;
                background-color: #fff;
            }

            .section__margin-top {
                margin-top: 50px;
            }

            .section__margin-bottom {
                margin-bottom: 50px;
            }

            #gk-header {
                background: transparent !important;
            }

            #gk-bg {
                background: transparent;
            }

            #bg-video {
                background-color: linear-gradient(127deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.6530987394957983) 35%, rgba(0, 0, 0, 0.10407913165266103) 100%);
                background-size: cover;
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: -1;
            }

            .backgroundimage-header {
                background-image: url('/img/bg-motorpark-home.jpg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 100%;
            }

            .valueProposition-overlay {
                /* background-color: #0000003d; */
                /* opacity: 0.8; */
                /* position: absolute;
                margin: 0%;
                display: flex;
                width: 100%;
                height: calc(100vh - 80px);
                flex: 1; */
            }

            .section__content-wrapper {
                display: grid;
                grid-template-columns: 1fr;
                max-width: 1530px;
                width: 100%;
                align-self: center;
                justify-self: center;
                padding: 10px 0px 10px 20px;
            }

            .header__title h1 {
                color: #FFBB33;
                max-width: 800px;
                width: auto;
                font-size: 26px;

                margin-bottom: 20px;
                line-height: 1.5em;
            }

            .header__title p {
                color: #FFBB33;
            }

            .header__title .valueProposition {
                font-size: 36px;
                position: relative;
                color: #fff;
                text-align: left;
                margin-top: 80px;
            }

            .valueProporsition__undertitle {
                font-size: 24px;
            }

            .justify-self-center {
                justify-self: center;
            }


            /* Seachbox stylings */

            input[type=range] {
                -webkit-appearance: none;
                margin: 10px 0;
                width: 100%;
            }

            input[type=range]:focus {
                outline: none;
            }

            input[type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 12.8px;
                cursor: pointer;
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
                background: #8a8a8a;
                border-radius: 25px;
                border: 0px solid #000101;
            }

            input[type=range]::-webkit-slider-thumb {
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
                border: 0px solid #000000;
                height: 20px;
                width: 39px;
                border-radius: 7px;
                background: #ffbb33;
                cursor: pointer;
                -webkit-appearance: none;
                margin-top: -3.6px;
            }

            input[type=range]:focus::-webkit-slider-runnable-track {
                background: #979797;
            }

            input[type=range]::-moz-range-track {
                width: 100%;
                height: 12.8px;
                cursor: pointer;
                animate: 0.2s;
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
                background: #266104;
                border-radius: 25px;
                border: 0px solid #000101;
            }

            input[type=range]::-moz-range-thumb {
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
                border: 0px solid #000000;
                height: 20px;
                width: 39px;
                border-radius: 7px;
                background: #65001c;
                cursor: pointer;
            }

            input[type=range]::-ms-track {
                width: 100%;
                height: 12.8px;
                cursor: pointer;
                animate: 0.2s;
                background: transparent;
                border-color: transparent;
                border-width: 39px 0;
                color: transparent;
            }

            input[type=range]::-ms-fill-lower {
                background: #a6a2a7;
                border: 0px solid #000101;
                border-radius: 50px;
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
            }

            input[type=range]::-ms-fill-upper {
                background: #0080f6;
                border: 0px solid #000101;
                border-radius: 50px;
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
            }

            input[type=range]::-ms-thumb {
                box-shadow: 0px 0px 0px #000000, 0px 0px 0px #0d0d0d;
                border: 0px solid #000000;
                height: 20px;
                width: 39px;
                border-radius: 7px;
                background: #65001c;
                cursor: pointer;
            }

            input[type=range]:focus::-ms-fill-lower {
                background: #b88806;
            }

            input[type=range]:focus::-ms-fill-upper {
                background: #ff0000;
            }

            .rangeslider__label-wrapper {
                margin-left: 3px;
                display: flex;
                width: 99%;
                justify-content: space-evenly;
                border-right: 2px #333 solid;
                border-left: 2px #333 solid;
            }

            .rangeslider__item {

                width: 1px;
                height: 5px;
                border-left: 1px #333 solid;
            }

            .rangeslider__label-values {
                display: flex;
                width: 100%;
                justify-content: space-between;
            }

            .selectbox__merge-wrapper label {
                margin-bottom: 5px;
                display: block;
            }

            .reset__filter-button {
                padding: 10px 20px;
                background-color: #150848;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
            }

            .filter__result-power {
                display: grid;
                grid-template-columns: 72px 2fr 2fr;
                grid-gap: 10px;
            }

            .filter__loading-wrapper {
                position: absolute;
                bottom: 0;
                left: 0;
                background-color: #333;
                margin: 0;
                z-index: 55;
            }

            .rotate__image-button {
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                background-color: #ffbb33;
                color: #fff;
            }

            .searchbox__wrapper {
                max-width: 980px;
                width: auto;
                background: rgb(255, 255, 255);
                background: linear-gradient(90deg, rgb(255, 255, 255) 35%, rgba(252, 252, 252, 1) 100%, rgba(255, 187, 51, 1) 100%);
                border-radius: 5px;
                padding: 40px 40px 40px 40px;
                height: auto;
                box-shadow: rgba(0, 0, 0, 0.15) 3px 8px 17px;
                justify-self: flex-start;
                margin-bottom: 0px;
                position: relative;
                z-index: 40;
            }

            .homesearchboxwrapper {
                z-index: 40;
                position: relative;
                margin-bottom: 100px;
            }

            .searchbox__wrapper h2 {
                color: #333;
            }

            .searchbox__gridlayout {
                display: grid;
                grid-column-gap: 20px;
                grid-row-gap: 50px;
            }

            .searchbox__grid1 {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-column-gap: 20px;
                grid-row-gap: 50px;
                grid-template-rows: auto;
            }

            .searchbox__grid2 {
                display: grid;
                /* grid-template-columns: repeat(auto-fill, minmax(300px, 2fr) minmax(300px, 1fr)); */
                grid-column-gap: 20px;
                grid-row-gap: 50px;
                grid-template-rows: auto;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .searchbox__grid2 .searchbox__submit {
                cursor: pointer;
                font-weight: 500;
                font-family: 'Montserrat', sans-serif;
            }

            .searchbox__grid3 {
                display: flex;
                justify-content: space-between;
                flex-direction: row;
            }

            .searchbox__grid3 a {
                position: relative;
                margin-right: 20px;
                font-size: 14px;
                color: #333132;
                justify-self: flex-end;
                padding: 10px;
            }

            .sidebar__latestitem-wrapper {
                display: flex;
                flex-direction: column;
                margin-bottom: 19px;
                padding-bottom: 10px;
                border-bottom: 1px solid #333132;
            }

            .sidebar__latestitem-wrapper span:first-child {
                font-weight: bold;
                white-space: nowrap;
                overflow: hidden;
                display: block;
                text-overflow: ellipsis;
            }

            .sidebar__popuplaritem-wrapper {
                display: flex;
                flex-direction: column;
                margin-bottom: 19px;
                padding-bottom: 10px;
                border-bottom: 1px solid white;
            }

            .sidebar__popuplaritem-wrapper span:first-child {
                font-weight: bold;
                white-space: nowrap;
                overflow: hidden;
                display: block;
                text-overflow: ellipsis;
            }

            .sidebar__content-about a {
                text-decoration: none !important;
            }

            .sidebar__content-about ul {
                list-style: none;
                margin: 0;
                display: flex;
                justify-content: space-evenly;
                flex-direction: column;
                padding-inline-start: 0px;
            }

            .sidebar__latestitem-wrapper span {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                color: #333231;
            }

            .sidebar__popuplaritem-wrapper span {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                color: white;
            }

            .searchbox__grid3 a:after {
                content: url(../../icons/caret-right-solid.svg);
                width: 8px;
                margin-left: 10px;
                padding: 10px 0;
                display: inline-block;
                position: absolute;
                top: 0;
            }

            .searchbox__selectfield {
                padding: 9px 10px;
                border: 1px solid #333132;
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
                border-radius: 5px;
                width: 100%;
            }

            .searchbox__selectfield:focus {
                box-shadow: 0 0 5px #FFBB33;
                border: 1px solid #FFBB33;
                border-radius: 5px;
            }

            .searchbox__input {
                font-size: 16px;
                padding: 10px 20px;
                border: 1px solid #333132;
                border-radius: 5px;
                font-family: 'Montserrat', sans-serif;
                background: url(../../icons/search-solid.svg) center right no-repeat;
                background-position-x: 98%;
                background-size: 20px;
                background-color: #fff;
                grid-column: 1 /3;
            }

            .searchbox__input:focus {
                box-shadow: 0 0 5px #FFBB33;
                outline: none !important;
                border: 1px solid #FFBB33 !important;
                border-radius: 5px;
            }

            .searchbox__submit {
                padding: 10px 20px;
                font-size: 16px;
                background-color: #FFBB33;
                color: #333;
                border: 3px solid #ffbb33;
                transition: .3s all;
                border-radius: 5px;
                position: relative;
            }

            .searchbox__submit:hover {
                background-color: #ffca5f;
            }

            .searchbox__inputfields {
                display: grid;
                grid-template-columns: 2fr 1fr;
                grid-gap: 20px;
            }

            .selectbox__merge {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .selectbox__merged-left {
                border-radius: 5px 0 0 5px;
                border-right: none;
            }

            .selectbox__merged-left:focus {
                box-shadow: 0 0 5px #FFBB33;
                border: 1px solid #FFBB33;
                border-radius: 5px 0 0 5px;
            }

            .selectbox__merged-right {
                border-radius: 0 5px 5px 0;
            }

            .selectbox__merged-right:focus {
                box-shadow: 0 0 5px #FFBB33;
                border: 1px solid #FFBB33;
                border-radius: 0 5px 5px 0;
            }

            .searchbox__submit {
                width: 100%;
            }


            /* slider section */

            .section__spacing {
                padding: 40px;
                height: auto;
            }

            .swiper1 .swiper-slide {
                max-height: max-content;
            }

            .swiper-container {
                width: 100%;
                height: max-content;
                padding: 20px 0 !important;
            }

            .swiper-button-next,
            .swiper-button-prev {
                color: #ffbb33 !important;
                text-shadow: #333 2px 4px 6px;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                outline: none;
            }

            .swiper-slide {
                text-align: center;
                font-size: 16px;
                background: rgb(255, 255, 255);
                border-radius: 5px;
                position: relative;
            }

            .swiper5 .swiper-slide {
                border-radius: 0px;
            }

            .slide__item-image img {
                width: 100%;
                height: 200px;
                max-height: 200px;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
                object-fit: cover;
            }

            .advertisement__detail-similar .slide__item-image img {
                max-height: 150px;
            }

            .slide__list-name,
            .slide__list-city,
            .slide__list-km,
            .slide__list-year,
            .slide__list-calendar {
                position: relative;
            }

            .slide__list-name::before {
                display: block;
                content: url('../../icons/yellow/i-4.svg');
                height: 28px;
                width: 28px;
                position: absolute;
                top: 3px;
                left: 0;
            }

            .slide__list-city::before {
                display: block;
                content: url('../../icons/yellow/i-16.svg');
                height: 28px;
                width: 28px;
                position: absolute;
                top: 3px;
                left: 0;
            }

            .similair__advertisment-item .slide__list-city {
                margin-bottom: 20px;
            }

            .slide__list-year::before {
                display: block;
                content: url('../../icons/yellow/i-5.svg');
                height: 28px;
                width: 28px;
                position: absolute;
                top: 3px;
                left: 0;
            }
                .slide__list-calendar::before {
                    display: block;
                    content: url('../../icons/icon-kalendar.svg');
                    height: 28px;
                    width: 28px;
                    position: absolute;
                    top: 3px;
                    left: 0;
                }


            .slide__list-km::before {
                display: block;
                content: url('../../icons/yellow/i-1.svg');
                height: 28px;
                width: 28px;
                position: absolute;
                top: 3px;
                left: 0;
            }

            .slide__list-items {
                list-style-type: none;
                text-align: left;
                padding-inline-start: 30px !important;
            }


            /* .similair__advertisment-item:hover {box-shadow: rgb(128, 128, 128) 0px 2px 9px;
            } */

            .slider__item-info {
                margin-top: 10px;
            }

            .slider__item-info p {
                text-align: left;
                padding: 0px 10px;
                margin-top: 15px;
                margin-left: 20px;
                white-space: wrap;
                height: 30px;
                text-overflow: ellipsis;
                max-width: 400px;
                font-weight: bold;
                color: #333;
            }

            .similair__advertisment-wrapper .slider__item-info p {
                text-align: left;
                padding: 0px 10px;
                font-size: 15px;
                margin-top: 0px;
                white-space: wrap;
                margin-left: 0px;
                text-overflow: ellipsis;
                max-width: 219px;
                color: #333;
                overflow: hidden;
                margin-bottom: 0;
                height: 22px;
            }

            .similair__item-modelname {
                font-size: 14px !important;
                font-weight: 400 !important;
                overflow: hidden;
                max-width: 304px;
                white-space: nowrap;
                text-overflow: ellipsis;
            }

            .similair__advertisment-wrapper .slider__item-info p:nth-child(2) {
                font-size: 14px;
            }

            .similair__advertisment-wrapper .slider__item-info ul {
                margin-block-start: 0em;
                margin-block-end: 0em;
            }

            .similair__advertisment-item .slider__item-info {
                padding: 10px;
            }

            .display__flex {
                display: flex;
                flex-direction: column;
            }

            .similair__advertisment-wrapper .slide__list-items {
                list-style-type: none;
                text-align: left;
                padding-inline-start: 10px !important;
            }

            .slide__list-items li {
                padding: 8px 0px 10px 40px;
                font-size: 14px;
                overflow: hidden;
                max-width: 304px;
                white-space: nowrap;
                height: 40px;
                text-overflow: ellipsis;
            }

            .slider__item-price {
                text-align: left;
                padding: 5px 30px;
                border-top-right-radius: 2px;
                border-bottom-right-radius: 2px;
                background-color: #150848;
                font-size: 16px;
                color: #fff;
                position: absolute;
                font-weight: 500;
                top: 16px;
                left: 0;
            }

            .slide__item-cta {
                text-align: left;
                padding-left: 30px;
                margin: 30px 0;
            }

            .slide__item-cta a {
                padding: 8px 20px;
                background-color: #ffffff;
                color: #333;
                text-decoration: none;
                border-radius: 5px;
                border: 2px solid #150848;
                font-weight: 500;
                transition: all .3s ease-in-out;
            }

            .slide__item-cta a:hover {
                padding: 8px 20px;
                background-color: #150848;
                color: #fff;
            }

            .footer {
                display: grid;
                height: 400px;
                background-color: #ccc;
                margin: 0;
                padding: 0;
            }

            .populair__ads-item {
                display: flex;
                margin-top: 20px;
                background-color: #fff;
                transition: all .3s ease-in-out;
                height: 90px !important;
                overflow: hidden;
            }

            .populair__ads-wrapper a {
                text-decoration: none;
                color: #333;
            }

            .populair__ads-item:hover {
                box-shadow: #ccc 0px 2px 6px;
            }

            .populair__ads-item img {
                width: 90px;
                margin-right: 10px;
                height: 100%;
                object-fit: cover;
            }

            .footer__introduction {
                grid-row: 1 / span 2;
                padding-right: 60px;
            }

            .section__background-grey {
                background: rgb(92, 92, 92);
                background: linear-gradient(90deg, rgba(92, 92, 92, 1) 0%, rgba(68, 68, 68, 1) 35%, rgb(51, 51, 51) 100%);
            }

            .section__background-lightgrey {
                background: rgb(233, 233, 233);
                background: linear-gradient(90deg, rgb(243, 243, 243)0%, rgb(236, 236, 236) 35%, rgb(243, 243, 243) 100%);
            }

            .section__background-yellow {
                background: rgb(255, 187, 51);
                background: linear-gradient(90deg, rgba(255, 187, 51, 1) 0%, rgba(255, 180, 29, 1) 35%, rgb(253, 189, 61) 100%);
            }

            .voordelen__wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .voordeel-item {
                /* padding: 50px; */
                text-align: center;
                align-self: center;
                justify-self: center;
                height: 260px;
                width: 250px;
                min-height: 260px;
            }

            .voordeel-item h4,
            .form__field-wrapper h4 {
                font-size: 22px;
                color: #333132;
                align-self: center;
            }

            .voordeel-item p {
                font-size: 18px;
            }

            .voordeel__item-icon img {
                width: 90px;
            }

            .overmotorpark__container {
                display: flex;
                justify-content: center;
                flex-direction: row;
            }

            .overmotorpark__container h3 {
                color: #FFBB33;
            }

            .overmotorpark__image-wrapper .firstimage {
                max-width: 800px;
                margin-top: 40px;
                margin-left: -100px;
                z-index: 5;
            }

            .overmotorpark__image-wrapper .secondimage {
                max-width: 700px;
                margin-top: -170px;
                margin-left: -160px;
                z-index: 6;
                border: #fff 5px solid;
            }

            .overmotorpark__text-wrapper {
                max-width: 700px;
                padding: 10px 30px;
                background-color: #FBFBFB;
                z-index: 10;
                box-shadow: 3px 6px 30px #5757572a;
                height: max-content;
            }

            .overmotorpark__text-wrapper p {
                font-size: 18px;
            }

            .overmotorpark__cta-wrapper {
                margin: 30px 0;
            }

            .overmotorpark__text-wrapper .overmotorpark__cta-wrapper a {
                padding: 10px 20px;
                background-color: #150848;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                font-weight: 500;
            }

            .footer__section-margin {
                margin-top: 80px;
            }

            .footer-links {
                text-decoration: none;
                color: #333132;
            }

            .footerbar__wrapper {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding: 0 10px;
            }

            .footer__container {
                width: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                grid-template-rows: max-content 1fr;
                ;
                grid-gap: 15px;
                padding: 10px;
            }

            .footer__logo-wrapper img {
                width: 250px
            }

            .footer__logo-wrapper {
                display: grid;
                grid-template-columns: 1fr;
                justify-content: start;
                margin-top: 40px;
                padding: 10px;
            }

            .block {
                padding-right: 50px;
            }

            .footer__info-wrapper {
                margin-bottom: 20px;
            }

            .footer__info-wrapper p {

                margin-top: 2em;
                line-height: 1.6em;
            }

            .footer__introduction p {
                margin-top: 20px;
                line-height: 2em;
            }

            .footer__introduction {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .footer__container h3 {
                margin-top: 50px;
            }

            .newsletter__subscription {
                margin-bottom: 50px;
            }

            .block h3 {
                margin-top: 40px;
                border-bottom: 3px #FFBB33 solid;
                display: inline;
                padding-bottom: 10px;
            }

            .block ul {
                padding-inline-start: 0px;
                list-style-type: none;
            }

            .block ul li {
                padding: 10px 0;
            }

            .block ul li a {
                text-decoration: none;
                color: #333132;
                font-size: 14px;
            }

            .social__icons-footer {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
                grid-gap: 10px;
            }

            .social__icons-footer {
                padding: 0;
                list-style-type: none;
                padding-top: 5px;
                display: flex;
            }

            .social__icons-footer li {
                padding: 10px;
                margin-right: 10px;
            }

            .social__icons-footer li img {
                width: 30px;
                height: 30px;
                object-fit: contain;
            }

            .newsletter__subscription {
                max-width: 80%;
            }

            .newsletter__subscription input {
                height: 40px;
                font-size: 16px;
                border-radius: 5px;
                border: 1px solid #333132;
                text-indent: 5px;
                width: 100%;
                margin-top: 30px;
                margin-bottom: 20px;
            }

            .newsletter__subscription input:focus {
                box-shadow: 0 0 5px #FFBB33;
                outline: none !important;
                border: 1px solid #FFBB33 !important;
                border-radius: 5px;
            }




            /* Pagina plaats advertentie */

            .section__darktitle-wrapper {
                background-color: #333132;
            }

            .form__section-wrapper {
                display: grid;
                grid-template-columns: 1fr;
                max-width: 760px;
                width: 760px;
                box-sizing: border-box;
                justify-self: start;
            }

            .justify-center {
                justify-self: center;
            }


            /* The switch - the box around the slider */

            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }


            /* Hide default HTML checkbox */

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }


            /* The slider */

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked+.slider {
                background-color: #32b452;
            }

            input:focus+.slider {
                box-shadow: 0 0 1px #32b452;
            }

            input:checked+.slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }


            /* Rounded sliders */

            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }

            .addform__field {
                padding: 10px 10px !important;
                border: 1px solid #333132;
                font-family: 'Montserrat', sans-serif;
                color: #333;
                font-size: 16px;
                border-radius: 5px !important;
                /* background-color:#ccc; */
            }

            .addform__selectfield {
                padding: 10px 10px;
                border: 1px solid #333132;
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
                border-radius: 5px;
            }

            .form__payment-perks {
                padding: 30px 50px;
                border: solid 1px #f3f3f3;
                background-color: rgb(243, 243, 243);
                margin: 40px 0;
                border-radius: 5px;
            }

            .form__payment-perks ul {
                padding-inline-start: 0px;
                list-style: none;
                padding-left: 10px;
                text-indent: 2px;
                list-style-position: outside;
            }

            .form__payment-perks ul li:before {
                content: '✔';
                margin-left: -1.3em;
                margin-right: .300em;
                color: #FFBB33;
                font-size: 24px;
            }

            .form__payment-perks ul li {
                line-height: 2.2em;
            }

            .formgrid__2col-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
            }

            .formgrid__1-2col-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
                margin-top: 20px;
            }

            #formCreateAccount .form__field-wrapper {
                margin: 20px 0;
            }

            .form__field-wrapper input[type=text]:focus,
            .form__field-wrapper textarea:focus {
                box-shadow: 0 0 5px #FFBB33;
                outline: none !important;
                border: 1px solid #FFBB33 !important;
                border-radius: 5px;
            }

            .form__section-title {
                padding: 0 10px;
            }

            .form__field-wrapper {
                display: grid;
                padding: 0 10px;
                position: relative;
            }

            .addform__switch-wrapper {
                display: grid;
                grid-template-columns: 2fr;
                align-self: center;
            }

            .addform__cta-wrapper {
                display: flex;
                flex-wrap: nowrap;
                justify-content: space-between;
            }

            .addform__cta-wrapper button {
                padding: 10px 0;
                background-color: #FFBB33;
                color: #333;
                text-decoration: none;
                border-radius: 5px;
                font-size: 16px;
                width: 100%;
                display: block;
                text-align: center;
                cursor: pointer;
                transition: all .2s ease-in-out;
                outline: none;
            }

            .addform__cta-wrapper a {
                padding: 10px 0;
                background-color: #333;
                color: #ffffff;
                text-decoration: none;
                border-radius: 5px;
                font-size: 16px;
                width: 100%;
                display: block;
                text-align: center;
                cursor: pointer;
                transition: all .2s ease-in-out;
            }

            .addform__cta-wrapper button:hover {
                background-color: #ffcf70;
            }

            .addform__cta-wrapper a:hover {
                background-color: #000;
            }


            /* .hide2 {
                display: none;
                width: 100%;
            }
            .hide {
                position: absolute !important;
                top: -9999px !important;
                left: -9999px !important;
                display: grid !important;
            }
            .hide2 .addform__field {
                width: 100%;
            } */


            /* #width100,
            #width97 {
                width: 97% !important;
            } */

            .form__bidding-innerflex {
                display: flex;
                flex-direction: column;
                padding: 0px;
            }

            .bidding__list .biddinglist-bid-wrapper {
                padding: 10px 0px;
                border-bottom: 1px solid #ccc;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .biddinglist-bid-user img {
                height: 40px;
                width: 40px;
                border-radius: 50%;
                object-fit: cover;
            }

            .form__isallowed-wrapper {
                display: flex;
                padding-left: 10px;
            }

            .addform__switch-wrapper {
                margin-left: 20px;
            }

            div.form__error {
                padding: 10px 20px;
                background-color: #fa1d1d;
                border-radius: 5px;
                margin-top: 20px;
                color: #fff;
                opacity: 1;
                transition: .8s all ease-in-out;
            }

            .search__results-favorite svg.svg-inline--fa.fa-pencil-alt.fa-w-16 {
                width: 35px;
            }

            .search__result-col-2 .search__results-favorite svg.svg-inline--fa.fa-pencil-alt.fa-w-16 {
                width: 25px;
            }


            /* Inloggen pagina */

            .search__results-favorite button:focus {
                outline: none !important;
            }

            .search__results-favorite button {
                cursor: pointer;
            }

            .filter__mobile-button {
                display: none;
            }

            .header__grid-container .search__results-favorite {
                width: 50px;
            }

            .sampleDiv,
            .sampleDiv1,
            .sampleDiv2,
            .sampleDiv3,
            .sampleDiv4 {
                display: none;
                margin-top: 30px;
            }

            .header__grid-container .search__results-favorite {
                width: 50px;
            }

            .header__grid-container .search__results-favorite .favourites__modal-button {
                width: 40px;
            }


            /* create adveertisement styling */

            .createad__information-container {
                position: fixed;
                right: 20px;
                top: 100px;
            }

            .createad__information-wrapper {
                position: relative;
                padding: 30px;
                background-color: #f4f4f4;
                box-shadow: rgb(167, 167, 167) 0px 2px 6px;
                margin-top: 30px;
                margin-left: 30px;
                width: 80%;
                border-radius: 5px;
            }

            .createad__information-image img {
                width: 90px;
            }

            .createad__information-image {
                position: absolute;
                top: -20px;
                ;
                right: -50px;
            }

            .card .btn-primary {
                padding: 10px 15px;
                cursor: pointer;
            }

            .card {
                display: flex;
                padding: 40px;
                justify-content: center;
            }

            .card .form-group input {
                width: 100%;
                padding: 10px 15px;
                margin-bottom: 20px;
            }


            .card .login-box-msg {
                font-weight: bold;
            }

            .card .card-body {

                width: 400px;

                padding: 40px;
                background-color: #f4f4f4;
                border-radius: 5px;
                box-shadow: rgb(173, 173, 173) 0px 3px 9px;
                ;
            }

            .login-card-body .btn-primary {

                color: #333132;
                background-color: #ffbb33;
            }

            .login-page {

                background-color: #333132;
            }

            /* detail pagina */

            .favourites__modal-detailpage svg {
                width: 50px;
            }

            #map {
                height: 100%;
            }

            .backgroundimage-inloggen {
                background-image: linear-gradient(127deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.6530987394957983) 35%, rgba(0, 0, 0, 0.10407913165266103) 100%), url('/img/bg-inloggen.jpg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: auto;
                min-height: 65vh;
                padding: 100px 20px;
            }

            .sectionalert-error p {
                color: #fff !important;
            }

            .sectionalert-success p {
                color: #fff !important;
            }

            .inlogbox__wrapper {
                display: grid;
                max-width: 750px;
                width: 100%;
                grid-template-columns: 1fr 1fr;
                align-self: center;
                justify-self: center;
                max-height: 600px;
                height: max-content;
                box-shadow: rgb(24, 24, 24) 3px 8px 10px;
                border-radius: 5px;
            }

            .inlogbox__left {
                background-color: #f4f4f4;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                display: flex;
                padding: 30px 20px;
                flex-direction: column;
            }

            .inlogbox__left .inloggen-container {
                height: 275px;
            }

            .inloggen-container div {
                display: flex;
                align-items: center;
            }

            .inloggen-container div label {
                margin-left: 10px;
            }

            .inlogbox__right {
                background-color: #ffbb33;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                display: flex;
                align-items: center;
                padding: 30px 20px;
                flex-direction: column;
                text-align: center;
                justify-content: flex-start;
            }

            .inloggen-container {
                display: flex;
                justify-content: space-evenly;
                flex-direction: column;
                height: 100%;
            }

            .inlogbox__right h2 {
                color: #333;
                font-size: 18px;
                font-weight: bold;
            }

            .inlogbox__right p {
                color: #333;
            }

            .listing__action-link svg {
                height: 18px;
                fill: #333;
                margin-right: 10px;
            }

            .inlogbox__right .button__primary-yellow,
            .inlogbox__left .button__primary-yellow {
                width: 100%;
            }



            .inlogbox__right a {
                text-decoration: none;
            }

            .header__grid-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .header__grid-container a {
                text-decoration: none;
            }

            .backtosearchbox__link {
                font-size: 16px;
                padding-left: 10px;
                padding-top: 10px;
                display: inline-block;
                align-content: start;
                width: max-content;
            }

            .favoritesicon {
                width: 40px;
                margin-right: 30px;
            }

            .favorites__link {
                height: auto;
            }


            /* Results page */

            .sticky {
                top: 10px;
                position: sticky;
            }

            .filter__option-wrapper {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex: 1;
            }

            .filter__option-wrapper select {
                height: 41px;
            }

            .margin-top-111px {
                margin-top: 112px;
            }

            .sticky__resultpage-header {
                top: 0px;
                display: flex;
                justify-content: center;
                width: 100%;
                padding: 0 25px 0px 25px;
                z-index: 21;
                display: flex;
                border-radius: 0px !important;
                position: sticky;
                top: 0;
                left: 0;
                right: 0;
                margin-top: 0px !important;
                /* transition: all .8s ease-in-out; */
                max-width: 1530px;
            }

            .overview_results {
                display: grid;
                grid-template-columns: 1fr 4fr;
                padding: 10px;
                padding-left: 5px;
            }

            .filter__results {
                align-self: start;
                border-radius: 5px;
                margin-top: 20px;
            }

            .filter__item-wrapper {
                display: flex;
                flex-direction: column;
            }

            .filter__item-arrow {
                font-size: 14px;
                font-weight: bold;
                cursor: pointer;
            }

            .filter__switch-wrapper {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                width: 100%;
                margin: 10px 0;
                border-bottom: solid #ccc 1px;
                padding-bottom: 10px;
            }

            .filter__item-arrow {
                height: 10px;
                width: 10px;
                -moz-transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                border-right: #000 solid 2px;
                border-bottom: #000 solid 2px;
            }

            .filter__results ul {
                margin: unset;
                padding: unset;
            }

            .filter__type-container {
                width: 100%;
            }

            .filter__results ul li {
                list-style: none;
                margin-bottom: 15px;
            }

            .filter__results ul li h4 {
                margin-block-start: 10px;
                margin-block-end: 10px;
            }

            .search__results {
                padding: 10px 0;
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            .filter__results .search__results {
                padding: 10px 10px;
            }

            :root {
                --loader-color: #4CAF50;
                --back-color: #A5D6A7;
                --time: 3s;
                --size: 3px;
            }

            .loader {
                overflow: hidden;
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                align-content: center;
                justify-content: flex-start;
                z-index: 10;
            }

            .loader__element {
                height: var(--size);
                width: 100%;
                background: var(--back-color);
            }

            .loader__element:before {
                content: '';
                display: block;
                background-color: var(--loader-color);
                height: var(--size);
                width: 0;
                animation: getWidth var(--time) ease-in infinite;
            }

            @keyframes getWidth {
                100% {
                    width: 100%;
                }
            }

            .background-shadow {
                background-color: #f4f4f4;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                border-radius: 5px;
            }

            .width-100 {
                width: 100%;
            }

            .search__results .search__result {
                display: grid;
                grid-template-columns: 1fr;
                background-color: #fff;
                border-radius: 5px;
                margin: 10px 0px 10px 10px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                min-height: 300px;
                max-height: 300px;
                max-width: 574px;
                min-width: 500px;
            }

            .overview__results-header {
                align-self: start;
                padding-right: 20px;
                background-color: #ffbb33;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                padding: 10px 15px;
                border-radius: 5px;
                margin-top: 20px;
                position: relative;
                grid-column: 1 / 3;
                z-index: 11;
            }

            .absolute {
                position: fixed;
                top: 47px;
                margin-top: 0 !important;
                left: 0;
                right: 0;
                border-radius: 0 !important;
                display: flex;
                justify-content: center;
                padding: 10px;
            }

            .margintop-20 {
                margin-top: 20px;
            }

            .selectbox__merge-wrapper h5,
            .filter__type-container h5 {
                margin-block-end: .5em;
                margin-block-start: .5em;
            }

            .filter__results--body {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            .results__button-wrapper {
                display: flex;
                flex-direction: row;
                justify-self: flex-end;
                flex-wrap: wrap;
            }

            .results__header-filterbutton {
                padding: 8px;
                background-color: #333;
                color: #fff;
                width: max-content;
                margin: 4px 5px;
                border-radius: 5px;
                cursor: pointer;
                position: relative;
                padding-right: 30px;
            }

            .results__header-filterbutton:after {
                content: url(/icons/times-solid.svg);
                position: absolute;
                z-index: 5;
                /*a number that's more than the modal box*/
                right: 10px;
                top: 10px;
                height: 10px;
                width: 10px;
            }

            .results__header-filterbutton:hover {
                background-color: #000;
                transition: .3s all ease;
            }

            .overview__results-header .searchbox__selectfield {
                width: 272px;
                align-self: flex-start;
            }

            .m-checkbox {
                display: flex;
                align-items: center;
            }

            .m-checkbox input {
                margin-right: 10px;
            }

            input[type="checkbox"] {
                height: 29px;
                width: 20px;
            }

            .search__results .search__result-col-1 .swiper-pagination-bullet {
                background: #fff;
                opacity: .8;
            }

            .search__results .search__result-col-1 .swiper-pagination-bullet-active {
                background-color: #FFBB33;
            }

            .search__results .search__result .search__result--columns {
                display: grid;
                grid-template-columns: 1fr 1fr;
                height: 242px;
            }

            .search__results .search__result .search__result--columns img {
                border-radius: 5px 0 0 0;
                object-fit: cover;
                width: 100%;
                height: 100%;
            }

            .search__results .search__result .search__result--columns .swiper__enlarge-icon {
                height: 20px;
                width: 20px;
                position: absolute;
                right: 10px;
                top: 10px;
                border-radius: unset;
                z-index: 10;
                cursor: pointer;
            }

            .search__result-col-1 .swiper-container {
                width: 290px;
                height: 252px;
                margin: 0;
                padding: 0 !important;
                border-radius: 5px 0 0 0;
            }

            .search__result-col-1 .swiper2 .swiper-slide {
                text-align: center;
                font-size: 16px;
                background: rgb(243, 243, 243);
                min-height: 250px;
                border-radius: 5px;
                position: relative;
            }

            .search__result--columns .search__result-col-2 {
                padding: 8px;
                display: grid;
                grid-template-columns: 1fr 25px;
                background-color: #f4f4f4;
                border-top-right-radius: 5px;
            }

            .search__result--columns .search__result-col-2 .search__result-content {
                padding-left: 10px;
                padding-top: 2px;
            }

            .search__result-content p {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
                max-width: 200px;
                margin: 5px 0px;
            }

            .search__result--columns .search__result-col-2 .search__results-favorite {
                text-align: right;
            }

            .search__result--columns .search__result-col-2 .search__results-favorite svg {
                color: #FFBB33;
                width: 25px;
            }

            .search__result--columns .search__result-col-2 .search__results-favorite svg path {
                transition: .2s ease-in-out;
            }

            .search__result--columns .search__result-col-2 .search__results-favorite svg:hover path {
                fill: #dba12d;
            }

            .search__result--columns .search__result-col-2 .search__result-title {
                font-size: 16px;
                color: #150848;
                font-weight: bold;
                /* line-height: 21px; */
                /* overflow: hidden; */
                /* text-overflow: ellipsis; */
                /* max-width: 20ch; */
                display: block;
                margin: 0px 10px 15px 0;
                text-decoration: none;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                /* number of lines to show */
                -webkit-box-orient: vertical;
            }

            .search__result--columns .search__result-col-2 .search__result-price {
                font-weight: bold;
                font-size: 16px;
                margin-block-start: unset;
                margin-block-end: unset;
                margin-bottom: 10px;
            }



            .searchresults__image-wrapper,
            .searchresults__image-container,
            .searchresults__image-wrapper .searchresults__image {
                height: 100%;
                overflow: hidden;
                height: 242px;
            }

            .motorkenteken-wrapper {
                margin-top: 10px;
                border-radius: 5px;
                border: 2px #333 solid;
                padding: 0px;
                height: 90px;
                width: 95px;
                background-color: #ffd33a;
            }

            .motorkenteken-wrapper span {
                font-size: 10px;
            }

            .motorkenteken-1st2 {
                text-transform: uppercase;
                margin-left: 7px !important;
                margin-top: -30px;
                margin-right: 10px !important;
                font-weight: bold;
                font-size: 22px !important;
                line-height: 1.5em;
                margin-left: 5px;
                text-align: right;
            }

            .motorkenteken-2st4 {
                text-transform: uppercase;
                margin-left: 7px !important;
                margin-top: -30px;
                margin-right: 0px !important;
                font-weight: bold;
                font-size: 22px !important;
                line-height: 1.5em;
                margin-left: 5px;
                text-align: right;
            }

            .motorkenteken-wrapper img {
                width: 10px !important;
            }

            .landcode {
                height: 100%;
                height: 62px;
                width: 35px;
                display: inline-block;
                position: relative;
                margin: 0;
                margin-top: -.1px;
                vertical-align: top;
                background-color: #227aff;
                border-radius: 10px 0 0 10px;
                z-index: 0;
                text-align: left;
            }

            .landcode span {
                color: #fff;
                font-weight: 600;
                position: absolute;
                width: 100%;
                bottom: 5px;
                text-align: center;
            }

            .kenteken__detail-motor {
                height: 42px;
                width: 25px;
                border-radius: 3px 0 0 0px !important;
            }

            .search__result--columns .search__result-col-2 ul {
                margin: unset;
                padding-left: 15px;
                margin-top: 20px;
            }

            .search__result--columns .search__result-col-2 ul li {
                margin-bottom: 10px;
                list-style: square;
                position: relative;
                font-size: 14px;
            }

            .search__results .search__result-footer {
                background-color: #333132;
                height: 58px;
                border-radius: 0 0 5px 5px;
                align-self: end;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .search__results .search__result-footer ul {
                margin-block-start: 0em;
                margin-block-end: 0em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                padding-inline-start: 0px;
                display: flex;
                padding: 0px 0px 0px 10px;
                margin: 0;
                height: 100%;
            }

            .search__results .search__result-footer ul li {
                list-style: none;
                color: #fff;
                margin: 0 10px;
            }

            .search__results .search__result-footer ul li a {
                color: #fff;
                text-decoration: none;
            }

            .search__results .search__result-footer ul li .button__primary-yellow {
                padding: 10px;
            }

            .search__results .search__result-footer .search__result-footer-btn {
                border: unset;
                background-color: unset;
                margin: 0 10px;
                padding: unset;
                color: #333;
            }

            .search__results .search__result-footer .search__result-footer-btn a {
                padding: 8px 20px;
                font-size: 14px;
                text-decoration: none;
            }

            .search__results .search__result-footer .search__result-footer-btn a:hover {
                background-color: #dba12d;
            }

            .search__result-footer-links .advertiser__phonenumber a {
                display: inline-block !important;
            }

            .search__result-footer-links .advertiser__location a {
                display: inline-block !important;
            }

            .search__results .search__result-footer .search__result-footer-links .advertiser__phonenumber:before {
                content: url(../../img/icons/phone-alt-solid.svg);
                color: #fff;
                margin-right: 6px;
                position: relative;
                top: 3px;
            }

            .search__results .search__result-footer .search__result-footer-links .advertiser__location:before {
                content: url(../../icons/map-marker-alt-solid.svg);
                color: #fff;
                margin-right: 6px;
                position: relative;
                top: 3px;
            }

            .search__result-footer-links ul li a {
                font-size: 14px;
            }

            .editadvertisement__submit-wrapper button,
            .editadvertisement__submit-wrapper a {
                max-width: 49%;
                margin-bottom:50px;
                font-weight:15px!important;
            }


            /* Creat account stylings */

            .create__account {
                background-color: #f4f4f4;
                border-radius: 5px;
                padding: 50px 10px;
                box-shadow: rgb(24, 24, 24) 3px 8px 10px;
            }

            .form__submit-wrapper {
                display: grid;
                padding: 0 10px;
            }

            .form__submit-wrapper .button__primary-yellow {
                text-align: center;
            }

            .blocker {
                z-index: 51 !important;
            }

            .modal_favorites {
                vertical-align: middle;
                position: absolute;
                z-index: 2;
                width: 700px !important;
                height: auto !important;
                box-sizing: border-box;
                background: unset !important;
                max-width: 800px !important;
                padding: unset !important;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -o-border-radius: 5px;
                -ms-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: unset !important;
                -moz-box-shadow: unset !important;
                -o-box-shadow: unset !important;
                -ms-box-shadow: unset !important;
                box-shadow: unset !important;
                text-align: left;
            }

            .advertising__modalslider-wrapper {
                vertical-align: middle;
                position: relative;
                z-index: 2;
                width: auto !important;
                height: auto !important;
                box-sizing: border-box;
                background: #fff0 !important;
                max-width: 1080px !important;
                padding: unset !important;
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                -o-border-radius: 0px !important;
                -ms-border-radius: 0px !important;
                border-radius: 0px !important;
                -webkit-box-shadow: unset !important;
                -moz-box-shadow: unset !important;
                -o-box-shadow: unset !important;
                -ms-box-shadow: unset !important;
                box-shadow: unset !important;
                text-align: left;
            }

            .modal_slider {
                display: none;
                vertical-align: middle;
                position: relative;
                z-index: 2;
                width: 100% !important;
                height: auto !important;
                box-sizing: border-box;
                background: unset !important;
                max-width: 80vw !important;
                padding: unset !important;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -o-border-radius: 5px;
                -ms-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: unset !important;
                -moz-box-shadow: unset !important;
                -o-box-shadow: unset !important;
                -ms-box-shadow: unset !important;
                box-shadow: unset !important;
                text-align: left;
            }


            /* Advertisement page */

            .advertisement__details-2columnlayout {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
                padding: 10px;
            }

            .advertisement__detail {
                display: flex;
                flex-direction: column;
            }

            .advertisement__details-right {
                display: flex;
                flex-direction: column;
            }

            .detail_owner-wrapper {
                display: flex;
            }

            .advertisement__socialshare-wrapper {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                justify-content: center;
                align-items: center;
            }

            .post__content-section .post__social-icons li:hover,
            .details__share-icons ul li:hover {
                background: #fb3;
            }

            .advertisement__socialshare-wrapper a {
                text-decoration: none;
            }

            .details__share-head img {
                max-width: 20px;
            }

            .advertisement__map-header {
                background-color: #FFBB33;
                padding: 20px;
                margin: 20px;
                min-height: 50px;
                width: 100%;
                max-width: 1510px;
                margin-bottom: -25px;
                z-index: 9;
                justify-self: center;
                display: flex;
                justify-content: space-between;
                box-shadow: #ccc 0px 6px 12px;
                align-items: center;
            }

            /* .advertisement__footer-contact {
                margin-top: 20px;
            } */

            .advertisement__footer-contact #button-5 a {
                color: #fff !important;
            }


            .advertisement__detail-slider,
            .advertisement__detail-contact,
            .advertisement__detail-bidding,
            .advertisement__detail-features,
            .advertisement__detail-share,
            .advertisement__detail-description,
            .advertisement__detail-suggestions,
            .advertisement__detail-similar,
            .advertisement__detail-map {
                background-color: #f4f4f4;
                padding: 20px;
                height: 100%;
                margin-bottom: 20px;
                max-width: 750px;
            }

            .advertisement__detail-features {
                height: max-content;
            }

            .advertisement__detail-slider {
                height: max-content;
            }

            .advertisement__detail-similar {
                height: max-content;
            }

            .voordeel-item h4,
            .form__field-wrapper h4 {
                font-size: 16px;
            }

            .voordeel-item p {
                font-size: 16px;
            }

            .voordeel-item {
                height: max-content;
            }

            .advertisement__detail-share,
            .advertisement__detail-bidding,
            .advertisement__detail-contact {
                height: max-content;
            }

            .advertisement__detail-bidding {
                max-height: 530.66px;
                overflow: hidden;
            }

            .overmotorpark__text-wrapper p {
                line-height: 1.6em;
                ;
            }

            .advertisement__detail-map {
                height: 100%;
            }


            /* .advertisement__detail-slider {
                order: 1;
            }

            /* .advertisement__detail-contact {
                order: 2;
            } */

            .detail__map-wrapper {
                height: 100%;
                width: 100%;
            }

            .advertisement__detail-description {
                min-height: 400px;
                padding-bottom: 20px;
                overflow-y: scroll;
                position: relative;
                height: 400px;
            }

            .advertisement__detail-bottomblur {
                padding-bottom: 20px;
            }

            .advertisement__detail-bottomblur:after {
                background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #f4f4f4 90%), linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #f4f4f4 90%);
                bottom: 0;
                content: "";
                display: block;
                height: 100px;
                left: 0;
                position: absolute;
                transform: translateY(0);
                transition: transform .5s 0s ease-in-out;
                width: 100%;
            }

            .detail__description-head h1 {
                font-size: 18px;
                max-height: 100%;
            }

            .readmore__active {
                max-height: 100%;
                overflow: hidden;
                height: 100%;
            }

            .readmore__active::after {
                height: 0;
            }

            .readmore__active button {
                display: none;
            }

            .button__absolute {
                position: absolute;
                bottom: 10px;
                padding: 10px 20px;
                z-index: 9;
            }

            .advertisement__detail-description p {
                font-size: 16px;
                line-height: 1.4em;
            }

            .advertisement__detail-description::-webkit-scrollbar {
                width: 5px !important;
            }

            .advertisement__detail-description {
                scrollbar-width: thin !important;
                scrollbar-color: #CFD8DC #90A4AE !important;
            }

            .advertisement__detail-description::-webkit-scrollbar-track {
                background: #c3c3c3 !important;
            }

            .advertisement__detail-description::-webkit-scrollbar-thumb {
                background-color: #150848a1 !important;
                border-radius: 0px;
                border: 0px solid #150848a1 !important;
            }

            .advertisement__detail-description::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px rgb(255, 255, 255);
                border-radius: 0px;
            }

            .advertisment__detail-contact {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .advertisement__detail-slider img {
                width: 100%;
                object-fit: cover;
                max-width: 750px;
                height: 569px;
            }

            .advertisement__detail-slider .swiper-slide {
                text-align: center;
                font-size: 16px;
                background: rgb(243, 243, 243);
                height: auto;
                border-radius: 5px;
                position: relative;
            }

            .advertising__modalslider-wrapper .swiper-slide {
                text-align: center;
                font-size: 16px;
                background: rgba(255, 255, 255, 0) !important;
                border-radius: 5px;
                position: relative;
                height: auto;
            }

            .advertising__modalslider-wrapper a.close-modal {
                top: 4.5px !important;
                right: 14.5px !important;
                z-index: 2 !important;
            }

            .advertisement__detail-slider .swiper-pagination-bullet {
                background: #fff;
                opacity: .8;
            }

            .advertisement__detail-slider .swiper-pagination-bullet-active {
                background-color: #FFBB33;
            }

            .similair__advertisment-item {
                text-align: center;
                font-size: 16px;
                background: rgb(255, 255, 255);
                padding-bottom: 0px;
                position: relative;
                height: 100%;
                transition: all .3s ease;
            }

            .similair__advertisment-item .slide__list-items li {
                padding: 8px 0px 10px 0px;
            }

            .similair__advertisment-item img {
                border-radius: 0px;
            }

            .similair__item-image {
                width: 20px !important;
            }

            .similair_item-button {
                position: absolute;
                right: 10px;
                bottom: 10px;
            }

            .advertisement__detail-suggestions img,
            .advertisement__detail-similar img {
                object-fit: cover;
            }

            .details__share-icons ul {
                list-style: none;
            }

            .advertisement__socialshare-wrapper .whatsapp,
            .advertisement__socialshare-wrapper .facebook,
            .advertisement__socialshare-wrapper .instagram,
            .advertisement__socialshare-wrapper .email {
                position: relative;
            }

            .advertisement__socialshare-wrapper .whatsapp::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/whatsapp-square-brands-yellow.svg);
            }

            .advertisement__socialshare-wrapper .facebook::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/facebook-square-brands-yellow.svg);
            }

            .advertisement__socialshare-wrapper .instagram::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/instagram-square-brands-yellow.svg);
            }

            .advertisement__socialshare-wrapper .email::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/envelope-square-solid-yellow.svg);
            }

            .advertisement__detail-slider .swiper-container {
                width: 100%;
                height: auto;
                max-width: 750px;
                margin: 0;
                padding: 0px 0px !important;
                border-radius: 0px 0 0 0;
            }

            .advertisement__detail-slider .swiper__enlarge-icon {
                height: 20px;
                width: 20px;
                position: absolute;
                right: 10px;
                top: 10px;
                border-radius: unset;
                z-index: 10;
                cursor: pointer;
            }

            .blogswiper__wrapper .swiper-slide {
                color: rgb(255, 255, 255);
                height: 428px;
                text-align: center;
                display: flex;
                align-items: center;
                overflow: hidden;
                position: relative;
                background-color: rgba(0, 0, 0, 0.582);
                z-index: 1;
                flex-direction: column;
                justify-content: flex-end;
            }

            .blogswiper__wrapper .swiper-slide h3 {
                margin: 100px 0 0 0;
            }

            .slider-overlay p {
                font-size: 16px;
                padding: 0 20px;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                /* number of lines to show */
                -webkit-box-orient: vertical;
                font-size: 20px;
            }

            .slider-overlay h3 {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                font-size: 26px;
                -webkit-line-clamp: 2;
                /* number of lines to show */
                -webkit-box-orient: vertical;
            }

            .slider-overlay {
                pointer-events: none;
                width: 100%;
                height: 100%;
                z-index: 1;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.582);
                position: absolute;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .swiper__slide-cta {
                z-index: 5;
                color: #333;
                font-weight: 500;
                text-decoration: none;
                cursor: pointer;
                position: absolute !important;
                margin-left: auto;
                margin-right: auto;
                left: 20%;
                right: 20%;
                bottom: 20px;
                text-align: center;
                padding: 8px;
                border-radius: 5px;
                background-color: #ffbb33;
            }

            .post__subtitle {
                color: #fff;
                font-size: 24px;
            }

            .slider__category {
                position: absolute;
                top: 20px;
                right: 0;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                padding: 8px 10px;
                background-color: #150848;
                color: #fff;
            }

            .modal__detail-slider {
                max-width: 1920px;
            }

            .modal__detail-slider img {
                width: 100%;
                object-fit: cover;
                max-width: 1920px;
                height: 100%;
            }

            .similair__advertisment-wrapper {
                display: grid;
                grid-template-columns: 32% 32% 32%;
                grid-gap: 15px;
            }

            .similair__advertisment-wrapper a {
                text-decoration: none;
                color: #333;
            }


            /* Advertisement detail contact */

            .detail__contact-year {
                display: flex;
                width: 100%;
                flex-direction: row;
                justify-content: space-between;
            }

            .detail__contact-year p {
                margin-right: 20px;
            }

            .ad__detailinfo-wrapper {
                display: flex;
                flex-direction: column;
            }

            .detail__contact-year p {
                font-size: 16px;
            }

            .header-strong {
                font-weight: bold;
                font-size: 18px;
            }

            .detail__contact-btn {
                margin: 20px 0;
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
            }

            .sendmessage__modal-overlay {
                background-color: rgba(0, 0, 0, 0.75);
                z-index: 51;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .modal__overlay {
                background-color: rgba(0, 0, 0, 0.75);
                z-index: 51;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .sendmessage__modal-wrapper {
                padding: 20px;
                margin: 20px;
                border-radius: 5px;
                height: 400px;
                width: 600px;
                background-color: #fff;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }

            .detail__contact-btn .button__primary-yellow,
            .detail__contact-btn .button__secondary-blue {
                padding: 10px 20px;
                text-decoration: none;

            }

            .conversation__create-wrapper textarea {
                width: 95%;
                margin: 20px 10px 10px 0px;
                height: 150px;
                border: #333333 solid 1px;
                border-radius: 5px;
                padding: 15px;
            }

            /* .conversation__create-button {
                border-radius: 5px;
                padding: 10px 20px;
                background-color: #dba12d;
                color: #333;
                cursor: pointer;
                border: none;
            }

            .conversation__create-button:hover {
                background-color: #fdd991;
                color: rgb(255, 255, 255);
                transition: all .2s ease-in-out;
            } */

            .conversation__create-wrapper textarea:focus {
                box-shadow: 0 0 5px #FFBB33;
                outline: none !important;
                border: 1px solid #FFBB33 !important;
                border-radius: 5px;
            }

            .detail__contact-seller ul {
                height: 100%;
                display: grid;
                column-gap: 40px;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 1fr 1fr;
            }

            .detail__contact-seller {
                height: 100%;
                margin-top: -50px;
            }

            .address_icon {
                max-width: 70%;
            }

            .addetail__title-wrapper h3 {
                font-size: 22px !important;
                margin-block-start: 0em;
                margin-block-end: 0em;
            }

            .detail__contact-seller ul li {
                position: relative;
                list-style: none;
                margin-bottom: 20px;
                height: 25px;
                margin-right: 40px;
            }

            .detail__contact-seller ul .address_icon::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/yellow/i-16.svg);
            }

            .detail__contact-seller ul .company::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/company-icon.svg);
            }

            .detail__contact-seller ul .particulier::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/particulier-icon.svg);
            }

            .addetail__title-wrapper {
                padding: 10px 0;
                background-color: #e4e4e400;
                border-bottom: 1px solid rgb(179, 179, 179);
                color: #333;
                width: 100%;
                display: flex;
                justify-content: space-between;
            }

            .detail__contact-seller ul .email_icon::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/yellow/i-15.svg);
            }

            .email_icon a,
            .phone_icon a,
            .backtosearchbox__link {
                text-decoration: none;
                color: #333;
            }

            .detail__contact-seller ul .phone_icon::before {
                position: absolute;
                left: -40px;
                top: -5px;
                width: 30px;
                content: url(../../icons/yellow/tel-icon-motorpark.svg);
            }


            /* End contact details */


            /* Icons classes */

            .brand_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-4.svg);
            }

            .model_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-5.svg);
            }

            .category_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-8.svg);
            }

            .power_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-2.svg);
            }

            .licence_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-14.svg);
            }

            .enginesize_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-6.svg);
            }

            .horsepower_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-2.svg);
            }

            .fuel_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-3.svg);
            }

            .abs_icon::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/yellow/i-7.svg);
            }

            .condition::before {
                position: absolute;
                left: -75px;
                top: -10px;
                width: 60px;
                content: url(../../icons/occassion-icon.svg);
            }


            /* Features section starts */

            .advertisement__detail-features .details__features-items ul {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .advertisement__detail-features .details__features-items ul li {
                list-style-type: none;
                position: relative;
                width: 150px;
                margin: 30px 10px 30px 30px;
            }

            .details__features-items ul li span {
                font-weight: bold;
                font-size: 14px;
            }

            .mobile_only {
                display: none;
            }


            /* End Features section */


            /* Advertisment bidding */

            .advertisement__detail-bidding .detail__bidding-head {
                display: flex;
            }

            .advertisement__detail-bidding .detail__bidding-head p {
                display: inline-flex;
                justify-content: center;
                align-items: center;
            }

            .advertisement__detail-bidding .form__group {
                display: flex;
                flex-direction: row;
            }

            .detail__bidding-wrapper {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(1fr));
                grid-gap: 10px;
            }

            .detail__bidding-wrapper .addform__field {
                width: 90%;
            }

            .detail__bids-wrapper {
                padding: 10px;
            }

            .advertisement__detail-bidding .bidding_from {
                margin-left: 20px;
            }

            .advertisement__detail-bidding .detail__bidding-input button {
                width: 100%;
            }

            .detail__bidding-input .form__group {
                display: flex;
                flex-direction: row;
            }

            .detail__bidding-input .form__group input,
            .detail__bidding-input .button {
                height: 41px;
                flex: 1;
            }

            .detail__bidding-input .form__group input {
                margin-right: 20px;
            }

            .detail__bidding-input .button button {
                height: 41px;
            }


            /* End advertisement bidding */

            .sticky-headerbar {
                position: -webkit-sticky;
                /* Safari */
                position: sticky;
                z-index: 11;
                top: 0;
            }


            /* Blog posts */

            .blog__wrapper {
                display: grid;
                grid-template-columns: 3fr 1fr;
                grid-gap: 20px;
                margin: 50px 0;
            }

            .blog__post-column {
                border-radius: 6px;
                padding: 20px;
            }

            .blog__wrapper .blog__posts-wrapper .blog__post-column:not(:first-child) {
                max-height: 250px;
            }

            .blog__post-intro {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                /* number of lines to show */
                -webkit-box-orient: vertical;
                padding-right: 40px;
                margin-bottom: 20px;
                line-height: 1.4em;
            }

            .blog__wrapper .blog__post-highlight {
                max-height: 500px;
            }

            .blog__wrapper .blog__posts-wrapper .blog__post-highlight,
            .blog__wrapper .blog__posts-wrapper .blog__post-column {
                padding: 0;
                position: relative;
                overflow: hidden;
            }

            .blog__post-highlight .blog__post-img,
            .blog__post-column .blog__post-img {
                height: 100%;
                width: 100%;
            }

            .blog__post-highlight .blog__post-img img,
            .blog__post-column .blog__post-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                filter: brightness(0.4);
                border-radius: 6px;
                transition: .7s ease-in-out;
            }

            .blog__wrapper .blog__posts-wrapper .blog__post-highlight .blog__post-content,
            .blog__wrapper .blog__posts-wrapper .blog__post-column .blog__post-content {
                position: absolute;
                bottom: 30px;
                left: 30px;
                color: #fff;
            }

            .blog__post-content h2 {
                font-size: 22px !important;
            }

            .blog__post-other h2 {
                white-space: nowrap;
                width: 250px;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .blog__post-content a {
                color: #fff;
                text-decoration: none;
                font-style: italic;
                position: relative;
            }

            .blog__post-column:hover img {
                transform: scale(1.2);
            }

            .blog__post-content a::before {
                content: "";
                width: 0;
                height: 2px;
                color: #fff;
                position: absolute;
                bottom: 0;
                left: 0;
            }

            .blog__post-content a:hover::before {
                content: "";
                width: 50px;
            }

            .blog__posts-wrapper {
                display: grid;
                grid-template-columns: repeat(3, minmax(300px, 1fr));
                grid-gap: 20px;
            }

            .blog__post-highlight {
                grid-row: 1/3;
                grid-column: 1/3;
            }

            .sidebar__content-wrapper {
                background-color: #FFBB33;
                border-radius: 6px;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }

            .dark_bg {
                background-color: #333132;
            }

            .dark_bg h2 {
                color: #fff;
            }

            .latest__news-wrapper {
                display: grid;
                grid-template-columns: 2fr 1fr;
                grid-gap: 20px;
                padding-bottom: 50px;
            }

            .latest__news-content {
                grid-row-gap: 20px;
                display: grid;
            }

            .latest__news-content .latest__news-column {
                display: grid;
                grid-template-columns: 1fr 3fr;
                grid-gap: 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                border-radius: 6px;
                overflow: hidden;
            }

            .latest__news-img {
                height: 100%;
                width: 100%;
            }

            .latest__news-img img {
                object-fit: cover;
                height: 100%;
                width: 100%;
            }

            .latest__news-body {
                background-color: #f9f9f9;
                padding: 20px;
            }

            .latestnews__title-wrapper {
                margin: 20px 0;
            }

            .post__gallery-wrapper {
                display: flex;
            }

            .post__gallery {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-gap: 10px;
                width: 100%;
                margin-left: 10px;
                margin-top: 10px;
            }

            .post__gallery img {
                width: calc(120px - 10px);
                height: calc(120px - 10px);
                object-fit: cover;
                border-radius: 6px;
            }


            /* End blog posts */


            /* Advanced search */

            .advancedsearch__searchbox-wrapper {
                max-width: 100%;
                margin: 100px 5px;

            }

            .advancedsearch__searchbox-wrapper .advanced__field,
            .advancedsearch__searchbox-wrapper .searchbox__selectfield {
                height: 40px;
                background: white;
            }

            @media screen and (-webkit-min-device-pixel-ratio:0) {

                select {
                    background-image: none;
                    /* remove the value that chrome dose not use */
                    background-color: #fff;
                    /* set the value it does */
                }
            }

            .advancedsearch__plaatsnaam-box {

                margin-top: 10px;
            }

            .advanced__search-rangeinput {
                border: none;
                background: none;
            }

            .advancedsearch__inputfield-wrapper label {
                opacity: 0;
            }

            .grid__three-columns {
                grid-template-columns: repeat(3, minmax(300px, 1fr)) !important;
            }

            .opacity0effect {
                opacity: 1 !important;
            }

            .advancedsearch__searchbox-wrapper .filter__afstand-wrapper h5 {
                margin-top: 8px;
                margin-bottom: 0px;
            }

            .advancedsearch__searchbox-wrapper .advanced__search-section {
                grid-template-columns: repeat(2, minmax(300px, 1fr));
            }

            .advancedsearch__engingsize-wrapper select {
                width: 50%;
            }

            .advancedsearch__engingsize-wrapper {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
            }

            .advancedsearch__searchbox-wrapper .advanced__section-fields {
                grid-template-columns: 1fr 1fr;
            }

            .advancedsearch__searchbox-wrapper .searchbox__grid1,
            .advancedsearch__searchbox-wrapper .searchbox__gridlayout {
                row-gap: 30px !important;
            }

            .filter__afstand-wrapper {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .advanced__search-wrapper {
                background-color: #f4f4f4;
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                padding: 20px;
                margin: 50px 0;
            }

            .filter__item-switch {
                font-size: 14px;
                font-weight: bold;
                cursor: pointer;
            }

            .filter__afstand-inputkm {
                background-color: #f4f4f4 !important;
                border: none;
                text-align: right;
                font-size: 18px;
                font-weight: bold;
            }

            .filter__afstand-inputkm:focus {
                border: none;
                outline: none;
            }

            .distance__input-wrapper {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .distance__input-wrapper p {
                text-align: right;
                margin-left: 5px;
                font-weight: bold;
                margin-block-end: 0.5em;
                margin-block-start: 0.5em;
            }

            .advanced__search-grid {
                display: grid;
                grid-template-columns: minmax(300px, 1fr);
                grid-template-rows: auto minmax(min-content, max-content);
                grid-gap: 20px;
            }

            .advanced__search-title {
                border-bottom: 1px solid #ccc;
            }

            .advanced__search-title h2 {
                font-weight: 500;
                font-size: 20px !important;
            }

            .advanced__search-grid input {
                border-radius: 6px;
                padding: 10px;
            }

            .advanced__search-section {
                display: grid;
                grid-template-columns: repeat(3, minmax(300px, 1fr));
                grid-gap: 20px;
            }

            .advanced__section-fields {
                grid-column: 1/3;
                display: grid;
                grid-gap: 20px;
                grid-template-columns: 1fr 1fr 1fr;
            }

            .advanced__search-merge {
                display: flex;
            }

            .ui-slider .ui-slider-handle:focus {
                border-radius: 50%;
                outline: 0;
            }

            .ui-slider .ui-slider-handle {
                border-radius: 50%;
                background-color: #fb3 !important;
            }

            .ui-widget-header {
                background: #fdd991 !important;
            }

            .advanced__search-slider input {
                background: none;
            }

            .advances__search-power {
                display: grid;
                grid-template-columns: 1fr 2fr 2fr;
                grid-gap: 10px;
            }

            .advanced__field {
                padding: 10px 10px !important;
                border: 1px solid #333132;
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
                border-radius: 5px !important;
            }

            .advanced__field:focus {
                box-shadow: 0 0 5px #FFBB33;
                outline: none !important;
                border: 1px solid #FFBB33 !important;
                border-radius: 5px;
            }

            .advanced__field {
                background: url(../../icons/chevron-down-solid.svg) center right no-repeat;
                background-position-x: 98%;
                background-size: 9px;
                background-color: #fff;
            }

            .advanced__field::placeholder,
            .searchbox__input::placeholder {
                color: #000;
            }

            .advanced__search-footer {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
            }

            .advancedsearch__brandresults-wrapper {
                position: absolute;
                background-color: #fff;
                top: 60px;
                left: 0;
                width: 100%;
                z-index: 10;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }

            .advancedsearch__inputfield-wrapper label,
            .advancedsearch__label {
                font-size: 12px;
                background-color: #150848;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                color: #fff;
                padding: 5px 10px;
            }

            .advancedsearch__modelresults-wrapper {
                position: absolute;
                background-color: #fff;
                top: 60px;
                left: 0;
                width: 100%;
                z-index: 10;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            }

            .advancedsearch__brandresults-item {
                cursor: pointer;
            }

            .advancedsearch__brandresults-wrapper a {
                padding: 10px 20px;
                color: #333;
                display: block;
                border-bottom: solid 1px rgb(236, 236, 236);
                text-decoration: none;
            }

            .advancedsearch__modelresults-wrapper a {
                padding: 10px 20px;
                color: #333;
                display: block;
                border-bottom: solid 1px rgb(236, 236, 236);
                text-decoration: none;
            }

            .advancedsearch__brandresults-wrapper a:hover {
                color: #FFBB33;
                background-color: rgb(250, 250, 250);
            }

            .advancedsearch__modelresults-wrapper a:hover {
                color: #FFBB33;
                background-color: rgb(250, 250, 250);
            }

            .advancedsearch__inputfield-wrapper {
                position: relative;
            }

            .advancedsearch__inputfield-wrapper input,
            .advancedsearch__inputfield-wrapper select {
                width: 100%;
            }

            .advancedsearch__modelresults-wrapper {
                width: 100%;
            }

            .advanced__search-overlay {
                display: none;
            }

            .hidedropdown {
                display: none;
            }

            .hidedropdownmodel {
                display: none;
            }


            /* Post stylings */

            .post__wrapper {
                display: grid;
                grid-template-columns: 4fr 450px;
                grid-gap: 40px;
                margin: 50px 0;
            }

            .post__content-section {
                display: grid;
                grid-template-columns: 1fr;
                grid-gap: 10px;
            }

            .post__content-section .post__social-icons,
            .details__share-icons ul {
                padding: 0;
                list-style-type: none;
                display: flex;
            }

            .post__content-section .post__social-icons li,
            .details__share-icons ul li {
                padding: 10px 10px 8px 10px;
                border: 1px solid #333;
                margin-right: 10px;
                cursor: pointer;
                transition: all .3s ease-in-out;
            }

            .post__content-section .post__social-icons li:hover {
                background-color: #ffbb33;
            }

            .post__content-section .post__social-icons li img,
            .details__share-icons ul li img {
                width: 30px;
                height: 30px;
                object-fit: contain;
            }

            .post__content-paragraph {
                line-height: 1.5em;
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
            }

            .postlisting__table-wrapper {
                border-spacing: 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                margin: 50px 0;
                border-radius: 5px;
            }

            .postlisting__table-wrapper tr a {
                text-decoration: none;
                color: #333;
            }

            .postlisting__table-wrapper tr:nth-child(2n+2) {
                background: rgb(226, 226, 226);
                color: #333;
            }

            .postlisting__table-wrapper thead {
                height: 40px;
                padding: 10px;
                background-color: #ffbb33 !important;
                color: #333;
            }

            .postlisting__table-wrapper th,
            .postlisting__table-wrapper td {
                padding: 10px;
                text-align: left;
            }

            .postlisting__table-wrapper thead tr {
                height: 60px;
            }

            .postlisting__table-wrapper tbody tr {
                height: 60px;
            }

            .post__content-intro,
            .post__content-paragraph,
            .post__content-gallery {
                padding: 40px 40px 0 0;
            }

            .post__content-header {
                height: 450px;
                width: 100%;
                display: flex;
                align-items: center;
                overflow: hidden;
                position: relative;
                background-color: rgba(0, 0, 0, 0.582);
                z-index: 1;
            }

            .post__content-header h2,
            .post__content-header p {
                margin: 5px 20px;
            }

            .post__content-header p {
                margin-bottom: 40px;
            }

            .image__background {
                pointer-events: none;
                width: 100%;
                height: 100%;
                z-index: -1;
                object-fit: cover;
            }

            .image__background-overlay {
                display: flex;
                justify-content: flex-end;
                align-items: flex-start;
                flex-direction: column;
                pointer-events: none;
                width: 100%;
                height: 100%;
                z-index: 1;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.582);
                position: absolute;
            }

            .post__content-background h2 {
                color: #fff;
                font-size: 44px;
            }

            .post__content-intro {
                font-size: 16px;
                color: #333333;
                letter-spacing: 1.5px;
                line-height: 1.8em;
            }

            .post__content-gallery {
                display: grid;
                grid-gap: 10px;
                width: 100%;
                height: auto;
            }

            .post__content-gallery img {
                object-fit: cover;
                width: 100%;
            }


            /* Sidebar section of post */

            .post__sidebar-wrapper {
                height: fit-content;
            }

            .post__sidebar-lastpost h3,
            .post__sidebar-last-ads h3 {
                padding: 20px;
                background-color: #ffbb33;
                margin-block-start: 0em;
                margin-block-end: 0em;
            }

            .post__sidebar-commercial {
                background-color: #FFBB33;
                padding: 20px;
            }

            .post__sidebar-commercial button {
                background-color: #333;
                padding: 10px 15px;
                color: #fff;
                border-radius: 6px;
            }

            .post__sidebar-last-ads ul,
            .post__sidebar-lastpost ul {
                padding: 0;
                list-style-type: none;
                margin: 0;
            }

            .post__sidebar-last-ads ul li,
            .post__sidebar-lastpost ul li {
                margin: 0;
                padding: 10px 20px;
                margin-top: 1px;
                margin-bottom: 1px;
                transition: .3s all;
                background-color: #f4f4f4;
            }

            .post__sidebar-last-ads ul li {
                display: grid;
                grid-template-columns: max-content 2fr;
                grid-gap: 10px;
                height: 120px;
                border-bottom: 1px solid #f9f9f9;
            }

            .post__sidebar-last-ads ul li img {
                width: 120px;
                height: 100px;
                min-width: 80px;
                max-height: 80px;
                object-fit: cover;
                object-position: left;
            }

            .post__sidebar-last-ads ul li a,
            .post__sidebar-lastpost ul li a {
                text-decoration: none;
                color: #444;
                align-self: center;
            }

            .post__sidebar-lastpost ul li a h4 {
                font-size: 14px;
            }

            .post__sidebar-last-ads ul li:hover {
                background-color: #d8d8d8
            }

            .post__sidebar-last-ads ul li:hover a {
                color: #333;
            }

            .post__sidebar-last-ads ul li h4,
            .post__sidebar-lastpost h4 {
                padding: 0;
                margin: 0;
            }

            .post__sidebar-last-ads,
            .post__sidebar-commercial {
                margin-top: 20px;
            }


            /* Breadcrumbs */

            .breadcrumb {
                display: flex;
                list-style: none;
                padding: 0;
            }

            .breadcrumb li {
                margin: 0 10px;
            }

            .breadcrumb li a {
                color: #FFBB33;
                text-decoration: none;
            }


            /* Post create page */

            .post__form-wrapper {
                margin: 50px 20px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 20px;
            }

            .post__form-wrapper form {
                display: grid;
                grid-template-columns: 1fr;
            }

            .input__wrapper-dropdown,
            .input__wrapper-buttons {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                grid-gap: 20px;
            }

            .post__form-wrapper form input {
                height: 41px;
                padding: 5px;
            }


            /* .post__form-wrapper form input[type=file] {
                display: none;
            } */

            .post__form-wrapper .input__post-upload {
                border: 1px dotted #ccc;
                display: inline-flex;
                justify-self: left;
                align-items: center;
                padding: 6px 12px;
                height: 75px;
                cursor: pointer;
                background-color: #f9f9f9;
                width: 200px;
                height: 200px;
            }

            .post__form-wrapper .input__post-upload img {
                height: 40px;
                margin-right: 10px;
            }

            .post__form-wrapper form input,
            .post__form-wrapper form textarea {
                border-radius: 6px;
                border: 1px solid #444;
                font-family: 'Montserrat', sans-serif;
                font-size: 16px;
                width: 100%;
                padding: 10px;
            }

            .post__form-wrapper form input:focus,
            .post__form-wrapper form textarea:focus {
                box-shadow: 0 0 5px #FFBB33;
                outline: none !important;
                border: 1px solid #FFBB33 !important;
            }

            .input__wrapper-buttons {
                margin-top: 40px;
            }

            .uploaded__post-img img {
                width: 240px;
                height: 240px;
                object-fit: cover;
                margin: 10px;
                border-radius: 5px;
            }

            .post__featuredimage-wrapper {
                display: flex;
            }


            /* Button effect */

            .button_yellow-effect {
                position: relative;
                appearance: none;
                background: #FFBB33;
                cursor: pointer;
                outline: none;
                overflow: hidden;
                border-radius: 100px;
            }

            .button_yellow-effect span {
                font-weight: 600;
                color: #333;
            }

            .button_yellow-effect::before {
                --size: 0;
                content: '';
                position: absolute;
                left: var(--x);
                top: var(--y);
                width: var(--size);
                height: var(--size);
                background: radial-gradient(circle closest-side, #e4a62c, transparent);
                transform: translate(-50%, -50%);
                transition: width .2s ease, height .2s ease;
            }

            .button_yellow-effect:hover::before {
                --size: 400px;
            }

            .button_yellow-effect span {
                position: relative;
                pointer-events: none;
            }


            /* Particulieren page */

            .static_wrapper {
                display: grid;
                grid-template-columns: 1fr 5fr;
                grid-gap: 50px;
                margin-top: 50px;
            }

            .static__article {
                margin: 50px 0;
                /* display: grid;
                grid-template-columns: 3fr 1fr; */
                grid-gap: 50px;
            }

            .static__article p {
                line-height: 1.7em;
                font-size: 15px;
            }

            .static__content {
                padding: 20px 0px;
                font-size: 16px;
            }

            .cta__wrapper-text {
                text-align: center;
                width: 500px;
                height: auto;
                background-color: #ffbb33;
                color: #333;
                padding: 50px 20px;
            }

            .cta_button-dark a {
                text-decoration: none;
                padding: 8px 15px 8px 15px;
                color: #fff;
                background-color: #150848;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
            }

            .cta_button-yellow,
            .cta_button-dark {
                margin-top: 40px;
            }

            .cta_button-yellow a {
                text-decoration: none;
                padding: 10px 15px 10px 15px;
                color: #333;
                background-color: #ffbb33;
                border-radius: 5px;
                font-size: 16px;
                box-sizing: border-box;
                font-weight: 600;
            }

            .benefits__background-white {
                background-color: #f9f9f9;
                padding: 10px 20px;
                align-self: center;
            }

            .benefits__background-dark {
                background-color: #333;
                padding: 50px 20px;
                text-align: center;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin: 50px 0;
            }

            .benefits__background-dark h2 {
                color: #fff;
                margin: 0;
                padding-bottom: 20px;
            }

            .benefits__background-yellow {
                background-color: #ffbb33;
                padding: 50px 20px;
                text-align: center;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                margin: 50px 0;
            }

            .benefits__grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 50px;
            }

            .benefits__content {
                align-self: center;
            }

            .static__wrapper-bg {
                background: url('../../img/particulieren_dark_bg.jpg');
                background-size: cover;
                background-position: center center;
                padding: 50px 0;
            }

            .static__section-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 50px;
            }

            .static__content-wrapper {
                background-color: #fff;
                height: fit-content;
            }

            .static__img-wrapper img {
                height: 750px;
                object-fit: cover;
                width: 100%;
                z-index: 1;
                margin-top: 50px;
            }

            .static__cta {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-gap: 50px;
                margin-bottom: 50px;
            }

            .benefits__list li {
                position: relative;
                margin: 20px 0;
                font-size: 14px;
            }

            .benefits__list {
                list-style-type: none;
            }

            .benefits__list li::before {
                content: '';
                background-image: url(../../icons/check.svg);
                background-size: 20px 20px;
                display: inline-block;
                width: 25px;
                height: 25px;
                position: absolute;
                left: -35px;
                top: 2px;
                background-repeat: no-repeat;
            }

            @media screen and (min-width: 1401px) and (max-width: 1500px) {

                .advertisement__detail-slider,
                .advertisement__detail-contact,
                .advertisement__detail-bidding,
                .advertisement__detail-features,
                .advertisement__detail-share,
                .advertisement__detail-description,
                .advertisement__detail-suggestions,
                .advertisement__detail-similar,
                .advertisement__detail-map {
                    max-width: 690px;
                }
            }


            /* Media queries, for other devices */

            @media screen and (max-width: 1400px) {
                .advertisement__detail-slider .swiper-container {
                    width: 100%;
                    height: max-content;
                    margin: 0;
                    padding: 0px 0px !important;
                    border-radius: 0px 0 0 0;
                }


                .advertisement__details-2columnlayout {
                    grid-template-columns: 1fr;
                }

                .overmotorpark__text-wrapper p {
                    font-size: 16px !important
                }

                .search__results .search__result {

                    min-width: 486px;
                }
            }


            /* Start share icons */

            @media screen and (max-width: 1079px) {

                .card {
                    display: flex;
                    padding: 10px;
                    justify-content: center;
                }
                .card .card-body {
                    width: 100%;
                    padding: 20px;
                    background-color: #f4f4f4;
                    border-radius: 5px;
                    box-shadow: rgb(173 173 173) 0px 3px 9px;
                }

            .detail__bidding-input .addform__field {margin-bottom:10px;}



                .static__content {
                    padding: 20px 20px;
                    font-size: 16px;
                }

                .latestnews__title-wrapper {
                    margin-left: 20px;
                }

                .latest__news-content .latest__news-column {
                    grid-template-columns: 1fr;
                }

                .latest__news-wrapper .sidebar__content-wrapper {
                    margin: 0px;
                }

                .latest__news-wrapper {
                    margin: 20px;
                }

                .sidebar__content-wrapper {
                    margin: 20px;
                }

                .sidebar__latestitem-wrapper span:first-child {
                    font-weight: bold;
                    white-space: normal;
                    overflow: hidden;
                    display: block;
                    text-overflow: ellipsis;
                }

                .voordeel-item {
                    min-height: min-content;
                    margin-bottom: 20px;
                }


                .static__cta,
                .benefits__grid,
                .static__section-wrapper {

                    grid-template-columns: 1fr;

                }

                .cta__wrapper-text {

                    justify-self: center;
                }

                .cta__wrapper-text {
                    width: calc(100vw - 40px);
                }

                .createad__information-container {
                    display: none !important;
                }

                .addform__cta-wrapper {
                    margin-top: 25px;
                }

                .advancedsearch__searchbox-wrapper .advanced__section-fields {
                    grid-template-columns: 1fr !important;
                    ;
                }

                .advancedsearch__searchbox-wrapper .advanced__search-section {
                    grid-template-columns: 1fr !important;
                }

                .search__result--columns .search__result-col-2 ul {
                    padding-left: 0px !important;
                }

                .search__result-category {
                    display: none;
                }

                .search__result-content ul {
                    list-style: none;
                    list-style-type: none;
                }

                ::marker {
                    color: #f4f4f4;
                }

                .search__result--columns .search__result-col-2 .search__result-content {
                    padding-left: 5px;
                }

                .advertiser__location {
                    display: flex;
                    align-items: center;
                }

                .searchresults__image img {
                    padding: 10px;
                    background-color: #f4f4f4;
                }

                .searchbox__selectfield .selectbox__merged-left {
                    width: 50%;
                }

                .searchbox__selectfield .selectbox__merged-right {
                    width: 50%;
                }

                .advanced__section-fields {
                    grid-template-columns: 1fr 1fr;
                }

                .overmotorpark__text-wrapper p {
                    font-size: 14px;
                }

                .searchbox__wrapper {
                    padding: 20px;
                }

                .image__background-overlay h2 {
                    font-size: 32px;
                }

                .latest__news-wrapper,
                .blog__wrapper {
                    grid-template-columns: 1fr;
                }

                .blog__post-highlight {
                    grid-row: none;
                    grid-column: none;
                }

                .post__content-paragraph h1 {
                    font-size: 20px;
                }

                .post__social-icons {
                    margin-left: 20px;
                }

                .advertisement__detail-share .post__social-icons {
                    margin-left: 0px;
                }

                .blog__posts-wrapper {
                    display: flex;
                    flex-wrap: wrap;
                    padding: 20px;
                }

                .voordeel__item-icon img {
                    width: 50px;
                }

                .inlogbox__wrapper {
                    grid-template-columns: 1fr;
                }

                .inlogbox__left,
                .inlogbox__right {
                    border-radius: 0px;
                    padding: 10px 20px;
                }

                .inlogbox__left p,
                .inlogbox__right p {
                    margin-block-start: 0.3em;
                    margin-block-end: 0.3em;
                }

                .header .nav__mobile-selector .toggle {
                    position: absolute;
                    width: 2rem;
                    height: 1.4rem;
                    top: 2rem;
                    right: 30px;
                    z-index: 2;
                    cursor: pointer;
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                    z-index: 10000;
                }

                .header .nav__mobile-selector .toggle-btn {
                    position: absolute;
                    top: 0.5rem;
                    right: 0;
                    width: 1.6rem;
                    height: 2px;
                    background: #212121;
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                .header .nav__mobile-selector .toggle-btn::before {
                    content: "";
                    position: absolute;
                    top: -0.5rem;
                    width: 2rem;
                    height: 2px;
                    background: #212121;
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                .header .nav__mobile-selector .toggle-btn::after {
                    content: "";
                    position: absolute;
                    top: 0.5rem;
                    width: 1.2rem;
                    height: 2px;
                    background: #212121;
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                .header .nav__mobile-selector .toggle-btn.open {
                    -webkit-transform: rotate(720deg);
                    transform: rotate(720deg);
                    background: transparent;
                }

                .header .nav__mobile-selector .toggle-btn.open::before {
                    -webkit-transform: rotate(45deg) translate(5px, 8px);
                    transform: rotate(45deg) translate(5px, 8px);
                }

                .header .nav__mobile-selector .toggle-btn.open::after {
                    width: 2rem;
                    -webkit-transform: rotate(-45deg) translate(3px, -6px);
                    transform: rotate(-45deg) translate(3px, -6px);
                }

                .header .nav__mobile-selector .menu {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100vw;
                    opacity: 1;
                    visibility: hidden;
                    z-index: 55;
                }

                .header .nav__mobile-selector .menu.open {
                    visibility: visible;
                }

                .header .nav__mobile-selector .menu-list {
                    display: -webkit-box;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    flex-flow: column wrap;
                    -webkit-box-pack: center;
                    justify-content: center;
                    -webkit-box-align: center;
                    align-items: center;
                    height: 100vh;
                    overflow: hidden;
                    list-style: none;
                    list-style-type: none;
                    background: #ffffff;
                    -webkit-transform: translateX(-100%);
                    transform: translateX(-100%);
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                .header .nav__mobile-selector .menu-list.open {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }

                .header .nav__mobile-selector .menu-item {
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                    margin: 20px 0;
                }

                .header .nav__mobile-selector .menu-item.open {
                    -webkit-transform: translateY(0);
                    transform: translateY(0);
                }

                .filter__mobile-button {
                    z-index: 49 !important;
                }

                .header .nav__mobile-selector .menu-link {
                    display: inline-block;
                    padding: 1rem 0;
                    font-size: 1.5rem;
                    font-weight: 400;
                    line-height: inherit;
                    color: #212121;
                    text-transform: uppercase;
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                .header .nav__mobile-selectorr .menu-link:hover {
                    color: #ff652f;
                }

                .advertising__modalslider-wrapper .swiper-slide {
                    text-align: center;
                    font-size: 16px;
                    background: rgba(255, 255, 255, 0) !important;
                    border-radius: 5px;
                    position: relative;
                    height: auto !important;
                }

                .advertising__modalslider-wrapper {
                    vertical-align: middle;
                    position: relative;
                    z-index: 2;
                    width: auto !important;
                    height: auto !important;
                    box-sizing: border-box;
                    background: #fff0 !important;
                    max-width: 90% !important;
                    padding: unset !important;
                    -webkit-border-radius: 0px !important;
                    -moz-border-radius: 0px !important;
                    -o-border-radius: 0px !important;
                    -ms-border-radius: 0px !important;
                    border-radius: 0px !important;
                    -webkit-box-shadow: unset !important;
                    -moz-box-shadow: unset !important;
                    -o-box-shadow: unset !important;
                    -ms-box-shadow: unset !important;
                    box-shadow: unset !important;
                    text-align: left;
                }

                .advertising__modalslider-wrapper img {
                    object-fit: contain !important;
                    height: auto !important;
                    min-height: auto !important;
                }

                .blocker:before {
                    height: 0% !important;
                }

                .nav_wrapper {
                    display: none;
                }

                .voordelen__wrapper {
                    grid-template-columns: 1fr 1fr;
                }

                .overmotorpark__container {
                    flex-direction: column;
                }

                .overmotorpark__image-wrapper img {
                    max-width: 500px;
                    margin-top: 40px;
                    margin-left: 0px;
                    z-index: 5;
                }

                .form__section-wrapper {
                    grid-template-columns: 1fr;
                }

                .formgrid__2col-wrapper {
                    grid-template-columns: 1fr;
                }

                .search__results {
                    grid-template-columns: 1fr;
                }

                .container {
                    max-width: 75rem;
                    width: 100%;
                    padding: 0 1rem;
                    margin: 0 auto;
                }

                .nav__listgroup {
                    margin: 0px !important;
                }

                .logo_wrapper a svg {
                    height: 50px;
                }

                .overview__results-header {
                    border-radius: 0;
                    margin-top: 0px;
                }

                .search__result-col-1 .swiper2 .swiper-slide {
                    min-height: 120px;
                    border-radius: 0px;
                }

                .overview_results {
                    display: block;
                    grid-template-columns: 1fr;
                    padding: 0px;
                }

                .search__results .search__result .search__result--columns {
                    grid-template-columns: 1fr;
                    height: auto;
                }

                .search__result-col-1 .swiper-container {
                    width: 100%;
                    max-width: 375px;
                    height: 300px;
                    border-radius: 0px;
                }

                .search__results .search__result-footer ul li a {
                    color: #150848;
                }

                .search__result-footer .button {
                    margin-bottom: 20px;
                }

                .search__results .search__result-footer .search__result-footer-links .advertiser__phonenumber:before {
                    /* content: url(../../img/icons/phone-alt-solid-blue.svg);

                */
                    display: none;
                }

                .search__results .search__result-footer .search__result-footer-btn a {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .search__results .search__result-footer .search__result-footer-btn {
                    width: 100%;
                }

                .advertiser__phonenumber {
                    width: 100%;
                }

                .search__results .search__result-footer .search__result-footer-links .advertiser__location:before {
                    content: url(../../icons/map-marker-alt-solidblue.svg);
                }

                .search__result-footer-links .advertiser__location a {
                    white-space: nowrap !important;
                    overflow: hidden !important;
                    display: inline-block !important;
                    text-overflow: ellipsis !important;
                    max-width: 150px;
                }

                .search__result-footer-links {
                    display: none;
                }

                .search__result--columns .search__result-col-2 .search__results-favorite {
                    text-align: left;
                }

                .search__results .search__result-footer {
                    background-color: #f4f4f4;
                    height: 45px;
                    border-radius: 0;
                    align-self: end;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .search__results {
                    grid-gap: 20px;
                }

                .search__results .search__result {
                    display: grid;
                    grid-template-columns: 1fr;
                    background-color: #fff;
                    border-radius: 5px;
                    margin: 0px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                    min-height: 100%;
                    max-height: 100%;
                    max-width: 100%;
                    min-width: 100%;
                }

                .search__result--columns .search__result-col-2 {
                    padding: 7px;
                    display: grid;
                    grid-template-columns: 1fr 30px;
                    background-color: #f4f4f4;
                    border-top-right-radius: 0px;
                }

                .addform__cta-wrapper {
                    margin-bottom: 20px;
                }

                .headertitle__yellow {
                    font-size: 16px;
                    padding: 10px;
                }

                .form__section-wrapper {
                    width: 100%;
                }

                .backgroundimage-header {
                    height: max-content;
                    background-image: url('/img/header-mobile.png');
                    background-repeat: no-repeat;
                    background-position: top;
                    background-size: cover;
                }

                .invalid-feedback {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    background-color: #fa1d1d !important;
                    padding: 20px;
                    color: #fff;
                }

                #bg-video {
                    height: 280px;
                }

                .header__title .valueProposition,
                .header__title .valueProporsition__undertitle {
                    padding-left: 20px;
                }

                .header__title .valueProposition {
                    padding-bottom: 70px;
                    max-width: 70vw;
                }

                .searchbox__wrapper {
                    border-radius: 0px;
                    margin: 0;
                }

                .detail__bidding-wrapper {
                    grid-template-columns: 1fr;
                    grid-gap: 10px;
                }

                .detail__bidding-input .form__group {
                    flex-direction: column;
                }

                .advertisement__detail-bidding .detail__bidding-input button {
                    padding: 10px 20px;
                    width: 100%;
                    margin-left: 0px;
                    margin-top: 0px;
                }

                .detail__bidding-wrapper .addform__field {
                    width: 100%;
                }

                .slide__item-image img {
                    max-height: 200px;
                    height: 100%;
                }

                .advertisement__detail-slider,
                .advertisement__detail-contact,
                .advertisement__detail-bidding,
                .advertisement__detail-features,
                .advertisement__detail-share,
                .advertisement__detail-description,
                .advertisement__detail-suggestions,
                .advertisement__detail-similar,
                .advertisement__detail-map {
                    background-color: #f4f4f4;
                    padding: 20px;
                    height: max-content;
                    margin-bottom: 20px;
                    max-width: 100vw !important;
                }

                .advertisement__detail-description {
                    min-height: max-content;
                }

                .advertisement__detail-features,
                .advertisement__detail-description {
                    display: none;
                }

                .mobile_only {
                    display: block !important;
                }

                .mobile__hidden {
                    display: none;
                }

                .favourites__modal-button svg {
                    width: 20px;
                }

                .footer__wrapper {
                    display: none;
                }

                .detail__contact-btn {
                    flex-direction: column;
                    justify-content: space-around;
                    align-items: flex-start;
                }

                .advertisement__detail-slider img,
                .advertisement__detail-slider {
                    max-width: 100% !important;
                    max-height: 100%;
                    height: 100%;
                    width: 100vw;
                }

                .advertisement__detail-slider .swiper-container {
                    width: 100vw;
                    height: 100%;
                    max-width: 100% !important;
                }

                .model_icon::before,
                .abs_icon::before,
                .fuel_icon::before,
                .enginesize_icon::before,
                .licence_icon::before,
                .power_icon::before,
                .category_icon::before,
                .brand_icon::before {
                    width: 30px;
                    left: -40px;
                    top: 1px;
                    display: inline-block !important;
                }

                .model_icon,
                .power_icon {
                    white-space: wrap;
                    text-overflow: ellipsis;
                    max-width: 130px;
                }

                .advertisement__detail-slider {
                    margin-bottom: 0px !important;
                }

                .advertisement__detail-description::-webkit-scrollbar {
                    width: 0px !important;
                }

                .details__features-items ul li {
                    font-size: 14px;
                }

                .details__features-items ul li span {
                    font-weight: bold;
                    font-size: 14px;
                }

                .ad__detailinfo-wrapper,
                .detail__contact-year {
                    flex-direction: column;
                }

                .detail__contact-year {
                    margin-bottom: 50px;
                }

                .addetail__title-wrapper h3,
                .detail__description-head h3 {
                    font-size: 18px !important;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    max-width: 250px;
                }

                .addetail__title-wrapper {
                    flex-direction: row;
                }

                .similair__advertisment-wrapper {
                    grid-template-columns: 1fr;
                }

                .similair__advertisment-item {
                    width: 90vw;
                }

                .similair__item-image {
                    width: 20px !important;
                }

                .similair_item-button {
                    position: absolute;
                    right: 10px;
                    bottom: 10px;
                }

                .similair__advertisment-wrapper a {
                    border-bottom: #fff 3px solid;
                }

                .similair__advertisment-wrapper a:hover {
                    border-bottom: #ffbb33 3px solid;
                }

                .detail__contact-seller ul {
                    height: 100%;
                    display: grid;
                    column-gap: 40px;
                    grid-template-columns: 1fr;
                }

                .advertisement__socialshare-wrapper a {
                    margin: 20px;
                }

                .advertisement__detail-map {
                    display: none;
                }

                #map2 {
                    height: 300px !important;
                }

                .favourites__modal-detailpage svg {
                    width: 20px;
                    margin: 10px;
                }

                .header__grid-container h2 {
                    font-size: 14px;
                }

                .advertisement__details-2columnlayout {
                    padding: 0;
                }

                .header__title h1 {
                    font-size: 24px !important;
                    margin-top: 40px;
                }

                .searchbox__wrapper {
                    width: 95vw;
                    justify-self: center;
                }

                .homesearchboxwrapper {
                    margin: 0;
                    z-index: inherit;
                    padding-bottom: 40px;
                }

                .dropdown-navigation {
                    visibility: visible;
                    cursor: pointer;
                    pointer-events: none;
                    opacity: 1;
                    transition: visibility 0s, opacity 0.2s;
                    transition-delay: .4s;
                    position: relative;
                    text-align: center;
                    top: 0px;
                    justify-content: center;
                    left: 0;
                    align-items: center;
                    flex-direction: column;
                    display: flex;
                    box-shadow: none;
                }

                .sub-menu li a:hover {
                    background-color: none !important;
                }

                .sub-menu li {
                    margin: 20px 0;
                }

                .sub-menu::after {
                    content: none;
                }

                .menu ul {
                    margin-block-start: 0em;
                    margin-block-end: 0em;
                    padding-inline-start: 0px;
                }

                .sub-menu {
                    margin: 0px !important;
                }

                .nav-wrapper .nav__listgroup li .menu-item a {
                    padding: 0px !important;
                    font-size: 20px !important;
                    margin: 0 !important;
                }

                .nav-wrapper .nav__listgroup li {
                    margin: 0 !important;
                }

                .nav-wrapper .nav__listgroup .menu-item a {
                    padding: 0 !important;
                }



                .nav-wrapper .nav__listgroup .menu-item, .nav-wrapper .nav__listgroup .sub-menu ul li,
                .nav-wrapper .nav__listgroup .li:first-child
                {
                    margin-bottom: 40px !important;
                }

                .nav-wrapper .nav__listgroup .sub-menu ul li {margin-top:40px!important;}


                .nav-wrapper .nav__listgroup .sub-menu .dropdown-navigation li {

                    margin-bottom:0!important;
                }

                .header-wrapper .nav-wrapper .nav__listgroup .logedin__first-menuitem {margin-bottom:0!important;}


                .nav-wrapper .nav__listgroup .menu-item .button__primary-yellow {

                    padding: 10px 20px !important;
                }

                .nav-wrapper .nav__listgroup .margintop__mobile-menu {margin-top:80px!important;}

                .searchbox__wrapper {
                    z-index: inherit;
                }

                .searchbox__grid1 {
                    grid-row-gap: 20px;
                }

                .searchbox__grid2 {
                    grid-row-gap: 20px;
                    grid-column-gap: 20px
                }

                .overmotorpark__image-wrapper {
                    display: none;
                }

                .overmotorpark__text-wrapper {
                    padding: 10px;
                }

                .overmotorpark__cta-wrapper a {
                    font-size: 14px;
                }

                .footer__section-margin {
                    display: none;
                }

                .fileupload__dropzoneitems-grid {
                    grid-template-columns: 1fr;
                }

                .search__results .search__result .search__result--columns img {
                    border-radius: 0px;
                }

                .filter__mobile-button {
                    display: block;
                    position: fixed;
                    bottom: 20px;
                    left: 0;
                    right: 0;
                    margin-left: auto;
                    margin-right: auto;
                    width: max-content;
                    background-color: #150848;
                    padding: 15px 20px;
                    color: #fff;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
                    border-radius: 5px;
                    cursor: pointer;
                }

                button.filter__mobile-button {
                    outline: none;
                }

                .filter__results {
                    background-color: #f4f0e9;
                    bottom: 0;
                    height: 100%;
                    -webkit-overflow-scrolling: touch;
                    overflow-y: scroll;
                    padding-bottom: 55px;
                    position: absolute;
                    transform: translateY(100%);
                    transition: transform .2s ease-out;
                    width: 100%;
                }

                .addetail__title-wrapper h3,
                .details__features-head h3 {
                    font-size: 18px;
                }

                .filter__container {
                    height: 100vh;
                    left: 0;
                    opacity: 0;
                    position: fixed;
                    top: 0;
                    transform: translateX(-100%);
                    transition: transform 0s .3s, opacity 0s .3s;
                    width: 100%;
                    z-index: 48;
                    border-radius: 0;
                    margin-top: 0px;
                }

                .header {
                    z-index: 47;
                }

                .filterhidden {
                    transform: translateY(0);
                }

                .filter__results-show {
                    opacity: 1;
                    transform: translateX(0);
                    transition: transform 0s 0s;
                }

                .filter__option-wrapper {
                    align-items: flex-start;
                    flex-direction: column;
                }

                .results__header-filterbutton {
                    margin: 4px 0px;
                    padding-right: 30px;
                    margin-right: 10px;
                }

                .overview__results-header,
                .sticky__resultpage-header {
                    z-index: inherit;
                }

                .advertisement__detail-features .details__features-items ul li {
                    width: 130px;
                }

                .sticky__resultpage-header {
                    top: 0px;
                    display: flex;
                    justify-content: center;
                    width: 100%;
                    padding: 0 0px 0px 0px;
                    z-index: inherit;
                    display: flex;
                    border-radius: 0px !important;
                    position: static;
                    top: 0;
                    left: 0;
                    right: 0;
                    margin-top: 0px !important;
                    /* transition: all .8s ease-in-out; */
                    max-width: 1530px;
                }

                .margin-top-111px {
                    margin-top: 10px !important;
                }

                .absolute {
                    position: relative;
                    top: 0px;
                    margin-top: 0 !important;
                    left: 0;
                    right: 0;
                    border-radius: 0 !important;
                    display: block;
                    justify-content: center;
                    padding: 0px;
                    align-self: start;
                    padding-right: 20px;
                    margin-top: 10px;
                }

                .advertisement__detail-features .details__features-items ul {
                    display: grid;
                    grid-template-columns: 1fr 50%;
                    padding-inline-start: 0px;
                    max-width: 7vw;
                }

                .search__results-favorite svg.svg-inline--fa.fa-pencil-alt.fa-w-16 {
                    width: 20px;
                }

                .details__features-items li:nth-child(8) {
                    display: none;
                }

                /* ul {
                    display: block;
                    list-style-type: disc;
                    margin-block-start: 1em;
                    margin-block-end: 1em;
                    margin-inline-start: 0px;
                    margin-inline-end: 0px;
                    padding-inline-start: 40px;
                } */
                .search__result--columns .search__result-col-2 .search__result-title {
                    font-size: 14px;
                }

                .advertisement__detail-features .details__features-items ul li {
                    list-style-type: none;
                    position: relative;
                    margin: 15px 0px 15px 40px;
                }

                .details__features-head h3,
                .detail__description-head h3 {
                    padding-bottom: 10px;
                    font-size: 18px;
                    border-bottom: 1px solid #ccc;
                }

                /* .advertisement__footer-contact {
                    margin-bottom: 20px;
                } */

                .advertisement__map-header h2 {
                    text-align: center;
                    font-size: 16px;
                }

                .advertisement__map-header {
                    background-color: #FFBB33;
                    padding: 20px;
                    margin: 20px;
                    min-height: 50px;
                    width: 100%;
                    max-width: 1510px;
                    margin-bottom: -50px;
                    z-index: 9;
                    justify-self: center;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    align-items: center;
                }
            }

            @media only screen and (min-width:496px) and (max-width:1078px) {

                .search__results {
                    grid-template-columns: 1fr 1fr;
                }


            }

            @media screen and (max-width: 680px) {
                .backgroundimage-header {
                    height: max-content;
                    background-repeat: no-repeat;
                    background-position: top;
                    background-size: 249%;
                }

                .searchbox__grid2 {
                    grid-row-gap: 20px;
                    grid-column-gap: 0px
                }

                .searchbox__grid1,
                .searchbox__grid2,
                .searchbox__grid3 {
                    grid-template-columns: 1fr;
                }

                .voordelen__wrapper {
                    grid-template-columns: 1fr;
                }

                .overmotorpark__image-wrapper img {
                    max-width: 300px;
                    margin-top: 40px;
                    margin-left: 0px;
                    z-index: 5;
                }

                .section__spacing {
                    padding: 10px;
                }

                .advanced__search-section {
                    grid-template-columns: 1fr;
                }

                .post__wrapper {
                    grid-template-columns: 1fr;
                    margin-top: 0;
                    margin-bottom: 50px;
                }

                .section__content-wrapper {
                    padding: 0px;
                }

                .post__content-intro,
                .post__content-paragraph,
                .post__content-gallery {
                    padding: 20px 20px 0 20px;
                }

                .post__content-gallery {
                    padding-bottom: 50px;
                }
            }

            label.error {
                display: inline;
                width: auto;
                padding: 5px 10px;
                background-color: #ff7d7d;
                margin-top: 10px;
                border-radius: 5px;
                color: #fff;
            }

            .dropzone {
                border: 2px dashed #afafaf !important;
                border-radius: 5px;
            }

            .dropzone-default-message img {
                width: 50px;
            }

            .dropzone-default-message p {
                margin: 0;
            }

            .dropzone-default-message button.btn-primary {
                padding: 4px 20px;
                font-size: 14px;
                background-color: #FFBB33;
                color: #fff;
                border: none;
                transition: .3s all;
                border-radius: 5px;
                font-family: 'Montserrat', sans-serif;
                ;
                text-decoration: none;
            }

            .new_header .kentekenfield input,
            .new_header .landcode {
                box-shadow: none;
                border-radius: 5px;
            }

            .new_header .kentekenfield input {
                font-family: 'open sans';
                font-size: 26px;
                font-weight: 700;
                width: 100%;
                height: 100%;
                padding: 15px;
                padding-left: 18%;
                box-sizing: border-box;
            }

            .kentekenfield input {
                margin-left: -5px;
                position: relative;
                background-color: #ffd33a;
                border-radius: 0 10px 10px 0;
                vertical-align: middle;
                border: none;
                color: #000;
                text-align: center;
                text-transform: uppercase;
                font-size: 23px;
                font-weight: 800;
                font-family: 'kenteken', 'Open Sans', Arial, sans-serif;
                width: 200px;
                height: 62px;
                padding: 15px;
            }

            .kentekenfield input:focus {
                outline: -webkit-focus-ring-color auto 0px !important;
            }

            .landcode img {
                display: block;
                width: 18px;
                position: absolute;
                left: 0;
                right: 0;
                margin: 0 auto;
                top: 10px;
            }

            .sectionalert-success {
                position: fixed;
                top: 143px;
                right: 20px;
                z-index: 999999;
                display: flex;
                padding: 10px 20px;
                color: #fff;
                background-color: #60bb3b;
                border-radius: 5px;
                box-shadow: rgba(31, 31, 31, 0.274) 2px 4px 19px;
                transition: all .3s ease-in-out;
            }

            .sectionalert-error {
                position: fixed;
                top: 173px;
                right: 20px;
                z-index: 999999;
                display: flex;
                padding: 10px 20px;
                color: #fff;
                background-color: red;
                border-radius: 5px;
                box-shadow: rgba(31, 31, 31, 0.274) 2px 4px 19px;
                transition: all .3s ease-in-out;
            }

            .sectionalert__wrapper {
                position: relative;
            }

            .pagination__links,
            .pagination {
                display: flex;
                flex-direction: row;
                justify-content: flex-start;
                ;
            }

            .pagination {
                list-style: none;
                justify-content: center;
                align-items: center;
            }

            .pagination__links li {
                text-align: center;
                border-radius: 5px;
                margin-right: 10px;
                padding: 10px;
                color: #fff;
                background-color: #FFBB33;
                width: 35px;
            }

            .pagination__links li a {
                text-decoration: none;
                color: #fff;
                text-align: center;
            }

            .pagination__links ul .active {
                background-color: #150848;
            }

            .pagination__links ul {
                padding-inline-start: 20px;
            }

            [x-cloak] {
                display: none;
            }

            .placeAdvertisement {
                cursor: pointer;
                display: block;
            }

            .z-index-hundred-thousand {
                z-index: 100000;
            }

            .favorite__message-wrapper h3 {
                font-weight: 400;
                font-size: 26px !important;
                line-height: 2em;
            }

            .favorite__message-wrapper h1 {
                font-size: 30px;
                text-align: center;
            }

            .favorite__message-wrapper {
                position: absolute;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 50px;
                top: 35vh;
            }

            .favorite__message-wrapper svg {
                width: 70px;
            }

            .align-baseline {
                vertical-align: baseline !important;
            }

            .btn-link {
                font-weight: 400;
                color: #3490dc;
                text-decoration: none;
            }

            .btn-link:hover {
                color: #1d68a7;
                text-decoration: underline;
            }

            .btn-link:focus,
            .btn-link.focus {
                text-decoration: underline;
                box-shadow: none;
            }

            .btn-link:disabled,
            .btn-link.disabled {
                color: #6c757d;
                pointer-events: none;
            }            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <livewire:file-upload />
        </div>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.1.0/dist/livewire-sortable.js"></script>
    </body>
</html>

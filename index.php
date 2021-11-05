<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/mediaquery.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="src/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="src/css/slick-theme.css" />
</head>

<body>
    <div id="loader" class="loader flex-column justify-content-center align-items-center">
        <div class="demo-wrapper html5-progress-bar">
            <img class="img-fluid" src="img/logo_white.png">
            <div class="progress-bar-wrapper">
                <progress id="progressbar" class="w-100" value="0" max="100"></progress>
            </div>
        </div>
    </div>


    <?php
    $logado = true;
    ?>

    <header>
        <div class="aviso">
            Cadastre sua empresa. Acesso imediato às ofertas exclusivas para CNPJ!
        </div>
        <!--Header Mobile-->
        <div class="h-m">
            <div class="container">
                <div class="row">
                    <div class="col-4 d-flex flex-row justify-content-start">
                        <button id="btnMenu">
                            <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="30" height="4" rx="2" fill="#336699" />
                                <rect y="12" width="30" height="4" rx="2" fill="#336699" />
                                <rect y="24" width="30" height="4" rx="2" fill="#336699" />
                            </svg>
                        </button>
                    </div>
                    <div class="col-4 d-flex flex-row justify-content-center">
                        <a href="">
                            <img class="img-fluid" src="img/logo_mobile.png">
                        </a>
                    </div>
                    <div class="col-4 d-flex flex-row justify-content-end">
                        <a href="">
                            <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.8162 19.8503H8.90202L9.90191 17.7365L26.5154 17.7052C27.0772 17.7052 27.5588 17.2887 27.6591 16.7125L29.9599 3.34598C30.0201 2.99541 29.9298 2.63444 29.7091 2.36023C29.6 2.22528 29.4639 2.11658 29.3103 2.04166C29.1567 1.96674 28.9892 1.9274 28.8195 1.92637L7.68476 1.85348L7.50418 0.971861C7.39048 0.40957 6.90224 0 6.34712 0H1.18047C0.86739 0 0.567133 0.129087 0.345752 0.358864C0.124371 0.588641 0 0.900285 0 1.22524C0 1.55019 0.124371 1.86184 0.345752 2.09161C0.567133 2.32139 0.86739 2.45048 1.18047 2.45048H5.3907L6.17991 6.34486L8.12284 16.1086L5.62145 20.3466C5.49155 20.5286 5.4133 20.7446 5.39558 20.9704C5.37785 21.1961 5.42134 21.4225 5.52112 21.6239C5.72177 22.0369 6.12641 22.2973 6.57452 22.2973H8.67462C8.2269 22.9145 7.98508 23.6662 7.98573 24.4388C7.98573 26.4034 9.52402 28 11.4168 28C13.3096 28 14.8478 26.4034 14.8478 24.4388C14.8478 23.6648 14.6004 22.9116 14.159 22.2973H19.5463C19.0986 22.9145 18.8568 23.6662 18.8574 24.4388C18.8574 26.4034 20.3957 28 22.2885 28C24.1813 28 25.7195 26.4034 25.7195 24.4388C25.7195 23.6648 25.4721 22.9116 25.0307 22.2973H28.8195C29.4683 22.2973 30 21.7489 30 21.072C29.9981 20.7474 29.8725 20.4368 29.6507 20.2079C29.4289 19.979 29.1289 19.8504 28.8162 19.8503ZM8.17635 4.26925L27.4317 4.33519L25.5456 15.2964L10.4202 15.3242L8.17635 4.26925ZM11.4168 25.5356C10.8349 25.5356 10.36 25.0428 10.36 24.4388C10.36 23.8349 10.8349 23.342 11.4168 23.342C11.9987 23.342 12.4735 23.8349 12.4735 24.4388C12.4735 24.7297 12.3622 25.0087 12.164 25.2144C11.9658 25.4201 11.6971 25.5356 11.4168 25.5356ZM22.2885 25.5356C21.7066 25.5356 21.2317 25.0428 21.2317 24.4388C21.2317 23.8349 21.7066 23.342 22.2885 23.342C22.8704 23.342 23.3452 23.8349 23.3452 24.4388C23.3452 24.7297 23.2339 25.0087 23.0357 25.2144C22.8375 25.4201 22.5688 25.5356 22.2885 25.5356Z" fill="#336699" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="input-pesquisa position-relative">
                        <svg class="icon-pesquisa" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3007 14.3801C15.3007 14.3801 15.3007 14.3801 15.3007 14.3801V14.3801ZM1.20615 4.59631C0.910884 5.28734 0.744794 6.00932 0.707886 6.76227C0.7448 6.00935 0.910892 5.28738 1.20615 4.59638C1.54361 3.80663 1.9975 3.12869 2.56784 2.56255C3.13818 1.99641 3.81784 1.54445 4.60681 1.20667C5.39578 0.868888 6.22277 0.699997 7.08779 0.699997C7.95281 0.699997 8.7798 0.868888 9.56877 1.20667C10.3577 1.54445 11.0374 1.99641 11.6077 2.56255C12.1781 3.12869 12.632 3.80663 12.9694 4.59638C13.2051 5.14783 13.3584 5.71784 13.4295 6.30641C13.3584 5.71782 13.2051 5.14779 12.9694 4.59631C12.632 3.80657 12.1781 3.12863 11.6077 2.56249C11.0374 1.99635 10.3577 1.54439 9.56877 1.20661C8.7798 0.868827 7.95281 0.699936 7.08779 0.699936C6.22277 0.699936 5.39578 0.868827 4.60681 1.20661C3.81784 1.54439 3.13818 1.99635 2.56784 2.56249C1.9975 3.12863 1.54361 3.80657 1.20615 4.59631ZM12.2066 10.9048L15.0298 13.7307C15.1809 13.882 15.2688 14.0583 15.2935 14.2595C15.2688 14.0583 15.1809 13.882 15.0298 13.7307L12.2066 10.9048C12.2066 10.9048 12.2066 10.9048 12.2066 10.9048ZM11.6505 7.08686C11.6505 7.1383 11.6497 7.18951 11.6481 7.24048C11.6497 7.18953 11.6505 7.13834 11.6505 7.08692C11.6505 7.0869 11.6505 7.08688 11.6505 7.08686ZM11.6183 7.64334C11.5461 8.25678 11.3525 8.83488 11.0374 9.37765C10.6287 10.0818 10.0749 10.636 9.37628 11.0404C8.67761 11.4448 7.91478 11.647 7.08779 11.647C6.2608 11.647 5.49797 11.4448 4.7993 11.0404C4.10063 10.636 3.54693 10.0818 3.13818 9.37765C2.72944 8.67354 2.52507 7.90996 2.52507 7.08692C2.52507 7.0869 2.52507 7.08688 2.52507 7.08686C2.52507 7.9099 2.72944 8.67348 3.13818 9.37759C3.54693 10.0817 4.10063 10.6359 4.7993 11.0403C5.49797 11.4447 6.2608 11.6469 7.08779 11.6469C7.91478 11.6469 8.67761 11.4447 9.37628 11.0403C10.0749 10.6359 10.6287 10.0817 11.0374 9.37759C11.3525 8.83484 11.5461 8.25676 11.6183 7.64334ZM11.1213 11.9916L10.9382 11.8083L10.7302 11.9627C9.64073 12.7716 8.42954 13.1738 7.08779 13.1738C6.26303 13.1738 5.47624 13.0131 4.72488 12.6914C3.96882 12.3677 3.3217 11.9343 2.78008 11.3921C2.23815 10.8497 1.8051 10.204 1.48177 9.45184C1.16071 8.70501 0.999977 7.91759 0.999977 7.08692C0.999977 6.25625 1.16072 5.46621 1.48202 4.71425C1.80534 3.95758 2.23812 3.31255 2.77919 2.77547C3.3209 2.23775 3.9683 1.80637 4.72488 1.48246C5.47624 1.16078 6.26303 0.999997 7.08779 0.999997C7.91255 0.999997 8.69934 1.16078 9.4507 1.48246C10.2073 1.80637 10.8547 2.23775 11.3964 2.77547C11.9375 3.31255 12.3702 3.95758 12.6936 4.71425C13.015 5.46642 13.1756 6.2541 13.1756 7.07978C13.1756 8.433 12.7734 9.64497 11.9663 10.7252L11.8109 10.9332L11.9944 11.1168L14.8175 13.9428C14.9428 14.0682 15.0007 14.2087 15.0007 14.3801C15.0007 14.5516 14.9428 14.6921 14.8175 14.8175C14.6923 14.9429 14.552 15.0007 14.381 15.0007C14.21 15.0007 14.0697 14.9429 13.9445 14.8175L11.1213 11.9916ZM7.08779 2.22687C6.20938 2.22687 5.39451 2.44231 4.64902 2.8738C3.90467 3.30463 3.3135 3.89663 2.87873 4.64558C2.44312 5.39596 2.22507 6.21158 2.22507 7.08692C2.22507 7.96226 2.44312 8.77788 2.87873 9.52826C3.3135 10.2772 3.90467 10.8692 4.64902 11.3C5.39451 11.7315 6.20938 11.947 7.08779 11.947C7.9662 11.947 8.78107 11.7315 9.52656 11.3C10.2709 10.8692 10.8621 10.2772 11.2968 9.52826C11.7325 8.77788 11.9505 7.96226 11.9505 7.08692C11.9505 6.21158 11.7325 5.39596 11.2968 4.64558C10.8621 3.89663 10.2709 3.30463 9.52656 2.8738C8.78107 2.44231 7.9662 2.22687 7.08779 2.22687Z" fill="#DBDBDB" />
                        </svg>
                        <input class="w-100" placeholder="Pesquisar produtos...">
                    </div>
                </div>
            </div>
        </div>
        <!--Fim Header Mobile-->

        <!--Header Desktop-->
        <div class="h-d">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav-paginas">
                            <li>
                                <a>
                                    <h2>
                                        Nossas Lojas
                                    </h2>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <h2>
                                        Regulamentos
                                    </h2>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <h2>
                                        Sobre Nós
                                    </h2>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pt-0 pb-3">
                    <div class="col-md-2 d-flex flex-row justify-content-start align-items-center">
                        <a href="">
                            <img class="img-fluid" src="img/logo_desk.png">
                        </a>
                    </div>
                    <div class="col-md-6 d-flex flex-row justify-content-start align-items-center">
                        <div class="input-pesquisa position-relative w-100">
                            <svg class="icon-pesquisa" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3167 15.7175L14.1337 15.5343L13.9257 15.6887C12.3674 16.8454 10.6328 17.4217 8.71288 17.4217C7.53264 17.4217 6.40599 17.1915 5.3304 16.7311C4.25011 16.2686 3.32369 15.6485 2.54769 14.8718C1.77138 14.0948 1.15181 13.1706 0.689799 12.096C0.230074 11.0267 0 9.89918 0 8.71084C0 7.52249 0.230077 6.3914 0.690057 5.315C1.15205 4.23388 1.77135 3.31034 2.5468 2.54066C3.32289 1.77036 4.24959 1.1533 5.3304 0.690618C6.40599 0.230169 7.53264 0 8.71288 0C9.89311 0 11.0198 0.230169 12.0953 0.690618C13.1762 1.1533 14.1029 1.77036 14.879 2.54066C15.6544 3.31034 16.2737 4.23388 16.7357 5.315C17.1958 6.39161 17.4258 7.51937 17.4258 8.70077C17.4258 10.6364 16.8497 12.3722 15.6949 13.9176L15.5395 14.1256L15.723 14.3092L19.7064 18.2962C19.9059 18.4958 20.0009 18.7253 20.0009 19.0003C20.0009 19.2753 19.9059 19.5048 19.7064 19.7045C19.5069 19.9041 19.2778 19.9991 19.0032 19.9991C18.7287 19.9991 18.4996 19.9041 18.3001 19.7045L14.3167 15.7175ZM8.71288 1.9774C7.49462 1.9774 6.36627 2.27591 5.33366 2.87353C4.3022 3.47048 3.48348 4.29018 2.88074 5.32839C2.27715 6.36804 1.97511 7.49736 1.97511 8.71084C1.97511 9.92431 2.27715 11.0536 2.88074 12.0933C3.48348 13.1315 4.3022 13.9512 5.33366 14.5481C6.36627 15.1458 7.49462 15.4443 8.71288 15.4443C9.93114 15.4443 11.0595 15.1458 12.0921 14.5481C13.1236 13.9512 13.9423 13.1315 14.545 12.0933C15.1486 11.0536 15.4506 9.92431 15.4506 8.71084C15.4506 7.49736 15.1486 6.36804 14.545 5.32839C13.9423 4.29018 13.1236 3.47048 12.0921 2.87353C11.0595 2.27591 9.93114 1.9774 8.71288 1.9774Z" fill="#C4C4C4" />
                            </svg>

                            <input class="w-100" placeholder="Pesquisar produtos...">
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row justify-content-start align-items-center box-login">
                        <div class="position-relative">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.33395 35.6L8.24336 35.5305C3.51701 31.9073 0.4 26.2426 0.4 20C0.4 9.37891 9.37891 0.4 20 0.4C30.6211 0.4 39.6 9.37891 39.6 20C39.6 26.2445 36.483 31.9073 31.7566 35.5305L31.666 35.6H31.6632L31.5567 35.6794C28.2837 38.1224 24.2804 39.6 20 39.6C15.7196 39.6 11.7163 38.1224 8.44326 35.6794L8.33682 35.6H8.33395ZM11.7574 33.7677L11.6943 34.0533L11.9474 34.2001C14.3398 35.5868 17.0925 36.4 20 36.4C22.9075 36.4 25.6602 35.5868 28.0526 34.2001L28.3058 34.0533L28.2425 33.7676C27.9278 32.3457 27.1381 31.0736 26.0034 30.1607C24.8688 29.2479 23.457 28.7489 22.0008 28.746H22L18 28.746L17.9993 28.746C16.5429 28.7485 15.1309 29.2474 13.9962 30.1603C12.8615 31.0732 12.0718 32.3456 11.7574 33.7677ZM30.8512 31.4369L31.0811 31.9843L31.5021 31.5656C34.5054 28.5787 36.4 24.4668 36.4 20C36.4 11.1051 28.8949 3.6 20 3.6C11.1051 3.6 3.6 11.1051 3.6 20C3.6 24.4668 5.4946 28.5787 8.49793 31.5656L8.91888 31.9843L9.14879 31.4369C9.8812 29.6932 11.1117 28.2042 12.6861 27.1564C14.2606 26.1086 16.1092 25.5484 18.0005 25.546H21.9995C23.8908 25.5484 25.7394 26.1086 27.3139 27.1564C28.8883 28.2042 30.1188 29.6932 30.8512 31.4369Z" fill="#336699" stroke="white" stroke-width="0.8" />
                            </svg>
                            <div class="cabeca">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.4 8C0.4 3.66091 3.66091 0.4 8 0.4C12.3391 0.4 15.6 3.66091 15.6 8C15.6 12.3391 12.3391 15.6 8 15.6C3.66091 15.6 0.4 12.3391 0.4 8ZM3.6 8C3.6 9.2735 4.04597 10.3787 4.83366 11.1663C5.62134 11.954 6.7265 12.4 8 12.4C9.2735 12.4 10.3787 11.954 11.1663 11.1663C11.954 10.3787 12.4 9.2735 12.4 8C12.4 6.7265 11.954 5.62134 11.1663 4.83366C10.3787 4.04597 9.2735 3.6 8 3.6C6.7265 3.6 5.62134 4.04597 4.83366 4.83366C4.04597 5.62134 3.6 6.7265 3.6 8Z" fill="#336699" stroke="white" stroke-width="0.8" />
                                </svg>
                            </div>
                        </div>

                        <h2>
                            Bem-vindo!<br>
                            <a>
                                Entre
                            </a>
                            ou
                            <a>
                                Cadastre-se!
                            </a>
                        </h2>

                    </div>
                    <div class="col-md-1 d-flex flex-row justify-content-end align-items-center">
                        <a class="box-cart position-relative">
                            <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.8909 29.7142C25.4035 30.4789 25.1425 31.3754 25.1432 32.2942L25.8909 29.7142ZM25.8909 29.7142H26.0618V29.4642L25.86 29.3166C25.8244 29.3652 25.7898 29.4144 25.756 29.4642H19.1835C19.1502 29.4147 19.116 29.3658 19.081 29.3175L18.8786 29.4642V29.7142H19.048C19.5301 30.4763 19.7971 31.3741 19.7971 32.2942C19.7971 34.8902 17.7461 37 15.2224 37C12.6987 37 10.6476 34.8902 10.6476 32.2942L25.8909 29.7142ZM11.6437 26.123L11.473 26.4807H11.8694H38.4214C38.7701 26.4809 39.1061 26.6229 39.3555 26.878C39.6051 27.1333 39.7476 27.4811 39.75 27.846C39.7496 28.6082 39.1466 29.2142 38.426 29.2142H33.3742H32.8842L33.1718 29.611C33.7298 30.3807 34.0427 31.3247 34.0427 32.2942C34.0427 34.7588 32.097 36.75 29.718 36.75C27.339 36.75 25.3932 34.7588 25.3932 32.2942V32.2939C25.3924 31.3256 25.6983 30.3841 26.2635 29.6119L26.5545 29.2142H26.0618H18.8786H18.3886L18.6762 29.611C19.2342 30.3807 19.5471 31.3247 19.5471 32.2942C19.5471 34.7588 17.6014 36.75 15.2224 36.75C12.8434 36.75 10.8976 34.7588 10.8976 32.2942V32.2939C10.8968 31.3256 11.2027 30.3841 11.7679 29.6119L12.0589 29.2142H11.5662H8.76602C8.26707 29.2142 7.81291 28.9274 7.58599 28.4644L7.58511 28.4627C7.47253 28.2374 7.42325 27.9838 7.44332 27.7306C7.46338 27.4774 7.55191 27.2357 7.69812 27.0327L7.70449 27.0239L7.71006 27.0145L11.0452 21.4143L11.0945 21.3315L11.0756 21.2371L8.48499 8.33507L8.48482 8.3342L7.43254 3.18805L7.39166 2.98813H7.1876H1.57396C1.22514 2.98813 0.889129 2.84566 0.640258 2.58966C0.391155 2.33341 0.25 1.98441 0.25 1.61907C0.25 1.25372 0.391155 0.904717 0.640258 0.648475C0.889129 0.392473 1.22514 0.25 1.57396 0.25H8.46283C9.08022 0.25 9.63197 0.703677 9.76062 1.33422L9.76075 1.33484L10.0015 2.49984L10.0426 2.69854L10.2455 2.69924L38.4245 2.79555C38.4246 2.79555 38.4247 2.79555 38.4248 2.79555C38.6136 2.79674 38.8002 2.84013 38.9716 2.92299C39.143 3.00584 39.2954 3.1263 39.418 3.27649C39.6656 3.58132 39.7684 3.98489 39.7002 4.37879L36.6326 22.0412C36.6326 22.0413 36.6326 22.0414 36.6325 22.0415C36.5188 22.6881 35.9766 23.1462 35.3539 23.1462H35.3535L13.2021 23.1875L13.0447 23.1878L12.9769 23.3298L11.6437 26.123ZM10.9026 5.3915L10.5952 5.39046L10.6569 5.69166L13.6487 20.2999L13.6897 20.5002L13.8941 20.4998L34.0613 20.4631L34.2713 20.4627L34.3072 20.2559L36.822 5.77141L36.8726 5.47965L36.5765 5.47865L10.9026 5.3915ZM13.5634 32.2942C13.5634 33.2236 14.3019 33.9935 15.2224 33.9935C15.6647 33.9935 16.0874 33.8127 16.3979 33.4933C16.7083 33.1741 16.8814 32.7426 16.8814 32.2942C16.8814 31.3647 16.1429 30.5948 15.2224 30.5948C14.3019 30.5948 13.5634 31.3647 13.5634 32.2942ZM28.059 32.2942C28.059 33.2236 28.7975 33.9935 29.718 33.9935C30.1603 33.9935 30.583 33.8127 30.8935 33.4933C31.2038 33.1741 31.377 32.7426 31.377 32.2942C31.377 31.3647 30.6385 30.5948 29.718 30.5948C28.7975 30.5948 28.059 31.3647 28.059 32.2942Z" fill="#336699" stroke="white" stroke-width="0.5" />
                            </svg>
                            <div class="inCart">
                                <span>
                                    0
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav-categorias">
                            <li>
                                <a>
                                    <strong>
                                        Mais Departamentos
                                    </strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Drywall
                                </a>
                            </li>
                            <li>
                                <a>
                                    Forro Removível
                                </a>
                            </li>
                            <li>
                                <a>
                                    Isolamento Acústico
                                </a>
                            </li>
                            <li>
                                <a>
                                    Iluminação
                                </a>
                            </li>
                            <li>
                                <a class="btn-calculadora">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.3333 1H3.66667C2.2 1 1 2.2 1 3.66667V22.3333C1 23.8 2.2 25 3.66667 25H22.3333C23.8 25 25 23.8 25 22.3333V3.66667C25 2.2 23.8 1 22.3333 1ZM22.3333 22.3333H3.66667V3.66667H22.3333V22.3333ZM5.26667 7.26667H11.9333V9.26667H5.26667V7.26667ZM14.3333 18.0667H21V20.0667H14.3333V18.0667ZM14.3333 14.6H21V16.6H14.3333V14.6ZM7.66667 21H9.66667V18.3333H12.3333V16.3333H9.66667V13.6667H7.66667V16.3333H5V18.3333H7.66667V21ZM15.8 11.5333L17.6667 9.66667L19.5333 11.5333L21 10.2L19.1333 8.33333L21 6.46667L19.5333 5L17.6667 6.86667L15.8 5L14.3333 6.46667L16.2 8.33333L14.3333 10.2L15.8 11.5333Z" fill="#336699" stroke="white" />
                                    </svg>

                                    Calculadora
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim Header Desktop-->
    </header>
    <div id="slideMenu" class="menu effect" style="left: -100%;">
        <div class="slide-header d-flex flex-row justify-content-start align-items-center">
            <button id="btnMenus">
                <svg width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="30" height="4" rx="2" fill="#336699" />
                    <rect y="12" width="30" height="4" rx="2" fill="#336699" />
                    <rect y="24" width="30" height="4" rx="2" fill="#336699" />
                </svg>
            </button>
            <h2 class="w-100">
                Olá, <strong>Visitante</strong>!
            </h2>
            <button id="btnClose">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2L24 24M24 2L2 24" stroke="#336699" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </button>
        </div>
        <div class="slide-body">
            <h2>
                Todos os Departamentos
            </h2>
            <ul>
                <li>
                    <a>
                        Drywall
                    </a>
                </li>
                <li>
                    <a>
                        Steel Frame
                    </a>
                </li>
                <li>
                    <a>
                        Forro Removível
                    </a>
                </li>
                <li>
                    <a>
                        Isolamento Acústico
                    </a>
                </li>
                <li>
                    <a>
                        Cola, Silicone E Argamassa
                    </a>
                </li>
                <li>
                    <a>
                        Ferramenta
                    </a>
                </li>
                <li>
                    <a>
                        Piso Vinílico
                    </a>
                </li>
            </ul>

            <h2>
                Hometeck Atacadista
            </h2>
            <ul class="atacadista">
                <li>
                    <a class='cor-azul'>
                        <img class="img-fluid" src="img/logo_menulateral.png">
                        Sobre nós
                    </a>
                </li>
                <li>
                    <a class='cor-azul'>
                        <img class="img-fluid" src="img/icon_regulamentos.png">
                        Regulamentos
                    </a>
                </li>
                <li>
                    <a class='cor-azul'>
                        <img class="img-fluid" src="img/icon_localizacao.png">
                        Nossas lojas
                    </a>
                </li>
            </ul>

            <h2>
                Facilidade pra Você
            </h2>
            <ul>
                <a class="w-100 d-flex flex-row justify-content-center align-items-center btn-button">
                    <img class="img-fluid" src="img/icon_calculadora.png">
                    Calculadora de Materias
                </a>
                <a class="w-100 d-flex flex-row justify-content-center align-items-center btn-button">
                    <img class="img-fluid" src="img/icon_solicitarorcamento.png">
                    Solicitar Orçamento
                </a>
                <a class="btnlateral-entrar w-100 d-flex flex-row justify-content-center align-items-center btn-button">
                    ENTRAR
                </a>
            </ul>
            <p>
                Cadastre sua empresa.
            </p>
            <p>
                Acesso imediato às ofertas exclusivas para CNPJ!
            </p>
            <p>
                TELEVENDAS: 0800 222 2222F
            </p>
        </div>
    </div>

    <?php include "body.html"; ?>

    <div class="background-slider"></div>
    <a class="btnWhatsapp" href="">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6868 41.254L13.4715 41.6432C16.7415 43.5891 20.4036 44.4972 24.0658 44.4972C35.5756 44.4972 44.9926 35.1567 44.9926 23.7405C44.9926 18.2919 42.769 12.973 38.8454 9.08103C34.9216 5.18908 29.6897 2.98376 24.0658 2.98376C12.5561 2.98376 3.13891 12.3243 3.26978 23.8703C3.26978 27.7621 4.44691 31.5244 6.40873 34.7675L6.93186 35.546L4.83935 43.2001L12.6868 41.254Z" fill="#00E676" />
            <path d="M41.0688 7.00539C36.6219 2.46494 30.4747 0 24.1966 0C10.8559 0 0.130875 10.7675 0.261563 23.8702C0.261563 28.0216 1.43869 32.0433 3.4007 35.6757L0 48L12.6869 44.7567C16.2182 46.7028 20.1419 47.6109 24.0659 47.6109C37.2759 47.6109 48.0009 36.8432 48.0009 23.7407C48.0009 17.3839 45.5158 11.4162 41.069 7.00539H41.0688ZM24.1966 43.5894C20.6652 43.5894 17.1338 42.6814 14.1255 40.8652L13.3409 40.4759L5.75496 42.4218L7.71677 35.0273L7.19365 34.2488C1.43869 25.0381 4.18539 12.8432 13.6024 7.13502C23.0194 1.427 35.1832 4.15139 40.9381 13.4919C46.6929 22.8324 43.9462 34.8973 34.5294 40.6055C31.5209 42.5514 27.8588 43.5892 24.1966 43.5892V43.5894ZM35.7063 29.1895L34.2676 28.5408C34.2676 28.5408 32.1751 27.6327 30.8671 26.984C30.7362 26.984 30.6055 26.8542 30.4747 26.8542C30.0822 26.8542 29.8207 26.984 29.5591 27.1138C29.5591 27.1138 29.4284 27.2434 27.5973 29.3191C27.4664 29.5786 27.2048 29.7084 26.9433 29.7084H26.8124C26.6817 29.7084 26.4201 29.5786 26.2893 29.4489L25.6353 29.1895C24.1966 28.5408 22.8888 27.7623 21.8423 26.7246C21.5808 26.4651 21.1883 26.2057 20.9268 25.9463C20.0112 25.0381 19.0956 24.0002 18.4418 22.8326L18.3109 22.5732C18.1802 22.4434 18.1802 22.3137 18.0494 22.0543C18.0494 21.7949 18.0494 21.5354 18.1802 21.4056C18.1802 21.4056 18.7034 20.7569 19.0956 20.3679C19.3574 20.1082 19.4881 19.7192 19.7496 19.4597C20.0112 19.0705 20.1421 18.5516 20.0112 18.1624C19.8805 17.5137 18.3109 14.011 17.9187 13.2327C17.6569 12.8434 17.3956 12.7138 17.0031 12.584H15.5644C15.3027 12.584 15.0413 12.7138 14.7795 12.7138L14.6487 12.8434C14.3871 12.9732 14.1255 13.2327 13.864 13.3623C13.6024 13.6219 13.4715 13.8812 13.21 14.1408C12.2944 15.3084 11.7713 16.7354 11.7713 18.1624C11.7713 19.2001 12.0329 20.2381 12.4253 21.1462L12.5562 21.5354C13.7333 24.0002 15.3027 26.2057 17.3956 28.1516L17.9187 28.6704C18.3109 29.0597 18.7034 29.3191 18.9649 29.7082C21.7116 32.0435 24.8506 33.73 28.382 34.6381C28.7744 34.7677 29.2975 34.7677 29.69 34.8975H30.9978C31.6518 34.8975 32.4365 34.6381 32.9598 34.3787C33.352 34.1192 33.6136 34.1192 33.8752 33.8598L34.1369 33.6001C34.3985 33.3407 34.66 33.2111 34.9216 32.9516C35.1832 32.6922 35.4447 32.4328 35.5756 32.1731C35.8372 31.6543 35.9679 31.0056 36.0987 30.3571V29.4489C36.0987 29.4489 35.9679 29.3191 35.7063 29.1895Z" fill="white" />
        </svg>
    </a>

    <a id="buttonTop">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="24" cy="24" r="24" fill="black" fill-opacity="0.2" />
            <path d="M36 30L24 18L12 30" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>

    <footer class="footer-section">
        <div class="container footer-middle">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-contact ul-li-block">
                        <h2 class="footer-title">informações de contato</h2>
                        <ul class="clearfix">
                            <li>
                                <div class="contact-text">
                                    <strong>
                                        <span class="mb-15">CNPJ 07.607.904/0001-29</span><br>
                                        <span>SOL COMERCIO E SERVICOS DE INFORMATICA LTDA EPP</span>
                                    </strong>
                                </div>
                            </li>

                            <li>

                                <div class="contact-text">
                                    SCLRN 703 BL D LOJAS 21 33 E 41, ASA NORTE - BRASILIA, <br>
                                    70730514 - ASA NORTE - BRASÍLIA/DF
                                </div>
                            </li>
                            <li>

                                <div class="contact-text phone">
                                    <span>RJ - UNIDADE RIO DE JANEIRO</span><br><a href="tel:(021) 3547-9090"> &nbsp;(021) 3547-9090</a><br>
                                </div>
                            </li>
                            <li>

                                <div class="contact-text email">
                                    <strong>Email:</strong><a href="mailto:lojavirtual@soltelecomunicacoes.com.br">&nbsp;lojavirtual@soltelecomunicacoes.com.br</a>
                                </div>
                            </li>
                            <li>

                                <div class="contact-text">
                                    <strong>Horário:</strong> Segunda a Sexta das 8h00 às 18h00
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="useful-links ul-li-block">
                        <h2 class="footer-title">minha conta</h2>
                        <ul class="clearfix">

                            <li><a href="/login">Acesso</a></li>
                            <li><a href="/cart">Carrinho</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="useful-links ul-li-block">
                        <h2 class="footer-title">comprando de nós</h2>
                        <ul class="clearfix">
                            <li><a href="/help/infopage/ae856743-ad66-4e4b-9773-b82bd0d9fe42">Formas de Pagamento</a></li>
                            <li><a href="/help/infopage/9e067493-1f9a-4332-829a-d7bc9cbafb02">Trocas e Devoluções</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="useful-links ul-li-block">
                        <h2 class="footer-title">informações</h2>
                        <ul class="clearfix">
                            <li><a href="/help/infopage/22bc2844-033d-4d37-b1ca-45798a326252">Sobre nós</a></li>
                            <li><a href="/help/infopage/a1213d06-535d-4d8f-bcb3-47ca7b337891">Informações de Entrega</a></li>
                            <li><a href="/help/infopage/c3cc62c6-50b7-4dfa-9331-0b9c05184230">Política de Privacidade</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom text-center">
            <div class="container sign">
                <p class="m-0">Copyright © 2021, desenvolvido por <a href="http://www.forshcommerce.com.br" class="color-sky-blue" target="_blank"><strong>Forsh Commerce</strong></a> Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="src/js/slick.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="src/js/script.js"></script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
import { Link, Head } from "@inertiajs/react";
import { PageProps } from "@/types";

export default function Welcome({
    auth,
    laravelVersion,
    phpVersion,
}: PageProps<{ laravelVersion: string; phpVersion: string }>) {
    return (
        <>
            <Head title="Welcome" />
            <div className="container-fluid">
                <div className="d-flex justify-content-end">
                    {auth.user ? (
                        <Link
                            href={route("dashboard")}
                            className="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        >
                            Dashboard
                        </Link>
                    ) : (
                        <>
                            <Link
                                href={route("login")}
                                className="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >
                                Log in
                            </Link>

                            <Link
                                href={route("register")}
                                className="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            >
                                Register
                            </Link>
                        </>
                    )}
                </div>
            </div>
            <div className="mb-6 bg-gradient-to-br from-white to-grey-200">
                <div className="mx-auto Wrapper_box__4K_5d px-4 2xs:px-5 l:px-10 2xl:px-5">
                    <div className="fresnel-container fresnel-lessThan-2xl "></div>
                    <div className="fresnel-container fresnel-greaterThanOrEqual-2xl ">
                        <header className="flex justify-between items-center h-14">
                            <a
                                title="a global hotel search platform"
                                aria-label="a global hotel search platform"
                                href="/pt-BR"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="102"
                                    height="32"
                                    viewBox="0 0 102 32"
                                    data-testid="header-hero-logo"
                                >
                                    <path
                                        className="Logo_default_svg__logo-svg-path"
                                        d="M33.706 6.989h5.441l4.133 11.149h.066l3.83-11.149h5.071L45.8 23.377h-5.34"
                                        fill="#FC9E15"
                                    ></path>

                                    <path
                                        className="Logo_default_svg__logo-svg-path"
                                        d="M13.971 11.018H9V16.5c0 .93.082 2.119.959 2.655a4.649 4.649 0 002.9.283 2.242 2.242 0 001.107-.386v4.2a10.114 10.114 0 01-1.938.4c-3.556.359-8.54-.253-8.54-4.838v-7.8H0V6.988h3.492V2.153H9v4.836h4.97v4.03zm14.1-4.03h4.97v16.389h-4.97V6.989zm-.2-4.311a2.676 2.676 0 115.351 0 2.677 2.677 0 01-5.353 0"
                                        fill="#1391D2"
                                    ></path>
                                    <path
                                        className="Logo_default_svg__logo-svg-path"
                                        d="M90.124 15.195c0 2.215 1.289 4.13 3.648 4.13s3.647-1.915 3.647-4.131-1.287-4.133-3.647-4.133-3.647 1.917-3.648 4.134m-4.556 0a8.224 8.224 0 0114.711-5.43 9.491 9.491 0 01.687 9.766 8.214 8.214 0 01-15.4-4.336M80.24 6.973v2.2h-.076a3.041 3.041 0 00-.574-.613c-3.254-2.8-8.812-2.238-10.915 1.679a11.506 11.506 0 00-.924 6.812c.283 2.077 1.05 4.275 2.879 5.478a7.739 7.739 0 006.936.71 4.8 4.8 0 002.075-1.572h.059v1.588a3.9 3.9 0 01-.984 2.881c-1.449 1.493-4.218 1.4-6.079.894a9.223 9.223 0 01-2.914-1.307l-2.451 3.6a11.307 11.307 0 003.906 1.9c3.583.949 8.543.928 11.312-1.921 1.561-1.606 2.2-3.96 2.2-7.06V6.971h-4.448zM78.984 18.2a3.707 3.707 0 01-5.4 0 5.013 5.013 0 010-6 3.707 3.707 0 015.4 0 5.011 5.011 0 010 6c-.639.763.641-.763 0 0z"
                                        fill="#E3403D"
                                    ></path>
                                    <path
                                        className="Logo_default_svg__logo-svg-path"
                                        d="M15.314 6.989h5.105v2.686h.051A5.715 5.715 0 0122.384 7.4a6.338 6.338 0 014.482-.6v4.6c-1.029-.278-3.2-.715-4.717.211-.96.586-1.731 1.288-1.731 4.929v6.839h-5.105V6.989z"
                                        fill="#1391D2"
                                    ></path>
                                    <path
                                        className="Logo_default_svg__logo-svg-path"
                                        d="M56.992 16.844c-1 .62-1.683 1.829-.763 2.775.9.922 2.522.829 3.632.441a2.98 2.98 0 002.2-2.784v-1.018c.017 0-3.794-.208-5.069.585zm5.07 4.518h-.093a5.079 5.079 0 01-2.232 1.852c-3.563 1.464-8.748-.019-8.75-4.492 0-4.655 5.07-5.606 8.784-5.712a89.25 89.25 0 012.267-.034 2.62 2.62 0 00-.957-2.132 4.243 4.243 0 00-4.535-.268A6.2 6.2 0 0054.716 12l-2.688-2.752a9.255 9.255 0 013.292-1.966 11.844 11.844 0 017.044-.27 5.625 5.625 0 013.952 4.437 17.479 17.479 0 01.314 3.61v8.317h-4.567v-2.014z"
                                        fill="#FC9E15"
                                    ></path>
                                </svg>
                            </a>
                            <nav className="h-full self-end ml-auto">
                                <ul className="flex h-full mr-2 s:mr-0 text-grey-900">
                                    <li className="h-full list-none flex relative">
                                        <div className="flex justify-center">
                                            <a
                                                role="link"
                                                data-testid="header-favorites"
                                                className="flex w-full items-center h-full  cursor-pointer hover:bg-grey-200 px-4"
                                                href="/pt-BR/fl/seus-favoritos"
                                            >
                                                <span
                                                    className="leading-none inline-flex transform"
                                                    aria-hidden="true"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        className="pointer-events-none max-h-full max-w-full"
                                                    >
                                                        <path
                                                            d="M20.42 4.82A5.23 5.23 0 0016.5 3 5.37 5.37 0 0012 5.58 5.37 5.37 0 007.5 3a5.23 5.23 0 00-3.92 1.82A6.35 6.35 0 002 9.07v.28c0 5.42 7.25 10.18 9.47 11.51a1 1 0 001 0C14.74 19.53 22 14.77 22 9.35v-.22-.06a6.35 6.35 0 00-1.58-4.25zM21 9.18v.17c0 4.94-7.07 9.5-9 10.65-1.92-1.15-9-5.71-9-10.65v-.17a.41.41 0 000-.11A4.81 4.81 0 017.5 4a4.39 4.39 0 013.66 2.12L12 7.44l.84-1.32A4.39 4.39 0 0116.5 4 4.81 4.81 0 0121 9.07a.41.41 0 000 .11z"
                                                            fill="currentColor"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <span className="sr-only l:not-sr-only">
                                                    <span className="flex-grow text-m whitespace-nowrap mx-2">
                                                        Favoritos
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li className="h-full list-none flex relative">
                                        <label
                                            data-testid="header-menu-currency-selector"
                                            htmlFor="currency-selector"
                                            className="relative w-25 block h-full hover:bg-grey-200 CurrencyMenu_currencyMenuLabel__t3D1C"
                                        >
                                            <select
                                                aria-label="Escolha sua moeda:"
                                                className="opacity-0 h-full w-full cursor-pointer text-m"
                                                id="currency-selector"
                                            >
                                                <optgroup label="Moedas mais usadas">
                                                    <option
                                                        value="EUR"
                                                        label="EUR - Euro"
                                                    >
                                                        EUR - Euro
                                                    </option>
                                                    <option
                                                        value="GBP"
                                                        label="GBP - Libra esterlina"
                                                    >
                                                        GBP - Libra esterlina
                                                    </option>
                                                    <option
                                                        value="USD"
                                                        label="USD - Dólar dos Estados Unidos"
                                                    >
                                                        USD - Dólar dos Estados
                                                        Unidos
                                                    </option>
                                                </optgroup>
                                                <optgroup label="Todas as moedas">
                                                    <option
                                                        value="AED"
                                                        label="AED - Dirham dos Emirados Árabes Unidos"
                                                    >
                                                        AED - Dirham dos
                                                        Emirados Árabes Unidos
                                                    </option>
                                                    <option
                                                        value="ARS"
                                                        label="ARS - Peso argentino"
                                                    >
                                                        ARS - Peso argentino
                                                    </option>
                                                    <option
                                                        value="AUD"
                                                        label="AUD - Dólar autraliano"
                                                    >
                                                        AUD - Dólar autraliano
                                                    </option>
                                                    <option
                                                        value="AZN"
                                                        label="AZN - Manat azerbaijano"
                                                    >
                                                        AZN - Manat azerbaijano
                                                    </option>
                                                    <option
                                                        value="BGN"
                                                        label="BGN - Lev Búlgaro"
                                                    >
                                                        BGN - Lev Búlgaro
                                                    </option>
                                                    <option
                                                        value="BHD"
                                                        label="BHD - Dinar bareinita"
                                                    >
                                                        BHD - Dinar bareinita
                                                    </option>
                                                    <option
                                                        value="BRL"
                                                        label="BRL - Real"
                                                    >
                                                        BRL - Real
                                                    </option>
                                                    <option
                                                        value="CAD"
                                                        label="CAD - Dólar canadense"
                                                    >
                                                        CAD - Dólar canadense
                                                    </option>
                                                    <option
                                                        value="CHF"
                                                        label="CHF - Franco suíço"
                                                    >
                                                        CHF - Franco suíço
                                                    </option>
                                                    <option
                                                        value="CLP"
                                                        label="CLP - Peso chileno"
                                                    >
                                                        CLP - Peso chileno
                                                    </option>
                                                    <option
                                                        value="CNY"
                                                        label="CNY - Renminbi"
                                                    >
                                                        CNY - Renminbi
                                                    </option>
                                                    <option
                                                        value="COP"
                                                        label="COP - Peso colombiano"
                                                    >
                                                        COP - Peso colombiano
                                                    </option>
                                                    <option
                                                        value="CZK"
                                                        label="CZK - Coroa checa"
                                                    >
                                                        CZK - Coroa checa
                                                    </option>
                                                    <option
                                                        value="DKK"
                                                        label="DKK - Coroa dinamarquesa"
                                                    >
                                                        DKK - Coroa dinamarquesa
                                                    </option>
                                                    <option
                                                        value="DZD"
                                                        label="DZD - Dinar argelino"
                                                    >
                                                        DZD - Dinar argelino
                                                    </option>
                                                    <option
                                                        value="EGP"
                                                        label="EGP - Libra egípcia"
                                                    >
                                                        EGP - Libra egípcia
                                                    </option>
                                                    <option
                                                        value="EUR"
                                                        label="EUR - Euro"
                                                    >
                                                        EUR - Euro
                                                    </option>
                                                    <option
                                                        value="GBP"
                                                        label="GBP - Libra esterlina"
                                                    >
                                                        GBP - Libra esterlina
                                                    </option>
                                                    <option
                                                        value="HKD"
                                                        label="HKD - Dólar de Hong Kong"
                                                    >
                                                        HKD - Dólar de Hong Kong
                                                    </option>
                                                    <option
                                                        value="HRK"
                                                        label="HRK - Kuna croata"
                                                    >
                                                        HRK - Kuna croata
                                                    </option>
                                                    <option
                                                        value="HUF"
                                                        label="HUF - Florim húngaro"
                                                    >
                                                        HUF - Florim húngaro
                                                    </option>
                                                    <option
                                                        value="IDR"
                                                        label="IDR - Rupia indonésia"
                                                    >
                                                        IDR - Rupia indonésia
                                                    </option>
                                                    <option
                                                        value="ILS"
                                                        label="ILS - Novo shekel israelense"
                                                    >
                                                        ILS - Novo shekel
                                                        israelense
                                                    </option>
                                                    <option
                                                        value="INR"
                                                        label="INR - Rupia indiana"
                                                    >
                                                        INR - Rupia indiana
                                                    </option>
                                                    <option
                                                        value="JOD"
                                                        label="JOD - Dinar jordano"
                                                    >
                                                        JOD - Dinar jordano
                                                    </option>
                                                    <option
                                                        value="JPY"
                                                        label="JPY - Iene"
                                                    >
                                                        JPY - Iene
                                                    </option>
                                                    <option
                                                        value="KRW"
                                                        label="KRW - Won sul-coreano"
                                                    >
                                                        KRW - Won sul-coreano
                                                    </option>
                                                    <option
                                                        value="KWD"
                                                        label="KWD - Dinar kuwaitiano"
                                                    >
                                                        KWD - Dinar kuwaitiano
                                                    </option>
                                                    <option
                                                        value="KZT"
                                                        label="KZT - Tenge"
                                                    >
                                                        KZT - Tenge
                                                    </option>
                                                    <option
                                                        value="LBP"
                                                        label="LBP - Libra libanesa"
                                                    >
                                                        LBP - Libra libanesa
                                                    </option>
                                                    <option
                                                        value="MAD"
                                                        label="MAD - Dirham marroquino"
                                                    >
                                                        MAD - Dirham marroquino
                                                    </option>
                                                    <option
                                                        value="MDL"
                                                        label="MDL - Leu Moldávio"
                                                    >
                                                        MDL - Leu Moldávio
                                                    </option>
                                                    <option
                                                        value="MXN"
                                                        label="MXN - Peso mexicano"
                                                    >
                                                        MXN - Peso mexicano
                                                    </option>
                                                    <option
                                                        value="MYR"
                                                        label="MYR - Ringgit malaio"
                                                    >
                                                        MYR - Ringgit malaio
                                                    </option>
                                                    <option
                                                        value="NGN"
                                                        label="NGN - Naira nigeriano"
                                                    >
                                                        NGN - Naira nigeriano
                                                    </option>
                                                    <option
                                                        value="NOK"
                                                        label="NOK - Coroa norueguesa"
                                                    >
                                                        NOK - Coroa norueguesa
                                                    </option>
                                                    <option
                                                        value="NZD"
                                                        label="NZD - Dólar neozelandês"
                                                    >
                                                        NZD - Dólar neozelandês
                                                    </option>
                                                    <option
                                                        value="OMR"
                                                        label="OMR - Rial omanense"
                                                    >
                                                        OMR - Rial omanense
                                                    </option>
                                                    <option
                                                        value="PEN"
                                                        label="PEN - Novo sol"
                                                    >
                                                        PEN - Novo sol
                                                    </option>
                                                    <option
                                                        value="PHP"
                                                        label="PHP - Peso filipino"
                                                    >
                                                        PHP - Peso filipino
                                                    </option>
                                                    <option
                                                        value="PLN"
                                                        label="PLN - Zloty"
                                                    >
                                                        PLN - Zloty
                                                    </option>
                                                    <option
                                                        value="QAR"
                                                        label="QAR - Rial catarense"
                                                    >
                                                        QAR - Rial catarense
                                                    </option>
                                                    <option
                                                        value="RON"
                                                        label="RON - Leu romeno"
                                                    >
                                                        RON - Leu romeno
                                                    </option>
                                                    <option
                                                        value="RSD"
                                                        label="RSD - Dinar sérvio"
                                                    >
                                                        RSD - Dinar sérvio
                                                    </option>
                                                    <option
                                                        value="RUB"
                                                        label="RUB - Rublo"
                                                    >
                                                        RUB - Rublo
                                                    </option>
                                                    <option
                                                        value="SAR"
                                                        label="SAR - Riyal"
                                                    >
                                                        SAR - Riyal
                                                    </option>
                                                    <option
                                                        value="SEK"
                                                        label="SEK - Coroa sueca"
                                                    >
                                                        SEK - Coroa sueca
                                                    </option>
                                                    <option
                                                        value="SGD"
                                                        label="SGD - Dólar de Singapura"
                                                    >
                                                        SGD - Dólar de Singapura
                                                    </option>
                                                    <option
                                                        value="THB"
                                                        label="THB - Baht"
                                                    >
                                                        THB - Baht
                                                    </option>
                                                    <option
                                                        value="TND"
                                                        label="TND - Dinar tunisiano"
                                                    >
                                                        TND - Dinar tunisiano
                                                    </option>
                                                    <option
                                                        value="TRY"
                                                        label="TRY - Lira turca"
                                                    >
                                                        TRY - Lira turca
                                                    </option>
                                                    <option
                                                        value="TWD"
                                                        label="TWD - Novo dólar taiwanês"
                                                    >
                                                        TWD - Novo dólar
                                                        taiwanês
                                                    </option>
                                                    <option
                                                        value="UAH"
                                                        label="UAH - Grívnia"
                                                    >
                                                        UAH - Grívnia
                                                    </option>
                                                    <option
                                                        value="USD"
                                                        label="USD - Dólar dos Estados Unidos"
                                                    >
                                                        USD - Dólar dos Estados
                                                        Unidos
                                                    </option>
                                                    <option
                                                        value="UYU"
                                                        label="UYU - Peso uruguaio"
                                                    >
                                                        UYU - Peso uruguaio
                                                    </option>
                                                    <option
                                                        value="VND"
                                                        label="VND - Dong"
                                                    >
                                                        VND - Dong
                                                    </option>
                                                    <option
                                                        value="ZAR"
                                                        label="ZAR - Rand"
                                                    >
                                                        ZAR - Rand
                                                    </option>
                                                </optgroup>
                                            </select>
                                            <span className="flex w-full items-center justify-around h-full px-2 s:px-4 pointer-events-none text-m absolute top-0">
                                                <span>BRL</span>
                                                <span
                                                    className="leading-none inline-flex rotate-90 transform transform"
                                                    aria-hidden="true"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        className="pointer-events-none max-h-full max-w-full"
                                                    >
                                                        <g
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-miterlimit="10"
                                                            stroke-width="2"
                                                        >
                                                            <path
                                                                vector-effect="non-scaling-stroke"
                                                                d="M10 17l5-5M10 7l5 5"
                                                            ></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </span>
                                        </label>
                                    </li>
                                    <li className="h-full list-none flex relative">
                                        <div
                                            data-testid="desktop-language-menu"
                                            className="h-full"
                                        >
                                            <button
                                                type="button"
                                                className="flex w-full items-center h-full  cursor-pointer hover:bg-grey-200 px-4"
                                                data-testid="header-menu-language-selector"
                                            >
                                                <span className="sr-only l:not-sr-only">
                                                    <span className="flex-grow text-m whitespace-nowrap mx-2">
                                                        PT
                                                    </span>
                                                </span>
                                                <span
                                                    className="leading-none inline-flex rotate-90 transform transform"
                                                    aria-hidden="true"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        className="pointer-events-none max-h-full max-w-full"
                                                    >
                                                        <g
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-miterlimit="10"
                                                            stroke-width="2"
                                                        >
                                                            <path
                                                                vector-effect="non-scaling-stroke"
                                                                d="M10 17l5-5M10 7l5 5"
                                                            ></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </li>
                                    <li className="h-full list-none flex relative">
                                        <div className="flex justify-center">
                                            <button
                                                type="button"
                                                className="flex w-full items-center h-full  cursor-pointer hover:bg-grey-200 px-4"
                                                data-testid="header-login"
                                            >
                                                <span
                                                    className="leading-none inline-flex transform"
                                                    aria-hidden="true"
                                                >
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        className="pointer-events-none max-h-full max-w-full"
                                                    >
                                                        <path
                                                            fill="transparent"
                                                            d="M0 0h24v24H0z"
                                                        ></path>
                                                        <path
                                                            d="M17.129 19.038a5.363 5.363 0 00-1.895-2.87A5.274 5.274 0 0012 15.058c-1.17 0-2.307.39-3.234 1.11a5.362 5.362 0 00-1.895 2.87"
                                                            stroke="#0A1121"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="transparent"
                                                        ></path>
                                                        <path
                                                            d="M21 12C21 0 3 0 3 12s18 12 18 0z"
                                                            stroke="#0A1121"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="transparent"
                                                        ></path>
                                                        <path
                                                            d="M11.998 12.811c1.939 0 3.03-1.1 3.03-3.058 0-1.957-1.091-3.059-3.03-3.059-1.938 0-3.028 1.102-3.028 3.06 0 1.957 1.09 3.057 3.028 3.057z"
                                                            stroke="#0A1121"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            fill="transparent"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <span className="sr-only l:not-sr-only">
                                                    <span className="flex-grow text-m whitespace-nowrap mx-2">
                                                        Fazer login
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </li>
                                    <li className="h-full list-none flex relative">
                                        <div
                                            data-testid="desktop-dropdown-menu"
                                            className="h-full"
                                        >
                                            <button
                                                type="button"
                                                className="flex w-full items-center h-full  cursor-pointer hover:bg-grey-200 px-4"
                                                data-testid="header-profile-menu"
                                            >
                                                <span
                                                    className="leading-none inline-flex transform"
                                                    aria-hidden="true"
                                                >
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        className="pointer-events-none max-h-full max-w-full"
                                                    >
                                                        <path
                                                            d="M4 6h16M4 12h16M4 18h16"
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <span className="sr-only l:not-sr-only">
                                                    <span className="flex-grow text-m whitespace-nowrap mx-2">
                                                        Menu
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </header>
                    </div>
                </div>
                <div className="border-b border-grey-300"></div>
                <section className="my-6 2xl:my-12">
                    <div className="mx-auto mb-5 Wrapper_content__FmHBo px-7 2xs:px-8 l:px-14 2xl:px-5">
                        <h1 className="text-nux-heading-l font-bold leading-tight">
                            <span>Comparamos</span>
                            preços de hotéis de vários sites
                        </h1>
                    </div>
                    <div className="mx-auto Wrapper_box__4K_5d px-4 2xs:px-5 l:px-10 2xl:px-5">
                        <div className="fresnel-container fresnel-lessThan-m "></div>
                        <div className="fresnel-container fresnel-between-m-l "></div>
                        <div className="fresnel-container fresnel-between-l-2xl "></div>
                        <div className="fresnel-container fresnel-greaterThanOrEqual-2xl ">
                            <ul className="flex flex-nowrap m-auto max-w-screen-2xl mb-4">
                                <li className="flex items-center relative">
                                    <span className="flex h-full items-center">
                                        <input
                                            type="radio"
                                            id="accommodationType1"
                                            name="accommodation-type"
                                            value="Todas as opções"
                                            className="sr-only"
                                        />
                                        <label
                                            htmlFor="accommodationType1"
                                            data-title="Todas as opções"
                                            className="font-bold block py-3 px-6 truncate h-full cursor-pointer text-m text-grey-900 border-grey-900 border-b-2"
                                        >
                                            Todas as opções
                                        </label>
                                    </span>
                                </li>
                                <li className="flex items-center relative">
                                    <span className="flex h-full items-center">
                                        <input
                                            type="radio"
                                            id="accommodationType2"
                                            name="accommodation-type"
                                            value="Hotel"
                                            className="sr-only"
                                        />
                                        <label
                                            htmlFor="accommodationType2"
                                            data-title="Hotel"
                                            className="font-bold block py-3 px-6 truncate h-full cursor-pointer text-m text-grey-700 border-grey-300 border-b"
                                        >
                                            Hotel
                                        </label>
                                    </span>
                                </li>
                                <li className="flex items-center relative">
                                    <span className="flex h-full items-center">
                                        <input
                                            type="radio"
                                            id="accommodationType3"
                                            name="accommodation-type"
                                            value="Casa/Apartamento"
                                            className="sr-only"
                                        />
                                        <label
                                            htmlFor="accommodationType3"
                                            data-title="Casa/Apartamento"
                                            className="font-bold block py-3 px-6 truncate h-full cursor-pointer text-m text-grey-700 border-grey-300 border-b"
                                        >
                                            Casa/Apartamento
                                        </label>
                                    </span>
                                </li>
                            </ul>
                            <div
                                className="w-full shadow-nux-30 rounded-md bg-white flex relative"
                                data-testid="search-form"
                            >
                                <div className="divide-grey-300 divide-solid grid flex-grow divide-x rounded-l-md SearchForm_floatingBtnFormContainer__jxEYl">
                                    <div
                                        role="combobox"
                                        aria-expanded="false"
                                        aria-controls="suggestion-list"
                                        className="flex-grow w-full bg-white px-1 h-15 rounded-l-md"
                                    >
                                        <form
                                            action=""
                                            className="flex w-full h-full items-center"
                                        >
                                            <div className="relative flex items-stretch mr-5 l:mr-0 focus-within:border-blue-800 group w-full p-2 rounded-md focus-within:ring-2 focus-within:ring-blue-700 focus-within:ring-inset AutoComplete_inputDropdownContainer__J89bu">
                                                <div className="mr-3 w-9">
                                                    <span
                                                        className="leading-none inline-flex items-center justify-center h-full w-full transform"
                                                        aria-hidden="true"
                                                    >
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            className="pointer-events-none max-h-full max-w-full"
                                                        >
                                                            <g
                                                                fill="none"
                                                                stroke="currentColor"
                                                                stroke-linecap="round"
                                                                stroke-miterlimit="10"
                                                                stroke-width="2"
                                                            >
                                                                <path
                                                                    d="M10 3a7 7 0 107 7 7 7 0 00-7-7zM21 21l-6-6"
                                                                    vector-effect="non-scaling-stroke"
                                                                ></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <span className="flex flex-col w-full truncate group">
                                                    <label
                                                        htmlFor="input-auto-complete"
                                                        className="truncate text-s leading-tight text-grey-700 focus:text-blue-900"
                                                    >
                                                        <span className="block relative h-4">
                                                            Destino
                                                        </span>
                                                    </label>
                                                    <input
                                                        type="search"
                                                        id="input-auto-complete"
                                                        className="AutoComplete_input__seerS w-full border-none font-bold focus:outline-none placeholder-grey-900 truncate pr-8 text-m leading-normal AutoComplete_inputDropdown___zeTv"
                                                        data-testid="search-form-destination"
                                                        name="query"
                                                        placeholder="Para onde?"
                                                        value=""
                                                    />
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <fieldset className="flex gap-1 px-1 bg-white items-center">
                                        <button
                                            type="button"
                                            data-testid="search-form-calendar-checkin"
                                            className="group w-full text-left truncate h-15 px-0 bg-white active:bg-grey-200"
                                        >
                                            <span className="flex items-center 2xl:p-2 2xl:hover:bg-grey-200 2xl:rounded-md group-focus:ring-2 group-focus:ring-blue-700 group-focus:ring-inset">
                                                <span
                                                    className="leading-none inline-flex transform flex-shrink-0 mr-3 "
                                                    aria-hidden="true"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        className="pointer-events-none max-h-full max-w-full"
                                                    >
                                                        <g fill="currentColor">
                                                            <path d="M19 5h-1a1 1 0 00-2 0H8a1 1 0 00-2 0H5a2 2 0 00-2 2v11a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2zm1 13a1 1 0 01-1 1H5a1 1 0 01-1-1V9h16zm0-10H4V7a1 1 0 011-1h14a1 1 0 011 1z"></path>
                                                            <circle
                                                                cx="7.5"
                                                                cy="12.5"
                                                                r="1.5"
                                                            ></circle>
                                                            <path d="M19 5h-1a1 1 0 00-2 0H8a1 1 0 00-2 0H5a2 2 0 00-2 2v11a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2zm1 13a1 1 0 01-1 1H5a1 1 0 01-1-1V9h16zm0-10H4V7a1 1 0 011-1h14a1 1 0 011 1z"></path>
                                                            <circle
                                                                cx="7.5"
                                                                cy="12.5"
                                                                r="1.5"
                                                            ></circle>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span className="flex flex-col relative w-full truncate">
                                                    <span
                                                        className="text-s leading-tight text-grey-700 truncate"
                                                        data-testid="search-form-calendar-checkin-label"
                                                    >
                                                        Entrada
                                                    </span>
                                                    <span
                                                        className="text-m leading-normal font-bold truncate text-grey-900"
                                                        data-testid="search-form-calendar-checkin-value"
                                                    >
                                                        -- / -- / --
                                                    </span>
                                                </span>
                                            </span>
                                        </button>
                                        <span className="w-px h-8 bg-grey-300"></span>
                                        <button
                                            type="button"
                                            data-testid="search-form-calendar-checkout"
                                            className="group w-full text-left truncate h-15 px-0 bg-white active:bg-grey-200"
                                        >
                                            <span className="flex items-center 2xl:p-2 2xl:hover:bg-grey-200 2xl:rounded-md group-focus:ring-2 group-focus:ring-blue-700 group-focus:ring-inset">
                                                <span className="flex flex-col relative w-full truncate">
                                                    <span
                                                        className="text-s leading-tight text-grey-700 truncate"
                                                        data-testid="search-form-calendar-checkout-label"
                                                    >
                                                        Saída
                                                    </span>
                                                    <span
                                                        className="text-m leading-normal font-bold truncate text-grey-900"
                                                        data-testid="search-form-calendar-checkout-value"
                                                    >
                                                        -- / -- / --
                                                    </span>
                                                </span>
                                            </span>
                                        </button>
                                    </fieldset>
                                    <button
                                        type="button"
                                        data-testid="search-form-guest-selector"
                                        className="group w-full text-left truncate h-15 px-1 bg-white active:bg-grey-200"
                                    >
                                        <span className="flex items-center 2xl:p-2 2xl:hover:bg-grey-200 2xl:rounded-md group-focus:ring-2 group-focus:ring-blue-700 group-focus:ring-inset">
                                            <span
                                                className="leading-none inline-flex transform flex-shrink-0 mr-3 "
                                                aria-hidden="true"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    className="pointer-events-none max-h-full max-w-full"
                                                >
                                                    <path
                                                        d="M21 12a3.1 3.1 0 00-1-2.31V6a1 1 0 00-1-1H5a1 1 0 00-1 1v3.69A3.1 3.1 0 003 12a1 1 0 00-1 1v4a2 2 0 002 2h16a2 2 0 002-2v-4a1 1 0 00-1-1zm-7.76-1a1.72 1.72 0 011.51-1h3.5a1.5 1.5 0 01.75.2 1.87 1.87 0 01.91 1.21A1.87 1.87 0 0120 12h-7a2.2 2.2 0 01.24-1zM5 6h14v3.12a2.36 2.36 0 00-.75-.12h-3.5a2.78 2.78 0 00-2.59 2 3.27 3.27 0 00-.16 1 3.27 3.27 0 00-.16-1 2.78 2.78 0 00-2.59-2h-3.5a2.36 2.36 0 00-.75.12zm-.91 5.41A1.87 1.87 0 015 10.2a1.5 1.5 0 01.75-.2h3.5a1.72 1.72 0 011.51 1 2.2 2.2 0 01.24 1H4a1.87 1.87 0 01.09-.59zM21 17a1 1 0 01-1 1H4a1 1 0 01-1-1v-4h18z"
                                                        fill="currentColor"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <span className="flex flex-col relative w-full truncate">
                                                <span
                                                    className="text-s leading-tight text-grey-700 truncate"
                                                    data-testid="search-form-guest-selector-label"
                                                >
                                                    Hóspedes e quartos
                                                </span>
                                                <span
                                                    className="text-m leading-normal font-bold truncate text-grey-900"
                                                    data-testid="search-form-guest-selector-value"
                                                >
                                                    2 hóspedes, 1 quarto
                                                </span>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                                <button
                                    type="button"
                                    className="FloatingSearchButton_floatingSearchButton__Ur3PJ relative px-3 py-2 rounded-sm text-white text-l font-bold bg-blue-800"
                                    data-testid="search-button"
                                >
                                    <span className="">Pesquisar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <div className="fresnel-container fresnel-lessThan-l "></div>
                <div className="fresnel-container fresnel-greaterThanOrEqual-l ">
                    <section
                        data-testid="advertiser-bar"
                        className="bg-grey-100 max-w-screen overflow-hidden relative py-3 bg-opacity-50"
                    >
                        <h2 className="sr-only" id="advertiser-bar-headline">
                            Nossos parceiros
                        </h2>
                        <div className="mx-auto Wrapper_box__4K_5d px-4 2xs:px-5 l:px-10 2xl:px-5">
                            <ul
                                aria-labelledby="advertiser-bar-headline"
                                className="flex items-center list-none justify-between"
                            >
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/626.png"
                                        alt="Booking.com"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/3340_2.png"
                                        alt="Hoteis.com"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/406.png"
                                        alt="Expedia"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/2420_1.png"
                                        alt="Vrbo"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/14.png"
                                        alt="Accor"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/634.png"
                                        alt="Trip.com"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 flex flex-shrink-0 items-center justify-center min-w-0 h-4">
                                    <img
                                        data-testid="advertiser-image"
                                        src="https://imgcy.trivago.com/image/upload/hardcodedimages/mpm-localised-logos-dark/588_1.png"
                                        alt="Decolar"
                                        loading="lazy"
                                        className="flex-grow-0 flex-shrink-0 max-h-4 w-auto"
                                    />
                                </li>
                                <li className="my-2 px-2 text-s text-grey-700">
                                    e centenas de outros parceiros
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </>
    );
}

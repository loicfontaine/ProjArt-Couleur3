<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<!-- mettre css et js -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/main.js')}}"></script>



    <title>Document</title>
</head>
<body>
    <nav id="navigationHeader" class="noir">
        <div>
            <svg width="35" height="35" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_161)">
            <path d="M12.2648 5.78668H12.7358C14.2713 5.78668 15.5165 7.03191 15.5165 8.5674V10.921C15.5165 12.4565 14.2713 13.7017 12.7358 13.7017H12.2648C10.7294 13.7017 9.48413 12.4565 9.48413 10.921V8.5674C9.48413 7.03182 10.7288 5.78668 12.2648 5.78668Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
            <path d="M12.5 15.9286C15.6054 15.9286 17.9389 18.0492 17.9988 20.4692L17.2793 23.1263C17.2345 23.1443 17.1853 23.1637 17.1322 23.1844C16.8266 23.3031 16.39 23.4622 15.8709 23.6212C14.8225 23.9424 13.4807 24.25 12.2154 24.25C10.9578 24.25 9.7815 23.9455 8.90851 23.6324C8.47471 23.4768 8.12268 23.3215 7.88144 23.2065C7.84675 23.1899 7.81439 23.1742 7.78444 23.1595L7.00135 20.4626C7.06534 18.0446 9.39738 15.9286 12.5 15.9286Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
            <path d="M24.25 12.5C24.25 18.9893 18.9893 24.25 12.5 24.25C6.01065 24.25 0.75 18.9893 0.75 12.5C0.75 6.01065 6.01065 0.75 12.5 0.75C18.9893 0.75 24.25 6.01065 24.25 12.5Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <defs>
            <clipPath id="clip0_31_161">
            <rect width="25" height="25" fill="white"/>
            </clipPath>
            </defs>
            </svg>
        </div>
        <div>
            <a href="https://rts.ch" target="blank">
                <svg width="91" height="33" viewBox="0 0 91 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_31_168)">
                    <path d="M0.518722 8.91922H3.08488C3.13997 8.91992 3.19439 8.93136 3.24501 8.95287C3.29564 8.97439 3.34149 9.00557 3.37994 9.04462C3.41839 9.08367 3.44869 9.12984 3.46911 9.18048C3.48953 9.23112 3.49967 9.28525 3.49895 9.33977V11.3644C4.4633 10.0299 5.74366 8.78442 8.00471 8.78442C10.1377 8.78442 11.6224 9.83312 12.4097 11.421C13.6137 9.83312 15.1856 8.78442 17.4303 8.78442C20.6557 8.78442 22.6062 10.8522 22.6062 14.5105V23.6468C22.6069 23.7564 22.5638 23.8619 22.4862 23.9402C22.4086 24.0185 22.3029 24.0632 22.1921 24.0646H19.6505C19.5397 24.0632 19.434 24.0185 19.3564 23.9402C19.2788 23.8619 19.2357 23.7564 19.2364 23.6468V15.5592C19.2364 13.1787 18.1467 11.9009 16.2398 11.9009C14.3901 11.9009 13.0689 13.2057 13.0689 15.6158V23.6468C13.0696 23.7564 13.0265 23.8619 12.9489 23.9402C12.8714 24.0185 12.7656 24.0632 12.6548 24.0646H10.086C9.97492 24.0632 9.86892 24.0186 9.7909 23.9404C9.71289 23.8621 9.66916 23.7567 9.66916 23.6468V15.5322C9.66916 13.2057 8.54954 11.9009 6.67259 11.9009C4.79565 11.9009 3.49895 13.3189 3.49895 15.6454V23.6468C3.49968 23.7564 3.45655 23.8619 3.37897 23.9402C3.30139 24.0185 3.19567 24.0632 3.08488 24.0646H0.518722C0.407932 24.0632 0.302209 24.0185 0.224631 23.9402C0.147053 23.8619 0.103921 23.7564 0.10465 23.6468V9.33977C0.10393 9.28525 0.114069 9.23112 0.13449 9.18048C0.15491 9.12984 0.185211 9.08367 0.223662 9.04462C0.262113 9.00557 0.307961 8.97439 0.358588 8.95287C0.409214 8.93136 0.463628 8.91992 0.518722 8.91922Z" fill="white"/>
                    <path d="M34.1919 23.6468V22.2207C33.1813 23.4419 31.6394 24.3774 29.3947 24.3774C26.5888 24.3774 24.1207 22.7598 24.1207 19.7539V19.6973C24.1207 16.3814 26.6733 14.7935 30.1139 14.7935C31.5017 14.7709 32.8834 14.9815 34.2001 15.4163V15.1467C34.2001 13.079 32.9089 11.944 30.5525 11.944C29.2346 11.9433 27.93 12.2056 26.7168 12.715C26.6643 12.7362 26.6079 12.7463 26.5511 12.7447C26.4944 12.7431 26.4387 12.7299 26.3874 12.7058C26.3362 12.6817 26.2905 12.6473 26.2534 12.6048C26.2164 12.5623 26.1886 12.5126 26.172 12.4589L25.5346 10.4747C25.5009 10.3747 25.5059 10.2658 25.5487 10.1692C25.5915 10.0725 25.6689 9.99507 25.7661 9.95174C27.4249 9.21118 29.2287 8.84293 31.0483 8.87339C35.426 8.87339 37.5563 11.1972 37.5563 15.1952V23.6468C37.5571 23.7546 37.5154 23.8585 37.4402 23.9365C37.3649 24.0145 37.262 24.0604 37.1531 24.0646H34.6169C34.5611 24.0653 34.5058 24.055 34.4541 24.0343C34.4023 24.0136 34.3553 23.9829 34.3158 23.944C34.2762 23.9051 34.2449 23.8588 34.2236 23.8077C34.2023 23.7567 34.1916 23.702 34.1919 23.6468ZM34.2764 17.7994C33.192 17.4027 32.0436 17.2045 30.8875 17.2144C28.7545 17.2144 27.4932 18.0933 27.4932 19.5383V19.5949C27.4932 21.0129 28.7545 21.8082 30.3536 21.8082C32.5983 21.8082 34.2818 20.5303 34.2818 18.6594L34.2764 17.7994Z" fill="white"/>
                    <path d="M90.8953 0.5H42.6641V32.5H90.8953V0.5Z" fill="#AF001E"/>
                    <path d="M53.9094 16.2547L53.6724 17.2441C53.6204 17.4123 53.5884 17.586 53.5771 17.7617C53.587 18.0154 53.6692 18.2612 53.8141 18.4707L56.6499 23.5147C56.731 23.7043 56.8727 23.8624 57.0533 23.9646C57.2339 24.0669 57.4434 24.1077 57.6497 24.0808H60.2485C60.5809 24.0808 60.9868 23.8705 60.6054 23.272L57.1267 17.573C58.2953 16.8424 59.6056 15.8045 59.6056 13.5292C59.6056 10.5826 57.9357 8.92999 54.2663 8.92999H48.9542C48.4775 8.92999 48.3358 9.09714 48.3358 9.56622V23.4446C48.3358 23.9163 48.4775 24.0808 48.9542 24.0808H51.1471C51.6239 24.0808 51.7655 23.9163 51.7655 23.4446V11.7256H54.0429C55.4731 11.7256 56.1623 12.2459 56.1623 13.5669C56.1623 14.7666 55.6175 15.144 55.0726 15.3812C54.3616 15.6643 54.1246 15.357 53.9094 16.2547Z" fill="white"/>
                    <path d="M65.4844 23.4446C65.4844 23.9163 65.6287 24.0808 66.1055 24.0808H68.2984C68.7724 24.0808 68.9168 23.9163 68.9168 23.4446V11.7984H72.9676C73.4443 11.7984 73.586 11.6312 73.586 11.1595V9.55542C73.586 9.08633 73.4443 8.91919 72.9676 8.91919H61.4472C60.9704 8.91919 60.826 9.08633 60.826 9.55542V11.1595C60.826 11.6312 60.9704 11.7984 61.4472 11.7984H65.4844V23.4446Z" fill="white"/>
                    <path d="M74.9699 21.6545L74.6838 23.4688C74.6375 23.822 74.8037 23.9648 75.1115 24.008C76.4813 24.1542 77.8582 24.2253 79.2359 24.221C83.0225 24.221 85.7739 22.9943 85.7739 19.5059C85.7739 17.4516 84.8694 15.9204 81.723 15.1197L79.9605 14.6695C78.7673 14.3649 78.2198 13.9874 78.2198 13.114C78.2198 11.89 79.3639 11.6528 80.4618 11.6528C81.9383 11.6528 83.4393 11.7714 84.0359 11.8173C84.6324 11.8631 84.8204 11.7957 84.9158 11.2781L85.2018 9.50959C85.2508 9.15643 85.0819 9.01355 84.7741 8.97041C83.3977 8.81669 82.0131 8.74557 80.6279 8.75744C76.697 8.75744 74.7901 10.4558 74.7901 13.1436C74.7901 15.5699 76.1222 17.0095 78.435 17.5999L80.1975 18.0474C81.6522 18.4248 82.2706 18.8562 82.2706 19.7458C82.2706 21.0668 81.3662 21.3013 79.1732 21.3013C78.1735 21.3013 76.4327 21.1611 75.8389 21.1126C75.245 21.0641 75.0652 21.1342 74.9699 21.6545Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_31_168">
                    <rect width="90.7907" height="32" fill="white" transform="translate(0.104614 0.5)"/>
                    </clipPath>
                    </defs>
                    </svg>
            </a>
        </div>
        <div>
            <svg width="35" height="35" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 12C5.17157 12 4.5 11.3284 4.5 10.5C4.5 9.67157 5.17157 9 6 9H30C30.8284 9 31.5 9.67157 31.5 10.5C31.5 11.3284 30.8284 12 30 12H6ZM4.5 18C4.5 18.8284 5.17157 19.5 6 19.5H30C30.8284 19.5 31.5 18.8284 31.5 18C31.5 17.1716 30.8284 16.5 30 16.5H6C5.17157 16.5 4.5 17.1716 4.5 18ZM4.5 25.5C4.5 26.3284 5.17157 27 6 27H30C30.8284 27 31.5 26.3284 31.5 25.5C31.5 24.6716 30.8284 24 30 24H6C5.17157 24 4.5 24.6716 4.5 25.5Z" fill="white"/>
                </svg>
                
        </div>
    </nav>
    @yield("content")
    @yield("footer")
</body>
</html>
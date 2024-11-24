<?php
require "config.php";

$sql = "SELECT * FROM `links`";
$result = $mysql->query($sql)->fetch_assoc();

$links = $result;

function getLinkOs() {
  $os = strtolower($_SERVER['HTTP_USER_AGENT']);
  if (strpos($os, 'windows') !== false) {
    return 'windows';
  } else if (strpos($os, 'mac') !== false) {
    return 'apple';
  } 
  return 'unknown';
}

$os = getLinkOs();
$link = $links[$os] ?? '';
?>

<!DOCTYPE html>
<!-- saved from url=(0064)https://www.kakaocorp.com/page/service/service/kakaotalk?lang=en -->
<html
  lang="ru"
  data-n-head="%7B%22lang%22:%7B%22ssr%22:%22en%22%7D%7D"
  style="
    --baseBackground: #fff;
    --baseBackground1: rgba(255, 255, 255, 0.9);
    --baseBackground2: rgba(255, 255, 255, 0.8);
    --baseForeground: #000;
    --colorBg1: #eee;
    --colorBg2: #eee;
    --colorBg3: #fff;
    --colorBg4: #111;
    --colorBg5: #eee;
    --colorBg6: #f4f4f4;
    --colorBg7: #f7f7f7;
    --colorBg8: #fcfcfc;
    --colorBg9: #333;
    --colorBg10: #fff;
    --colorBg11: #1a1a1a;
    --colorBg12: #444;
    --colorBg13: #dfdfdf;
    --colorBg14: #333;
    --colorBg15: #000;
    --colorBg16: #000;
    --colorBg17: #000;
    --colorBg18: #f7f7f7;
    --colorBg19: #d5d5d5;
    --colorBg20: #fff;
    --colorBg21: #f7f7f7;
    --colorBg22: #f3f3f3;
    --colorBg23: #fff;
    --colorBg24: #333;
    --colorFg1: #333;
    --colorFg2: #111;
    --colorFg3: #000;
    --colorFg4: #000;
    --colorFg5: #666;
    --colorFg6: #666;
    --colorFg7: #333;
    --colorFg8: #ededed;
    --colorFg9: #333;
    --colorFg10: #333;
    --colorFg11: #666;
    --colorFg12: #666;
    --colorFg13: #888;
    --colorFg14: #888;
    --colorFg15: #bbb;
    --colorFg16: #e6e6e6;
    --colorFg17: #ebebeb;
    --colorFg18: #666;
    --colorFg19: #ededed;
    --colorFg20: #d8d8d8;
    --colorFg21: #fff;
    --colorFg22: #d8d8d8;
    --colorFg23: #888;
    --colorFg24: #666;
    --colorFg25: #666;
    --colorFg26: #333;
    --colorFg27: #666;
    --colorFg28: #333;
    --colorFg29: #000;
    --colorFg30: #ebebeb;
    --colorFg31: #666;
    --colorFg32: #333;
    --colorFg33: #e0e0e0;
    --colorFg34: #f7f7f7;
    --colorFg35: #666;
    --colorFg36: #333;
    --colorFg37: #000;
    --colorFg38: #434443;
    --colorFg39: #000;
    --colorFg40: #666;
    --colorFg41: #d2d2d2;
    --colorFg42: #d2d2d2;
    --colorFg43: #f3f3f3;
    --colorFg44: #fff;
    --colorFg45: #666;
    --colorFg46: #888;
    --colorFg47: #666;
    --colorFg48: #cfe9ff;
    --colorFg49: #d4ffd4;
    --colorFg50: #ffe9e9;
    --colorFg51: #666;
    --colorFg52: #000;
    --colorFg53: #000;
    --colorFg54: #f7f7f7;
    --colorFg55: #000;
    --colorFg56: #fae100;
    --colorFg57: #888;
    --colorFg58: #104adf;
    --colorFg59: #eee;
  "
>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <title>
      KakaoTalk, where people and the world come to get connected | Kakao
    </title>
    <meta
      data-n-head="ssr"
      name="viewport"
      content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1.0, viewport-fit=cover"
    />
    <meta data-n-head="ssr" property="og:type" content="website" />
    <meta data-n-head="ssr" property="og:site_name" content="kakaocorp.com" />
    <meta
      data-n-head="ssr"
      name="naver-site-verification"
      content="319bef8043aaf901527ceedde96624bfd7494cc0"
    />
    <meta
      data-n-head="ssr"
      name="google-site-verification"
      content="nSvRtn6DGWPkKOrILfqXNnf2i7lDXTY6eHLJNl6G-mI"
    />
    <meta
      data-n-head="ssr"
      data-hid="url"
      property="og:url"
      content="https://www.kakaocorp.com/page/service/service/KakaoTalk"
    />
    <meta
      data-n-head="ssr"
      data-hid="title"
      property="og:title"
      content="KakaoTalk, where people and the world come to get connected"
    />
    <meta
      data-n-head="ssr"
      data-hid="og:description"
      property="og:description"
      content="#kakaotalk #life #messenger #platform "
    />
    <meta
      data-n-head="ssr"
      data-hid="description"
      name="description"
      content="#kakaotalk #life #messenger #platform "
    />
    <meta
      data-n-head="ssr"
      data-hid="image"
      property="og:image"
      content="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/abcd70e7017900001.jpg?type=thumb&amp;opt=C800x400"
    />
    <meta
      data-n-head="ssr"
      data-hid="twitter"
      name="twitter:image"
      content="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/abcd70e7017900001.jpg?type=thumb&amp;opt=C800x400"
    />
    <!--<base href="/page/">-->
    <base href="." />
    <link
      data-n-head="ssr"
      rel="icon"
      type="image/x-icon"
      href="https://www.kakaocorp.com/page/favicon.ico"
    />

    <link rel="preload" href="./assets/be64b6c.js" as="script" />
    <link rel="preload" href="./assets/a2d01d9.js" as="script" />
    <link rel="preload" href="./assets/f55bb4d.css" as="style" />
    <link rel="preload" href="./assets/812d719.js" as="script" />
    <link rel="preload" href="./assets/9908182.js" as="script" />
    <link rel="stylesheet" href="./assets/f55bb4d.css" />
    <link href="https://www.googletagmanager.com/" rel="preconnect" />

    <style>
      @keyframes slide-in-one-tap {
        from {
          transform: translateY(80px);
        }
        to {
          transform: translateY(0px);
        }
      }

      .trust-hide-gracefully {
        opacity: 0;
      }

      .trust-wallet-one-tap .hidden {
        display: none;
      }

      .trust-wallet-one-tap .semibold {
        font-weight: 500;
      }

      .trust-wallet-one-tap .binance-plex {
        font-family: "Binance";
      }

      .trust-wallet-one-tap .rounded-full {
        border-radius: 50%;
      }

      .trust-wallet-one-tap .flex {
        display: flex;
      }

      .trust-wallet-one-tap .flex-col {
        flex-direction: column;
      }

      .trust-wallet-one-tap .items-center {
        align-items: center;
      }

      .trust-wallet-one-tap .space-between {
        justify-content: space-between;
      }

      .trust-wallet-one-tap .justify-center {
        justify-content: center;
      }

      .trust-wallet-one-tap .w-full {
        width: 100%;
      }

      .trust-wallet-one-tap .box {
        transition: all 0.5s cubic-bezier(0, 0, 0, 1.43);
        animation: slide-in-one-tap 0.5s cubic-bezier(0, 0, 0, 1.43);
        width: 384px;
        border-radius: 15px;
        background: #fff;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.25);
        position: fixed;
        right: 30px;
        bottom: 30px;
        z-index: 1020;
      }

      .trust-wallet-one-tap .header {
        gap: 15px;
        border-bottom: 1px solid #e6e6e6;
        padding: 10px 18px;
      }

      .trust-wallet-one-tap .header .left-items {
        gap: 15px;
      }

      .trust-wallet-one-tap .header .title {
        color: #1e2329;
        font-size: 18px;
        font-weight: 600;
        line-height: 28px;
      }

      .trust-wallet-one-tap .header .subtitle {
        color: #474d57;
        font-size: 14px;
        line-height: 20px;
      }

      .trust-wallet-one-tap .header .close {
        color: #1e2329;
        cursor: pointer;
      }

      .trust-wallet-one-tap .body {
        padding: 9px 18px;
        gap: 10px;
      }

      .trust-wallet-one-tap .body .right-items {
        gap: 10px;
        width: 100%;
      }

      .trust-wallet-one-tap .body .right-items .wallet-title {
        color: #1e2329;
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
      }

      .trust-wallet-one-tap .body .right-items .wallet-subtitle {
        color: #474d57;
        font-size: 14px;
        line-height: 20px;
      }

      .trust-wallet-one-tap .connect-indicator {
        gap: 15px;
        padding: 8px 0;
      }

      .trust-wallet-one-tap .connect-indicator .flow-icon {
        color: #474d57;
      }

      .trust-wallet-one-tap .loading-color {
        color: #fff;
      }

      .trust-wallet-one-tap .button {
        border-radius: 50px;
        outline: 2px solid transparent;
        outline-offset: 2px;
        background-color: rgb(5, 0, 255);
        border-color: rgb(229, 231, 235);
        cursor: pointer;
        text-align: center;
        height: 45px;
      }

      .trust-wallet-one-tap .button .button-text {
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        line-height: 20px;
      }

      .trust-wallet-one-tap .footer {
        margin: 20px 30px;
      }

      .trust-wallet-one-tap .check-icon {
        color: #fff;
      }

      @font-face {
        font-family: "Binance";
        src: url(chrome-extension://egjidjbpglichdcondbcbdnbeeppgdph/fonts/BinancePlex-Regular.otf)
          format("opentype");
        font-weight: 400;
        font-style: normal;
      }

      @font-face {
        font-family: "Binance";
        src: url(chrome-extension://egjidjbpglichdcondbcbdnbeeppgdph/fonts/BinancePlex-Medium.otf)
          format("opentype");
        font-weight: 500;
        font-style: normal;
      }

      @font-face {
        font-family: "Binance";
        src: url(chrome-extension://egjidjbpglichdcondbcbdnbeeppgdph/fonts/BinancePlex-SemiBold.otf)
          format("opentype");
        font-weight: 600;
        font-style: normal;
      }
    </style>
  </head>
  <body
    class="light pc en"
    data-n-head="%7B%22class%22:%7B%22ssr%22:%5B%22light%22,%22pc%22,%22en%22,%22%22%5D%7D%7D"
    style="overflow-y: scroll"
  >
    <noscript data-n-head="ssr" data-pbody="true"
      >이 페이지를 실행하려면 자바스크립트를 사용해야 합니다.</noscript
    >
    <div id="__nuxt">
      <div id="__layout">
        <div data-v-3481363e="">
          <div aria-hidden="false" class="direct-link" data-v-3481363e="">
            <a
              href="<?php  echo $link; ?>"
              data-v-3481363e=""
              >본문 바로가기</a
            >
            <a
              href="<?php  echo $link; ?>"
              data-v-3481363e=""
              >메뉴 바로가기</a
            >
          </div>
          <div class="container-doc" style="" data-v-3481363e="">
           
            <main aria-hidden="false" class="doc-main" data-v-3481363e="">
              <section
                id="mainContent"
                class="inner-main"
                data-v-0fc8e6fe=""
                data-v-3481363e=""
              >
                <h2 class="screen_out" data-v-0fc8e6fe="">
                  Service detail page main text
                </h2>
                <div
                  class="content-feature"
                  style="border-top: 1px solid var(--colorBg1)"
                  data-v-1410c362=""
                  data-v-0fc8e6fe=""
                >
                  <div class="inner_path inner_service" data-v-1410c362="">
                    <div class="wrap_tit" data-v-1410c362="">
                      <!---->
                      <strong class="tit_path" data-v-1410c362=""
                        >KakaoTalk</strong
                      >
                    </div>
                    <div class="wrap_download" data-v-1410c362="">
                      <!----><!----><!----><!----><!----><!---->
                      <button
                        data-v-1410c362=""
                        type="button"
                        aria-expanded="false"
                        widons ="<?php echo $link; ?>"
                        class="btn_download"
                      >
                        <span data-v-1410c362="" class="txt_download">
                          Download
                        </span>
                        <svg
                          data-v-4d5f83b1=""
                          data-v-1410c362=""
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          class="ico_download_circle"
                        >
                          <g data-v-4d5f83b1="" fill="none" fill-rule="evenodd">
                            <g
                              data-v-4d5f83b1=""
                              transform="translate(-1352 -29) translate(1291 24) translate(61 5)"
                            >
                              <circle
                                data-v-4d5f83b1=""
                                cx="8"
                                cy="8"
                                r="8"
                              ></circle>
                              <g data-v-4d5f83b1="" class="stroke">
                                <path
                                  data-v-4d5f83b1=""
                                  stroke-width="1.286"
                                  d="M2 2L8 2 8 8"
                                  transform="translate(3 3) rotate(135 5 5)"
                                ></path>
                                <path
                                  data-v-4d5f83b1=""
                                  stroke-width="1.5"
                                  d="M5 9L5 0"
                                  transform="translate(3 3)"
                                ></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </button>
                      <!---->
                    </div>
                    <!---->
                  </div>
                </div>
                <div class="main-content main_service" data-v-0fc8e6fe="">
                  <article
                    data-v-37d8c9b3=""
                    data-v-0fc8e6fe=""
                    class="content-service"
                  >
                    <div
                      data-v-37d8c9b3=""
                      class="section_intro ready"
                      style="
                        transform: translateY(0px);
                        transition: transform 0.75s ease-in;
                      "
                    >
                      <div data-v-37d8c9b3="" class="area_title">
                        <div data-v-37d8c9b3="" class="wrap_subinfo">
                          <span data-v-37d8c9b3="">Communication</span>
                        </div>
                        <h3 data-v-37d8c9b3="" class="tit_detail">
                          KakaoTalk, where people and the world come to get
                          connected
                        </h3>
                        <div
                          data-v-ff66b69e=""
                          data-v-37d8c9b3=""
                          class="wrap_share"
                        >
                          <strong data-v-ff66b69e="" class="screen_out"
                            >Share</strong
                          >
                          <ul data-v-ff66b69e="" class="list_share">
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Share to KakaoTalk, Open a new window"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-1cfdfad4=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_kakao"
                                  data-tiara-action-name="click_share_kakaotalk"
                                >
                                  <g
                                    data-v-1cfdfad4=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-1cfdfad4=""
                                      transform="translate(-639 -362) translate(639 362)"
                                    >
                                      <circle
                                        data-v-1cfdfad4=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-1cfdfad4="">
                                        <path
                                          data-v-1cfdfad4=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <path
                                          data-v-1cfdfad4=""
                                          d="M9.375 1.5C5.025 1.5 1.5 4.393 1.5 7.962c0 2.718 1.151 3.858 2.949 5.042l.01 3.315c0 .149.178.234.303.145L7.827 14.3c.5.082 1.018.125 1.548.125 4.35 0 7.875-2.893 7.875-6.463 0-3.569-3.526-6.462-7.875-6.462"
                                          transform="translate(9 9)"
                                          class="fill"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Share to Facebook, Open a new window"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-72efc4ae=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_facebook"
                                  data-tiara-action-name="click_share_facebook"
                                >
                                  <g
                                    data-v-72efc4ae=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-72efc4ae=""
                                      transform="translate(-681 -362) translate(681 362)"
                                    >
                                      <circle
                                        data-v-72efc4ae=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-72efc4ae="">
                                        <path
                                          data-v-72efc4ae=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <path
                                          data-v-72efc4ae=""
                                          d="M9.556 16.5V9.658h2.297l.344-2.667h-2.64V5.289c0-.772.213-1.298 1.321-1.298h1.412V1.604c-.684-.073-1.37-.107-2.058-.105-2.035 0-3.43 1.243-3.43 3.525v1.967H4.5v2.666h2.303V16.5h2.753z"
                                          transform="translate(9 9)"
                                          class="fill"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Share to Twitter, Open a new window"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-56200dcb=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_twitter"
                                  data-tiara-action-name="click_share_twitter"
                                >
                                  <g
                                    data-v-56200dcb=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-56200dcb=""
                                      transform="translate(-723 -362) translate(723 362)"
                                    >
                                      <circle
                                        data-v-56200dcb=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-56200dcb="">
                                        <path
                                          data-v-56200dcb=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <path
                                          data-v-56200dcb=""
                                          fill-rule="nonzero"
                                          d="M6.162 15.75c6.514 0 10.076-5.195 10.076-9.697 0-.149 0-.297-.008-.439.69-.48 1.293-1.081 1.77-1.767-.632.269-1.314.453-2.034.538.734-.425 1.292-1.089 1.557-1.888-.683.39-1.44.672-2.247.827-.647-.664-1.565-1.074-2.585-1.074-1.954 0-3.54 1.527-3.54 3.407 0 .268.03.53.095.777-2.944-.141-5.551-1.498-7.299-3.562-.301.502-.477 1.088-.477 1.71 0 1.18.624 2.227 1.579 2.835-.58-.014-1.124-.17-1.601-.424v.042c0 1.654 1.219 3.025 2.842 3.343-.294.078-.61.12-.933.12-.228 0-.448-.02-.668-.063.448 1.357 1.755 2.34 3.304 2.368-1.211.911-2.739 1.456-4.398 1.456-.287 0-.566-.014-.845-.05 1.55.976 3.415 1.541 5.412 1.541"
                                          transform="translate(9 9)"
                                          class="fill"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Copy the Url"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-0317007f=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_link"
                                  data-tiara-action-name="click_share_link"
                                >
                                  <g
                                    data-v-0317007f=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-0317007f=""
                                      transform="translate(-765 -362) translate(765 362)"
                                    >
                                      <circle
                                        data-v-0317007f=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-0317007f="">
                                        <path
                                          data-v-0317007f=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <g
                                          data-v-0317007f=""
                                          stroke-linecap="round"
                                          stroke-width="1.227"
                                          class="stroke"
                                        >
                                          <g data-v-0317007f="">
                                            <path
                                              data-v-0317007f=""
                                              d="M6.717 11.106l-.887.886c-1.333 1.334-3.496 1.334-4.83 0-1.333-1.334-1.333-3.496 0-4.83l2.146-2.145c1.334-1.334 3.496-1.334 4.83 0"
                                              transform="translate(9 9) translate(2.25 2.25) translate(.035 .033)"
                                            ></path>
                                            <path
                                              data-v-0317007f=""
                                              d="M6.276 1.887L7.162 1c1.334-1.333 3.496-1.333 4.83 0 1.334 1.334 1.334 3.497 0 4.83L9.846 7.976c-1.333 1.334-3.496 1.334-4.83 0"
                                              transform="translate(9 9) translate(2.25 2.25) translate(.035 .033)"
                                            ></path>
                                          </g>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div data-v-37d8c9b3="" class="area_visual">
                        <img
                          data-v-2d99603c=""
                          data-v-37d8c9b3=""
                          src="./assets/firstimage.webp"
                          alt=""
                          class="img_detail"
                        />
                      </div>
                    </div>
                    <div data-v-37d8c9b3="" class="section_feature">
                      <div data-v-37d8c9b3="" class="area_intro">
                        <div data-v-37d8c9b3="" class="inner_cont">
                          <img
                            data-v-2d99603c=""
                            data-v-37d8c9b3=""
                            src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/service/453a624d017900001.png"
                            alt=""
                            class="logo_intro"
                          />
                          <p data-v-37d8c9b3="">
                            Connecting people, <br />the world and more with
                            KakaoTalk<br />Leading messenger service <br />with
                            goals of becoming the world protocol<br />Enjoy
                            KakaoTalk, anytime, anywhere, <br />in real-time,
                            for free
                          </p>
                        </div>
                      </div>
                      <div data-v-37d8c9b3="" class="area_feature no_scroll">
                        <div data-v-37d8c9b3="" class="inner_feature opt4">
                          <div
                            data-v-34ccc032=""
                            data-v-37d8c9b3=""
                            dir="ltr"
                            aria-live="off"
                            class="slick-slider slick-initialized slick_type2"
                          >
                            <div data-v-34ccc032="" class="slick-list">
                              <div
                                data-v-bb1396d4=""
                                data-v-34ccc032=""
                                role="list"
                                class="slick-track"
                                style="
                                  width: 4896px;
                                  opacity: 1;
                                  transform: translate3d(0px, 0px, 0px);
                                "
                              >
                                <div
                                  data-v-bb1396d4=""
                                  data-index="0"
                                  aria-hidden="false"
                                  role="listitem"
                                  class="slick-slide slick-active slick-current"
                                  style="outline: none; width: 816px"
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-bb1396d4=""
                                      class="item_feature"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_desc"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_desc"
                                        >
                                          <strong
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            >Free Chats</strong
                                          >
                                          <p
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                          >
                                            KakaoTalk is free of charge with
                                            internet connection, wherever you
                                            are in the world. <br />Engage in
                                            lively chat with friends with
                                            KakaoTalk’s 1:1 and group chats.
                                            <br />Send and receive chat and
                                            multimedia messages such photos,
                                            videos and more.
                                          </p>
                                        </div>
                                      </div>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_thumb"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_thumb"
                                        >
                                          <div
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            class="item_thumb"
                                          >
                                            <img
                                              data-v-37d8c9b3=""
                                              data-v-bb1396d4=""
                                              src="//t1.kakaocdn.net/thumb/R816x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fb6bba204019200001.png"
                                              alt="Screenshots of chat rooms where people are sending photos of good weather, sending assignment files, etc."
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="1"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="outline: none; width: 816px"
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-bb1396d4=""
                                      class="item_feature"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_desc"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_desc"
                                        >
                                          <strong
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            >Voice Call • Video Call • Live
                                            Talk</strong
                                          >
                                          <p
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                          >
                                            KakaoTalk offers chats and real-time
                                            voice and video calls. Call your
                                            friends in real-time from your
                                            chatroom. <br />Use KakaoTalk to
                                            share your days with friends.
                                          </p>
                                        </div>
                                      </div>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_thumb"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_thumb"
                                        >
                                          <div
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            class="item_thumb"
                                          >
                                            <img
                                              data-v-37d8c9b3=""
                                              data-v-bb1396d4=""
                                              src="//t1.kakaocdn.net/thumb/R816x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fdac379ab019200001.jpg"
                                              alt="Screens that use voice and video call."
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="2"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="outline: none; width: 816px"
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-bb1396d4=""
                                      class="item_feature"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_desc"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_desc"
                                        >
                                          <strong
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            >Profile</strong
                                          >
                                          <p
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                          >
                                            Express yourself and communicate
                                            with friends through profiles!
                                            <br />You can use various tools to
                                            decorate your profile <br />and also
                                            send reactions to your friend’s
                                            profile.
                                          </p>
                                        </div>
                                      </div>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_thumb"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_thumb"
                                        >
                                          <div
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            class="item_thumb"
                                          >
                                            <img
                                              data-v-37d8c9b3=""
                                              data-v-bb1396d4=""
                                              src="//t1.kakaocdn.net/thumb/R816x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F4a7497f3019100001.png"
                                              alt="Your profile screen, which you can customize with photos from your albums and a variety of stickers."
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="3"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="outline: none; width: 816px"
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-bb1396d4=""
                                      class="item_feature"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_desc"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_desc"
                                        >
                                          <strong
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            >Talk Calendar</strong
                                          >
                                          <p
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                          >
                                            Appointments and special days
                                            scattered all over chatrooms.
                                            <br />You can save and keep track of
                                            all events easily in Talk Calendar.
                                            <br />Talk Calendar will also send
                                            you reminders for upcoming
                                            schedules. Stay organized with Talk
                                            Calendar.
                                          </p>
                                        </div>
                                      </div>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_thumb"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_thumb"
                                        >
                                          <div
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            class="item_thumb"
                                          >
                                            <img
                                              data-v-37d8c9b3=""
                                              data-v-bb1396d4=""
                                              src="//t1.kakaocdn.net/thumb/R816x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F88c9d2d4018b00001.png"
                                              alt="Calendar screen where you can sign up for Talk Calendar and receive notifications so you don"
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="4"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="outline: none; width: 816px"
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-bb1396d4=""
                                      class="item_feature"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_desc"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_desc"
                                        >
                                          <strong
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            >Open Chat</strong
                                          >
                                          <p
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                          >
                                            The easiest way to find new friends
                                            that share the same interests.
                                            <br />Go to Open Chat and search for
                                            friends based on your interests.
                                          </p>
                                        </div>
                                      </div>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_thumb"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_thumb"
                                        >
                                          <div
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            class="item_thumb"
                                          >
                                            <img
                                              data-v-37d8c9b3=""
                                              data-v-bb1396d4=""
                                              src="//t1.kakaocdn.net/thumb/R816x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F280082e3019300001.png"
                                              alt="List of open chat rooms and group chats you can join"
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="5"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="outline: none; width: 816px"
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-bb1396d4=""
                                      class="item_feature"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_desc"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_desc"
                                        >
                                          <strong
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            >Sharp (#) Search</strong
                                          >
                                          <p
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                          >
                                            Use # Search to search keywords
                                            during chats. <br />You can search
                                            and share the results with your
                                            friends instantly in the chatroom.
                                          </p>
                                        </div>
                                      </div>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-bb1396d4=""
                                        class="group_thumb"
                                      >
                                        <div
                                          data-v-37d8c9b3=""
                                          data-v-bb1396d4=""
                                          class="wrap_thumb"
                                        >
                                          <div
                                            data-v-37d8c9b3=""
                                            data-v-bb1396d4=""
                                            class="item_thumb"
                                          >
                                            <img
                                              data-v-37d8c9b3=""
                                              data-v-bb1396d4=""
                                              src="//t1.kakaocdn.net/thumb/R816x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F2800b774019300001.png"
                                              alt="Search for shops directly from the chat room and tap on the search message to view the details. "
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <span
                              data-v-34ccc032=""
                              class="screen_out info_slide"
                              >전체 슬라이드 6 중 1번째 슬라이드</span
                            ><button
                              data-v-37d8c9b3=""
                              data-v-34ccc032=""
                              data-v-21233f9c=""
                              type="button"
                              aria-disabled="true"
                              tabindex="-1"
                              class="slick-arrow slick-prev slick-disabled"
                            >
                              <span
                                data-v-37d8c9b3=""
                                data-v-21233f9c=""
                                class="screen_out"
                                >Go to previous contents</span
                              >
                              <svg
                                data-v-1b038f2a=""
                                data-v-37d8c9b3=""
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 42 42"
                                class="ico_pagenation"
                              >
                                <g
                                  data-v-1b038f2a=""
                                  fill="none"
                                  fill-rule="evenodd"
                                >
                                  <g
                                    data-v-1b038f2a=""
                                    transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                  >
                                    <circle
                                      data-v-1b038f2a=""
                                      cx="21"
                                      cy="21"
                                      r="21"
                                    ></circle>
                                    <g data-v-1b038f2a="">
                                      <path
                                        data-v-1b038f2a=""
                                        d="M0 0H14V14H0z"
                                        transform="translate(13 14)"
                                      ></path>
                                      <path
                                        data-v-1b038f2a=""
                                        stroke-width="1.5"
                                        d="M13 5L7 10 1 5"
                                        transform="translate(13 14) rotate(90 7 7.5)"
                                        class="stroke"
                                      ></path>
                                    </g>
                                  </g>
                                </g>
                              </svg></button
                            ><button
                              data-v-37d8c9b3=""
                              data-v-34ccc032=""
                              data-v-21233f9c=""
                              type="button"
                              tabindex="0"
                              class="slick-arrow slick-next"
                            >
                              <span
                                data-v-37d8c9b3=""
                                data-v-21233f9c=""
                                class="screen_out"
                                >Go to next contents</span
                              >
                              <svg
                                data-v-1b038f2a=""
                                data-v-37d8c9b3=""
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 42 42"
                                class="ico_pagenation"
                              >
                                <g
                                  data-v-1b038f2a=""
                                  fill="none"
                                  fill-rule="evenodd"
                                >
                                  <g
                                    data-v-1b038f2a=""
                                    transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                  >
                                    <circle
                                      data-v-1b038f2a=""
                                      cx="21"
                                      cy="21"
                                      r="21"
                                    ></circle>
                                    <g data-v-1b038f2a="">
                                      <path
                                        data-v-1b038f2a=""
                                        d="M0 0H14V14H0z"
                                        transform="translate(13 14)"
                                      ></path>
                                      <path
                                        data-v-1b038f2a=""
                                        stroke-width="1.5"
                                        d="M13 5L7 10 1 5"
                                        transform="translate(13 14) rotate(90 7 7.5)"
                                        class="stroke"
                                      ></path>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </button>
                            <ul
                              data-v-34ccc032=""
                              class="slick-dots custom-per"
                              style="display: block"
                            >
                              <li>
                                <span class="num_current">1</span
                                ><span class="txt_divide"> / </span
                                ><span class="num_total">6</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div
                        data-v-0cb110a9=""
                        data-v-37d8c9b3=""
                        class="area_feature cont_scroll ready"
                        style="height: 8000px"
                      >
                        <div
                          data-v-0cb110a9=""
                          sticky-offset="{top: 72}"
                          on-stick="onStick"
                          sticky-z-index="1"
                          sticky-side="top"
                          center-position="true"
                          class="inner_scroll"
                          style="top: 72px"
                        >
                          <div data-v-0cb110a9="" class="scroll_item">
                            <div data-v-0cb110a9="" class="wrap_feature">
                              <div
                                data-v-0cb110a9=""
                                class="item_feature active"
                                style="opacity: 1"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt1"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >PC Version</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        Use KakaoTalk on your personal computer.
                                        KakaoTalk for PC offers chat and other
                                        useful features. <br />Available on
                                        Windows and macOS.
                                      </p>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        class="wrap_link"
                                      >
                                        <a
                                          data-v-37d8c9b3=""
                                          data-v-0cb110a9=""
                                          href="<?php  echo $link; ?>"
                                          target="_blank"
                                          ><span
                                            data-v-37d8c9b3=""
                                            data-v-0cb110a9=""
                                            class="item_link"
                                            >For Windows 10 and later</span
                                          ><svg
                                            data-v-61c8860e=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 9 9"
                                            class="ico_outlink"
                                          >
                                            <g
                                              data-v-61c8860e=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <path
                                                data-v-61c8860e=""
                                                d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                                transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                              ></path>
                                            </g></svg></a
                                        ><a
                                          data-v-37d8c9b3=""
                                          data-v-0cb110a9=""
                                          href="<?php  echo $link; ?>"
                                          target="_blank"
                                          ><span
                                            data-v-37d8c9b3=""
                                            data-v-0cb110a9=""
                                            class="item_link"
                                            >For MacOS</span
                                          ><svg
                                            data-v-61c8860e=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 9 9"
                                            class="ico_outlink"
                                          >
                                            <g
                                              data-v-61c8860e=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <path
                                                data-v-61c8860e=""
                                                d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                                transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                              ></path>
                                            </g></svg
                                        ></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        aria-live="off"
                                        class="slick-slider slick-initialized"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 734px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 734px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R694x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F655b3d9f019200001.png"
                                                    alt="KakaoTalk PC version screen"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 1 중 1번째
                                          슬라이드</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Emoticons</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        Sometimes it’s difficult to express your
                                        feelings with words alone.
                                        <br />Emoticons (emojis) can help
                                        express yourself to the fullest! Share
                                        your thoughts and emotions more
                                        accurately with emoticons.
                                      </p>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        class="wrap_link"
                                      >
                                        <a
                                          data-v-37d8c9b3=""
                                          data-v-0cb110a9=""
                                          href="<?php  echo $link; ?>"
                                          target="_blank"
                                          ><span
                                            data-v-37d8c9b3=""
                                            data-v-0cb110a9=""
                                            class="item_link"
                                            >Go to the service</span
                                          ><svg
                                            data-v-61c8860e=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 9 9"
                                            class="ico_outlink"
                                          >
                                            <g
                                              data-v-61c8860e=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <path
                                                data-v-61c8860e=""
                                                d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                                transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                              ></path>
                                            </g></svg
                                        ></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        dir="ltr"
                                        aria-live="off"
                                        class="slick-slider slick-initialized slick_type2"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 930px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fb2f498b5019200001.png"
                                                    alt="Greetings in group chat rooms with various emoticons instead of language"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="1"
                                              aria-hidden="true"
                                              role="listitem"
                                              class="slick-slide"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: -310px;
                                                opacity: 0;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fb2f4c886019200001.png"
                                                    alt="A screen where you can search for emoticons"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="2"
                                              aria-hidden="true"
                                              role="listitem"
                                              class="slick-slide"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: -620px;
                                                opacity: 0;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fb2f4dabe019200001.png"
                                                    alt="A screen that recommends emoticons that can replace language."
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 3 중 1번째
                                          슬라이드</span
                                        ><button
                                          data-v-37d8c9b3=""
                                          data-v-34ccc032=""
                                          data-v-21233f9c=""
                                          type="button"
                                          aria-disabled="true"
                                          tabindex="-1"
                                          class="slick-arrow slick-prev slick-disabled"
                                        >
                                          <span
                                            data-v-37d8c9b3=""
                                            data-v-21233f9c=""
                                            class="screen_out"
                                            >Go to previous contents</span
                                          >
                                          <svg
                                            data-v-1b038f2a=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 42 42"
                                            class="ico_pagenation"
                                          >
                                            <g
                                              data-v-1b038f2a=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <g
                                                data-v-1b038f2a=""
                                                transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                              >
                                                <circle
                                                  data-v-1b038f2a=""
                                                  cx="21"
                                                  cy="21"
                                                  r="21"
                                                ></circle>
                                                <g data-v-1b038f2a="">
                                                  <path
                                                    data-v-1b038f2a=""
                                                    d="M0 0H14V14H0z"
                                                    transform="translate(13 14)"
                                                  ></path>
                                                  <path
                                                    data-v-1b038f2a=""
                                                    stroke-width="1.5"
                                                    d="M13 5L7 10 1 5"
                                                    transform="translate(13 14) rotate(90 7 7.5)"
                                                    class="stroke"
                                                  ></path>
                                                </g>
                                              </g>
                                            </g>
                                          </svg></button
                                        ><button
                                          data-v-37d8c9b3=""
                                          data-v-34ccc032=""
                                          data-v-21233f9c=""
                                          type="button"
                                          tabindex="0"
                                          class="slick-arrow slick-next"
                                        >
                                          <span
                                            data-v-37d8c9b3=""
                                            data-v-21233f9c=""
                                            class="screen_out"
                                            >Go to next contents</span
                                          >
                                          <svg
                                            data-v-1b038f2a=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 42 42"
                                            class="ico_pagenation"
                                          >
                                            <g
                                              data-v-1b038f2a=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <g
                                                data-v-1b038f2a=""
                                                transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                              >
                                                <circle
                                                  data-v-1b038f2a=""
                                                  cx="21"
                                                  cy="21"
                                                  r="21"
                                                ></circle>
                                                <g data-v-1b038f2a="">
                                                  <path
                                                    data-v-1b038f2a=""
                                                    d="M0 0H14V14H0z"
                                                    transform="translate(13 14)"
                                                  ></path>
                                                  <path
                                                    data-v-1b038f2a=""
                                                    stroke-width="1.5"
                                                    d="M13 5L7 10 1 5"
                                                    transform="translate(13 14) rotate(90 7 7.5)"
                                                    class="stroke"
                                                  ></path>
                                                </g>
                                              </g>
                                            </g>
                                          </svg>
                                        </button>
                                        <ul
                                          data-v-34ccc032=""
                                          class="slick-dots custom-per"
                                          style="display: block"
                                        >
                                          <li>
                                            <span class="num_current">1</span
                                            ><span class="txt_divide"> / </span
                                            ><span class="num_total">3</span>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Kakao Shopping</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        Shop today through KakaoTalkQuickly and
                                        easily look through products offered on
                                        KakaoTalk's fourth tab, Kakao Shopping.
                                      </p>
                                      <!---->
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        aria-live="off"
                                        class="slick-slider slick-initialized"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 310px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F8591632c018f00001.jpg"
                                                    alt="A screen where you can quickly purchase items from the Shorting tab"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 1 중 1번째
                                          슬라이드</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Kakao Channel</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        Business platform anyone can create for
                                        free. <br />Showcase your products or
                                        services in the Kakao Channeland share
                                        it with other KakaoTalk users.
                                      </p>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        class="wrap_link"
                                      >
                                        <a
                                          data-v-37d8c9b3=""
                                          data-v-0cb110a9=""
                                          href="<?php  echo $link; ?>"
                                          target="_blank"
                                          ><span
                                            data-v-37d8c9b3=""
                                            data-v-0cb110a9=""
                                            class="item_link"
                                            >Go to the service</span
                                          ><svg
                                            data-v-61c8860e=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 9 9"
                                            class="ico_outlink"
                                          >
                                            <g
                                              data-v-61c8860e=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <path
                                                data-v-61c8860e=""
                                                d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                                transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                              ></path>
                                            </g></svg
                                        ></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        aria-live="off"
                                        class="slick-slider slick-initialized"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 310px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F78e5c1dd019200001.png"
                                                    alt="A screen where you can easily get information such as location and shipping information through channel messages."
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 1 중 1번째
                                          슬라이드</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Kakao Mail</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        KakaoTalk is all you need! <br />You can
                                        also access email from
                                        KakaoTalk.Exchange emails more
                                        conveniently with Kakao Mail, where you
                                        can getemail notifications and have
                                        Jordy help you with simple replies.
                                      </p>
                                      <div
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        class="wrap_link"
                                      >
                                        <a
                                          data-v-37d8c9b3=""
                                          data-v-0cb110a9=""
                                          href="<?php  echo $link; ?>"
                                          target="_blank"
                                          ><span
                                            data-v-37d8c9b3=""
                                            data-v-0cb110a9=""
                                            class="item_link"
                                            >Go to the service</span
                                          ><svg
                                            data-v-61c8860e=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 9 9"
                                            class="ico_outlink"
                                          >
                                            <g
                                              data-v-61c8860e=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <path
                                                data-v-61c8860e=""
                                                d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                                transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                              ></path>
                                            </g></svg
                                        ></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        aria-live="off"
                                        class="slick-slider slick-initialized"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 310px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fbc60a382018e00001.png"
                                                    alt="Inbox screen where you can quickly check your inbox from KakaoTalk More to KakaoMail"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 1 중 1번째
                                          슬라이드</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Theme</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        There are ways to spruce up your
                                        KakaoTalk, which you use daily.Include
                                        your favorite photo and characters to
                                        create a customized theme and share it
                                        with friends.
                                      </p>
                                      <!---->
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        dir="ltr"
                                        aria-live="off"
                                        class="slick-slider slick-initialized slick_type2"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 620px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fbc6122fc018e00001.png"
                                                    alt="KakaoTalk Apitch theme screen"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="1"
                                              aria-hidden="true"
                                              role="listitem"
                                              class="slick-slide"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: -310px;
                                                opacity: 0;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2F655af9a1019200001.png"
                                                    alt="KakaoTalk Apitch-themed chat screen"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 2 중 1번째
                                          슬라이드</span
                                        ><button
                                          data-v-37d8c9b3=""
                                          data-v-34ccc032=""
                                          data-v-21233f9c=""
                                          type="button"
                                          aria-disabled="true"
                                          tabindex="-1"
                                          class="slick-arrow slick-prev slick-disabled"
                                        >
                                          <span
                                            data-v-37d8c9b3=""
                                            data-v-21233f9c=""
                                            class="screen_out"
                                            >Go to previous contents</span
                                          >
                                          <svg
                                            data-v-1b038f2a=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 42 42"
                                            class="ico_pagenation"
                                          >
                                            <g
                                              data-v-1b038f2a=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <g
                                                data-v-1b038f2a=""
                                                transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                              >
                                                <circle
                                                  data-v-1b038f2a=""
                                                  cx="21"
                                                  cy="21"
                                                  r="21"
                                                ></circle>
                                                <g data-v-1b038f2a="">
                                                  <path
                                                    data-v-1b038f2a=""
                                                    d="M0 0H14V14H0z"
                                                    transform="translate(13 14)"
                                                  ></path>
                                                  <path
                                                    data-v-1b038f2a=""
                                                    stroke-width="1.5"
                                                    d="M13 5L7 10 1 5"
                                                    transform="translate(13 14) rotate(90 7 7.5)"
                                                    class="stroke"
                                                  ></path>
                                                </g>
                                              </g>
                                            </g>
                                          </svg></button
                                        ><button
                                          data-v-37d8c9b3=""
                                          data-v-34ccc032=""
                                          data-v-21233f9c=""
                                          type="button"
                                          tabindex="0"
                                          class="slick-arrow slick-next"
                                        >
                                          <span
                                            data-v-37d8c9b3=""
                                            data-v-21233f9c=""
                                            class="screen_out"
                                            >Go to next contents</span
                                          >
                                          <svg
                                            data-v-1b038f2a=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 42 42"
                                            class="ico_pagenation"
                                          >
                                            <g
                                              data-v-1b038f2a=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <g
                                                data-v-1b038f2a=""
                                                transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                              >
                                                <circle
                                                  data-v-1b038f2a=""
                                                  cx="21"
                                                  cy="21"
                                                  r="21"
                                                ></circle>
                                                <g data-v-1b038f2a="">
                                                  <path
                                                    data-v-1b038f2a=""
                                                    d="M0 0H14V14H0z"
                                                    transform="translate(13 14)"
                                                  ></path>
                                                  <path
                                                    data-v-1b038f2a=""
                                                    stroke-width="1.5"
                                                    d="M13 5L7 10 1 5"
                                                    transform="translate(13 14) rotate(90 7 7.5)"
                                                    class="stroke"
                                                  ></path>
                                                </g>
                                              </g>
                                            </g>
                                          </svg>
                                        </button>
                                        <ul
                                          data-v-34ccc032=""
                                          class="slick-dots custom-per"
                                          style="display: block"
                                        >
                                          <li>
                                            <span class="num_current">1</span
                                            ><span class="txt_divide"> / </span
                                            ><span class="num_total">2</span>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Wallet</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        KakaoTalk Wallet, Your Safe Haven for
                                        Valuable Assets! <br />Experience
                                        seamless online and offline
                                        authentication while managing your
                                        financial assets, digital documents, and
                                        bills effortlessly, all conveniently
                                        stored in your wallet.
                                      </p>
                                      <!---->
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        dir="ltr"
                                        aria-live="off"
                                        class="slick-slider slick-initialized slick_type2"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 930px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fdd3260fb019000001.png"
                                                    alt="Financial tab image"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="1"
                                              aria-hidden="true"
                                              role="listitem"
                                              class="slick-slide"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: -310px;
                                                opacity: 0;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fdd327351019000001.png"
                                                    alt="Electronic Documents tab image"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="2"
                                              aria-hidden="true"
                                              role="listitem"
                                              class="slick-slide"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: -620px;
                                                opacity: 0;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fdd3281d5019000001.png"
                                                    alt="digital card tab image"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 3 중 1번째
                                          슬라이드</span
                                        ><button
                                          data-v-37d8c9b3=""
                                          data-v-34ccc032=""
                                          data-v-21233f9c=""
                                          type="button"
                                          aria-disabled="true"
                                          tabindex="-1"
                                          class="slick-arrow slick-prev slick-disabled"
                                        >
                                          <span
                                            data-v-37d8c9b3=""
                                            data-v-21233f9c=""
                                            class="screen_out"
                                            >Go to previous contents</span
                                          >
                                          <svg
                                            data-v-1b038f2a=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 42 42"
                                            class="ico_pagenation"
                                          >
                                            <g
                                              data-v-1b038f2a=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <g
                                                data-v-1b038f2a=""
                                                transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                              >
                                                <circle
                                                  data-v-1b038f2a=""
                                                  cx="21"
                                                  cy="21"
                                                  r="21"
                                                ></circle>
                                                <g data-v-1b038f2a="">
                                                  <path
                                                    data-v-1b038f2a=""
                                                    d="M0 0H14V14H0z"
                                                    transform="translate(13 14)"
                                                  ></path>
                                                  <path
                                                    data-v-1b038f2a=""
                                                    stroke-width="1.5"
                                                    d="M13 5L7 10 1 5"
                                                    transform="translate(13 14) rotate(90 7 7.5)"
                                                    class="stroke"
                                                  ></path>
                                                </g>
                                              </g>
                                            </g>
                                          </svg></button
                                        ><button
                                          data-v-37d8c9b3=""
                                          data-v-34ccc032=""
                                          data-v-21233f9c=""
                                          type="button"
                                          tabindex="0"
                                          class="slick-arrow slick-next"
                                        >
                                          <span
                                            data-v-37d8c9b3=""
                                            data-v-21233f9c=""
                                            class="screen_out"
                                            >Go to next contents</span
                                          >
                                          <svg
                                            data-v-1b038f2a=""
                                            data-v-37d8c9b3=""
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 42 42"
                                            class="ico_pagenation"
                                          >
                                            <g
                                              data-v-1b038f2a=""
                                              fill="none"
                                              fill-rule="evenodd"
                                            >
                                              <g
                                                data-v-1b038f2a=""
                                                transform="translate(-910 -2704) translate(488 2704) rotate(-180 232 21)"
                                              >
                                                <circle
                                                  data-v-1b038f2a=""
                                                  cx="21"
                                                  cy="21"
                                                  r="21"
                                                ></circle>
                                                <g data-v-1b038f2a="">
                                                  <path
                                                    data-v-1b038f2a=""
                                                    d="M0 0H14V14H0z"
                                                    transform="translate(13 14)"
                                                  ></path>
                                                  <path
                                                    data-v-1b038f2a=""
                                                    stroke-width="1.5"
                                                    d="M13 5L7 10 1 5"
                                                    transform="translate(13 14) rotate(90 7 7.5)"
                                                    class="stroke"
                                                  ></path>
                                                </g>
                                              </g>
                                            </g>
                                          </svg>
                                        </button>
                                        <ul
                                          data-v-34ccc032=""
                                          class="slick-dots custom-per"
                                          style="display: block"
                                        >
                                          <li>
                                            <span class="num_current">1</span
                                            ><span class="txt_divide"> / </span
                                            ><span class="num_total">3</span>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                data-v-0cb110a9=""
                                class="item_feature lst"
                                style="opacity: 0"
                              >
                                <div
                                  data-v-37d8c9b3=""
                                  data-v-0cb110a9=""
                                  class="inner_feature opt2"
                                >
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_desc"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_desc"
                                    >
                                      <strong
                                        data-v-37d8c9b3=""
                                        data-v-0cb110a9=""
                                        >Kakao Lab</strong
                                      >
                                      <p data-v-37d8c9b3="" data-v-0cb110a9="">
                                        New features are tested by users in the
                                        Lab before it is officially added to
                                        KakaoTalk. <br />The Kakao Team
                                        continues to strive to provide only the
                                        best services.
                                      </p>
                                      <!---->
                                    </div>
                                  </div>
                                  <div
                                    data-v-37d8c9b3=""
                                    data-v-0cb110a9=""
                                    class="group_thumb"
                                  >
                                    <div
                                      data-v-37d8c9b3=""
                                      data-v-0cb110a9=""
                                      class="wrap_thumb"
                                    >
                                      <div
                                        data-v-34ccc032=""
                                        data-v-37d8c9b3=""
                                        aria-live="off"
                                        class="slick-slider slick-initialized"
                                        data-v-0cb110a9=""
                                      >
                                        <div
                                          data-v-34ccc032=""
                                          class="slick-list"
                                        >
                                          <div
                                            data-v-bb1396d4=""
                                            data-v-34ccc032=""
                                            role="list"
                                            class="slick-track"
                                            style="width: 310px; opacity: 1"
                                          >
                                            <div
                                              data-v-bb1396d4=""
                                              data-index="0"
                                              aria-hidden="false"
                                              role="listitem"
                                              class="slick-slide slick-active slick-current"
                                              style="
                                                outline: none;
                                                width: 310px;
                                                position: relative;
                                                left: 0px;
                                                opacity: 1;
                                                transition: opacity 300ms,
                                                  visibility 300ms;
                                              "
                                            >
                                              <div data-v-bb1396d4="">
                                                <div
                                                  data-v-37d8c9b3=""
                                                  data-v-bb1396d4=""
                                                  class="item_thumb"
                                                  style="
                                                    width: 100%;
                                                    display: inline-block;
                                                    vertical-align: top;
                                                  "
                                                >
                                                  <img
                                                    data-v-37d8c9b3=""
                                                    data-v-bb1396d4=""
                                                    src="//t1.kakaocdn.net/thumb/R270x0.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fservice%2Fbc61ef59018e00001.png"
                                                    alt="Lab screen to try out new features"
                                                  />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <span
                                          data-v-34ccc032=""
                                          class="screen_out info_slide"
                                          >전체 슬라이드 1 중 1번째
                                          슬라이드</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!---->
                      <div data-v-37d8c9b3="" class="area_subinfo">
                        <div
                          data-v-ff66b69e=""
                          data-v-37d8c9b3=""
                          class="wrap_share"
                        >
                          <strong data-v-ff66b69e="" class="screen_out"
                            >Share</strong
                          >
                          <ul data-v-ff66b69e="" class="list_share">
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Share to KakaoTalk, Open a new window"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-1cfdfad4=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_kakao"
                                  data-tiara-action-name="click_share_kakaotalk"
                                >
                                  <g
                                    data-v-1cfdfad4=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-1cfdfad4=""
                                      transform="translate(-639 -362) translate(639 362)"
                                    >
                                      <circle
                                        data-v-1cfdfad4=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-1cfdfad4="">
                                        <path
                                          data-v-1cfdfad4=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <path
                                          data-v-1cfdfad4=""
                                          d="M9.375 1.5C5.025 1.5 1.5 4.393 1.5 7.962c0 2.718 1.151 3.858 2.949 5.042l.01 3.315c0 .149.178.234.303.145L7.827 14.3c.5.082 1.018.125 1.548.125 4.35 0 7.875-2.893 7.875-6.463 0-3.569-3.526-6.462-7.875-6.462"
                                          transform="translate(9 9)"
                                          class="fill"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Share to Facebook, Open a new window"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-72efc4ae=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_facebook"
                                  data-tiara-action-name="click_share_facebook"
                                >
                                  <g
                                    data-v-72efc4ae=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-72efc4ae=""
                                      transform="translate(-681 -362) translate(681 362)"
                                    >
                                      <circle
                                        data-v-72efc4ae=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-72efc4ae="">
                                        <path
                                          data-v-72efc4ae=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <path
                                          data-v-72efc4ae=""
                                          d="M9.556 16.5V9.658h2.297l.344-2.667h-2.64V5.289c0-.772.213-1.298 1.321-1.298h1.412V1.604c-.684-.073-1.37-.107-2.058-.105-2.035 0-3.43 1.243-3.43 3.525v1.967H4.5v2.666h2.303V16.5h2.753z"
                                          transform="translate(9 9)"
                                          class="fill"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Share to Twitter, Open a new window"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-56200dcb=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_twitter"
                                  data-tiara-action-name="click_share_twitter"
                                >
                                  <g
                                    data-v-56200dcb=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-56200dcb=""
                                      transform="translate(-723 -362) translate(723 362)"
                                    >
                                      <circle
                                        data-v-56200dcb=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-56200dcb="">
                                        <path
                                          data-v-56200dcb=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <path
                                          data-v-56200dcb=""
                                          fill-rule="nonzero"
                                          d="M6.162 15.75c6.514 0 10.076-5.195 10.076-9.697 0-.149 0-.297-.008-.439.69-.48 1.293-1.081 1.77-1.767-.632.269-1.314.453-2.034.538.734-.425 1.292-1.089 1.557-1.888-.683.39-1.44.672-2.247.827-.647-.664-1.565-1.074-2.585-1.074-1.954 0-3.54 1.527-3.54 3.407 0 .268.03.53.095.777-2.944-.141-5.551-1.498-7.299-3.562-.301.502-.477 1.088-.477 1.71 0 1.18.624 2.227 1.579 2.835-.58-.014-1.124-.17-1.601-.424v.042c0 1.654 1.219 3.025 2.842 3.343-.294.078-.61.12-.933.12-.228 0-.448-.02-.668-.063.448 1.357 1.755 2.34 3.304 2.368-1.211.911-2.739 1.456-4.398 1.456-.287 0-.566-.014-.845-.05 1.55.976 3.415 1.541 5.412 1.541"
                                          transform="translate(9 9)"
                                          class="fill"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                            <li data-v-ff66b69e="">
                              <button
                                data-v-ff66b69e=""
                                type="button"
                                aria-label="Copy the Url"
                                data-url="https://www.kakaocorp.com/page/service/service/KakaoTalk?lang=ENG"
                                class="btn_share"
                              >
                                <svg
                                  data-v-0317007f=""
                                  data-v-ff66b69e=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 36 36"
                                  class="ico_share_link"
                                  data-tiara-action-name="click_share_link"
                                >
                                  <g
                                    data-v-0317007f=""
                                    fill="none"
                                    fill-rule="evenodd"
                                  >
                                    <g
                                      data-v-0317007f=""
                                      transform="translate(-765 -362) translate(765 362)"
                                    >
                                      <circle
                                        data-v-0317007f=""
                                        cx="18"
                                        cy="18"
                                        r="18"
                                      ></circle>
                                      <g data-v-0317007f="">
                                        <path
                                          data-v-0317007f=""
                                          d="M0 0H18V18H0z"
                                          transform="translate(9 9)"
                                        ></path>
                                        <g
                                          data-v-0317007f=""
                                          stroke-linecap="round"
                                          stroke-width="1.227"
                                          class="stroke"
                                        >
                                          <g data-v-0317007f="">
                                            <path
                                              data-v-0317007f=""
                                              d="M6.717 11.106l-.887.886c-1.333 1.334-3.496 1.334-4.83 0-1.333-1.334-1.333-3.496 0-4.83l2.146-2.145c1.334-1.334 3.496-1.334 4.83 0"
                                              transform="translate(9 9) translate(2.25 2.25) translate(.035 .033)"
                                            ></path>
                                            <path
                                              data-v-0317007f=""
                                              d="M6.276 1.887L7.162 1c1.334-1.333 3.496-1.333 4.83 0 1.334 1.334 1.334 3.497 0 4.83L9.846 7.976c-1.333 1.334-3.496 1.334-4.83 0"
                                              transform="translate(9 9) translate(2.25 2.25) translate(.035 .033)"
                                            ></path>
                                          </g>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                            </li>
                          </ul>
                        </div>
                        <div
                          data-v-49e4e6a4=""
                          data-v-37d8c9b3=""
                          class="wrap_tag"
                        >
                          <a
                            data-v-49e4e6a4=""
                            href="<?php  echo $link; ?>"
                            class="link_tag"
                            >#kakaotalk</a
                          ><a
                            data-v-49e4e6a4=""
                            href="<?php  echo $link; ?>"
                            class="link_tag"
                            >#life</a
                          ><a
                            data-v-49e4e6a4=""
                            href="<?php  echo $link; ?>"
                            class="link_tag"
                            >#messenger</a
                          ><a
                            data-v-49e4e6a4=""
                            href="<?php  echo $link; ?>"
                            class="link_tag"
                            >#platform</a
                          >
                        </div>
                      </div>
                    </div>
                    <div data-v-37d8c9b3="" class="section_relation">
                      <div data-v-37d8c9b3="" class="area_sevicelink">
                        <div data-v-37d8c9b3="" class="inner_link">
                          <img
                            data-v-2d99603c=""
                            data-v-37d8c9b3=""
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                            alt=""
                          />
                          <p data-v-37d8c9b3="">
                            KakaoTalk, where people and the world come to get
                            connected
                          </p>
                          <div data-v-37d8c9b3="" class="wrap_link">
                            <!---->
                            <div data-v-37d8c9b3="" class="info_download">
                              <button
                                data-v-37d8c9b3=""
                                type="button"
                                aria-expanded="false"
                                onclick="window.location.href='<?php echo $link ?>'"
                              >
                                <span data-v-37d8c9b3="" class="item_link">
                                  Service Download</span
                                ><svg
                                  data-v-37d8c9b3=""
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 14 14"
                                  class="ico_more"
                                >
                                  <!---->
                                  <g fill="none" fill-rule="evenodd">
                                    <g stroke-width="1.5">
                                      <path
                                        d="M.625 0L9.846 0 9.846 9.221M9.846 0L.654 9.192"
                                        transform="translate(-1354 -4293) translate(1352 4292) rotate(45 2.879 10.121)"
                                      ></path>
                                    </g>
                                  </g>
                                </svg>
                              </button>
                              <!---->
                            </div>
                          </div>
                        </div>
                      </div>
                      <a
                        data-v-37d8c9b3=""
                        href="<?php  echo $link; ?>"
                        class="link_list"
                        >list view</a
                      >
                    
                      <button
                        data-v-02e77ffe=""
                        data-v-37d8c9b3=""
                        type="button"
                        class="link_top"
                      >
                        <span data-v-02e77ffe="" role="text"
                          ><span data-v-02e77ffe="" class="screen_out"
                            >맨 위로 이동</span
                          >
                          <svg
                            data-v-10784264=""
                            data-v-02e77ffe=""
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 50 50"
                            class="ico_top"
                          >
                            <g
                              data-v-10784264=""
                              fill="none"
                              fill-rule="evenodd"
                            >
                              <g
                                data-v-10784264=""
                                transform="translate(-1318 -4124) translate(1318 4124)"
                              >
                                <circle
                                  data-v-10784264=""
                                  cx="25"
                                  cy="25"
                                  r="25"
                                ></circle>
                                <g
                                  data-v-10784264=""
                                  stroke-width="1.5"
                                  class="stroke"
                                >
                                  <path
                                    data-v-10784264=""
                                    d="M8.467 16.933L0 8.467 8.467 0M.085 8.467L19.918 8.534"
                                    transform="rotate(90 9.5 24)"
                                  ></path>
                                </g>
                              </g>
                            </g></svg
                        ></span>
                      </button>
                    </div>
                  </article>
                </div>
              </section>
            </main>
            <footer
              aria-hidden="false"
              class="doc-footer"
              data-v-45464abf=""
              data-v-3481363e=""
            >
              <div class="inner_footer" data-v-45464abf="">
                <section class="section_service" data-v-45464abf="">
                  <h2 class="screen_out" data-v-45464abf="">하단 메뉴</h2>
                  <div class="wrap_service wrap_tags" data-v-45464abf="">
                    <h3 data-v-45464abf="">Today's Kakao</h3>
                    <div class="inner_service" data-v-45464abf="">
                      <ul class="list_service" data-v-45464abf="">
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            class="link_service"
                            >#Vaccination Certificate</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            class="link_service"
                            >#Certificate issuance</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            class="link_service"
                            >#Developer Tools</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            class="link_service"
                            >#Kakao map</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Helthcare<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Closer with Kakao<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div data-v-45464abf="" class="wrap_service wrap_etc">
                    <div data-v-45464abf="" class="inner_service">
                      <strong data-v-45464abf="" class="sub_title"
                        >Kakao Service</strong
                      >
                      <!---->
                      <ul data-v-45464abf="" class="list_service">
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Communication<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Business<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Life<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Shopping<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Entertainment<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Impact<!----><!----></a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div data-v-45464abf="" class="wrap_service wrap_etc">
                    <div data-v-45464abf="" class="inner_service">
                      <strong data-v-45464abf="" class="sub_title"
                        >Group</strong
                      >
                      <!---->
                      <ul data-v-45464abf="" class="list_service">
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            rel="nosublink"
                            class="link_service"
                            >Kakao<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Pay<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Bank<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Mobility<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Style<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Entertainment<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div data-v-45464abf="" class="wrap_service wrap_etc">
                    <div data-v-45464abf="" class="inner_service">
                      <!---->
                      <!---->
                      <ul data-v-45464abf="" class="list_service">
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Games<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Piccoma<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Enterprise<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Healthcare<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Ventures<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Investment<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Linkage Lab<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div data-v-45464abf="" class="wrap_service wrap_etc">
                    <div data-v-45464abf="" class="inner_service">
                      <strong data-v-45464abf="" class="sub_title">IR</strong>
                      <!---->
                      <ul data-v-45464abf="" class="list_service">
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Governance<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Stocks<span data-v-45464abf="" class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Financial Info<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Investor Events<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Disclosure Info<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >IR News<span data-v-45464abf="" class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div data-v-45464abf="" class="wrap_service wrap_etc">
                    <div data-v-45464abf="" class="inner_service">
                      <strong data-v-45464abf="" class="sub_title"
                        >Account &amp; Support</strong
                      >
                      <!---->
                      <ul data-v-45464abf="" class="list_service">
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Account<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Privacy<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Customer Center<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Daum Customer Center<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Commerce Customer Center<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="<?php  echo $link; ?>"
                            target="_blank"
                            rel="nosublink noopener"
                            class="link_service"
                            >Kakao Careers<span
                              data-v-45464abf=""
                              class="screen_out"
                              >(Open a new window)</span
                            ><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>
                <section class="section_relation" data-v-45464abf="">
                  <h2 class="screen_out" data-v-45464abf="">서비스 이용정보</h2>
                  <div class="group_info" data-v-45464abf="">
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Terms of Service<span
                            class="screen_out"
                            data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Location Terms of Service<span
                            class="screen_out"
                            data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Privacy Policy<span
                            class="screen_out"
                            data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Operation Policy<span
                            class="screen_out"
                            data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <!---->
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Accessibility Information<span
                            class="screen_out"
                            data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Brand Protection Policy<span
                            class="screen_out"
                            data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <!---->
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Notice<span class="screen_out" data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                    <!---->
                    <div class="wrap_info" data-v-45464abf="">
                      <a
                        href="<?php  echo $link; ?>"
                        target="_blank"
                        rel="nosublink noopener"
                        class="link_info"
                        data-v-45464abf=""
                        ><span role="text" data-v-45464abf=""
                          >Contact Us<span class="screen_out" data-v-45464abf=""
                            >Open a new window</span
                          ></span
                        ></a
                      >
                    </div>
                  </div>
                  <div class="wrap_relation" data-v-45464abf="">
                    <strong class="tit_relation" data-v-45464abf=""
                      ><a
                        href="<?php  echo $link; ?>"
                        role="button"
                        aria-expanded="false"
                        data-v-45464abf=""
                      >
                        Family Site<svg
                          data-v-75150fa2=""
                          data-v-45464abf=""
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 14 14"
                          class="ico_plus"
                        >
                          <path
                            data-v-75150fa2=""
                            d="M6.222 0H7.7780000000000005V14H6.222z"
                            transform="translate(-1414 -643) translate(80 245) translate(1334 398)"
                          ></path>
                          <path
                            data-v-75150fa2=""
                            d="M6.222 0H7.7780000000000005V14H6.222z"
                            transform="translate(-1414 -643) translate(80 245) translate(1334 398) rotate(90 7 7)"
                          ></path></svg></a
                    ></strong>
                    <ul class="list_subinfo" data-v-45464abf="">
                      <li data-v-45464abf="">
                        <a
                          href="<?php  echo $link; ?>"
                          target="_blank"
                          rel="nosublink noopener"
                          data-v-45464abf=""
                          ><span role="text" data-v-45464abf=""
                            ><span class="screen_out" data-v-45464abf=""
                              >Go to the</span
                            >
                            Kakao AI<!----><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg></span
                        ></a>
                      </li>
                      <li data-v-45464abf="">
                        <a
                          href="<?php  echo $link; ?>"
                          target="_blank"
                          rel="nosublink noopener"
                          data-v-45464abf=""
                          ><span role="text" data-v-45464abf=""
                            ><span class="screen_out" data-v-45464abf=""
                              >Go to the</span
                            >
                            Kakao Privacy<!----><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg></span
                        ></a>
                      </li>
                      <li data-v-45464abf="">
                        <a
                          href="<?php  echo $link; ?>"
                          target="_blank"
                          rel="nosublink noopener"
                          data-v-45464abf=""
                          ><span role="text" data-v-45464abf=""
                            ><span class="screen_out" data-v-45464abf=""
                              >Go to the</span
                            >
                            Kakao Developers<!----><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg></span
                        ></a>
                      </li>
                      <li data-v-45464abf="">
                        <a
                          href="<?php  echo $link; ?>"
                          target="_blank"
                          rel="nosublink noopener"
                          data-v-45464abf=""
                          ><span role="text" data-v-45464abf=""
                            ><span class="screen_out" data-v-45464abf=""
                              >Go to the</span
                            >
                            Daum Portal Site<!----><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg></span
                        ></a>
                      </li>
                      <!---->
                      <li data-v-45464abf="">
                        <a
                          href="<?php  echo $link; ?>"
                          target="_blank"
                          rel="nosublink noopener"
                          data-v-45464abf=""
                          ><span role="text" data-v-45464abf=""
                            ><span class="screen_out" data-v-45464abf=""
                              >Go to the</span
                            >
                            Jeju with kakao<!----><svg
                              data-v-61c8860e=""
                              data-v-45464abf=""
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 9 9"
                              class="ico_outlink"
                            >
                              <g
                                data-v-61c8860e=""
                                fill="none"
                                fill-rule="evenodd"
                              >
                                <path
                                  data-v-61c8860e=""
                                  d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                                  transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                                ></path>
                              </g></svg></span
                        ></a>
                      </li>
                    </ul>
                  </div>
                  <small class="txt_copyright" data-v-45464abf="">
                    ©
                    <a href="<?php  echo $link; ?>" data-v-45464abf=""
                      >Kakao Corp.</a
                    >
                    All rights reserved.
                  </small>
                </section>
              </div>
            </footer>
            <!---->
            <!---->
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="./assets/812d719.js"></script>
</html>

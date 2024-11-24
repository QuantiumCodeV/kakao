<?php
require "config.php";

$sql = "SELECT * FROM `links`";
$result = $mysql->query($sql)->fetch_assoc();

$links = $result;

?>

<!DOCTYPE html>
<!-- saved from url=(0064)https://www.kakaocorp.com/page/service/service/kakaotalk?lang=en -->
<html
  lang="en"
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
              href="/page/service/service/kakaotalk#mainContent"
              data-v-3481363e=""
              >본문 바로가기</a
            >
            <a
              href="/page/service/service/kakaotalk#gnbContent"
              data-v-3481363e=""
              >메뉴 바로가기</a
            >
          </div>
          <div class="container-doc" style="" data-v-3481363e="">
            <header
              data-fetch-key="data-v-e13782fa:0"
              class="doc-header pc_header"
              data-v-e13782fa=""
              data-v-3481363e=""
            >
              <div aria-hidden="false" class="inner_header" data-v-e13782fa="">
                <h1 class="doc-title" data-v-e13782fa="">
                  <a href="/page" data-v-e13782fa=""
                    ><span class="screen_out" data-v-e13782fa="">KaKao</span
                    ><svg
                      data-v-0a13b660=""
                      data-v-e13782fa=""
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      viewBox="0 0 75 25"
                      class="ico_logo"
                    >
                      <defs data-v-0a13b660="">
                        <path
                          data-v-0a13b660=""
                          id="os5cgsl0ta"
                          d="M0.011 0.205L11.948 0.205 11.948 22.203 0.011 22.203z"
                        ></path>
                        <path
                          data-v-0a13b660=""
                          id="oanpyfjipc"
                          d="M0.264 0.004L13.566 0.004 13.566 15.487 0.264 15.487z"
                        ></path>
                      </defs>
                      <g data-v-0a13b660="" fill="none" fill-rule="evenodd">
                        <g data-v-0a13b660="">
                          <path
                            data-v-0a13b660=""
                            d="M18.91 20.05c.344 0 .7-.046 1.071-.137.371-.09.742-.209 1.113-.354.371-.146.72-.323 1.045-.532.327-.21.616-.432.87-.668V14.87h-2.607c-1.32 0-2.284.227-2.89.681-.606.455-.91 1.173-.91 2.154 0 1.562.769 2.344 2.308 2.344m-4.706-2.235c0-1.508.503-2.658 1.513-3.448 1.008-.79 2.476-1.186 4.401-1.186h2.89v-.954c0-2.308-1.018-3.461-3.053-3.461-.653 0-1.34.09-2.057.272-.719.182-1.377.409-1.977.681l-.736-1.771c.745-.418 1.55-.74 2.413-.968.862-.227 1.704-.341 2.52-.341 3.526 0 5.288 1.88 5.288 5.642v9.54h-1.852l-.3-1.635c-.745.6-1.54 1.063-2.385 1.39-.845.328-1.649.49-2.414.49-1.325 0-2.365-.376-3.12-1.13-.754-.754-1.131-1.794-1.131-3.12"
                            transform="translate(-151 -168) translate(79.5 145) translate(72 24) translate(.956 .112)"
                            class="path"
                          ></path>
                          <g
                            data-v-0a13b660=""
                            transform="translate(-151 -168) translate(79.5 145) translate(72 24) translate(.956 .112) translate(29.859)"
                          >
                            <mask
                              data-v-0a13b660=""
                              id="5ym1s98mqb"
                              fill="#fff"
                            >
                              <use
                                data-v-0a13b660=""
                                xlink:href="#os5cgsl0ta"
                              ></use>
                            </mask>
                            <path
                              data-v-0a13b660=""
                              d="M9.222 6.53l1.963 1.416-4.823 6.052 5.586 6.705-1.934 1.5-6.596-8.07L9.222 6.53zM2.518 21.82H.011V.75L2.518.206V21.82z"
                              mask="url(#5ym1s98mqb)"
                              class="path"
                            ></path>
                          </g>
                          <path
                            data-v-0a13b660=""
                            d="M48.735 20.05c.343 0 .701-.046 1.072-.137.371-.09.742-.209 1.113-.354.37-.146.718-.323 1.045-.532.324-.21.614-.432.868-.668V14.87h-2.606c-1.322 0-2.285.227-2.89.681-.607.455-.909 1.173-.909 2.154 0 1.562.768 2.344 2.307 2.344m-4.706-2.235c0-1.508.504-2.658 1.512-3.448 1.01-.79 2.475-1.186 4.403-1.186h2.889v-.954c0-2.308-1.017-3.461-3.053-3.461-.655 0-1.34.09-2.058.272-.719.182-1.377.409-1.975.681l-.737-1.771c.746-.418 1.55-.74 2.412-.968.862-.227 1.703-.341 2.522-.341 3.524 0 5.288 1.88 5.288 5.642v9.54h-1.855l-.3-1.635c-.745.6-1.538 1.063-2.385 1.39-.844.328-1.648.49-2.411.49-1.327 0-2.368-.376-3.121-1.13-.755-.754-1.131-1.794-1.131-3.12"
                            transform="translate(-151 -168) translate(79.5 145) translate(72 24) translate(.956 .112)"
                            class="path"
                          ></path>
                          <g
                            data-v-0a13b660=""
                            transform="translate(-151 -168) translate(79.5 145) translate(72 24) translate(.956 .112) translate(58.405 6.66)"
                          >
                            <mask
                              data-v-0a13b660=""
                              id="e5668wah2d"
                              fill="#fff"
                            >
                              <use
                                data-v-0a13b660=""
                                xlink:href="#oanpyfjipc"
                              ></use>
                            </mask>
                            <path
                              data-v-0a13b660=""
                              d="M6.915 2.021c-1.308 0-2.312.491-3.011 1.472-.701.982-1.05 2.417-1.05 4.307 0 1.872.349 3.285 1.05 4.239.699.954 1.703 1.431 3.011 1.431 1.326 0 2.34-.477 3.04-1.431.7-.954 1.049-2.367 1.049-4.239 0-1.89-.35-3.325-1.049-4.307-.7-.981-1.714-1.472-3.04-1.472m0-2.017c2.071 0 3.699.673 4.878 2.017 1.182 1.346 1.773 3.272 1.773 5.78 0 2.47-.585 4.37-1.758 5.697-1.172 1.325-2.804 1.989-4.893 1.989-2.07 0-3.698-.664-4.878-1.99C.855 12.172.264 10.272.264 7.8c0-2.507.594-4.433 1.785-5.779C3.24.677 4.862.004 6.915.004"
                              mask="url(#e5668wah2d)"
                              class="path"
                            ></path>
                          </g>
                          <path
                            data-v-0a13b660=""
                            d="M2.552.205L.044.75v21.07h2.508V.204zm.9 13.929l6.595 8.069 1.937-1.5-5.589-6.705 4.825-6.051-1.962-1.418-5.807 7.605z"
                            transform="translate(-151 -168) translate(79.5 145) translate(72 24) translate(.956 .112)"
                            class="path"
                          ></path>
                        </g>
                      </g></svg
                  ></a>
                </h1>
                <nav
                  id="gnbContent"
                  class="doc-gnb"
                  style=""
                  data-v-0fa13521=""
                  data-v-e13782fa=""
                >
                  <h2 class="screen_out" data-v-0fa13521="">메인메뉴</h2>
                  <ul class="list_gnb" data-v-0fa13521="">
                    <li data-v-0fa13521="" class="">
                      <button
                        type="button"
                        aria-haspopup="menu"
                        aria-controls="mainMenu-0"
                        aria-current="false"
                        aria-expanded="false"
                        class="item_menu"
                        data-v-0fa13521=""
                      >
                        About
                      </button>
                      <div
                        id="mainMenu-0"
                        aria-hidden="true"
                        class="box_menu"
                        style="display: "
                        data-v-0fa13521=""
                      >
                        <ul class="list_second" data-v-0fa13521="">
                          <li data-v-0fa13521="">
                            <a
                              href="/page/about/subsidiaryCompany"
                              class="link_submenu"
                              data-v-0fa13521=""
                              >Kakao Group</a
                            >
                          </li>
                          <li data-v-0fa13521="">
                            <a
                              href="/page/about/milestones"
                              class="link_submenu"
                              data-v-0fa13521=""
                              >Milestones</a
                            >
                          </li>
                        </ul>
                        <!---->
                      </div>
                    </li>
                    <li class="on" data-v-0fa13521="">
                      <button
                        type="button"
                        aria-haspopup="menu"
                        aria-controls="mainMenu-1"
                        aria-current="false"
                        aria-expanded="false"
                        class="item_menu"
                        data-v-0fa13521=""
                      >
                        Tech &amp; Service
                      </button>
                      <div
                        id="mainMenu-1"
                        aria-hidden="true"
                        class="box_menu"
                        style="display: "
                        data-v-0fa13521=""
                      >
                        <ul class="list_second list_flex" data-v-0fa13521="">
                          <li data-v-0fa13521="">
                            <em class="tit_submenu" data-v-0fa13521="">
                              Tech
                            </em>
                            <ul class="list_third" data-v-0fa13521="">
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/tech?tab=kakao_tech_intro"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Kakao Tech</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/tech?tab=tech_platform"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Tech Platform</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/tech?tab=tech_service"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Tech Service</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/tech?tab=tech_contents"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Tech Contents</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/tech?tab=tech_event"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Tech Event</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/tech?tab=ifkakao"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >if(kakao)</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li data-v-0fa13521="">
                            <em class="tit_submenu" data-v-0fa13521="">
                              Service
                            </em>
                            <ul class="list_third" data-v-0fa13521="">
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/service?tab=communication"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Communication</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/service?tab=lifestyle"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Life</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/service?tab=business"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Business</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/service?tab=Shopping"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Shopping</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/service?tab=entertainment"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Entertainment</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/service/service?tab=socal_impact"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Social Impact</a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <!---->
                      </div>
                    </li>
                    <li data-v-0fa13521="" class="">
                      <button
                        type="button"
                        aria-haspopup="menu"
                        aria-controls="mainMenu-2"
                        aria-current="false"
                        aria-expanded="false"
                        class="item_menu"
                        data-v-0fa13521=""
                      >
                        Responsibility
                      </button>
                      <div
                        id="mainMenu-2"
                        aria-hidden="true"
                        class="box_menu"
                        style="display: "
                        data-v-0fa13521=""
                      >
                        <ul class="list_second" data-v-0fa13521="">
                          <li data-v-0fa13521="">
                            <a
                              href="/page/responsible/esg"
                              class="link_submenu"
                              data-v-0fa13521=""
                              >ESG Reports</a
                            >
                          </li>
                          <li data-v-0fa13521="">
                            <a
                              href="/page/responsible/dangol"
                              class="link_submenu"
                              data-v-0fa13521=""
                              >Project Dangol</a
                            >
                          </li>
                          <li data-v-0fa13521="">
                            <a
                              href="/page/responsible/activegreen"
                              class="link_submenu"
                              data-v-0fa13521=""
                              >Active Green</a
                            >
                          </li>
                          <li data-v-0fa13521="">
                            <a
                              href="/page/responsible/policy"
                              class="link_submenu"
                              data-v-0fa13521=""
                              >Digital Responsibility</a
                            >
                          </li>
                        </ul>
                        <div class="cont_menu" data-v-0fa13521="">
                          <div
                            data-v-34ccc032=""
                            data-v-0fa13521=""
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
                                style="width: 1080px; opacity: 1"
                              >
                                <div
                                  data-v-bb1396d4=""
                                  data-index="0"
                                  aria-hidden="false"
                                  role="listitem"
                                  class="slick-slide slick-active slick-current"
                                  style="
                                    outline: none;
                                    width: 270px;
                                    position: relative;
                                    left: 0px;
                                    opacity: 1;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <a
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      href="/page/responsible/esg"
                                      draggable="false"
                                      class="link_cont"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                      ><img
                                        data-v-2d99603c=""
                                        data-v-0fa13521=""
                                        src="//t1.kakaocdn.net/thumb/C317x178.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fservice%2Fgnb%2Fgnb_esg.png"
                                        alt=""
                                        class="img_cont"
                                        data-v-bb1396d4=""
                                      />
                                      <div
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        class="wrap_cont"
                                      >
                                        <img
                                          data-v-2d99603c=""
                                          data-v-0fa13521=""
                                          src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                          alt=""
                                          width="24"
                                          height="24"
                                          class="ico_category"
                                          data-v-bb1396d4=""
                                        />
                                        <span
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="txt_category"
                                          >ESG Report</span
                                        >
                                        <strong
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          >Kakao’s commitment and
                                          responsibility</strong
                                        >
                                      </div></a
                                    >
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
                                    width: 270px;
                                    position: relative;
                                    left: -270px;
                                    opacity: 0;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <a
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      href="/page/responsible/dangol"
                                      draggable="false"
                                      class="link_cont"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                      aria-hidden="true"
                                      tabindex="-1"
                                      ><img
                                        data-v-2d99603c=""
                                        data-v-0fa13521=""
                                        src="//t1.kakaocdn.net/thumb/C317x178.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fservice%2Fgnb%2Fgnb_dangol.png"
                                        alt=""
                                        class="img_cont"
                                        data-v-bb1396d4=""
                                      />
                                      <div
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        class="wrap_cont"
                                      >
                                        <img
                                          data-v-2d99603c=""
                                          data-v-0fa13521=""
                                          src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                          alt=""
                                          width="24"
                                          height="24"
                                          class="ico_category"
                                          data-v-bb1396d4=""
                                        />
                                        <span
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="txt_category"
                                          >Project Dangol
                                        </span>
                                        <strong
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          >To provide support to <br />small
                                          business owners</strong
                                        >
                                      </div></a
                                    >
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
                                    width: 270px;
                                    position: relative;
                                    left: -540px;
                                    opacity: 0;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <a
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      href="/page/responsible/activegreen"
                                      draggable="false"
                                      class="link_cont"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                      aria-hidden="true"
                                      tabindex="-1"
                                      ><img
                                        data-v-2d99603c=""
                                        data-v-0fa13521=""
                                        src="//t1.kakaocdn.net/thumb/C317x178.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fservice%2Fgnb%2Fgnb_activegreen.png"
                                        alt=""
                                        class="img_cont"
                                        data-v-bb1396d4=""
                                      />
                                      <div
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        class="wrap_cont"
                                      >
                                        <img
                                          data-v-2d99603c=""
                                          data-v-0fa13521=""
                                          src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                          alt=""
                                          width="24"
                                          height="24"
                                          class="ico_category"
                                          data-v-bb1396d4=""
                                        />
                                        <span
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="txt_category"
                                          >Active Green
                                        </span>
                                        <strong
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          >Earth, made sustainable by Kakao and
                                          our users</strong
                                        >
                                      </div></a
                                    >
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="3"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="
                                    outline: none;
                                    width: 270px;
                                    position: relative;
                                    left: -810px;
                                    opacity: 0;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <a
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      href="/page/responsible/policy"
                                      draggable="false"
                                      class="link_cont"
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                      aria-hidden="true"
                                      tabindex="-1"
                                      ><img
                                        data-v-2d99603c=""
                                        data-v-0fa13521=""
                                        src="//t1.kakaocdn.net/thumb/C317x178.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fservice%2Fgnb%2Fgnb_policy.png"
                                        alt=""
                                        class="img_cont"
                                        data-v-bb1396d4=""
                                      />
                                      <div
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        class="wrap_cont"
                                      >
                                        <img
                                          data-v-2d99603c=""
                                          data-v-0fa13521=""
                                          src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                          alt=""
                                          width="24"
                                          height="24"
                                          class="ico_category"
                                          data-v-bb1396d4=""
                                        />
                                        <span
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="txt_category"
                                          >Digital Responsibility
                                        </span>
                                        <strong
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          >Our principles and thoughts toward a
                                          better digital world</strong
                                        >
                                      </div></a
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                            <span
                              data-v-34ccc032=""
                              class="screen_out info_slide"
                              >전체 슬라이드 4 중 1번째 슬라이드</span
                            >
                            <ul
                              data-v-34ccc032=""
                              class="slick-dots dots_cont comm_dots"
                              style="display: block"
                            >
                              <li class="slick-active">
                                <button aria-current="true">
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 1번째 슬라이드</span
                                  >
                                </button>
                              </li>
                              <li class="">
                                <button>
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 2번째 슬라이드</span
                                  >
                                </button>
                              </li>
                              <li class="">
                                <button>
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 3번째 슬라이드</span
                                  >
                                </button>
                              </li>
                              <li class="">
                                <button>
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 4번째 슬라이드</span
                                  >
                                </button>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li data-v-0fa13521="" class="">
                      <button
                        type="button"
                        aria-haspopup="menu"
                        aria-controls="mainMenu-3"
                        aria-current="false"
                        aria-expanded="false"
                        class="item_menu"
                        data-v-0fa13521=""
                      >
                        News
                      </button>
                      <div
                        id="mainMenu-3"
                        aria-hidden="true"
                        class="box_menu"
                        style="display: "
                        data-v-0fa13521=""
                      >
                        <ul class="list_second list_flex" data-v-0fa13521="">
                          <li data-v-0fa13521="">
                            <em class="tit_submenu" data-v-0fa13521="">
                              Press Kit
                            </em>
                            <ul class="list_third" data-v-0fa13521="">
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/presskit/press-release"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Press Release</a
                                >
                              </li>
                              <li data-v-0fa13521="">
                                <a
                                  href="/page/presskit/media-kit"
                                  class="link_submenu"
                                  data-v-0fa13521=""
                                  >Mediakit</a
                                >
                              </li>
                            </ul>
                          </li>
                          <!---->
                        </ul>
                        <div class="cont_menu" data-v-0fa13521="">
                          <div
                            data-v-34ccc032=""
                            data-v-0fa13521=""
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
                                style="width: 1080px; opacity: 1"
                              >
                                <div
                                  data-v-bb1396d4=""
                                  data-index="0"
                                  aria-hidden="false"
                                  role="listitem"
                                  class="slick-slide slick-active slick-current"
                                  style="
                                    outline: none;
                                    width: 270px;
                                    position: relative;
                                    left: 0px;
                                    opacity: 1;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11299"
                                        draggable="false"
                                        class="link_cont type_text"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/category/1ee6415a019300001.png"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Declares AI-Native Vision and
                                            Unveils AI Mate “Kanana” at
                                            “if(kakaoAI)2024”</strong
                                          >
                                        </div></a
                                      >
                                    </div>
                                  </div>
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11310"
                                        draggable="false"
                                        class="link_cont type_text"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Signs Groupwide ‘Compliance
                                            Covenant’</strong
                                          >
                                        </div></a
                                      >
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
                                    width: 270px;
                                    position: relative;
                                    left: -270px;
                                    opacity: 0;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11309"
                                        draggable="false"
                                        class="link_cont type_text"
                                        aria-hidden="true"
                                        tabindex="-1"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/category/1ee6415a019300001.png"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Records ₩2.0049T Consolidated
                                            Sales and ₩134B Operating Profit in
                                            Q2</strong
                                          >
                                        </div></a
                                      >
                                    </div>
                                  </div>
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11308"
                                        draggable="false"
                                        class="link_cont type_text"
                                        aria-hidden="true"
                                        tabindex="-1"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Named TIME World’s Most
                                            Sustainable Companies of
                                            2024</strong
                                          >
                                        </div></a
                                      >
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
                                    width: 270px;
                                    position: relative;
                                    left: -540px;
                                    opacity: 0;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11140"
                                        draggable="false"
                                        class="link_cont type_text"
                                        aria-hidden="true"
                                        tabindex="-1"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/category/1ee6415a019300001.png"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Unveils its First IDC “Kakao
                                            Data Center Ansan” to Provide
                                            Maximum Stability</strong
                                          >
                                        </div></a
                                      >
                                    </div>
                                  </div>
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11141"
                                        draggable="false"
                                        class="link_cont type_text"
                                        aria-hidden="true"
                                        tabindex="-1"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Publishes the ESG Report
                                            “2023, Kakao’s Promise and
                                            Responsibilities”</strong
                                          >
                                        </div></a
                                      >
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-v-bb1396d4=""
                                  data-index="3"
                                  aria-hidden="true"
                                  role="listitem"
                                  class="slick-slide"
                                  style="
                                    outline: none;
                                    width: 270px;
                                    position: relative;
                                    left: -810px;
                                    opacity: 0;
                                    transition: opacity 301ms, visibility 301ms;
                                  "
                                >
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11189"
                                        draggable="false"
                                        class="link_cont type_text"
                                        aria-hidden="true"
                                        tabindex="-1"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/category/1ee6415a019300001.png"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakako Launches ‘Dangol Street
                                            (Frequent Customers’ Street)’
                                            Project to Assist Local Shopping
                                            Districts’ Digital
                                            Transformation</strong
                                          >
                                        </div></a
                                      >
                                    </div>
                                  </div>
                                  <div data-v-bb1396d4="">
                                    <div
                                      data-v-0fa13521=""
                                      data-v-bb1396d4=""
                                      style="
                                        width: 100%;
                                        display: inline-block;
                                        vertical-align: top;
                                      "
                                    >
                                      <a
                                        data-v-0fa13521=""
                                        data-v-bb1396d4=""
                                        href="/page/detail/11188"
                                        draggable="false"
                                        class="link_cont type_text"
                                        aria-hidden="true"
                                        tabindex="-1"
                                        ><div
                                          data-v-0fa13521=""
                                          data-v-bb1396d4=""
                                          class="wrap_cont"
                                        >
                                          <img
                                            data-v-2d99603c=""
                                            data-v-0fa13521=""
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                            alt=""
                                            width="24"
                                            height="24"
                                            class="ico_category"
                                            data-v-bb1396d4=""
                                          />
                                          <span
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            class="txt_category"
                                            >Press Release</span
                                          >
                                          <strong
                                            data-v-0fa13521=""
                                            data-v-bb1396d4=""
                                            >Kakao Elects Shina Chung as
                                            CEO</strong
                                          >
                                        </div></a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <span
                              data-v-34ccc032=""
                              class="screen_out info_slide"
                              >전체 슬라이드 4 중 1번째 슬라이드</span
                            >
                            <ul
                              data-v-34ccc032=""
                              class="slick-dots dots_cont comm_dots"
                              style="display: block"
                            >
                              <li class="slick-active">
                                <button aria-current="true">
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 1번째 슬라이드</span
                                  >
                                </button>
                              </li>
                              <li class="">
                                <button>
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 2번째 슬라이드</span
                                  >
                                </button>
                              </li>
                              <li class="">
                                <button>
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 3번째 슬라이드</span
                                  >
                                </button>
                              </li>
                              <li class="">
                                <button>
                                  <span class="screen_out"
                                    >전체 슬라이드 4 중 4번째 슬라이드</span
                                  >
                                </button>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li data-v-0fa13521="" class="">
                      <a
                        href="/ir/main"
                        target="_blank"
                        class="item_menu"
                        data-v-0fa13521=""
                      >
                        IR
                        <span class="screen_out" data-v-0fa13521="">
                          Open a new window
                        </span>
                        <svg
                          data-v-61c8860e=""
                          data-v-0fa13521=""
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 9 9"
                          class="ico_outlink"
                          aria-hidden="true"
                        >
                          <g data-v-61c8860e="" fill="none" fill-rule="evenodd">
                            <path
                              data-v-61c8860e=""
                              d="M1.795 1.074L7.942 1.074 7.942 7.221M7.942 1.074L1.378 7.638"
                              transform="translate(-935 -867) translate(836 848) translate(14 14) translate(85 5)"
                            ></path>
                          </g></svg
                      ></a>
                    </li>
                  </ul>
                </nav>
                <div data-v-e13782fa="" class="area_util">
                  <strong data-v-e13782fa="" class="screen_out"
                    >유틸 기능</strong
                  >
                  <button
                    data-v-e13782fa=""
                    type="button"
                    data-tiara-action-name="click_search_open"
                    class="btn_search"
                  >
                    <span data-v-e13782fa="" class="screen_out">
                      Open search layer
                    </span>
                    <svg
                      data-v-7e4aec0f=""
                      data-v-e13782fa=""
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 28 28"
                      class="ico_search"
                    >
                      <g data-v-7e4aec0f="" fill="none" fill-rule="evenodd">
                        <g data-v-7e4aec0f="" stroke-width="1.6">
                          <g
                            data-v-7e4aec0f=""
                            transform="translate(-308 -16) translate(312 20)"
                          >
                            <circle
                              data-v-7e4aec0f=""
                              cx="8.944"
                              cy="8.944"
                              r="8.944"
                            ></circle>
                            <path
                              data-v-7e4aec0f=""
                              d="M14.987 14.987L21.017 21.017"
                            ></path>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </button>
                  <button
                    data-v-e13782fa=""
                    type="button"
                    data-tiara-action-name="click_language_ko"
                    class="btn_language"
                  >
                    <span data-v-e13782fa=""
                      ><span data-v-e13782fa="" class="screen_out"
                        >View in Korean</span
                      >
                      <svg
                        data-v-400e4f9a=""
                        data-v-e13782fa=""
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 25 24"
                        class="ico_korean"
                      >
                        <g data-v-400e4f9a="" fill="none" fill-rule="evenodd">
                          <g data-v-400e4f9a="" stroke-width="1.5">
                            <path
                              data-v-400e4f9a=""
                              d="M19.353 9.914c0 5.213-4.226 9.438-9.438 9.438-5.213 0-9.438-4.225-9.438-9.438C.477 4.702 4.702.477 9.915.477c5.212 0 9.438 4.225 9.438 9.437z"
                              transform="translate(-1375 -169) translate(79.5 145) translate(1248 24) translate(50 2)"
                            ></path>
                            <path
                              data-v-400e4f9a=""
                              d="M19.205 11.52c-.451-2.769-2.357-4.129-4.643-4.227-2.434-.023-3.491 1.71-4.267 2.615l-.594.69c-1.361 1.238-2.384 1.633-3.876 1.588C2.897 12.153.888 9.456.888 7.224"
                              transform="translate(-1375 -169) translate(79.5 145) translate(1248 24) translate(50 2)"
                            ></path>
                          </g>
                        </g></svg
                    ></span>
                  </button>
                  <button
                    data-v-e13782fa=""
                    type="button"
                    data-tiara-action-name="click_darkmode"
                    class="btn_mode"
                  >
                    <span data-v-e13782fa=""
                      ><span data-v-e13782fa="" class="screen_out">
                        Change to Dark mode
                      </span>
                      <svg
                        data-v-c04f5d06=""
                        data-v-e13782fa=""
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        class="ico_mode_dark"
                      >
                        <g
                          data-v-c04f5d06=""
                          fill="none"
                          fill-rule="evenodd"
                          stroke-linejoin="round"
                        >
                          <g data-v-c04f5d06="" stroke-width="1.5">
                            <path
                              data-v-c04f5d06=""
                              d="M16.086 13.417c-5.013 0-9.076-4.04-9.076-9.023 0-1.596.42-3.093 1.152-4.394C3.58.456 0 4.3 0 8.977 0 13.961 4.064 18 9.076 18c3.407 0 6.372-1.868 7.924-4.628-.3.03-.605.045-.914.045z"
                              transform="translate(-1344 -24) translate(1248 24) translate(96) translate(4 3)"
                            ></path>
                          </g>
                        </g></svg
                    ></span>
                  </button>
                </div>
                <!---->
              </div>
              <!---->
            </header>
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
                                          href="https://app-pc.kakaocdn.net/talk/win32/KakaoTalk_Setup.exe"
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
                                          href="https://app-pc.kakaocdn.net/talk/win32/under_win10/KakaoTalk_Setup.exe"
                                          target="_blank"
                                          ><span
                                            data-v-37d8c9b3=""
                                            data-v-0cb110a9=""
                                            class="item_link"
                                            >For Windows 7, 8, 8.1</span
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
                                          href="https://e.kakao.com/"
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
                                          href="https://center-pf.kakao.com/"
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
                                          href="https://mail.kakao.com"
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
                            href="javascript;"
                            class="link_tag"
                            >#kakaotalk</a
                          ><a
                            data-v-49e4e6a4=""
                            href="javascript;"
                            class="link_tag"
                            >#life</a
                          ><a
                            data-v-49e4e6a4=""
                            href="javascript;"
                            class="link_tag"
                            >#messenger</a
                          ><a
                            data-v-49e4e6a4=""
                            href="javascript;"
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
                        href="service/service"
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
                            href="/page/?searchKeyword=Vaccination Certificate&amp;searchPage=1"
                            class="link_service"
                            >#Vaccination Certificate</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="/page/?searchKeyword=Certificate issuance&amp;searchPage=1"
                            class="link_service"
                            >#Certificate issuance</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="/page/?searchKeyword=Developer Tools&amp;searchPage=1"
                            class="link_service"
                            >#Developer Tools</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="/page/?searchKeyword=Kakao map&amp;searchPage=1"
                            class="link_service"
                            >#Kakao map</a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://kakaohealthcare.com/"
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
                            href="https://closer.campaign.kakao.com/?t_src=corp_1122"
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
                            href="https://www.kakaocorp.com/page/service/service?tab=communication"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Communication<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://www.kakaocorp.com/page/service/service?tab=lifestyle"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Business<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://www.kakaocorp.com/page/service/service?tab=business"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Life<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://www.kakaocorp.com/page/service/service?tab=Shopping"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Shopping<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://www.kakaocorp.com/page/service/service?tab=entertainment"
                            target="_self"
                            rel="nosublink"
                            class="link_service"
                            >Entertainment<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://www.kakaocorp.com/page/service/service?tab=socal_impact"
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
                            href=""
                            rel="nosublink"
                            class="link_service"
                            >Kakao<!----><!----></a
                          >
                        </li>
                        <li data-v-45464abf="" class="item_service">
                          <a
                            data-v-45464abf=""
                            href="https://www.kakaopay.com/"
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
                            href="https://www.kakaobank.com/"
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
                            href="https://www.kakaomobility.com/"
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
                            href="https://kakaostyle.com/"
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
                            href="https://kakaoent.com/"
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
                            href="https://www.kakaogamescorp.com/"
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
                            href="https://www.kakaopiccoma.com/"
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
                            href="https://www.kakaoenterprise.com/"
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
                            href="https://kakaohealthcare.com/"
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
                            href="https://www.kakao.vc/"
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
                            href="http://kakaoinvestment.com/"
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
                            href="https://www.linkagelab.co.kr/"
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
                            href="https://www.kakaocorp.com/ir/managementInformation/shareholderComposition"
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
                            href="https://www.kakaocorp.com/ir/stockInformation"
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
                            href="https://www.kakaocorp.com/ir/financialInformation/consolidatedFinancialStatements"
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
                            href="https://www.kakaocorp.com/ir/referenceRoom/earningsAnnouncement"
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
                            href="https://www.kakaocorp.com/ir/disclosureInformation"
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
                            href="https://www.kakaocorp.com/ir/noticeList"
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
                            href="https://accounts.kakao.com/"
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
                            href="https://privacy.kakao.com/main?lang=ko"
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
                            href="https://cs.kakao.com/"
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
                            href="https://cs.daum.net/"
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
                            href="https://ccs.kakao.com/"
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
                            href="https://careers.kakao.com/index"
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
                        href="https://www.kakao.com/policy/terms?lang=en"
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
                        href="https://www.kakao.com/policy/location?lang=en"
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
                        href="https://www.kakao.com/policy/privacy?lang=en"
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
                        href="https://www.kakao.com/policy/oppolicy?lang=en"
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
                        href="https://www.kakaocorp.com/page/detail/10985?lang=en"
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
                        href="https://kakao.com/policy/brand/trademark?lang=en"
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
                        href="https://www.kakao.com/notices?lang=en"
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
                        href="https://www.kakaocorp.com/ir/wayToCome?lang=en"
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
                        href="javascript;"
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
                          href="https://kakao.ai/"
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
                          href="https://privacy.kakao.com/main?lang=ko"
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
                          href="https://developers.kakao.com/"
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
                          href="https://www.daum.net/"
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
                          href="https://jeju.kakao.com/"
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
                    <a href="https://www.kakaocorp.com/page" data-v-45464abf=""
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

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>微軟SCSS版本</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    {{-- <link rel="stylesheet" href="./css/hamburger.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/microsoft.css') }}" />
    <link rel="icon" href="{{ asset('image/microsoft.ico') }}" />
    @vite('resources/css/app.css')
    <style>
    </style>
  </head>
  <body>
    <header>
      <nav>
        <input type="checkbox" id="hamburger" hidden />
        <label for="hamburger" class="hamburger-menu">
          <div id="line-1" class="line"></div>
          <div id="line-2" class="line"></div>
          <div id="line-3" class="line"></div>
        </label>
        <div id="nav-logo">
          <a href="/">
            <img src="{{ asset('image/logo.png') }}" alt="" />
          </a>
        </div>
        <div id="nav-2">
          <div class="6-link"><a href="#">Microsoft 365</a></div>
          <div class="6-link"><a href="#">Teams</a></div>
          <div class="6-link"><a href="#">Windows</a></div>
          <div class="6-link"><a href="#">Surface</a></div>
          <div class="6-link"><a href="#">Xbox</a></div>
          <div class="6-link"><a href="#">支援</a></div>
          <div id="nav-2-menu">
            <input
              type="checkbox"
              id="small-ham-1"
              class="chevron-switch"
              hidden
            />
            <label for="small-ham-1" class="chevron-label">
              <li>
                <span>軟體</span>
                <!-- <div id="close"><i class="fa-solid fa-angle-down"></i></div>
                            <div id="open"><i class="fa-solid fa-angle-up"></i></div> -->

                <i id="close" class="fa-solid fa-angle-down"></i>
                <i id="open" class="fa-solid fa-angle-up"></i>
              </li>
            </label>
            <div id="snb-drop-menu-1" class="snb-drop-menu">
              <ul>
                <li><a href="#">Windows 應用程式</a></li>
                <li><a href="#">AI</a></li>
                <li><a href="#">OneDrive</a></li>
                <li><a href="#">Outlook</a></li>
                <li><a href="#">Skype</a></li>
                <li><a href="#">OneNote</a></li>
                <li><a href="#">Microsoft Teams</a></li>
              </ul>
            </div>

            <input
              type="checkbox"
              id="small-ham-2"
              class="chevron-switch"
              hidden
            />
            <label for="small-ham-2" class="">
              <li>
                <span>娛樂</span>
                <i class="fa-solid fa-angle-down"></i>
                <i class="fa-solid fa-angle-up"></i>
              </li>
            </label>
            <div id="snb-drop-menu-2" class="snb-drop-menu">
              <ul>
                <li><a href="#">Xbox Game Pass Ultimate</a></li>
                <li><a href="#">Xbox Live Gold</a></li>
                <li><a href="#">Xbox 與遊戲</a></li>
                <li><a href="#">電腦遊戲</a></li>
                <li><a href="#">Windows 遊戲</a></li>
              </ul>
            </div>
            <input
              type="checkbox"
              id="small-ham-3"
              class="chevron-switch"
              hidden
            />
            <label for="small-ham-3" class="chevron-label">
              <li>
                <span>個人電腦和設備</span>
                <i class="fa-solid fa-angle-down"></i>
                <i class="fa-solid fa-angle-up"></i>
              </li>
            </label>
            <div id="snb-drop-menu-3" class="snb-drop-menu">
              <ul>
                <li><a href="#">選購 Xbox</a></li>
                <li><a href="#">電腦配件</a></li>
              </ul>
            </div>
            <input
              type="checkbox"
              id="small-ham-4"
              class="chevron-switch"
              hidden
            />
            <label for="small-ham-4" class="chevron-label">
              <li>
                <span>商務適用</span>
                <i class="fa-solid fa-angle-down"></i>
                <i class="fa-solid fa-angle-up"></i>
              </li>
            </label>
            <div id="snb-drop-menu-4" class="snb-drop-menu">
                <ul>
                    <li><a href="#">Microsoft Cloud</a></li>
                    <li><a href="#">Microsoft 安全性</a></li>
                    <li><a href="#">Azure</a></li>
                    <li><a href="#">Dynamics 365</a></li>
                    <li><a href="#">商務用 Microsoft 365</a></li>
                    <li><a href="#">Microsoft 產業</a></li>
                    <li><a href="#">Microsoft Power Platform</a></li>
                    <li><a href="#">Windows 365</a></li>
                </ul>
            </div>
            <input
                type="checkbox"
                id="small-ham-5"
                class="chevron-switch"
                hidden
            />
            <label for="small-ham-5" class="chevron-label">
                <li>
                    <span>開發人員與 IT</span>
                    <i class="fa-solid fa-angle-down"></i>
                    <i class="fa-solid fa-angle-up"></i>
                </li>
            </label>
            <div id="snb-drop-menu-5" class="snb-drop-menu">
                <ul>
                    <li><a href="#">開發人員中心</a></li>
                    <li><a href="#">文件</a></li>
                    <li><a href="#">Microsoft Learn</a></li>
                    <li><a href="#">Microsoft 技術社群</a></li>
                    <li><a href="#">Azure Marketplace</a></li>
                    <li><a href="#">AppSource</a></li>
                    <li><a href="#">Visual Studio</a></li>
                </ul>
            </div>
            <input
                type="checkbox"
                id="small-ham-6"
                class="chevron-switch"
                hidden
            />
            <label for="small-ham-6" class="chevron-label">
                <li>
                <span>其他</span>
                <i class="fa-solid fa-angle-down"></i>
                <i class="fa-solid fa-angle-up"></i>
                </li>
            </label>
            <div id="snb-drop-menu-6" class="snb-drop-menu">
                <ul>
                <li><a href="#">Microsoft Rewards</a></li>
                <li><a href="#">免費下載與安全性</a></li>
                <li><a href="#">教育</a></li>
                <li><a href="#">禮品卡</a></li>
                <li><a href="#">Licensing</a></li>
              </ul>
            </div>
            <div id="menu-down">
              <a href="#">檢視網站地圖</a>
            </div>
          </div>
        </div>
        <div id="nav-3">
            <input type="checkbox" id="btn-menu" hidden />
          <label for="btn-menu" class="btn-menu-sytle">
            <div>
              <span>所有Microsoft</span>
              <i class="fa-solid fa-angle-down"></i>
            </div>
          </label>

          <div id="search">
            <a href="#">
              <span class="search">搜尋</span>
              <i class="fa-thin fa-magnifying-glass fa-rotate-90"></i>
            </a>
          </div>

          <div id="cart">
            <a href="#">
              <span class="cart">購物車</span>
              <i class="fa-sharp fa-light fa-cart-shopping"></i>
            </a>
          </div>

          <div id="user">
            <a href="#">
              <span id="signin">登入</span>
              <!-- <img src="./img/login.svg" alt=""> -->
              <!-- <div id="signin"><span>登入</span></div> -->
              <div id="login-img">
                {{-- <img src="./img/login.svg" alt="" /> --}}
                <img src="{{ asset('image/login.svg') }}" alt="" />
              </div>
            </a>
          </div>
          <div id="menu">
            <div id="menu-main">
              <ul>
                <span>軟體</span>
                <li><a href="#">Windows 應用程式</a></li>
                <li><a href="#">AI</a></li>
                <li><a href="#">OneDrive</a></li>
                <li><a href="#">Outlook</a></li>
                <li><a href="#">Skype</a></li>
                <li><a href="#">OneNote</a></li>
                <li><a href="#">Microsoft Teams</a></li>
              </ul>
              <ul>
                <span>個人電腦和設備</span>
                <li><a href="#">選購 Xbox</a></li>
                <li><a href="#">電腦配件</a></li>
              </ul>
              <ul>
                <span>娛樂</span>
                <li><a href="#">Xbox Game Pass Ultimate</a></li>
                <li><a href="#">Xbox Live Gold</a></li>
                <li><a href="#">Xbox 與遊戲</a></li>
                <li><a href="#">電腦遊戲</a></li>
                <li><a href="#">Windows 遊戲</a></li>
              </ul>
              <ul>
                <span>商務適用</span>
                <li><a href="#">Microsoft Cloud</a></li>
                <li><a href="#">Microsoft 安全性</a></li>
                <li><a href="#">Azure</a></li>
                <li><a href="#">Dynamics 365</a></li>
                <li><a href="#">商務用 Microsoft 365</a></li>
                <li><a href="#">Microsoft 產業</a></li>
                <li><a href="#">Microsoft Power Platform</a></li>
                <li><a href="#">Windows 365</a></li>
              </ul>
              <ul>
                <span>開發人員與 IT</span>
                <li><a href="#">開發人員中心</a></li>
                <li><a href="#">文件</a></li>
                <li><a href="#">Microsoft Learn</a></li>
                <li><a href="#">Microsoft 技術社群</a></li>
                <li><a href="#">Azure Marketplace</a></li>
                <li><a href="#">AppSource</a></li>
                <li><a href="#">Visual Studio</a></li>
              </ul>
              <ul>
                <span>其他</span>
                <li><a href="#">Microsoft Rewards</a></li>
                <li><a href="#">免費下載與安全性</a></li>
                <li><a href="#">教育</a></li>
                <li><a href="#">禮品卡</a></li>
                <li><a href="#">Licensing</a></li>
              </ul>
            </div>
            <div id="menu-down">
              <a href="#">檢視網站地圖</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section id="slide">
        <div id="picture-hight" class="picture">
          <!-- swiper -->
          <div id="my-swiper" class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card-introduce right">
                  <h2>Surface Pro 9</h2>
                  <div class="mb-4">
                    平板電腦的彈性和筆記型電腦的效能 — 全都在一台攜帶超方便的裝置
                  </div>
                  <div class="link-group">
                    <a href="" class="btn-blue-one">深入瞭解</a>

                  </div>
                </div>
                <picture>
                  <source media="(min-width: 1400px)" srcset="{{ asset('image/swiper/02-1-1399x600.avif') }}"/>
                  <source media="(min-width: 1084px)" srcset="{{ asset('image/swiper/02-1-1083x600.avif') }}"/>
                  <source media="(min-width: 860px)" srcset="{{ asset('image/swiper/02-1-859x540.avif') }}"/>
                  <source media="(min-width: 540px)" srcset="{{ asset('image/swiper/02-1-859x540.avif') }}"/>
                  <img  src="{{ asset('image/swiper/02-1-1920x600.avif') }}"  alt="" width="100%" />
                </picture>
              </div>
              <div class="swiper-slide">
                <div class="card-introduce left">
                  <h2>Microsoft 365</h2>
                  <div class="mb-4">
                    使用 Microsoft 365
                    應用程式實現創意想法、提高線上和離線安全，並專注於最重要的事。
                  </div>
                  <div class="link-group">
                    <a href="" class="btn-blue-one">適合１人使用</a>
                    <a href="" class="btn-transparen-two">最多可供六人使用</a>
                  </div>
                </div>
                <picture>
                  <source media="(min-width: 1400px)" srcset="{{ asset('image/swiper/VP4-1399x600.avif') }}" />
                  <source media="(min-width: 1084px)" srcset="{{ asset('image/swiper/VP3-1083x600.avif') }}" />
                  <source media="(min-width: 860px)" srcset="{{ asset('image/swiper/VP2-859x540.avif') }}" />
                  <source media="(min-width: 540px)" srcset="{{ asset('image/swiper/VP2-859x540.avif') }}" />
                  <img src="{{ asset('image/swiper/VP2-859x540.avif') }}" alt="" width="100%"/>
                </picture>
              </div>
            </div>
            <div id="next" class="swiper-button-next"></div>
            <div id="prev" class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
          <!-- <img src="./img/Highlight-M365-Icon-Bounce-Word-Merch_VP4-1399x600.avif" class="w-100" alt=""> -->
        </div>

        <div class="control"></div>
      </section>
      <section id="aem">
        <ul>
          <li>
            <img
              src="{{ asset('image/gldn-Quick-Link-Icon-80x80-Microsoft-365.webp') }}"
              alt=""
            />
            <a href="#">選擇您的 Microsoft 365</a>
          </li>
          <li>
            <img src="{{ asset('image/icon-LL-surface-kickstand-120x120.webp') }}" alt="" />
            <a href="#">選購 Surface 裝置</a>
          </li>
          <li>
            <img
              src="{{ asset('image/gldn-Quick-Link-Icon-80x80-Microsoft-365.webp') }}"
              alt=""
            />
            <a href="#">取得 Windows 11</a>
          </li>
        </ul>
      </section>
      @dd($data2)
      <section class="four-box">
        @foreach ($news123 as $item)
        <div class="col-8">
          <a href="#" class="cta">
            <img src="{{ $item->img_path }}" alt="#" />
            <div class="card-box">
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->my_content }}</p>
            </div>
          </a>
        </div>
        @endforeach

      </section>
      <section id="layout">
        <div class="highlight">
          <picture>
            <source
              media="(min-width: 1400px)"
              srcset="{{ asset('swiper/gldn-MSFT-hero-Edge_VP5-1596x600.avif') }}"
            />
            <source
              media="(min-width: 1084px)"
              srcset="{{ asset('swiper/gldn-MSFT-hero-Edge_VP3-1083x600.avif') }}"
            />
            <source
              media="(min-width: 860px)"
              srcset="{{ asset('swiper/gldn-MSFT-hero-Edge_VP2-859x540.avif') }}"
            />
            <source
              media="(min-width: 540px)"
              srcset="{{ asset('swiper/gldn-MSFT-hero-Edge_VP2-859x540.avif') }}"
            />
            <img
              src="{{ asset('swiper/gldn-MSFT-hero-Edge_VP5-1596x600.avif') }}"
              alt=""
              width="100%"
            />
          </picture>
          <div class="card-introduce left hidden">
            <h2>Microsoft Edge</h2>
            <div class="mb-4">
              在您瀏覽時提供世界級的效能，以及更多的隱私、更充足的生產力與更高的價值
            </div>
            <div class="link-group">
              <div class="link-group">
                <a
                  href="https://www.microsoft.com/zh-tw/edge?form=MI13F3&OCID=MI13F3"
                  download=""
                  class="btn-blue size-3"
                  >立即下載</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="h2 hidden"><h2>適用於商務</h2></div>
      <section class="four-box !hidden">
        <div class="col-8">
          <a href="#" class="cta">
            <img
              src="{{ asset('image/gldn-Surf-CP-SurfaceFamilyForBusiness.avif') }}"
              alt="#"
            />
            <div class="card-box">
              <h3>適用於商務的 Surface</h3>
              <p>無論從事哪種工作，都有一款有助於成功的 Surface。</p>
            </div>
            <div class="card-footer">
              <div class="link-group">立即選購</div>
            </div>
          </a>
        </div>
        <div class="col-8">
          <a href="#" class="cta">
            <img src="{{ asset('image/gldn-CP-Microsoft-Teams-Commercial.webp') }}" alt="#" />
            <div class="card-box">
              <h3>免費取得 Microsoft Teams</h3>
              <p>線上會議、聊天和共用雲端儲存空間，盡在一處。</p>
            </div>
            <div class="card-footer">
              <div class="link-group">免費註冊</div>
            </div>
          </a>
        </div>

        <div class="col-8">
          <a href="#" class="cta">
            <img src="{{ asset('image/Content-Card-Windows-11-Business.jpg') }}" alt="#" />
            <div class="card-box">
              <h3>商務用 Windows 11</h3>
              <p>
                專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。
                為所有人帶來安全性。
              </p>
            </div>
            <div class="card-footer">
              <div class="link-group">深入了解</div>
            </div>
          </a>
        </div>

        <div class="col-8">
          <a href="#" class="cta">
            <img
              src="{{ asset('image/Content-Card-Microsoft-365-For-Business-Woman-Teams-Call.webp') }}"
              alt="#"
            />
            <div class="card-box">
              <h3>免費試用 Microsoft 365</h3>
              <p>
                透過一個月免費試用的 Microsoft 365 商務標準版，跨裝置取得
                Microsoft Teams、安全雲端儲存空間和進階應用程式。
              </p>
            </div>
            <div class="card-footer">
              <div class="link-group">開始免費使用</div>
            </div>
          </a>
        </div>
      </section>
      <section id="socialfollow">
        <div id="socialfollow-text">關注Microsoft</div>
        <ul>
          <img src="{{ asset('image/Facebook 2x.avif') }}" alt="" />
          <img src="{{ asset('image/YouTube 2x.webp') }}" alt="" />
        </ul>
      </section>
      <section id="back-to-top">
        <div class="top-btn">
          <a href="#"><i class="fa-solid fa-arrow-up"></i>&nbsp;回到首頁</a>
        </div>
      </section>
    </main>

    <footer>
      <div id="foot-nav-6">
        <div class="foot-nav">
          <div class="foot-heading">最新動向</div>
          <ul>
            <li><a href="#">Microsoft 365</a></li>
            <li><a href="#">Surface Go</a></li>
            <li><a href="#">Surface Book 2</a></li>
            <li><a href="#">Surface Pro</a></li>
            <li><a href="#">Windows 11 應用程式</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <div class="foot-heading">Microsoft Store</div>
          <ul>
            <li><a href="#">帳戶設定檔</a></li>
            <li><a href="#">下載中心</a></li>
            <li><a href="#">Microsoft Store 支援</a></li>
            <li><a href="#">退貨/退款</a></li>
            <li><a href="#">訂單追蹤</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <div class="foot-heading">教育</div>
          <ul>
            <li><a href="#">Microsoft 教育</a></li>
            <li><a href="#">教育裝置</a></li>
            <li><a href="#">Microsoft Teams 教育版</a></li>
            <li><a href="#">Microsoft 365 教育版</a></li>
            <li><a href="#">Office 教育版</a></li>
            <li><a href="#">教育工作者訓練和發展</a></li>
            <li><a href="#">學生和家長優惠</a></li>
            <li><a href="#">Azure 學生版</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <div class="foot-heading">商務</div>
          <ul>
            <li><a href="#">Microsoft Cloud</a></li>
            <li><a href="#">Microsoft 安全性</a></li>
            <li><a href="#">Azure</a></li>
            <li><a href="#">Dynamics 365</a></li>
            <li><a href="#">Microsoft 365</a></li>
            <li><a href="#">Microsoft Advertising</a></li>
            <li><a href="#">Microsoft 產業</a></li>
            <li><a href="#">Microsoft Teams</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <div class="foot-heading">開發人員與 IT</div>
          <ul>
            <li><a href="#">開發人員中心</a></li>
            <li><a href="#">文件</a></li>
            <li><a href="#">Microsoft Learn<</a></li>
            <li><a href="#">Microsoft 技術社群<</a></li>
            <li><a href="#">Azure Marketplace<</a></li>
            <li><a href="#">Microsoft Power Platform<</a></li>
            <li><a href="#">Microsoft Power Platform<</a></li>
            <li><a href="#">Visual Studio<</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <div class="foot-heading">公司</div>
          <ul>
            <li><a href="#">人才招募</a></li>
            <li><a href="#">公司新聞</a></li>
            <li><a href="#">Microsoft 隱私權</a></li>
            <li><a href="#">投資者</a></li>
            <li><a href="#">永續性</a></li>
          </ul>
        </div>
      </div>
      <div id="foot-base">
        <div class="foot-top">地球 中文(台灣)</div>
        <div class="foot-mid">
          <span>您的隱私權</span>
        </div>
        <ul>
          <li><a href="#">連絡 Microsoft</a></li>
          <li><a href="#">隱私權</a></li>
          <li><a href="#">使用規定</a></li>
          <li><a href="#">商標</a></li>
          <li><a href="#">有關我們的廣告訊息</a></li>
          <li>© Microsoft 2023</li>
        </ul>
      </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      autoplay: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        // clickable: true,
        //客製化部分
        renderBullet: function (index, className){
          console.log(index, className);
          if (index == 0) {
            return`<span class="play"></span><span class="pause"></span><span class="${className}"></span>`
          }else {
            return`<span class="${className}"></span>`
          }

        }
      },
      mousewheel: true,
      keyboard: true,
    });
    pauseBtn = document.querySelector('.pause');
    playBtn = document.querySelector('.play');
    pauseBtn.addEventListener('click', () => {
      swiper.autoplay.stop();
      pauseBtn.style.display = 'none';
      playBtn.style.display = 'inline-block';
    })
    playBtn.addEventListener('click', () => {
      swiper.autoplay.start();
      pauseBtn.style.display = 'inline-block';
      playBtn.style.display = 'none';
    })
    </script>
    <script>

    </script>
  </body>
</html>

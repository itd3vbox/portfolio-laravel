<nav id="page-c1">

    <div class="content-close">
        <div class="button-icon btn-close">
            <i class="fas fa-times"></i>
        </div>
    </div>

    <div class="content-zero">

        <div class="avatar">
            <div class="frame">
                <img src="#" alt="Avatar">
            </div>
        </div>

        <h6 class="app-name">Portfolio</h6>

        <div class="languages">
            <a href="{{ route('web.home', ['locale' => 'en']) }}" 
                class="language {{ app()->getLocale() == 'en' ? 'selected' : '' }}">English</a>
            <a href="{{ route('web.home', ['locale' => 'fr']) }}" 
                class="language {{ app()->getLocale() == 'fr' ? 'selected' : '' }}">Français</a>
        </div>
        
    </div>

    <div class="content-main">
        <a href="#projects" class="item">
            <div class="shape"></div>
            <div class="label">Projects</div>
        </a>
        <a href="#blog" class="item">
            <div class="shape"></div>
            <div class="label">Blog</div>
        </a>
    </div>

    <div class="content-bottom">

        <div class="links">
            
            <a href="#" class="link button-icon">
                <i class="fab fa-github"></i>
            </a>

            <a href="#" class="link button-icon">
                <i class="fab fa-twitter"></i>
            </a>

            <a href="#" class="link button-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>

        </div>

        <div class="app-name">{{ env('APP_NAME') }}</div>

        <div class="app-name-domain">{{ env('APP_NAME_DOMAIN') }}</div>

        <div class="app-theme">
            <div class="date">2021</div>
            <div class="label">Theme:</div>
            <div class="name">Simple</div>
        </div>

    </div>

</nav>
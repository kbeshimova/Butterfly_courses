<div class="row">
    <div id="sidebar-btn">
        <i class="bx bx-menu position-absolute menus fs-2"
            style="z-index: 7; cursor: pointer; top: 1.5%; left: 20px;"></i>
    </div>
    <div class="app-brand " style="z-index: 7; position:absolute; left:50px; top:0;">
        <a href="index.html" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
                <img class="py-3" src="{{ asset('assets/img/icons/brands/logo-book.svg') }}" height="60"
                    alt="divider" />
            </span>
            <span class="app-brand-text demo text-body fw-bold">Butterfly</span>
        </a>
    </div>
</div>

<div class="sidebar ">
    <div class="d-flex flex-column justify-content-between h-100">
        <div>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/courses-list">Курсы</a></li>
                <li><a href="/login">Аккаунт</a></li>
                <li><a href="/orders">История заказов</a></li>
            </ul>
        </div>
        <div class="pl-2">
            <p style="color: #741777; font-size:16px; font-weight:700;">+747 488 0559</p>
            <div class="col-lg-12 col-md-12 col-sm-12 row d-flex align-items-center justify-content-center contacts">
                <div class="col-3"><a href="tel:7474880559"><i class='bx bx-sm bxs-phone' ></i></a></div>
                <div class="col-3"><a href="mailto:olgabrushin@gmail.com" target="_blank"><i class='bx bx-sm bxs-envelope' ></i></a></div>
                <div class="col-3"><a href="https://t.me/butterflyonl" target="_blank"><i class="bx bx-sm bxl-telegram"></i></a></div>
                <div class="col-3"><a href="https://www.instagram.com/butterfly_onl/" target="_blank"><i class='bx bx-sm bxl-instagram-alt'></i></a></div>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset(mix('assets/js/jquery-3.7.0.min.js')) }}"></script>
<script>
    $(document).ready(function() {
        $('#sidebar-btn').click(function() {
            $('.sidebar').toggleClass('gorunyar');
            $('.bx-menu').toggleClass('bx-x');
        });
    });
</script>

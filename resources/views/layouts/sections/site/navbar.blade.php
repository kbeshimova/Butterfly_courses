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

<div class="sidebar">
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/courses-list">Курсы</a></li>
        <li><a href="/login">Аккаунт</a></li>
        <li><a href="/orders">История заказов</a></li>
        <li><a href="/karina">Karina</a></li>
    </ul>
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



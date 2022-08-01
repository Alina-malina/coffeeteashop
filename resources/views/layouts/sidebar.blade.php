<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist" style="    flex-direction: column;">
                <li role="presentation">
                    <a href="{{ url('/') }}">
                        Сайт
                    </a>
                </li>
                <p>&nbsp;</p>
                <li role="presentation">
                    <a href="{{ url('/admin/products') }}">
                        Товары
                    </a>
                </li>
                <p>&nbsp;</p>
                <li role="presentation">
                    <a href="{{ url('/admin/categories') }}">
                        Категории товары
                    </a>
                </li>
                <p>&nbsp;</p>
                <li role="presentation">
                    <a href="{{ url('/admin/orders') }}">
                        Заявки
                    </a>
                </li>
                <p>&nbsp;</p>
            </ul>
        </div>
    </div>
</div>

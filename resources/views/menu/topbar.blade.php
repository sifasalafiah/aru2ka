<header class="ui menu fixed top borderless" id="topbar">
    <div class="item mobile only tablet only" data-role="sidebar-visibility-switcher"><i class="icon sidebar"></i></div>

    <div class="menu p-l-2" id="titlebar">
        <div class="left menu">
            <div class="item">
                {{ config('laravolt.ui.brand_name') }}
            </div>
        </div>
    </div>

    <div class="menu right p-r-1" id="userbar" data-turbolinks-permanent>
        @auth
            <div class="item">
                <div class="ui compact menu b-0">
                    <div class="ui simple dropdown basic button top right pointing b-0 p-x-volt-0">
                        <img src="{{ auth()->user()->avatar }}" alt="" class="ui image avatar">
                        <i class="dropdown icon m-l-0 {{ config('laravolt.ui.color') }}"></i>
                        <div class="menu">
                            <div class="header"><span class="ui text {{ config('laravolt.ui.color') }}">{{ auth()->user()->name }}</span></div>

                            <div class="divider"></div>

                            <a href="#" class="item">Edit Profil</a>
                            <a href="#" class="item">Edit Password</a>

                            <div class="divider"></div>

                            <a href="#" class="item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        @endauth

    </div>
</header>

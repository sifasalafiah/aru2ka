<nav class="sidebar" data-role="sidebar" id="sidebar" data-turbolinks-permanent>
    <div class="sidebar__scroller">
        <div class="sidebar__menu">
            @auth
            <div class="sidebar__profile m-b-0 p-0 p-t-2 ui basic segment text-center">
                <img src="{{ auth()->user()->avatar }}" alt="" class="ui image tiny centered avatar">
                <h4 class="ui header m-b-3">
                    {{ auth()->user()->name }}
                    <div class="sub header"></div>
                </h4>
            </div>
            @endauth
            <div class="ui attached vertical menu fluid" data-role="original-menu">
                <div class="item">
                    <div class="header">Title</div>
                </div>
                <!-- multi -->
                <div class="ui accordion sidebar__accordion m-b-1" data-role="sidebar-accordion">
                    <div
                        class="title">
                        <i class="left icon user-friends"></i>
                        <span>Tit</span>
                        <i class="angle down icon"></i>
                    </div>
                    <div
                        class="content">
                        <div class="ui list">
                            <a href="#" data-parent="jbjbsj"
                                class="item">title</a>
                        </div>
                    </div>
                </div>
                <!-- end multi -->
                <div class="ui accordion sidebar__accordion">
                    <a class="title empty" href="#">
                        <i class="left icon user-friends"></i>
                        <span>Title</span>
                    </a>
                    <div class="content"></div>
                </div>
            </div>
        </div>
    </div>
</nav>

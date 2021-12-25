<x-coda-base :title="$title">
    <div class="layout--app">
        @include('arunika::menu.topbar')
        @include('arunika::menu.sidebar')

        <main class="content">

            <div class="content__inner">

                @include('arunika::menu.actionbar')

                <div class="ui container-fluid content__body p-3">
                    {{ $slot }}
                </div>

            </div>
        </main>
    </div>
</x-coda-base>

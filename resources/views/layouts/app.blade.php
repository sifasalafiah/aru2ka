<x-coda-base :title="$title">
    <div class="layout--app">
        @include('aru2ka::menu.topbar')
        @include('aru2ka::menu.sidebar')

        <main class="content">

            <div class="content__inner">

                @include('aru2ka::menu.actionbar')

                <div class="ui container-fluid content__body p-3">
                    {{ $slot }}
                </div>

            </div>
        </main>
    </div>
</x-coda-base>

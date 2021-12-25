<x-coda-base :title="$title">
    <div class="layout--app">
        <main class="content">
            <div class="content__inner">
                @include('components.menu.actionbar')
                <div class="ui container-fluid content__body p-3">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</x-coda-base>

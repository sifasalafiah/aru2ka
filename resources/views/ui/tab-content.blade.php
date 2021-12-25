@push('tab.titles.'.\Codakarta\Aru2ka\Components\Ui\Tab::getActiveTab())
    <a {{ $attributes->merge(['class' => "item $activeClass"]) }} data-tab="{{ $key }}">{!! $title !!}</a>
@endpush

@push('tab.contents.'.\Codakarta\Aru2ka\Components\Ui\Tab::getActiveTab())
    <div {{ $attributes->merge(['class' => "ui bottom attached tab segment $activeClass"]) }} data-tab="{{ $key }}">
        {!! $slot !!}
    </div>
@endpush

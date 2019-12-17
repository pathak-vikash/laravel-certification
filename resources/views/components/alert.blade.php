@component('shared.alert')
    @slot('title')
        Forbidden
    @endslot

    {{$slot}} - [component]
@endcomponent
@php

$headline = $component["headline"];
$subheadline = Arr::get($component, "subheadline");
$buttons = Arr::get($component, "buttons", []);


@endphp
<div {!! $editableAttributes !!} >

    <x-ui.hero
    :headline='$headline'
    :subheadline='$subheadline'


    >



@foreach ($buttons as $button)

<x-ui.button
:link="$button['link']['url']"
:label="$button['label']"
/>
@endforeach


</x-ui.hero>

</div>

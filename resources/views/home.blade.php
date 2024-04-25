<x-layout>
    <x-slot:title>
        {{ $story["name"] }}
    </x-slot>
{{ $story["name"] }}


        <livewire:storyblok-content :content="$story['content']" :key="$story['content']['_uid']">







</x-layout>

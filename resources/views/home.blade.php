<x-layout>
    <x-slot:title>
        {{ $story["name"] }}
    </x-slot>
    <livewire:storyblok-content :content="$story['content']" :key="$story['content']['_uid']">
</x-layout>

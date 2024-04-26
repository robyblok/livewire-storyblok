<div {!! $editableAttributes !!}>
    @foreach($content["body"] as $key => $column)
    <livewire:storyblok-component :component="$column" :key="$column['_uid']">
        @endforeach

</div>

<div {!! $editableAttributes !!}>
    <h1> PAGE </h1>
    @foreach($content["body"] as $key => $column)
    <livewire:storyblok-component :component="$column" :key="$column['_uid']">
        @endforeach

</div>

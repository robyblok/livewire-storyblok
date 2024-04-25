<div {!! $editableAttributes !!}>
    @foreach($component["columns"] as $key => $column)
        <livewire:storyblok-component :component="$column" :key="$column['_uid']">
    @endforeach

</div>

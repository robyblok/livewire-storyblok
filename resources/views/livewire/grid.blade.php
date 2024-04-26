


<div {!! $editableAttributes !!} id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">

    <div class=" p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
        <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-2 xl:grid-cols-4 dark:text-white sm:p-8">


    @foreach($component["columns"] as $key => $column)
        <livewire:storyblok-component :component="$column" :key="$column['_uid']">
    @endforeach

</div>

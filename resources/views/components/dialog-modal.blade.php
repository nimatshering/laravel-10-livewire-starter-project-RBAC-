@props(['id' => null, 'maxWidth' => null])
<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="flex flex-row px-6 py-4 shadow-sm text-right">
        {{ $title }}
    </div>

    <div class="px-6 pb-4">
        <div class="mt-4 text-sm text-gray-600">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right mt-4">
        {{ $footer }}
    </div>
</x-modal>

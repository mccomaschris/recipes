<div class="my-6 border border-gray-300 rounded px-4 py-2"
    wire:ignore
    x-data
    x-init="
        new Taggle($el, {
            tags: {{ $tags }},
            onTagAdd: function(e, tag) {
                Livewire.emit('addTag', tag)
            },
            onTagRemove: function(e, tag) {
                Livewire.emit('deleteTag', tag)
            }
        })
    "
>

</div>
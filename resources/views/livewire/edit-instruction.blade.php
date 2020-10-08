<span x-data="
    {
        isEditing: false,
        focus: function() {
            const textInput = this.$refs.textInput;
            textInput.focus();
            textInput.select();
        }
    }
    "
    x-cloak
>
    <li>
        <span  x-show="!isEditing" x-on:click="isEditing = true; $nextTick(() => focus())">
            {{ $instruction->instruction }}
        </span>
        <span x-show="isEditing">
            <form wire:submit.prevent="save" class="inline-block w-full">
                <input type="text" class="form-input w-full" wire:model.lazy="newInstruction" x-ref="textInput" x-on:keydown.enter="isEditing = false" x-on:keydown.escape="isEditing = false" />
            </form>
        </span>
    </li>
</span>

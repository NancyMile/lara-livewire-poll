<div>
    <form wire:submit.prevent="createPoll">
        <label">Poll Title</label>
        <input type="text" wire:model.live="title">

        <div class="mb-4 mt-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div class="mb-4">
            @foreach ( $options as $key => $option )
                <div class="mb-4">
                    <label>Option  {{ $key + 1}} </label>
                    <div class="flex gap-2">
                        <input type="text" wire:model.live="options.{{ $key }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $key }})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mb-4 mt-4">
            <button class="btn" type="submit" >Create Poll</button>
        </div>


    </form>
</div>

<div>
    <form>
        <label>Poll Title</label>

        <input wire:model.live="title" type="text"  />

        Current title: {{ $title }}

        <div class="mt-4 mb-4">
            <button class="btn" wire:click.prevent="addOption">Add Option</button>
        </div>
        <div>
            @foreach($options as $index => $option)

                <div class="mb-4 mb-4">
                    {{ $index }} - {{ $option }}
                </div>
            @endforeach
        </div>

    </form>
</div>

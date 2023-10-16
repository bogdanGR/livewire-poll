<div>
    <form>
        <label>Poll Title</label>

        <input wire:model.live="title" type="text"  />

        Current title: {{ $title }}
    </form>
</div>

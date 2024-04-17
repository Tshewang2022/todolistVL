<x-layout>
    <div class="note-container">
        <a href="#" class="new-note-btn">New Note</a>
        <div class="notes">
            @foreach ($notes as $note)
            <div class="note-body">
                <div>{{ $note->note }}</div>
            </div>
            <div>
                <a href="">View</a>
                <a href="">Edit</a>
                <button class="note-delete-button">Delete</button>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>

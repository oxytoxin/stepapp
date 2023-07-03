<div class="px-16 py-8">
    <h1 class="text-4xl">About</h1>
    <div class="mt-16 flex flex-col gap-8">
        @forelse ($details->contents as $detail)
            <div>
                <h4 class="text-xl font-medium text-primary">{{ $detail['title'] }}</h4>
                <p class="mt-4">{{ $detail['content'] }}</p>
            </div>
        @empty
            <p>No about details found.</p>
        @endforelse
    </div>
</div>

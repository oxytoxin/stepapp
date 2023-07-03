<div class="px-32 py-8 flex-1">
    <div class="flex">
        <div class="w-2/5 bg-primary p-16 pr-12 flex flex-col justify-center">
            <div class="text-white">
                <div class="font-bold text-4xl">
                    <h2>TECHNOLOGY</h2>
                    <h2>BUSINESS</h2>
                    <h2>INCUBATOR</h2>
                </div>
                <hr class="border-4 my-4 border-white">
                <h2 class="text-4xl font-bold">STEP APP</h2>
                <p class="font-light">Sustainable Technopreneurship Ecosystem for Promoting and Advancing Promising Product</p>
            </div>
        </div>
        <div class="w-3/5 bg-gray-200 p-8 flex gap-4">
            <div class="flex-1">
                <h3 class="font-medium text-2xl text-primary">Contact Us</h3>
                <div>
                    {{ $this->form }}
                    <button class="w-full bg-primary text-white p-2 rounded mt-4">Send</button>
                </div>
            </div>
            <div>
                <h3 class="font-medium text-2xl text-primary">Contact</h3>
                <div class="flex flex-col gap-4 mt-4">
                    @forelse ($details->contents as $detail)
                        <div>
                            <h5 class="text-primary">{{ $detail['title'] }}</h5>
                            <p>{{ $detail['content'] }}</p>
                        </div>
                    @empty
                        <p>No contact details found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

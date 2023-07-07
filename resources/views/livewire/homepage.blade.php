<div>
    <div class="bg-primary relative py-16">
        <div class="bg-gradient-to-t pointer-events-none bg-opacity-90 from-black via-transparent to-transparent absolute inset-0"></div>
        <div class="flex justify-center">
            <div class="w-1/2 flex justify-center">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </div>
            <div class="w-1/2 flex flex-col justify-center">
                <div class="text-white w-2/3">
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
        </div>
        <div class="flex justify-center mt-16 relative z-10">
            <x-filament-support::modal>
                <x-slot:trigger>
                    <button @click="open" class="px-12 rounded-full py-4 bg-white font-medium text-xl hover:bg-slate-200 duration-300 text-primary">APPLY NOW</button>
                </x-slot:trigger>
                <div class="text-primary">
                    <h3>SEND US YOUR PROPOSAL</h3>
                    <form wire:submit.prevent="propose" @proposed.window="close" class="mt-4">
                        {{ $this->form }}
                        <div class="flex gap-4 mt-4">
                            <button wire:loading.disabled type="submit" class="bg-primary text-white flex items-center gap-2 justify-center flex-1 py-2 rounded">
                                <x-ri-refresh-line wire:loading class="animate-spin w-4" />
                                <span>Submit</span>
                            </button>
                            <button wire:loading.disabled class="bg-gray-300 text-white flex-1 py-2 rounded" @click="close">Cancel</button>
                        </div>
                    </form>
                </div>
            </x-filament-support::modal>
        </div>
    </div>
    <div class="p-12">
        <h4 class="font-medium text-primary">Upcoming Events</h4>
        <div class="flex mt-8 items-stretch">
            <div class="flex-1">
                <h3 class="text-2xl font-medium text-primary">Light, Fast & Powerful</h3>
                <p class="prose max-w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est error vel laboriosam neque, minus qui ipsam sint rerum? Modi saepe nostrum expedita sit nihil possimus accusantium aspernatur soluta. Dolores fugit veniam pariatur nisi dicta minus maiores repudiandae sint blanditiis impedit consequatur, in, corporis vel sapiente assumenda veritatis totam
                    repellat rerum quidem!
                </p>
            </div>
            <div class="w-1 mx-16 bg-primary"></div>
            <div class="flex-1">
                <h3 class="text-2xl font-medium text-primary">Light, Fast & Powerful</h3>
                <p class="prose max-w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est error vel laboriosam neque, minus qui ipsam sint rerum? Modi saepe nostrum expedita sit nihil possimus accusantium aspernatur soluta. Dolores fugit veniam pariatur nisi dicta minus maiores repudiandae sint blanditiis impedit consequatur, in, corporis vel sapiente assumenda veritatis totam
                    repellat rerum quidem!
                </p>
            </div>
        </div>
    </div>
    <section x-data x-init="new Splide($el).mount()" class="splide bg-gray-200" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                @for ($i = 0; $i < 3; $i++)
                    <li class="splide__slide">
                        <div class="flex">
                            <div class="flex-1 flex flex-col p-16">
                                <h3 class="text-2xl font-medium text-primary">Kristine Mae H. Ampas</h3>
                                <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil unde nemo qui dolorum odit atque nostrum, maxime, accusamus magni explicabo voluptas reprehenderit deleniti eligendi sequi ea ipsam perferendis. Saepe ipsam beatae, explicabo ad nobis amet nam ipsum pariatur. Facilis fugit magni neque repudiandae excepturi provident harum laboriosam
                                    architecto ullam
                                    fugiat.
                                </p>
                            </div>
                            <div class="flex-1 h-96">
                                <img class="mx-auto h-full" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2" alt="executive">
                            </div>
                        </div>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
    <div class="p-8">
        <h3 class="text-center text-2xl text-primary">"Moving Technopreneurship <strong>SK</strong>yhigh"</h3>
    </div>
</div>

<x-mail::message>
    # New Proposal Submission

    Startup Name: {{ $proposal->startup_name }}

    Members:
    @foreach ($proposal->members as $member)
        {{ $member }}
    @endforeach

    Logo:
    <x-mail::button :url="$proposal->getFirstMedia('logo')->getUrl()">Logo</x-mail::button>

    Proposal:
    <x-mail::button :url="$proposal->getFirstMedia('proposal')->getUrl()">Proposal</x-mail::button>

</x-mail::message>

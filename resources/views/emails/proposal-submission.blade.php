<x-mail::message>
# New Proposal Submission

Startup Name: {{ $proposal->startup_name }}

Members:
@foreach ($proposal->members as $member)
    {{ $member }}
@endforeach

<x-mail::button :url="$proposal->getFirstMedia('logo')->getUrl()">View Logo</x-mail::button>
<x-mail::button :url="$proposal->getFirstMedia('proposal')->getUrl()">View Proposal</x-mail::button>

</x-mail::message>

@switch($status)
    @case('approved')
        <p>Congratulations, your passport status is approved. You can collect your passport here.</p>
        @break
    @case('rejected')
        <p>Sorry, your passport status is rejected. We will get back to you soon.</p>
    @break

    @case('pending')
        <p>Your passport is under review. We will get back to you soon.</p>
    @break
    @default
        <p>Your passport is under review.</p>
@endswitch
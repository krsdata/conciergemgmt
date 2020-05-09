{{--<p>@if(isset($body)){{ $body }}@endif@if(isset($pleaseAskYourQuestionHere)){{ $pleaseAskYourQuestionHere }}@endif</p>--}}

{{--<p>Sender : @if(isset($name)){{ $name }}@endif</p>--}}
{{--<p>Email : @if(isset($email)){{ $email }}@endif</p>--}}

@if(isset($data))
    @foreach($data as $k => $v)
        <p>
        <?php 
        	$v = str_replace("T00:00:00", "", $v);
        	echo ucwords($k) ." : ". $v ?></p>
        @endforeach
    @endif


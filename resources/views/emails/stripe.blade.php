@if(isset($data1))
   Boat choice: {{ $data1['boat'] }} <br/>
   Mr/Mrs. {{ $data1['username'] }} PAID ${{ $data1['amount'] }} via stripe for date {{ $data1['reservation'] }}
    @endif
@if(isset($data2))
	You have paid ${{ $data2['amount'] }} successfully via stripe for Coastal Concierge
@endif
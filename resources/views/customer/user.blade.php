@if(isset($query->id))
    @if($query->user_type === 'user')
        <a href="{{ route('booking.index', ['customer_id' => $query->id]) }}">
            <div class="d-flex gap-3 align-items-center">
                <img src="{{ getSingleMedia($query, 'profile_image', null) }}" alt="avatar" class="avatar avatar-40 rounded-pill">
                <div class="text-start">
                    <h6 class="m-0">{{ $query->first_name }} {{ $query->last_name }}</h6>
                    <span>{{ $query->email ?? '--' }}</span>
                </div>
            </div>
        </a>
    @elseif($query->user_type === 'provider')
        <a href="{{ route('provider_info', $query->id) }}">
            <div class="d-flex gap-3 align-items-center">
                <img src="{{ getSingleMedia($query, 'profile_image', null) }}" alt="avatar" class="avatar avatar-40 rounded-pill">
                <div class="text-start">
                    <h6 class="m-0">{{ $query->first_name }} {{ $query->last_name }}</h6>
                    <span>{{ $query->email ?? '--' }}</span>
                </div>
            </div>
        </a>
    @elseif($query->user_type === 'handyman')
        <a href="{{ route('handyman.detail', ['id' => $query->id]) }}">
            <div class="d-flex gap-3 align-items-center">
                <img src="{{ getSingleMedia($query, 'profile_image', null) }}" alt="avatar" class="avatar avatar-40 rounded-pill">
                <div class="text-start">
                    <h6 class="m-0">{{ $query->display_name }}</h6>
                    <span>{{ $query->email ?? '--' }}</span>
                </div>
            </div>
        </a>
    @elseif($query->user_type === 'company')
        <a href="{{ route('company.detail', ['id' => $query->id]) }}">
            <div class="d-flex gap-3 align-items-center">
                <img src="{{ getSingleMedia($query, 'profile_image', null) }}" alt="avatar" class="avatar avatar-40 rounded-pill">
                <div class="text-start">
                    <h6 class="m-0">{{ $query->display_name }}</h6>
                    <span>{{ $query->email ?? '--' }}</span>
                </div>
            </div>
        </a>
    @elseif($query->user_type === 'store')
        <a href="{{ route('store.detail', ['id' => $query->id]) }}">
            <div class="d-flex gap-3 align-items-center">
                <img src="{{ getSingleMedia($query, 'profile_image', null) }}" alt="avatar" class="avatar avatar-40 rounded-pill">
                <div class="text-start">
                    <h6 class="m-0">{{ $query->display_name }}</h6>
                    <span>{{ $query->email ?? '--' }}</span>
                </div>
            </div>
        </a>
    @else
        <div class="align-items-center">
            <h6 class="text-center">-</h6>
        </div>
    @endif
@else
  <div class="align-items-center">
    <h6 class="text-center">-</h6>
  </div>
@endif



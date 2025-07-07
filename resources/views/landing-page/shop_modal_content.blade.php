<div class="mb-4">
    <div class="row g-3">
        <div class="col-md-6 service_box">
            <div class="img-details img-box img-box1">
                <img src="{{ $shop->getFirstMediaUrl('shop_attachment') ?? asset('default.png') }}" />

                <svg class="shop-whishlist " width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg" data-id="{{$shop->id}}">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.43593 6.29916C0.899433 4.62416 1.52643 2.70966 3.28493 2.14316C4.20993 1.84466 5.23093 2.02066 5.99993 2.59916C6.72743 2.03666 7.78593 1.84666 8.70993 2.14316C10.4684 2.70966 11.0994 4.62416 10.5634 6.29916C9.72843 8.95416 5.99993 10.9992 5.99993 10.9992C5.99993 10.9992 2.29893 8.98516 1.43593 6.29916Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M8 3.84998C8.535 4.02298 8.913 4.50048 8.9585 5.06098" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>

        @if($shop->discount)
        <div class="col-md-6">
            <label class="form-label text-muted mb-0">Discount</label>
            <div class="fw-medium">{{ (int) ($shop->discount ?? 0) }}%</div>
        </div>
        @endif
    </div>
</div>
<hr>

<div class="mb-4">
    <h6 class="text-primary fw-semibold mb-3">General Information</h6>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label text-muted mb-0">Name</label>
            <div class="fw-medium">{{ $shop->name }}</div>
        </div>
        <div class="col-md-6">
            <label class="form-label text-muted mb-0">Category</label>
            <div class="fw-medium">{{ @getShopCategoryByID($shop->category_id) ?? '' }}</div>
        </div>

        @if($shop->description)
        <div class="col-12">
            <label class="form-label text-muted mb-0">Description</label>
            <div class="fw-medium">{{ $shop->description ?? '' }}</div>
        </div>
        @endif
    </div>
</div>

<hr>

<div class="mb-4">
    <h6 class="text-primary fw-semibold mb-3">Contact Details</h6>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label text-muted mb-0">Phone</label>
            <div class="fw-medium">{{ $shop->phone ?? '' }}</div>
        </div>
        <div class="col-md-6">
            <label class="form-label text-muted mb-0">Email</label>
            <div class="fw-medium">{{ $shop->email ?? '' }}</div>
        </div>
        <div class="col-12">
            <label class="form-label text-muted mb-0">Address</label>
            <div class="fw-medium">{{ $shop->address ?? '' }}</div>
        </div>
        <div class="col-12">
            <label class="form-label text-muted mb-0">Map Link</label>
            <div>
                @if($shop->map_link)
                <a href="{{ $shop->map_link }}" target="_blank" class="text-decoration-underline">View on Google Maps</a>
                @else
                <span class="text-muted"></span>
                @endif
            </div>
        </div>
    </div>
</div>
<hr>
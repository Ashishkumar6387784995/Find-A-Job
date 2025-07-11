


<div class="mb-4">
    <h6 class="text-primary fw-semibold mb-3">General Information</h6>
    <div class="row g-3">
        <div class="col-md-6">
        <div class="col-12">
            <label class="form-label text-muted mb-0">Name</label>
            <div class="fw-medium">{{ $shop->name }}</div>
        </div>
        <div class="col-12 mt-3">
            <label class="form-label text-muted mb-0">Category</label>
            <div class="fw-medium">{{ @getShopCategoryByID($shop->category_id) ?? '' }}</div>
        </div>

        @if($shop->description)
        <div class="col-12 mt-3">
            <label class="form-label text-muted mb-0">Description</label>
            <div class="fw-medium">{{ $shop->description ?? '' }}</div>
        </div>
        @endif
        </div>
         <div class="col-md-6">
            <div class="col-12 service_box">
            <div class="img-details img-box img-box1">
                <img src="{{ $shop->getFirstMediaUrl('shop_attachment') ?? asset('default.png') }}" />

                <button type="button" class="btn btn-heart-c btn-light bg-white rounded-circle text-primary p-0 avatar-30 btn btn-light bg-white rounded-circle shop-whishlist text-primary p-0 avatar-30 delete_fav lh-normal" data-id="{{$shop->id}}">
                    <svg width="16" height="16" viewBox="0 0 12 13" xmlns="http://www.w3.org/2000/svg" fill="{{ $shop->isFavourite ? 'currentColor' : 'none' }}">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.43593 6.29916C0.899433 4.62416 1.52643 2.70966 3.28493 2.14316C4.20993 1.84466 5.23093 2.02066 5.99993 2.59916C6.72743 2.03666 7.78593 1.84666 8.70993 2.14316C10.4684 2.70966 11.0994 4.62416 10.5634 6.29916C9.72843 8.95416 5.99993 10.9992 5.99993 10.9992C5.99993 10.9992 2.29893 8.98516 1.43593 6.29916Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 3.84998C8.535 4.02298 8.913 4.50048 8.9585 5.06098" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        @if($shop->discount)
        <div class="col-12 text-center">
            <label class="form-label text-muted mb-0">Discount  <span class="fw-medium-discount">{{ (int) ($shop->discount ?? 0) }}% OFF</span></label>
        </div>
        @endif
         </div>
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
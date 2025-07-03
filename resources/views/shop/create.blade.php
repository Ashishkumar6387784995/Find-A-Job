<x-master-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch">
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-between align-items-center p-3 flex-wrap gap-3">
                            <h5 class="fw-bold">{{ $pageTitle ?? __('messages.list') }}</h5>
                            <a href="{{ route('service.index') }}" class=" float-end btn btn-sm btn-primary"><i
                                    class="fa fa-angle-double-left"></i> {{ __('messages.back') }}</a>
                            @if($auth_user->can('service list'))
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                         {{ html()->form('POST', route('service.store'))
                            ->attribute('enctype', 'multipart/form-data')
                            ->attribute('data-toggle', 'validator')
                            ->id('service')
                            ->open()
                        }}
                        {{ html()->hidden('id',$servicedata->id ?? null) }}

                        @include('partials._language_toggale')
                        @foreach($language_array as $language)
                        <div id="form-language-{{ $language['id'] }}" class="language-form" style="display: {{ $language['id'] == app()->getLocale() ? 'block' : 'none' }};">
                        
                            <div class="row">
                                @foreach(['name' => __('messages.name'), 'description' => __('messages.description')] as $field => $label)
                                <div class="form-group col-md-{{ $field === 'name' ? '4' : '12' }}">
                                    {{ html()->label($label . ($field === 'name' ? ' <span class="text-danger">*</span>' : ''), $field)->class('form-control-label language-label') }}

                                    @php
                                        $value = $language['id'] == 'en' 
                                            ? $servicedata ? $servicedata->translate($field, 'en') : '' 
                                            : ($servicedata ? $servicedata->translate($field, $language['id']) : '');
                                        $name = $language['id'] == 'en' ? $field : "translations[{$language['id']}][$field]";
                                    @endphp

                                    @if($field === 'name')
                                        {{ html()->text($name, $value)
                                            ->placeholder($label)
                                            ->class('form-control')
                                            ->attribute('title', 'Please enter alphabetic characters and spaces only')
                                            ->attribute('data-required', 'true') }}
                                    @else
                                        {{ html()->textarea($name, $value)
                                            ->class('form-control textarea')
                                            ->rows(3)
                                            ->placeholder($label) }}
                                    @endif

                                    <small class="help-block with-errors text-danger"></small>
                                </div>
                                @endforeach

                                <!-- Category Selection -->
                                <div class="form-group col-md-4">
                                    {{ html()->label(__('messages.select_name', ['select' => __('messages.category')]) . ' <span class="text-danger">*</span>', 'category_id')->class('form-control-label') }}
                                    <select name="category_id"
                                            id="category_id_{{ $language['id'] }}"
                                            class="form-control select2js-category"
                                            data-select2-type="category"
                                            data-selected-id="{{ $servicedata->category_id ?? '' }}"
                                            data-language-id="{{ $language['id'] }}"
                                            data-ajax--url="{{ route('ajax-list', ['type' => 'category', 'language_id' => $language['id']]) }}"
                                            data-placeholder="{{ __('messages.select_name', ['select' => __('messages.category')]) }}" >
                                    </select>
                                    <small class="help-block with-errors text-danger"></small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            
                            <div class="form-group col-md-4">
                                {{ html()->label( __('messages.select_name',[ 'select' => __('messages.provider_address') ]),'name')->class('form-control-label') }}
                                <br />
                                {{ html()->select('provider_address_id[]', [], old('provider_address_id'))
                                        ->class('select2js form-group provider_address_id')
                                        ->id('provider_address_id')
                                        ->multiple()
                                        ->attribute('data-placeholder', __('messages.select_name', ['select' => __('messages.provider_address')]))
                                }}
                            </div> 

                            <div class="form-group col-md-4" id="discount_div">
                                {{ html()->label(__('messages.discount') . ' %', 'discount')->class('form-control-label') }}
                                {{ html()->number('discount',null)->attributes(['min' => 0,'max' => 99, 'step' => 'any'])->placeholder(__('messages.discount'))->class('form-control')->id('discount')}}

                                <span id="discount-error" class="text-danger"></span>
                            </div>


                            <div class="form-group col-md-4">
                                {{ html()->label(__('messages.status') . ' <span class="text-danger">*</span>', 'status')->class('form-control-label') }}
                                {{ html()->select('status',['1' => __('messages.active'), '0' => __('messages.inactive')], $servicedata->status)->class('form-control select2js')->required()}}
                            </div>
                            

                            <div class="form-group col-md-4">
                                <label class="form-control-label" for="service_attachment">{{ __('messages.image') }} <span class="text-danger">*</span>
                                    </label>
                                    <div class="custom-file">
                                    <input type="file" onchange="preview()"  name="service_attachment[]" class="custom-file-input"
                                        data-file-error="{{ __('messages.files_not_allowed') }}" multiple accept="image/*"  required>
                                    <label
                                        class="custom-file-label upload-label">{{ __('messages.choose_file',['file' =>  __('messages.attachments') ]) }}</label>
                                    </div>
                                </div>
                            </div>
    
    
                            <div class="row service_attachment_div">
                                <div class="col-md-12">
                                    @if(getMediaFileExit($servicedata, 'service_attachment'))
                                    @php
    
                                    $attchments = $servicedata->getMedia('service_attachment');
    
                                    $file_extention = config('constant.IMAGE_EXTENTIONS');
                                    @endphp
                                <div class="border-start">
                                    <p class="ms-2"><b>{{ __('messages.attached_files') }}</b></p>
                                    <div class="ms-2 my-3">
                                            <div class="row">
                                                @foreach($attchments as $attchment )
                                                @php 
                                                    $filePath = 'storage/'.$attchment->id .'/'.$attchment->file_name;
                                                @endphp
                                                <?php
                                                $extention = in_array(strtolower(imageExtention($attchment->getFullUrl())), $file_extention);
                                                ?>   
                                            <div class="col-md-2 pe-10 text-center galary file-gallary-{{$servicedata->id}} position-relative"
                                                    data-gallery=".file-gallary-{{$servicedata->id}}"
                                                    id="service_attachment_preview_{{$attchment->id}}">
                                                    @if($extention)
                                                    <a id="attachment_files" href="{{asset($filePath) }}"
                                                        class="list-group-item-action attachment-list" target="_blank">
                                                        <img src="{{asset($filePath) }}" class="attachment-image"
                                                            alt="">
                                                    </a>
                                                    @else
                                                    <a id="attachment_files"
                                                        class="video list-group-item-action attachment-list"
                                                        href="{{asset($filePath) }}">
                                                        <img src="{{ asset('images/file.png') }}" class="attachment-file">
                                                    </a>
                                                    @endif
                                                    <a class="text-danger remove-file"
                                                        href="{{ route('remove.file', ['id' => $attchment->id, 'type' => 'service_attachment']) }}"
                                                        data--submit="confirm_form" data--confirmation='true'
                                                        data--ajax="true" data-toggle="tooltip"
                                                        title='{{ __("messages.remove_file_title" , ["name" =>  __("messages.attachments") ] ) }}'
                                                        data-title='{{ __("messages.remove_file_title" , ["name" =>  __("messages.attachments") ] ) }}'
                                                        data-message='{{ __("messages.remove_file_msg") }}'>
                                                        <i class="ri-close-circle-line"></i>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="row">
                                <!-- <div class="form-group col-md-12">
                                    {{ html()->label(__('messages.description'), 'description')->class('form-control-label') }}
                                    {{ html()->textarea('description', $servicedata->description)->class('form-control textarea')->rows(3)->placeholder(__('messages.description')) }}
                                </div> -->
                                @if(!empty( $slotservice) && $slotservice == 1)
                                <div class="form-group col-md-3">
                                    <div class="custom-control custom-switch">
                                        {{ html()->checkbox('is_slot', $servicedata->is_slot)->class('custom-control-input')->id('is_slot')}}
                                        <label class="custom-control-label"
                                            for="is_slot">{{ __('messages.slot') }}</label>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group col-md-3">
                                    <div class="custom-control custom-switch">
                                        {{ html()->checkbox('is_featured', $servicedata->is_featured)->class('custom-control-input')->id('is_featured')}}
                                        <label class="custom-control-label"
                                            for="is_featured">{{ __('messages.set_as_featured') }}</label>
                                    </div>
                            </div>
    
                            {{ html()->submit( __('messages.save'))->class('btn btn-md btn-primary float-end') }}
                            {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
    $data = $servicedata->providerServiceAddress->pluck('provider_address_id')->implode(',');
    @endphp
    @section('bottom_script')
    <script type="text/javascript">
     function preview() {
        service_attachment_preview.src = URL.createObjectURL(event.target.files[0]);
    }
    var discountInput = document.getElementById('discount');
    var discountError = document.getElementById('discount-error');
           
    discountInput.addEventListener('input', function() {
        var discountValue = parseFloat(discountInput.value);
        if (isNaN(discountValue) || discountValue < 0 || discountValue > 99) {
            discountError.textContent = "{{ __('Discount value should be between 0 to 99') }}";
        } else {
            discountError.textContent = "";
        }
    });

    var isEnableAdvancePayment = $("input[name='is_enable_advance_payment']").prop('checked');

    var priceType = $("#price_type").val();

    enableAdvancePayment(priceType);
    checkEnablePayment(isEnableAdvancePayment);

    

    (function($) {
        "use strict";
        $(document).ready(function() {
            var provider_id = "{{ isset($servicedata->provider_id) ? $servicedata->provider_id : '' }}";
            var provider_address_id = "{{ isset($data) ? $data : [] }}";

            var category_id = "{{ isset($servicedata->category_id) ? $servicedata->category_id : '' }}";
            var subcategory_id =
                "{{ isset($servicedata->subcategory_id) ? $servicedata->subcategory_id : '' }}";

            var price_type = "{{ isset($servicedata->type) ? $servicedata->type : '' }}";


            $(document).on('change', '#category_id', function() {
                var category_id = $(this).val();
                $('#subcategory_id').empty();
                getSubCategory(category_id, subcategory_id);
            })
            

            $('.galary').each(function(index, value) {
                let galleryClass = $(value).attr('data-gallery');
                $(galleryClass).magnificPopup({
                    delegate: 'a#attachment_files',
                    type: 'image',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,
                            1
                        ] // Will preload 0 - before current, and 1 after the current image
                    },
                    callbacks: {
                        elementParse: function(item) {
                            if (item.el[0].className.includes('video')) {
                                item.type = 'iframe',
                                    item.iframe = {
                                        markup: '<div class="mfp-iframe-scaler">' +
                                            '<div class="mfp-close"></div>' +
                                            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                                            '<div class="mfp-title">Some caption</div>' +
                                            '</div>'
                                    }
                            } else {
                                item.type = 'image',
                                    item.tLoading = 'Loading image #%curr%...',
                                    item.mainClass = 'mfp-img-mobile',
                                    item.image = {
                                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                                    }
                            }
                        }
                    }
                })
            })
        })
    })(jQuery);

    document.addEventListener('DOMContentLoaded', function() { 
        checkImage();
    });
    function checkImage() { 
        var id = @json($servicedata->id); 
        var route = "{{ route('check-image', ':id') }}";
        route = route.replace(':id', id);  
        var type = 'service';

        $.ajax({
            url: route,
            type: 'GET',   
            data: {
                type: type,   
            }, 
            success: function(result) {  
                var attachments = result.results;  

                if (attachments.length === 0) { 
                    $('input[name="service_attachment[]"]').attr('required', 'required');
                } else { 
                    $('input[name="service_attachment[]"]').removeAttr('required');
                }         
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);  
            }
        });
    }
    </script>
    @endsection
</x-master-layout>
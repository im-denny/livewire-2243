<div id="place-ad-comp">
@php
$randomKey = time().mt_rand(100000,999999);
@endphp
<div class="section" wire:key="update-ad-fileupload-section-{{$randomKey}}">
    <div class="section__content-wrapper" wire:key="update-ad-fileupload-section__content-wrapper-{{$randomKey}}">
        <div class="form__section-wrapper" wire:key="update-ad-fileupload-form__section-wrapper-{{$randomKey}}">
            <div class="formadvertisement__upload--wrapper" wire:key="update-ad-fileupload-section-upload-wrapper-{{$randomKey}}">
                <div class="form__section-title" wire:key="update-ad-fileupload-fomr__section-title-{{$randomKey}}">
                    <h3 wire:key="update-ad-fileupload-section-h3-{{$randomKey}}">Upload Photos</h3>
                </div>
                <div class="fileupload__dropzone-wrapper" wire:key="update-ad-fileupload-section-dropzone-wrapper-{{$randomKey}}">
                    <div wire:key="update-ad-fileupload-section-alpine-declaration-{{$randomKey}}">
                        <div wire:key="rotation-alpine-declaration-{{$randomKey}}">
                            <div id="simpleList" wire:sortable="changeOrder" class="fileupload__dropzoneitems-grid" wire:key="simple-list-{{$randomKey}}">
                                @foreach ($fileuploads as $file_key => $fileupload)
                                @php
                                $is_lw_object = (gettype($fileupload) == 'array') ? false : true;
                                $unique_hash = $is_lw_object ? preg_replace('/[^a-z0-9]/i','',explode('.',explode('/',$fileupload->temporaryUrl())[5])[0])
                                                    : preg_replace('/[^a-z0-9]/i','',$fileupload['filename']);
                                @endphp
                                <div class="fileupload__dropzone-item" wire:sortable.item="{{ $unique_hash }}" wire:key="fileupload-div-{{$unique_hash}}-{{$file_key}}-{{$randomKey}}">
                                    {{-- Image box start --}}
                                    <img wire:sortable.handle class="fileupload__dropzone-image" width:100px; src="{{ $is_lw_object ? ($fileupload->temporaryUrl()) : (asset('img/' . $fileupload['filename'] . '')) }}" wire:key="fileupload__dropzone-image-{{$unique_hash}}-{{$file_key}}-{{$randomKey}}">
                                    {{-- Image box end --}}
                                </div>
                                @endforeach
                                {{-- Plus button box start --}}
                                <label for="file-upload"
                                    wire:key="file-upload-label-{{$randomKey}}"
                                    class="fileupload__dropzone js-remove @if ($fileuploads) fileupload__dropzone-small @endif   ">
                                    <img src="{{ asset('img\plus-circle-light.svg') }}" wire:key="plus-button-{{$randomKey}}"/>
                                </label>
                                <input id="file-upload" type="file" accept="image/x-png,image/jpg,image/jpeg,image/png,.heic" wire:model.defer="fileuploads" multiple hidden wire:key="file-upload-input-{{$randomKey}}"/>
                                {{-- Plus button box end --}}
                            </div>
                        </div>
                        @error('fileuploads') <div class="form__error">{{ $message }}</div> @enderror
                        @error('fileuploads.*') <div class="form__error">{{ $message }}</div> @enderror
                        @error('newfileuploads.*') <div class="form__error">{{ $message }}</div> @enderror
                        @error('maxfileupload') <div class="form__error">{{ $message }}</div> @enderror
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>
